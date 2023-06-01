@extends('layouts.template')

@section('content')
<div class="container mt-4 mb-5">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Data Customer</div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-strip" id="myTable">
                            <thead class="col-md-12">
                                <th class="col-md-3">Nama Customer</th>
                                <th class="col-md-3">Email</th>
                                <th class="col-md-3">Pilihan</th>
                            </thead>
                            <tbody>

                                @foreach($customer as $row)
                                <tr>
                                    <td>{{$row->user->name}}</td>
                                    <td>{{$row->user->email}}</td>
                                    <td>
                                        <a href="{{route('customer.show',$row->id)}}" class="btn btn-success">Detail</a>
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
</div>@endsection