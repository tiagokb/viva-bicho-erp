<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up()
    {
        Schema::create('animal_vaccines', function (Blueprint $table) {
            $table->id();
            $table->foreignId('animal_id');
            $table->foreignId('vaccine_id');
            $table->integer('dose_number');
            $table->date('applied_at');
            $table->date('next_dose_at')->nullable();
            $table->string('administered_by')->nullable();
            $table->text('notes')->nullable();
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('animal_vaccines');
    }
};
