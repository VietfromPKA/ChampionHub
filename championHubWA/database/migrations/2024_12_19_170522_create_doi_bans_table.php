<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGiaiDauTable extends Migration
{
    /**
     * Chạy migration để tạo bảng 'giai_dau'.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('giai_dau', function (Blueprint $table) {
            $table->id();  // Tạo cột 'id' tự động tăng và là khóa chính
            $table->string('ten_giai_dau');  // Tạo cột 'ten_giai_dau' kiểu chuỗi, không NULL
            $table->text('mo_ta')->nullable();  // Tạo cột 'mo_ta' kiểu TEXT, có thể NULL
            $table->date('ngay_bat_dau')->nullable();  // Tạo cột 'ngay_bat_dau' kiểu DATE, có thể NULL
            $table->date('ngay_ket_thuc')->nullable();  // Tạo cột 'ngay_ket_thuc' kiểu DATE, có thể NULL
            $table->enum('trang_thai', ['chuan_bi', 'dang_dien_ra', 'hoan_thanh'])->default('chuan_bi');  // Tạo cột 'trang_thai' kiểu ENUM
            $table->timestamps();  // Tạo cột 'created_at' và 'updated_at'
        });
    }

    /**
     * Thực hiện rollback để xóa bảng 'giai_dau' nếu cần.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('giai_dau');
    }
}
