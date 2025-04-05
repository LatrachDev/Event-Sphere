<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>home</h1>

    @auth
    <h2>Hello {{ Auth::user()->name }}</h2>
    <form action="{{ route('logout') }}" method="POST">
        @csrf
        <button>logout</button>
    </form>
    @endauth
</body>
</html>