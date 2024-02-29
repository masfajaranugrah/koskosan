<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTypeKamarsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('type_kamars', function (Blueprint $table) {
            $table->id();
                $table->integer('jm_kamar_dalam');
                $table->integer('km_kamarkosong_dalam');
                $table->integer('jm_kamar_luar');
                $table->integer('km_kamarkosong_luar');
               // Adding UUID column
                $table->uuid('kos_id');
            // Foreign key constraint with UUID
                 $table->foreign('kos_id')
                  ->references('id')
                  ->on('kos')
                  ->onDelete('CASCADE')
                  ->onUpdate('CASCADE');
                $table->text('fasilitas_bersama_luar',255)->nullable();
                $table->text('fasilitas_km_luar',255)->nullable();
                $table->text('fasilitas_bersama_dalam',255)->nullable();
                $table->text('fasilitas_km_dalam',255)->nullable();
                $table->integer('harga_thn_luar');
                $table->integer('harga_bln_luar');
                $table->integer('harga_thn_dalam');
                $table->integer('harga_bln_dalam');
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
        Schema::dropIfExists('type_kamars');
    }
}
