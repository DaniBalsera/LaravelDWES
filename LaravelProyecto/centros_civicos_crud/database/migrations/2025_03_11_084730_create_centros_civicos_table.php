<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up() {
        Schema::create('centros_civicos', function (Blueprint $table) {
            $table->id();
            $table->string('nombre');
            $table->text('direccion');
            $table->text('email');
            $table->text('horario');
            $table->string('telefono')->nullable();
            $table->timestamps();
        });
    }

    public function down() {
        Schema::dropIfExists('centros_civicos');
    }
};
