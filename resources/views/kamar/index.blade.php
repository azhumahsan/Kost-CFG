@extends('layouts.template')

@section('content')
<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800 mt-4">Data Kamar</h1>
</div>

<div class="container mt-4 mb-5">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-body">
                    <form action="{{route('kamar.store')}}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="row">
                            <div class="col-md-6">
                                <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text">Gedung</span>
                                    </div>
                                    <select class="custom-select" name="gedung">
                                        <option selected>Choose...</option>
                                        <option value="a">A</option>
                                        <option value="b">B</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text">Lantai</span>
                                    </div>
                                    <select class="custom-select" name="lantai">
                                        <option selected>Choose...</option>
                                        <option value="1">1</option>
                                        <option value="2">2</option>
                                        <option value="3">3</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text">No Kamar</span>
                                    </div>
                                    <input type="text" name="nomor_kamar" class="form-control" placeholder="No Kamar">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="input-group mb-3">
                                    <input type="file" name="photo1" class="form-control" id="inputGroupFile1">
                                    <label class="input-group-text" for="inputGroupFile1">Photo 1</label>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="input-group mb-3">
                                    <input type="file" name="photo2" class="form-control" id="inputGroupFile2">
                                    <label class="input-group-text" for="inputGroupFile2">Photo 2</label>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="input-group mb-3">
                                    <input type="file" name="photo3" class="form-control" id="inputGroupFile3">
                                    <label class="input-group-text" for="inputGroupFile3">Photo 3</label>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text">Kondisi</span>
                                    </div>
                                    <select class="custom-select" name="kondisi">
                                        <option selected>Choose...</option>
                                        <option value="kosong">Kosong</option>
                                        <option value="penuh">Penuh</option>
                                        <option value="rusak">Rusak</option>
                                    </select>
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
                            <div class="col-md-12">
                                <div class="input-group mb-3">
                                    <textarea class="form-control" placeholder="Spesifikasi" name="spesifikasi"
                                        id="spesifikasi"></textarea>
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
            <div class="card mt-4">
                <div class="card-header">Data Kamar</div>

                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-strip" id="myTable">
                            <thead class="col-md-12">
                                <th class="col-md-4">Nomor Kamar</th>
                                <th class="col-md-4">Kondisi</th>
                                <th class="col-md-4">Pilihan</th>
                            </thead>
                            <tbody>

                                @foreach($kamar as $row)
                                <tr>
                                    <td>{{$row->nomor_kamar}}</td>
                                    <td>
                                        @if($row->kondisi == 'kosong')
                                        <span class="badge badge-success">Kosong</span>
                                        @elseif($row->kondisi == 'penuh')
                                        <span class="badge badge-danger">Penuh</span>
                                        @elseif($row->kondisi == 'rusak')
                                        <span class="badge badge-secondary">Rusak</span>
                                        @endif
                                    </td>
                                    <td>
                                        <form action="{{route('kamar.destroy',$row->id)}}" method="post">
                                            @csrf
                                            {{method_field('DELETE')}}
                                            <button type="submit" class="btn btn-danger"
                                                onclick="return confirm('Apakah anda akan menghapus kamar {{$row->nomor_kamar}} ?');">Hapus</button>
                                            <a href="{{route('kamar.edit',$row->id)}}"
                                                class="btn btn-warning">Edit</a>
                                            <a href="{{route('kamar.show',$row->id)}}"
                                                class="btn btn-success">Detail</a>
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
    </div>
</div>
@endsection
