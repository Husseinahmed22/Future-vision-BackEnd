<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

class CreateCollageUniversitiesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('collage_universities', function (Blueprint $table) {
            $table->Increments('id');

            $table->integer('collage_id')->unsigned()->nullable();
                
            $table->foreign('collage_id')->references('id')
                ->on('collages')->onUpdate('cascade')->onDelete('set null');

                $table->integer('uni_id')->unsigned()->nullable();
        
                $table->foreign('uni_id')->references('id')
                    ->on('universities')->onUpdate('cascade')->onDelete('set null');

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
        Schema::dropIfExists('collage_universities');
    }
}
