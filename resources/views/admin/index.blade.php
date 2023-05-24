<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link href="{{asset('images/logo.png')}}" rel="icon">
    <title>Admin Page</title>

    <link href="{{asset('css/fontawesome-free/css/all.min.css')}}" rel="stylesheet" type="text/css">
    <link href="{{asset('css/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet" type="text/css">
    <link href="{{asset('css/ruang-admin.min.css')}}" rel="stylesheet">
</head>

<body id="page-top">
    <div id="wrapper">
        <!-- Sidebar -->
        <ul class="navbar-nav sidebar sidebar-light accordion" id="accordionSidebar">
            <a class="sidebar-brand d-flex align-items-center justify-content-center text-white">
                <div class="sidebar-brand-icon">
                    <img src="{{asset('images/logo.png')}}">
                </div>
                <div class="sidebar-brand-text mx-3">Kost CFG</div>
            </a>
            <hr class="sidebar-divider my-0">
            <li class="nav-item active">
                <a class="nav-link" href="/home">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>Dashboard</span></a>
            </li>
            <hr class="sidebar-divider">
            <div class="sidebar-heading">
                Features
            </div>
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseBootstrap"
                    aria-expanded="true" aria-controls="collapseBootstrap">
                    <i class="far fa-fw fa-window-maximize"></i>
                    <span>Tambah Pengunjung</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseForm"
                    aria-expanded="true" aria-controls="collapseForm">
                    <i class="fab fa-fw fa-wpforms"></i>
                    <span>Kamar</span>
                </a>
            </li>
            <hr class="sidebar-divider">
            <li class="nav-item">
                <form action="/logout" method="POST">
                    @csrf
                    <button class="btn btn-danger ml-3">Logout</button>
                </form>
            </li>
        </ul>
        <!-- Sidebar -->
        <div id="content-wrapper" class="d-flex flex-column">
            <div id="content">

                <!-- Container Fluid-->
                <div class="container-fluid" id="container-wrapper">
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
                </div>
                <!---Container Fluid-->
            </div>
            <!-- Footer -->
            <footer class="sticky-footer bg-white">
                <div class="container my-auto">
                    <div class="copyright text-center my-auto">
                        <span>copyright &copy; <script>
                                document.write(new Date().getFullYear());

                            </script> - developed by
                            <b><a href="https://github.com/azhumahsan/Kost-CFG" target="_blank">ALIF TEAM</a></b>
                        </span>
                    </div>
                </div>
            </footer>
            <!-- Footer -->
        </div>
    </div>

    <!-- Scroll to top -->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>
</body>

</html>