<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFootersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('footers', function (Blueprint $table) {
            $table->id();
            $table->string("adresse")->nullable();
            $table->string("phone")->nullable();
            $table->string("email")->nullable();
            $table->string("linkTitre1");
            $table->string("linkTitre2");
            $table->string("link1");
            $table->string("link2");
            $table->string("link3");
            $table->string("link4");
            $table->string("link5");
            $table->string("link6");
            $table->string("link7");
            $table->string("link8");
            $table->string("link9");
            $table->string("link10");
            $table->string("description");
            $table->string("titre");
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
        Schema::dropIfExists('footers');
    }
}
