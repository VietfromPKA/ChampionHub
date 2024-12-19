<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        // Tạo bảng 'nguoi_dung'
        Schema::create('nguoi_dung', function (Blueprint $table) {
            // Tạo cột 'id' là khóa chính tự tăng
            $table->id();

            // Tạo cột 'ten_dang_nhap' kiểu chuỗi và đảm bảo là duy nhất
            $table->string('ten_dang_nhap')->unique();

            // Tạo cột 'mat_khau' kiểu chuỗi
            $table->string('mat_khau');

            // Tạo cột 'email' kiểu chuỗi và đảm bảo là duy nhất
            $table->string('email')->unique();

            // Tạo cột 'vai_tro' kiểu ENUM với 3 giá trị: 'quan_tri', 'nguoi_choi', 'nha_to_chuc'
            $table->enum('vai_tro', ['quan_tri', 'nguoi_choi', 'nha_to_chuc']);

            // Tạo cột 'created_at' và 'updated_at' (timestamp), giá trị mặc định là thời gian hiện tại
            $table->timestamps(0); // Cột 'created_at' và 'updated_at' sẽ không có phần giây
        });
    }

    public function down()
    {
        // Xóa bảng 'nguoi_dung' nếu cần rollback migration
        Schema::dropIfExists('nguoi_dung');
    }

};
