<?php

namespace Database\Seeders;

use App\Models\StructurePart;
use Illuminate\Database\Seeder;

class StructurePartSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //Foundations
        StructurePart::create(['name' => 'Concrete Bores','shed_structure_id'=>1,'hasQty'=>true,'hasDepth'=>true]);
        StructurePart::create(['name' => 'Footings','shed_structure_id'=>1,'hasDepth'=>true,'hasWidth'=>true,'hasLength'=>true]);
        StructurePart::create(['name' => 'Concrete Floor','shed_structure_id'=>1,'hasThickness'=>true,'hasWidth'=>true,'hasLength'=>true]);

        //Ext Openings
        StructurePart::create(['name' => 'Garage Door','shed_structure_id'=>2,'hasHeight'=>true,'hasWidth'=>true]);
        StructurePart::create(['name' => 'Doors','shed_structure_id'=>2,'hasHeight'=>true,'hasWidth'=>true]);
        StructurePart::create(['name' => 'Windows','shed_structure_id'=>2,'hasHeight'=>true,'hasWidth'=>true]);

        //Post & Beam Hardware
        StructurePart::create(['name' => 'Posts','shed_structure_id'=>3]);
        StructurePart::create(['name' => 'Post Brackets','shed_structure_id'=>3,'hasEnter'=>true,'hasQty'=>true]);

        //Walls Sgl Lev
        StructurePart::create(['name' => 'Flitched Lintels','shed_structure_id'=>4,'hasLength'=>true]);

        //Roof
        StructurePart::create(['name' => 'Roof Beams','shed_structure_id'=>5,'hasPitch'=>true]);
        StructurePart::create(['name' => 'Skillon Measured','shed_structure_id'=>5,'hasPitch'=>true,'hasWidth'=>true,'hasLength'=>true]);
        StructurePart::create(['name' => 'Common Roof','shed_structure_id'=>5,'hasPitch'=>true,'hasWidth'=>true,'hasLength'=>true]);
        StructurePart::create(['name' => 'Ridges','shed_structure_id'=>5,'hasLength'=>true]);
        StructurePart::create(['name' => 'Standard Soffit','shed_structure_id'=>5,'hasPitch'=>true,'hasWidth'=>true,'hasLength'=>true]);
        StructurePart::create(['name' => 'Barge','shed_structure_id'=>5,'hasPitch'=>true,'hasLength'=>true]);
        StructurePart::create(['name' => 'Fascia','shed_structure_id'=>5,'hasLength'=>true]);
        StructurePart::create(['name' => 'Spouting Measured','shed_structure_id'=>5,'hasLeave'=>true]);
        StructurePart::create(['name' => 'Aprons','shed_structure_id'=>5,'hasLength'=>true,'hasPitch'=>true]);

        //Ext Lining
        StructurePart::create(['name' => 'Gnd Level','shed_structure_id'=>6,'hasHeight'=>true,'hasLength'=>true,'hasDeduction'=>true]);
        StructurePart::create(['name' => 'Gnd Ext Corners','shed_structure_id'=>6,'hasQty'=>true,'hasHeight'=>true]);

        //Miscellaneous
        StructurePart::create(['name' => 'Sundries','shed_structure_id'=>7,'hasEnter'=>true]);
        StructurePart::create(['name' => 'Garage Door','shed_structure_id'=>7]);
        StructurePart::create(['name' => 'Entry Door','shed_structure_id'=>7]);
    }
}
