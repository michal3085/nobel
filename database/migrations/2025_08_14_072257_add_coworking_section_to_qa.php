<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\DB;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        DB::table('qa_section')->insert([
            'qa_section_name' => 'Coworking',
            'qa_section_code' => 'coworkingOffice',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        DB::table('qa_section')
            ->where('qa_section_code', 'coworkingOffice')
            ->delete();
    }
};
