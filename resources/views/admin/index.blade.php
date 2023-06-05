@extends('layouts.template')

@section('content')
<div class="side mb-4">
    <!-- <input type="checkbox" id="check">
    <div class="navbar">
        <label for="check">
            <i class="bi bi-filter-left" id="show"></i>
        </label>
    </div> --> 
    <h1 class="h3 mb-0 text-gray-800 mt-4">Dashboard</h1>
</div>

<div class="col-lg-12">
    <div class="card mt-4">
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-strip" id="myTable">
                    <thead class="col-md-12">
                        <th class="col-md-4">Nama</th>
                        <th class="col-md-4">No Kamar</th>
                        <th class="col-md-4">Pilihan</th>
                    </thead>
                    <tbody>

                        @foreach($booking as $row)
                        <tr>
                            <td>{{$row->nama}}</td>
                            <td>{{$row->admin->nomor_kamar}}</td>
                            <td>
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
</div>
@endsection
