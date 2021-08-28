<?php

namespace Database\Seeders;

use App\Models\Item;
use Illuminate\Database\Seeder;

class ItemSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $csvFileName = "tbl_carters.csv";
        $csvFile = storage_path('csv/' . $csvFileName);

        $csv = array_map('str_getcsv', file($csvFile));
        array_walk($csv, function (&$a) use ($csv) {
            $a = array_combine($csv[0], $a);
        });

        array_shift($csv);
        foreach ($csv as $key => $item) {
            if ($item['SKU'] == "") {
                $item['SKU'] = $item['Code'];
            }
            Item::create(['code'=>$item['Code'],'sku' => $item['SKU'], 'description' =>  $item['Description'], 'unit' => $item['Unit']]);
        }

    }
}
