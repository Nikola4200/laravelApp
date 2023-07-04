<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Kupovina;
use App\Models\Polaznik;
use App\Models\Kurs;
use Illuminate\Database\Seeder;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        User::truncate();
        Kupovina::truncate();
        Polaznik::truncate();
        Kurs::truncate();

        User::factory(10)->create();

        Polaznik::factory(10)->create();

        (new KursSeeder())->run();

        Kupovina::factory(10)->create();

    }
}
