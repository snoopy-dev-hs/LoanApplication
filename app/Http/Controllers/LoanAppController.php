<?php

namespace App\Http\Controllers;

use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\UploadedFile;
use Brian2694\Toastr\Facades\Toastr;

/// PHP Mailer
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;



// Models
use App\Models\PersonalDetails;
use App\Models\GuarantorDetails;
use App\Models\LoanDetails;
use App\Models\BankUse;
use App\Models\Branch;

class LoanAppController extends Controller
{
    public function index ()
    {
        $query = "
            SELECT per.id, per.name_en, per.dob, per.mobile_phone, per.status, bra.branch_name AS branch, bu.application_code, bu.staff_name
            FROM personal_details per
            INNER JOIN bank_use bu ON bu.personal_id = per.id
            INNER JOIN branches bra ON bra.slug = bu.branch
            WHERE per.is_active = 1
            ORDER BY per.created_at desc;
        ";

        $datas = DB::select($query);

        return view("backend.loan-app.index")->with("datas", $datas);
    }

    public function create ()
    {
        $branches = Branch::where("is_active", 1)
            ->get();

        $num_record_db = PersonalDetails::count("id");

        return view("backend.loan-app.create2")
            ->with("num_record_db", $num_record_db)
            ->with("branches", $branches);
    }

    public function store (Request $request)
    {
        DB::beginTransaction();
        try {

            $images = "";

            if ($request->hasFile('filename')) {


                foreach ($request->filename as $key => $val) {
                    $type = $val->getClientOriginalExtension();
                    $data = file_get_contents($val);
                    $img = "data:image/" . $type . ";base64," . base64_encode($data) . " || ";

                    $images .= base64_encode($data);
                }

//                $personal2 = PersonalDetails::where("id", $personal_details->id);
//                $personal2->images = "$images";
//                $personal2->save();
            }

//            dd($images);


            /// Validate Data
            $validated = $request->validate([
                "per_name_kh" => "required",
                "per_name_en" => "required | string | max:100",
                "per_dob" => "required",
                "per_gender" => "required | string | max:20",
                "per_iden_no" => "required | max:20",
                "per_expiry_date" => "required",
                "per_department" => "required",
                "per_position" => "required",
                "per_marital_status" => "required",
                "per_mobile_phone" => "required",
                "per_home_phone" => "required",
                "per_email" => "required",
                "per_monthly_income" => "required",
                "per_total_income" => "required",
                "per_address" => "required",
                "per_mortgage" => "required",

                "gu_name_kh" => "required",
                "gu_name_en" => "required",
                "gu_dob" => "required",
                "gu_gender" => "required",
                "gu_iden_no" => "required",
                "gu_expiry_date" => "required",
                "gu_department" => "required",
                "gu_position" => "required",
                "gu_marital_status" => "required",
                "gu_mobile_phone" => "required",
                "gu_home_phone" => "required",
                "gu_email" => "required",
                "gu_monthly_income" => "required",
                "gu_total_income" => "required",
                "gu_address" => "required",
                "gu_mortgage" => "required",

                "ld_amount" => "required",
                "ld_interest" => "required",
                "ld_term" => "required",
                "ld_purpose" => "required",

                "bu_branch" => "required",
                "bu_app_code" => "required",
                "bu_staff_name" => "required",
                "bu_receive_date" => "required"
            ]);

            /// Insert Data to Personal Details
            $personal_details = PersonalDetails::create([
                "name_kh" => $request->per_name_kh,
                "name_en" => $request->per_name_en,
                "dob" => $request->per_dob,
                "gender" => $request->per_gender,
                "identity_no" => $request->per_iden_no,
                "expiry_date" => $request->per_expiry_date,
                "marital_status" => $request->per_marital_status,
                "department" => $request->per_department,
                "position" => $request->per_position,
                "mobile_phone" => $request->per_mobile_phone,
                "home_phone" => $request->per_home_phone,
                "monthly_income" => $request->per_monthly_income,
                "total_income" => $request->per_total_income,
                "email" => $request->per_email,
                "address" => $request->per_address,
                "mortgage" => $request->per_mortgage,
                "images" => $images,
                "status" => "1"
            ]);

            /// Insert Data To Guarantor Details
            $guarantor_details = GuarantorDetails::create([
                "name_kh" => $request->gu_name_kh,
                "name_en" => $request->gu_name_en,
                "dob" => $request->gu_dob,
                "gender" => $request->gu_gender,
                "identity_no" => $request->gu_iden_no,
                "expiry_date" => $request->gu_expiry_date,
                "marital_status" => $request->gu_marital_status,
                "department" => $request->gu_department,
                "position" => $request->gu_position,
                "mobile_phone" => $request->gu_mobile_phone,
                "home_phone" => $request->gu_home_phone,
                "monthly_income" => $request->gu_monthly_income,
                "total_income" => $request->gu_total_income,
                "address" => $request->gu_address,
                "mortgage" => $request->gu_mortgage,
                "email" => $request->gu_email,
                "personal_id" => $personal_details->id
            ]);

            /// Insert Data To Loan Details
            $loan_detail = LoanDetails::create([
                "amount" => $request->ld_amount,
                "interest" => $request->ld_interest,
                "term" => $request->ld_term,
                "purpose" => $request->ld_purpose,
                "personal_id" => $personal_details->id
            ]);

            /// Insert Data To Bank Use
            $bank_use = BankUse::create([
                "branch" => $request->bu_branch,
                "application_code" => $request->bu_app_code,
                "staff_name" => $request->bu_staff_name,
                "receive_date" => $request->bu_receive_date,
                "personal_id" => $personal_details->id
            ]);

            /// Upload Attachment
            /// -----
//            dd($personal_details->id);


            /// Sending Email
            /// -----
            ///
//            dd("successfully");

            DB::commit();
            toastr()->success("Record is Created Successfully ", "Success");
            return redirect()->route("loan.index");
        } catch (Exception $exception) {
            DB::rollback();
            return redirect()->back()->withInput()->withError(["message", $exception]);
        }
    }

