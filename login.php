<?php
include 'ndb.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Login</title>
    <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>

  <link rel="icon" type="image/x-icon" href="favicon.ico">

  <style>
h1
{
color:#C62F2F;
padding-top: 30px;
}
h4{
    color: #777777;
}
input[type=submit]
{
background: linear-gradient(to right,#cc7e82, #c20e17);
color:ghostwhite;
border-radius: 5px;
border: 0px;
height: 35px;
width: 180px;
text-align:center;
text-decoration: none;
margin-top: 10px;
}

input[type=submit]:hover
{
    background-color: #830c0c;
    border: 0px;
    color:ghostwhite;
}

.fcontrol
{
    border-radius: 2px;
   border-style: none;
   border-bottom: 1px black solid;
   margin-left: 40px;
   padding: 10px;
}
input[type=email]:focus ,input[type=password]:focus
{
    border: 1px gray solid;
}
label {
    margin-left: 35px;
width: 100px;
font-size: large;
}

body
{
    background:linear-gradient(to right,rgb(139,0,0,0.4),rgb(139,0,0,0.4)) ,url('https://static.vecteezy.com/system/resources/thumbnails/003/354/623/small_2x/red-gradient-papercut-background-pastel-red-colors-with-shiny-effect-free-vector.jpg');
    font-family: 'Times New Roman', Times, serif;
    background-size:cover;
}

.card
{
height: 570px;
width: 450px;
border-radius: 20px;
margin:0%;
margin-left: auto;
margin-right: auto;
margin-top: 100px;
margin-bottom: auto;
padding:20px;
background-color: #ffffff;
box-shadow: 3px 5px 10px rgb(73, 73, 73);
}

</style>
<script type="text/javascript">
  function formvalidate(thisform)
  {
  	var email=thisform.value.value;
  	var pass=thisform.pass.value;
  	if(email==null || email=="")
  	{
  		alert("Please enter your Email!");
  		thisform.value.focus();
  		return false;
  	}
  	else if(email.length<15)
  	{
  		alert("Email must contains atleast 6 characters!");
  		thisform.value.focus();
  		return false;
  	}
  	else if(pass==null || pass=="")
  	{
  		alert("Please enter your password!");
  		thisform.pass.focus();
  		return false;
  	}
  	else if(pass.length<6)
  	{
  		alert("Password must contains atleast 6 characters!");
  		thisform.pass.focus();
  		return false;
  	}
  	else
  	{
  		alert("Login Succesfull!");
  	}
  	return true;
  }
</script>
</head>
<body>
<div class = "container-fluid">
<div class="card border-dark">
<form action = "logindb.php" method = "post" onsubmit="return formvalidate(this)">
<center><p><h1>Login</h1></p>
<p ><h4><u>Welcome back!</u></h4></p></center>

 <label style="margin-top: 20px;"><br><b>E-mail:</b><font color="#ff2600"><sup>*</sup></font> </label>
 <input type = "email" class="fcontrol" placeholder = "Registered e-mail" name = "value" > <br><br>
 

 <label><br><b> Password:<font color="#ff2600"><sup>*</sup></font></b></label>
 <input type = "password" class="fcontrol" placeholder = "Enter strong password" name = "pass"> <br><br>
 
<br><center><input type = "submit" class = "button" name = "submit" value = "Log in"></center><br><br>
<center><p>Not a member? <a href="regi.php">Register</a></p></center>
</form>
</div>

</div>
</body>
</html>