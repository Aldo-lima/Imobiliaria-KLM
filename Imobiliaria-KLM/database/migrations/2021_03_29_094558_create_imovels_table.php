<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateImovelsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('imoveis', function (Blueprint $table) {
            $table->id();
            $table->string('titulo', 100);
            $table->integer('terreno');
            $table->integer('salas');
            $table->integer('banheiro');
            $table->integer('dormitorio');
            $table->integer('garagems');
            $table->text('descricao')->nullable();
            $table->decimal('preco',12, 2);
            $table->foreignId('municipio_id')->constrained()->onDelete('cascade');
            $table->foreignId('tipo_id')->constrained()->onDelete('cascade');
            $table->foreignId('finalidade_id')->constrained()->onDelete('cascade');

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
        Schema::dropIfExists('imoveis');
    }
}
