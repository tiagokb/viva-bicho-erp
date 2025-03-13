<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up()
    {
        Schema::create('vaccines', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->text('description');
            $table->string('manufacturer')->nullable();
            $table->integer('doses_required');
            $table->integer('vaccination_period');
            $table->enum('vaccination_interval', array_column(\App\Enums\DateInterval::cases(), 'value'))->value(\App\Enums\DateInterval::MONTHS->value);
            $table->enum('status', array_column(\App\Enums\Status::cases(), 'value'))->value(\App\Enums\Status::ACTIVE->value);
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('vaccines');
    }
};
