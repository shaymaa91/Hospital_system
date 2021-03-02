<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDoctorsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('doctors', function (Blueprint $table) {
            $table->id();
         $table->string('name');
         $table->string('degree');
         $table->string('username');
         $table->string('email');
         $table->integer('DOB');
         $table->boolean('gender');
         $table->Integer("department_id");
         $table->integer('specialist_id');
        
                $table->Integer("country_id");
         $table->Integer("charge");
         $table->string('phone');
         $table->string('image');
         $table->string('biography');
         $table->boolean('status');

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
        Schema::dropIfExists('doctors');
    }
}
