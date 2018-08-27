<div class="container">
      <div class="card card-register mx-auto mt-5">
        <div class="card-header">Add E-Waste</div>
        <div class="card-body">
          <?=form_open_multipart('home/uploadwaste')?>
			<?php if($error=$this->session->flashdata('uperror')):?>
			
			<div class="form-group">
              <div>
					<h5 class="text-danger"><?php echo $error;?></h5>
              </div>
            </div>
			
			<?php endif;?>
            <div class="form-group">
              <div class="form-label-group">
                <input type="text" id="pname" name="pname" class="form-control" placeholder="Product name" required="required">
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
				  <input type="file" class="form-control-file" id="fileupload" name="fileupload" aria-describedby="fileHelp">
				  <small id="fileHelp" class="form-text text-muted">upload image of Product</small>
				</div>
			</div>
            <input type="submit" class="btn btn-primary btn-block" value="Add Waste"/>
          </form>
          
        </div>
      </div>
    </div>