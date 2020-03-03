<!DOCTYPE html>
<html>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link rel="stylesheet" href="../css/koor_cetak.css" type="text/css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body>

    <div class=" header">
        <h1>Institut Teknologi Sumatera</h1>
    </div>

    <div class="nav-bar">
        <nav class="navbar navbar-custom navbar-static-top">
            <div class="container-fluid">
                <ul class="nav navbar-nav navbar-right">
                    <li><a href="#"><span class="glyphicon glyphicon-user"></span> Dhiko JangJaya Putra</a></li>
                    <li><a href="#"><span class="glyphicon glyphicon-log-out"></span> Logout</a></li>
                </ul>
            </div>
        </nav>
    </div>

    <div class="row">
        <div class="col-3 col-s-12 menu">
            <ul>
                <li><a href="home_page.php">Beranda</a></li>
                <li><a href="koor_mhs.php">Mahasiswa</a></li>
                <li><a href="koor_laporan.php">Laporan</a></li>
                <li><a href="koor_cetak.php">Cetak Nilai</a></li>
                <li><a href="koor_validasi.php">Validasi</a></li>
                <li><a href="koor_dopem.php">Dosen Pembimbing</a></li>
            </ul>
        </div>

        <div class="col-9 col-s-12 content">

            <table class=" col-12 col-s-12 table table-hover">
                <thead>
                    <tr>
                        <th>Mahasiswa</th>
                        <th>Lainnya</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Doe</td>
                        <td><a href="#">Lihat</a></td>
                    </tr>
                    <tr>
                        <td>Moe</td>
                        <td><a href="#">Lihat</a></td>
                    </tr>
                    <tr>
                        <td>Dooley</td>
                        <td><a href="#">Lihat</a></td>
                    </tr>
                </tbody>
            </table>
        </div>

    </div>

    <div class="footer">
        <p><i class="fa fa-copyright" aria-hidden="true"></i> Copyright</p>
    </div>

</body>

</html>