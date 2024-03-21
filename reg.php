<?php

include 'ndb.php';
$con=pg_connect("$host $port $dbname $cred");

$name =$_POST['name'];
$gender = $_POST['gen'];
$age = $_POST['age'];
$email = $_POST['email'];
$password = $_POST['pass'];
$phone = $_POST['phno'];
$city = $_POST['city'];
$bloodgrp = $_POST['blg'];

$str = "create table if not exists users(rname varchar, rgender varchar, rage int, remail varchar primary key, rpass varchar, rphone bigint unique, rcity varchar, rbloodgroup varchar,act varchar,status varchar);
INSERT INTO users VALUES ('$name', '$gender', $age, '$email', '$password', $phone, '$city', '$bloodgrp');";
$rs = pg_query($con, $str);
pg_close($con);

/**/
if(isset($_POST['submit']))
{
    header('Location: index.php');
}

?>