<!DOCTYPE html>
<html>
<head>

<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="../assets/css/style.css">


<title>login</title>
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
