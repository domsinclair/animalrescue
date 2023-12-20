<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up()
    {
        Schema::create('animals', function (Blueprint $table) {
            $table->id();
            $table->foreignId('animal_type_id');
            $table->foreignId('rescue_centre_id');
            $table->string('name');
            $table->string('breed');
            $table->enum('gender',['Male','Female']);
            $table->boolean('neutered');
            $table->text('description');
            $table->boolean('available_to_foster');
            $table->boolean('available_to_adopt');
            $table->text('additional_information')->nullable();
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('animals');
    }
};
