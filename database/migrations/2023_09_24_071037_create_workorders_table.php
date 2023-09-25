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
        Schema::create('workorders', function (Blueprint $table) {
            $table->id();
            $table->string('no_wo');
            $table->string('alamat');
            $table->string('kategori_oa');
            $table->string('nama_pic');
            $table->string('telp_pic');
            $table->integer('layanan_mbps');
            $table->string('segmen');
            $table->string('sid')->nullable();
            $table->string('snont')->nullable();
            $table->string('lan')->nullable();
            $table->string('ip')->nullable();
            $table->string('gw')->nullable();
            $table->string('sm')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('workorders');
    }
};
