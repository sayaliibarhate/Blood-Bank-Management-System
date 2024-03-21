<?php 
session_start();
$host='host=127.0.0.1';
$port='port=5432';
$dbname='dbname=postgres';
$cred='user=postgres password=pgsql12';
$db=pg_connect("$host $port $dbname $cred");

        if(isset($_POST['edit']))
        {
            $rtype=$_POST['rt'];
            $bg=$_POST['bg'];
          $hb=$_POST['hb'];
          $pl=$_POST['pl'];
          $ps=$_POST['pm'];
          $date=$_POST['date'];

          $str="update rf set rtype='".$rtype."',rblood='".$bg."',rhb=".$hb.",rpl=".$pl.",rpm=".$ps.",rdate='".$date."' where remail='".$_SESSION['id']."';";
          $res=pg_query($db,$str);
          if(!$res)
          {
            echo "Could not update record";
          }
          else
          {   
            header('Location: /Bbms/admin/req.php');
          }      
        }
      pg_close($db);
      ?>