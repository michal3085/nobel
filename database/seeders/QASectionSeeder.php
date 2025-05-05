<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class QASectionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('qa_section')->insert([
            'qa_section_name' => 'Rejestracja spółki',
            'qa_section_code' => 'companyRegistration',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('qa_section')->insert([
            'qa_section_name' => 'Zmiany KRS',
            'qa_section_code' => 'krsChanges',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('qa_section')->insert([
            'qa_section_name' => 'Gotowa spółka',
            'qa_section_code' => 'readyCompany',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('qa_section')->insert([
            'qa_section_name' => 'Gotowe biuro',
            'qa_section_code' => 'readyOffice',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('qa_section')->insert([
            'qa_section_name' => 'Wirtualne biuro',
            'qa_section_code' => 'virtualOffice',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }
}
