<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('doi_ban', function (Blueprint $table) {
            $table->id();
            $table->string('ten_doi');
            $table->unsignedBigInteger('giai_dau_id');
            $table->foreign('giai_dau_id')->references('id')->on('giai_dau')->onDelete('cascade');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('doi_ban');
    }
};
