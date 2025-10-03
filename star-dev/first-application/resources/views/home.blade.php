<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>welcome to stardev class</h1>
    <h3>names of student</h3>
    <ul>
        @foreach ($names as $name)
             <li>{{$name}}</li>
        @endforeach

    </ul>
    <p>

    </p>
</body>
</html>
