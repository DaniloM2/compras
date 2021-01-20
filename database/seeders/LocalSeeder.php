<?php

namespace Database\Seeders;

use App\Models\Feira;
use App\Models\Local;
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
        foreach (Feira::all() as $feira) {
        	Local::factory(2)->create([
        		'feira_id' => $feira->id
        	]);
        }
    }
}
