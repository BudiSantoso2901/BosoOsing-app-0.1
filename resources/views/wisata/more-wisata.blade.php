@extends('_layouts.app')

@section('content')
<table>
    <thead>
        <tr>
            {{-- <th>Nomor</th> --}}
            <th>Nama</th>
            <th>Meow</th>
            <th>Lokasi</th>
            <th>Gambar</th>
            <th>Artikel</th>
        </tr>
    </thead>
    <tbody>
        <a href="{{ route('wisata') }}" class="btn btn-info">Kembali</a>
    @foreach ($allWisata as $key => $wisata)
        <tr>
        {{-- <td>{{ $key+1 }}</td> --}}
            <td>{{ $wisata->nama_wisata }}</td>
            <td>{{ $wisata->baseline }}</td>
            <td><iframe src="{{ $wisata->lokasi }}" frameborder="10"></iframe></td>
            <td><img src="{{ asset('assets/images') }}/{{ $wisata->gambar }}" class="img-thumbnail" alt="{{ $wisata->gambar }}">
            </td>  
              
            <td>{{ $wisata->artikel }}</td>
        </tr>    
    @endforeach
    </tbody>
</table>    
@endsection