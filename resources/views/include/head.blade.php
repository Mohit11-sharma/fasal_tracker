<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>@yield('title', 'फसल ट्रैकर - अपनी फसल बिक्री का स्लॉट चुनें')</title>
    <meta name="description" content="@yield('description', 'फसल ट्रैकर एक स्मार्ट प्लेटफ़ॉर्म है जो किसानों को फसल बिक्री के स्लॉट बुक करने, शेड्यूल अपडेट प्राप्त करने और अपनी फसल बिक्री की स्थिति ट्रैक करने में मदद करता है।')">

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