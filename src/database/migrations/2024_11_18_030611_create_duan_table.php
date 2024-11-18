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
        Schema::create('duan', function (Blueprint $table) {
            $table->id('maduan');
            $table->string('tenduan', 255)->nullable();
            $table->string('motaduan', 255)->nullable();
            $table->string('noilamviec', 255)->nullable();
            $table->dateTime('ngaybd')->nullable();
            $table->dateTime('ngaykt')->nullable();
            $table->string('lienketduan', 255)->nullable();
            $table->timestamps();
        });
    }


};
