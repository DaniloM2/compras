<?php

namespace Database\Seeders;

use App\Models\Feira;
use App\Models\Local;
use App\Models\User;
use Illuminate\Database\Seeder;

class LocalSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {    
    $users = User::All();
        foreach ($users as $user) {
            foreach (Feira::where('user_id', $user->id)->get() as $feira) {
                Local::factory(1)->create([
                    'user_id' => $user->id,
                    'feira_id' => $feira->id,
                ]);
            }
        }
    }
}
