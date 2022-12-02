@extends('_layouts.app')

@section('content')
    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Budaya Banyuwangi</title>
    </head>

    <body>
        <h3>Budaya Banyuwangi</h3>
        @foreach ($allbdy as $key => $budaya)
            <tr>
                <td>Nama Budaya : {{ $budaya->namabudaya }}</td>
                <br>
                <td><a href="{{ route('more.budaya', $budaya->id) }}">Read More</a></td>
                <br>
            </tr>
        @endforeach
    </body>

    </html>
@endsection
