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
        Schema::table('point_details', function (Blueprint $table) {

        if (Schema::hasColumn('point_details', 'amount')) {
        $table->dropColumn('amount');
    }

        $table->integer('point_amount')->default(1);
    });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};
