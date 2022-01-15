<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePersonalDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('personal_details', function (Blueprint $table) {
            $table->increments("id");
            $table->string("name_kh", 100);
            $table->string("name_en", 100);
            $table->date("dob");
            $table->string("gender");
            $table->string("identity_no" ,20);
            $table->date("expiry_date");
            $table->string("marital_status", 10);
            $table->integer("child")->nullable();
            $table->string("department", 50);
            $table->string("position", 50);
            $table->string("mobile_phone", 20);
            $table->string("home_phone", 20);
            $table->double("monthly_income");
            $table->double("total_income");
            $table->text("address");
            $table->text("mortgage");
            $table->string("email");
            $table->boolean("status")->default("1");
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('personal_details');
    }
}
