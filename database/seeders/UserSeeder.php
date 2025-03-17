<?php

namespace Database\Seeders;

use App\Models\User;
use GuzzleHttp\Promise\Create;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
            'name' => 'Ayrton Valenzuela',
            'email' => 'avbarja@gmail.com',
            'password' => bcrypt('12345678')
        ])->assignRole('Admin');

        User::create([
            'name' => 'Ayrton Blogger',
            'email' => 'avalenzuela@gmail.com',
            'password' => bcrypt('12345678')
        ])->assignRole('Blogger');

        User::factory(0)->create();
    }
}
