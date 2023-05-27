@extends('layouts.template')

@section('content')
<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800 mt-4">Dashboard</h1>
</div>

<div class="col-lg-12">
    <div class="card mb-4">
        <div class="table-responsive p-3">
            <table class="table align-items-center table-flush table-hover" id="dataTableHover">
                <thead class="thead-light">
                    <tr>
                        <th>Nama</th>
                        <th>Nomor Kamar</th>
                        <th>Tingkat</th>
                        <th>Gedung</th>
                        <th>Start date</th>
                        <th>End date</th>
                        <th>Pembayaran</th>
                    </tr>
                </thead>
                <tfoot>
                    <tr>
                        <th>Nama</th>
                        <th>Nomor Kamar</th>
                        <th>Tingkat</th>
                        <th>Gedung</th>
                        <th>Start date</th>
                        <th>End date</th>
                        <th>Pembayaran</th>
                    </tr>
                </tfoot>
                <tbody>
                    <tr>
                        <td>Doni Azizi</td>
                        <td>35</td>
                        <td>1</td>
                        <td>A</td>
                        <td>2011/04/24</td>
                        <td>2011/04/25</td>
                        <td>-3,200,800</td>
                    </tr>
                    <tr>
                        <td>Pablo Emilio Escobar Gaviria</td>
                        <td>57</td>
                        <td>3</td>
                        <td>B</td>
                        <td>2011/04/24</td>
                        <td>2011/04/25</td>
                        <td>98,000,000,200,800</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection
