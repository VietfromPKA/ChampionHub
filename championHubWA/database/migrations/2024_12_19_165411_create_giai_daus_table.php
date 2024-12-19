<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('giai_dau', function (Blueprint $table) {
            $table->id();

            $table->string(('ten_giai_dau'));

            $table->text('mo_ta')->nullable();

            $table->date('ngay_bat_dau')->nullable();

            $table->date('ngay_ket_thuc')->nullable();

            $table->enum('trang_thai', ['chuan_bi', 'dang_dien_ra', 'hoan_thanh'])->default('chuan_bi');

            $table->timestamps();

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('giai_dau');
    }
};
