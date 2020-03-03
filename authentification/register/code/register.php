<!DOCTYPE html>
<html>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/register.css" type="text/css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body>

    <div class=" header">
        <h1>Institut Teknologi Sumatera</h1>
    </div>

    <div class="row">
        <div class="col-6 col-s-12 content">
            <h3>REGISTER</h3>
            <form class="col-12 col-s-12 form" action="#">

                <h4>Data Diri</h4>
                <div class="form-group">
                    <label for="email">Nama:</label>
                    <input type="email" class="form-control" id="email" placeholder="Enter Name" name="email">
                </div>
                <div class="form-group">
                    <label for="pwd">Email:</label>
                    <input type="password" class="form-control" id="pwd" placeholder="Enter Email" name="pswd">
                </div>
                <div class="form-group">
                    <label for="pwd">Password:</label>
                    <input type="password" class="form-control" id="pwd" placeholder="Enter Password" name="pswd">
                </div>
                <div class="form-group">
                    <label for="pwd">
                        <Re-Type></Re-Type>Re-Type Password
                    </label>
                    <input type="password" class="form-control" id="pwd" placeholder="Enter Re-Type Password" name="pswd">
                </div>
                <div class="form-group form-check">
                    <label class="form-check-label">
                        <input class="form-check-input" type="checkbox" name="remember"> Remember me
                    </label>
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