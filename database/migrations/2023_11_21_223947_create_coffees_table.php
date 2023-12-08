<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCoffeesTable extends Migration
{
    public function up()
    {
        Schema::create('coffees', function (Blueprint $table) {
            $table->id();
            $table->string('photo')->default("empty");
            $table->string('brand');
            $table->string('model')->nullable();
            $table->decimal('price', 8, 2)->nullable();
            $table->integer('salescounter')->nullable();
            $table->string('type')->nullable();
            $table->string('coffeebean')->nullable();
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('coffees');
    }
}
