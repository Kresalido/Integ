<?php include('server.php') ?>
<!DOCTYPE html>
<html>
<head>
  <title>User Registration </title>
  <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
  <div class="header">
        <h2>Register</h2>
  </div>
        
  <form method="post" action="register.php" onsubmit = "RecordData()">
        <?php include('errors.php'); ?>
        <div class="input-group">
          <label>Username</label>
          <input type="text" name="username" id = "username" value="<?php echo $username; ?>">
        </div>
        <div class="input-group">
          <label>Email</label>
          <input type="email" name="email"  id = "email" value="<?php echo $email; ?>">
        </div>
        <div class="input-group">
          <label>Password</label>
          <input type="password" name="password_1"  id = "password"> 
        </div>
        <div class="input-group">
          <label>Confirm password</label>
          <input type="password" name="password_2"  id = "confirmpassword">
        </div>
        <div class="input-group">
          <button type="submit" class="btn" name="reg_user">Register</button>
        </div>
        <p>
                Already a member? <a href="login.php">Sign in</a>
        </p>
  </form>
 <script>

  function RecordData() {
 // Get form data
 var name = document.getElementById('username').value;
    var email = document.getElementById('email').value;
    var password = document.getElementById('password').value;
    var confirmpassword = document.getElementById('confirmpassword').value;

    // Save user data to local storage
    localStorage.setItem("username", name);
    localStorage.setItem("email", email);
    localStorage.setItem("password", password);
    localStorage.setItem("confirmpassword", confirmpassword);

    // Display success message (optional)
    alert('Registration Successful!');

  }
   
    // Redirect to another page (optional)
    // window.location.href = 'success.html';


 </script>
</body>
</html>