<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        \App\Models\User::factory()->create([
            'name' => 'Wildan',
            'email' => 'wildan@example.com',
            'roles' => 'admin',
            'password'=>Hash::make('12345678'),
            'phone' => '08123232222',
        ]);

        \App\Models\ProfileClinic::factory()->create([
            'name' => 'Clinic Fira',
            'address' => 'Jl.Graha Prima Baru',
            'phone' => '123456789',
            'email' => 'Fira@example.com',
            'doctor_name' => 'Alfira.Amd',
            'unique_code' => '123456',
        ]);

        $this->call(DoctorSeeder::class);
    }
}
