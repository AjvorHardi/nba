<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    @if($teams)
        @foreach ($teams as $team)
            <a href="/teams/{{$team->id}}"> 
                {{ $team->name }}<br>
            </a>
        @endforeach
    @endif
</body>
</html>