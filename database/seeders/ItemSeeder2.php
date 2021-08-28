<?php
//
//namespace Database\Seeders;
//
//use App\Models\Item;
//use Illuminate\Database\Seeder;
//
//class ItemSeeder extends Seeder
//{
//    /**
//     * Run the database seeds.
//     *
//     * @return void
//     */
//    public function run()
//    {
//
//        Item::create(['sku' => '32100672', 'description' => 'Structural Concrete 17.5MPa 13mm', 'unit' => 'm3']);
//        Item::create(['sku' => '32100736', 'description' => 'Structural Concrete 25MPa 13mm', 'unit' => 'm3']);
//        Item::create(['sku' => '32100768', 'description' => 'Structural Concrete 30MPa 13mm', 'unit' => 'm3']);
//        Item::create(['sku' => '32100800', 'description' => 'Structural Concrete 15MPa 19mm', 'unit' => 'm3']);
//        Item::create(['sku' => '32100826', 'description' => 'Structural Concrete 17.5MPa 20mm', 'unit' => 'm3']);
//        Item::create(['sku' => '32100832', 'description' => 'Structural Concrete 17.5MPa 19mm', 'unit' => 'm3']);
//        Item::create(['sku' => '32100864', 'description' => 'Structural Concrete 20MPa 19mm', 'unit' => 'm3']);
//        Item::create(['sku' => '32100896', 'description' => 'Structural Concrete 25MPa 19mm', 'unit' => 'm3']);
//        Item::create(['sku' => '32100928', 'description' => 'Structural Concrete 30MPa 19mm', 'unit' => 'm3']);
//        Item::create(['sku' => '32100960', 'description' => 'Pump Concrete	20MPa 10mm', 'unit' => 'm3']);
//        Item::create(['sku' => '32100992', 'description' => 'Pump Concrete	25MPa 10mm', 'unit' => 'm3']);
//        Item::create(['sku' => '32101024', 'description' => 'Pump Concrete	30MPa 10mm', 'unit' => 'm3']);
//        Item::create(['sku' => '32101056', 'description' => 'Pump Concrete	17MPa 13mm', 'unit' => 'm3']);
//        Item::create(['sku' => '32101088', 'description' => 'Pump Concrete	20MPa 13mm', 'unit' => 'm3']);
//        Item::create(['sku' => '32101120', 'description' => 'Pump Concrete	25MPa 13mm', 'unit' => 'm3']);
//        Item::create(['sku' => '32101152', 'description' => 'Pump Concrete	30MPa 13mm', 'unit' => 'm3']);
//        Item::create(['sku' => '32101184', 'description' => 'Pump Concrete	17.5MPa 19mm', 'unit' => 'm3']);
//        Item::create(['sku' => '32101216', 'description' => 'Pump Concrete	20MPa 19mm', 'unit' => 'm3']);
//        Item::create(['sku' => '32101248', 'description' => 'Pump Concrete	25MPa 19mm', 'unit' => 'm3']);
//        Item::create(['sku' => '32101280', 'description' => 'Pump Concrete	30MPa 19mm', 'unit' => 'm3']);
//        Item::create(['sku' => '32101312', 'description' => 'Pump Concrete	35MPa 19mm', 'unit' => 'm3']);
//
//        Item::create(['sku' => '14704064', 'description' => '100x25 NZ Oregon SG8 PG [MSG]', 'unit' => 'mtr']);
//        Item::create(['sku' => '32707360', 'description' => 'Formatube Column Former     203mm x 3m', 'unit' => 'lgth']);
//        Item::create(['sku' => '32707616', 'description' => 'Formatube Column Former     296mm x 3m', 'unit' => 'lgth']);
//        Item::create(['sku' => '32707680', 'description' => 'Formatube Column Former     296mm x 4.5m', 'unit' => 'lgth']);
//        Item::create(['sku' => '28000324', 'description' => 'Gib Sound Barrier - Concrete 1200x900x9.5mm', 'unit' => 'sht']);
//        Item::create(['sku' => '35000001', 'description' => 'Reinforcing Steel Link          R6 x 125', 'unit' => 'each']);
//        Item::create(['sku' => '35002112', 'description' => 'Reinforcing Steel Link          R6 x 250', 'unit' => 'each']);
//        Item::create(['sku' => '35001536', 'description' => 'Steel Reinfor Bar Def Rnd Grade 500 HD10mmx6m', 'unit' => 'lgth']);
//        Item::create(['sku' => '35001600', 'description' => 'Steel Reinfor Bar Def Rnd Grade 500 HD12mmx6m', 'unit' => 'lgth']);
//        Item::create(['sku' => '35001664', 'description' => 'Steel Reinfor Bar Def Rnd Grade 500 HD16mmx6m', 'unit' => 'lgth']);
//        Item::create(['sku' => '35001728', 'description' => 'Steel Reinfor Bar Def Rnd Grade 500 HD20mmx6m', 'unit' => 'lgth']);
//        Item::create(['sku' => '35001792', 'description' => 'Steel Reinfor Bar Def Rnd Grade 500 HD24mmx6m', 'unit' => 'lgth']);
//        Item::create(['sku' => '35000960', 'description' => 'Steel Reinfor Bar Pl Rnd Gr 430  10mmx6m', 'unit' => 'lgth']);
//        Item::create(['sku' => '35001024', 'description' => 'Steel Reinfor Bar Pl Rnd Gr 430  12mmx6m', 'unit' => 'lgth']);
//        Item::create(['sku' => '35001088', 'description' => 'Steel Reinfor Bar Pl Rnd Gr 430  16mmx6m', 'unit' => 'lgth']);
//        Item::create(['sku' => '35001152', 'description' => 'Steel Reinfor Bar Pl Rnd Gr 430  20mmx6m', 'unit' => 'lgth']);
//        Item::create(['sku' => '35001216', 'description' => 'Steel Reinforcg Deformed Rnd Bar D10mmx6m', 'unit' => 'lgth']);
//        Item::create(['sku' => '35001280', 'description' => 'Steel Reinforcg Deformed Rnd Bar D12mmx6m', 'unit' => 'lgth']);
//        Item::create(['sku' => '35001344', 'description' => 'Steel Reinforcg Deformed Rnd Bar D16mmx6m', 'unit' => 'lgth']);
//        Item::create(['sku' => '35001408', 'description' => 'Steel Reinforcg Deformed Rnd Bar D20mmx6m', 'unit' => 'lgth']);
//        Item::create(['sku' => '35001472', 'description' => 'Steel Reinforcg Deformed Rnd Bar D24mmx6m', 'unit' => 'lgth']);
//        Item::create(['sku' => '35000640', 'description' => 'Steel Reinforcing Plain Rnd Bar  R6mmx6m', 'unit' => 'lgth']);
//        Item::create(['sku' => '35000704', 'description' => 'Steel Reinforcing Plain Rnd Bar  R10mmx6m', 'unit' => 'lgth']);
//        Item::create(['sku' => '35000768', 'description' => 'Steel Reinforcing Plain Rnd Bar  R12mmx6m', 'unit' => 'lgth']);
//        Item::create(['sku' => '35000832', 'description' => 'Steel Reinforcing Plain Rnd Bar  R16mmx6m', 'unit' => 'lgth']);
//        Item::create(['sku' => '35000896', 'description' => 'Steel Reinforcing Plain Rnd Bar  R20mmx6m', 'unit' => 'lgth']);
//
//        Item::create(['sku' => '23100000', 'description' => 'Pole Round H5 7.0m SED 350mm', 'unit' => 'each']);
//        Item::create(['sku' => '23100001', 'description' => 'Pole Round H5 8.0m SED 275mm', 'unit' => 'each']);
//        Item::create(['sku' => '23100002', 'description' => 'Pole Round H5 7.0m SED 275mm', 'unit' => 'each']);
//        Item::create(['sku' => '23100640', 'description' => 'Pole Round H5 0.9m SED 125mm', 'unit' => 'each']);
//        Item::create(['sku' => '23100768', 'description' => 'Pole Round H5 1.2m SED 125mm', 'unit' => 'each']);
//        Item::create(['sku' => '23100896', 'description' => 'Pole Round H5 1.5m SED 125mm', 'unit' => 'each']);
//        Item::create(['sku' => '23101024', 'description' => 'Pole Round H5 1.8m SED 125mm', 'unit' => 'each']);
//        Item::create(['sku' => '23101152', 'description' => 'Pole Round H5 2.1m SED 125mm', 'unit' => 'each']);
//        Item::create(['sku' => '23101280', 'description' => 'Pole Round H5 2.4m SED 125mm', 'unit' => 'each']);
//        Item::create(['sku' => '23101408', 'description' => 'Pole Round H5 2.7m SED 125mm', 'unit' => 'each']);
//        Item::create(['sku' => '23101536', 'description' => 'Pole Round H5 3.0m SED 125mm', 'unit' => 'each']);
//        Item::create(['sku' => '23101664', 'description' => 'Pole Round H5 3.6m SED 125mm', 'unit' => 'each']);
//        Item::create(['sku' => '23101792', 'description' => 'Pole Round H5 4.2m SED 125mm', 'unit' => 'each']);
//        Item::create(['sku' => '23101920', 'description' => 'Pole Round H5 4.8m SED 125mm', 'unit' => 'each']);
//        Item::create(['sku' => '23102048', 'description' => 'Pole Round H5 5.4m SED 125mm', 'unit' => 'each']);
//        Item::create(['sku' => '23102176', 'description' => 'Pole Round H5 6.0m SED 125mm', 'unit' => 'each']);
//        Item::create(['sku' => '23102180', 'description' => 'Pole Round H5 7.0m SED 125mm', 'unit' => 'each']);
//        Item::create(['sku' => '23102184', 'description' => 'Pole Round H5 8.0m SED 125mm', 'unit' => 'each']);
//        Item::create(['sku' => '23102304', 'description' => 'Pole Round H5 0.9m SED 140mm', 'unit' => 'each']);
//        Item::create(['sku' => '23102432', 'description' => 'Pole Round H5 1.2m SED 140mm', 'unit' => 'each']);
//        Item::create(['sku' => '23102560', 'description' => 'Pole Round H5 1.5m SED 140mm', 'unit' => 'each']);
//        Item::create(['sku' => '23102688', 'description' => 'Pole Round H5 1.8m SED 140mm', 'unit' => 'each']);
//        Item::create(['sku' => '23102816', 'description' => 'Pole Round H5 2.1m SED 140mm', 'unit' => 'each']);
//        Item::create(['sku' => '23102944', 'description' => 'Pole Round H5 2.4m SED 140mm', 'unit' => 'each']);
//        Item::create(['sku' => '23103072', 'description' => 'Pole Round H5 2.7m SED 140mm', 'unit' => 'each']);
//        Item::create(['sku' => '23103200', 'description' => 'Pole Round H5 3.0m SED 140mm', 'unit' => 'each']);
//        Item::create(['sku' => '23103328', 'description' => 'Pole Round H5 3.6m SED 140mm', 'unit' => 'each']);
//        Item::create(['sku' => '23103456', 'description' => 'Pole Round H5 4.2m SED 140mm', 'unit' => 'each']);
//        Item::create(['sku' => '23103584', 'description' => 'Pole Round H5 4.8m SED 140mm', 'unit' => 'each']);
//        Item::create(['sku' => '23103712', 'description' => 'Pole Round H5 5.4m SED 140mm', 'unit' => 'each']);
//        Item::create(['sku' => '23103840', 'description' => 'Pole Round H5 6.0m SED 140mm', 'unit' => 'each']);
//        Item::create(['sku' => '23103968', 'description' => 'Pole Round H5 0.9m SED 150mm', 'unit' => 'each']);
//        Item::create(['sku' => '23104096', 'description' => 'Pole Round H5 1.2m SED 150mm', 'unit' => 'each']);
//        Item::create(['sku' => '23104224', 'description' => 'Pole Round H5 1.5m SED 150mm', 'unit' => 'each']);
//        Item::create(['sku' => '23104352', 'description' => 'Pole Round H5 1.8m SED 150mm', 'unit' => 'each']);
//        Item::create(['sku' => '23104480', 'description' => 'Pole Round H5 2.1m SED 150mm', 'unit' => 'each']);
//        Item::create(['sku' => '23104608', 'description' => 'Pole Round H5 2.4m SED 150mm', 'unit' => 'each']);
//        Item::create(['sku' => '23104736', 'description' => 'Pole Round H5 2.7m SED 150mm', 'unit' => 'each']);
//        Item::create(['sku' => '23104864', 'description' => 'Pole Round H5 3.0m SED 150mm', 'unit' => 'each']);
//        Item::create(['sku' => '23104992', 'description' => 'Pole Round H5 3.6m SED 150mm', 'unit' => 'each']);
//        Item::create(['sku' => '23105120', 'description' => 'Pole Round H5 4.2m SED 150mm', 'unit' => 'each']);
//        Item::create(['sku' => '23105248', 'description' => 'Pole Round H5 4.8m SED 150mm', 'unit' => 'each']);
//        Item::create(['sku' => '23105376', 'description' => 'Pole Round H5 5.4m SED 150mm', 'unit' => 'each']);
//        Item::create(['sku' => '23105504', 'description' => 'Pole Round H5 6.0m SED 150mm', 'unit' => 'each']);
//        Item::create(['sku' => '23105632', 'description' => 'Pole Round H5 7.0m SED 150mm', 'unit' => 'each']);
//        Item::create(['sku' => '23105760', 'description' => 'Pole Round H5 8.0m SED 150mm', 'unit' => 'each']);
//        Item::create(['sku' => '23105888', 'description' => 'Pole Round H5 1.8m SED 175mm', 'unit' => 'each']);
//        Item::create(['sku' => '23106016', 'description' => 'Pole Round H5 2.1m SED 175mm', 'unit' => 'each']);
//        Item::create(['sku' => '23106144', 'description' => 'Pole Round H5 2.4m SED 175mm', 'unit' => 'each']);
//        Item::create(['sku' => '23106272', 'description' => 'Pole Round H5 2.7m SED 175mm', 'unit' => 'each']);
//        Item::create(['sku' => '23106400', 'description' => 'Pole Round H5 3.0m SED 175mm', 'unit' => 'each']);
//        Item::create(['sku' => '23106528', 'description' => 'Pole Round H5 3.6m SED 175mm', 'unit' => 'each']);
//        Item::create(['sku' => '23106656', 'description' => 'Pole Round H5 4.2m SED 175mm', 'unit' => 'each']);
//        Item::create(['sku' => '23106784', 'description' => 'Pole Round H5 4.8m SED 175mm', 'unit' => 'each']);
//        Item::create(['sku' => '23106912', 'description' => 'Pole Round H5 5.4m SED 175mm', 'unit' => 'each']);
//        Item::create(['sku' => '23107040', 'description' => 'Pole Round H5 6.0m SED 175mm', 'unit' => 'each']);
//        Item::create(['sku' => '23107168', 'description' => 'Pole Round H5 7.0m SED 175mm', 'unit' => 'each']);
//        Item::create(['sku' => '23107296', 'description' => 'Pole Round H5 8.0m SED 175mm', 'unit' => 'each']);
//        Item::create(['sku' => '23107424', 'description' => 'Pole Round H5 1.8m SED 200mm', 'unit' => 'each']);
//        Item::create(['sku' => '23107552', 'description' => 'Pole Round H5 2.1m SED 200mm', 'unit' => 'each']);
//        Item::create(['sku' => '23107680', 'description' => 'Pole Round H5 2.4m SED 200mm', 'unit' => 'each']);
//        Item::create(['sku' => '23107808', 'description' => 'Pole Round H5 2.7m SED 200mm', 'unit' => 'each']);
//        Item::create(['sku' => '23107936', 'description' => 'Pole Round H5 3.0m SED 200mm', 'unit' => 'each']);
//        Item::create(['sku' => '23108064', 'description' => 'Pole Round H5 3.6m SED 200mm', 'unit' => 'each']);
//        Item::create(['sku' => '23108192', 'description' => 'Pole Round H5 4.2m SED 200mm', 'unit' => 'each']);
//        Item::create(['sku' => '23108320', 'description' => 'Pole Round H5 4.8m SED 200mm', 'unit' => 'each']);
//        Item::create(['sku' => '23108448', 'description' => 'Pole Round H5 5.4m SED 200mm', 'unit' => 'each']);
//        Item::create(['sku' => '23108576', 'description' => 'Pole Round H5 6.0m SED 200mm', 'unit' => 'each']);
//        Item::create(['sku' => '23108704', 'description' => 'Pole Round H5 7.0m SED 200mm', 'unit' => 'each']);
//        Item::create(['sku' => '23108832', 'description' => 'Pole Round H5 8.0m SED 200mm', 'unit' => 'each']);
//        Item::create(['sku' => '23108834', 'description' => 'Pole Round H5 1.8m SED 225mm', 'unit' => 'each']);
//        Item::create(['sku' => '23108836', 'description' => 'Pole Round H5 2.1m SED 225mm', 'unit' => 'each']);
//        Item::create(['sku' => '23108838', 'description' => 'Pole Round H5 2.4m SED 225mm', 'unit' => 'each']);
//        Item::create(['sku' => '23108840', 'description' => 'Pole Round H5 2.7m SED 225mm', 'unit' => 'each']);
//        Item::create(['sku' => '23108842', 'description' => 'Pole Round H5 3.0m SED 225mm', 'unit' => 'each']);
//        Item::create(['sku' => '23108844', 'description' => 'Pole Round H5 3.6m SED 225mm', 'unit' => 'each']);
//        Item::create(['sku' => '23108846', 'description' => 'Pole Round H5 4.2m SED 225mm', 'unit' => 'each']);
//        Item::create(['sku' => '23108848', 'description' => 'Pole Round H5 4.8m SED 225mm', 'unit' => 'each']);
//        Item::create(['sku' => '23108850', 'description' => 'Pole Round H5 5.4m SED 225mm', 'unit' => 'each']);
//        Item::create(['sku' => '23108852', 'description' => 'Pole Round H5 6.0m SED 225mm', 'unit' => 'each']);
//        Item::create(['sku' => '23108856', 'description' => 'Pole Round H5 7.0m SED 225mm', 'unit' => 'each']);
//        Item::create(['sku' => '23108858', 'description' => 'Pole Round H5 8.0m SED 225mm', 'unit' => 'each']);
//        Item::create(['sku' => '23108960', 'description' => 'Pole Round H5 1.8m SED 250mm', 'unit' => 'each']);
//        Item::create(['sku' => '23109088', 'description' => 'Pole Round H5 2.1m SED 250mm', 'unit' => 'each']);
//        Item::create(['sku' => '23109216', 'description' => 'Pole Round H5 2.4m SED 250mm', 'unit' => 'each']);
//        Item::create(['sku' => '23109344', 'description' => 'Pole Round H5 2.7m SED 250mm', 'unit' => 'each']);
//        Item::create(['sku' => '23109472', 'description' => 'Pole Round H5 3.0m SED 250mm', 'unit' => 'each']);
//        Item::create(['sku' => '23109600', 'description' => 'Pole Round H5 3.6m SED 250mm', 'unit' => 'each']);
//        Item::create(['sku' => '23109728', 'description' => 'Pole Round H5 4.2m SED 250mm', 'unit' => 'each']);
//        Item::create(['sku' => '23109856', 'description' => 'Pole Round H5 4.8m SED 250mm', 'unit' => 'each']);
//        Item::create(['sku' => '23109984', 'description' => 'Pole Round H5 5.4m SED 250mm', 'unit' => 'each']);
//        Item::create(['sku' => '23110112', 'description' => 'Pole Round H5 6.0m SED 250mm', 'unit' => 'each']);
//        Item::create(['sku' => '23110240', 'description' => 'Pole Round H5 7.0m SED 250mm', 'unit' => 'each']);
//        Item::create(['sku' => '23110368', 'description' => 'Pole Round H5 8.0m SED 250mm', 'unit' => 'each']);
//        Item::create(['sku' => '23110496', 'description' => 'Pole Round H5 1.8m SED 300mm', 'unit' => 'each']);
//        Item::create(['sku' => '23110624', 'description' => 'Pole Round H5 2.1m SED 300mm', 'unit' => 'each']);
//        Item::create(['sku' => '23110752', 'description' => 'Pole Round H5 2.4m SED 300mm', 'unit' => 'each']);
//        Item::create(['sku' => '23110880', 'description' => 'Pole Round H5 2.7m SED 300mm', 'unit' => 'each']);
//        Item::create(['sku' => '23111008', 'description' => 'Pole Round H5 3.0m SED 300mm', 'unit' => 'each']);
//        Item::create(['sku' => '23111136', 'description' => 'Pole Round H5 3.6m SED 300mm', 'unit' => 'each']);
//        Item::create(['sku' => '23111264', 'description' => 'Pole Round H5 4.2m SED 300mm', 'unit' => 'each']);
//        Item::create(['sku' => '23111392', 'description' => 'Pole Round H5 4.8m SED 300mm', 'unit' => 'each']);
//        Item::create(['sku' => '23111520', 'description' => 'Pole Round H5 5.4m SED 300mm', 'unit' => 'each']);
//        Item::create(['sku' => '23111648', 'description' => 'Pole Round H5 6.0m SED 300mm', 'unit' => 'each']);
//        Item::create(['sku' => '23111776', 'description' => 'Pole Round H5 7.0m SED 300mm', 'unit' => 'each']);
//        Item::create(['sku' => '23111904', 'description' => 'Pole Round H5 8.0m SED 300mm', 'unit' => 'each']);
//
//        Item::create(['sku' => '90031004', 'description' => '90x45 mm Rad SG8 H3.2 MG Wet 3.0 [MSG]', 'unit' => 'lgth']);
//        Item::create(['sku' => '90031032', 'description' => '140x45 mm Rad SG8 H3.2 MG Wet 3.0 [MSG]', 'unit' => 'lgth']);
//        Item::create(['sku' => '90031060', 'description' => '190x45 mm Rad SG8 H3.2 MG Wet 3.0 [MSG]', 'unit' => 'lgth']);
//        Item::create(['sku' => '90031090', 'description' => '240x45 mm Rad SG8 H3.2 MG Wet 3.0 [MSG]', 'unit' => 'lgth']);
//        Item::create(['sku' => '90031008', 'description' => '90x45 mm Rad SG8 H3.2 MG Wet 3.6 [MSG]', 'unit' => 'lgth']);
//        Item::create(['sku' => '90031036', 'description' => '140x45 mm Rad SG8 H3.2 MG Wet 3.6 [MSG]', 'unit' => 'lgth']);
//        Item::create(['sku' => '90031066', 'description' => '190x45 mm Rad SG8 H3.2 MG Wet 3.6 [MSG]', 'unit' => 'lgth']);
//        Item::create(['sku' => '90031094', 'description' => '240x45 mm Rad SG8 H3.2 MG Wet 3.6 [MSG]', 'unit' => 'lgth']);
//        Item::create(['sku' => '90031012', 'description' => '90x45 mm Rad SG8 H3.2 MG Wet 4.2 [MSG]', 'unit' => 'lgth']);
//        Item::create(['sku' => '90031040', 'description' => '140x45 mm Rad SG8 H3.2 MG Wet 4.2 [MSG]', 'unit' => 'lgth']);
//        Item::create(['sku' => '90031070', 'description' => '190x45 mm Rad SG8 H3.2 MG Wet 4.2 [MSG]', 'unit' => 'lgth']);
//        Item::create(['sku' => '90031098', 'description' => '240x45 mm Rad SG8 H3.2 MG Wet 4.2 [MSG]', 'unit' => 'lgth']);
//        Item::create(['sku' => '90031016', 'description' => '90x45 mm Rad SG8 H3.2 MG Wet 4.8 [MSG]', 'unit' => 'lgth']);
//        Item::create(['sku' => '90031044', 'description' => '140x45 mm Rad SG8 H3.2 MG Wet 4.8 [MSG]', 'unit' => 'lgth']);
//        Item::create(['sku' => '90031074', 'description' => '190x45 mm Rad SG8 H3.2 MG Wet 4.8 [MSG]', 'unit' => 'lgth']);
//        Item::create(['sku' => '90031102', 'description' => '240x45 mm Rad SG8 H3.2 MG Wet 4.8 [MSG]', 'unit' => 'lgth']);
//        Item::create(['sku' => '90031020', 'description' => '90x45 mm Rad SG8 H3.2 MG Wet 5.4 [MSG]', 'unit' => 'lgth']);
//        Item::create(['sku' => '90031048', 'description' => '140x45 mm Rad SG8 H3.2 MG Wet 5.4 [MSG]', 'unit' => 'lgth']);
//        Item::create(['sku' => '90031078', 'description' => '190x45 mm Rad SG8 H3.2 MG Wet 5.4 [MSG]', 'unit' => 'lgth']);
//        Item::create(['sku' => '90031106', 'description' => '240x45 mm Rad SG8 H3.2 MG Wet 5.4 [MSG]', 'unit' => 'lgth']);
//        Item::create(['sku' => '90031024', 'description' => '90x45 mm Rad SG8 H3.2 MG Wet 6.0 [MSG]', 'unit' => 'lgth']);
//        Item::create(['sku' => '90031052', 'description' => '140x45 mm Rad SG8 H3.2 MG Wet 6.0 [MSG]', 'unit' => 'lgth']);
//        Item::create(['sku' => '90031082', 'description' => '190x45 mm Rad SG8 H3.2 MG Wet 6.0 [MSG]', 'unit' => 'lgth']);
//        Item::create(['sku' => '90031110', 'description' => '240x45 mm Rad SG8 H3.2 MG Wet 6.0 [MSG]', 'unit' => 'lgth']);
//        Item::create(['sku' => '90031092', 'description' => '290x45 mm Rad SG8 H3.2 MG Wet 3.0 [MSG]', 'unit' => 'lgth']);
//        Item::create(['sku' => '90031096', 'description' => '290x45 mm Rad SG8 H3.2 MG Wet 3.6 [MSG]', 'unit' => 'lgth']);
//        Item::create(['sku' => '90031100', 'description' => '290x45 mm Rad SG8 H3.2 MG Wet 4.2 [MSG]', 'unit' => 'lgth']);
//        Item::create(['sku' => '90031104', 'description' => '290x45 mm Rad SG8 H3.2 MG Wet 4.8 [MSG]', 'unit' => 'lgth']);
//        Item::create(['sku' => '90031108', 'description' => '290x45 mm Rad SG8 H3.2 MG Wet 5.4 [MSG]', 'unit' => 'lgth']);
//        Item::create(['sku' => '90031112', 'description' => '290x45 mm Rad SG8 H3.2 MG Wet 6.0 [MSG]', 'unit' => 'lgth']);
//
//        Item::create(['sku' => '35501568', 'description' => 'Bowmac Strap Rag B75', 'unit' => 'each']);
//        Item::create(['sku' => '35501570', 'description' => 'Bowmac SS Strap Rag BS75', 'unit' => 'each']);
//        Item::create(['sku' => '35501600', 'description' => 'Bowmac Strap Rag B78', 'unit' => 'each']);
//        Item::create(['sku' => '35501602', 'description' => 'Bowmac SS Strap Rag BS78', 'unit' => 'each']);
//        Item::create(['sku' => '35501632', 'description' => 'Bowmac Strap Rag B79', 'unit' => 'each']);
//        Item::create(['sku' => '35501634', 'description' => 'Bowmac SS Strap Rag BS79', 'unit' => 'each']);
//
//
//        Item::create(['sku' => '35403904', 'description' => 'Tylok Nail Plate 34mmx15m Coil T5', 'unit' => 'coil']);
//        Item::create(['sku' => '35403926', 'description' => 'Tylok Nail Plate 30x60mm 2T4', 'unit' => 'each']);
//        Item::create(['sku' => '35403928', 'description' => 'Tylok Nail Plate 30x6Omm 2T4 pk50', 'unit' => 'each']);
//        Item::create(['sku' => '35403930', 'description' => 'Tylok Nail Plate 30x6Omm 2T4 pk10', 'unit' => 'each']);
//        Item::create(['sku' => '35403968', 'description' => 'Tylok Nail Plate 34x60mm 2T5', 'unit' => 'each']);
//        Item::create(['sku' => '35404032', 'description' => 'Tylok Nail Plate 34x120mm 4T5', 'unit' => 'each']);
//        Item::create(['sku' => '35404096', 'description' => 'Tylok Nail Plate 34x180mm 6T5', 'unit' => 'each']);
//        Item::create(['sku' => '35404160', 'description' => 'Tylok Nail Plate 34x240mm 8T5', 'unit' => 'each']);
//        Item::create(['sku' => '35404224', 'description' => 'Tylok Nail Plate 34x300mm 10T5', 'unit' => 'each']);
//        Item::create(['sku' => '35404288', 'description' => 'Tylok Nail Plate 34x360mm 12T5', 'unit' => 'each']);
//        Item::create(['sku' => '35404352', 'description' => 'Tylok Nail Plate 34x420mm 14T5', 'unit' => 'each']);
//        Item::create(['sku' => '35404416', 'description' => 'Tylok Nail Plate 34x460mm 16T5', 'unit' => 'each']);
//        Item::create(['sku' => '35404480', 'description' => 'Tylok Nail Plate 68mmx15m Coil T10', 'unit' => 'coil']);
//        Item::create(['sku' => '35404544', 'description' => 'Tylok Nail Plate 68x60mm 2T10', 'unit' => 'each']);
//        Item::create(['sku' => '35404608', 'description' => 'Tylok Nail Plate 68x120mm 4T10', 'unit' => 'each']);
//        Item::create(['sku' => '35404672', 'description' => 'Tylok Nail Plate 68x180mm 6T10', 'unit' => 'each']);
//        Item::create(['sku' => '35404736', 'description' => 'Tylok Nail Plate 68x240mm 8T10', 'unit' => 'each']);
//        Item::create(['sku' => '35404800', 'description' => 'Tylok Nail Plate 68x300mm 10T10', 'unit' => 'each']);
//        Item::create(['sku' => '35404864', 'description' => 'Tylok Nail Plate 68x360mm 12T10', 'unit' => 'each']);
//        Item::create(['sku' => '35404928', 'description' => 'Tylok Nail Plate 68x400mm 14T10', 'unit' => 'each']);
//        Item::create(['sku' => '35404992', 'description' => 'Tylok Nail Plate 68x460mm 16T10', 'unit' => 'each']);
//        Item::create(['sku' => '35405056', 'description' => 'Tylok Nail Plate 102x120mm 4T15', 'unit' => 'each']);
//        Item::create(['sku' => '35405120', 'description' => 'Tylok Nail Plate 102x180mm 6T15', 'unit' => 'each']);
//        Item::create(['sku' => '35405184', 'description' => 'Tylok Nail Plate 102x240mm 8T15', 'unit' => 'each']);
//        Item::create(['sku' => '35405248', 'description' => 'Tylok Nail Plate 102x300mm 10TI5', 'unit' => 'each']);
//        Item::create(['sku' => '35405312', 'description' => 'Tylok Nail Plate 102x360mm 12T15', 'unit' => 'each']);
//        Item::create(['sku' => '35405376', 'description' => 'Tylok Nail Plate 136x180mm 6T20', 'unit' => 'each']);
//        Item::create(['sku' => '35405440', 'description' => 'Tylok Nail Plate 136x240mm 8T20', 'unit' => 'each']);
//        Item::create(['sku' => '35405504', 'description' => 'Tylok Nail Plate 136x300mm 10T20', 'unit' => 'each']);
//        Item::create(['sku' => '35405568', 'description' => 'Tylok Nail Plate 136x360mm 12T20', 'unit' => 'each']);
//        Item::create(['sku' => '35405632', 'description' => 'Tylok Nail Plate 136x400mm 14T20', 'unit' => 'each']);
//
//Item::create(['sku'=>'45100001','description'=>'Type 17 Screw 14q x 35mm','unit'==each
//Item::create(['sku'=>'45100010','description'=>'Type 17 Screw 12q x 35mm','unit'==each
//Item::create(['sku'=>'45100011','description'=>'Type 17 Screw SS 12q x 35mm','unit'==each
//Item::create(['sku'=>'45100015','description'=>'Type 17 Screw 12q x 80mm','unit'==each
//Item::create(['sku'=>'45100016','description'=>'Type 17 Screw 14q x 125mm Buildex Bugle Head','unit'==each
//Item::create(['sku'=>'45100017','description'=>'Type 17 Screw SS 10q x 80mm','unit'==each
//Item::create(['sku'=>'45100020','description'=>'Type 17 Screw 14q x 75mm','unit'==each
//Item::create(['sku'=>'45100021','description'=>'Type 17 SS Screw 12q x 80mm','unit'==each
//Item::create(['sku'=>'45100022','description'=>'Type 17 Screw SS 12q x 100mm','unit'==each
//Item::create(['sku'=>'45100023','description'=>'Type 17 Screw SS 14q x 100mm','unit'==each
//Item::create(['sku'=>'45100024','description'=>'Type 17 Screw SS 14q x 75mm','unit'==each
//Item::create(['sku'=>'45100027','description'=>'Type 17 Wafer Hd Timber Screw 10q x 45mm 100pkt','unit'==Pict
//Item::create(['sku'=>'45100030','description'=>'Type 17 Screw 10q x 80mm 250pkt','unit'==Pict
//Item::create(['sku'=>'45100031','description'=>'Type 17 Screw 14q x 35mm 100/pkt','unit'==Pict
//Item::create(['sku'=>'45100032','description'=>'Type 17 Screw SS 14q x 35mm 100pkt','unit'==Pict
//Item::create(['sku'=>'45100034','description'=>'Type 17 Screw SS 10q x 80mm 250pkt','unit'==Pict
//Item::create(['sku'=>'45100035','description'=>'Type 17 Screw 14q x 100mm 100pk','unit'==box
//Item::create(['sku'=>'45100036','description'=>'Type 17 Screw SS 14q x 100mm 100pk','unit'==each
//Item::create(['sku'=>'45100040','description'=>'Type 17 Screw for Timber 8q x 45mm 100pkt','unit'==pkt
//Item::create(['sku'=>'45100041','description'=>'Type 17 Screw SS 14q x 75mm 100pk','unit'==baq
//Item::create(['sku'=>'45100042','description'=>'Type 17 Screw 14q x 75mm 100pk','unit'==baq
//Item::create(['sku'=>'45100045','description'=>'Type 17 Screw 14q x 125mm Buildex Bugle Head 100pk','unit'==box
//Item::create(['sku'=>'45100114','description'=>'Type 17 Screw for Timber 8q x 45mm 200pkt','unit'==Pict
//Item::create(['sku'=>'45100118','description'=>'Type 17 Wafer Hd Timber Screw 10q x 45mm 200pkt','unit'==pkt
//Item::create(['sku'=>'45100122','description'=>'Type 17 Screw for Timber','unit'==12q x 50mm','unit'==each
//Item::create(['sku'=>'45100128','description'=>'Type 17 Screw Climaseal 12q x 50mm','unit'==each
//Item::create(['sku'=>'45100134','description'=>'Type 17 Screw SS 12q x 50mm','unit'==each
//Item::create(['sku'=>'45100135','description'=>'Type 17 Screw 12q x 50mm','unit'==each
//Item::create(['sku'=>'45100136','description'=>'Type 17 Screw 10q x 80mm','unit'==each
//Item::create(['sku'=>'45100137','description'=>'Type 17 Screw 12q x 100mm','unit'==each
//Item::create(['sku'=>'45100138','description'=>'Type 17 Screw SS 14q x 35mm','unit'==each
//
//
//
////        32100002	Block Grout         25MPa  7mm	m3
////        32100009	Block Fill Grout   17.5MPa  8mm	m3
////        32101344	Block Grout        17.5MPa  7mm	m3
////        32101376	Block Grout         20MPa  7mm	m3
////        32101388	Block Grout    20MPa  7mm Expanding Additive	m3
////        32101440	Block Fill Grout   17.5MPa 13mm	m3
////        32604672	Sika Grout 212           25kg 3122120251	each
////        32606976	Febgrout Rastising Agent    1kg 73028789	each
////        32607040	Febgrout Rastising Agent   25kg 73028517	each
////        44100640	Fosroc Conbextra GP Grout    25kg 541025	bag
////        44100704	Fosroc Conbextra HF Grout    25kg 542025	bag
////
////        93210028	Firth 100mm Steelcrete Concrete Floor System	sqm
////
////        45103276	MSL Rod Threaded SS T304  1.0m x M12	each
////        45103280	MSL Rod Threaded SS T304  1.0m x M16	each
////
////        45200002	Chemset SS Stud Bolt 10x130mm       CS10130SS	each
////        45200003	Chemset SS Stud Bolt 12x160mm       CS12160SS	each
////        45200004	Chemset SS Stud Bolt 16x190mm	CS16190SS	each
////        45200005	Chemset SS Stud Bolt 20x260mm	CS20260SS	each
////        45200009	Chemset Anchor Capsule 12mm 10/box CHEM12	box
////        45200010	Chemset Anchor Capsule 10mm 10/box CHEMIO	box
////        45200011	Chemset Anchor Capsule 16mm 10/box CHEM16	box
////        45200640	Chemset 1 Cartridge	ISCP	each
////        45200704	Chemset Anchor Capsule 8mm	CHEM08	each
////        45200768	Chemset Anchor Capsule 10mm	CHEMIO	each
////        45200832	Chemset Anchor Capsule 12mm	CHEM12	each
////        45200896	Chemset Anchor Capsule 16mm	CHEM16	each
////        45200960	Chemset Anchor Capsule 20/24mm CHEM2024	each
////        45201024	Chemset Anchor Capsule 30mm	CHEM30	each
////        45201088	Chemset Injection System Complete	ISKP	each
////        45201152	Chemset Injection System Handgun ISGU101	each
////        45201216	Chemset Mixer Nozzle 170mm	ISNP	each
////        45201280	Chemset Stud Bolt 8x110mm	CS08110	each
////        45201344	Chemset Stud Bolt 10x130mm	CSI0130	each
////        45201408	Chemset Stud Bolt 12x160mm	CS12160	each
////        45201472	Chemset Stud Bolt 12x180mm	CS12180	each
////        45201536	Chemset Stud Bolt 16x190mm	CS16190	each
////        45201600	Chemset Stud Bolt 20x260mm	CS20260	each
////        45201664	Chemset Stud Bolt 24x300mm	CS24300	each
////
////        35001284	Steel Reinforcg Cages D12/6m	lgth
////
////        35005120	Reinforcng Hook Starter P6 x1000	each
////        35005124	Hurricane Reinforcng Hook Starter P6 x1000	each
////        35005184	Reinforcng Hook Starter P10x1000	each
////        35005186	Hurricane Reinforcng Hook Starter P10x1000	each
////        35005248	Reinforcng Hook Starter P10x1200	each
////        35005250	Hurricane Reinforcng Hook Starter P10x1200	each
////        35005312	Reinforcng Hook Starter P12x1000	each
////        35005314	Hurricane Reinforcng Hook Starter P12x1000	each
////        35005362	D10x600 Hook Starters	each
////        35005364	Hurricane D10x600 Hook Starters	each
////        35005440	Reinforcing Hook Starter D10x1000	each
////        35005442	Hurricane Reinforcing Hook Starter D10x1000	each
////        35005504	Reinforcng Hook Starter D10x1200	each
////        35005506	Hurricane Reinforcng Hook Starter D10x1200	each
////        35005518	Reinforcng Hook Starter D10x1500	each
////        35005520	Hurricane Reinforcng Hook Starter D10x1500	each
////        35005568	Reinforcing Hook Starter D12x1000	each
////        35005570	Hurricane Reinforcing Hook Starter D12x1000	each
////        35005632	Reinforcng Hook Starter D12x1200	each
////        35005634	Hurricane Reinforcng Hook Starter D12x1200	each
////        35005642	Dial 500 Hook Starters	each
////        35005644	Hurricane Dial 500 Hook Starters	each
////        35005654	D16x1200 Hook Starters	each
////        35005656	Hurricane D16x1200 Hook Starters	each
////        35005660	D16x1500 Hook Starters	each
////        35005662	Hurricane D16x1500 Hook Starters	each
////        35005668	D16x1800 Hook Starters	each
////        35005670	Hurricane D16x1800 Hook Starters	each
////        35005674	D20x1200 Hook Starters	each
////        35005676	Hurricane D20x1200 Hook Starters	each
////
////        35005690	R6x900x150 Link Starters	each
////        35005692	Hurricane R6x900x150 Link Starters	each
////        35005696	Reinforcing Link Starter D10x1000x 120	each
////        35005698	Hurricane Reinforcing Link Starter D10x1000x 120	each
////        35005760	Reinforcing Link Starter D10x1000x 150	each
////        35005762	Hurricane Reinforcing Link Starter D10x1000x 150	each
////        35005782	D10x1200x150 Link Starters	each
////        35005784	Hurricane D10x1200x150 Link Starters	each
////        35005824	Reinforcing Link Starter D10x1400x 150	each
////        35005826	Hurricane Reinforcing Link Starter D10x1400x 150	each
////        35005842	D10x2400x150 Link Starters	each
////        35005844	Hurricane D10x2400x150 Link Starters	each
////        35005864	D12x1000x150 Link Starters	each
////        35005866	Hurricane D12x1000x150 Link Starters	each
////        35005888	Reinforcing Link Starter D12x1400x 150	each
////        35005890	Hurricane Reinforcing Link Starter D12x1400x 150	each
////        35005940	D12x1200x150 Link Starters	each
////        35005942	Hurricane D12x1200x150 Link Starters	each
////        35005952	Reinforcing Link Starter D12x1500x 200	each
////        35005954	Hurricane Reinforcing Link Starter D12x1500x 200	each
////        35006016	Reinforcing Link Starter D16x1100x 250	each
////        35006018	Hurricane Reinforcing Link Starter D16x1100x 250	each
////        35006080	Reinforcing Link Starter D16x1700x 250	each
////        35006082	Hurricane Reinforcing Link Starter D16x1700x 250	each
////
////        32700640	Boral Bar Mesh Chair Base          loose	each
////        32700704	Boral Bar Mesh Chair Base 200 per baq
////        32702496	Boral Bar Chair Type B 20mm	loose	each
////        32702560	Boral Bar Chair Type B 20mm 250 per baq	baq
////        32702624	Boral Bar Chair Type B 25mm	loose	each
////        32702688	Boral Bar Chair Type B 25mm 250 per baq	baq
////        32702752	Boral Bar Chair Type B 30mm	loose	each
////        32702816	Boral Bar Chair Type B 30mm 250 per baq	baq
////        32702880	Boral Bar Chair Type B 40mm	loose	each
////        32702944	Boral Bar Chair Type B 40mm 250 per baq	baq
////        32703008	Boral Bar Chair Type B+ 40mm	loose	each
////        32703072	Boral Bar Chair Type B+ 40mm 250 per baq	baq
////        32703136	Boral Bar Chair Type B 50mm	loose	each
////        32703200	Boral Bar Chair Type B 50mm 250 per baq	baq
////        32703264	Boral Bar Chair Type B+ 50mm	loose	each
////        32703328	Boral Bar Chair Type B+ 50mm 250 per baq	baq
////        32703392	Boral Bar Chair Type B 65mm	loose	each
////        32703456	Boral Bar Chair Type B 65mm 250 per baq	baq
////        32703520	Boral Bar Chair Type B 75mm	loose	each
////        32703584	Boral Bar Chair Type B 75mm 250 per baq	baq
////        32706528	Hurricane Reinforcing Bar Chair 25/40 ea	each
////        32706592	Hurricane Reinforcing Bar Chair 50/65 ea	each
////        32706656	Hurricane Reinforcing Bar Chair 75/90 ea	each
////
////        31501500	Cavibat Polyprop Cavity Batten Hori 18x45x1200mm	lgth
////        32706984	Polypropolene Reo Pegs 450mm	each
////        34100768	Polyprop Strapping Handy Pk Dispens 300m	each
//
//
////        Item::create(['sku' => '10000000', 'description' => '290x45 mm Rad MSG8 H3.1 MG KD', 'unit' => 'mtr']);
////        Item::create(['sku' => '10000001', 'description' => 'Estimation Charge', 'unit' => 'each']);
////        Item::create(['sku' => '10000002', 'description' => '70x35 mm Rad MSG8 H3.1 MG KD', 'unit' => 'mtr']);
////        Item::create(['sku' => '10000003', 'description' => '90x35 mm Rad MSG8 H3.1 MG KD', 'unit' => 'mtr']);
////        Item::create(['sku' => '10000004', 'description' => '140x35 mm Rad MSG8 H3.1 MG KD', 'unit' => 'mtr']);
////        Item::create(['sku' => '10000005', 'description' => '190x35 mm Rad MSG8 H3.1 MG KD', 'unit' => 'mtr']);
////        Item::create(['sku' => '10000006', 'description' => '45x45 mm Rad MSG8 H3.1 MG KD', 'unit' => 'mtr']);
////        Item::create(['sku' => '10000007', 'description' => '70x45 mm Rad MSG8 H3.1 MG KD', 'unit' => 'mtr']);
////        Item::create(['sku' => '10000008', 'description' => '90x45 mm Rad MSG8 H3.1 MG KD', 'unit' => 'mtr']);
////        Item::create(['sku' => '10000009', 'description' => '140x45 mm Rad MSG8 H3.1 MG KD', 'unit' => 'mtr']);
////        Item::create(['sku' => '10000010', 'description' => 'Selected Horizontal Flashing mtr', 'unit' => 'mtr']);
////        Item::create(['sku' => '10000011', 'description' => '190x45 mm Rad MSG8 H3.1 MG KD', 'unit' => 'mtr']);
////        Item::create(['sku' => '10000012', 'description' => '240x35 mm Rad MSG8 H3.1 MG KD', 'unit' => 'mtr']);
////        Item::create(['sku' => '10000013', 'description' => '240x45 mm Rad MSG8 H3.1 MG KD', 'unit' => 'mtr']);
////        Item::create(['sku' => '10000014', 'description' => '290x35 mm Rad MSG8 H3.1 MG KD', 'unit' => 'mtr']);
////        Item::create(['sku' => '10000015', 'description' => '290x45 mm Rad MSG8 H3.1 MG KD', 'unit' => 'mtr']);
////        Item::create(['sku' => '10000016', 'description' => '70x70 mm Rad MSG8 H3.1 MG KD', 'unit' => 'mtr']);
////        Item::create(['sku' => '10000017', 'description' => '70x70 mm Rad MSG8 H3.1 MG KD', 'unit' => 'mtr']);
////        Item::create(['sku' => '10000018', 'description' => '90x70 mm Rad MSG8 H3.1 MG KD', 'unit' => 'mtr']);
////        Item::create(['sku' => '10000019', 'description' => '90x70 mm Rad MSG8 H3.1 MG KD', 'unit' => 'mtr']);
////        Item::create(['sku' => '10000020', 'description' => '90x90 mm Rad MSG8 H3.1 MG KD', 'unit' => 'mtr']);
////        Item::create(['sku' => '10000021', 'description' => '120x90 mm Rad MSG8 H3.1 MG KD', 'unit' => 'mtr']);
////        Item::create(['sku' => '10000022', 'description' => '140x70 mm Rad MSG8 H3.1 MG KD', 'unit' => 'mtr']);
////        Item::create(['sku' => '10000023', 'description' => '140x90 mm Rad MSG8 H3.1 MG KD', 'unit' => 'mtr']);
////        Item::create(['sku' => '10000024', 'description' => '190x70 mm Rad MSG8 H3.1 MG KD', 'unit' => 'mtr']);
////        Item::create(['sku' => '10000025', 'description' => '190x90 mm Rad MSG8 H3.1 MG KD', 'unit' => 'mtr']);
////        Item::create(['sku' => '10000026', 'description' => '240x70 mm Rad MSG8 H3.1 MG KD', 'unit' => 'mtr']);
////        Item::create(['sku' => '10000027', 'description' => '240x90 mm Rad MSG8 H3.1 MG KD', 'unit' => 'mtr']);
////        Item::create(['sku' => '10000028', 'description' => '45x2Omm Rad Laser Frm CF CB KD', 'unit' => 'mtr']);
////        Item::create(['sku' => '10000029', 'description' => '290x70 mm Rad MSG8 H3.1 MG KD', 'unit' => 'mtr']);
////        Item::create(['sku' => '10000030', 'description' => '290x90 mm Rad MSG8 H3.1 MG KD', 'unit' => 'mtr']);
////        Item::create(['sku' => '10000031', 'description' => '150x50 mm Rad No1 H5 RS', 'unit' => 'mtr']);
////        Item::create(['sku' => '10000032', 'description' => '200x50 mm Rad No1 H5 RS', 'unit' => 'mtr']);
////        Item::create(['sku' => '10000033', 'description' => '70x35mm Rad H1.2 PG KD CEIL/BATTEN 5Am', 'unit' => 'lght']);
////        Item::create(['sku' => '10000046', 'description' => '45x35mm Rad Laser Frm CF CB KD', 'unit' => 'mtr']);
////        Item::create(['sku' => '10001402', 'description' => '70x35 mm Rad Laser Frm CB CF', 'unit' => 'mtr']);
////        Item::create(['sku' => '10001460', 'description' => '70x35 mm Rad CF FJ PG', 'unit' => 'mtr']);
////        Item::create(['sku' => '10001468', 'description' => '70x35 mm Rad Laser Frm CB CF FJ', 'unit' => 'mtr']);
////        Item::create(['sku' => '10001470', 'description' => '70x35 mm Rad Laser Frm CB CF FJ 5Am', 'unit' => 'lght']);
////        Item::create(['sku' => '10001474', 'description' => '140x35 mm Rad Laser Frm CF CEIL/BATTEN FJ	', 'unit' => 'mtr']);
////        Item::create(['sku' => '10001476', 'description' => '140x35 mm Rad Laser Frm CF CEIL/BATTEN FJ 5Am', 'unit' => 'lght']);
////
////        Item::create(['sku' => '10001504', 'description' => '70x35 mm Rad Laser Frm CB HI', 'unit' => 'mtr']);
////        Item::create(['sku' => '10001526', 'description' => '70x35 Rad F1 HI CEIL/BATTN', 'unit' => 'mtr']);
////        Item::create(['sku' => '10001652', 'description' => '70x35 mm Rad H1.2 PG KD CEIL/BATTEN', 'unit' => 'mtr']);
////        Item::create(['sku' => '10001656', 'description' > '140x35 mm Rad Laser H1.2 PG KD CEIL/BATTEN', 'unit' => 'mtr']);
////        Item::create(['sku' => '10001682', 'description' => '70x35 mm Rad H3.1 PG KD CEIL/BATTEN', 'unit' => 'mtr']);
////        Item::create(['sku' => '10001683', 'description' => '140x35 mm Rad Laser H3.1 PG KD CEIL/BATTEN', 'unit' => 'mtr']);
////        Item::create(['sku' => '10001697', 'description' => '70x35 mm Rad H3.2 PG KD CEIL/BATTEN', 'unit' => 'mtr']);
////        Item::create(['sku' => '10001698', 'description' => '140x35 mm Rad Laser H3.2 PG KD CEIL/BATTEN', 'unit' => 'mtr']);
////        Item::create(['sku' => '10002178', 'description' => '50x50 mm Rad No1 H1.2 RS', 'unit' => 'mtr']);
////        Item::create(['sku' => '10002690', 'description' => '75x50 mm Rad No1 H1.2 RS', 'unit' => 'mtr']);
////        Item::create(['sku' => '10003202', 'description' => '100x50 mm Rad No1 H1.2 RS', 'unit' => 'mtr']);
////        Item::create(['sku' => '10003714', 'description' => '125x50 mm Rad No1 H1.2 RS', 'unit' => 'mtr']);
////        Item::create(['sku' => '10004226', 'description' => '150x50 mm Rad No1 H1.2 RS', 'unit' => 'mtr']);
////        Item::create(['sku' => '10004738', 'description' => '200x50 mm Rad No1 H1.2 RS', 'unit' => 'mtr']);
////        Item::create(['sku' => '10005250', 'description' => '250x50 mm Rad No1 H1.2 RS', 'unit' => 'mtr']);
////        Item::create(['sku' => '10005762', 'description' => '300x50 mm Rad No1 H1.2 RS', 'unit' => 'mtr']);
////        Item::create(['sku' => '10006274', 'description' => '75x75 mm Rad No1 H1.2 RS', 'unit' => 'mtr']);
////        Item::create(['sku' => '10006786', 'description' => '100x75 mm Rad No1 H1.2 RS', 'unit' => 'mtr']);
////        Item::create(['sku' => '10007210', 'description' => '150x40 H1.2 Rad No1 MG', 'unit' => 'mtr']);
////        Item::create(['sku' => '10007300', 'description' => '50x50 mm Rad No1 H1.2 PG', 'unit' => 'mtr']);
////        Item::create(['sku' => '10007810', 'description' => '75x50 mm Rad No1 H1.2 PG', 'unit' => 'mtr']);
////        Item::create(['sku' => '10008322', 'description' => '100x50 mm Rad No1 H1.2 PG', 'unit' => 'mtr']);
////        Item::create(['sku' => '10008834', 'description' => '125x50 mm Rad No1 H1.2 PG', 'unit' => 'mtr']);
////        Item::create(['sku' => '10009346', 'description' => '150x50 mm Rad No1 H1.2 PG', 'unit' => 'mtr']);
////        Item::create(['sku' => '10009858', 'description' => '200x50 mm Rad No1 H1.2 PG', 'unit' => 'mtr']);
////        Item::create(['sku' => '10010370', 'description' => '225x50 mm Rad No1 H1.2 PG', 'unit' => 'mtr']);
////        Item::create(['sku' => '10010882', 'description' => '250x50 mm Rad No1 H1.2 PG', 'unit' => 'mtr']);
////        Item::create(['sku' => '10011394', 'description' => '300x50 mm Rad No1 H1.2 PG', 'unit' => 'mtr']);
////        Item::create(['sku' => '10011906', 'description' => '100x75 mm Rad No1 H1.2 PG', 'unit' => 'mtr']);
////        Item::create(['sku' => '10012418', 'description' => '75x50 mm Rad No1 H1.2 KD RS', 'unit' => 'mtr']);
////        Item::create(['sku' => '10012930', 'description' => '100x50 mm Rad No1 H1.2 KD RS', 'unit' => 'mtr']);
////        Item::create(['sku' => '10013442', 'description' => '150x50 mm Rad No1 H1.2 KD RS', 'unit' => 'mtr']);
////        Item::create(['sku' => '10013954', 'description' => '200x50 mm Rad No1 H1.2 KD RS', 'unit' => 'mtr']);
////        Item::create(['sku' => '10014466', 'description' => '250x50 mm Rad No1 H1.2 KD RS', 'unit' => 'mtr']);
////        Item::create(['sku' => '10014978', 'description' => '300x50 mm Rad No1 H1.2 KD RS', 'unit' => 'mtr']);
////        Item::create(['sku' => '10020130', 'description' => '70x35 mm Rad No1 H1.2 KD MG', 'unit' => 'mtr']);
////        Item::create(['sku' => '10020138', 'description' => '90x35 mm Rad No1 H1.2 KD MG', 'unit' => 'mtr']);
////        Item::create(['sku' => '10020610', 'description' => '45x45 mm Rad No1 H1.2 KD MG', 'unit' => 'mtr']);
////        Item::create(['sku' => '10021122', 'description' => '70x45 mm Rad No1 H1.2 KD MG', 'unit' => 'mtr']);
////        Item::create(['sku' => '10022658', 'description' => '90x45 mm Rad No1 H1.2 KD MG', 'unit' => 'mtr']);
////        Item::create(['sku' => '10023170', 'description' => '120x45 mm Rad No1 H1.2 KD MG', 'unit' => 'mtr']);
////
////        Item::create(['sku' => '10023682', 'description' => '140x45 mm Rad No1 H1.2 KD MG', 'unit' => 'mtr']);
////        Item::create(['sku' => '10024194', 'description' => '190x45 mm Rad No1 H1.2 KD MG', 'unit' => 'mtr']);
////        Item::create(['sku' => '10024706', 'description' => '220x45 mm Rad No1 H1.2 KD MG', 'unit' => 'mtr']);
////        Item::create(['sku' => '10025218', 'description' => '240x45 mm Rad No1 H1.2 KD MG', 'unit' => 'mtr']);
////        Item::create(['sku' => '10025730', 'description' => '290x45 mm Rad No1 H1.2 KD MG', 'unit' => 'mtr']);
////        Item::create(['sku' => '10032898', 'description' => '90x70 mm Rad No1 H1.2 KD MG', 'unit' => 'mtr']);
////        Item::create(['sku' => '10032908', 'description' => '70x35 mm Rad CF KD MG CB', 'unit' => 'mtr']);
////        Item::create(['sku' => '10032920', 'description' => '140x35 mm Rad CF KD MG CB', 'unit' => 'mtr']);
////        Item::create(['sku' => '10032924', 'description' => '190x35 mm Rad CF KD MG CB', 'unit' => 'mtr']);
////        Item::create(['sku' => '10032940', 'description' => '70x35 mm Rad No1 CF KD MG', 'unit' => 'mtr']);
////        Item::create(['sku' => '10032942', 'description' => '90x35 mm Rad No1 CF KD MG', 'unit' => 'mtr']);
////        Item::create(['sku' => '10032980', 'description' => '45x45 mm Rad No1 CF KD MG', 'unit' => 'mtr']);
////        Item::create(['sku' => '10032984', 'description' => '70x45 mm Rad No1 CF KD MG', 'unit' => 'mtr']);
////        Item::create(['sku' => '10032988', 'description' => '90x45 mm Rad No1 CF KD MG', 'unit' => 'mtr']);
////        Item::create(['sku' => '10032992', 'description' => '120x45 mm Rad No1 CF KD MG', 'unit' => 'mtr']);
////        Item::create(['sku' => '10032996', 'description' => '140x45 mm Rad No1 CF KD MG', 'unit' => 'mtr']);
////        Item::create(['sku' => '10033000', 'description' => '190x45 mm Rad No1 CF KD MG', 'unit' => 'mtr']);
////        Item::create(['sku' => '10033004', 'description' => '220x45 mm Rad No1 CF KD MG', 'unit' => 'mtr']);
////        Item::create(['sku' => '10033008', 'description' => '240x45 mm Rad No1 CF KD MG', 'unit' => 'mtr']);
////        Item::create(['sku' => '10033012', 'description' => '290x45 mm Rad No1 CF KD MG', 'unit' => 'mtr']);
////        Item::create(['sku' => '10033016', 'description' => '90x70 mm Rad No1 CF KD MG', 'unit' => 'mtr']);
////        Item::create(['sku' => '10033408', 'description' => '50x40 mm Rad No1 H3 RS', 'unit' => 'mtr']);
////        Item::create(['sku' => '10033412', 'description' => '50x40 mm Rad No1 H3.2 RS', 'unit' => 'mtr']);
////        Item::create(['sku' => '10033924', 'description' => '75x40 mm Rad No1 H3.2 RS', 'unit' => 'mtr']);
////        Item::create(['sku' => '10034436', 'description' => '150x40 mm Rad No1 H3.2 RS', 'unit' => 'mtr']);
////        Item::create(['sku' => '10034948', 'description' => '200x40 mm Rad No1 H3.2 RS', 'unit' => 'mtr']);
////        Item::create(['sku' => '10035460', 'description' => '50x50 mm Rad No1 H3.2 RS', 'unit' => 'mtr']);
////        Item::create(['sku' => '10035972', 'description' => '75x50 mm Rad No1 H3.2 RS', 'unit' => 'mtr']);
////        Item::create(['sku' => '10036484', 'description' => '100x50 mm Rad No1 H3.2 RS', 'unit' => 'mtr']);
////        Item::create(['sku' => '10036996', 'description' => '125x50 mm Rad No1 H3.2 RS', 'unit' => 'mtr']);
////        Item::create(['sku' => '10037508', 'description' => '150x50 mm Rad No1 H3.2 RS', 'unit' => 'mtr']);
////        Item::create(['sku' => '10038020', 'description' => '200x50 mm Rad No1 H3.2 RS', 'unit' => 'mtr']);
////        Item::create(['sku' => '10038532', 'description' => '250x50 mm Rad No1 H3.2 RS', 'unit' => 'mtr']);
////        Item::create(['sku' => '10039044', 'description' => '300x50 mm Rad No1 H3.2 RS', 'unit' => 'mtr']);
////        Item::create(['sku' => '10039556', 'description' => '75x75 mm Rad No1 H3.2 RS', 'unit' => 'mtr']);
////        Item::create(['sku' => '10040068', 'description' => '100x75 mm Rad No1 H3.2 RS', 'unit' => 'mtr']);
////        Item::create(['sku' => '10040580', 'description' => '150x75 mm Rad No1 H3.2 RS', 'unit' => 'mtr']);
////        Item::create(['sku' => '10041092', 'description' => '200x75 mm Rad No1 H3.2 RS', 'unit' => 'mtr']);
////        Item::create(['sku' => '10041604', 'description' => '250x75 mm Rad No1 H3.2 RS', 'unit' => 'mtr']);
////        Item::create(['sku' => '10042116', 'description' => '300x75 mm Rad No1 H3.2 RS', 'unit' => 'mtr']);
////        Item::create(['sku' => '10042628', 'description' => '100x100 mm Rad No1 H3.2 RS', 'unit' => 'mtr']);
////
////        Item::create(['sku' => '10043140', 'description' => '150x100 mm Rad No1 H3.2 RS', 'unit' => 'mtr']);
////        Item::create(['sku' => '10043652', 'description' => '200x100 mm Rad No1 H3.2 RS', 'unit' => 'mtr']);
////        Item::create(['sku' => '10044164', 'description' => '250x100 mm Rad No1 H3.2 RS', 'unit' => 'mtr']);
////        Item::create(['sku' => '10044676', 'description' => '300x100 mm Rad No1 H3.2 RS', 'unit' => 'mtr']);
////        Item::create(['sku' => '10045188', 'description' => '150x25 mm Rad No1 H3.2 PG', 'unit' => 'mtr']);
////        Item::create(['sku' => '10045700', 'description' => '200x25 mm Rad No1 H3.2 PG', 'unit' => 'mtr']);
////        Item::create(['sku' => '10046212', 'description' => '50x40 mm Rad No1 H3.2 PG', 'unit' => 'mtr']);
////        Item::create(['sku' => '10046724', 'description' => '75x40 mm Rad No1 H3.2 PG', 'unit' => 'mtr']);
////        Item::create(['sku' => '10047236', 'description' => '150x40 mm Rad No1 H3.2 PG', 'unit' => 'mtr']);
////        Item::create(['sku' => '10047748', 'description' => '200x40 mm Rad No1 H3.2 PG', 'unit' => 'mtr']);
////        Item::create(['sku' => '10048260', 'description' => '50x50 mm Rad No1 H3.2 PG', 'unit' => 'mtr']);
////        Item::create(['sku' => '10048772', 'description' => '75x50 mm Rad No1 H3.2 PG', 'unit' => 'mtr']);
////        Item::create(['sku' => '10049284', 'description' => '100x50 mm Rad No1 H3.2 PG', 'unit' => 'mtr']);
////        Item::create(['sku' => '10049796', 'description' => '125x50 mm Rad No1 H3.2 PG', 'unit' => 'mtr']);
////        Item::create(['sku' => '10050308', 'description' => '150x50 mm Rad No1 H3.2 PG', 'unit' => 'mtr']);
////        Item::create(['sku' => '10050820', 'description' => '200x50 mm Rad No1 H3.2 PG', 'unit' => 'mtr']);
////        Item::create(['sku' => '10051332', 'description' => '225x50 mm Rad No1 H3.2 PG', 'unit' => 'mtr']);
////        Item::create(['sku' => '10051844', 'description' => '250x50 mm Rad No1 H3.2 PG', 'unit' => 'mtr']);
////        Item::create(['sku' => '10052356', 'description' => '300x50 mm Rad No1 H3.2 PG', 'unit' => 'mtr']);
////        Item::create(['sku' => '10052868', 'description' => '75x75 mm Rad No1 H3.2 PG', 'unit' => 'mtr']);
////        Item::create(['sku' => '10053380', 'description' => '100x75 mm Rad No1 H3.2 PG', 'unit' => 'mtr']);
////        Item::create(['sku' => '10053892', 'description' => '150x75 mm Rad No1 H3.2 PG', 'unit' => 'mtr']);
////        Item::create(['sku' => '10054404', 'description' => '200x75 mm Rad No1 H3.2 PG', 'unit' => 'mtr']);
////        Item::create(['sku' => '10054916', 'description' => '250x75 mm Rad No1 H3.2 PG', 'unit' => 'mtr']);
////        Item::create(['sku' => '10055428', 'description' => '300x75 mm Rad No1 H3.2 PG', 'unit' => 'mtr']);
////        Item::create(['sku' => '10055940', 'description' => '100x100 mm Rad No1 H3.2 PG', 'unit' => 'mtr']);
////        Item::create(['sku' => '10056452', 'description' => '150x100 mm Rad No1 H3.2 PG', 'unit' => 'mtr']);
////        Item::create(['sku' => '10056964', 'description' => '200x100 mm Rad No1 H3.2 PG', 'unit' => 'mtr']);
////        Item::create(['sku' => '10057476', 'description' => '250x100 mm Rad No1 H3.2 PG', 'unit' => 'mtr']);
////        Item::create(['sku' => '10057988', 'description' => '300x100 mm Rad No1 H3.2 PG', 'unit' => 'mtr']);
////        Item::create(['sku' => '10058490', 'description' => '35x35 mm Rad No1 H3.1 PG KD', 'unit' => 'mtr']);
////        Item::create(['sku' => '10058498', 'description' => '45x45 mm Rad No1 H3.1 PG KD', 'unit' => 'mtr']);
////        Item::create(['sku' => '10058500', 'description' => '45x45 mm Rad No1 H3.2 PG KD', 'unit' => 'mtr']);
////        Item::create(['sku' => '10058826', 'description' => '70x35 mm Rad No1 H3.1 PG KD', 'unit' => 'mtr']);
////        Item::create(['sku' => '10058827', 'description' => '70x35 mm Rad No1 H3.2 PG KD', 'unit' => 'mtr']);
////        Item::create(['sku' => '10058830', 'description' => '90x35 mm Rad No1 H3.1 PG KD', 'unit' => 'mtr']);
////        Item::create(['sku' => '10058832', 'description' => '90x35 mm Rad No1 H3.2 PG KD', 'unit' => 'mtr']);
////        Item::create(['sku' => '10059010', 'description' => '70x45 mm Rad No1 H3.1 PG KD', 'unit' => 'mtr']);
////        Item::create(['sku' => '10059012', 'description' => '70x45 mm Rad No1 H3.2 PG KD', 'unit' => 'mtr']);
////        Item::create(['sku' => '10059522', 'description' => '90x45 mm Rad No1 H3.1 PG KD', 'unit' => 'mtr']);
////        Item::create(['sku' => '10059524', 'description' => '90x45 mm Rad No1 H3.2 PG KD', 'unit' => 'mtr']);
////
////        Item::create(['sku' => '10060034', 'description' => '115x45 mm Rad Not H3.1 PG KD', 'unit' => 'mtr']);
////        Item::create(['sku' => '10060546', 'description' => '140x45 mm Rad No1 H3.1 PG KD', 'unit' => 'mtr']);
////        Item::create(['sku' => '10060548', 'description' => '140x45 mm Rad No1 H3.2 PG KD', 'unit' => 'mtr']);
////        Item::create(['sku' => '10061058', 'description' => '190x45 mm Rad No1 H3.1 PG KD', 'unit' => 'mtr']);
////        Item::create(['sku' => '10061060', 'description' => '190x45 mm Rad No1 H3.2 PG KD', 'unit' => 'mtr']);
////        Item::create(['sku' => '10061570', 'description' => '240x45 mm Rad No1 H3.1 PG KD', 'unit' => 'mtr']);
////        Item::create(['sku' => '10061572', 'description' => '240x45 mm Rad No1 H3.2 PG KD', 'unit' => 'mtr']);
////        Item::create(['sku' => '10062082', 'description' => '290x45 mm Rad No1 H3.1 PG KD', 'unit' => 'mtr']);
////        Item::create(['sku' => '10062084', 'description' => '290x45 mm Rad No1 H3.2 PG KD', 'unit' => 'mtr']);
////        Item::create(['sku' => '10062594', 'description' => '70x70 mm Rad No1 H3.1 PG KD', 'unit' => 'mtr']);
////        Item::create(['sku' => '10062596', 'description' => '70x70 mm Rad No1 H3.2 PG KD', 'unit' => 'mtr']);
////        Item::create(['sku' => '10063104', 'description' => '50x50 mm Rad No1 H4 RS', 'unit' => 'mtr']);
////        Item::create(['sku' => '10063616', 'description' => '75x50 mm Rad No1 H4 RS', 'unit' => 'mtr']);
////        Item::create(['sku' => '10064128', 'description' => '100x50 mm Rad No1 H4 RS', 'unit' => 'mtr']);
////        Item::create(['sku' => '10064640', 'description' => '125x50 mm Rad No1 H4 RS', 'unit' => 'mtr']);
////        Item::create(['sku' => '10065152', 'description' => '150x50 mm Rad No1 H4 RS', 'unit' => 'mtr']);
////        Item::create(['sku' => '10065664', 'description' => '200x50 mm Rad No1 H4 RS', 'unit' => 'mtr']);
////        Item::create(['sku' => '10066176', 'description' => '250x50 mm Rad No1 H4 RS', 'unit' => 'mtr']);
////        Item::create(['sku' => '10066688', 'description' => '300x50 mm Rad No1 H4 RS', 'unit' => 'mtr']);
////        Item::create(['sku' => '10067200', 'description' => '75x75 mm Rad No1 H4 RS', 'unit' => 'mtr']);
////        Item::create(['sku' => '10067712', 'description' => '100x75 mm Rad No1 H4 RS', 'unit' => 'mtr']);
////        Item::create(['sku' => '10068224', 'description' => '125x75 mm Rad No1 H4 RS', 'unit' => 'mtr']);
////        Item::create(['sku' => '10068736', 'description' => '150x75 mm Rad No1 H4 RS', 'unit' => 'mtr']);
////        Item::create(['sku' => '10069248', 'description' => '200x75 mm Rad No1 H4 RS', 'unit' => 'mtr']);
////        Item::create(['sku' => '10069760', 'description' => '250x75 mm Rad No1 H4 RS', 'unit' => 'mtr']);
////        Item::create(['sku' => '10070272', 'description' => '300x75 mm Rad No1 H4 RS', 'unit' => 'mtr']);
////        Item::create(['sku' => '10070784', 'description' => '100x100 mm Rad No1 H4 RS', 'unit' => 'mtr']);
////        Item::create(['sku' => '10071296', 'description' => '125x100 mm Rad No1 H4 RS', 'unit' => 'mtr']);
////        Item::create(['sku' => '10071808', 'description' => '150x100 mm Rad No1 H4 RS', 'unit' => 'mtr']);
////        Item::create(['sku' => '10072320', 'description' => '200x100 mm Rad No1 H4 RS', 'unit' => 'mtr']);
////        Item::create(['sku' => '10072832', 'description' => '250x100 mm Rad No1 H4 RS', 'unit' => 'mtr']);
////        Item::create(['sku' => '10073344', 'description' => '300x100 mm Rad No1 H4 RS', 'unit' => 'mtr']);
////        Item::create(['sku' => '10073856', 'description' => '150x150 mm Rad No1 H4 RS', 'unit' => 'mtr']);
////        Item::create(['sku' => '10073858', 'description' => '150x150 mm Rad No1 H5 RS', 'unit' => 'mtr']);
////        Item::create(['sku' => '10074368', 'description' => '200x150 mm Rad No1 H4 RS', 'unit' => 'mtr']);
////        Item::create(['sku' => '10074880', 'description' => '50x50 mm Rad No1 H4 PG', 'unit' => 'mtr']);
////        Item::create(['sku' => '10075392', 'description' => '75x50 mm Rad No1 H4 PG', 'unit' => 'mtr']);
////        Item::create(['sku' => '10075904', 'description' => '100x50 mm Rad No1 H4 PG', 'unit' => 'mtr']);
////        Item::create(['sku' => '10076416', 'description' => '125x50 mm Rad No1 H4 PG', 'unit' => 'mtr']);
////        Item::create(['sku' => '10076928', 'description' => '150x50 mm Rad No1 H4 PG', 'unit' => 'mtr']);
////        Item::create(['sku' => '10077440', 'description' => '200x50 mm Rad No1 H4 PG', 'unit' => 'mtr']);
////
////        Item::create(['sku' => '10077952', 'description' => '250x50 mm Rad No1 H4 PG', 'unit' => 'mtr']);
////        Item::create(['sku' => '10078464', 'description' => '300x50 mm Rad No1 H4 PG', 'unit' => 'mtr']);
////        Item::create(['sku' => '10078976', 'description' => '100x75 mm Rad No1 H4 PG', 'unit' => 'mtr']);
////        Item::create(['sku' => '10078980', 'description' => '90x70 mm Rad SG8 H3.2 MG Wet [MSG]', 'unit' => 'mtr']);
////        Item::create(['sku' => '10079488', 'description' => '150x75 mm Rad No1 H4 PG', 'unit' => 'mtr']);
////        Item::create(['sku' => '10079492', 'description' => '140x70 mm Rad SG8 H3.2 MG Wet [MSG]', 'unit' => 'mtr']);
////        Item::create(['sku' => '10080000', 'description' => '200x75 mm Rad No1 H4 PG', 'unit' => 'mtr']);
////        Item::create(['sku' => '10080004', 'description' => '190x70 mm Rad SG8 H3.2 MG Wet [MSG]', 'unit' => 'mtr']);
////        Item::create(['sku' => '10080512', 'description' => '250x75 mm Rad No1 H4 PG', 'unit' => 'mtr']);
////        Item::create(['sku' => '10080516', 'description' => '240x70 mm Rad SG8 H3.2 MG Wet [MSG]', 'unit' => 'mtr']);
////        Item::create(['sku' => '10081024', 'description' => '300x75 mm Rad No1 H4 PG', 'unit' => 'mtr']);
////        Item::create(['sku' => '10081028', 'description' => '290x70 mm Rad SG8 H3.2 MG Wet [MSG]', 'unit' => 'mtr']);
////        Item::create(['sku' => '10081536', 'description' => '100x100 mm Rad No1 H4 PG', 'unit' => 'mtr']);
////        Item::create(['sku' => '10081540', 'description' => '90x90 mm Rad SG8 H3.2 MG Wet [MSG]', 'unit' => 'mtr']);
////        Item::create(['sku' => '10082048', 'description' => '125x100 mm Rad No1 H4 PG', 'unit' => 'mtr']);
////        Item::create(['sku' => '10082052', 'description' => '120x90 mm Rad MSG8 H3.2 MG Wet', 'unit' => 'mtr']);
////        Item::create(['sku' => '10082560', 'description' => '150x100 mm Rad No1 H4 PG', 'unit' => 'mtr']);
////        Item::create(['sku' => '10082564', 'description' => '140x90 mm Rad SG8 H3.2 MG Wet [MSG]', 'unit' => 'mtr']);
////        Item::create(['sku' => '10083072', 'description' => '200x100 mm Rad No1 H4 PG', 'unit' => 'mtr']);
////        Item::create(['sku' => '10083076', 'description' => '190x90 mm Rad SG8 H3.2 MG Wet [MSG]', 'unit' => 'mtr']);
////        Item::create(['sku' => '10083584', 'description' => '250x100 mm Rad No1 H4 PG', 'unit' => 'mtr']);
////        Item::create(['sku' => '10083588', 'description' => '240x90 mm Rad SG8 H3.2 MG Wet [MSG]', 'unit' => 'mtr']);
////        Item::create(['sku' => '10084096', 'description' => '300x100 mm Rad No1 H4 PG', 'unit' => 'mtr']);
////        Item::create(['sku' => '10084100', 'description' => '290x90 mm Rad SG8 H3.2 MG Wet [MSG]', 'unit' => 'mtr']);
////        Item::create(['sku' => '10084608', 'description' => '150x150 mm Rad No1 H4 PG', 'unit' => 'mtr']);
////        Item::create(['sku' => '10084612', 'description' => '150x150 mm Rad No1 H5 PG', 'unit' => 'mtr']);
////        Item::create(['sku' => '10085120', 'description' => '100x75 mm Rad No1 H5 RS', 'unit' => 'mtr']);
////        Item::create(['sku' => '10085632', 'description' => '100x100 mm Rad No1 H5 RS', 'unit' => 'mtr']);
////        Item::create(['sku' => '10085672', 'description' => '125x125 mm Rad No1 H5 RS', 'unit' => 'mtr']);
////        Item::create(['sku' => '10085676', 'description' => '125x125 mm Rad No1 H3.2 RS', 'unit' => 'mtr']);
////        Item::create(['sku' => '10086144', 'description' => '100x75 mm Rad No1 H5 PG', 'unit' => 'mtr']);
////        Item::create(['sku' => '10086656', 'description' => '100x100 mm Rad No1 H5 PG', 'unit' => 'mtr']);
////        Item::create(['sku' => '10086684', 'description' => '125x125 mm Rad No1 H5 PG', 'unit' => 'mtr']);
////        Item::create(['sku' => '10086688', 'description' => '125x125 mm Rad No1 H3.2 PG', 'unit' => 'mtr']);
////        Item::create(['sku' => '10089204', 'description' => 'Bevelled Sill Packer H3.1 x 5.400 metre', 'unit' => 'kith']);
////        Item::create(['sku' => '10090056', 'description' => '90x35 mm Rad MSG6 CF MG KD', 'unit' => 'mtr']);
////        Item::create(['sku' => '10090060', 'description' => '70x45 mm Rad MSG6 CF MG KD', 'unit' => 'mtr']);
////        Item::create(['sku' => '10090064', 'description' => '90x45 mm Rad SG6 CF MG KD [MSG]', 'unit' => 'mtr']);
////        Item::create(['sku' => '10090068', 'description' => '90x35 mm Rad SG6 H1.2 MG KD [MSG]', 'unit' => 'mtr']);
////        Item::create(['sku' => '10090072', 'description' => '70x45 mm Rad SG6 H1.2 MG KD [MSG]', 'unit' => 'mtr']);
////        Item::create(['sku' => '10090076', 'description' => '90x45 mm Rad SG6 H1.2 MG KD [MSG]', 'unit' => 'mtr']);
////
////        Item::create(['sku' => '10090080', 'description' => '90x35 mm Rad MSG6 H3.1 MG KD', 'unit' => 'mtr']);
////        Item::create(['sku' => '10090084', 'description' => '70x45 mm Rad SG6 H3.1 MG KD [MSG]', 'unit' => 'mtr']);
////        Item::create(['sku' => '10090088', 'description' => '90x45 mm Rad SG6 H3.1 MG KD [MSG]', 'unit' => 'mtr']);
////        Item::create(['sku' => '10090092', 'description' => '70x35 mm Rad MSG8 CF MG KD', 'unit' => 'mtr']);
////        Item::create(['sku' => '10090096', 'description' => '90x35 mm Rad MSG8 CF MG KD', 'unit' => 'mtr']);
////        Item::create(['sku' => '10090098', 'description' => '140x35 mm Rad MSG8 CF MG KD 5.4', 'unit' => 'lgth']);
////        Item::create(['sku' => '10090100', 'description' => '140x35 mm Rad MSG8 CF MG KD', 'unit' => 'mtr']);
////        Item::create(['sku' => '10090102', 'description' => '45x45 mm Rad MSG8 CF MG KD', 'unit' => 'mtr']);
////        Item::create(['sku' => '10090104', 'description' => '70x45 mm Rad MSG8 CF MG KD', 'unit' => 'mtr']);
////        Item::create(['sku' => '10090108', 'description' => '90x45 mm Rad MSG8 CF MG KD', 'unit' => 'mtr']);
////        Item::create(['sku' => '10090112', 'description' => '140x45 mm Rad MSG8 CF MG KD', 'unit' => 'mtr']);
////        Item::create(['sku' => '10090114', 'description' => '190x35 mm Rad MSG8 CF MG KD', 'unit' => 'mtr']);
////        Item::create(['sku' => '10090116', 'description' => '190x45 mm Rad MSG8 CF MG KD', 'unit' => 'mtr']);
////        Item::create(['sku' => '10090118', 'description' => '240x35 mm Rad MSG8 CF MG KD', 'unit' => 'mtr']);
////        Item::create(['sku' => '10090120', 'description' => '240x45 mm Rad MSG8 CF MG KD', 'unit' => 'mtr']);
////        Item::create(['sku' => '10090122', 'description' => '290x35 mm Rad MSG8 CF MG KD', 'unit' => 'mtr']);
////        Item::create(['sku' => '10090124', 'description' => '290x45 mm Rad MSG8 CF MG KD', 'unit' => 'mtr']);
////        Item::create(['sku' => '10090128', 'description' => '70x35 mm Rad SG8 H1.2 MG KD [MSG]', 'unit' => 'mtr']);
////        Item::create(['sku' => '10090132', 'description' => '90x35 mm Rad SG8 H1.2 MG KD [MSG]', 'unit' => 'mtr']);
////        Item::create(['sku' => '10090136', 'description' => '140x35 mm Rad SG8 H1.2 MG KD [MSG]', 'unit' => 'mtr']);
////        Item::create(['sku' => '10090137', 'description' => '190x35 mm Rad SG8 H1.2 MG KD [MSG]', 'unit' => 'mtr']);
////        Item::create(['sku' => '10090138', 'description' => '45x45 mm Rad SG8 H1.2 MG KD [MSG]', 'unit' => 'mtr']);
////        Item::create(['sku' => '10090140', 'description' => '70x45 mm Rad SG8 H1.2 MG KD [MSG]', 'unit' => 'mtr']);
////        Item::create(['sku' => '10090144', 'description' => '90x45 mm Rad SG8 H1.2 MG KD [MSG]', 'unit' => 'mtr']);
////        Item::create(['sku' => '10090148', 'description' => '140x45 mm Rad SG8 H1.2 MG KD [MSG]', 'unit' => 'mtr']);
////        Item::create(['sku' => '10090152', 'description' => '190x45 mm Rad SG8 H1.2 MG KD [MSG]', 'unit' => 'mtr']);
////        Item::create(['sku' => '10090154', 'description' => '240x35 mm Rad SG8 H1.2 MG KD [MSG]', 'unit' => 'mtr']);
////        Item::create(['sku' => '10090156', 'description' => '240x45 mm Rad SG8 H1.2 MG KD [MSG]', 'unit' => 'mtr']);
////        Item::create(['sku' => '10090158', 'description' => '290x35 mm Rad SG8 H1.2 MG KD [MSG]', 'unit' => 'mtr']);
////        Item::create(['sku' => '10090160', 'description' => '290x45 mm Rad SG8 H1.2 MG KD [MSG]', 'unit' => 'mtr']);
////        Item::create(['sku' => '10090164', 'description' => '70x35 mm Rad SG8 H3.1 MG KD [MSG]', 'unit' => 'mtr']);
////        Item::create(['sku' => '10090168', 'description' => '90x35 mm Rad SG8 H3.1 MG KD [MSG]', 'unit' => 'mtr']);
////        Item::create(['sku' => '10090172', 'description' => '140x35 mm Rad SG8 H3.1 MG KD [MSG]', 'unit' => 'mtr']);
////        Item::create(['sku' => '10090173', 'description' => '190x35 mm Rad SG8 H3.1 MG KD [MSG]', 'unit' => 'mtr']);
////        Item::create(['sku' => '10090174', 'description' => '45x45 mm Rad SG8 H3.1 MG KD [MSG]', 'unit' => 'mtr']);
////        Item::create(['sku' => '10090176', 'description' => '70x45 mm Rad SG8 H3.1 MG KD [MSG]', 'unit' => 'mtr']);
////        Item::create(['sku' => '10090180', 'description' => '90x45 mm Rad SG8 H3.1 MG KD [MSG]', 'unit' => 'mtr']);
////        Item::create(['sku' => '10090184', 'description' => '140x45 mm Rad SG8 H3.1 MG KD [MSG]', 'unit' => 'mtr']);
////        Item::create(['sku' => '10090188', 'description' => '190x45 mm Rad SG8 H3.1 MG KD [MSG]', 'unit' => 'mtr']);
////        Item::create(['sku' => '10090190', 'description' => '240x35 mm Rad SG8 H3.1 MG KD [MSG]', 'unit' => 'mtr']);
////        Item::create(['sku' => '10090192', 'description' => '240x45 mm Rad SG8 H3.1 MG KD [MSG]', 'unit' => 'mtr']);
////
////        Item::create(['sku' => '10090194', 'description' => '290x35 mm Rad SG8 H3.1 MG KD [MSG]', 'unit' => 'mtr']);
////        Item::create(['sku' => '10090196', 'description' => '290x45 mm Rad SG8 H3.1 MG KD [MSG]', 'unit' => 'mtr']);
////        Item::create(['sku' => '10090200', 'description' => '90x35 mm Rad MSG12 CF MG KD', 'unit' => 'mtr']);
////        Item::create(['sku' => '10090204', 'description' => '140x35 mm Rad MSG12 CF MG KD', 'unit' => 'mtr']);
////        Item::create(['sku' => '10090208', 'description' => '90x45 mm Rad MSG12 CF MG KD', 'unit' => 'mtr']);
////        Item::create(['sku' => '10090212', 'description' => '140x45 mm Rad MSG12 CF MG KD', 'unit' => 'mtr']);
////        Item::create(['sku' => '10090216', 'description' => '90x35 mm Rad SGI2 H1.2 MG KD [MSG]', 'unit' => 'mtr']);
////        Item::create(['sku' => '10090220', 'description' => '140x35 mm Rad SG12 H1.2 MG KD [MSG]', 'unit' => 'mtr']);
////        Item::create(['sku' => '10090224', 'description' => '90x45 mm Rad SG12 H1.2 MG KD [MSG]', 'unit' => 'mtr']);
////        Item::create(['sku' => '10090228', 'description' => '140x45 mm Rad SG12 H1.2 MG KD [MSG]', 'unit' => 'mtr']);
////        Item::create(['sku' => '10090232', 'description' => '90x35 mm Rad SG12 H3.1 MG KD [MSG]', 'unit' => 'mtr']);
////        Item::create(['sku' => '10090236', 'description' => '140x35 mm Rad SG12 H3.1 MG KD [MSG]', 'unit' => 'mtr']);
////        Item::create(['sku' => '10090240', 'description' => '90x45 mm Rad SG12 H3.1 MG KD [MSG]', 'unit' => 'mtr']);
////        Item::create(['sku' => '10090244', 'description' => '140x45 mm Rad SG12 H3.1 MG KD [MSG]', 'unit' => 'mtr']);
////        Item::create(['sku' => '10090260', 'description' => '90x35 mm Rad MSG10 CF MG KD', 'unit' => 'mtr']);
////        Item::create(['sku' => '10090264', 'description' => '140x35 mm Rad MSG10 CF MG KD', 'unit' => 'mtr']);
////        Item::create(['sku' => '10090268', 'description' => '90x45 mm Rad MSG10 CF MG KD', 'unit' => 'mtr']);
////        Item::create(['sku' => '10090272', 'description' => '140x45 mm Rad MSG10 CF MG KD', 'unit' => 'mtr']);
////        Item::create(['sku' => '10090276', 'description' => '90x35 mm Rad SG10 H1.2 MG KD [MSG]', 'unit' => 'mtr']);
////        Item::create(['sku' => '10090280', 'description' => '140x35 mm Rad SG10 H1.2 MG KD [MSG]', 'unit' => 'mtr']);
////        Item::create(['sku' => '10090284', 'description' => '90x45 mm Rad SG10 H1.2 MG KD [MSG]', 'unit' => 'mtr']);
////        Item::create(['sku' => '10090288', 'description' => '140x45 mm Rad SG10 H1.2 MG KD [MSG]', 'unit' => 'mtr']);
////        Item::create(['sku' => '10090292', 'description' => '90x35 mm Rad SG10 H3.1 MG KD [MSG]', 'unit' => 'mtr']);
////        Item::create(['sku' => '10090296', 'description' => '140x35 mm Rad SG10 H3.1 MG KD [MSG]', 'unit' => 'mtr']);
////        Item::create(['sku' => '10090300', 'description' => '90x45 mm Rad SG10 H3.1 MG KD [MSG]', 'unit' => 'mtr']);
////        Item::create(['sku' => '10090304', 'description' => '140x45 mm Rad SG10 H3.1 MG KD [MSG]', 'unit' => 'mtr']);
////        Item::create(['sku' => '10091004', 'description' => '70x35 mm Rad VSG8 CF MG KD', 'unit' => 'mtr']);
////        Item::create(['sku' => '10091008', 'description' => '90x35 mm Rad VSG8 CF MG KD', 'unit' => 'mtr']);
////        Item::create(['sku' => '10091012', 'description' => '140x35 mm Rad VSG8 CF MG KD', 'unit' => 'mtr']);
////        Item::create(['sku' => '10091016', 'description' => '70x45 mm Rad VSG8 CF MG KD', 'unit' => 'mtr']);
////        Item::create(['sku' => '10091020', 'description' => '90x45 mm Rad VSG8 CF MG KD', 'unit' => 'mtr']);
////        Item::create(['sku' => '10091024', 'description' => '140x45 mm Rad VSG8 CF MG KD', 'unit' => 'mtr']);
////        Item::create(['sku' => '10091028', 'description' => '190x45 mm Rad VSG8 CF MG KD', 'unit' => 'mtr']);
////        Item::create(['sku' => '10091032', 'description' => '240x45 mm Rad VSG8 CF MG KD', 'unit' => 'mtr']);
////        Item::create(['sku' => '10091036', 'description' => '290x45 mm Rad VSG8 CF MG KD', 'unit' => 'mtr']);
////        Item::create(['sku' => '10091040', 'description' => '70x35 mm Rad SG8 H1.2 MG KD [VSG]', 'unit' => 'mtr']);
////        Item::create(['sku' => '10091044', 'description' => '90x35 mm Rad SG8 H1.2 MG KD [VSG]', 'unit' => 'mtr']);
////        Item::create(['sku' => '10091048', 'description' => '140x35 mm Rad SG8 H1.2 MG KD [VSG]', 'unit' => 'mtr']);
////        Item::create(['sku' => '10091052', 'description' => '70x45 mm Rad SG8 H1.2 MG KD [VSG]', 'unit' => 'mtr']);
////        Item::create(['sku' => '10091056', 'description' => '90x45 mm Rad SG8 H1.2 MG KD [VSG]', 'unit' => 'mtr']);
////
////        Item::create(['sku' => '10091060', 'description' => '140x45 mm Rad SG8 H1.2 MG KD [VSG]', 'unit' => 'mtr']);
////        Item::create(['sku' => '10091064', 'description' => '190x45 mm Rad SG8 H1.2 MG KD [VSG]', 'unit' => 'mtr']);
////        Item::create(['sku' => '10091068', 'description' => '240x45 mm Rad SG8 H1.2 MG KD [VSG]', 'unit' => 'mtr']);
////        Item::create(['sku' => '10091072', 'description' => '290x45 mm Rad SG8 H1.2 MG KD [VSG]', 'unit' => 'mtr']);
////        Item::create(['sku' => '10091076', 'description' => '70x35 mm Rad SG8 H3.1 MG KD [VSG]', 'unit' => 'mtr']);
////        Item::create(['sku' => '10091080', 'description' => '90x35 mm Rad SG8 H3.1 MG KD [VSG]', 'unit' => 'mtr']);
////        Item::create(['sku' => '10091084', 'description' => '140x35 mm Rad SG8 H3.1 MG KD [VSG]', 'unit' => 'mtr']);
////        Item::create(['sku' => '10091088', 'description' => '70x45 mm Rad SG8 H3.1 MG KD [VSG]', 'unit' => 'mtr']);
////        Item::create(['sku' => '10091092', 'description' => '90x45 mm Rad SG8 H3.1 MG KD [VSG]', 'unit' => 'mtr']);
////        Item::create(['sku' => '10091096', 'description' => '140x45 mm Rad SG8 H3.1 MG KD [VSG]', 'unit' => 'mtr']);
////        Item::create(['sku' => '10091100', 'description' => '190x45 mm Rad SG8 H3.1 MG KD [VSG]', 'unit' => 'mtr']);
////        Item::create(['sku' => '10091104', 'description' => '240x45 mm Rad SG8 H3.1 MG KD [VSG]', 'unit' => 'mtr']);
////        Item::create(['sku' => '10091108', 'description' => '290x45 mm Rad SG8 H3.1 MG KD [VSG]', 'unit' => 'mtr']);
////        Item::create(['sku' => '10091204', 'description' => '70x35 mm Rad VSG10 CF MG KD', 'unit' => 'mtr']);
////        Item::create(['sku' => '10091208', 'description' => '90x35 mm Rad VSG10 CF MG KD', 'unit' => 'mtr']);
////        Item::create(['sku' => '10091216', 'description' => '140x35 mm Rad VSG10 CF MG KD', 'unit' => 'mtr']);
////        Item::create(['sku' => '10091220', 'description' => '70x45 mm Rad VSG10 CF MG KD', 'unit' => 'mtr']);
////        Item::create(['sku' => '10091224', 'description' => '90x45 mm Rad VSG10 CF MG KD', 'unit' => 'mtr']);
////        Item::create(['sku' => '10091228', 'description' => '140x45 mm Rad VSG10 CF MG KD', 'unit' => 'mtr']);
////        Item::create(['sku' => '10091232', 'description' => '190x45 mm Rad VSG10 CF MG KD', 'unit' => 'mtr']);
////        Item::create(['sku' => '10091236', 'description' => '240x45 mm Rad VSG10 CF MG KD', 'unit' => 'mtr']);
////        Item::create(['sku' => '10091240', 'description' => '290x45 mm Rad VSG10 CF MG KD', 'unit' => 'mtr']);
////        Item::create(['sku' => '10091244', 'description' => '70x35 mm Rad SG10 H1.2 MG KD [VSG]', 'unit' => 'mtr']);
////        Item::create(['sku' => '10091248', 'description' => '90x35 mm Rad SG10 H1.2 MG KD [VSG]', 'unit' => 'mtr']);
////        Item::create(['sku' => '10091252', 'description' => '140x35 mm Rad SG10 H1.2 MG KD [VSG]', 'unit' => 'mtr']);
////        Item::create(['sku' => '10091256', 'description' => '70x45 mm Rad SG10 H1.2 MG KD [VSG]', 'unit' => 'mtr']);
////        Item::create(['sku' => '10091260', 'description' => '90x45 mm Rad SG10 H1.2 MG KD [VSG]', 'unit' => 'mtr']);
////        Item::create(['sku' => '10091264', 'description' => '140x45 mm Rad SG10 H1.2 MG KD [VSG]', 'unit' => 'mtr']);
////        Item::create(['sku' => '10091268', 'description' => '190x45 mm Rad SG10 H1.2 MG KD [VSG]', 'unit' => 'mtr']);
////        Item::create(['sku' => '10091272', 'description' => '240x45 mm Rad SG10 H1.2 MG KD [VSG]', 'unit' => 'mtr']);
////        Item::create(['sku' => '10091276', 'description' => '290x45 mm Rad SG10 H1.2 MG KD [VSG]', 'unit' => 'mtr']);
////        Item::create(['sku' => '10091280', 'description' => '70x35 mm Rad SG10 H3.1 MG KD [VSG]', 'unit' => 'mtr']);
////        Item::create(['sku' => '10091284', 'description' => '90x35 mm Rad SG10 H3.1 MG KD [VSG]', 'unit' => 'mtr']);
////        Item::create(['sku' => '10091288', 'description' => '140x35 mm Rad SG10 H3.1 MG KD [VSG]', 'unit' => 'mtr']);
////        Item::create(['sku' => '10091292', 'description' => '70x45 mm Rad SG10 H3.1 MG KD [VSG]', 'unit' => 'mtr']);
////        Item::create(['sku' => '10091296', 'description' => '90x45 mm Rad SG10 H3.1 MG KD [VSG]', 'unit' => 'mtr']);
////        Item::create(['sku' => '10091300', 'description' => '140x45 mm Rad SG10 H3.1 MG KD [VSG]', 'unit' => 'mtr']);
////        Item::create(['sku' => '10091304', 'description' => '190x45 mm Rad SG10 H3.1 MG KD [VSG]', 'unit' => 'mtr']);
////        Item::create(['sku' => '10091308', 'description' => '240x45 mm Rad SG10 H3.1 MG KD [VSG]', 'unit' => 'mtr']);
////        Item::create(['sku' => '10091312', 'description' => '290x45 mm Rad SG10 H3.1 MG KD [VSG]', 'unit' => 'mtr']);
////        Item::create(['sku' => '10091996', 'description' => '70x70 mm Rad SG8 H3.1 MG KD [MSG]', 'unit' => 'mtr']);
//
//
//    }
//}
