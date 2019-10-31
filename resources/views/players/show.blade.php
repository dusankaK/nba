<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Players</title>
</head>
<body>

    <div>
        <h3>Player</h3>
        <p>Name: {{ $player->first_name }} {{ $player->last_name }}</p>
        <p>Player email: {{ $player->email}} </p>
        <p>Team: <a href="/teams/{{ $player->team->id }}"> {{ $player->team->name }}</a></p>
    </div>
    
</body>
</html>