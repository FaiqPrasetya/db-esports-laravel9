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
            $table->string('map_name');
            $table->string('strats_image');
            $table->string('strats_name');
            $table->text('strats_desc');
            $table->string('agent_one');
            $table->text('agent_one_desc');
            $table->string('agent_two');
            $table->text('agent_two_desc');
            $table->string('agent_three');
            $table->text('agent_three_desc');
            $table->string('agent_four');
            $table->text('agent_four_desc');
            $table->string('agent_five');
            $table->text('agent_five_desc');
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
