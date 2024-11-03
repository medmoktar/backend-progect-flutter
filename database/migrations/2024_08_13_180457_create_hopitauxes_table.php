<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHopitauxesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('hopitauxes', function (Blueprint $table) {
            $table->id();
            $table->string("nom");
            $table->foreignIdFor(App\Models\type_stuctureCente::class);
            $table->string('photo');
            $table->foreignIdFor(App\Models\Village::class);
            $table->string("altitude");
            $table->string("longitude");
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
        Schema::dropIfExists('hopitauxes');
    }
}
