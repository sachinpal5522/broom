
 
<div class="container-fluid bg-light text-center" >
	<br><br><br>
	<?php echo form_open('Login/loging','class="form-signin" style="max-width:330px; margin:auto;"')?>
      <h1 class="h3 mb-3 font-weight-bold">Please sign in</h1><br>
      <label for="inputEmail" class="sr-only">Email address</label>
      <input type="email" id="inputEmail" class="form-control" placeholder="Email address" required="" autofocus=""><br>
      <label for="inputPassword" class="sr-only">Password</label>
      <input type="password" id="inputPassword" class="form-control" placeholder="Password" required="">
      <br>
      <button class="btn btn-lg btn-primary btn-block" type="submit">Sign in</button>
     
</form>
	<br>
	<?php echo anchor('Register', 'Register', 'title="Register"'); ?>
	<br><br>
	
</div>