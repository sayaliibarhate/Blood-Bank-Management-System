<?php 
$host='host=127.0.0.1';
$port='port=5432';
$dbname='dbname=postgres';
$cred='user=postgres password=pgsql12';
$db=pg_connect("$host $port $dbname $cred");

if(isset($_POST['del']))
{
    $id=$_POST['del'];
    $str="delete from org where email='".$id."';";
    $q=pg_query($db,$str);
    if(!$q)
    {
        echo "Query not deleted";
    }
    else
    {
        header('Location: /Bbms/admin/org.php');
    }
}
pg_close($db);
?>