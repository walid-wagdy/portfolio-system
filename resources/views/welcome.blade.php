<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome - Portfolio System</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body>
    <div class="container">
        <h1>Welcome to Portfolio System</h1>
        <p>A comprehensive portfolio management solution.</p>
        @if(auth()->check())
            <a href="{{ route('dashboard') }}">Dashboard</a>
        @else
            <a href="{{ route('login') }}">Login</a>
        @endif
    </div>
</body>
</html>