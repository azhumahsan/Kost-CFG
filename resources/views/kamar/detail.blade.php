<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@200;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css">

    <!-- Font Awesome -->
    <link href="{{asset('/vendors/font-awesome/css/font-awesome.min.css')}}" rel="stylesheet">

    <link href="//netdna.bootstrapcdn.com/twitter-bootstrap/2.3.2/css/bootstrap-combined.no-icons.min.css"
        rel="stylesheet">
    <link href="//netdna.bootstrapcdn.com/font-awesome/3.2.1/css/font-awesome.css" rel="stylesheet">

    <!-- Custom Theme Style -->
    <link href="{{asset('/vendors/custom.min.css')}}" rel="stylesheet">

    <!-- Styles -->
    <style>
        html,
        body {
            background-color: #fff;
            color: #636b6f;
            font-weight: 200;
            height: 100vh;
            margin: 0;
        }

        .full-height {
            height: 100vh;
        }

        .flex-center {
            align-items: center;
            display: flex;
            justify-content: center;
        }

        .position-ref {
            position: relative;
        }

        .top-right {
            position: absolute;
            right: 10px;
            top: 18px;
        }

        .content {
            text-align: center;
        }

        .title {
            font-size: 84px;
        }

        .links>a {
            color: #636b6f;
            padding: 0 25px;
            font-size: 13px;
            font-weight: 600;
            letter-spacing: .1rem;
            text-decoration: none;
            text-transform: uppercase;
        }

        .m-b-md {
            margin-bottom: 30px;
        }

        .ppee {
            margin-bottom: 50vh;
        }

        .pk {
            height: 100vh;
            position: fixed;
            width: 23vw;
            left: 0;
        }

    </style>
</head>

<body>
    <div class="container body">
        <div class="main_container">
            <div class="col-md-12">
                <div class="mt-4 mr-3">
                    <div class="card" enctype="multipart/form-data">
                        <div class="card-header">
                            Detail Kamar
                        </div>
                        <div class="card-body">
                            <table class="table">
                                <tr>
                                    <td>
                                        <img class="img-thumbnail"
                                            src="{{ asset('/storage/images/kamar/'.$kamar->foto) }}" width="400px" />
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
            </div>
        </div>
    </div>
</body>

</html>
