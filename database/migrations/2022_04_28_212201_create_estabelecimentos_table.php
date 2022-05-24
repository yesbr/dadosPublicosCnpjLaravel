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
        Schema::create('estabelecimentos', function (Blueprint $table) {
            $table->id();
            $table->string('cnpj');
            $table->string('cnpj_ordem');
            $table->string('cnpj_dv');
            $table->string('identificador');
            $table->string('nome_fantasia');
            $table->string('situacao_cadastral');
            $table->date('situacao_cadastral_data');
            $table->string('situacao_cadastral_motivo');
            $table->string('cidade_exterior');
            $table->string('pais');
            $table->date('inicio_atividade');
            $table->string('cnae_principal');
            $table->text('cnae_secundario');
            $table->string('logradouro_tipo');
            $table->string('logradouro');
            $table->string('numero');
            $table->string('complemento');
            $table->string('bairro');
            $table->string('cep');
            $table->string('uf');
            $table->string('municipio');
            $table->string('ddd1');
            $table->string('telefone1');
            $table->string('ddd2');
            $table->string('telefone2');
            $table->string('dddfax');
            $table->string('fax');
            $table->string('email');
            $table->string('situacao_especial');
            $table->date('situacao_especial_data');
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
        Schema::dropIfExists('estabelecimentos');
    }
};
