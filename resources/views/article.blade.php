<!-- @extends('layouts.app') -->

<!-- @section('content') -->

<!-- @endsection -->
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Web @yield('title')</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>

<body>
    <div class="container mt-5">
        <h1>{{ __('article.title') }}</h1>
        <p>{{ __('article.content') }}</p>
        <img src="https://th.bing.com/th?id=OIP.zvTH42gSclJtNydj25IWbAHaE7&w=306&h=203&c=8&rs=1&qlt=90&o=6&pid=3.1&rm=2" class="img-thumbnail" alt="...">
    </div>

    <!-- Bootstrap JS -->
    <script src="{{ asset('js/bootstrap.bundle.min.js') }}"></script>
    <!-- ... -->
</body>

</html>