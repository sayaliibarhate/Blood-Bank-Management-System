<?php
session_start();
$_SESSION['id']=$_POST['view'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Admin|Donation Appointment</title>
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
  .op
  {
    text-decoration: none;
  }
  th,td{
    padding: 10px;
  }
  input{
    border: none;
    border-bottom: 1px grey solid;
  }
  .btn-default{
    color: blue;
  }
</style>
</head>
<body>
<header>
        <h1 class="text-center">Dāna  Administration </h1>
    </header>
    <div class="row">
      <div class="col-md-2 text-center">
        <nav class="navbar"><a class="navbar-brand" href="#v-pills-home" style="text-align:center;"><img src="https://cdn-icons-png.flaticon.com/512/4088/4088680.png" width="30" height="30" style="margin:0 10px 0 60px;">Daan</a>  </nav>
        <div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
          <a class="nav-link" id="v-pills-settings-tab" data-toggle="pill" href="aindex.php" role="tab" aria-controls="v-pills-users" aria-selected="true">Users</a>
          <a class="nav-link" id="v-pills-profile-tab" data-toggle="pill" href="/Bbms/admin/donapp.php" role="tab" aria-controls="v-pills-profile" aria-selected="false">Donation Appointment</a>
          <a class="nav-link" id="v-pills-messages-tab" data-toggle="pill" href="#v-pills-messages" role="tab" aria-controls="v-pills-messages" aria-selected="false">Blood Requests</a>
          <a class="nav-link" id="v-pills-settings-tab" data-toggle="pill" href="#v-pills-settings" role="tab" aria-controls="v-pills-settings" aria-selected="false">Camp Organizations</a>
          <a class="nav-link" name="logout" data-toggle="pill" href="logout.php" role="tab" aria-controls="v-pills-settings" aria-selected="false"><i class="fa fa-sign-out fa-xl"> Logout</i></a>
        </div>
      </div>
      <div class="col text-center" style="margin: 20px;">
      <div class="card" style="padding:20px;">
        <center>

        <h4>View Appointment</h4>
<hr class="solid"></center>
<?php
$host='host=127.0.0.1';
$port='port=5432';
$dbname='dbname=postgres';
$cred='user=postgres password=pgsql12';
$db=pg_connect("$host $port $dbname $cred");

if(isset($_POST['view']))
{
   $ide=$_POST['view'];
    $str="select dname,dage,dbg,demail,dcentre,dcity,ddate,dmedhist from df where demail='".$ide."';";
    $q=pg_query($db,$str);
    while($row=pg_fetch_row($q))
    {
      echo "<p>Name: ".$row[0]."<br>";
	    echo "Age: ".$row[1]."<br>";
	    echo "Blood Group: ".$row[2]."<br>";
      echo "Email: ".$row[3]."<br>";
      echo "Center: ".$row[4]."<br>";
      echo "City: ".$row[5]."<br>";
	    echo "Date: ".$row[6]."<br>";
      echo "Medical History: ".$row[7]."<br>";
    }
}
?>
      </div>
      <div class="card" style="margin-top: 20px;padding:20px;">
      <center>
        <h4>Edit Appointment</h4>
        <hr class="solid"></center>
    <div class="container" >

    <table style="width:auto;margin:auto">
        <form action="edit.php" method="post">
          <tr><th>Blood Group: </th><td>
         <select name="bg" class="form-control" >
          <option value="">Select Blood Group</option>
          <option value="A+">A+</option>
          <option value="A-">A-</option>
          <option value="B+">B+</option>
          <option value="B-">B-</option>
          <option value="O+">O+</option>
          <option value="O-">O-</option>
          <option value="AB+">AB+</option>
          <option value="AB-">AB-</option>
        </select></td></tr>
           <tr><th>Center:</th><td><select name="centre" class="form-control"  >
          <option value="">Select centre</option>
          <option value="Red Plus Blood">Red Plus Blood</option>
          <option value="Janakalyan Blood Bank">Janakalyan Blood Bank</option>
          <option value="Serological Institute Blood Bank">Serological Institute Blood Bank</option>
          <option value="Sanjeevani Blood Bank">Sanjeevani Blood Bank</option>
          <option value="Sasoon General Blood Bank">Sasoon General Blood Bank</option>
          <option value="Pune Blood Bank">Pune Blood Bank</option>
          <option value="Star Blood Bank">Star Blood Bank</option>
          <option value="Noble Blood Bank">Noble Blood Bank</option>
          <option value="Blood Donation Centre">Blood Donation Centre</option>
          <option value="Labtech Diagnostic Services">Labtech Diagnostic Services</option>
          <option value="Swami Vivekanand Blood Bank">Swami Vivekanand Blood Bank</option>
          <option value="Girija Blood Bank">Girija Blood Bank</option>
          <option value="MGM Hospital Blood Bank">MGM Hospital Blood Bank</option>
          <option value="Pune Red Cross Society">Pune Red Cross Society</option>
        </select></td></tr>
            <tr><th>Date:</th><td><select name="date" class="form-control"  >
          <option value="">Select date</option>
          <option value="2/4/2023">2/4/2023</option>
          <option value="2/4/2023">2/4/2023</option>
          <option value="14/4/2023">14/4/2023</option>
          <option value="20/4/2023">20/4/2023</option>
          <option value="26/4/2023">26/4/2023</option>
          <option value="1/5/2023">1/5/2023</option>
          <option value="6/5/2023">6/5/2023</option>
          <option value="12/5/2023">12/5/2023</option>
          <option value="18/5/2023">18/5/2023</option>
          <option value="24/5/2023">24/5/2023</option>
          <option value="30/5/2023">30/5/2023</option>
          <option value="1/6/2023">1/6/2023</option>
          <option value="6/6/2023">6/6/2023</option>
          <option value="12/6/2023">12/6/2023</option>
        </select></td></tr>
            <tr><th>City:</th><td><input type="text" name="ct"></td></tr>
            <tr><th>Medical History:</th><td><input type="text" name="medhist"></td></tr>
            </table>
            <input type="submit" value="Submit" name="edit" class="btn btn-success text-center" style="width:70px;margin:20px 0 20px 70px;">
        </form>
        </div>
      </div>
      
      </div>
    </div>
</body>
</html>