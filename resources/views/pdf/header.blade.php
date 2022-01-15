<!DOCTYPE html>
<html lang="en">
<header>
    @if(app()->environment('production'))
        <link href="{{ public_path('css/app.css') }}" rel="stylesheet">
        <link href="{{ public_path('css/fontawesome/all.css') }}" rel="styleshee
    @else
            <link href="{{ asset('css/app.css') }}" rel="stylesheet">
        <link href="{{ asset('css/fontawesome/all.css') }}" rel="stylesheet">
    @endif
    <style>
        tr {
            page-break-inside: avoid;
        }

        th {
            border-color: white;
        }

        td {
            border-color: white;
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

    </style>
</header>
<body>

<div>
    <div class="header_row">
        <img class="header_row pt-2 pb-2 w-1/4"  src="{{ asset('carters_logo/carters-takeoff-logo.png') }}"
             alt="test">
        <div class="header_row">
            <div>
                <div class="font-bold text-xl text-right">Material Listing</div>
                <div class="font-bold text-base text-right">{{$job?$job['client_ref']:''}}</div>
            </div>
        </div>
    </div>
    <div style="height: 15px"></div>
</div>
</body>
</html>
