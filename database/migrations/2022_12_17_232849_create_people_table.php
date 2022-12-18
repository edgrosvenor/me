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
        Schema::create('people', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('handle')->unique();
            $table->string('image')->nullable();
            $table->string('banner')->nullable();
            $table->string('follow_url')->nullable();
            $table->string('message_url')->nullable();
            $table->string('bio')->nullable();
            $table->string('location')->nullable();
            $table->string('link')->nullable();
            $table->string('work')->nullable();
            $table->string('follows')->default('Parody');
            $table->string('suspended')->nullable();
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
        Schema::dropIfExists('people');
    }
};
