<!DOCTYPE html>
<html lang="en">
<head>
    @include('include.head')
</head>
<body>
    <main>
        @include('include.header.header')
        @yield('content')
    </main>
</body>
</html>