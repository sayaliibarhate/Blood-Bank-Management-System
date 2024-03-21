<?php 
include 'ndb.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Profile</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">

 
</head>
<?php
$val = $_POST["value"];
$pass = $_POST["pass"];

$str = "select * from users where remail='".$val."';";
$ret = pg_query($db, $str);
while($row=pg_fetch_row($ret))
{
   if($val==$row[3]&&$pass==$row[4])
   {
      $_SESSION['uname']=$val;
      echo "<script>alert('Login Successsful!');location.href='pfp.php'</script>";
   }
   else
   echo "<script>alert('User does not exist!');location.href='login.php'</script>";
}
pg_close($db);
?>
</html>