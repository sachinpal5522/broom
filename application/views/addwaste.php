<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>E-Disposer</title>
	<?php 
		echo link_tag("asset/vendor/bootstrap/css/bootstrap.min.css");
		echo link_tag("asset/vendor/fontawesome-free/css/all.min.css");
		echo link_tag("asset/css/sb-admin.css");
	?>

  </head>

  <body style="background-position: center; background-repeat: no-repeat; background-size: cover;" background="<?=base_url('asset/images/waste.jpg')?>">

    <div class="container">
      <div class="card card-register mx-auto mt-5">
        <div class="card-header">Add E-Waste</div>
        <div class="card-body">
          <?=form_open('home/addwaste')?>
           
            <div class="form-group">
              <div class="form-label-group">
                <input type="email" id="pname" name="pname" class="form-control" placeholder="Email address" required="required">
                <label for="pname">Product Name</label>
              </div>
            </div>
            <div class="form-group">
              <div class="form-row">
                <div class="col-md-6">
                  
                    <select name="type" class="custom-select custom-select form-control form-control">
					<option value="">Select Type</option>
					<option value="tv">TV</option>
					<option value="mobile">Mobile</option>
					<option value="washing_machine">Washing Machine</option>
					<option value="fridge">Fridge</option>
					<option value="home_appliance">Home appliance</option>
					<option value="other">Other</option>
					</select>
                </div>
                <div class="col-md-6">
                  
                    <select name="condition" class="custom-select custom-select form-control form-control">
					<option value="">Select Condition</option>
					<option value="working">Working</option>
					<option value="notworking">Not Wroking</option>
					<option value="partiallyworking">Partially Working</option>
					</select>
               
                </div>
              </div>
            </div>
			
			<div class="form-group">
              <div class="form-label-group">
                <textarea id="desc" name="desc" class="form-control" placeholder="Description" required="required"></textarea>
              </div>
            </div>
			
			<div class="form-group">
				<div class="form-group">
				  <input type="file" class="form-control-file" id="exampleInputFile" aria-describedby="fileHelp">
				  <small id="fileHelp" class="form-text text-muted">upload image of Product</small>
				</div>
			</div>
            <input type="submit" class="btn btn-primary btn-block" value="Add Waste"/>
          </form>
          
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
