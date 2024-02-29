<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBannerSetsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('banner_sets', function (Blueprint $table) {
            $table->id();
            $table->string('judul_banner',50);
            $table->string('deskripsi_banner');
            $table->string('link_button1');
            $table->string('link_button2');
            $table->string('nama_button1');
            $table->string('nama_button2');
            $table->string('gambar',255)->nullable();
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
        Schema::dropIfExists('banner_sets');
    }
}
