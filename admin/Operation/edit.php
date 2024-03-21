<?php 
session_start();
$host='host=127.0.0.1';
$port='port=5432';
$dbname='dbname=postgres';
$cred='user=postgres password=pgsql12';
$db=pg_connect("$host $port $dbname $cred");

        if(isset($_POST['edit']))
        {
            $bg=$_POST['bg'];
          $cen=$_POST['centre'];
          $date=$_POST['date'];
          $city=$_POST['ct'];
          $hist=$_POST['medhist'];

          $str="update df set dbg='".$bg."',dcentre='".$cen."',ddate='".$date."',dcity='".$city."',dmedhist='".$hist."' where demail='".$_SESSION['id']."';";
          $res=pg_query($db,$str);
          if(!$res)
          {
            echo "Could not update record";
          }
          else
          {   
            header('Location: /Bbms/admin/donapp.php');
          }      
        }
      pg_close($db);
      ?>