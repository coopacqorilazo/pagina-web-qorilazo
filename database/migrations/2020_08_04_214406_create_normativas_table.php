<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateNormativasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('normativas', function (Blueprint $table) {
            $table->id();
            $table->string('numero');
            $table->string('version');
            $table->string('descripcion');
            $table->integer('tipo');
            $table->integer('estado');
            $table->integer('proceso');
            $table->date('fechapublicacion');
            $table->date('fechaemision');
            $table->string('urldocumento');            
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
        Schema::dropIfExists('normativas');
    }
}
