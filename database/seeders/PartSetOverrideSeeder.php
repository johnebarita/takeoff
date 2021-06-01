<?php

namespace Database\Seeders;

use App\Models\PartSetOverride;
use Illuminate\Database\Seeder;

class PartSetOverrideSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        PartSetOverride::create(['override' => '25 Mpa', 'structure_part_id' => 1]);
        PartSetOverride::create(['override' => '30 Mpa', 'structure_part_id' => 1]);
    }
}
