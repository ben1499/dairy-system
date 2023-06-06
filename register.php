<?php include 'includes/connectdb.php' ?>

<!DOCTYPE html>
<html lang="en">
	<head>
		<title>Register</title>

		<link href="css/style.css" rel="stylesheet">
		<!-- Bootstrap -->
		<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
   
   <!-- Font Awesome -->
   <script src="https://kit.fontawesome.com/2746d01d26.js" crossorigin="anonymous"></script>

	</head>
	<body>
		<div class="container-fluid form-reg">
    		<form action="includes/connect_register.php" method="POST" class="register-form border rounded">
			<h3 class="mb-4 text-center">Register New Account</h3>
							<div class="row mb-2">
								<div class="col">
									<div class="input-group">
										<span class="input-group-text"><i class="fa-solid fa-user-tag"></i></span>
										<input type="text" class="form-control" name="name"  placeholder="Name" pattern="[A-z]{1+,15}" required="required" autocomplete="off" />
									</div>
								</div>
								<div class="col">
								<div class="input-group">
										<span class="input-group-text"><i class="fa-solid fa-envelope"></i></span>
										<input type="email" class="form-control" name="email" placeholder="Email" required="required" autocomplete="off"/>
									</div>
								</div>
							</div>
							
							<div class="row mb-2">
								<div class="col">
								<div class="input-group">
										<span class="input-group-text"><i class="fa-solid fa-key"></i></span>
										<input type="password" class="form-control" name="pass" placeholder="Password" maxlength="8" required="required" autocomplete="off"/>
									</div>
									
								</div>
								<div class="col">
									<label mb-2>Gender<i class="fa-solid fa-mailbox"></i></label>
									
										<input type="radio" id="radio1" class="form-check-input" name="gender" value="M">
										<label for="radio1">Male</label>
									
									
										<input type="radio" id="radio2" class="form-check-input" name="gender" value="F">
										<label for="radio2">Female</label>
									
								</div>
							</div>
							<div class="row mb-2">
								<div class="col">
								<div class="input-group">
										<span class="input-group-text"><i class="fa-solid fa-image-portrait"></i></span>
							   			<input type="text" class="form-control" name="age" placeholder="Age" required="required" autocomplete="off"/>
									</div>
								</div>
								<div class="col">
								<div class="input-group">
										<span class="input-group-text"><i class="fa-solid fa-phone"></i></span>
		          						<input type="text" class="form-control" name="phone" placeholder="Phone" maxlength="10" pattern="[7-9]{1}[0-9]{9}" required="required" autocomplete="off"/>
									</div>
								</div>
							</div>
							<div class="row mb-2">
							<div class="col">
									<div class="input-group">
										<span class="input-group-text"><i class="fa-solid fa-shop"></i></span>
										<input type="text" class="form-control" name="shopAddr" placeholder="Shop Address" required="required" autocomplete="off" />
									</div>	
								</div>
								<div class="col">
								<div class="input-group">
										<span class="input-group-text"><i class="fa-brands fa-usps"></i></span>
										<input type="text" class="form-control" name="zip" placeholder="Zip-Code" pattern="[0-9]*" maxlength="6" required="required" autocomplete="off"/>
									</div>
								</div>

							</div>
							<div class="row mb-5">
								<div class="col">
									
								</div>
								<div class="col">
									
								</div>
							</div>	

			   		<div class="d-grid gap-2 mb-3">
				   		<button class="btn btn-primary" type="submit" name="register">Create Account</button>
					</div>
		    	<div class="clear"></div>
			</form>
		</div>
		<?php
			if (isset($_GET['error'])) {
				if ($_GET['error'] == 'emailexists') {
					echo "<p style='text-align: center'>Email already exists";
				}
			}
		?>
</body>
<?php include 'footer.php'?>