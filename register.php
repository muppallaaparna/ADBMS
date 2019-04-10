
<?php include('server.php') ?>
<!DOCTYPE html>
<html>
<div class="dealer-logo">
<center>
<img class="dealer-logo" 
src="..\Images\Logo.png" alt="HTML5 Icon" style="width:auto;height:75px;"> 
<img src="..\Images\Name.png" alt="HTML5 Icon" style="display:inline-block;width:auto;height:75px;" > 
</center>
</div>
<div class="navbar">
 <a class="active" href="#"></a>
</div>

<head>
  <title>Registration system </title>
  <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
  <div class="header">
  	<h2>Register</h2>
  </div>
	
  <form method="post" action="register.php">
  	<?php include('errors.php'); ?>
		<div class="input-group">
  	  <label>First Name</label>
  	  <input type="text" name="FirstName" value="<?php echo $FirstName; ?>">
  	</div>
	<div class="input-group">
  	  <label>Last Name</label>
  	  <input type="text" name="LastName" value="<?php echo $LastName; ?>">
  	</div>
	<div class="input-group">
  	  <label>Date Of Birth</label>
  	  <input type="text" name="DOB" value="<?php echo $DOB; ?>">
  	</div>
	<div class="input-group">
  	  <label>SSN</label>
  	  <input type="text" name="SSN" value="<?php echo $SSN; ?>">
  	</div>
	
	<div class="input-group">
  	  <label>Role</label>
  	   <select id = "Role" value="<?php echo $Role; ?>">
               <option value = "1">Customer</option>
               <option value = "2">Manager</option>
			   </select>
  	</div>
	
  	<div class="input-group">
  	  <label>Username</label>
  	  <input type="text" name="username" value="<?php echo $username; ?>">
  	</div>
  	<div class="input-group">
  	  <label>Email</label>
  	  <input type="email" name="email" value="<?php echo $email; ?>">
  	</div>
  	<div class="input-group">
  	  <label>Password</label>
  	  <input type="password" name="password_1">
  	</div>
  	<div class="input-group">
  	  <label>Confirm password</label>
	  <input type="password" name="password_2">
  	</div>
  	<div class="input-group">
  	  <button type="submit" class="btn" name="reg_user">Register</button>
  	</div>
  	<p>
  		Already a member? <a href="login.php">Sign in</a>
  	</p>
  </form>
</body>
</html>