<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BankUse extends Model
{
    use HasFactory;

    protected $table = "bank_use";

    protected $fillable = [
        "branch",
        "application_code",
        "staff_name",
        "receive_date",
        "personal_id"
    ];


    public function get_province_fullname () {
        return $this->hasOne("App\Models\Branch", "branch_name", "branch");
    }

}
