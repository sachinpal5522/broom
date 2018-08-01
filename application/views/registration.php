<script type="text/javascript">
window.onload = function () {
	document.getElementById("password").onchange = validatePassword;
	document.getElementById("confirm").onchange = validatePassword;
}
function validatePassword(){
var pass2=document.getElementById("confirm").value;
var pass1=document.getElementById("password").value;
if(pass1!=pass2)
	document.getElementById("confirm").setCustomValidity("Passwords Don't Match");
else
	document.getElementById("confirm").setCustomValidity('');	 
//empty string means no validation error
}
</script>
				<div class="main-login main-center bg-light" style='height:700px;'>
				<br>
					<center><h1 class="h3 mb-3 font-weight-normal font-weight-bold">Register yourself</h1></center>
					<form class="form-horizontal" method="post" style="max-width:330px; margin:auto;" action="#">
						
						<div class="form-group">
							<label for="name" class="cols-sm-2 control-label font-weight-bold">Your Name</label>
							<div class="cols-sm-10">
								<div class="input-group">
									<span class="input-group-addon"><i class="fa fa-user fa" aria-hidden="true"></i></span>
									<input type="text" class="form-control" name="name" id="name"  placeholder="Enter your Name" required/>
								</div>
							</div>
						</div>
						
						<div class="form-group">
							<label for="email" class="cols-sm-2 control-label font-weight-bold">Your Email</label>
							<div class="cols-sm-10">
								<div class="input-group">
									<span class="input-group-addon"><i class="fa fa-envelope fa" aria-hidden="true"></i></span>
									<input type="email" class="form-control" name="email" id="email"  placeholder="Enter your Email" required />
								</div>
							</div>
						</div>
						
						<div class="form-group">
							<label for="email" class="cols-sm-2 control-label font-weight-bold">Your Phone no</label>
							<div class="cols-sm-10">
								<div class="input-group">
									<span class="input-group-addon"><i class="fa fa-envelope fa" aria-hidden="true"></i></span>
									<input type="text" class="form-control" name="phone" id="phone" pattern="[789][0-9]{9}" placeholder="Enter your phone no" required/>
								</div>
							</div>
						</div>
				
						<div class="form-group">
							<label for="username" class="cols-sm-2 control-label font-weight-bold">Username</label>
							<div class="cols-sm-10">
								<div class="input-group">
									<span class="input-group-addon"><i class="fa fa-users fa" aria-hidden="true"></i></span>
									<input type="text" class="form-control" name="username" id="username"  placeholder="Enter your Username" required/>
								</div>
							</div>
						</div>
					
						<div class="form-group">
							<label for="password" class="cols-sm-2 control-label font-weight-bold">Password</label>
							<div class="cols-sm-10">
								<div class="input-group">
									<span class="input-group-addon"><i class="fa fa-lock fa-lg" aria-hidden="true"></i></span>
									<input type="password" class="form-control" name="password" id="password"  placeholder="Enter your Password" required/>
								</div>
							</div>
						</div>

						<div class="form-group">
							<label for="confirm" class="cols-sm-2 control-label font-weight-bold">Confirm Password</label>
							<div class="cols-sm-10">
								<div class="input-group">
									<span class="input-group-addon"><i class="fa fa-lock fa-lg" aria-hidden="true"></i></span>
									<input type="password" class="form-control" name="confirm" id="confirm"  placeholder="Confirm your Password" required/>
								</div>
							</div>
						</div>

						<div class="form-group ">
							<button type="submit" class="btn btn-primary btn-lg btn-block login-button">Register</button>
						</div>
						
					</form>
					<br><br><br>
				</div>
	

