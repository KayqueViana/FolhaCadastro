<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCadastroTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('clients', function (Blueprint $table) {
            $table->id("id", 11);
            $table->string('name', 25);
            $table->string('surname', 35);
            $table->string('email', 50);
            $table->string('cell', 35);
            $table->boolean('gender', 3);
            $table->string('text', 255)->nullable();
            $table->string('cep', 12);
            $table->string('adress', 255);
            $table->string('neighborhood', 255);
            $table->string('city', 255);
            $table->string('uf', 255);
            $table->string('img', 255)->nullable();
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
        Schema::dropIfExists('clients');
    }
}