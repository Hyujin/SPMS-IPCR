<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableForms extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
     public function up()
    {
        Schema::create('Forms', function (Blueprint $table) {
            $table->increments('id'); 
            $table->integer('form_id')->unsigned();
            $table->longtext('output');
            $table->longtext('success_indicator');
            $table->longtext('actual_accomplishments');
            $table->string('tag')->nullable();
            $table->string('quality')->nullable();
            $table->integer('efficiency')->nullable();
            $table->integer('timeliness')->nullable();
            $table->integer('average')->nullable();
            $table->string('remarks')->nullable();
            $table->string('no_outputs')->nullable();
            $table->string('weighted_allocation')->nullable();
            $table->string('average_rating')->nullable();
            $table->string('final_rating')->nullable();
            
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
        Schema::dropifExists('Forms');
    }
}
