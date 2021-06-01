<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePartSetOverridesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('part_set_overrides', function (Blueprint $table) {
            $table->id();
            $table->string('override');
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
        Schema::dropIfExists('part_set_overrides');
    }
}
