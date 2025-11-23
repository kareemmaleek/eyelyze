<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <title>Dashboard</title>
</head>

<body class="bg-gray-800 text-gray-400">
    <h1 class="text-6xl font-bold">Welcome to dashboard</h1>
    <h3>Hello {{ Auth::user()->name }}</h3>

    @if (Auth::user()->role === 1)
        <p>INI KHUSUS ADMIn</p>
    @endif


    <form action="{{ route('proceed_logout') }}" method="POST">
        @csrf
        <button type="submit">Logout</button>
    </form>
</body>

</html>
