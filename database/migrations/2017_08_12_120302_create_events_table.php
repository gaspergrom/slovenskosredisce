<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEventsTable extends Migration
{

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('events', function(Blueprint $table) {
            $table->increments('id');
            $table->text('name');
            $table->text('description');
            $table->text('excerpt');
            $table->string('image');
            $table->integer('price');
            $table->enum('type', [ 'business', 'fans', 'slo' ])->default('fans');
            $table->timestamps();
            $table->dateTime('begins_at');
            $table->dateTime('ends_at');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('events');
    }
}
