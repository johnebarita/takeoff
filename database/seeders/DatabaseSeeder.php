<?php

namespace Database\Seeders;

use App\Models\PartSet;
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
        $this->call(ShedStructureSeeder::class);
        $this->call(PartUsageSeeder::class);
        $this->call(StructurePartSeeder::class);
        $this->call(PartComponentSeeder::class);
        $this->call(PartSetSeeder::class);
        $this->call(PartSetOverrideSeeder::class);
        $this->call(UserSeeder::class);
        $this->call(ItemSeeder::class);
    }
}
