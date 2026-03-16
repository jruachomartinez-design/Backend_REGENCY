<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('transactions', function (blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained('users');// usuario al que  le pertenece la transaccion
            $table->string('type');                     // tipo de movimiento
            $table->decimal('amount', 10, 2);//Cantidad de dinero movida
            $table->decimal('balance_after',10,2);//saldo despues de la transaccion sirve tambien como auditoria
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('transactions');
    }
};
