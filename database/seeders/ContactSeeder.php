<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Contact;
use Faker\Factory as Faker;


class ContactSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create();

        $companies = ['Ivyhoot', 'ZAB', 'Isometric Data'];

        for ($i = 0; $i < 6000; $i++) {
            $randIdx = rand(0, 2);
            Contact::create([
                'full_name' => $faker->name(),
                'email' => $faker->email(),
                'mobile' => $faker->phoneNumber(),
                'company' => $companies[$randIdx],
                'active' => true,
            ]);
        }
    }
}
