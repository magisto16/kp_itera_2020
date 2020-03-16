<!DOCTYPE html>
<html>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link rel="stylesheet" href="../css/mhs_daftar.css" type="text/css">
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
                    <input type="text" class="form-control" id="nama" placeholder="Masukkan Nama" name="nama" required>
                </div>
                <div class="form-group">
                    <label for="nim">NIM:</label>
                    <input type="text" class="form-control" id="nim" placeholder="Masukkan NIM" name="nim" required>
                </div>
                <div class="form-group">
                    <label for="jurusan">Jurusan:</label>
                    <input type="text" class="form-control" id="jurusan" placeholder="Masukkan Jurusan" name="jurusan" required>
                </div>
                <div class="form-group">
                    <label for="prodi">Program Studi:</label>
                    <input type="text" class="form-control" id="prodi" placeholder="Masukkan Program Studi" name="prodi" required>
                </div>
                <div class="form-group">
                    <label for="alamat">Alamat:</label>
                    <input type="text" class="form-control" id="alamat" placeholder="Masukkan Alamat" name="alamat" required>
                </div>
                <div class="form-group">
                    <label for="telp">No. Telepon:</label>
                    <input type="text" class="form-control" id="telp" placeholder="Masukkan No. Telepon" name="telp" required>
                </div>
                <div class="form-group">
                    <label for="email">Email:</label>
                    <input type="email" class="form-control" id="email" placeholder="Masukkan Email" name="email" required>
                </div>
                <div class="form-group">
                    <label for="nama_instansi">Nama Insatnsi:</label>
                    <input type="text" class="form-control" id="nama_instansi" placeholder="Masukkan Nama Instansi" name="nama_instansi" required>
                </div>
                <div class="form-group">
                    <label for="divisi">Divisi Instansi:</label>
                    <input type="text" class="form-control" id="nim" placeholder="Masukkan Divisi Instansi" name="divisi" required>
                </div>
                <div class="form-group">
                    <label for="alamat_instansi">Alamat Instansi:</label>
                    <input type="text" class="form-control" id="alamat_instansi" placeholder="Masukkan Alamat Instansi" name="alamat_instansi" required>
                </div>
                <div class="form-group">
                    <label for="waktu">Waktu Pelaksanaan:</label>
                    <input type="text" class="form-control" id="waktu" placeholder="Masukkan Waktu Pelaksanaan" name="waktu" required>
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