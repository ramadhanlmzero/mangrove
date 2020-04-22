<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMangroveTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mangrove', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->uuid('kecamatan_id');
            $table->foreign('kecamatan_id')->references('id')->on('kecamatan')->onDelete('cascade');
            $table->double('luas', 8, 6);
            $table->double('persentase_luas', 8, 6);
            $table->integer('tahun');
            $table->string('kondisi');
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
        Schema::dropIfExists('mangrove');
    }
}
