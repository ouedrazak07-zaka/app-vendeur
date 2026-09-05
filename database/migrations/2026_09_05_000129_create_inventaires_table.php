<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void {
        Schema::create('inventaires', function (Blueprint $table) {
            $table->id();
            $table->date('date');
            $table->string('nature');
            $table->decimal('nbre', 10, 2);
            $table->decimal('pu_detail', 10, 2);
            $table->decimal('pu_gros', 10, 2);
            $table->decimal('total', 10, 2);
            $table->timestamps();
        });
    }
    public function down(): void {
        Schema::dropIfExists('inventaires');
    }
};
