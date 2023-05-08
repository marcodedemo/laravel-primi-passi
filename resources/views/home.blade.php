<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laravel</title>
</head>
<body>

    <h1>Hello world</h1>

    <hr>

    <h2>Di seguito qualche colore:</h2>

    <ul>

        @foreach ($colori as $colore)
        <li>{{ $colore }}</li>
        @endforeach
        
    </ul>


    <ul>
        @foreach ($links as $link)
        <li><a href="{{route($link)}}">{{$link}}</a></li>
        @endforeach
    </ul>
    
</body>
</html>