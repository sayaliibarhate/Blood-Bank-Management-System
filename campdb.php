<?php
include 'ndb.php';

$name=$_POST['name'];
$Email=$_POST['Email'];
$Phone=$_POST['Phone'];
$org=$_POST['org'];
$city=$_POST['city'];

$str="Create table if not exists org(name varchar,email varchar,mob bigint,orgname varchar,city varchar);
insert into org values('$name','$Email',$Phone,'$org','$city');";

$q=pg_query($db,$str);
if($q)
{
	echo "Query Executed!";
      echo "<script>window.alert('Your Request has been generated!');</script>";
      header('Location: index.php');
}
else
echo "Error executing query";
/*
$ret=pg_query($db,"select * from org;");
echo "<center>";
echo "<table border=1 style=text-align:center;border-collapse:collapse;width:80%>";
echo "<tr>
       <td><b>Name</b></td>
       <td><b>Email</b></td>
       <td><b>Mobile Number</b></td>
       <td><b>Organization Name</b></td>
       <td><b>city</b></td>
      </tr>";

while($row=pg_fetch_row($ret))
{
	echo "<tr><td>".$row[0]."</td><td>".$row[1]."</td><td>".$row[2]."</td><td>".$row[3]."</td><td>".$row[4]."</td></tr>";
		
}
echo "</table>";

/*create table org(name varchar,email varchar primary key,mob bigint,orgname varchar,city varchar);*/
pg_close($db);
?>