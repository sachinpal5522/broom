<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>SB Admin - Login</title>

    <!-- Bootstrap core CSS-->
	<?php 
		echo link_tag("asset/vendor/bootstrap/css/bootstrap.min.css");
		echo link_tag("asset/vendor/fontawesome-free/css/all.min.css");
		echo link_tag("asset/css/sb-admin.css");
	?>

  </head>

  <body class="bg-dark">

    <div class="container">
      <div class="card card-login mx-auto mt-5">
        <div class="card-header">Login</div>
        <div class="card-body">
          <?php echo form_open('login/authorize');?>
            <div class="form-group">
              <div class="form-label-group">
                <input type="email" id="inputEmail" class="form-control" placeholder="Email address" required="required" autofocus="autofocus">
                <label for="inputEmail">Email address</label>
              </div>
            </div>
            <div class="form-group">
              <div class="form-label-group">
                <input type="password" id="inputPassword" class="form-control" placeholder="Password" required="required">
                <label for="inputPassword">Password</label>
              </div>
            </div>
           
			<input type="submit" name="lbtn" value="login" class="btn btn-primary btn-block"/>
            
          </form>
          <div class="text-center">
            <a class="d-block small mt-3" href="<?php echo site_url('register');?>">Register an Account</a>
            <a class="d-block small" href="forgot-password.html">Forgot Password?</a>
          </div>
        </div>
      </div>
    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="<?php echo base_url('asset/vendor/jquery/jquery.min.js');?>"></script>
    <script src="<?php echo base_url('asset/vendor/bootstrap/js/bootstrap.bundle.min.js');?>"></script>

    <!-- Core plugin JavaScript-->
    <script src="<?php echo base_url('asset/vendor/jquery-easing/jquery.easing.min.js');?>"></script>

  </body>

</html>
