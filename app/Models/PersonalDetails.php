<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PersonalDetails extends Model
{
    use HasFactory;

    protected $table = "personal_details";

    protected $fillable = [
        "name_kh",
        "name_en",
        "dob",
        "gender",
        "identity_no",
        "expiry_date",
        "marital_status",
        "department",
        "position",
        "mobile_phone",
        "home_phone",
        "monthly_income",
        "total_income",
        "email",
        "address",
        "mortgage",
        "status"
    ];

    public function loan_details () {
        return $this->belongsTo("App\Models\LoanDetails", "personal_id");
    }

}
