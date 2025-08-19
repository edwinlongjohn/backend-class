<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>
        hi welcome to my first laravel app
        my name is {{ $name ?? 'Guest' }}
        my birth month is {{$date}} {{ $month ?? "unknown"}}
    </h1>
     <h1>
        
        hi welcome to my first laravel app
        my favorite team is {{ $favoriteClub}}
        my favorite player is {{$favoritePlayer}} and my team jersey color is {{ $month ?? "unknown"}}
    </h1>
</body>
</html>
