<?php
session_start();
?>
<!DOCTYPE html>
<html>

<head>
  <title>Register</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" type="text/css" href="../assets/css/style.css">
  <!-- <link rel="stylesheet" type="text/css" href="../assets/css/Login.css"> -->
  <style>
body {
  margin : 0px;
  padding : 0px;
  background-image : url('../assets/Picture/4.jpg');
  }
h1{
  color: dimgray;
  text-align : center;
  font-weight: bold;
}
#login_form{
  backface-visibility : hidden;
  box-shadow: 15px 15px 10px 10px rgba(0, 0, 0, 0.2);
  display: block;
  background-color: white;
  box-sizing : border-box;
  max-width : 600px;
  margin : auto;
  margin-top : 80px;
  justify-content: center;
  border : 1px solid white;
  border-radius: 20px;

}
#login_form form{
  padding : 50px;
  display: block;
  margin : auto;
}
#login_form input{
  width : 100%;
  /* background-color : #d1f6ff; */
  /* height : 25px; */
  font-size: medium;
  padding : 12px 20px;
  margin : 8px 0px;
  border: 1px solid #ccc;
  box-sizing: border-box;
  /* margin-bottom : 10px; */
  display: inline-block;
}
/* label{
  display: block;
} */
#btn {
  background-color : #c2cbdb;
  margin : 30px auto 0px auto;
  /* height: 30px !important; */
  align-items: center;
  text-align : center;
  font-weight: bold;
  font-size: large;
  /* max-width : 100px; */
}
#login_form a{
  text-decoration: none;
  float : right;
  color: brown;
}
  </style>
</head>

<body>
  <div id="login_form">
    <form action="<php echo htmlentities($_SERVER['PHP_SELF']); ?>" method="POST">
      <h1>Register</h1>
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
if ($_POST) {
  include 'config/connection.php';

  $username =  mysqli_real_escape_string($con, $_POST['fullname']);
  $mail = mysqli_real_escape_string($con, $_POST['email']);
  $mobnumber = mysqli_real_escape_string($con, $_POST['mobile']);
  $pass = mysqli_real_escape_string($con, $_POST['pass']);
  $repass = mysqli_real_escape_string($con, $_POST['conpass']);

  if ($pass == $repass) {
    $insertquery = "CALL UserGet()";
    $query1 = $mysqli->query($query);
    mysqli_query($z, $insertquery);
  } else {
  }

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