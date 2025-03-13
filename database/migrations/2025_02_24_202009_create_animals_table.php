<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up()
    {
        Schema::create('animals', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->integer('age');
            $table->string('race');
            $table->enum('gender', array_column(\App\Enums\Genders::cases(), 'value'))->default(\App\Enums\Genders::UNKNOWN->value);
            $table->enum('size', array_column(\App\Enums\Sizes::cases(), 'value'))->default(\App\Enums\Sizes::MEDIUM->value);
            $table->longText('behavior_details')->nullable();
            $table->string('diseases')->nullable();
            $table->string('disabilities')->nullable();
            $table->string('special_care')->nullable();
            $table->string('origin');
            $table->enum('status', array_column(\App\Enums\AnimalStatus::cases(), 'value'))->default(\App\Enums\AnimalStatus::AVAILABLE->value);
            $table->date('entry_date')->default(now());
            $table->string('chip_id')->nullable();
            $table->boolean('castrated')->string(false);
            $table->string('coat_color')->nullable();
            $table->string('photo')->nullable();
            $table->longText('notes')->nullable();
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('animals');
    }
};
