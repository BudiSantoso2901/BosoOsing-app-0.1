@extends('_layouts.app')
@section('content')

    <body>
        <h1>kuliner</h1>
                <thead>
                    <tr>
                        {{-- <th>Nomor</th> --}}
                        <th>Nama</th>
                        <th>baseline</th>
                        <th>Alamat</th>
                        <th>Gambar</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($allKuliner as $key => $kuliner)
                        <tr>
                            {{-- <td>{{ $key+1 }}</td> --}}
                            <td>{{ $kuliner->nama_kuliner }}</td>
                            <td>{{ $kuliner->baseline }}</td>
                            <td>{{ $kuliner->lokasi }}</td>
                            <td>{{ $kuliner->gambar }}</td>
                            <td>
                                <a href="{{ route('more.kuliner', $kuliner->id) }}" class="btn btn-info">more</a>
                               
                            </td>
                        </tr>
                    @endforeach
                </tbody>
           
    </body>
@endsection
