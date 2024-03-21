<?php
include 'ndb.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Admin | Blood Request</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>

<style>
  body{
    font-family: 'Times New Roman', Times, serif;
    background:linear-gradient(rgba(128,128,128,0.2),rgba(128,128,128,0.2));
  }
  header{
    background-color: darkslategrey;
    color: white;
    height: 100px;
    padding-top: 20px;
  }
  .col-md-2{
    background:linear-gradient(rgba(0,0,0,0.5),rgba(0,0,0,0.5)) , darkslategray;
    min-height: 650px;
    width: 15%;
   float: left;
  }
  .nav-link{
    color: whitesmoke;
  }
  .nav-link:hover{
    color:yellow;
    background-color: grey;
  }
  #v-pills-home-tab{
    background-color: darkgray;
  }
  .navbar-brand{
    color: white;
  }
  .navbar{
    background:linear-gradient(rgba(0,0,0,0.7),rgba(0,0,0,0.7)) , darkslategray;;
  }
  tr,td,th{
    border:2px black solid;border-collapse:collapse;text-align:center;
  }
  .op
  {
    text-decoration: none;
  }
  .btn-default{
    color: blue;
  }
</style>
</head>
<body>
    <header>
        <h1 class="text-center">Dāan  Administration </h1>
    </header>
    <div class="row text-center">
      <div class="col-md-2">
        <nav class="navbar"><a class="navbar-brand" href="#v-pills-home" style="text-align:center;"><img src="https://cdn-icons-png.flaticon.com/512/4088/4088680.png" width="30" height="30" style="margin:0 10px 0 60px;">Daan</a>  </nav>
        <div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
          <a class="nav-link" id="v-pills-settings-tab" data-toggle="pill" href="index.php" role="tab" aria-controls="v-pills-users" aria-selected="true">Users</a>
          <a class="nav-link" id="v-pills-profile-tab" data-toggle="pill" href="donapp.php" role="tab" aria-controls="v-pills-profile" aria-selected="false">Donation Appointment</a>
          <a class="nav-link" id="v-pills-messages-tab" data-toggle="pill" href="req.php" role="tab" aria-controls="v-pills-messages" aria-selected="false">Blood Requests</a>
          <a class="nav-link" id="v-pills-settings-tab" data-toggle="pill" href="org.php" role="tab" aria-controls="v-pills-settings" aria-selected="false">Camp Organizations</a>
          <a class="nav-link" name="logout" data-toggle="pill" href="logout.php" role="tab" aria-controls="v-pills-settings" aria-selected="false"><i class="fa fa-sign-out fa-xl"> Logout</i></a>
        </div>
      </div>

      <div class="col text-center" style="margin: 20px;">
        <div class="card" style="padding:20px;">
          <center>

          <h4>Manage Requests</h4>
          <hr class="solid">
          <form action="" method="post" style="float:right;padding:10px 40px 20px 0px;">
              <input type="text" name="search" placeholder="Search">
              <button type="submit" value="Search" class="btn btn-success"><i class="fa fa-search"></i></button>
          </form>

          <table style="width:95%;">
          <tr><th>Name</th><th>Request Type</th><th>Requestor</th><th>Blood Group needed</th><th>Email</th><th>Reason</th><th>Hb</th><th>Platelet</th><th>Plasma</th><th>Date of Requirement</th><th>Edit</th><th>Delete</th></tr>
            <?php
              $ret=pg_query($db,"select rname,rtype,rqtype,rblood,remail,rtrans,rhb,rpl,rpm,rdate from rf;");
                if(isset($_POST['search']))
                {
                    $sub=$_POST['search'];
                    $str="select rname,rtype,rqtype,rblood,remail,rtrans,rhb,rpl,rpm,rdate from rf where concat(rname,rtype,rqtype,rblood,remail,rdate,rtrans,rhb,rpl,rpm) like '%".$sub."%';";
                    $s=pg_query($db,$str);
                    while($row=pg_fetch_row($s))
                    {   
                      echo "<tr>
                      <td>".$row[0]."</td>
                      <td>".$row[1]."</td>
                      <td>".$row[2]."</td>
                      <td>".$row[3]."</td>
                      <td>".$row[4]."</td>
                      <td>".$row[5]."</td>
                      <td>".$row[6]."</td>
                      <td>".$row[7]."</td>
                      <td>".$row[8]."</td>
                      <td>".$row[9]."</td>
                      <td><form action='Operation/reqview.php' method='post'>
                      <button type='submit' class='btn btn-default' name='view' value='".$row[4]."'>View</button>
                      </form></td>
                      <td>
                      <form action='Operation/reqdel.php' method='post'>
                      <button type='submit' class='btn btn-default' name='del' value='".$row[4]."'>Delete</button>
                      </form>
                      </td></tr>";
                    }
                }
                else
                while($row=pg_fetch_row($ret))
                {
                   echo "<tr>
                   <td>".$row[0]."</td>
                   <td>".$row[1]."</td>
                   <td>".$row[2]."</td>
                   <td>".$row[3]."</td>
                   <td>".$row[4]."</td>
                   <td>".$row[5]."</td>
                   <td>".$row[6]."</td>
                   <td>".$row[7]."</td>
                   <td>".$row[8]."</td>
                   <td>".$row[9]."</td>
                   <td>
                   <form action='Operation/reqview.php' method='post'>
                   <button type='submit' class='btn btn-default' name='view' value='".$row[4]."'>View</button>
                   </form>
                   </td>
                   <td>
                   <form action='Operation/reqdel.php' method='post'>
                   <button type='submit' class='btn btn-default' name='del' value='".$row[4]."' >Delete</button>
                   </form>
                   </td></tr>";
                }
          ?>
          </table>
          </center>
        </div>
      </div>
              </body>
</html>