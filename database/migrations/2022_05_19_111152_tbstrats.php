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
        Schema::create('strats', function (Blueprint $table) {
            $table->id();
            $table->string('map_name')->nullable();
            $table->string('strats_image')->nullable();
            $table->string('strats_name')->nullable();
            $table->text('strats_desc')->nullable();
            $table->string('agent_one')->nullable();
            $table->text('agent_one_desc')->nullable();
            $table->string('agent_two')->nullable();
            $table->text('agent_two_desc')->nullable();
            $table->string('agent_three')->nullable();
            $table->text('agent_three_desc')->nullable();
            $table->string('agent_four')->nullable();
            $table->text('agent_four_desc')->nullable();
            $table->string('agent_five')->nullable();
            $table->text('agent_five_desc')->nullable();
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
        Schema::dropIfExists('strats');
    }
};
