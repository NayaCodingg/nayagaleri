<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
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
        \App\Models\User::create([
            "Username" => "riosraskaa@gmail.com",
            "Alamat" => "riosraskaa@gmail.com",
            "password" => bcrypt("riosraskaa@gmail.com"),
            "email" => "riosraskaa@gmail.com",
            "NamaLengkap" => "riosraskaa@gmail.com",
        ]);
//    $table->string('Username');
// $table->string('password');
// $table->string('email');
// $table->string('NamaLengkap');
// $table->text('Alamat');
        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
    }
}
