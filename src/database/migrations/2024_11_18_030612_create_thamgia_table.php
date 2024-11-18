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
        Schema::create('thamgia', function (Blueprint $table) {
            $table->unsignedBigInteger('manguoidung');
            $table->unsignedBigInteger('maduan');
            $table->unsignedBigInteger('mavaitro');
            $table->primary(['manguoidung', 'maduan', 'mavaitro']);
            $table->foreign('manguoidung')->references('manguoidung')->on('nguoidung');
            $table->foreign('maduan')->references('maduan')->on('duan');
            $table->foreign('mavaitro')->references('mavaitro')->on('vaitro');
            $table->timestamps();
        });
    }


};
