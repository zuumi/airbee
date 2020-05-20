<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInnsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('inns', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->char('postal');
            $table->string('mail');
            $table->string('address');
            $table->datetime('checkintime');
            $table->datetime('checkouttime');
            $table->integer('code');
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
        Schema::dropIfExists('inns');
    }
}
