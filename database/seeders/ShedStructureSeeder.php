<?php

namespace Database\Seeders;

use App\Models\ShedStructure;
use Illuminate\Database\Seeder;

class ShedStructureSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        ShedStructure::create(['name' => 'Foundations',]);
        ShedStructure::create(['name' => 'Ext Openings',]);
        ShedStructure::create(['name' => 'Post & Beam Hardware',]);
        ShedStructure::create(['name' => 'Walls Sgl Lev',]);
        ShedStructure::create(['name' => 'Roof',]);
        ShedStructure::create(['name' => 'Ext Lining',]);
        ShedStructure::create(['name' => 'Miscellaneous',]);
    }
}
