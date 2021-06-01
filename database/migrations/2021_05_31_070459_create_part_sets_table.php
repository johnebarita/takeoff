<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePartSetsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('part_sets', function (Blueprint $table) {
            $table->id();
            $table->string('set');
            $table->bigInteger('structure_part_id')->unsigned()->nullable();
            $table->foreign('structure_part_id')->references('id')->on('structure_parts');
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
        Schema::dropIfExists('part_sets');
    }
}
