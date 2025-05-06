<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        (new UserTableSeeder())->run();
        (new QASectionSeeder())->run();
        (new qaCompanyRegistrationSeeder())->run();
        (new qaKrsChangesSeeder())->run();
        (new qaReadyCompanySeeder())->run();
        (new qaReadyOfficeSeeder())->run();
        (new qaVirtualOfficeSeeder())->run();
    }
}
