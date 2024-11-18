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
        Schema::create('vaitro', function (Blueprint $table) {
            $table->id('mavaitro');
            $table->string('tenvaitro', 30)->nullable();
            $table->timestamps();
        });
    }


};
