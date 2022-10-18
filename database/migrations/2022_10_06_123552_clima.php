<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Clima', function (Blueprint $table) {
            $table->id();
            $table->string('nombreciudad', 40)->nullable();
            $table->float('temperatura')->nullable();
            $table->string('tipoclima', 40)->nullable();
            $table->string('icono', 40)->nullable();
            $table->timestamps();
        }
        );
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
        Schema::dropIfExists('Clima');
    }
};
