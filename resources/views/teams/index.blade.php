<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Teams</title>
</head>
<body>
    @foreach($teams as $team)
    <p><a href="/teams/{{ $team->id }}">{{ $team->name }}<a><p>
    @endforeach
</body>
</html>