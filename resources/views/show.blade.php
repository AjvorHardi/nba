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

    <h4>Komentari</h4>
    <form method="POST" action="{{ route('team-comments', ['id' => $team->id]) }}">

        @csrf

        <div class="form-group">
            <label for="content"></label>
            <textarea type="email" class="form-control" id="content" name="content"></textarea>
        </div>

        <div class="form-group">
            <button type="submit" class="btn btn-primary">Submit</button>
        </div>

    </form>

    @if(count($team->comments))
        @foreach($team->comments as $comment)
            <p><em> {{ $comment->user->name }}</em></p>
            <p> {{ $comment->content }} </p>
        @endforeach
    @endif
</body>
</html>