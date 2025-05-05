<?php

namespace Database\Seeders;

    use Illuminate\Database\Console\Seeds\WithoutModelEvents;
    use Illuminate\Database\Seeder;
    use Illuminate\Support\Facades\DB;
    use Illuminate\Support\Facades\Hash;
    use Illuminate\Support\Str;

class qaKrsChangesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Pobierz ID sekcji 'krsChanges'
        $sectionId = DB::table('qa_section')->where('qa_section_code', 'krsChanges')->value('qa_section_id');

        // Dane do wstawienia
        $data = [
            [
                'qa_section_id' => $sectionId,
                'qa_title' => 'Co to jest KRS i dlaczego wprowadzenie zmian w tym rejestrze jest ważne?',
                'qa_text' => 'Krajowy Rejestr Sądowy (KRS) to centralny rejestr publiczny, w którym gromadzone są dane dotyczące m.in. spółek, stowarzyszeń, fundacji oraz innych podmiotów prawnych. Wprowadzenie zmian w KRS jest ważne, ponieważ zapewnia aktualność danych.',
                'qa_active' => true,
                'qa_author' => 'admin',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'qa_section_id' => $sectionId,
                'qa_title' => 'Jakie zmiany w spółce wymagają aktualizacji danych w KRS?',
                'qa_text' => 'Zmiany takie jak zmiana adresu siedziby, nazwy spółki, składu zarządu, wysokości kapitału zakładowego, kody PKD, czy zmiana wspólników muszą być zaktualizowane w KRS.',
                'qa_active' => true,
                'qa_author' => 'admin',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'qa_section_id' => $sectionId,
                'qa_title' => 'Jakie są konsekwencje niewprowadzenia zmian w KRS?',
                'qa_text' => 'Niewprowadzenie zmian w terminie może skutkować grzywną, odpowiedzialnością zarządu za nieaktualne dane oraz problemami w działalności spółki.',
                'qa_active' => true,
                'qa_author' => 'admin',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'qa_section_id' => $sectionId,
                'qa_title' => 'Jakie dokumenty są potrzebne do zgłoszenia zmian w KRS?',
                'qa_text' => 'Do zgłoszenia zmian w KRS potrzebny jest wniosek KRS-Z3, uchwały zgromadzenia wspólników lub zarządu, zaktualizowana umowa spółki oraz załączniki, np. KRS-ZM, KRS-ZK.',
                'qa_active' => true,
                'qa_author' => 'admin',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'qa_section_id' => $sectionId,
                'qa_title' => 'Ile kosztuje zgłoszenie zmiany w KRS?',
                'qa_text' => 'Koszt zgłoszenia zmiany to opłata sądowa (250 zł) oraz opłata za ogłoszenie w Monitorze Sądowym (100 zł). Mogą również wystąpić koszty usług prawnych lub notarialnych.',
                'qa_active' => true,
                'qa_author' => 'admin',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'qa_section_id' => $sectionId,
                'qa_title' => 'Jak długo trwa proces wprowadzenia zmian w KRS?',
                'qa_text' => 'Czas trwania procesu zależy od obciążenia sądu rejestrowego i rodzaju zmiany. Zwykle trwa od kilku tygodni do kilku miesięcy.',
                'qa_active' => true,
                'qa_author' => 'admin',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'qa_section_id' => $sectionId,
                'qa_title' => 'Czy zmiany w KRS można zgłosić online?',
                'qa_text' => 'Tak, można zgłaszać zmiany online za pomocą systemu S24 lub Portalu Rejestrów Sądowych, korzystając z podpisu elektronicznego lub profilu zaufanego ePUAP.',
                'qa_active' => true,
                'qa_author' => 'admin',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'qa_section_id' => $sectionId,
                'qa_title' => 'Kto jest odpowiedzialny za zgłoszenie zmian w KRS?',
                'qa_text' => 'Za zgłoszenie zmian odpowiedzialny jest zarząd spółki lub organ uprawniony do jej reprezentacji. Brak zgłoszenia zmian może skutkować odpowiedzialnością prawną.',
                'qa_active' => true,
                'qa_author' => 'admin',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'qa_section_id' => $sectionId,
                'qa_title' => 'Czy każda zmiana w spółce musi być zgłoszona do KRS?',
                'qa_text' => 'Tylko zmiany, które mają wpływ na dane wpisane do KRS (np. adres, zarząd, kapitał zakładowy), muszą być zgłoszone. Zmiany wewnętrzne, które nie wpływają na dane rejestrowe, nie muszą być zgłaszane.',
                'qa_active' => true,
                'qa_author' => 'admin',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'qa_section_id' => $sectionId,
                'qa_title' => 'Jakie są najczęstsze błędy popełniane podczas zgłaszania zmian w KRS?',
                'qa_text' => 'Do najczęstszych błędów należy brak podpisu elektronicznego, niekompletne dokumenty, nieprawidłowe formularze, czy opóźnienie w zgłoszeniu zmian.',
                'qa_active' => true,
                'qa_author' => 'admin',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ];

        DB::table('qa')->insert($data);
    }
}
