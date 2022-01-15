<div class="w-5/6">
    @if($job!=null)
        <div class="flex flex-row-reverse mb-5">
            <div wire:click="downloadPDF()"
                 class="bg-green-500 hover:bg-green-700 text-white font-bold py-2 px-4 rounded-full mx-2 truncate cursor-default">
                Download
            </div>
            <button
                class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded-full mx-2 truncate cursor-default">
                Export to Shed
            </button>
        </div>
        <div>

            <div class="flex justify-between">
                <img class="" width="300" src="{{ asset('carters_logo/carters-takeoff-logo.png') }}" alt="test">
                <div>
                    <div class="font-bold text-xl text-right">Material Listing</div>
                    <div class="font-bold text-base text-right">{{$job?$job['client_ref']:''}}</div>
                </div>

            </div>


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
            <div class="border-b-2 border-black"></div>
        </div>
        <div class="mt-3">
            <div class="bg-my-grey font-bold px-2">Foundation</div>
            <div class="ml-5">
                <table class="w-full take-off-table">
                    <tbody>
                    @foreach($foundations as $key=>$foundation)
                        @if(isset($foundation['sku']))
                            <tr class="text-center">
                                <td class="w-1/6">{{$foundation['sku']}}</td>
                                <td class="text-left">{{$key.' '.(isset($foundation['usage'])?strtoupper($foundation['usage']):'')}}</td>
                                <td class="w-1/6">{{strtoupper($foundation['unit'])}}</td>
                                <td class="w-1/6">{{$foundation['qty']}}</td>
                            </tr>
                        @else
                            @foreach($foundation as $value)
                                <tr class="text-center">
                                    <td class="w-1/6">{{$value['sku']}}</td>
                                    <td class="text-left">{{$key.' '.(isset($value['usage'])?strtoupper($value['usage']):'')}}</td>
                                    <td class="w-1/6">{{strtoupper($value['unit'])}}</td>
                                    <td class="w-1/6">{{$value['qty']}}</td>
                                </tr>
                            @endforeach
                        @endif
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
        <div class="mt-3">
            <div class="bg-my-grey font-bold px-2">PoleShed Ext Framing</div>
            <div class="ml-5">
                <table class="w-full take-off-table">
                    <tbody>
                    @foreach($ext_framings as $framings)
                        @foreach($framings as $usage=>$framing)
                            @foreach($framing as $item=>$value)
                                <tr class="text-center">
                                    <td class=" w-1/6 ">{{$value['sku']}}</td>
                                    <td class="text-left">{{$item}} {{strtoupper($usage)}}</td>
                                    <td class=" w-1/6">{{strtoupper($value['unit'])}}</td>
                                    <td class=" w-1/6">{{$value['qty']}}</td>
                                </tr>
                            @endforeach
                        @endforeach
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
                    @foreach($framing_hardwares as $hardwares)
                        @foreach($hardwares as $item=>$value)
                            @if(isset($value['sku']))
                                <tr class="text-center">
                                    <td class=" w-1/6  ">{{$value['sku']}}</td>
                                    <td class="text-left">{{$item.' '.(isset($value['usage'])?strtoupper($value['usage']):'')}}</td>
                                    <td class=" w-1/6">{{strtoupper($value['unit'])}}</td>
                                    <td class=" w-1/6">{{$value['qty']}}</td>
                                </tr>
                            @else
                                @foreach($value as $details)
                                    <tr class="text-center">
                                        <td class=" w-1/6  ">{{$details['sku']}}</td>
                                        <td class="text-left">{{$item.' '.(isset($details['usage'])?strtoupper($details['usage']):'')}}</td>
                                        <td class=" w-1/6">{{strtoupper($details['unit'])}}</td>
                                        <td class=" w-1/6">{{$details['qty']}}</td>
                                    </tr>
                                @endforeach
                            @endif
                        @endforeach
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
        <div class="mt-3">
            <div class="bg-my-grey font-bold px-2">PoleShed Cladding</div>
            <div class="ml-5">
                <table class="w-full take-off-table">
                    <tbody>
                    @foreach($claddings  as $key=>$value)
                        <tr class="text-center">
                            <td class=" w-1/6  ">{{$value['sku']}}</td>
                            <td class="text-left">{{$key.' '.(isset($value['usage'])?strtoupper($value['usage']):'')}}</td>
                            <td class=" w-1/6">{{strtoupper($value['unit'])}}</td>
                            <td class=" w-1/6">{{$value['qty']}}</td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
        <div class="mt-3">
            <div class="bg-my-grey font-bold px-2">RAINWATER SYSTEM</div>
            <div class="ml-5">
                <table class="w-full take-off-table">
                    <tbody>
                    @foreach($rainwater_systems  as $key=>$value)
                        <tr class="text-center">
                            <td class=" w-1/6  ">{{$value['sku']}}</td>
                            <td class="text-left">{{$key}}</td>
                            <td class=" w-1/6">{{strtoupper($value['unit'])}}</td>
                            <td class=" w-1/6">{{$value['qty']}}</td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    @endif
</div>
