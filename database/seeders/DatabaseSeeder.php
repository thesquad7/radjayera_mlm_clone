<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\User;
use App\Models\Relation;
use App\Models\Testimoni;
use Illuminate\Database\Seeder;


class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();
        Testimoni::factory(30)->create();
        User::factory()->create([
            'name' => 'Test User',
            'email' => 'admin@gmail.com',
            'password'=> bcrypt('1234')
         ]);
        Relation::factory()->create([
            'UID'=>'RJU0000001'
        ]);
    }
}
