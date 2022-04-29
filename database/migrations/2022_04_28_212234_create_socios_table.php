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
        Schema::create('socios', function (Blueprint $table) {
            $table->id();
            $table->string('cnpj');
            $table->string('socio_identificador');
            $table->string('socio_nome');
            $table->string('socio_cpf');
            $table->string('socio_qualificacao');
            $table->string('entrada_sociedade_data');
            $table->string('pais');
            $table->string('representante_legal');
            $table->string('representante_legal_nome');
            $table->string('representante_legal_qualificacao');
            $table->string('faixa_etaria');
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
        Schema::dropIfExists('socios');
    }
};
