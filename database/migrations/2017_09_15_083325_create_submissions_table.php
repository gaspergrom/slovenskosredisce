<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSubmissionsTable extends Migration
{

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('submissions', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('email');
            $table->string('phone');
            $table->boolean('self_payer');
            $table->enum('status', ['student', 'zaposlen', 'drugo'])->nullable();
            $table->string('work')->nullable();
            $table->text('message')->nullable();
            $table->string('address')->nullable();
            $table->string('fax')->nullable();
            $table->string('account')->nullable();
            $table->string('web')->nullable();
            $table->boolean('ddv')->nullable();
            $table->string('contact_name')->nullable();
            $table->string('contact_email')->nullable();
            $table->string('contact_phone')->nullable();
            $table->text('activity')->nullable();
            $table->string('employees')->nullable();
            $table->string('revenue')->nullable();
            $table->text('interest')->nullable();
            $table->text('cooperation')->nullable();
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
        Schema::dropIfExists('submissions');
    }
}
