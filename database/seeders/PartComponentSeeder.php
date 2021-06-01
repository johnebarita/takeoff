<?php

namespace Database\Seeders;

use App\Models\PartComponent;
use Illuminate\Database\Seeder;

class PartComponentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //Foundations
        //Concrete Bores
        PartComponent::create(['name' => 'Conc', 'structure_part_id' => 1, 'part_usage_id' => 7, 'factor' => 1, 'waste' => 10.0]);
        PartComponent::create(['name' => 'Rod', 'structure_part_id' => 1, 'part_usage_id' => 7, 'factor' => 0.167, 'waste' => 10.0]);
        PartComponent::create(['name' => 'Rod For Stirrups', 'structure_part_id' => 1, 'part_usage_id' => 10, 'factor' => 0.167, 'waste' => 10.0]);
        PartComponent::create(['name' => 'Rod For Links', 'structure_part_id' => 1, 'part_usage_id' => 11, 'factor' => 0.167, 'waste' => 10.0]);

        //Footings
        PartComponent::create(['name' => 'Concrete', 'structure_part_id' => 2, 'part_usage_id' => 5, 'pitch' => 1.0, 'waste' => 10]);
        PartComponent::create(['name' => 'Steel Rod A', 'structure_part_id' => 2, 'part_usage_id' => 5, 'factor' => 0.167, 'waste' => 20]);
        PartComponent::create(['name' => 'Steel Rod B', 'structure_part_id' => 2, 'part_usage_id' => 5, 'factor' => 0.167, 'waste' => 20]);
        PartComponent::create(['name' => 'Rod For Starters A', 'structure_part_id' => 2, 'part_usage_id' => 8, 'factor' => 0.167, 'waste' => 10]);
        PartComponent::create(['name' => 'Rod For Starters B', 'structure_part_id' => 2, 'part_usage_id' => 8, 'factor' => 0.167, 'waste' => 10]);
        PartComponent::create(['name' => 'Rod For Starters C', 'structure_part_id' => 2, 'part_usage_id' => 8, 'factor' => 0.167, 'waste' => 10]);
        PartComponent::create(['name' => 'Rod For Stirrups', 'structure_part_id' => 2, 'part_usage_id' => 10, 'factor' => 0.167, 'waste' => 10]);
        PartComponent::create(['name' => 'Rod For Links', 'structure_part_id' => 2, 'part_usage_id' => 11, 'factor' => 0.167, 'waste' => 10]);
        PartComponent::create(['name' => 'Bar Chair', 'structure_part_id' => 2, 'factor' => 1.0,]);
        PartComponent::create(['name' => 'Tie Wire', 'structure_part_id' => 2,]);
        PartComponent::create(['name' => 'Block Pallets', 'structure_part_id' => 2,'forEach'=>1.0]);
        PartComponent::create(['name' => 'Sand', 'structure_part_id' => 2, 'factor' => 1.0,]);
        PartComponent::create(['name' => 'Cement', 'structure_part_id' => 2, 'factor' => 1.0,]);
        PartComponent::create(['name' => 'Mortar Plasticiser', 'structure_part_id' => 2, 'factor' => 0.05,]);

        //Concrete Floors
        PartComponent::create(['name' => 'Cnr Bars', 'structure_part_id' => 3, 'part_usage_id' => 9, 'factor' => 0.167, 'waste' => 20.0]);
        PartComponent::create(['name' => 'Spare 1', 'structure_part_id' => 3, 'part_usage_id' => 18, 'factor' => 0.167,]);
        PartComponent::create(['name' => 'Hard Fill', 'structure_part_id' => 3, 'factor' => 1.0, 'waste' => 40]);
        PartComponent::create(['name' => 'Blinding', 'structure_part_id' => 3, 'factor' => 1.0, 'waste' => 10]);
        PartComponent::create(['name' => 'Underlay', 'structure_part_id' => 3, 'part_usage_id' => 18, 'pitch' => 1.0, 'waste' => 15]);
        PartComponent::create(['name' => 'Underlay Tape', 'structure_part_id' => 3, 'part_usage_id' => 18, 'pitch' => 1.0, 'waste' => 5]);
        PartComponent::create(['name' => 'Spacers', 'structure_part_id' => 3, 'part_usage_id' => 18, 'pitch' => 1.0,]);
        PartComponent::create(['name' => 'Steel Mesh', 'structure_part_id' => 3, 'pitch' => 1.0,]);
        PartComponent::create(['name' => 'Tie Wire', 'structure_part_id' => 3, 'pitch' => 1.0,]);
        PartComponent::create(['name' => 'Concrete', 'structure_part_id' => 3, 'part_usage_id' => 18, 'pitch' => 1.0, 'waste' => 5]);


        //Ext Openings
        //Garage Door
        PartComponent::create(['name' => 'Tape Head Flash', 'structure_part_id' => 4, 'part_usage_id' => 13, 'waste' => 20]);
        PartComponent::create(['name' => 'Tape 4 Cnrs', 'structure_part_id' => 4, 'part_usage_id' => 13, 'factor' => 0.04,]);
        PartComponent::create(['name' => 'Jamb Heads', 'structure_part_id' => 4, 'part_usage_id' => 4,]);
        PartComponent::create(['name' => 'Jamb Sides', 'structure_part_id' => 4, 'part_usage_id' => 4, 'factor' => 1.0]);
        PartComponent::create(['name' => 'Air Seal', 'structure_part_id' => 4, 'part_usage_id' => 13, 'factor' => 1.0, 'waste' => 10]);
        PartComponent::create(['name' => 'Air Seal Foam', 'structure_part_id' => 4, 'part_usage_id' => 13, 'factor' => 1.0,]);
        PartComponent::create(['name' => 'Side Packing', 'structure_part_id' => 4, 'part_usage_id' => 13, 'factor' => 1.0]);
        PartComponent::create(['name' => 'Side Packing B', 'structure_part_id' => 4, 'part_usage_id' => 13, 'factor' => 1.0, 'waste' => 10]);

        //Doors
        PartComponent::create(['name' => 'Tape Head Flash', 'structure_part_id' => 5, 'part_usage_id' => 13, 'waste' => 20]);
        PartComponent::create(['name' => 'Tape 4 Cnrs', 'structure_part_id' => 5, 'part_usage_id' => 13, 'factor' => 0.04,]);
        PartComponent::create(['name' => 'Tape Sill', 'structure_part_id' => 5, 'part_usage_id' => 13, 'waste' => 10]);
        PartComponent::create(['name' => 'Air Seal', 'structure_part_id' => 5, 'part_usage_id' => 13, 'factor' => 1.0, 'waste' => 10]);
        PartComponent::create(['name' => 'Air Seal Foam', 'structure_part_id' => 5, 'part_usage_id' => 13, 'factor' => 1.0]);
        PartComponent::create(['name' => 'Side Packing', 'structure_part_id' => 5, 'part_usage_id' => 13, 'factor' => 1.0]);
        PartComponent::create(['name' => 'Side Packing B', 'structure_part_id' => 5, 'part_usage_id' => 13, 'factor' => 1.0, 'waste' => 10]);

        //Windows
        PartComponent::create(['name' => 'Corner Pieces', 'structure_part_id' => 6, 'part_usage_id' => 13, 'factor' => 1.0,]);
        PartComponent::create(['name' => 'Tape Head Flash', 'structure_part_id' => 6, 'part_usage_id' => 13, 'waste' => 20]);
        PartComponent::create(['name' => 'Tape 4 Cnrs', 'structure_part_id' => 6, 'part_usage_id' => 13, 'factor' => 0.04,]);
        PartComponent::create(['name' => 'Tape Sill', 'structure_part_id' => 6, 'part_usage_id' => 13, 'waste' => 15]);
        PartComponent::create(['name' => 'Air Seal', 'structure_part_id' => 6, 'part_usage_id' => 13, 'factor' => 1.0]);
        PartComponent::create(['name' => 'Air Seal Foam', 'structure_part_id' => 6, 'part_usage_id' => 13, 'factor' => 1.0, 'waste' => 10]);
        PartComponent::create(['name' => 'Side Packing', 'structure_part_id' => 6, 'part_usage_id' => 13, 'factor' => 1.0, 'waste' => 10]);
        PartComponent::create(['name' => 'Side Packing B', 'structure_part_id' => 6, 'part_usage_id' => 13, 'factor' => 1.0, 'waste' => 10]);

        //Post & Beam Hardware
        //Posts
        PartComponent::create(['name' => 'Laminated Post Sgl Lev', 'structure_part_id' => 7, 'part_usage_id' => 14, 'factor' => 1.0,]);
        PartComponent::create(['name' => 'Laminated Post Bsmnt', 'structure_part_id' => 7, 'part_usage_id' => 14, 'factor' => 1.0,]);
        PartComponent::create(['name' => 'Laminated Post Gnd Lev', 'structure_part_id' => 7, 'part_usage_id' => 14, 'factor' => 1.0,]);

        //Post Brackets
        PartComponent::create(['name' => 'Bottom Bracket', 'structure_part_id' => 8, 'part_usage_id' => 14, 'factor' => 1.0,]);
        PartComponent::create(['name' => 'Bottom Bolts', 'structure_part_id' => 8, 'part_usage_id' => 14,'forEach'=>1.0]);
        PartComponent::create(['name' => 'Bottom Washers', 'structure_part_id' => 8, 'part_usage_id' => 14, 'factor' => 1.0,]);
        PartComponent::create(['name' => 'Timber Bolts', 'structure_part_id' => 8, 'part_usage_id' => 14, 'factor' => 1.0,]);
        PartComponent::create(['name' => 'Timber Washers', 'structure_part_id' => 8, 'part_usage_id' => 14, 'factor' => 1.0,]);
        PartComponent::create(['name' => 'Timber Bolts B', 'structure_part_id' => 8, 'part_usage_id' => 14, 'factor' => 1.0,]);
        PartComponent::create(['name' => 'Timber Nuts B', 'structure_part_id' => 8, 'part_usage_id' => 14, 'factor' => 1.0,]);
        PartComponent::create(['name' => 'Timber Washers B', 'structure_part_id' => 8, 'part_usage_id' => 14, 'factor' => 1.0,]);
        PartComponent::create(['name' => 'Spare 1', 'structure_part_id' => 8, 'part_usage_id' => 2, 'factor' => 1.0,'waste'=>5]);
        PartComponent::create(['name' => 'Spare 2', 'structure_part_id' => 8, 'part_usage_id' => 2, 'factor' => 1.0,'waste'=>5]);

        //Walls Sgl Lev
        //Flitched Lintels
        PartComponent::create(['name' => 'Lintel A', 'structure_part_id' => 9, 'part_usage_id' => 12, 'factor' => 1.0,]);
        PartComponent::create(['name' => 'Lintel B', 'structure_part_id' => 9, 'part_usage_id' => 12, 'factor' => 1.0,]);
        PartComponent::create(['name' => 'Lintel C', 'structure_part_id' => 9, 'part_usage_id' => 12, 'factor' => 1.0,]);
        PartComponent::create(['name' => 'Lintel D', 'structure_part_id' => 9, 'part_usage_id' => 12, 'factor' => 1.0,]);
        PartComponent::create(['name' => 'Lintel E', 'structure_part_id' => 9, 'part_usage_id' => 2, 'factor' => 1.0,]);
        PartComponent::create(['name' => 'Lintel F', 'structure_part_id' => 9, 'part_usage_id' => 2, 'factor' => 1.0,]);
        PartComponent::create(['name' => 'Spare 2', 'structure_part_id' => 9, 'part_usage_id' => 21, 'factor' => 1.0,]);
        PartComponent::create(['name' => 'Spare 3', 'structure_part_id' => 9, 'part_usage_id' => 2, 'factor' => 0.238,]);

        //Roof
        //Roof Beams
        PartComponent::create(['name' => 'LVL A', 'structure_part_id' => 10, 'part_usage_id' => 17, 'pitch' => 1.004,]);
        PartComponent::create(['name' => 'LVL B', 'structure_part_id' => 10, 'part_usage_id' => 17, 'pitch' => 1.004,]);
        PartComponent::create(['name' => 'Flitched A', 'structure_part_id' => 10, 'part_usage_id' => 17, 'factor' => 1.0,]);
        PartComponent::create(['name' => 'Flitched B', 'structure_part_id' => 10, 'part_usage_id' => 17, 'factor' => 1.0,]);
        PartComponent::create(['name' => 'Flitched C', 'structure_part_id' => 10, 'part_usage_id' => 15, 'factor' => 1.0,]);
        PartComponent::create(['name' => 'Flitched D', 'structure_part_id' => 10, 'part_usage_id' => 16, 'factor' => 1.0,]);
        PartComponent::create(['name' => 'Flitched E', 'structure_part_id' => 10, 'part_usage_id' => 16, 'factor' => 1.0,]);
        PartComponent::create(['name' => 'Flitched F', 'structure_part_id' => 10, 'part_usage_id' => 17, 'factor' => 1.0,]);

        //Skillon Measured
        PartComponent::create(['name' => 'Joist Hanger', 'structure_part_id' => 11, 'part_usage_id' => 16, 'factor' => 1.0, 'waste' => 5]);
        PartComponent::create(['name' => 'Joist Hanger B', 'structure_part_id' => 11, 'part_usage_id' => 16, 'factor' => 1.0, 'waste' => 5]);
        PartComponent::create(['name' => 'Brackets', 'structure_part_id' => 11, 'part_usage_id' => 16, 'factor' => 1.0, 'waste' => 5]);
        PartComponent::create(['name' => 'Screws', 'structure_part_id' => 11, 'part_usage_id' => 16, 'factor' => 1.0, 'waste' => 5]);
        PartComponent::create(['name' => 'Multigrips', 'structure_part_id' => 11, 'part_usage_id' => 16, 'factor' => 1.0,]);
        PartComponent::create(['name' => 'Multigrips Fixing', 'structure_part_id' => 11, 'part_usage_id' => 16,'forEach'=>1.0]);
        PartComponent::create(['name' => 'Spare 2', 'structure_part_id' => 11, 'factor' => 1.0,]);
        PartComponent::create(['name' => 'Spare 3', 'structure_part_id' => 11, 'factor' => 1.0,]);

        //Common Roof
        PartComponent::create(['name' => 'Underlay', 'structure_part_id' => 12, 'pitch' => 1.004, 'waste' => 20]);
        PartComponent::create(['name' => 'Underlay Support', 'structure_part_id' => 12, 'pitch' => 1.004,]);
        PartComponent::create(['name' => 'Roofing', 'structure_part_id' => 12, 'pitch' => 1.004, 'waste' => 10]);
        PartComponent::create(['name' => 'Roof Fixings', 'structure_part_id' => 12,'forEach'=>1]);
        PartComponent::create(['name' => 'Spare 1', 'structure_part_id' => 12, 'factor' => 1.0]);
        PartComponent::create(['name' => 'Spare 2', 'structure_part_id' => 12, 'factor' => 1.0]);
        PartComponent::create(['name' => 'Spare 3', 'structure_part_id' => 12, 'factor' => 1.0]);
        PartComponent::create(['name' => 'Spare 4', 'structure_part_id' => 12, 'factor' => 1.0]);

        //Ridges
        PartComponent::create(['name' => 'Cladding', 'structure_part_id' => 13, 'pitch' => 1.0,'factor' => 1.0,'waste'=>10]);

        //Standard Soffit
        PartComponent::create(['name' => 'Extra Nog', 'structure_part_id' => 14, 'part_usage_id' => 20, 'factor' => 1.0, 'waste' => 5]);
        PartComponent::create(['name' => 'Precut Nog', 'structure_part_id' => 14, 'part_usage_id' => 20, 'factor' => 1.0,]);
        PartComponent::create(['name' => 'Lining', 'structure_part_id' => 14, 'part_usage_id' => 19, 'pitch' => 1.004, 'waste' => 10]);
        PartComponent::create(['name' => 'Lining Fixings', 'structure_part_id' => 14,'forEach'=>0.0039]);
        PartComponent::create(['name' => 'Jointers', 'structure_part_id' => 14, 'factor' => 0.416,'waste'=>10]);
        PartComponent::create(['name' => 'Frame Nails', 'structure_part_id' => 14, 'factor' => 0.000350]);
        PartComponent::create(['name' => 'Spare 1', 'structure_part_id' => 14, 'part_usage_id' => 20, 'factor' => 1]);

        //Barge
        PartComponent::create(['name' => 'Barge A', 'structure_part_id' => 15, 'part_usage_id' => 6, 'factor' => 1,'waste'=>10]);
        PartComponent::create(['name' => 'Barge Fixing', 'structure_part_id' => 15, 'part_usage_id' => 6, 'factor' => 0.01]);
        PartComponent::create(['name' => 'Flashing', 'structure_part_id' => 15, 'part_usage_id' => 6, 'factor' => 1,'waste'=>10]);

        //Fascia
        PartComponent::create(['name' => 'Fascia', 'structure_part_id' => 16, 'part_usage_id' => 6,'waste'=>10]);
        PartComponent::create(['name' => 'Fascia Fixing', 'structure_part_id' => 16, 'part_usage_id' => 6, 'factor' => 0.01]);
        PartComponent::create(['name' => 'Eaves Flashing', 'structure_part_id' => 16, 'part_usage_id' => 6,'waste'=>10]);
        PartComponent::create(['name' => 'Spouting Bkts', 'structure_part_id' => 16, 'part_usage_id' => 6, 'factor' => 1]);

        //Spouting Measured
        PartComponent::create(['name' => 'Spouting 5.0', 'structure_part_id' => 17, 'factor' => 1]);
        PartComponent::create(['name' => 'Spouting 3.0', 'structure_part_id' => 17, 'factor' => 1]);
        PartComponent::create(['name' => 'Spouting Brackets', 'structure_part_id' => 17, 'factor' => 1]);
        PartComponent::create(['name' => 'Bkt Fixing', 'structure_part_id' => 17,'forEach'=>0.005]);
        PartComponent::create(['name' => 'Joint Compound', 'structure_part_id' => 17, 'factor' => 1]);
        PartComponent::create(['name' => 'Expan Outlet', 'structure_part_id' => 17, 'factor' => 1]);
        PartComponent::create(['name' => 'Downpipe', 'structure_part_id' => 17, 'factor' => 1]);
        PartComponent::create(['name' => 'D/Pipe Bend', 'structure_part_id' => 17, 'factor' => 1]);
        PartComponent::create(['name' => 'Downpipe Clips', 'structure_part_id' => 17,'forEach'=>1.0]);
        PartComponent::create(['name' => 'Spounting Jointer', 'structure_part_id' => 17, 'factor' => 1]);
        PartComponent::create(['name' => 'Expan Jointer', 'structure_part_id' => 17, 'factor' => 1]);
        PartComponent::create(['name' => 'Stopend R/H', 'structure_part_id' => 17, 'factor' => 1]);
        PartComponent::create(['name' => 'Stopend L/H', 'structure_part_id' => 17, 'factor' => 1]);
        PartComponent::create(['name' => 'Internal Cnr', 'structure_part_id' => 17, 'factor' => 1]);
        PartComponent::create(['name' => 'External Cnr', 'structure_part_id' => 17, 'factor' => 1]);

        //Aprons
        PartComponent::create(['name' => 'Flashing', 'structure_part_id' => 18, 'factor' => 1.0, 'waste' => 10]);
        PartComponent::create(['name' => 'Spare 1', 'structure_part_id' => 18, 'part_usage_id' => 1, 'factor' => 1.0,]);

        //Ext Lining
        //Gnd Level
        PartComponent::create(['name' => 'Building Paper', 'structure_part_id' => 19, 'factor' => 0.022153, 'waste' => 10]);
        PartComponent::create(['name' => 'Cladding', 'structure_part_id' => 19, 'factor' => 1.315, 'waste' => 10]);
        PartComponent::create(['name' => 'Cladding Fixing', 'structure_part_id' => 19,'forEach'=>1]);
        PartComponent::create(['name' => 'Spare 1', 'structure_part_id' => 19, 'part_usage_id' => 22, 'factor' => 1,]);

        //Gnd Ext Corners
        PartComponent::create(['name' => 'Ext Corner', 'structure_part_id' => 20, 'part_usage_id' => 3, 'factor' => 1,]);

        //Miscellaneous
        //Sundries
        PartComponent::create(['name' => 'Sealant A', 'structure_part_id' => 21, 'factor' => 1.0,]);
        PartComponent::create(['name' => 'Sealant B', 'structure_part_id' => 21, 'factor' => 1.0,]);
        PartComponent::create(['name' => 'Spare C', 'structure_part_id' => 21, 'factor' => 1.0,]);
        PartComponent::create(['name' => 'Spare D', 'structure_part_id' => 21, 'factor' => 1.0,]);
        PartComponent::create(['name' => 'Spare E', 'structure_part_id' => 21, 'factor' => 1.0,]);
        PartComponent::create(['name' => 'Spare F', 'structure_part_id' => 21, 'factor' => 1.0,]);

        //Garage Door
        PartComponent::create(['name' => 'Door A', 'structure_part_id' => 22, 'factor' => 1.0,]);
        PartComponent::create(['name' => 'Door B', 'structure_part_id' => 22, 'factor' => 1.0,]);
        PartComponent::create(['name' => 'Door C', 'structure_part_id' => 22, 'factor' => 1.0,]);
        PartComponent::create(['name' => 'Auto Opener A', 'structure_part_id' => 22, 'factor' => 1.0,]);
        PartComponent::create(['name' => 'Auto Opener B', 'structure_part_id' => 22, 'factor' => 1.0,]);
        PartComponent::create(['name' => 'Auto Opener C', 'structure_part_id' => 22, 'factor' => 1.0,]);

        //Entry Door
        PartComponent::create(['name' => 'Door', 'structure_part_id' => 23,'factor' => 1.0,]);
    }
}
