<?php 
include '../../template/framework-link/index.php';
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<title>Sistem Perpustakaan >> Daftar</title>
	
		<!-- framework -->
	<?php echo Linkcss(); ?>
	<link rel="stylesheet" href="../../assets/style-css/style-daftar.css">

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



	 <div class="col-md-4 col-md-offset-4 form-login">
    

        <div class="outter-form-login">
   
            <form action="../../handle-form/handle-daftar-user/" class="inner-login" method="post">
            <h3 class="text-center title-login">Daftar Siswa</h3>
           		 <div class="form-group">
                    <input type="text" class="form-control" name="nama" placeholder="Nama">
                </div>
                <div class="form-group">
                    <input type="text"  class="form-control" name="username" placeholder="Username">
                </div>

                <div class="form-group">
                    <input type="password"  class="form-control" name="password" placeholder="Password">
                </div>
                
                <input type="submit" class="btn btn-block btn-custom-green" value="DAFTAR" />
                
                <div class="text-center forget">
                    <p>Forgot Password ?</p>
                </div>
            </form>
        </div>
    </div>




		<!-- framework -->
	<?php echo Linkjs(); ?>
</body>
</html>