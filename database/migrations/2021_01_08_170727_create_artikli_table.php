<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateArtikliTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('artikli', function (Blueprint $table) {
            $table->id();
            $table->string("naziv", 255);
            $table->string("kategorija", 255);
            $table->integer("cijena");
            $table->string("image_url");
            $table->integer("stanje");
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('artikli');
    }
}
