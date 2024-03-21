<?php
include 'ndb.php';
if(!$db)
{
	echo "Connection not established";
}
else
echo "Connection is established<p>";

$rtype=$_POST['rt'];
$rqtype=$_POST['rqt'];
$bg=$_POST['bg'];
$name=$_POST['name'];
$age=$_POST['age'];
$gender=$_POST['g'];
$mob=$_POST['mob'];
$email=$_POST['email'];
$clinicaldiag=$_POST['cd'];
$opprocedure=$_POST['op'];
$rtrans=$_POST['rtrans'];
$pt=$_POST['pt'];
$transh=$_POST['transh'];
$ph=$_POST['ph'];
$date=$_POST['date'];
$time=$_POST['time'];
$hb=$_POST['hb'];
$pl=$_POST['pl'];
$pm=$_POST['pm'];

$str=" create table if not exists rf(rname varchar,rage int,rtype varchar,rqtype varchar,rblood varchar,rgender varchar,rmob bigint,remail varchar, rclinicaldiag varchar,ropprocedure varchar,rtrans varchar,rprevtrans varchar,rtranshist varchar,rpreghist varchar,rdate date,rtime bigint,rhb float,rpl float,rpm float);";
$query=pg_query($db,$str);
if($email==$_SESSION['uname'])
{
      $strr="insert into rf values('$name',$age,'$rtype','$rqtype','$bg','$gender',$mob,'$email','$clinicaldiag','$opprocedure','$rtrans','$pt','$transh','$ph','$date',$time,$hb,$pl,$pm); ";
      $q=pg_query($db,$strr);
      if($q)
      {
            echo "<script>window.alert('Request has been created!');</script>";
            echo "<script>location.href='pfp.php'</script>";
      }
}
else
echo "<script>alert('Login to create the request.')</script>";
echo "<script>location.href='login.php'</script>";

pg_close($db);
?>