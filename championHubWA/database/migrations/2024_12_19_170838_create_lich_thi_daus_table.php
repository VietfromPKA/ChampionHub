<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLichThiDauTable extends Migration
{
    /**
     * Chạy migration để tạo bảng 'lich_thi_dau'.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('lich_thi_dau', function (Blueprint $table) {
            $table->id();  // Cột 'id' tự động tăng và là khóa chính
            $table->foreignId('giai_dau_id')->constrained('giai_dau')->onDelete('cascade');  // Khóa ngoại liên kết với bảng 'giai_dau'
            $table->foreignId('doi_ban_1_id')->constrained('doi_ban')->onDelete('cascade');  // Khóa ngoại liên kết với bảng 'doi_ban'
            $table->foreignId('doi_ban_2_id')->constrained('doi_ban')->onDelete('cascade');  // Khóa ngoại liên kết với bảng 'doi_ban'
            $table->dateTime('thoi_gian_thi_dau');  // Cột 'thoi_gian_thi_dau' kiểu DATETIME
            $table->string('ket_qua')->nullable();  // Cột 'ket_qua' kiểu chuỗi, có thể NULL
            $table->timestamps();  // Cột 'created_at' và 'updated_at'
        });
    }

    /**
     * Thực hiện rollback để xóa bảng 'lich_thi_dau' nếu cần.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('lich_thi_dau');
    }
}
