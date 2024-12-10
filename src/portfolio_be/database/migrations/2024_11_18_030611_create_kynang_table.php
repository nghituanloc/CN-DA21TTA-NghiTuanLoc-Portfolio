<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('kynang', function (Blueprint $table) {
            $table->id('makynang');
            $table->unsignedBigInteger('manguoidung');
            $table->string('tenkynang', 255)->nullable();
            $table->string('motakynang', 255)->nullable();
            $table->foreign('manguoidung')->references('manguoidung')->on('nguoidung');
            $table->timestamps();
        });
    }


};
