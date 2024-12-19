<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateThanhVienTable extends Migration
{
    /**
     * Chạy migration để tạo bảng 'thanh_vien'.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('thanh_vien', function (Blueprint $table) {
            $table->id();  // Cột 'id' tự động tăng và là khóa chính
            $table->foreignId('nguoi_dung_id')->constrained('nguoi_dung')->onDelete('cascade');  // Khóa ngoại liên kết với bảng 'nguoi_dung'
            $table->foreignId('doi_ban_id')->constrained('doi_ban')->onDelete('cascade');  // Khóa ngoại liên kết với bảng 'doi_ban'
            $table->timestamps();  // Cột 'created_at' và 'updated_at'
        });
    }

    /**
     * Thực hiện rollback để xóa bảng 'thanh_vien' nếu cần.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('thanh_vien');
    }
}
