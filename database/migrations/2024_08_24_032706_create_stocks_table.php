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
        Schema::create('_stocks', function (Blueprint $table) {
            $table->id();
            $table->date('tanggal');
            $table->string('jeniskabel');
            $table->string('jumlahkabel');
            $table->string('panjangkabel');
            $table->text('petugas');
            $table->text('keterangan');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('_stocks');
    }
};
