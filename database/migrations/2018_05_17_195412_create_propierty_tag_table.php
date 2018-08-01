<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePropiertyTagTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('propierty_tag', function (Blueprint $table) {
            $table->increments('id');
            
            $table->integer('propierty_id')->unsigned();
            $table->integer('tag_id')->unsigned();
            
            //relation
            $table->foreign('propierty_id')->references('id')->on('propierties')
                ->onDelete('cascade')
                ->onUpdate('cascade');

            $table->foreign('tag_id')->references('id')->on('tags')
                ->onDelete('cascade')
                ->onUpdate('cascade');
                
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
        Schema::dropIfExists('propierty_tag');
    }
}
