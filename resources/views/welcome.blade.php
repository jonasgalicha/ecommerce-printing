<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
        <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.24/css/jquery.dataTables.min.css">
        <script src="//cdn.datatables.net/1.10.24/js/jquery.dataTables.min.js"></script>
        <script src="https://kit.fontawesome.com/5e81b262d9.js" crossorigin="anonymous"></script>
        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Styles -->
        @vite('resources/sass/app.scss')

        <!-- Scripts -->
        @vite('resources/js/app.js')
    </head>
<body>

    <div class="container-fluid">
        <div class="row">
            <div class="col-8">
                <div class="text-end mt-3" style="margin-right: 8%">
                    <h1 style="font-weight: 800">7J Sign and Printing Services</h1>
                </div>
            </div>
            <div class="col-4">
                <div class="text-end mt-4">
                    <a href="{{ route('register') }}" class=""><strong class="h4 me-4" style="font-weight: 800">Register</strong></a>
                    <a href="{{ route('login') }}" class=""><strong class="h4" style="font-weight: 800">Login</strong></a>
                </div>
            </div>
        </div>
        <div class="row" style="margin-top: 10%">
            <div class="col-1"></div>
            <div class="col-6">
                <h1 style="font-size: 90px; font-weight: 700; color: rgb(3, 3, 124)">About Us</h1>
                <p>
                    {{ $aboutUs->text_header }}
                </p>
                <h1 style="color: rgb(3, 3, 124); font-weight: 600" class="mt-3">{{ $aboutUs->header }}</h1>
                <p>
                    {{ $aboutUs->second_text }}
                </p>
            </div>
            <div class="col-5">
                <img src="{{ asset('storage/' . $aboutUs->image) }}" alt="" height="700" width="850">
            </div>
        </div>
    </div>

</body>
</html>
