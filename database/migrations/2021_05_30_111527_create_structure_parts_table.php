<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStructurePartsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('structure_parts', function (Blueprint $table) {
            $table->id('id');
            $table->string('name');
            $table->boolean('hasQty')->default(0);
            $table->boolean('hasDepth')->default(0);
            $table->boolean('hasLength')->default(0);
            $table->boolean('hasWidth')->default(0);
            $table->boolean('hasThickness')->default(0);
            $table->boolean('hasHeight')->default(0);
            $table->boolean('hasEnter')->default(0);
            $table->boolean('hasPitch')->default(0);
            $table->boolean('hasLeave')->default(0);
            $table->boolean('hasDeduction')->default(0);
            $table->bigInteger('shed_structure_id')->unsigned()->nullable();
            $table->timestamps();

            $table->foreign('shed_structure_id')->references('id')->on('shed_structures');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('structure_parts');
    }
}
