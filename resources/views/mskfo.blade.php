<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title> IDC LOGISTIK </title>
    <link href="css/styles.css" rel="stylesheet" />
    <link href="img/favicon.ico" rel="icon">
    <link href="https://cdn.datatables.net/1.10.20/css/dataTables.bootstrap4.min.css" rel="stylesheet" crossorigin="anonymous" />
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/js/all.min.js" crossorigin="anonymous"></script>
</head>
<body class="sb-nav-fixed">
    <nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark">
        <a class="navbar-brand" href="{{ route('index') }}">IDC INDONESIA</a>
        <button class="btn btn-link btn-sm order-1 order-lg-0" id="sidebarToggle" href="#"><i class="fas fa-bars"></i></button>
    </nav>

    <!-- Navbar dan Side Bar-->
    <div id="layoutSidenav">
        <div id="layoutSidenav_nav">
            <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
                <div class="sb-sidenav-menu">
                    <div class="nav">
                        <a class="nav-link" href="{{ route('stock') }}">
                            <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                            STOCK LOGISTIK
                        </a>
                        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseLayouts" aria-expanded="false" aria-controls="collapseLayouts">
                            <div class="sb-nav-link-icon"><i class="fas fa-columns"></i></div>
                            Logistik Interkoneksi
                            <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                        </a>
                        <div class="collapse" id="collapseLayouts" aria-labelledby="headingOne" data-parent="#sidenavAccordion">
                            <nav class="sb-sidenav-menu-nested nav">
                                <a class="nav-link" href="{{ route('mskfo') }}">Fiber Optik</a>
                                <a class="nav-link" href="{{ route('mskutp') }}">UTP</a>
                                <a class="nav-link" href="{{ route('mskkasetlisa') }}">Caset Lisa</a>
                                <a class="nav-link" href="{{ route('mskkasetrack') }}">Caset Rack</a>
                            </nav>
                        </div>
                        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapse" aria-expanded="false" aria-controls="collapsePages">
                            <div class="sb-nav-link-icon"><i class="fas fa-book-open"></i></div>
                            Logistik Critical
                            <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                        </a>
                        <div class="collapse" id="collapse" aria-labelledby="headingTwo" data-parent="#sidenavAccordion">
                            <nav class="sb-sidenav-menu-nested nav accordion" id="sidenavAccordionPages">
                                 <a class="nav-link" href="{{ route('freon') }}">Freon</a>
                                <a class="nav-link" href="{{ route('mskcompresor') }}">Compressor</a>
                                <a class="nav-link" href="{{ route('mskfan') }}">Fan</a>
                                <a class="nav-link" href="{{ route('mskpipaac') }}">Pipa AC</a>
                            </nav>
                        </div>
                        <a class="nav-link" href="{{ route ('login')}}">
                            <div class="sb-nav-link-icon"></div>
                            Log Out
                        </a>
                    </div>
                    <div class="sb-sidenav-footer">
                        <div class="small">IDC INDONESIA</div>
                    </div>
            </nav>
        </div>
        <div id="layoutSidenav_content">
            <main>
                <div class="container-fluid">
                    <h1 class="mt-4">Logistik Kabel</h1>
                    <ol class="breadcrumb mb-4">
                        <li class="breadcrumb-item active"></li>
                    </ol>
                    <div class="card mb-4">
                        <div class="card-header">
                            <!-- Button to Open the Modal -->
                            <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#myModal">
                                Pengambilan Kabel
                            </button>
                        </div>
                        <div class="row">
                            <div class="col-xl-6">
                            </div>
                        </div>

                        <div class="table-responsive">
                            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                <thead>  
                                    <tr>
                                        <th>No</th>
                                        <th>Tanggal</th>
                                        <th>Jenis Kabel</th>
                                        <th>Jumlah Kabel</th>
                                        <th>Panjang Kabel</th>
                                        <th>Petugas</th>
                                        <th>Keterangan</th>
                                        <th>Button</th>                                       
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($data as $d)
                                        <tr>
                                            <td>{{ $loop->remaining }}</td>
                                            <td>{{$d->tanggal }}</td>
                                            <td>{{$d->Jeniskabel}}</td>
                                            <td>{{$d->jumlahkabel }}</td>
                                            <td>{{$d->panjangkabel }}</td>
                                            <td>{{$d->petugas }}</td>
                                            <td>{{ $d->keterangan }}</td>
                                            <td>
                                                <a href="{{ route('Mskfo.edit1', ['id' => $d->id]) }}" class="btn btn-info text-dark mt-2 ms-1"><i class="bi bi-pencil-fill"></i></a> | <a href="#" class="btn btn-danger text-dark mt-2 ms-1">Delete</a>
                                            </td>                                           
                                        </tr>
                                    @endforeach
                                    </tbody>
                            </table>
                        </div>
                    </div>
                </div>
        </div>
        </main>
    </div>
    </div>

    <!-- The Modal -->
<div class="modal fade" id="myModal">
    <div class="modal-dialog">
        <div class="modal-content">

            <!-- Modal Header -->
            <div class="modal-header">
                <h4 class="modal-title">Logistik Kabel</h4>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>

            <!-- Modal body -->
            <div class="modal-body">
                <form action="{{ route('post') }}" method="POST">
                @csrf
                <input type="date" name="waktu" placeholder="Tanggal" class="form-control @error('waktu') is-invalid @enderror">
                <br>
                <input type="text" name="jenis" placeholder="Jenis Kabel" class="form-control @error('jenis') is-invalid @enderror">
                <br>
                <input type="text" name="jumlah" placeholder="Jumlah Kabel" class="form-control">
                <br>
                <input type="text" name="panjang" placeholder="Panjang Kabel" class="form-control">
                <br>
                <input type="text" name="petugas" placeholder="Petugas" class="form-control @error('petugas') is-invalid @enderror">
                <br>
                <input type="text" name="keterangan" placeholder="Keterangan" class="form-control">
                <br>
                <input type="file" name="dokumen" placeholder="Foto Dokumen" class="form-control">
            </div>
            <!-- Modal footer -->
            <div class="modal-footer">
                <button type="submit" class="btn btn-danger" name="Submit">Kirim</button>
            </div>
            </form>
        </div>
    </div>
</div>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
    <script src="js/scripts.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>
    <script src="assets/demo/chart-area-demo.js"></script>
    <script src="assets/demo/chart-bar-demo.js"></script>
    <script src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js" crossorigin="anonymous"></script>
    <script src="https://cdn.datatables.net/1.10.20/js/dataTables.bootstrap4.min.js" crossorigin="anonymous"></script>
    <script src="assets/demo/datatables-demo.js"></script>
</body>

</html>
