<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGuarantorDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::disableForeignKeyConstraints();
        Schema::create('guarantor_details', function (Blueprint $table) {
            $table->increments("guarantor_id");
            $table->string("name_kh", 100);
            $table->string("name_en", 100);
            $table->date("dob");
            $table->string("identity_no" ,20);
            $table->date("expiry_date");
            $table->string("marital_status", 10);
            $table->string("department", 50);
            $table->string("position", 50);
            $table->string("mobile_phone", 20);
            $table->string("home_phone", 20);
            $table->double("monthly_income");
            $table->double("total_income");
            $table->text("address");
            $table->unsignedBigInteger("personal_id");
            $table->timestamps();
        });
        Schema::enableForeignKeyConstraints();
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::disableForeignKeyConstraints();
        Schema::dropIfExists('guarantor_details');
        Schema::enableForeignKeyConstraints();
    }
}
