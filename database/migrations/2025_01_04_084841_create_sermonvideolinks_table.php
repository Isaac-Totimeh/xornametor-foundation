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
        Schema::create('sermonvideolinks', function (Blueprint $table) {
            $table->id();
            $table->uuid('uuid')->index();
            $table->string('sermon_title')->nullable();
            $table->string('sermon_vidoe_link')->nullable();
            $table->date('sermon_date')->nullable();
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
        Schema::dropIfExists('sermonvideolinks');
    }
};
