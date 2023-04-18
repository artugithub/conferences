<?php

namespace Database\Seeders;

use App\Models\Conference;
use Illuminate\Database\Seeder;

class ConferencesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Create some conferences
        Conference::create([
            'name' => 'Tarptautinė konferencija „Baltijos medžio forumas2023“',
            'description' => 'One-day-only Participation (conference 30.03.2023 including conference proceedings, coffee breaks, lunch and Networking Dinner)',
            'date' => '2022-05-01',
            'participant_number' => 100,
            'country' => 'Lithuania',
            'address' => 'VILNIUS TECH, Aula Magna, Sauletekio Ave 11',
        ]);

        Conference::create([
            'name' => '7-oji tarptautinė konferencija „eStream“',
            'description' => 'The Conference is organised by the Faculty of Electronics of VILNIUS TECH',
            'date' => '2022-06-01',
            'participant_number' => 150,
            'country' => 'Lithuania',
            'address' => 'VILNIUS TECH, Aula Magna, Sauletekio Ave 11',
        ]);

        Conference::create([
            'name' => '12-oji tarptautinė konferencija „Aplinkos inžinerija“ ',
            'description' => 'The Conference is organised by the Faculty of Environmental Engineering of VILNIUS TECH',
            'date' => '2022-07-01',
            'participant_number' => 200,
            'country' => 'Lithuania',
            'address' => 'VILNIUS TECH, Aula Magna, Sauletekio Ave 11',
        ]);
    }
}
