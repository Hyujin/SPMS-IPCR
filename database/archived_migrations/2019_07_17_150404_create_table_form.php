<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableForm extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Form_rating', function (Blueprint $table) {
            $table->increments('form_id')->index();
            //temporary while the team does not have access to employee id's/employee pk's/accounting system
            $table->integer('final_average_rating')->nullable();
            $table->integer('adjectival_rating')->nullable();
            $table->string('comments')->nullable();
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
        Schema::dropIfExists('Form_rating');
    }
}
