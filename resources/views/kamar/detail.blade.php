@extends('layouts.template')

@section('content')
<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800 mt-4">Detail Data</h1>
</div>

<div class="mt-4 mr-3">
    <div class="card" enctype="multipart/form-data">
        <div class="card-header">
            Detail Kamar
        </div>
        <div class="card-body">
            <table class="table">
                <tr>
                    <td>
                        <img class="img-thumbnail" src="{{ asset('/storage/images/kamar/'.$kamar->foto) }}"
                            width="400px" />
                    </td>
                </tr>
                <tr>
                    <th>Gedung</th>
                    <td>{{$kamar->gedung}}</td>
                </tr>
                <tr>
                    <th>Lantai</th>
                    <td>{{$kamar->lantai}}</td>
                </tr>
                <tr>
                    <th>Nomor kamar</th>
                    <td>{{$kamar->nomor_kamar}}</td>
                </tr>
                <tr>
                    <th>Harga Kamar</th>
                    <td>{{$kamar->harga}}</td>
                </tr>
                <tr>
                    <th>Spesifikasi</th>
                    <td>{!!$kamar->spesifikasi!!}</td>
                </tr>
            </table>
        </div>
    </div>
</div>
@endsection
