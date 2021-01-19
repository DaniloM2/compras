<?php

namespace Database\Seeders;

use App\Models\Feira;
use App\Models\User;
use Illuminate\Database\Seeder;

class FeiraSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
  public function run(){
    $users = User::All();
      foreach ($users as $user) {
        Feira::factory(2)->create([
          'user_id' => $user->id
      ]);
    }
  }	
}
