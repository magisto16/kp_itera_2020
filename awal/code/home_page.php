<?php
$connect = mysqli_connect("localhost", "root", "", "kp_if_itera");
$query = "SELECT * FROM instansi";
$result = mysqli_query($connect, $query);
?>
<!DOCTYPE html>
<html>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link rel="stylesheet" href="../css/home_page.css" type="text/css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body>

    <div class="header">
        <div class="col-1 col-s-3 logo">
            <img src="../img/logo_itera.png">
        </div>
        <div class="sub">
            <small>INSTITUT TEKNOLOGI</small>
            <br>
            <strong>SUMATERA</strong>
        </div>
    </div>

    <div class="row">
        <div class="col-12 col-s-12 abc">
            <form class="col-6 col-s-12 form" action="../../authentification/login/code/login.php">
                <strong>WEBSITE RESMI KERJA PRAKTIK TEKNIK INFORMATIKA</strong>
                <br>
                <strong>INSTITUT TEKNOLOGI SUMATERA</strong>
                <br>
                <br>
                <button class="btn btn-success" type="submit">Masuk</a></button>
                <a href="#">Unduh Surat Persetujuan</a>
            </form>

            <div class="col-6 col-s-12 content">
                <div class="col-9 col-12 content_satu">
                    <div class="col-9 col-s-12 foto_alur_kp">
                        <img id="myImg" class="img-thumbnail" src="../img/alur_kp.png" alt="Foto Alur KP">
                        <p>Info Alur Kerja Praktik</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="info_kp">
        <h4 align="center">Info Tempat Kerja Praktik</h4>
        <br>
        <div class="table-responsive">
            <table class=" table table-hover">
                <tr class="active">
                    <th width="5%">No</th>
                    <th width="25%">Nama Instansi</th>
                    <th width="35%">Alamat</th>
                    <th width="15%">No. Telepon</th>
                    <th width="20%">Email</th>
                </tr>
                <?php
                while ($row = mysqli_fetch_array($result)) {
                ?>
                    <tr>
                        <td><?php echo $row["id"]; ?></td>
                        <td><?php echo $row["nama"]; ?></td>
                        <td><?php echo $row["alamat"]; ?></td>
                        <td><?php echo $row["Telp"]; ?></td>
                        <td><?php echo $row["email"]; ?></td>
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

<!-- The Modal -->
<div id="myModal" class="modal">
    <span class="close">&times;</span>
    <img class="modal-content" id="img01">
    <div id="caption"></div>
</div>

<script>
    // Get the modal
    var modal = document.getElementById('myModal');

    // Get the image and insert it inside the modal - use its "alt" text as a caption
    var img = document.getElementById('myImg');
    var modalImg = document.getElementById("img01");
    var captionText = document.getElementById("caption");
    img.onclick = function() {
        modal.style.display = "block";
        modalImg.src = this.src;
        captionText.innerHTML = this.alt;
    }

    // Get the <span> element that closes the modal
    var span = document.getElementsByClassName("close")[0];

    // When the user clicks on <span> (x), close the modal
    span.onclick = function() {
        modal.style.display = "none";
    }
</script>