    public function show ($id) {
        $branches = Branch::get();

        $personal = PersonalDetails::where("id", $id)->first();

        $guarantor = GuarantorDetails::where("personal_id", $id)->first();
        $ld = LoanDetails::where("personal_id", $id)->first();
        $bu = BankUse::where("personal_id", $id)->first();

        return view("backend.loan-app.show")
            ->with("branches", $branches)
            ->with("personal", $personal)
            ->with("guarantor", $guarantor)
            ->with("ld", $ld)
            ->with("bu", $bu);
    }

    public function edit ($id) {
        $branches = Branch::get();

        $personal = PersonalDetails::where("id", $id)->first();

        $guarantor = GuarantorDetails::where("personal_id", $id)->first();
        $ld = LoanDetails::where("personal_id", $id)->first();
        $bu = BankUse::where("personal_id", $id)->first();

        return view("backend.loan-app.edit")
            ->with("branches", $branches)
            ->with("personal", $personal)
            ->with("guarantor", $guarantor)
            ->with("ld", $ld)
            ->with("bu", $bu);
    }

    public function update (Request $request, $id) {
        DB::beginTransaction();
        try {
            /// Validate Data
            $validated = $request->validate([
                "per_name_kh" => "required",
                "per_name_en" => "required | string | max:100",
                "per_dob" => "required",
                "per_gender" => "required | string | max:20",
                "per_iden_no" => "required | max:20",
                "per_expiry_date" => "required",
                "per_department" => "required",
                "per_position" => "required",
                "per_marital_status" => "required",
                "per_mobile_phone" => "required",
                "per_home_phone" => "required",
                "per_email" => "required",
                "per_monthly_income" => "required",
                "per_total_income" => "required",
                "per_address" => "required",
                "per_mortgage" => "required",

                "gu_name_kh" => "required",
                "gu_name_en" => "required",
                "gu_dob" => "required",
                "gu_gender" => "required",
                "gu_iden_no" => "required",
                "gu_expiry_date" => "required",
                "gu_department" => "required",
                "gu_position" => "required",
                "gu_marital_status" => "required",
                "gu_mobile_phone" => "required",
                "gu_home_phone" => "required",
                "gu_email" => "required",
                "gu_monthly_income" => "required",
                "gu_total_income" => "required",
                "gu_address" => "required",
                "gu_mortgage" => "required",

                "ld_amount" => "required",
                "ld_interest" => "required",
                "ld_term" => "required",
                "ld_purpose" => "required",

                "bu_branch" => "required",
                "bu_staff_name" => "required",
                "bu_receive_date" => "required"
            ]);

            /// Get Slug Name from Branch
            $branches = Branch::get();
            foreach ($branches as $branch) {
                if ($branch->branch_name == $request->bu_branch) {
                    $bu_branch = $branch->slug;
                }
            }

            /// Update Data Into Personal Detail
            PersonalDetails::where("id", $id)
                ->update([
                    "name_kh" => $request->per_name_kh,
                    "name_en" => $request->per_name_en,
                    "dob" => $request->per_dob,
                    "gender" => $request->per_gender,
                    "identity_no" => $request->per_iden_no,
                    "expiry_date" => $request->per_expiry_date,
                    "marital_status" => $request->per_marital_status,
                    "department" => $request->per_department,
                    "position" => $request->per_position,
                    "mobile_phone" => $request->per_mobile_phone,
                    "home_phone" => $request->per_home_phone,
                    "monthly_income" => $request->per_monthly_income,
                    "total_income" => $request->per_total_income,
                    "email" => $request->per_email,
                    "address" => $request->per_address,
                    "mortgage" => $request->per_mortgage
                ]);

            /// Update Data Into Guarantor Detail
            GuarantorDetails::where("personal_id", $id)
                ->update([
                    "name_kh" => $request->gu_name_kh,
                    "name_en" => $request->gu_name_en,
                    "dob" => $request->gu_dob,
                    "gender" => $request->gu_gender,
                    "identity_no" => $request->gu_iden_no,
                    "expiry_date" => $request->gu_expiry_date,
                    "marital_status" => $request->gu_marital_status,
                    "department" => $request->gu_department,
                    "position" => $request->gu_position,
                    "mobile_phone" => $request->gu_mobile_phone,
                    "home_phone" => $request->gu_home_phone,
                    "monthly_income" => $request->gu_monthly_income,
                    "total_income" => $request->gu_total_income,
                    "address" => $request->gu_address,
                    "mortgage" => $request->gu_mortgage,
                    "email" => $request->gu_email
                ]);

            /// Update Data Into Loan Detail
            LoanDetails::where("personal_id", $id)
                ->update([
                    "amount" => $request->ld_amount,
                    "interest" => $request->ld_interest,
                    "term" => $request->ld_term,
                    "purpose" => $request->ld_purpose
                ]);

            /// Update Data Into Bank Use
            BankUse::where("personal_id", $id)
                ->update([
                    "branch" => $bu_branch,
                    "staff_name" => $request->bu_staff_name,
                    "receive_date" => $request->bu_receive_date
                ]);

            /// Update Attachment

            /// Send To Email

            /// Send To Telegram
//            dd("successfully");

            DB::commit();
            toastr()->success("Record is Updated Successfully ", "Success");
            return redirect()->route("loan.index");
        } catch(Exception $exception) {
            DB::rollback();
            return redirect()->back()->withInput()->withError(["message", $exception]);
        }
    }

    public function destroy ($id) {
        /// Update Data Into Personal Detail
        PersonalDetails::where("id", $id)
            ->update([
                "is_active" => "0"
            ]);

        return redirect()->route("loan.index");
    }

    public function review_list () {
        $query = "
            SELECT per.id, per.name_en, per.dob, per.mobile_phone, per.status, bra.branch_name AS branch, bu.application_code, bu.staff_name
            FROM personal_details per
            INNER JOIN bank_use bu ON bu.personal_id = per.id
            INNER JOIN branches bra ON bra.slug = bu.branch
            WHERE per.is_active = 1
            ORDER BY per.created_at desc;
        ";

        $datas = DB::select($query);

        return view("backend.loan-app.review_list")
            ->with("datas", $datas);
    }

    public function review_update (Request $request, $id) {
        $status = $request->submit == "approve" ? "2" : "0";
//        dd($status);
        PersonalDetails::where("id", $id)
            ->update([
                "status" => $status
            ]);
        toastr()->success("Record is Take Action Successfully ", "Success");
        return redirect()->route("loan.review.index");
    }
}
