<?php 
include '../../template/framework-link/index.php';
include '../../koneksi.php';
 ?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Sistem Perpustakaan >> Login</title>

   <?php echo Linkcss(); ?>
    <link rel="stylesheet" href="../../assets/style-css/style-login.css">

  </head>
  <body background="https://conficio.design/wp-content/uploads/2017/05/pencil-bg-e1493978556373.gif">
    
   <style>
       @media only screen and (max-width: 600px) {
          body {
        position: fixed;
        background-color: lightblue;
        background-image: none
    }
    
   .form-login {
    margin-right: 200px;
    }
    .form-login {
    margin-left: 0;
    }
  
        }

   </style>
    <?php 
    if (isset($_GET['pesan'])) {
        if ($_GET['pesan'] == "gagal") {
            echo "<div class='alert'>Username dan Password tidak sesuai !<div>";
        }
    }
     ?>

    <div class="col-md-4 col-md-offset-4 form-login">
    

        <div class="outter-form-login">
   
            <form  action="../../handle-form/handle-login-user/" class="inner-login" method="post">
            <h3 class="text-center title-login">Login Petugas / Siswa</h3>
                <div class="form-group">
                    <input type="text" class="form-control" name="username" placeholder="Username">
                </div>
  
                <div class="form-group">
                    <input type="password" class="form-control" name="password" placeholder="Password">
                </div>
                
                <input type="submit" class="btn btn-block btn-custom-green" value="LOGIN" />
                
                <div class="text-center forget">
                    <p>Forgot Password ?</p>
                </div>
            </form>
        </div>
    </div>

    	<?php echo Linkjs(); ?>
  </body>
</html>