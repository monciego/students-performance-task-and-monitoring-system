<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(LaratrustSeeder::class);

        // superadmin account
        $superadministrator = \App\Models\User::factory()->create([
            'name' => 'Superadmin',
            'email' => 'superadministrator@psu.com',
            'password' => Hash::make('superadministrator@psu.com'),
        ]);

         $superadministrator->attachRole('superadministrator');

         $teacher_1 = \App\Models\User::factory()->create(
            [
                'name' => 'Renalyn Bragado',
                'email' => 'renalyn.bragado@psu.com',
                'password' => Hash::make('rena16'),
            ]
        );

         $teacher_2 = \App\Models\User::factory()->create(
            [
                'name' => 'Ma. Teresa Raon',
                'email' => 'teresa.raon@psu.com',
                'password' => Hash::make('teresa12'),
            ]
        );

         $teacher_3 = \App\Models\User::factory()->create(
            [
                'name' => 'Charissa Sicat',
                'email' => 'charissa.sicat@psu.com',
                'password' => Hash::make('cha17'),
            ]
        );

         $teacher_4= \App\Models\User::factory()->create(
            [
                'name' => 'Erika Tagara',
                'email' => 'erika.tagara@psu.com',
                'password' => Hash::make('rika15'),
            ]
        );

         $teacher_1->attachRole('teacher');
         $teacher_2->attachRole('teacher');
         $teacher_3->attachRole('teacher');
         $teacher_4->attachRole('teacher');

        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
    }
}
