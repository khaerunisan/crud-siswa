<DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
   @yield('tittle')
    <link rel="stylesheet" a href="{{asset('assets/style.css')}}">
    @yield('cssinternal')
</head>
        <body>
            <div>
                <a href="/">Menu Siswa</a>
                |
                <a href="/clas">Menu Kelas</a>
            </div>
            <hr>
            @yield('content')
        </body>
</html>