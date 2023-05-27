@extends('layouts.template')

@section('content')
<div class="container mt-4">
    <div class="main_container">
        <div class="col-md-12">
            <div class="mt-4 mr-3">
                <div class="card">
                    <div class="card-header">
                        Edit Data Kamar
                    </div>
                    <div class="card-body">
                        <form action="{{route('kamar.update', $kamar->id)}}" method="post"
                            enctype="multipart/form-data">
                            @csrf
                            {{method_field('PUT')}}
                            <div class="row">
                                <div class="col-md-2">
                                    <div class="input-group mb-3">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text">Gedung</span>
                                        </div>
                                        <select class="form-select" name="gedung">
                                            <option selected>{{$kamar->gedung}}</option>
                                            <option value="a">A</option>
                                            <option value="b">B</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-2">
                                    <div class="input-group mb-3">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text">Lantai</span>
                                        </div>
                                        <input type="text" name="lantai" value="{{$kamar->lantai}}"
                                            class="form-control" placeholder="Lantai">
                                    </div>
                                </div>
                                <div class="col-md-2">
                                    <div class="input-group mb-3">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text">No Kamar</span>
                                        </div>
                                        <input type="text" name="nomor_kamar" value="{{$kamar->nomor_kamar}}"
                                            class="form-control" placeholder="Nomor Kamar">
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="input-group mb-3">
                                        <input type="file" name="foto" value="{{$kamar->foto}}"
                                            class="form-control" id="inputGroupFile0">
                                        <label class="input-group-text" for="inputGroupFile02">
                                            {{$kamar->foto}}
                                        </label>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="input-group mb-3">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text">Harga</span>
                                        </div>
                                        <input type="text" name="harga" value="{{$kamar->harga}}"
                                            class="form-control" placeholder="Harga">
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="input-group mb-3">
                                        <textarea class="form-control" name="spesifikasi" id="spesifikasi">
                                        {!! $kamar->spesifikasi !!}
                                    </textarea>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <button type="submit" class="btn btn-success">Edit Kamar</button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
