<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>SB Admin - Register</title>

  	<?php 
		echo link_tag("asset/vendor/bootstrap/css/bootstrap.min.css");
		echo link_tag("asset/vendor/fontawesome-free/css/all.min.css");
		echo link_tag("asset/css/sb-admin.css");
	?>
	

  </head>

  <body style="background-position: center; background-repeat: no-repeat; background-size: cover;" background="<?=base_url('asset/images/waste.jpg')?>">

    <div class="container">
      <div class="card card-register mx-auto mt-5">
        <div class="card-header">Register an Account</div>
        <div class="card-body">
          <?php echo form_open('register/sineup')?>
			<?php if($error=$this->session->flashdata('regerror')):?>
			
			<div class="form-group">
              <div>
					<h4 class="text-danger"><?php echo $error;?></h4>
              </div>
            </div>
			
			<?php endif;?>
            <div class="form-group">
              <div class="form-row">
                <div class="col-md-6">
                  <div class="form-label-group">
                    <input type="text" id="firstName" name="firstName" class="form-control" placeholder="First name" required autofocus="autofocus">
                    <label for="firstName">First name</label>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-label-group">
                    <input type="text" id="lastName" name="lastName" class="form-control" placeholder="Last name" required>
                    <label for="lastName">Last name</label>
                  </div>
                </div>
              </div>
            </div>
            <div class="form-group">
              <div class="form-label-group">
                <input type="email" id="inputEmail" name="inputEmail" class="form-control" placeholder="Email address" required>
                <label for="inputEmail">Email address</label>
              </div>
            </div>
            <div class="form-group">
              <div class="form-row">
                <div class="col-md-6">
                  <div class="form-label-group">
                    <input type="password" id="inputPassword" name="inputPassword" class="form-control" placeholder="Password" required>
                    <label for="inputPassword">Password</label>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-label-group">
                    <input type="password" id="confirmPassword" name="confirmPassword" class="form-control" placeholder="Confirm password" required>
                    <label for="confirmPassword">Confirm password</label>
                  </div>
                </div>
              </div>
            </div>
			<div class="form-group">
              <div class="form-label-group">
                <input type="text" id="inputPhone" name="inputPhone" class="form-control" placeholder="Email address" pattern="[789][0-9]{9}" required>
                <label for="inputPhone">Phone no</label>
              </div>
            </div>
			<div class="form-group">
              <div class="form-row">
                <div class="col-md-6">
                  <div class="form-label-group">
                    <input type="text" id="street" name="street" class="form-control" placeholder="Password" required>
                    <label for="street">Street</label>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-label-group">
                    <input type="text" id="city"  name="city" class="form-control" placeholder="Confirm password" required>
                    <label for="city">City</label>
                  </div>
                </div>
              </div>
            </div>
			<div class="form-group">
              <div class="form-row">
                <div class="col-md-6">
                  <div class="form-label-group">
                    <input type="text" id="Country" name="Country" class="form-control" placeholder="Password" required>
                    <label for="Country">Country</label>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-label-group">
                    <input type="text" id="zip" name="zip" class="form-control" placeholder="Confirm password" required>
                    <label for="zip">Zip</label>
                  </div>
                </div>
              </div>
            </div>
			
            <input type="submit" class="btn btn-primary btn-block" value="Register"/>
          </form>
          <div class="text-center">
            <a class="d-block small mt-3" href="<?php echo site_url('login')?>">Login Page</a>
         
			
          </div>
        </div>
      </div>
    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="<?php echo base_url('asset/vendor/jquery/jquery.min.js');?>"></script>
    <script src="<?php echo base_url('asset/vendor/bootstrap/js/bootstrap.bundle.min.js');?>"></script>

    <!-- Core plugin JavaScript-->
    <script src="<?php echo base_url('asset/vendor/jquery-easing/jquery.easing.min.js');?>"></script>
	<script type="text/javascript">
	
		var password = document.getElementById("inputPassword"), confirm_password = document.getElementById("confirmPassword");

		function validatePassword(){
		  if(password.value != confirm_password.value) {
			confirm_password.setCustomValidity("Passwords Don't Match");
		  } else {
			confirm_password.setCustomValidity('');
		  }
		}

		password.onchange = validatePassword;
		confirm_password.onkeyup = validatePassword;
		
	</script>
  </body>

</html>
