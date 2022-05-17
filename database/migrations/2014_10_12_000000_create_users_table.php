<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->Increments('id');

            // $table->unsignedInteger('collage_id');
            // $table->foreign('collage_id')->references('id')->on('collages');

            // $table->unsignedInteger('university_id');
            // $table->foreign('university_id')->references('id')->on('universities');

            $table->string('name');
            $table->string('email');
            $table->string('password');
            $table->string('img')->nullable();
            $table->string('location');
            $table->date('birth');
            $table->enum('department',array('scientific','literary'));
            $table->float('arabicMark');
            $table->float('physicsMark');  
            $table->float('mathMark');     
            $table->float('chemistryMark');
            $table->float('englishMark');
            $table->float('totalPercentage');

            
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
        Schema::dropIfExists('users');
    }
}
