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
        Schema::create('commandants', function (Blueprint $table) {
            $table->id();
            $table->uuid('uuid')->index();
            $table->string('rank_name')->nullable();
            $table->string('rank_star')->nullable();
            $table->string('commandant_name')->nullable();
            $table->mediumText('about_commandant')->nullable();
            $table->string('image')->nullable();
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
        Schema::dropIfExists('commandants');
    }
};
