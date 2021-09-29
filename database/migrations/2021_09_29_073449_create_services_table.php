<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateServicesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('services', function (Blueprint $table) {
            $table->id();
            $table->string("logo1");
            $table->string("titre1");
            $table->string("description1");
            $table->string("logo2");
            $table->string("titre2");
            $table->string("description2");
            $table->string("logo3");
            $table->string("titre3");
            $table->string("description3");
            $table->string("logo4");
            $table->string("titre4");
            $table->string("description4");
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
        Schema::dropIfExists('services');
    }
}
