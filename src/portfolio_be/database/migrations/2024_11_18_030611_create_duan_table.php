<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDuanTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('duan', function (Blueprint $table) {
            $table->id('maduan'); // Khóa chính, tự động tăng
            $table->unsignedBigInteger('manguoidung'); // Mã người dùng (liên kết tới bảng NGUOIDUNG)
            $table->string('noilamviec', 255)->nullable(); // Nơi làm việc (có thể null)
            $table->date('ngaybd')->nullable(); // Ngày bắt đầu (có thể null)
            $table->date('ngaykt')->nullable(); // Ngày kết thúc (có thể null)
            $table->string('tenduan', 255); // Tên dự án
            $table->string('motaduan', 255)->nullable(); // Mô tả dự án (có thể null)
            $table->string('lienketduan', 255)->nullable(); // Liên kết dự án (có thể null)
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
