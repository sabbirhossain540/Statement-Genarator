<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTransectionInfosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('transection_infos', function (Blueprint $table) {
            $table->id();
            $table->string('cus_id');
            $table->string('tr_date');
            $table->string('particulars');
            $table->string('instrument_no');
            $table->string('withdraw');
            $table->string('deposite');
            $table->string('balace');
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
        Schema::dropIfExists('transection_infos');
    }
}
