<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSampelTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sampel', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->uuid('kecamatan_id');
            $table->foreign('kecamatan_id')->references('id')->on('kecamatan')->onDelete('cascade');
            $table->string('nama');
            $table->double('ph_air', 8, 4);
            $table->double('salinitas', 8, 4);
            $table->double('kadar_air', 8, 4);
            $table->double('nitrogen', 8, 4);
            $table->double('pasir', 8, 4);
            $table->double('lanau', 8, 4);
            $table->double('lempung', 8, 4);
            $table->uuid('created_by');
            $table->foreign('created_by')->references('id')->on('users')->onDelete('cascade');
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
        Schema::dropIfExists('sampel');
    }
}
