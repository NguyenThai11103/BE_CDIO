<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('quan_ans', function (Blueprint $table) {
            $table->id();
            $table->string('ten_quan_an');
            $table->string('password');
            $table->string('email');
            $table->string('ma_so_thue');
            $table->string('dia_chi');
            $table->string('so_dien_thoai');
            $table->string('gio_mo_cua');
            $table->string('gio_dong_cua');
            $table->integer('tinh_trang');
            $table->integer('is_active')->default(0);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('quan_ans');
    }
};
