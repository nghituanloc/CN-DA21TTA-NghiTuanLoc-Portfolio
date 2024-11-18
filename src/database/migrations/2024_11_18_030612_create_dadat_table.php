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
        Schema::create('dadat', function (Blueprint $table) {
            $table->unsignedBigInteger('manguoidung');
            $table->unsignedBigInteger('machungchi');
            $table->unsignedBigInteger('matochuc');
            $table->primary(['manguoidung', 'machungchi', 'matochuc']);
            $table->foreign('manguoidung')->references('manguoidung')->on('nguoidung');
            $table->foreign('machungchi')->references('machungchi')->on('chungchi');
            $table->foreign('matochuc')->references('matochuc')->on('tochuccapchungchi');
            $table->timestamps();
        });
    }


};
