<!DOCTYPE html>
<html>
<head>

<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="../assets/css/style.css">
<link rel="stylesheet" type="text/css" href="../assets/css/newlogin.css">


<title>login</title>
</head>
<body>
  <div id = "login_form">
    <form action="/action.php">
      <h1>Login</h1>
      <label><strong>Username :</strong></label><br>
      <input type = "text" placeholder = "Username" name ="uname" required><br>
      <label><strong>Password :</strong></label><br>
      <input type = "text" placeholder = "Password" name ="pass" required><br>
      <input id = "btn" type = "submit" placeholder = "Login" name ="sumbmit">
      <a href="#">forget password ?</a>
    </form>
  </div>
</body>
<script type = "text/javascript" src = "../js/Login.js"></script>
</html>
