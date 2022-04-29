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
        Schema::create('simples', function (Blueprint $table) {
            $table->id();
            $table->string('cnpj');
            $table->string('opcao_simples');
            $table->date('opcao_simples_data');
            $table->string('exclusao_simples');
            $table->string('opcao_mei');
            $table->date('opcao_mei_data');
            $table->string('exclusao_mei');
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
        Schema::dropIfExists('simples');
    }
};
