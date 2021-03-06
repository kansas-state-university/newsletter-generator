<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateArticlesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::create('articles', function (Blueprint $table) {
          $table->increments('id');
          $table->string('title');
          $table->datetime('publish');
          $table->datetime('date')->nullable();
          $table->string('location')->nullable();
          $table->string('link')->nullable();
          $table->string('text');
          $table->boolean('approved')->default(0);
          $table->boolean('archived')->default(0);
          $table->integer('submitter_id');
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
        Schema::dropIfExists('articles');
    }
}
