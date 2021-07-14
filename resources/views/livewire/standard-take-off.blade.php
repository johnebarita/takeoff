<div class="w-5/6">
    @if($job!=null)
        <div>
            <div class="font-bold text-xl text-right">Material Listing</div>
            <div class="font-bold text-base text-right">{{$job?$job['client_ref']:''}}</div>
            <div class="mt-4 flex justify-between ">
                <div class="text-base w-1/3">
                    <div class="flex">
                        <p class="font-bold w-1/2">Client </p>
                        <p class="">{{$job?ucwords($job['client_name']):''}}</p>
                    </div>
                    <div class="flex">
                        <p class="font-bold w-1/2">Address </p>
                        <p class=""></p>
                    </div>
                </div>
                <div class="font-bold text-xl text-right">{{$job?ucwords($job['job_name']):''}}</div>

            </div>
            <div class="mt-4 font-bold text-base text-right">Ref<span
                    class="ml-5 font-medium">{{$job?$job['client_ref']:''}}</span></div>
        </div>
        <div class="mt-3">
            <div class="ml-5">
                <table class="w-full ">
                    <thead>
                    <tr>
                        <th class="text-left w-1/6 ">SKU Number</th>
                        <th class="text-left">Description</th>
                        <th class=" w-1/6">Unit</th>
                        <th class=" w-1/6">Qty</th>
                    </tr>
                    </thead>
                </table>
            </div>
            <div class="border border-black"></div>
        </div>
        <div class="mt-3">
            <div class="bg-my-grey font-bold px-2">Foundation</div>
            <div class="ml-5">
                <table class="w-full take-off-table">
                    <tbody>


                    @if($job['floor_type']=="Concrete")
                        <tr class="text-center">
                            <td class="w-1/6">35100001</td>
                            <td class="text-left">Reinf Mesh SE62 4.7Mx2.03M 7.61cvr [250lap]</td>
                            <td class="w-1/6">SHT</td>
                            <td class="w-1/6">{{ceil($shed_area/7.61)}}</td>
                        </tr>
                        <tr class="text-center">
                            <td class="w-1/6">32500704</td>
                            <td class="text-left">Sand No.3 Bulk</td>
                            <td class="w-1/6">M3</td>
                            {{--                        Shed Area * 25mm thickness + 10% wastage--}}
                            <td class="w-1/6">{{number_format(round(($shed_area*.025)+(($shed_area*.025)*.1),2),3)}}</td>
                        </tr>
                        <tr class="text-center">
                            <td class="w-1/6">32500164</td>
                            <td class="text-left">GAP 65 Metal</td>
                            <td class="w-1/6">M3</td>
                            {{--                        Shed Area * 150mm thickness + 40% wastage--}}
                            <td class="w-1/6">{{number_format(round(($shed_area*.15)+(($shed_area*.15)*.40),2),3)}}</td>
                        </tr>
                    @endif
                    @foreach($concretes as $title=>$item)
                        @foreach($item as $key=>$value)
                            <tr class="text-center">
                                <td class=" w-1/6">{{$value['sku']}}</td>
                                <td class="text-left">{{$key}} {{strtoupper($title)}}</td>
                                <td class=" w-1/6">{{strtoupper($value['unit'])}}</td>
                                <td class=" w-1/6">{{$value['qty']}}</td>
                            </tr>
                        @endforeach
                    @endforeach
                    @if($job['floor_type']=="Concrete")
                        <tr class="text-center">
                            <td class="w-1/6">32706592 </td>
                            <td class="text-left">Hurricane Reinforcing Bar Chair 50/65 ea SLAB</td>
                            <td class="w-1/6">EACH</td>
                            <td class="w-1/6">{{ceil($shed_area)}}</td>
                        </tr>
                        <tr class="text-center">
                            <td class="w-1/6">34300832</td>
                            <td class="text-left">3M Polythene Tape 48mmx30m 4810 SLAB</td>
                            <td class="w-1/6">ROLL</td>
                            <td class="w-1/6">{{$tape}}</td>
                        </tr>
                        <tr class="text-center">
                            <td class="w-1/6">34303392 </td>
                            <td class="text-left">Agpac Polythene Black 250 micron 4mx25m SLAB</td>
                            <td class="w-1/6">ROLL</td>
                            <td class="w-1/6">{{ceil(100/$shed_area)}}</td>
                        </tr>
                        <tr class="text-center">
                            <td class="w-1/6">35006464 </td>
                            <td class="text-left">Black Annealed Tie Wire 230mm 1 Kg Bndle</td>
                            <td class="w-1/6">EACH</td>
                            {{--                        From Qoutake : Area *.006--}}
                            <td class="w-1/6">{{ceil($shed_area*.006)}}</td>
                        </tr>

                    @endif
                    </tbody>
                </table>
            </div>
        </div>
        <div class="mt-3">
            <div class="bg-my-grey font-bold px-2">PoleShed Ext Framing</div>
            <div class="ml-5">
                <table class="w-full take-off-table">
                    <tbody>
                    @foreach($rafters as $title=>$item)
                        @foreach($item as $key=>$value)
                            <tr class="text-center">
                                <td class=" w-1/6 ">{{$value['sku']}}</td>
                                <td class="text-left">{{$key}} {{strtoupper($title)}}</td>
                                <td class=" w-1/6">{{strtoupper($value['unit'])}}</td>
                                <td class=" w-1/6">{{$value['qty']}}</td>
                            </tr>
                        @endforeach
                    @endforeach
                    @foreach($purlins as $key =>$value)
                        <tr class="text-center">
                            <td class=" w-1/6 ">{{$value['sku']}}</td>
                            <td class="text-left">{{$key}} PURLINS</td>
                            <td class=" w-1/6">{{strtoupper($value['unit'])}}</td>
                            <td class=" w-1/6">{{$value['qty']}}</td>
                        </tr>
                    @endforeach
                    @foreach($girts_and_columns as $title=>$item)
                        @foreach($item as $key=>$value)
                            <tr class="text-center">
                                <td class=" w-1/6 ">{{$value['sku']}}</td>
                                <td class="text-left">{{$key}} {{strtoupper($title)}}</td>
                                <td class=" w-1/6">{{strtoupper($value['unit'])}}</td>
                                <td class=" w-1/6">{{$value['qty']}}</td>
                            </tr>
                        @endforeach
                    @endforeach
                    @foreach($poles as $key =>$value)
                        <tr class="text-center">
                            <td class=" w-1/6 ">{{$value['sku']}}</td>
                            <td class="text-left">Pole Round {{$key}} POST</td>
                            <td class=" w-1/6">{{strtoupper($value['unit'])}}</td>
                            <td class=" w-1/6">{{$value['qty']}}</td>
                        </tr>
                    @endforeach

                    </tbody>
                </table>
            </div>
        </div>
        <div class="mt-3">
            <div class="bg-my-grey font-bold px-2">PoleShed Framing Hardware</div>
            <div class="ml-5">
                <table class="w-full take-off-table">
                    <tbody>

                    @foreach($fixings_fasteners as $key=>$value)
                        <tr class="text-center">
                            <td class=" w-1/6  ">{{$value['sku']}}</td>
                            <td class="text-left">{{$key.' '.strtoupper($value['usage'])}}</td>
                            <td class=" w-1/6">{{strtoupper($value['unit'])}}</td>
                            <td class=" w-1/6">{{$value['qty']}}</td>
                        </tr>
                    @endforeach
                    @foreach($brace_with_tensioners as $key=>$value)
                        <tr class="text-center">
                            <td class=" w-1/6  ">{{$value['sku']}}</td>
                            <td class="text-left">{{$key}}</td>
                            <td class=" w-1/6">{{strtoupper($value['unit'])}}</td>
                            <td class=" w-1/6">{{$value['qty']}}</td>
                        </tr>
                    @endforeach
{{--                    <tr class="text-center">--}}
{{--                        <td class=" w-1/6  "></td>--}}
{{--                        <td class="text-left">Bowmac Strap Rag B75 POSTS</td>--}}
{{--                        <td class=" w-1/6">EACH</td>--}}
{{--                        <td class=" w-1/6">{{$num_columns}}</td>--}}
{{--                    </tr>--}}
{{--                    <tr class="text-center">--}}
{{--                        <td class=" w-1/6  "></td>--}}
{{--                        <td class="text-left">Tylok Nail Plate 68x120mm 4T10 PURLINS</td>--}}
{{--                        <td class=" w-1/6">EACH</td>--}}
{{--                        --}}{{--5 percent waste--}}
{{--                        <td class=" w-1/6">{{ceil(($bays*4) + ($bays*4) * 0.05)}}</td>--}}
{{--                    </tr>--}}
{{--                    <tr class="text-center">--}}
{{--                        <td class=" w-1/6  "></td>--}}
{{--                        <td class="text-left">L/Lok Girt Plate Galv COLUMN</td>--}}
{{--                        <td class=" w-1/6">EACH</td>--}}
{{--                        --}}{{--5 percent waste--}}
{{--                        <td class=" w-1/6">{{ceil(((($num_girts+$num_purlins_per_bay)*2)+$num_columns) + ((($num_girts+$num_purlins_per_bay)*2)+$num_columns) * 0.05)}}</td>--}}
{{--                    </tr>--}}
{{--                    <tr class="text-center">--}}
{{--                        <td class=" w-1/6  "></td>--}}
{{--                        <td class="text-left">Type 17 Screw 14g x 35mm COLUMN</td>--}}
{{--                        <td class=" w-1/6">EACH</td>--}}
{{--                        --}}{{--5 percent waste--}}
{{--                        <td class=" w-1/6">{{ceil((((($num_girts+$num_purlins_per_bay)*2)+$num_columns) *6) + (((($num_girts+$num_purlins_per_bay)*2)+$num_columns)*6) * 0.05)}}</td>--}}
{{--                    </tr>--}}
{{--                    <tr class="text-center">--}}
{{--                        <td class=" w-1/6  "></td>--}}
{{--                        --}}{{--                    Joist Hanger depends on the purlin size--}}
{{--                        <td class="text-left">L/lok Joist Hanger Pre-galv 47x120mm PURLINS</td>--}}
{{--                        <td class=" w-1/6">EACH</td>--}}
{{--                        --}}{{--5 percent waste--}}
{{--                        <td class=" w-1/6">{{ceil(((($num_purlins_per_bay-2)*$bays)*2) + ((($num_purlins_per_bay-2)*$bays)*2)* 0.05)}}</td>--}}
{{--                    </tr>--}}
{{--                    <tr class="text-center">--}}
{{--                        <td class=" w-1/6  "></td>--}}
{{--                        <td class="text-left">L/lok Concealed Purlin Cleat CPC80 PURLINS</td>--}}
{{--                        <td class=" w-1/6">EACH</td>--}}
{{--                        --}}{{--5 percent waste--}}
{{--                        <td class=" w-1/6">{{$bays*2}}</td>--}}
{{--                    </tr>--}}
{{--                    @foreach($brace_with_tensioners as $key=>$value)--}}
{{--                        <tr class="text-center">--}}
{{--                            <td class=" w-1/6  "></td>--}}
{{--                            <td class="text-left">{{$key}}</td>--}}
{{--                            <td class=" w-1/6">{{strtoupper($value['unit'])}}</td>--}}
{{--                            <td class=" w-1/6">{{$value['qty']}}</td>--}}
{{--                        </tr>--}}
{{--                    @endforeach--}}
{{--                    @foreach($bolts_and_washers as $key=>$value)--}}
{{--                        <tr class="text-center">--}}
{{--                            <td class=" w-1/6  "></td>--}}
{{--                            <td class="text-left">{{$key}}</td>--}}
{{--                            <td class=" w-1/6">EACH</td>--}}
{{--                            <td class=" w-1/6">{{$value}}</td>--}}
{{--                        </tr>--}}
{{--                    @endforeach--}}
                    </tbody>
                </table>
            </div>
        </div>
        <div class="mt-3">
            <div class="bg-my-grey font-bold px-2">PoleShed Cladding</div>
            <div class="ml-5">
                <table class="w-full take-off-table">
                    <tbody>
                    @foreach($doors as $key=>$value)
                        <tr class="text-center">
                            <td class=" w-1/6  "></td>
                            <td class="text-left">{{$key}}</td>
                            <td class=" w-1/6">{{strtoupper($value['unit'])}}</td>
                            <td class=" w-1/6">{{$value['qty']}}</td>
                        </tr>
                    @endforeach
                    @foreach($overhang_cladding as $key=>$value)
                        <tr class="text-center">
                            <td class=" w-1/6  "></td>
                            <td class="text-left">{{$key}}</td>
                            <td class=" w-1/6">{{strtoupper($value['unit'])}}</td>
                            <td class=" w-1/6">{{$value['qty']}}</td>
                        </tr>
                    @endforeach
                    <tr class="text-center">
                        <td class=" w-1/6  "></td>
                        <td class="text-left">Impulse Nail & Fuel; Pk 75 ZB20547V</td>
                        <td class=" w-1/6">EACH</td>
                        <td class=" w-1/6">1</td>
                    </tr>
                    <tr class="text-center">
                        <td class=" w-1/6  "></td>
                        <td class="text-left">Bostik Fill-A-Gap Gap Filler</td>
                        <td class=" w-1/6">EACH</td>
                        <td class=" w-1/6">1</td>
                    </tr>
                    <tr class="text-center">
                        <td class=" w-1/6  "></td>
                        <td class="text-left">Nail Galv FH Hardiflex 40x2.80mm 500g</td>
                        <td class=" w-1/6">BAG</td>
                        <td class=" w-1/6">1</td>
                    </tr>
                    <tr class="text-center">
                        <td class=" w-1/6  "></td>
                        <td class="text-left">Nail Galv Steel Jolt Hd 75x3.15mm 500g FASCIA</td>
                        <td class=" w-1/6">BAG</td>
                        <td class=" w-1/6">1</td>
                    </tr>
                    <tr class="text-center">
                        <td class=" w-1/6  "></td>
                        <td class="text-left">Thermakraft Aluband Window Sealing Tape 200mmx25m ALU200025 OPENINGS</td>
                        <td class=" w-1/6">ROLL</td>
                        <td class=" w-1/6">1</td>
                    </tr>
                    <tr class="text-center">
                        <td class=" w-1/6  "></td>
                        <td class="text-left">Thermakraft Aluband Window Sealing Tape 75mmx25m ALU075025 OPENINGS</td>
                        <td class=" w-1/6">ROLL</td>
                        <td class=" w-1/6">1</td>
                    </tr>
                    <tr class="text-center">
                        <td class=" w-1/6  "></td>
                        <td class="text-left">504 Holdfast GORILLA Foam 400ml OPENINGS</td>
                        <td class=" w-1/6">ROLL</td>
                        <td class=" w-1/6">1</td>
                    </tr>

                    </tbody>
                </table>
            </div>
        </div>
    @endif
</div>
