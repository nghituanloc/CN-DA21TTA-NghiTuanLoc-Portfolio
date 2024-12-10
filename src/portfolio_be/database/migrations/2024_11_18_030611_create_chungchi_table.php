<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateChungChiTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('chungchi', function (Blueprint $table) {
            $table->id('machungchi'); // Khóa chính, tự động tăng
            $table->unsignedBigInteger('manguoidung'); // Mã người dùng (liên kết tới bảng NGUOIDUNG)
            $table->string('tenchungchi', 255); // Tên chứng chỉ
            $table->string('tentochuccap', 255)->nullable(); // Tên tổ chức cấp chứng chỉ (có thể null)
            $table->timestamps(); // Thêm created_at và updated_at

            // Định nghĩa khóa ngoại
            $table->foreign('manguoidung')
                ->references('manguoidung')
                ->on('nguoidung')
                ->onUpdate('restrict')
                ->onDelete('restrict');
        });
    }


}
