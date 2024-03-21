<?php 
include 'ndb.php';
?>
<!DOCTYPE html>
<html>
    <head>
        <title> Edit Profile</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
         <!--font awesome-->
         <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css" 
         integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ==" 
         crossorigin="anonymous" referrerpolicy="no-referrer"/>
        <!--Bootstrap for responsive webpage-->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
  <link rel="icon" type="image/x-icon" href="favicon.ico">
    </head>
    <body>
        <div class="container-fluid" style="background:linear-gradient(rgb(0, 0, 0,0.5),rgb( 0, 0, 0,0.6)),url(https://designshack.net/wp-content/uploads/background-textures.png) no-repeat;background-size:cover;height:350px;">
        <ul>
            <li><a class="active" href="index.php">Home</a></li>
            <li><a href="blog.php">Blog</a></li>
            <li><a href="about.php">About</a></li>
            <li><a href="contactus.php">Contact us</a></li>
        </ul>    
        <div style="color:white;font-size:40px;padding:230px 0 0 80px;"><i class="fa fa-user-circle" style="margin-right: 15px;"></i>
                    <?php $q=pg_query($db,"select rname from users where remail='".$_SESSION['uname']."';"); 
                    while($row=pg_fetch_row($q))
                    echo $row[0]; 
                    ?></div>
        </div>
           
        <div class="card" style="margin:80px;padding:80px;">
        <ul class="nav nav-tabs mb-3" id="myTab0" role="tablist" style="margin:-140px 0 0 -80px;">
            <li class="nav-item" role="presentation">
                <a href="pfp.php"  class="nav-link active" id="home-tab0" data-mdb-toggle="tab" data-mdb-target="#home0" type="button" role="tab" aria-selected="true"> Personal Details </a>
            </li>
            <li class="nav-item" role="presentation" >
                <a href="papphist.php" class="nav-link" id="profile-tab0" data-mdb-toggle="tab" data-mdb-target="#profile0" type="button" role="tab"  aria-selected="false"  style="color:darkred;"> Appointment History </a>
            </li>
            <li class="nav-item" role="presentation">
                <a href="preq.php" class="nav-link" id="contact-tab0" data-mdb-toggle="tab" data-mdb-target="#contact0" type="button" role="tab"  aria-selected="false"  style="color:darkred;"> Blood Requests </a>
            </li>
        </ul>
<p><h2 class="display-5 text-center">Edit Profile</h2></p>
    <div class="container"><form action = "" method = "post" >
                        <br>
                        Name:<br>
                        <br><input type="text" class="form-control" id="nm" name="name">
                   <p>
                    <div >
                        Location:<br>
                        <br><input type="text" class="form-control" id="nm" name="loc">
                    </div></p>
                    <p>
                        <div>
                            <div class="form-group">
                                Phone:<br>
                                <br><input type="tel" class="form-control" id="nm" name="mob">
                            </div>
                        </div></p>
                        <p>
                        <div style="width:60%;">
                            Preference type:<br>
                            <br><select name="act" class="form-control">
                            <option value="">-- Select activity</option>        
                            <option value="Donor">Donor</option>
                                    <option value="Receiver">Receiver</option>
                                </select>
                        </div></p><p>
                        <div style="width:60%;">
                           Activity Status:<br>
                           <br><select name="status" class="form-control">
                           <option value="">-- Select Status</option>
                                    <option value="Active">Active</option>
                                    <option value="Inactive">Inactive</option>
                                </select>
                        </div></p><br><br>
                            <center>    <input type="submit" value="Update" name="submit" class="btn btn-danger"></center>
                    </form>
            </div></div>
            <?php //include 'footer.php'; ?>
    </body>
    
</html>

<style>
    .container{width:60%;}
body{
    background-color: lightgrey;
}
.nav-link:hover
{
    background-color: white;
}
.pen:hover .fa:hover
{
    color:blue;
}
.form-control
{
    border-bottom:2px darkred solid;
}
/*Navigation bar*/  ul 
{
            list-style-type: none;
            width: 505px;
            margin: 0;
            padding:20px 0 0 0;
            overflow: hidden;
            float:right;
        }
        li{
            float: left;
        }
        li a 
        {
            font-size: large;
            display: block;
            text-align: center;
            padding: 22px 28px 0;
            text-decoration: none;
            color: whitesmoke;
        }
        a:hover{color:yellow;}
        .active {
              color: white;
            }
            header{
                margin-bottom: 20px;
            }
</style>

<?php
        if(isset($_POST['submit']))
        {
            $name=$_POST['name'];
            $loc=$_POST['loc'];
          $mob=$_POST['mob'];
          $activity=$_POST['act'];
          $stat=$_POST['status'];

          $str="update users set rname='".$name."', rcity='".$loc."',rphone='".$mob."',act='".$activity."',status='".$stat."' where remail='".$_SESSION['uname']."';";
          $res=pg_query($db,$str);
          if(!$res)
          {
            echo "<script>alert('Could not update record')</script>";
          }
          else
          {   
            echo "<script>alert('Information Updated!');location.href='pfp.php'</script>";
          }      
        }
      pg_close($db);
      ?>