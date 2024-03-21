<!DOCTYPE html>
<html lang="en">
<head>
  <title>Registration</title>
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
font-family:Sans-serif;
}

h4{
    padding-top: 15px;
    font-size: 17px;
    color: #777777;
    text-align: center;
}

input[type=submit]
{
background-color: #C62F2F;
color:ghostwhite;
border-radius: 5px;
border: 0px;
height: 35px;
width: 100px;
text-align:center;
text-decoration: none;
}

input[type=submit]:hover
{
    background-color: #830c0c;
    border: 0px;
    color:ghostwhite;
}

input[type=text], input[type=password], input[type=email], input[type=text], input[type=number], input[type=tel], select[name=blg]
{
  border-width: 0 0 1px;
  border-color: rgb(0, 0, 0);
  width: 100%;
}
input[type=text]:focus, input[type=password]:focus, input[type=email]:focus, input[type=text]:focus, input[type=number]:focus, input[type=tel]:focus, select[name=blg]:focus
{
    background-color: #f0f0f0;
    color: #000;
}

label 
{
width: 170px;
font-size: medium;
font-family: sans-serif;
}
.card
{
    resize: both;
height: 80%;
width: 45%;
/*min-width: fit-content;*/
border-radius: 10px;
border-bottom: 20px white;
margin:0%;
margin-left: auto;
margin-right: auto;
margin-top: 30px;
margin-bottom: auto;
padding-top:25px;
background: #ffffff;
box-shadow: 3px 5px 10px rgb(7, 7, 7);
padding-bottom: 50px;
}

.ip{margin-top: 60px;}
</style>
</head>
<body>
  <?php include 'header.php'; ?>
<div class = "container-fluid" style="background-color:lightgrey;height: 100%;/*min-height:130vh;min-width: 200vh;*/min-height: 60%; min-width: 90%;background-repeat: no-repeat;background-size: 100% 100%;padding:50px 0;">
<div class="card" >
<p><h1><center> Registration </center></h1>
<p><h4>Welcome! Enter your details below to create an account.</h4></p></center>
<table style="margin:auto;margin-top:20px;width:65%;">
<form action = "reg.php" method = "post">
<tr><td>
<br><label><b> Full Name<font color="#ff2600" size="+0"><sup>*</sup></font> </b></label></td>
<td class="ip">
<input type = "text" placeholder = "First Middle Last" name = "name" required><br><br> </td></tr>
 
<tr><td>
<br><label><b> Gender<font color="#ff2600" size="+0"><sup>*</sup></font>:&nbsp; &nbsp; </b></label></td><td class="ip">
<input type = "radio" name = "gen" value = "Female"> Female 
<input type = "radio" name = "gen" value = "Male"> Male 
<input type = "radio" name = "gen" value = "Other"> Other <br><br> </td></tr>

<tr><td>
 <br><label><b> Age<font color="#ff2600" size="+0"><sup>*</sup></font>:&nbsp; &nbsp; </b></label></td><td class="ip">
 <input type = "number" placeholder="eg., 21" min="18" max="75" name = "age" required><br><br> </td></tr>

<tr><td>
 <br><label><b> E-mail id<font color="#ff2600" size="+0"><sup>*</sup></font>:&nbsp; &nbsp; </b></label> </td><td class="ip">
 <input type = "email" placeholder = "abc@gmail.com" name = "email" required> <br><br></td></tr>
 
<tr><td>
 <br><label><b> Password<font color="#ff2600" size="+0"><sup>*</sup></font>:&nbsp; &nbsp; </b></label> </td><td class="ip">
 <input type = "password" placeholder = "Enter strong password" name = "pass" required> <br><br></td></tr>

<tr><td>
 <br><label><b> Mobile no<font color="#ff2600" size="+0"><sup>*</sup></font>:&nbsp; &nbsp; </b></label></td><td class="ip">
 <input type = "tel" placeholder="Enter valid number" name = "phno" required> <br><br></td></tr>

 <tr><td>
 <br><label><b>City<font color="#ff2600" size="+0"><sup>*</sup></font>:&nbsp; &nbsp;</b></label></td><td class="ip">
 <input type = "text" placeholder = "eg., Pune" name = "city" required><br><br> </td></tr>

<tr><td>
<br><label><b> Blood-group<font color="#ff2600" size="+0"><sup>*</sup></font>:&nbsp; &nbsp; </b></label> </td><td class="ip">
<select name= "blg" >
<option> A+</option> 
<option> B+ </option>
<option> AB+ </option>
<option> O+ </option>
<option> A- </option>
<option> B- </option> 
<option> AB- </option> 
<option> O- </option></select><p></p></td></tr></table>

<br><br><center><input type = "submit" class = "button" name = "submit" value = "Sign Up"></center><p>
</form>
<br><center>Already a member? <a href="login.php">Log in</a></center>
</div>
</div>
<?php include 'footer.php'; ?>
</body>
</html>