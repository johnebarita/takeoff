<?php

namespace Database\Seeders;

use App\Models\PartUsage;
use Illuminate\Database\Seeder;

class PartUsageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        PartUsage::create(['name' => 'apron nogs',]);
        PartUsage::create(['name' => 'column',]);
        PartUsage::create(['name' => 'corners',]);
        PartUsage::create(['name' => 'door trim',]);
        PartUsage::create(['name' => 'footings',]);
        PartUsage::create(['name' => 'fascia',]);
        PartUsage::create(['name' => 'for piles',]);
        PartUsage::create(['name' => 'for starters',]);
        PartUsage::create(['name' => 'for slab',]);
        PartUsage::create(['name' => 'for stirrups',]);
        PartUsage::create(['name' => 'for links',]);
        PartUsage::create(['name' => 'girts',]);
        PartUsage::create(['name' => 'openings',]);
        PartUsage::create(['name' => 'posts',]);
        PartUsage::create(['name' => 'prop',]);
        PartUsage::create(['name' => 'purlins',]);
        PartUsage::create(['name' => 'rafters',]);
        PartUsage::create(['name' => 'slab',]);
        PartUsage::create(['name' => 'soffit',]);
        PartUsage::create(['name' => 'soffit nogs',]);
        PartUsage::create(['name' => 'walls',]);
        PartUsage::create(['name' => 'cladding',]);

    }
}
