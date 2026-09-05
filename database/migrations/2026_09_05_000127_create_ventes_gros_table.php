<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void {
        Schema::create('ventes_gros', function (Blueprint $table) {
            $table->id();
            $table->date('date');
            $table->string('nom');
            $table->string('nature');
            $table->decimal('nbre', 10, 2);
            $table->decimal('prix', 10, 2);
            $table->decimal('total', 10, 2);
            $table->timestamps();
        });
    }
    public function down(): void {
        Schema::dropIfExists('ventes_gros');
    }
};
