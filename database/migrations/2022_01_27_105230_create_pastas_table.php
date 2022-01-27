<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePastasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pastas', function (Blueprint $table) {
            $table->id();

            $table->string('image');
            $table->string('title', 50);
            $table->string('type', 50);
            $table->tinyInteger('cooking_time');
            $table->text('description');
            $table->string('slug', 50);

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
        Schema::dropIfExists('pastas');
    }
}
