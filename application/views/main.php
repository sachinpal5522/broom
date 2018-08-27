<div class="card mb-3">
     <div class="card-header">
         <i class="fas fa-tv"></i>
         <?php echo $pname;?> 
	 </div>
		<div class="card-body row">
			<div class="col-xl-3 col-sm-4 mb-3">
				<img src="<?php echo base_url('uploads/'.$path);?>" class="img-thumbnail">
			</div>
			<div class="col-xl-9 col-sm-8 mb-9">
				Name : <?php echo $name;?><br>
				Phone NO: <?php echo $phoneno;?><br>
				Location: <?php echo $address;?><br>
				Description: <?php echo $description;?>	
			</div>
		</div>
     <div class="card-footer small text-muted">Uploaded On <?php echo $date;?></div>
</div>