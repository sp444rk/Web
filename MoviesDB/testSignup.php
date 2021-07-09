<?php session_start();?>
<!DOCTYPE html>
<html lang="en">
<style>
body {font-family: Arial, Helvetica, sans-serif;}
* {box-sizing: border-box}

/* Full-width input fields */
input[type=text], input[type=password] {
  width: 100%;
  padding: 15px;
  margin: 5px 0 22px 0;
  display: inline-block;
  border: none;
  background: #f1f1f1;
}

input[type=text]:focus, input[type=password]:focus {
  background-color: #ddd;
  outline: none;
}

hr {
  border: 1px solid #f1f1f1;
  margin-bottom: 25px;
}

/* Set a style for all buttons */
button {
  background-color: #4CAF50;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 100%;
  opacity: 0.9;
}

button:hover {
  opacity:1;
}

/* Extra styles for the cancel button */
.cancelbtn {
  padding: 14px 20px;
  background-color: #f44336;
}

/* Float cancel and signup buttons and add an equal width */
.cancelbtn, .signupbtn {
  float: left;
  width: 50%;
}

/* Add padding to container elements */
.container {
  padding: 16px;
}

/* Clear floats */
.clearfix::after {
  content: "";
  clear: both;
  display: table;
}

/* Change styles for cancel button and signup button on extra small screens */
@media screen and (max-width: 300px) {
  .cancelbtn, .signupbtn {
     width: 100%;
  }
}
</style>
<body>

  <div class="container">
    <h1>Sign Up</h1>
    <p>Please fill in this form to create an account.</p>
    <hr>
      <form action="responseSignup.php" method="post">

          <label for="email"><b>Email</b></label>
          <label>
              <input type="text" placeholder="Enter Email" name="email" required>
          </label>

          <label for="uname"><b>Username</b></label>
          <?php
          set_error_handler(function() { /* ignore errors */ });
          if ($_SESSION["errname"] == 1) {
              $_SESSION["errname"] = null;
              echo 'This username already exists. Please try again!';
          }
          restore_error_handler();
          ?>
          <label>
              <input type="text" placeholder="Enter a username" name="uname" required>
          </label>


          <label for="psw"><b>Password</b></label>
          <?php
          set_error_handler(function() { /* ignore errors */ });
          if ($_SESSION["signupflag"] == 1) {
              $_SESSION["signupflag"] = null;
              echo 'Mismatch password. Please try again';
          }
          restore_error_handler();
          ?>
          <label>
              <input type="password" placeholder="Enter Password" name="psw" required>
          </label>


          <label for="psw-repeat"><b>Repeat Password</b></label>
          <label>
              <input type="password" placeholder="Repeat Password" name="psw-repeat" required>
          </label>
          <label>
              <input type="checkbox" checked="checked" name="remember" style="margin-bottom:15px"> Remember me
          </label>
    
    <p>By creating an account you agree to our <a href="#" style="color:dodgerblue">Terms & Privacy</a>.</p>

    <div class="clearfix">
        <button type="submit" class="signupbtn">Sign Up</button>
      </form>
        <form action="Home.php" >
            <button type="submit" class="cancelbtn">Cancel</button>
        </form>
    </div>


</body>
</html>
