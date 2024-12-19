<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Chạy migration để tạo bảng 'binh_luan'.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('binh_luan', function (Blueprint $table) {
            $table->id();  // Cột 'id' tự động tăng và là khóa chính
            $table->foreignId('nguoi_dung_id')->constrained('nguoi_dung')->onDelete('cascade');  // Khóa ngoại liên kết với bảng 'nguoi_dung'
            $table->foreignId('giai_dau_id')->constrained('giai_dau')->onDelete('cascade');  // Khóa ngoại liên kết với bảng 'giai_dau'
            $table->text('noi_dung');  // Cột 'noi_dung' kiểu TEXT
            $table->timestamps();  // Cột 'created_at' và 'updated_at'
        });
    }

    /**
     * Thực hiện rollback để xóa bảng 'binh_luan' nếu cần.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('binh_luan');
    }
};
