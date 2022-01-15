<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTakeoffDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('takeoff_details', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('takeoff_id')->unsigned()->nullable();
            $table->bigInteger('shed_structure_id')->unsigned()->nullable();
            $table->bigInteger('items_id')->unsigned()->nullable();
            $table->string('usage');
            $table->integer('qty');
            $table->timestamps();

            $table->foreign('takeoff_id')->references('id')->on('takeoffs');
            $table->foreign('shed_structure_id')->references('id')->on('shed_structures');
            $table->foreign('items_id')->references('id')->on('items');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('takeoff_details');
    }
}
