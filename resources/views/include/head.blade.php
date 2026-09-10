<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>@yield('title', 'Fasal Tracker - Choose Your Procurement Slot')</title>
    <meta name="description" content="@yield('description', 'Fasal Tracker is a smart platform that helps farmers book procurement slots, get schedule updates, and track their procurement status.')">

    {{-- ALL THE CSS LINKS --}}
    {{-- <link href="{{ asset('images/favicon.ico') }}" rel="icon" /> --}}
    <link href="{{ asset('libs/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet" />
    {{-- <link href="{{ asset('libs/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet" />
    <link href="{{ asset('libs/apexcharts/apexcharts.css') }}" rel="stylesheet" />
    <link href="{{ asset('libs/flatpickr/flatpickr.min.css') }}" rel="stylesheet" /> --}}
    <link href="{{ asset('libs/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet" />
    <link href="{{ asset('css/main.css') }}" rel="stylesheet" />
</head>

<body>
    {{-- ALL THE JS LINKS --}}
    {{-- <script src="{{ asset('libs/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('libs/apexcharts/apexcharts.min.js') }}"></script>
    <script src="{{ asset('libs/flatpickr/flatpickr.min.js') }}"></script> --}}
    <script src={{ asset('js/dashboard.js') }}></script>
</body>
