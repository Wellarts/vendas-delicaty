<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::table('venda_p_d_v_s', function (Blueprint $table) {
            $table->string('financeiro')->nullable();
            $table->integer('parcelas')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('venda_p_d_v_s', function (Blueprint $table) {
            $table->dropColumn('financeiro');
            $table->dropColumn('parcelas');
        });
    }
};
