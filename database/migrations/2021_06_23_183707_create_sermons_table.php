<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSermonsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sermons', function (Blueprint $table) {
            $table->id();
            // $table->string("latest_sermonsTitle")->nullable();
            // $table->text("latest_sermonsMessage")->nullable();
            // $table->longText("message")->nullable();
            $table->string("image")->nullable();
            $table->string("video")->nullable();
            $table->string("audio")->nullable();
            $table->string("doc")->nullable();
            $table->string("title")->nullable();
            $table->string("sermon_from")->nullable();
            $table->string("category")->nullable();
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
        Schema::dropIfExists('sermons');
    }
}
