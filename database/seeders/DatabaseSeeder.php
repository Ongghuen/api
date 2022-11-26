<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Listing;
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
    // User::factory(10)->create();
    $user = User::factory()->create([
      'name' => "Raihan Achmad",
      'email' => "raihan@gmail.com",
      'password' => bcrypt("hahaha"),
    ]);

    Listing::factory(5)->create([
      'user_id' => $user->id
    ]);

    // \App\Models\User::factory()->create([
    //     'name' => 'Test User',
    //     'email' => 'test@example.com',
    // ]);
  }
}
