<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateKetQuasTable extends Migration
{
    public function up()
    {
        Schema::create('ket_qua', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('doi_ban_id');
            $table->integer('diem')->default(0);
            $table->timestamps();

            $table->foreign('doi_ban_id')->references('id')->on('doi_ban')->onDelete('cascade');
        });
    }

    public function down()
    {
        Schema::dropIfExists('ket_qua');
    }
}
