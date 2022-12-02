@extends('_layouts.app')
@section('content')

    <body>
        <h1>kuliner</h1>
        <div class="box-body">
            <div class="table-responsive">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
        <a href="{{ route('backend.kuliner.add') }}" style="float: right;" type="button" class="btn btn-primary mb-5">Add kuliner</a>
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Nama</th>
                        <th>baseline</th>
                        <th>Alamat</th>
                        <th>Outline</th>
                        <th>Gambar</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($allKuliner as $key => $kuliner)
                        <tr>
                            <td>{{ $key+1 }}</td>
                            <td>{{ $kuliner->nama_kuliner }}</td>
                            <td>{{ $kuliner->outline }}</td>
                            <td>{{ $kuliner->lokasi }}</td>
                            <td>{{ $kuliner->outline }}</td>
                            {{-- <td><img src="{{ asset('assets/images') }}/{{ $kuliner->gambar }}" class="img-thumbnail" alt="{{ $kuliner->gambar }}"></td> --}}
                            <td><img src="{{ asset('assets/images') }}/{{ $kuliner->gambar }}" width="100" height="100" alt="{{ $kuliner->gambar }}"></td>
                            <td>
                                <a href="{{ route('kuliners.Edit', $kuliner-> id) }}" class="btn btn-info">Edit</a>
                                <a href="{{ route('kuliners.delete', $kuliner-> id) }}" class="btn btn-info">Hapus</a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </div>
        </div>
    </body>
@endsection
