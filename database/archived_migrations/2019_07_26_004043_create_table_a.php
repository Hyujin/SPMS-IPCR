<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableA extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('op1s', function (Blueprint $table) {
            $table->increments('batch_id'); 
            $table->integer('form_id')->nullable();

            //I. Diffusion and transfer of knowledge technologies ...
            $table->string('op1_output')->nullable();
            $table->string('op1_success_indicator')->nullable();
            $table->string('op1_actual_accomplishments')->nullable();
            $table->string('op1_quality')->nullable();
            $table->integer('op1_efficiency')->nullable();
            $table->integer('op1_timeliness')->nullable();
            $table->integer('op1_average')->nullable();
            $table->string('op1_remarks')->nullable();
            $table->timestamps();


        });

        Schema::create('op2s', function (Blueprint $table) {
            $table->increments('batch_id'); 
            $table->integer('form_id');

            //II. Enhancement of Science and Technology project/activities
            $table->string('op2_output');
            $table->string('op2_success_indicator');
            $table->string('op2_actual_accomplishments');
            $table->string('op2_quality')->nullable();
            $table->integer('op2_efficiency')->nullable();
            $table->integer('op2_timeliness')->nullable();
            $table->integer('op2_average')->nullable();
            $table->string('op2_remarks')->nullable();
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
        Schema::dropIfExists('op1s');
        Schema::dropIfExists('op2s');

    }
}
