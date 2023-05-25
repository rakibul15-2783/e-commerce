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
        Schema::create('category_p_s', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('des');
            $table->float('price');
            $table->string('status')->default("1")->comment("1 for active 2 for inactive");
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
        Schema::dropIfExists('category_p_s');
    }
};
