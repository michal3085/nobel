<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class qaReadyCompanySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Pobierz ID sekcji 'readyCompany'
        $sectionId = DB::table('qa_section')->where('qa_section_code', 'readyCompany')->value('qa_section_id');

        // Dane do wstawienia
        $data = [
            [
                'qa_section_id' => $sectionId,
                'qa_title' => 'Co to jest gotowa spółka i dlaczego warto ją kupić?',
                'qa_text' => 'Gotowa spółka to wcześniej zarejestrowana firma, która nie prowadziła działalności gospodarczej. Zakup takiej spółki pozwala na natychmiastowe rozpoczęcie działalności, co jest korzystne dla osób, które chcą szybko wejść na rynek, unikając formalności związanych z zakładaniem nowej firmy od podstaw.',
                'qa_active' => true,
                'qa_author' => 'admin',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'qa_section_id' => $sectionId,
                'qa_title' => 'Jakie są korzyści z zakupu gotowej spółki?',
                'qa_text' => 'Zakup gotowej spółki zapewnia szereg korzyści, takich jak oszczędność czasu na rejestrację firmy, możliwość natychmiastowego rozpoczęcia działalności oraz posiadanie firmy z historią, co może ułatwić uzyskanie kredytów lub zawieranie umów.',
                'qa_active' => true,
                'qa_author' => 'admin',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'qa_section_id' => $sectionId,
                'qa_title' => 'Czy zakup gotowej spółki wiąże się z jakimś ryzykiem?',
                'qa_text' => 'Główne ryzyko związane z zakupem gotowej spółki to możliwość istnienia ukrytych zobowiązań lub długów. Dlatego ważne jest, aby dokładnie sprawdzić historię i dokumentację spółki przed zakupem oraz skorzystać z usług profesjonalistów, którzy pomogą w due diligence.',
                'qa_active' => true,
                'qa_author' => 'admin',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'qa_section_id' => $sectionId,
                'qa_title' => 'Jak przebiega proces zakupu gotowej spółki?',
                'qa_text' => 'Proces zakupu gotowej spółki zazwyczaj obejmuje podpisanie umowy sprzedaży udziałów, przejęcie dokumentacji spółki, zgłoszenie zmian w KRS (Krajowym Rejestrze Sądowym) oraz aktualizację danych dotyczących nowego właściciela w urzędach skarbowych i innych instytucjach. Cały proces może zająć zaledwie kilka dni.',
                'qa_active' => true,
                'qa_author' => 'admin',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'qa_section_id' => $sectionId,
                'qa_title' => 'Czy mogę zmienić nazwę i przedmiot działalności gotowej spółki po jej zakupie?',
                'qa_text' => 'Tak, po zakupie gotowej spółki możliwe jest wprowadzenie zmian w jej statucie, takich jak zmiana nazwy, siedziby, przedmiotu działalności czy składu zarządu. Wymaga to złożenia odpowiednich wniosków do KRS i innych instytucji, ale jest to standardowa procedura, którą można zrealizować szybko.',
                'qa_active' => true,
                'qa_author' => 'admin',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ];

        DB::table('qa')->insert($data);
    }
}
