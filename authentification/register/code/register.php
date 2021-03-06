<!DOCTYPE html>
<html>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <link rel="stylesheet" href="../css/register.css" type="text/css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>

<body>

    <div class="row">

        <div class="col-5 col-s-12 head">
            <h2>Kerja Praktik Teknik Informatika Institut Teknologi Sumatera</h2>
        </div>

        <div class="col-3 col-s-12 content">
            <h3 style="text-align: center">REGISTER</h3>
            <form class="col-12 col-s-12 form" action="#">

                <div class="form-group">
                    <label for="name">Nama:</label>
                    <input type="name" class="form-control" id="name" placeholder="Enter Name" name="name" required>
                </div>
                <div class="form-group">
                    <label for="email">Email:</label>
                    <input type="email" class="form-control" id="email" placeholder="Enter Email" name="email" required>
                </div>
                <div class="form-group">
                    <label for="pwd">Password:</label>
                    <input type="password" class="form-control" id="pwd" placeholder="Enter Password" name="pswd" required>
                </div>
                <div class="form-group">
                    <label for="re-pwd">Re-Type Password</label>
                    <input type="password" class="form-control" id="re-pwd" placeholder="Enter Re-Type Password" name="re-pswd" required>
                </div>
                <div class="form-group form-check">
                    <label class="form-check-label">
                        <input class="form-check-input" type="checkbox" name="remember"> Remember me
                    </label>
                </div>
                <button type="submit" class="btn btn-success">Daftar</button>
            </form>

        </div>

    </div>

</body>

</html>