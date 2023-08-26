<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Banka;
use App\Models\Radnik;
use App\Models\Transakcija;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {

        $banka = new BankaSeeder();
        $radnik = new RadnikSeeder();
        $transakcija = new TransakcijaSeeder();
        $banka->run();
        $radnik->run();
        $transakcija->run();

        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
    }
}
