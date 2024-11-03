<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateChefvillagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('chefvillages', function (Blueprint $table) {
            $table->id();
            $table->string("nom_administratif");
            $table->string("nom_local");
            $table->foreignIdFor(App\Models\Village::class);
            $table->string("tel");
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
        Schema::dropIfExists('chefvillages');
    }
}
