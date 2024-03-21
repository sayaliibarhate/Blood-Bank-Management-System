<?php
include 'ndb.php';
/*if(!$db)
{
	echo "Connection not established";
}
else
echo "Connection is established<p>";*/

$name=$_POST['name'];
$age=$_POST['age'];
$acard=$_POST['acard'];
$gender=$_POST['g'];
$bg=$_POST['bg'];
$mob=$_POST['mob'];
$email=$_POST['email'];
$pcode=$_POST['pcode'];
$addr=$_POST['addr'];
$state=$_POST['state'];
$city=$_POST['city'];
$threem=$_POST['ll'];
$bloodd=$_POST['ww'];
$medhist=$_POST['mh'];
$other=$_POST['other'];
$ht=$_POST['tt'];
$hy=$_POST['ty'];
$centre=$_POST['centre'];
$date=$_POST['date'];
$time=$_POST['time'];

$str="create table if not exists df(dname varchar,dage int,dacard bigint,dgender varchar,dbg varchar,dmob bigint,demail varchar,dpcode bigint,daddr varchar,dstate varchar,dcity varchar,dlastdonation varchar,ddonationwhenwhere varchar,dmedhist varchar,dother varchar,dtattoo varchar,dtattoohhist varchar,dcentre varchar,ddate varchar,dtime varchar);";
$query=pg_query($db,$str);
if($email==$_SESSION['uname'])
{
      $strr="insert into df values('$name',$age,$acard,'$gender','$bg',$mob,'$email',$pcode,'$addr','$state','$city','$threem','$bloodd','$medhist','$other','$ht','$hy','$centre','$date','$time'); ";
      $q=pg_query($db,$strr);
      if($q)
      {
            echo "<script>window.alert('Appointment has been booked!');</script>";
            echo "<script>location.href='pfp.php'</script>";
      }
}
else
echo "<script>alert('Login to submit the Application.')</script>";
echo "<script>location.href='login.php'</script>";
/*
$ret=pg_query($db,"select * from df;");
echo "<center>";
echo "<table border=1 style=text-align:center;border-collapse:collapse;width:auto>";
echo "<tr>
       <td><b>Name</b></td>
       <td><b>Age</b></td>
       <td><b>Adhar Card Number</b></td>
       <td><b>Gender</b></td>
       <td><b>Blood Group</b></td>
       <td><b>Mobile Number</b></td>
       <td><b>Email</b></td>
       <td><b>State</b></td>
       <td><b>City</b></td>
       <td><b>Address</b></td>
       <td><b>Pincode</b></td>
       <td><b>Blood donated in the last three months</b></td>
       <td><b>When and where the blood is donated</b></td>
       <td><b>Medical History</b></td>
       <td><b>Other Medical Issues</b></td>
       <td><b>Have Tattoo</b></td>
       <td><b>Years since last tattoo</b></td>
       <td><b>Centre</b></td>
       <td><b>Date</b></td>
       <td><b>Time</b></td>
      </tr>";

while($row=pg_fetch_row($ret))
{
	echo "<tr><td>".$row[0]."</td><td>".$row[1]."</td><td>".$row[2]."</td><td>".$row[3]."</td><td>".$row[4]."</td><td>".$row[5]."</td><td>".$row[6]."</td><td>".$row[7]."</td><td>".$row[8]."</td><td>".$row[9]."</td><td>".$row[10]."</td><td>".$row[11]."</td><td>".$row[12]."</td><td>".$row[13]."</td><td>".$row[14]."</td><td>".$row[15]."</td><td>".$row[16]."</td><td>".$row[17]."</td><td>".$row[18]."</td><td>".$row[19]."</td></tr>";
		
}
echo "</table>";

/*create table df(dname varchar,dage int,dacard bigint,dgender varchar,dbg varchar,dmob bigint,demail varchar,dstate varchar,dcity varchar,daddr varchar,dpcode bigint,dlastdonation varchar,ddonationwhenwhere varchar,dmedhist varchar,dother varchar,dtattoo varchar,dtattoohhist varchar);*/
pg_close($db);
?>