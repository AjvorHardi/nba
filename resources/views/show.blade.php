<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    {{ $team->name }}<br>
    {{ $team->email }}<br>
    {{ $team->address }}<br>
    {{ $team->city }}<br>
    
    <h4>Roster</h4>
    @if($team->players)
        @foreach($team->players as $player)
            <a href="/players/{{$player->id}}">{{ $player->first_name }} {{ $player->last_name}}</a> <br>
        @endforeach
    @endif


    @if(count($team->comments))
        @foreach($team->comments as $comment)
            <p> {{ $comment->content }} </p>
        @endforeach
    @endif
</body>
</html>