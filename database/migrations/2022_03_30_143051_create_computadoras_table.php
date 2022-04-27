<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('computadoras', function (Blueprint $table) {
            $table->id();
            $table->string('marca', 150);
            $table->string('modelo', 50);
            $table->text('descripcion');
            $table->string('tipo', 20);
            $table->decimal('precioDeCompra', 8, 2, true);
            $table->decimal('precioDeVenta', 8, 2, true);
            $table->integer('stock');
            $table->tinyInteger('disponible', false, true);
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
        Schema::dropIfExists('computadoras');
    }
};
