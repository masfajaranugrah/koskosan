<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateKosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('kos', function (Blueprint $table) {
            $table->uuid('id')->primary();
              $table->uuid('kategori_id');
              // Foreign key constraint with UUID
                   $table->foreign('kategori_id')
                    ->references('id')
                    ->on('kategoris')
                    ->onDelete('CASCADE')
                    ->onUpdate('CASCADE');

                    $table->uuid('gender_id');      // Adding UUID column for foreign key

                    // Foreign key constraint with UUID
                    $table->foreign('gender_id')
                    ->references('id')
                    ->on('genders')
                    ->onDelete('CASCADE')
                    ->onUpdate('CASCADE');


                    $table->uuid('satuan_id');      // Adding UUID column for foreign key

                    // Foreign key constraint with UUID
                    $table->foreign('satuan_id')
                    ->references('id')
                    ->on('satuans')
                    ->onDelete('CASCADE')
                    ->onUpdate('CASCADE');

            $table->text('deskripsi',255)->nullable();
            $table->string('alamat',255)->nullable();
            $table->string('harga1',20)->nullable();
            $table->string('harga2',20)->nullable();
            $table->integer('type_kos');
            $table->string('banner',255)->nullable();
            $table->string('gambar', 3000);
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
        Schema::dropIfExists('kos');
    }
}
