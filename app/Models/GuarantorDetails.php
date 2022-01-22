<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class GuarantorDetails extends Model
{
    use HasFactory;

    protected $table = "guarantor_details";

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
        "address",
        "mortgage",
        "email",
        "personal_id"
    ];
}
