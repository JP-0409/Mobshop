<?php
session_start();
?>
<!DOCTYPE html>
<html>

<head>
  <title>Register</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" type="text/css" href="css/style.css">
  <link rel="stylesheet" type="text/css" href="css/Login.css">
  <style>

  </style>
</head>

<body>
  <div id="login_form">
    <form action="<?php echo htmlentities($_SERVER['PHP_SELF']); ?>" method="POST">
      <h2>Register</h2>
      <label for="fname"><strong>Full Name :</strong></label><br>
      <input type="text" placeholder="full-name" name="fullname" required><br>
      <label for="mname"><strong>Mobile No :</strong></label><br>
      <input type="text" placeholder="Mobile-no" name="mobile" required><br>
      <label for="lname"><strong>E-Mail :</strong></label><br>
      <input type="text" placeholder="E-Mail" name="email" required><br>
      <label for=uname><strong>User Name :</strong></label><br>
      <input type="text" placeholder="User-Name" name="username" required><br>
      <label for="psw"><strong>Password :</strong></label><br>
      <input type="password" placeholder="Password" name="pass" required><br>
      <label for="psw"><strong>Confirm Password :</strong></label><br>
      <input type="password" placeholder="Confirm-Password" name="conpass" required><br>
      <input id="btn" type="submit" placeholder="Login" name="submit">
      <a href="#">alreay have account ? login</a>
    </form>
  </div>
</body>
<script type="text/javascript" src="js/Login.js"></script>

</html>
<?php
include 'config/connection.php';
if ($_POST) {

  $username =  mysqli_real_escape_string($con, $_POST['fullname']);
  $mail = mysqli_real_escape_string($con, $_POST['email']);
  $mobnumber = mysqli_real_escape_string($con, $_POST['mobile']);
  $pass = mysqli_real_escape_string($con, $_POST['pass']);
  $repass = mysqli_real_escape_string($con, $_POST['conpass']);

  $pas = password_hash($pass, PASSWORD_BCRYPT);
  $cpas = password_hash($repass, PASSWORD_BCRYPT);

  $emailquery = " select * from user where email='$mail'";
  $query = mysqli_query($con, $emailquery);
  $emailcount = mysqli_num_rows($query);

  if ($emailcount > 0) {
?>
    <script>
      alert("email already exists");
    </script>
    <?php
  } else {
    if ($pass === $repass) {
      $insertquery = "insert into user(fullname,email,mobile,pass,confirmpass)
     values('$username','$mail','$mobnumber','$pas','$cpas')";
      $query1 = mysqli_query($con, $insertquery);
      if ($query1) {
    ?>
        <script>
          alert("inserted successful");
        </script>
      <?php
      } else {

      ?>
        <script>
          alert("no connection");
        </script>
      <?php
      }
    } else {
      ?>
      <script>
        alert("password are not matching");
      </script>
<?php

    }
  }
}

?>