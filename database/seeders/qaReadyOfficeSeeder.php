<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class qaReadyOfficeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Pobierz ID sekcji 'readyOffice'
        $sectionId = DB::table('qa_section')->where('qa_section_code', 'readyOffice')->value('qa_section_id');

        // Dane do wstawienia
        $data = [
            [
                'qa_section_id' => $sectionId,
                'qa_title' => 'Co to jest wynajem gotowego biura i dla kogo jest przeznaczony?',
                'qa_text' => 'Wynajem gotowego biura polega na udostępnieniu w pełni wyposażonej i gotowej do pracy przestrzeni biurowej, którą można wynająć na określony czas. Usługa jest skierowana do firm, freelancerów oraz startupów, które potrzebują elastycznego rozwiązania biurowego bez konieczności inwestowania w zakup sprzętu, mebli czy długoterminowy najem.',
                'qa_active' => true,
                'qa_author' => 'admin',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'qa_section_id' => $sectionId,
                'qa_title' => 'Jakie korzyści oferuje wynajem gotowego biura w porównaniu do tradycyjnego najmu?',
                'qa_text' => 'Korzyści z wynajmu gotowego biura to przede wszystkim oszczędność czasu i kosztów, elastyczne warunki najmu, dostęp do nowoczesnej infrastruktury, takiej jak szybki internet, sale konferencyjne, recepcja, oraz brak konieczności zarządzania biurem (np. sprzątaniem, konserwacją). Wynajem takiego biura pozwala skupić się na prowadzeniu biznesu, zamiast na organizacji przestrzeni.',
                'qa_active' => true,
                'qa_author' => 'admin',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'qa_section_id' => $sectionId,
                'qa_title' => 'Co jest zazwyczaj wliczone w cenę wynajmu gotowego biura?',
                'qa_text' => 'W cenę wynajmu gotowego biura zazwyczaj wliczone są koszty wynajmu przestrzeni, dostęp do mebli biurowych, opłaty za media (prąd, woda, internet), korzystanie z wspólnych przestrzeni (np. kuchnia, sala konferencyjna), usługi recepcyjne oraz utrzymanie czystości.',
                'qa_active' => true,
                'qa_author' => 'admin',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'qa_section_id' => $sectionId,
                'qa_title' => 'Czy mogę wynająć gotowe biuro na krótki okres, na przykład na kilka dni lub tygodni?',
                'qa_text' => 'Tak, jedną z głównych zalet wynajmu gotowego biura jest elastyczność. Można wynająć biuro na krótki okres, na przykład na kilka dni, tygodni lub miesięcy, co jest szczególnie przydatne dla firm potrzebujących tymczasowej przestrzeni na projekty, spotkania biznesowe czy okresy intensywnej pracy.',
                'qa_active' => true,
                'qa_author' => 'admin',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'qa_section_id' => $sectionId,
                'qa_title' => 'Jakie są dostępne typy przestrzeni w ramach wynajmu gotowego biura?',
                'qa_text' => 'W ramach wynajmu gotowego biura dostępne są różne typy przestrzeni, w tym prywatne gabinety, przestrzenie coworkingowe, sale konferencyjne oraz sale spotkań. Można wybrać opcję najbardziej odpowiadającą potrzebom biznesu, zależnie od liczby pracowników, charakteru pracy oraz wymaganej prywatności.',
                'qa_active' => true,
                'qa_author' => 'admin',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ];

        DB::table('qa')->insert($data);
    }
}
