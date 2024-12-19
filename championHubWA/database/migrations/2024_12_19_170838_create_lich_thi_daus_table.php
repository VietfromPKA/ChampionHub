<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('lich_thi_dau', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('giai_dau_id');
            $table->unsignedBigInteger('doi_ban_1_id');
            $table->unsignedBigInteger('doi_ban_2_id');
            $table->dateTime('thoi_gian_thi_dau');
            $table->string('ket_qua')->nullable();
            $table->foreign('giai_dau_id')->references('id')->on('giai_dau')->onDelete('cascade');
            $table->foreign('doi_ban_1_id')->references('id')->on('doi_ban')->onDelete('cascade');
            $table->foreign('doi_ban_2_id')->references('id')->on('doi_ban')->onDelete('cascade');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('lich_thi_dau');
    }
};
