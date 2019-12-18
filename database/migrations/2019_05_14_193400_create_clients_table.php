<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateClientsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('clients', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('nombre', 64);
            $table->string('alias', 8)->unique();
            $table->string('rfc', 16)->nullable();
            $table->string('direccion', 128)->nullable();
            $table->string('colonia', 64)->nullable();
            $table->string('postal', 8)->nullable();
            $table->string('ciudad', 64)->nullable();
            $table->string('estado', 64)->nullable();
            $table->string('pais', 64)->nullable();
            $table->string('contacto', 64)->nullable();
            $table->text('telefonos')->nullable();
            $table->boolean('iva')->default(0);
            $table->boolean('retencion_iva')->default(0);
            $table->string('monedas', 32);
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('clients');
    }
}
