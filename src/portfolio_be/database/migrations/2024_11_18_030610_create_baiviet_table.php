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
        if (!Schema::hasTable('baiviet')) { 
            Schema::create('baiviet', function (Blueprint $table) {
                $table->id('mabaiviet');
                $table->unsignedBigInteger('manguoidung');
                $table->string('tenbaiviet', 255)->nullable();
                $table->text('noidungbaiviet')->nullable();
                $table->dateTime('ngaydang')->nullable();
                $table->foreign('manguoidung')->references('manguoidung')->on('nguoidung');
                $table->timestamps();
            });
        }
    }


};