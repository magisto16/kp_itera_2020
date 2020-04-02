<?php
$connect = mysqli_connect("localhost", "root", "", "kp_if_itera");
$query = "SELECT * FROM mahasiswa";
$result = mysqli_query($connect, $query);
?>
<!DOCTYPE html>
<html>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link rel="stylesheet" href="../css/dopem_laporan.css" type="text/css">
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
                <li><a href="dopem_mhs.php">Mahasiswa</a></li>
                <li><a href="dopem_laporan.php">Laporan</a></li>
                <li><a href="dopem_nilai.php">Nilai</a></li>
                <li><a href="dopem_seminar.php">Jadwal Seminar</a></li>
            </ul>
        </div>

        <div class="col-9 col-s-12 content" id="content1">

            <table class=" col-12 col-s-12 table table-hover">
                <tr>
                    <th width="70%">Judul Laporan</th>
                    <th width="30%">Lihat</th>
                </tr>
                <?php
                while ($row = mysqli_fetch_array($result)) {
                ?>
                    <tr>
                        <td><?php echo $row["laporan"]; ?></td>
                        <td><input type="button" name="view" value="Lihat" id="<?php echo $row["laporan"]; ?>" class="btn btn-info btn-xs view_data" /></td>
                    </tr>
                <?php
                }
                ?>
            </table>
        </div>
    </div>

    <div class="footer">
        <p><i class="fa fa-copyright" aria-hidden="true"></i> Copyright</p>
    </div>

</body>

</html>

<script>
    $('.view_data').click(function() {
        var laporan_id = $(this).attr("id");

        $.post('dopem_laporan_lihat.php', {
                postid: laporan_id
            },
            function(data) {
                $('#content1').html(data);
            });
    });
</script>