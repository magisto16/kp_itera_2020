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
                <li><a href="mhs_daftar.php">Daftar</a></li>
                <li><a href="mhs_referensi.php">Referensi</a></li>
                <li><a href="mhs_unduh.php">Unduh Form</a></li>
                <li><a href="mhs_upload.php">Upload</a></li>
                <li><a href="mhs_pengajuan.php">Pengajuan Seminar</a></li>
            </ul>
        </div>

        <div class="col-9 col-s-12 content">

            <div class="col-9 col-12 content_satu">
                <div class="col-3 col-s-12 semester">
                    <p>Semester</p>
                    <h2>7</h2>
                </div>

                <div class="col-3 col-s-12 catatan">
                    <p>Status Kerja Praktik</p>
                    <h2>Aktif</h2>
                </div>
            </div>


            <div class="col-12 col-s-12 content_dua">
                <div class="col-12 col-s-12 commentbox">
                    <h4>Chat Message</h4>

                    <p>Hey Jackie! How have you been?</p>
                    <p>What a surprise. I haven’t seen you in a long time. How have you been?</p>
                    <p>I’m doing very well. How about you?</p>
                    <p>Well, I finally have some free time. I’m busy juggling between my full time job and
                        freelance projects. But now since it’s done, I can relax for a while.</p>
                </div>

                <button class="open-button" onclick="openForm()">Chat</button>
            </div>
        </div>
    </div>
    <div class="footer">
        <p><i class="fa fa-copyright" aria-hidden="true"></i> Copyright</p>
    </div>

</body>

</html>

<div class="chat-popup" id="myForm">
    <form action="#" class="form-container">
        <div class="form-group">
            <h1>Chat</h1>

            <label for="msg"><b>Message</b></label>
            <textarea placeholder="Type message.." name="msg" required></textarea>

            <button type="submit" class="btn btn-success">Send</button>
            <button type="button" class="btn btn-danger" onclick="closeForm()">Close</button>
        </div>
    </form>
</div>

<script>
    function openForm() {
        document.getElementById("myForm").style.display = "block";
    }

    function closeForm() {
        document.getElementById("myForm").style.display = "none";
    }
</script>