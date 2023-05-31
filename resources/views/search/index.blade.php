@extends('layouts.template')

@section('content')
<div class="col-md-12 mt-4 mb-3">
    <form action="/search" method="get">
        <div class="input-group">
            <input type="text" name="keyword" value="{{Request::get('keyword')}}"
                class="form-control" placeholder="Cari apa..?">
            <div class="input-group-append">
                <button class="btn btn-primary" type="submit">Cari</button>
            </div>
        </div>
    </form>
</div>
<div class="col-md-12">
    @if(Request::get('keyword'))
    <div class="card">
        <div class="card-body">
            <div class="alert alert-success">
                Hasil Pencarian dari {{Request::get('keyword')}}
            </div>
            <div class="table-responsive">
                <table class="table table-hover">
                    <thead>
                        <th>Nama</th>
                        <th>Nomor Kamar</th>
                        <th>Pilihan</th>
                    </thead>
                    <tbody>
                        @foreach($booking as $row)
                        <tr>
                            <td class="col-md-4">{{$row->nama}}</td>
                            <td class="col-md-4">{{$row->nomor_kamar}}</td>
                            <td class="col-md-4">
                                <form action="{{route('booking.destroy',$row->id)}}" method="post">
                                    @csrf
                                    {{method_field('DELETE')}}
                                    <button type="submit" class="btn btn-danger"
                                        onclick="return confirm('Apakah anda akan menghapus booking {{$row->nomor_booking}} ?');">Hapus</button>
                                    <a href="{{route('booking.edit',$row->id)}}" class="btn btn-warning">Edit</a>
                                    <a href="{{route('booking.show',$row->id)}}" class="btn btn-success">Detail</a>
                                </form>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    @endif
</div>
@endsection
