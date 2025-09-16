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
        Schema::table('venda_p_d_v_s', function (Blueprint $table) {
            $table->string('tipo_registro')->nullable();
            $table->string('tipo_acres_desc')->nullable();
            $table->decimal('valor_acres_desc', 10, 2)->nullable();
            $table->string('percent_acres_desc')->nullable();
            $table->decimal('valor_total_desconto', 10, 2)->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('venda_p_d_v_s', function (Blueprint $table) {
            $table->dropColumn(['tipo_acres_desc', 'valor_acres_desc', 'percent_acres_desc', 'valor_total_desconto']);
        });
    }
};
