<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePartComponentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('part_components', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->float('pitch')->nullable();
            $table->float('forEach')->nullable();
            $table->float('factor')->nullable();
            $table->float('waste')->nullable();
            $table->bigInteger('structure_part_id')->unsigned()->nullable();
            $table->bigInteger('part_usage_id')->unsigned()->nullable();

            $table->foreign('structure_part_id')->references('id')->on('structure_parts');
            $table->foreign('part_usage_id')->references('id')->on('part_usages');
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
        Schema::dropIfExists('part_components');
    }
}
