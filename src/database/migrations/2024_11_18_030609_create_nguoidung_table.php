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
        if (!Schema::hasTable('nguoidung')) {
            Schema::create('nguoidung', function (Blueprint $table) {
                $table->id('manguoidung');
                $table->string('tendangnhap', 255)->nullable();
                $table->string('matkhau', 255)->nullable();
                $table->string('hovaten', 255)->nullable();
                $table->string('email', 255)->nullable();
                $table->string('sdt', 10)->nullable();
                $table->string('diachi', 255)->nullable();
                $table->string('anhdaidien', 255)->nullable();
                $table->string('lienketgithub', 255)->nullable();
                $table->string('tentruongdaihoc', 255)->nullable();
                $table->string('bangcap', 255)->nullable();
                $table->string('tennganhhoc', 255)->nullable();
                $table->text('motabanthan')->nullable();
                $table->timestamps();
            });
        }
    }


};
