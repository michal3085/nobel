<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class qaCompanyRegistrationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Pobierz ID sekcji 'companyRegistration'
        $sectionId = DB::table('qa_section')->where('qa_section_code', 'companyRegistration')->value('qa_section_id');

        // Dane do wstawienia
        $data = [
            [
                'qa_section_id' => $sectionId,
                'qa_title' => 'Na czym polega usługa rejestracji spółki i kto powinien z niej skorzystać?',
                'qa_text' => 'Usługa rejestracji spółki polega na kompleksowym wsparciu w zakładaniu nowej firmy, obejmującym przygotowanie dokumentów, składanie wniosków do Krajowego Rejestru Sądowego (KRS) i innych urzędów oraz dopełnienie wszystkich formalności prawnych. Jest to idealne rozwiązanie dla osób, które chcą założyć spółkę szybko i bez błędów, szczególnie jeśli nie mają doświadczenia w formalnościach związanych z prowadzeniem działalności gospodarczej.',
                'qa_active' => true,
                'qa_author' => 'admin',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'qa_section_id' => $sectionId,
                'qa_title' => 'Jakie są koszty związane z rejestracją spółki?',
                'qa_text' => 'Koszty rejestracji spółki obejmują opłaty sądowe za wpis do KRS, koszty notarialne (w przypadku spółek wymagających aktu notarialnego), opłaty za ogłoszenie w Monitorze Sądowym i Gospodarczym oraz ewentualne honoraria za usługi prawne lub doradcze. Dokładne koszty zależą od formy spółki i wybranego trybu rejestracji, np. online przez system S24 lub tradycyjnie.',
                'qa_active' => true,
                'qa_author' => 'admin',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'qa_section_id' => $sectionId,
                'qa_title' => 'Jak długo trwa proces rejestracji spółki?',
                'qa_text' => 'Czas rejestracji spółki może się różnić w zależności od wybranej formy prawnej i trybu rejestracji. Rejestracja spółki z o.o. online przez system S24 może zająć kilka dni, podczas gdy tradycyjna rejestracja może potrwać od kilku tygodni do miesiąca. Czas ten obejmuje przygotowanie dokumentów, złożenie wniosków oraz czas potrzebny na wpis do KRS.',
                'qa_active' => true,
                'qa_author' => 'admin',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'qa_section_id' => $sectionId,
                'qa_title' => 'Jakie dokumenty są potrzebne do rejestracji spółki?',
                'qa_text' => 'Do rejestracji spółki wymagane są m.in. umowa spółki (statut), dane osobowe założycieli i członków zarządu, adres siedziby, informacje o wkładach wspólników, oraz wnioski do KRS. W zależności od formy spółki mogą być potrzebne również inne dokumenty, takie jak oświadczenia o braku karalności członków zarządu.',
                'qa_active' => true,
                'qa_author' => 'admin',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'qa_section_id' => $sectionId,
                'qa_title' => 'Jakie są formy prawne spółek, które można zarejestrować w Polsce?',
                'qa_text' => 'W Polsce można zarejestrować różne formy prawne spółek, takie jak spółka z ograniczoną odpowiedzialnością (sp. z o.o.), spółka akcyjna (S.A.), spółka jawna, spółka komandytowa, spółka komandytowo-akcyjna oraz spółka cywilna. Wybór formy prawnej zależy od potrzeb biznesowych, skali działalności oraz preferencji dotyczących odpowiedzialności i struktury zarządzania.',
                'qa_active' => true,
                'qa_author' => 'admin',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ];

        DB::table('qa')->insert($data);
    }
}
