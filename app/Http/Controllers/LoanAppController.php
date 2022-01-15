<?php

namespace App\Http\Controllers;

use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

// Models
use App\Models\PersonalDetails;
use App\Models\GuarantorDetails;
use App\Models\LoanDetails;
use App\Models\BankUse;

class LoanAppController extends Controller
{
    public function index ()
    {
        return view("backend.loan-app.index");
    }

    public function create ()
    {

        return view("backend.loan-app.create2");
    }

    public function store (Request $request)
    {
//        dd($request->all());
        DB::beginTransaction();
//        try {

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

//            dd("successfully");
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
                "mortgage" => $request->per_mortgage
            ]);

//            dd($personal_details->name_kh);

            dd("successfully");

            DB::commit();
            return redirect()->route("loan-app");
//        } catch (Exception $exception) {
//            DB::rollback();
//            return redirect()->back()->withInput()->withError(["message", $exception]);
//        }
    }
}
