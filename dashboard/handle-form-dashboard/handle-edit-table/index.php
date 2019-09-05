
<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Admin >> Register</title>

    <!-- Bootstrap core CSS-->
    <link href="../../vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom fonts for this template-->
    <link href="../../vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">

    <!-- Custom styles for this template-->
    <link href="../../css/sb-admin.css" rel="stylesheet">

  </head>

  <body class="bg-dark">

    <div class="container">
      <div class="card card-register mx-auto mt-5">
        <div class="card-header">Edit Data Siswa nama</div>
        <div class="card-body">

          <form method="post" action="#">
      <div class="form-group">
              <div class="form-label-group">
                <input type="text" id="nama" name="nama" class="form-control" placeholder="Nama" required="required">
                <label for="nama">Nama</label>
              </div>
            </div>

            <div class="form-group">
              <div class="form-label-group">
                <input type="text" id="username" name="username" class="form-control" placeholder="Email address" required="required" pattern="^[a-zA-Z][a-zA-Z0-9-_\.]{7,20}$" title="8 character username">
                <label for="username">Username</label>
              </div>
            </div>
           
    <div class="form-group">
              <div class="form-label-group">
                <input type="password" id="password" name="password" class="form-control" placeholder="Email address" required="required" pattern="(?=^.{8,}$)((?=.*\d)|(?=.*\W+))(?![.\n])(?=.*[a-z]).*$" title="8 character password , you can use lowercase and numeric">
                <label for="password">Password</label>
              </div>
            </div>

            <input type="submit" name="submit" class="btn btn-primary  btn-block" value="Register">
          </form>
          <div class="text-center">
            <a class="d-block small mt-3" href="../petugas/form-login/">Login Page</a>
          </div>
        </div>
      </div>
    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

  </body>

</html>
