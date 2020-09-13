<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        User::factory()->create(
            [
                'email' => 'adiputrapermana@gmail.com',
                'name' => 'Adi'
            ]
        );
        User::factory()->create(
            [
                'email' => 'adipepe@gmail.com',
                'name' => 'Adi Pepe'
            ]
        );
        User::factory()->create(
            [
                'email' => 'adiputra@gmail.com',
                'name' => 'Adi Putra'
            ]
        );
    }
}
