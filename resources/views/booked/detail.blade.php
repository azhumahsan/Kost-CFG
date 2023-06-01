@extends('layouts.template')

@section('content')
<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800 mt-4">Detail Data</h1>
</div>

<div class="mt-4 mr-3 mb-5">
    <div class="card" enctype="multipart/form-data">
        <div class="card-header">
            Detail Booking
        </div>
        <div class="card-body">
            <table class="table">
                <tr>
                    <td>
                        <img class="img-thumbnail" src="{{ asset('/storage/images/booked/'.$booking->bukti) }}"
                            width="400px" />
                    </td>
                </tr>
                <tr>
                    <th>Nama</th>
                    <td>{{$booking->nama}}</td>
                </tr>
                <tr>
                    <th>No HP</th>
                    <td>{{$booking->no_hp}}</td>
                </tr>
                <tr>
                    <th>Gedung</th>
                    <td>{{$booking->admin->gedung}}</td>
                </tr>
                <tr>
                    <th>Lantai</th>
                    <td>{{$booking->admin->lantai}}</td>
                </tr>
                <tr>
                    <th>Nomor Kamar</th>
                    <td>{{$booking->admin->nomor_kamar}}</td>
                </tr>
                <tr>
                    <th>Start Date</th>
                    <td>{{$booking->start_date}}</td>
                </tr>
                <tr>
                    <th>End Date</th>
                    <td>{{$booking->end_date}}</td>
                </tr>
                <tr>
                    <th>Harga</th>
                    <td>{{$booking->harga}}</td>
                </tr>
            </table>
        </div>
    </div>
</div>
@endsection
