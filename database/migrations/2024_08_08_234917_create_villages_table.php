<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVillagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('villages', function (Blueprint $table) {
            $table->id();
            $table->string("nom_administratif");
            $table->string("nom-local");
            $table->string('distance_de_la_route');
            $table->foreignIdFor(App\Models\Commune::class);
            $table->integer("Popilation");
            $table->decimal("altidude");
            $table->decimal("longitude");
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
        Schema::dropIfExists('villages');
    }
}
