<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LoanDetails extends Model
{
    use HasFactory;

    protected $table = "loan_details";

    protected $fillable = [
        "amount",
        "interest",
        "term",
        "purpose",
        "personal_id"
    ];

    public function personal_details () {
        return $this->hasOne("App\Models\PersonalDetails", "id");
    }
}
