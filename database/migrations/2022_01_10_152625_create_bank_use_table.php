<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBankUseTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bank_use', function (Blueprint $table) {
            $table->increments("bank_use_id");
            $table->string("application_code", 10);
            $table->string("staff_name", 100);
            $table->date("receive_date");
            $table->unsignedBigInteger("personal_id");
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
        Schema::dropIfExists('bank_use');
    }
}
