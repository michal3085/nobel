<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class qaVirtualOfficeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Pobierz ID sekcji 'virtualOffice'
        $sectionId = DB::table('qa_section')->where('qa_section_code', 'virtualOffice')->value('qa_section_id');

        // Dane do wstawienia
        $data = [
            [
                'qa_section_id' => $sectionId,
                'qa_title' => 'Co to jest biuro wirtualne?',
                'qa_text' => 'Biuro wirtualne to usługa, która pozwala firmom na posiadanie prestiżowego adresu bez konieczności wynajmowania fizycznej przestrzeni biurowej. Oferuje usługi takie jak odbieranie poczty, przekierowywanie połączeń telefonicznych i obsługę korespondencji, co umożliwia prowadzenie działalności z dowolnego miejsca.',
                'qa_active' => true,
                'qa_author' => 'admin',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'qa_section_id' => $sectionId,
                'qa_title' => 'Jakie korzyści daje korzystanie z biura wirtualnego?',
                'qa_text' => 'Korzyści z korzystania z biura wirtualnego to m.in. obniżenie kosztów operacyjnych, uzyskanie profesjonalnego adresu dla firmy, możliwość zdalnego prowadzenia działalności oraz dostęp do usług takich jak obsługa poczty czy wynajem sal konferencyjnych na godziny.',
                'qa_active' => true,
                'qa_author' => 'admin',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'qa_section_id' => $sectionId,
                'qa_title' => 'Czy mogę korzystać z biura wirtualnego, jeśli prowadzę działalność gospodarczą z domu?',
                'qa_text' => 'Tak, biuro wirtualne jest idealnym rozwiązaniem dla przedsiębiorców prowadzących działalność z domu. Pozwala to na oddzielenie adresu prywatnego od firmowego oraz zapewnia bardziej profesjonalny wizerunek w kontaktach z klientami.',
                'qa_active' => true,
                'qa_author' => 'admin',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'qa_section_id' => $sectionId,
                'qa_title' => 'Jakie usługi dodatkowe oferuje biuro wirtualne?',
                'qa_text' => 'Biura wirtualne często oferują dodatkowe usługi, takie jak odbieranie telefonów w imieniu firmy, skanowanie i przesyłanie korespondencji, rezerwacja sal konferencyjnych, a także usługi księgowe czy doradztwo prawne.',
                'qa_active' => true,
                'qa_author' => 'admin',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'qa_section_id' => $sectionId,
                'qa_title' => 'Czy biuro wirtualne może być używane jako siedziba firmy?',
                'qa_text' => 'Tak, adres biura wirtualnego może być używany jako oficjalna siedziba firmy do rejestracji działalności gospodarczej. Jest to legalne i często wykorzystywane przez przedsiębiorców, którzy nie potrzebują stałego biura, ale chcą mieć profesjonalny adres do celów rejestracyjnych.',
                'qa_active' => true,
                'qa_author' => 'admin',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ];

        DB::table('qa')->insert($data);
    }
}
