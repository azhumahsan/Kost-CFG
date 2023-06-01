@extends('layouts.template')

@section('content')
<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800 mt-4">Data Booking</h1>
</div>

<div class="container mt-4 mb-5">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-body">
                    <form action="{{route('booking.store')}}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="row"> 
                            <div class="col-md-6">
                                <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text">Nama</span>
                                    </div>
                                    <input type="text" name="nama" class="form-control" placeholder="Nama">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text">No HP</span>
                                    </div>
                                    <input type="text" name="no_hp" class="form-control" placeholder="No HP">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text">No Kamar</span>
                                    </div>
                                    <select class="custom-select" name="id_kamar">
                                        <option selected>Choose...</option>
                                        @foreach($kamar as $row)
                                        <option value="{{$row->id}}">{{$row->nomor_kamar}}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text">Start Date</span>
                                    </div>
                                    <input type="date" name="start_date" class="form-control" placeholder="Start Date">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text">End Date</span>
                                    </div>
                                    <input type="date" name="end_date" class="form-control" placeholder="End Date">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text">Harga</span>
                                    </div>
                                    <input type="text" name="harga" class="form-control" placeholder="Harga">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="input-group mb-3">
                                    <input type="file" name="bukti" class="form-control" id="inputGroupFile0">
                                    <label class="input-group-text" for="inputGroupFile02">Foto Bukti</label>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <button type="submit" class="btn btn-success">Tambah Data</button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
