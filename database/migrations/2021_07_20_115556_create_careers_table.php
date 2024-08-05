<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCareersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('careers', function (Blueprint $table) {
            $table->integer('id', 11);
            $table->string('firstname', 50);
            $table->string('lastname', 50);
            $table->string('email', 191);
            $table->string('phone', 191);
            $table->string('expected_salary', 191);
            $table->string('experience', 191);
            $table->string('portfolio');
            $table->string('cv');
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
        Schema::dropIfExists('careers');
    }
}
