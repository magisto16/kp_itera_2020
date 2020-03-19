<!DOCTYPE html>
<html>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link rel="stylesheet" href="../css/mhs_pengajuan.css" type="text/css">
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
        <div class="col-3 col-s-3 menu">
            <ul>
                <li><a href="home_page.php">Beranda</a></li>
                <li><a href="mhs_daftar.php">Daftar</a></li>
                <li><a href="mhs_referensi.php">Referensi</a></li>
                <li><a href="mhs_unduh.php">Unduh Form</a></li>
                <li><a href="mhs_upload.php">Upload</a></li>
                <li><a href="mhs_pengajuan.php">Pengajuan Seminar</a></li>
            </ul>
        </div>

        <div class="col-9 col-s-9 content">

            <form class="col-12 col-s-12 form" action="#">
                <div class="form-group">
                    <label for="nama">Nama:</label>
                    <input type="text" class="form-control" id="nama" placeholder="Masukkan Nama" name="nama">
                </div>
                <div class="form-group">
                    <label for="nim">NIM:</label>
                    <input type="text" class="form-control" id="nim" placeholder="Masukkan NIM" name="nim">
                </div>
                <div class="form-group">
                    <label for="tmpt">Tempat Kerja Praktik:</label>
                    <input type="text" class="form-control" id="tmpt" placeholder="Masukkan Tempat Kerja Praktik" name="tmpt">
                </div>
                <div class="form-group">
                    <label for="waktu">Waktu Kerja Praktik:</label>
                    <input type="text" class="form-control" id="waktu" placeholder="Masukkan Waktu Kerja Praktik" name="waktu">
                </div>
                <div class="form-group">
                    <label for="waktu_seminar">Waktu Seminar:</label>
                    <input type="text" class="form-control" id="waktu_seminar" placeholder="Masukkan Waktu Seminar" name="waktu_seminar">
                </div>
                <div class="form-group">
                    <label for="tempat_seminar">Tempat Seminar:</label>
                    <input type="text" class="form-control" id="tempat_seminar" placeholder="Masukkan Tempat Seminar" name="tempat_seminar">
                </div>

                <button type="submit" class="btn btn-primary">Submit</button>
            </form>

        </div>

    </div>

    <div class="footer">
        <p><i class="fa fa-copyright" aria-hidden="true"></i> Copyright</p>
    </div>

</body>

</html>