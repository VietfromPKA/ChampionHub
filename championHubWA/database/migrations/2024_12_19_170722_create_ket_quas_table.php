<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateKetQuaTable extends Migration
{
    /**
     * Chạy migration để tạo bảng 'ket_qua'.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ket_qua', function (Blueprint $table) {
            $table->id();  // Cột 'id' tự động tăng và là khóa chính
            $table->foreignId('doi_ban_id')->constrained('doi_ban')->onDelete('cascade');  // Khóa ngoại liên kết với bảng 'doi_ban'
            $table->integer('diem')->default(0);  // Cột 'diem' với giá trị mặc định là 0
            $table->timestamps();  // Cột 'created_at' và 'updated_at'
        });
    }

    /**
     * Thực hiện rollback để xóa bảng 'ket_qua' nếu cần.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('ket_qua');
    }
}
