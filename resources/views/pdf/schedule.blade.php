<!DOCTYPE HTML>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <title>{{$job['client_ref'].' '.$job['job_name']}}</title>
    @if(app()->environment('production'))
        <link href="{{ public_path('css/app.css') }}" rel="stylesheet">
        <link href="{{ public_path('css/fontawesome/all.css') }}" rel="stylesheet">
    @else
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
        <link href="{{ asset('css/fontawesome/all.css') }}" rel="stylesheet">
    @endif
    <style>
        table{
            page-break-inside:auto
        }
        tr {
            page-break-inside:avoid;
        }
        thead {
            display:table-header-group;
            border-spacing:10px;
        }

        th {
            border-color: white;
        }

        td {
            border-color: white;
        }

        .page-break {
            page-break-before: always;
        }

        .header_row {
            display: -webkit-box; /* wkhtmltopdf uses this one */
            display: flex;
            -webkit-box-pack: justify; /* wkhtmltopdf uses this one */
            justify-content: space-between;
        }

        .header_col {
            -webkit-box-flex: 1;
            -webkit-flex: 1;
            flex: 1;
        }

        .header_row > header_col:last-child {
            margin-right: 0;
        }

         .border-left{
             border-left: 1px solid black;
             border-top: 1px solid black;
             border-bottom: 1px solid black;
         }
        .border-center{
            border-top: 1px solid black;
            border-bottom: 1px solid black;
        }
        .border-right{
            border-right: 1px solid black;
            border-top: 1px solid black;
            border-bottom: 1px solid black;
        }
    </style>

</head>
<body>
<div class="full">
    <div>
        <div class="mt-10 header_row justify-between ">
            <div class="text-base w-1/4">
                <div class="header_row">
                    <p class="font-bold w-1/2">Client </p>
                    <p class="">{{$job?ucwords($job['client_name']):''}}</p>
                </div>
                <div class="header_row">
                    <p class="font-bold w-1/2">Address </p>
                    <p class=""></p>
                </div>
            </div>
            <div class="font-bold text-xl text-right">{{$job?ucwords($job['job_name']):''}}</div>
        </div>
        <div class="mt- font-bold text-base text-right mr-4">Ref<span
                class="ml-5 font-medium">{{$job?$job['client_ref']:''}}</span></div>
    </div>
    <div class="mt-3">
        <div class="mr-4">
            <table class="w-full">
                <thead >
                <tr style="border-bottom: 2px solid black">
                    <th class="w-6"></th>
                    <th class="text-left w-1/4 pl-2 ">SKU Number</th>
                    <th class="text-left">Description</th>
                    <th class=" w-1/8">Unit</th>
                    <th class=" w-1/8">Qty</th>
                </tr>
                <tr style="border-bottom:2px solid white">
                    <td style="height: 12px"></td>
                </tr>
                </thead>
                <tbody>
                @foreach($takeoff as $key=>$part)
                    @if($key!='Foundation')
                    <tr>
                        <td style="height: 12px"></td>
                    </tr>
                    @endif
                    <tr class="border ">
                        <td colspan="5" class=" mt-5 py-1 px-2 font-bold bg-my-grey">{{$key}}</td>
                    </tr>
                    @if($key=='Foundation')
                        @foreach($part as $key=>$foundation)
                            @if(isset($foundation['sku']))
                                <tr class="text-center">
                                    <td></td>
                                    <td class="text-left w-1/4 pl-2 border-left ">{{$foundation['sku']}}</td>
                                    <td class="text-left border-center w-1/2">{{$key.' '.(isset($foundation['usage'])?strtoupper($foundation['usage']):'')}}</td>
                                    <td class="w-1/6 border-center">{{strtoupper($foundation['unit'])}}</td>
                                    <td class="w-1/6 border-right">{{$foundation['qty']}}</td>
                                </tr>
                            @else
                                @foreach($foundation as $value)
                                    <tr class="text-center">
                                        <td></td>
                                        <td class="text-left w-1/6 pl-2 border-left">{{$value['sku']}}</td>
                                        <td class="text-left border-center w-1/2">{{$key.' '.(isset($value['usage'])?strtoupper($value['usage']):'')}}</td>
                                        <td class="w-1/6 border-center">{{strtoupper($value['unit'])}}</td>
                                        <td class="w-1/6 border-right">{{$value['qty']}}</td>
                                    </tr>
                                @endforeach
                            @endif
                        @endforeach
                    @endif

                    @if($key=='PoleShed Ext Framing')
                        @foreach($part as $framings)
                            @foreach($framings as $usage=>$framing)
                                @foreach($framing as $item=>$value)
                                    <tr class="text-center">
                                        <td></td>
                                        <td class="text-left w-1/6 pl-2 border-left">{{$value['sku']}}</td>
                                        <td class="text-left border-center w-1/2">{{$item}} {{strtoupper($usage)}}</td>
                                        <td class=" w-1/6 border-center">{{strtoupper($value['unit'])}}</td>
                                        <td class=" w-1/6 border-right">{{$value['qty']}}</td>
                                    </tr>
                                @endforeach
                            @endforeach
                        @endforeach
                    @endif

                    @if($key=='PoleShed Framing Hardware')
                        @foreach($part as $hardwares)
                            @foreach($hardwares as $item=>$value)
                                @if(isset($value['sku']))
                                    <tr class="text-center">
                                        <td></td>
                                        <td class="text-left w-1/6  pl-2 border-left">{{$value['sku']}}</td>
                                        <td class="text-left border-center w-1/2">{{$item.' '.(isset($value['usage'])?strtoupper($value['usage']):'')}}</td>
                                        <td class=" w-1/6 border-center">{{strtoupper($value['unit'])}}</td>
                                        <td class=" w-1/6 border-right">{{$value['qty']}}</td>
                                    </tr>
                                @else
                                    @foreach($value as $details)
                                        <tr class="text-center">
                                            <td></td>
                                            <td class="text-left w-1/6  pl-2 border-left">{{$details['sku']}}</td>
                                            <td class="text-left border-center w-1/2">{{$item.' '.(isset($details['usage'])?strtoupper($details['usage']):'')}}</td>
                                            <td class=" w-1/6 border-center">{{strtoupper($details['unit'])}}</td>
                                            <td class=" w-1/6 border-right">{{$details['qty']}}</td>
                                        </tr>
                                    @endforeach
                                @endif
                            @endforeach
                        @endforeach
                    @endif

                    @if($key=='PoleShed Cladding')
                        @foreach($part  as $key=>$value)
                        <tr class="text-center">
                            <td></td>
                            <td class="text-left w-1/6  pl-2 border-left">{{$value['sku']}}</td>
                            <td class="text-left border-center w-1/2">{{$key.' '.(isset($value['usage'])?strtoupper($value['usage']):'')}}</td>
                            <td class=" w-1/6 border-center">{{strtoupper($value['unit'])}}</td>
                            <td class=" w-1/6 border-right">{{$value['qty']}}</td>
                        </tr>
                        @endforeach
                    @endif

                    @if($key=='RAINWATER SYSTEM')
                        @foreach($part  as $key=>$value)
                        <tr class="text-center">
                            <td></td>
                            <td class="text-left w-1/6  pl-2 border-left">{{$value['sku']}}</td>
                            <td class="text-left border-center w-1/2">{{$key}}</td>
                            <td class=" w-1/6 border-center">{{strtoupper($value['unit'])}}</td>
                            <td class=" w-1/6 border-right">{{$value['qty']}}</td>
                        </tr>
                        @endforeach
                    @endif
                @endforeach
                </tbody>
            </table>
        </div>
    </div>

</div>
</body>
</html>
