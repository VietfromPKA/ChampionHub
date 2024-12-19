<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateThanhViensTable extends Migration
{
    public function up()
    {
        Schema::create('thanh_vien', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('nguoi_dung_id');
            $table->unsignedBigInteger('doi_ban_id');
            $table->foreign('nguoi_dung_id')->references('id')->on('nguoi_dung')->onDelete('cascade');
            $table->foreign('doi_ban_id')->references('id')->on('doi_ban')->onDelete('cascade');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('thanh_vien');
    }
}
