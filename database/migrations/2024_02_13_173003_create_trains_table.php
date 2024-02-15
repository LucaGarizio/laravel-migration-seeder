<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Validation\Rules\Unique;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('trains', function (Blueprint $table) {
            $table->id();
            
            $table->string('agenzia') -> unique();
            $table->string('luogo');
            $table->dateTime('orario_di_partenza');
            $table->dateTime('orario_di_arrivo');
            $table->string('codice_treno') -> unique();
            $table->integer('numero_carrozze');
            $table->boolean('disponibile') -> default(true) ;
            $table->boolean('cancellato') -> default(false);

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
        Schema::dropIfExists('trains');
    }
};

