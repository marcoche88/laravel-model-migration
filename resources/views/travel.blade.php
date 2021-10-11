<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Viaggi</title>
</head>
<body>
    <h1>Viaggi</h1>
    @include('includes.navbar')
    @forelse ($travels as $travel)
        <div>Destinazione: {{ $travel->destination }}</div>
        <div>Prezzo: {{ $travel->price }}</div>
        <div>Durata: {{ $travel->duration }} giorni</div>
        <hr>
    @empty
        <div>Non ci sono viaggi</div>
    @endforelse
</body>
</html>