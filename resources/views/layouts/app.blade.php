<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="{{ URL::to('images/logo.svg') }}" type="image/svg">
    <title>Student Management System</title>
    @vite('resources/css/app.css')
</head>
<body>
    @yield('content')

    <script src="https://kit.fontawesome.com/6ca5058040.js" crossorigin="anonymous"></script>
</body>
</html>