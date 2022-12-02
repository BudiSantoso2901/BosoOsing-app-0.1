@extends('_layouts.app')

@section('content')
<table>
    <thead>
        <tr>
            {{-- <th>Nomor</th> --}}
            <th>Nama</th>
            <th>NIK</th>
            <th>Alamat</th>
            <th>Gambar</th>
        </tr>
    </thead>
    <tbody>
    @foreach ($allWisata as $key => $wisata)
        <tr>
        {{-- <td>{{ $key+1 }}</td> --}}
            <td>{{ $wisata->nama_wisata }}</td>
            <td>{{ $wisata->baseline }}</td>
            <td><div class="mapouter"><div class="gmap_canvas"><iframe class="gmap_iframe" width="100%" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com/maps?width=600&amp;height=400&amp;hl=en&amp;q=pantai boom&amp;t=&amp;z=14&amp;ie=UTF8&amp;iwloc=B&amp;output=embed"></iframe><a href="https://piratebay-proxys.com/">Piratebay</a></div><style>.mapouter{position:relative;text-align:right;width:100%;height:400px;}.gmap_canvas {overflow:hidden;background:none!important;width:100%;height:400px;}.gmap_iframe {height:400px!important;}</style></div></td>
            <td><img src="{{ asset('assets/images') }}/{{ $wisata->gambar }}" alt="{{ $wisata->gambar }}"></td>
            <td>
                <a href="{{ route('more.wisata', $wisata-> id) }}" class="btn btn-info">more</a>
            </td>
        </tr>    
    @endforeach
    </tbody>
</table>
@endsection