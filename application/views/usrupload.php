<div class="card mb-3">
     <div class="card-header">
         <i class="fas fa-list-ul"></i>
         <b><?php echo $pname;?></b> 
	 </div>
		<div class="card-body row">
			<div class="col-xl-3 col-sm-4 mb-3">
				<img src="<?php echo base_url('uploads/'.$path);?>" class="img-thumbnail">
			</div>
			<div class="col-xl-9 col-sm-8 mb-9" >
				<b >Name</b>&ensp;&ensp;&ensp;&ensp;&ensp; : <?php echo $name;?><br>
				<b>Phone No</b>&ensp;&ensp;: <?php echo $phoneno;?><br>
				<b>Location</b>&ensp;&ensp;&ensp;: <?php echo $address;?><br>
				<b>Description</b> : <?php echo $description;?>	<br><br>
				<?php echo form_open('login/deleteusergarbage')?>
				<input type="hidden" value="<?php echo $pid;?>" name="pid"/>
				<input type="submit" class="btn btn-danger btn-block" value="Delete"/>
				</form>
			</div>
		</div>
     <div class="card-footer small text-muted">Uploaded On <?php echo $date;?></div>
</div>