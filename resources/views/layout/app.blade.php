<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
</head>
<body>
    <div class="navbar">
        <ul class="list-links">
            <li><a href="{{ route('items') }}">Items</a></li>
            <li><a href="{{ route('categories') }}">Categories</a></li>
            <li><a href="{{ route('customers') }}">Customers</a></li>
            <li><a href="{{ route('statuses') }}">Statuses</a></li>
        </ul>
    </div>
    <div class="content">@yield('content')</div>
</body>
</html>