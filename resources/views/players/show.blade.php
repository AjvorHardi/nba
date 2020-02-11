<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    {{ $player->first_name }} {{ $player->last_name }}<br>
    {{ $player->email }}<br>
    <a href="/teams/{{$team->id}}">{{ $team->name }}</a><br>

</body>
</html>