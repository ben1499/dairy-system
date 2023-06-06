<!DOCTYPE html>
<html lang="en">

    <head>
      <title>Login</title>
      <link href="css/style.css" rel="stylesheet">

      <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
   
    <!-- Font Awesome -->
    <script src="https://kit.fontawesome.com/2746d01d26.js" crossorigin="anonymous"></script>
    </head>
   <body>
  
  <section class="form-login">
    <div class="container">
      <div class="text-center login-text">
          <h3>Existing Customers</h3>
        	<p>Sign in with the form below.</p>
      </div>
        	<form action="includes/connect_login.php" method="POST" class="login-form border rounded mb-8">
            <div class="mb-3">
                	<label class="form-label">Email</label>
                  <div class="input-group">
                    <span class="input-group-text"><i class="fa-solid fa-envelope"></i></span>
                    <input name="email" class="form-control" placeholder="Email" type="email" maxlength="30" required="required" autocomplete="off"/>
                  </div>    
                </div>
            <div class="mb-4">
                  <label class="form-label">Password</label> 
                  <div class="input-group">
                    <span class="input-group-text" id="basic-addon1"><i class="fa-solid fa-key"></i></span>
                    <input name="pass" class="form-control" placeholder="Password" type="password" maxlength="8" required="required" autocomplete="off"/>
                  </div>
            </div>
            <div class="d-grid gap-2 mb-3">
              <button class="btn  btn-primary" name="login">Sign In</button>
            </div>
            
            <div class="mb-3 text-center">
              <label class="form-text">New User? Register <a href="register.php">Here</a></label>
            </div>
          </form>
    </div>
  </section>
  <?php
      if (isset($_GET["error"])) {
        if ($_GET['error'] == 'emptyinput') {
          echo "<p>Fill in all the fields</p>";
        }
        else if ($_GET["error"] == "wronglogin") {
          echo "<p style='text-align: center'>Incorrect Login Details<p>";
        }
      }
    ?>
</body>

<?php include 'footer.php'?>



	