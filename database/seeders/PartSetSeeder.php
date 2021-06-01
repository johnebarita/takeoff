<?php

namespace Database\Seeders;

use App\Models\PartSet;
use App\Models\PartUsage;
use Illuminate\Database\Seeder;

class PartSetSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        PartSet::create(['set' => '17.5 Mpa  D12 rod CHANGE','structure_part_id'=>1]);
        PartSet::create(['set' => '20 Mpa  D12 rod CHANGE','structure_part_id'=>1]);
    }
}
