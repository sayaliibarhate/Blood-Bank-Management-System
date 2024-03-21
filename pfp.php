<?php 
include 'ndb.php';
error_reporting(0);
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Dāan | Profile</title>
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
<div class="tab-content" id="myTabContent0">
            <div class="tab-pane fade show active" id="home0" role="tabpanel" aria-labelledby="home-tab0">
        </div>
        <div class="tab-pane fade" id="profile0" role="tabpanel" aria-labelledby="profile-tab0">
            Tab 2 content
        </div>
        <div class="tab-pane fade" id="contact0" role="tabpanel" aria-labelledby="contact-tab0">
            Tab 3 content
        </div>
</div>
<a href="pfpdb.php" class="pen" style="color:black;"><i class="fa fa-pencil fa-2x" style="float:right;padding:25px 0;"></i></a>
                        <br><p>
    <div class="container" style="padding:0 17%;"><form action = "" method = "post">
                       
                        <div >
                            <div class="form-group">
                                Email:<br>
                                <br><input type="email" class="form-control" id="nm" value="<?php  $q=pg_query($db,"select remail from users where remail='".$_SESSION['uname']."';");while($row=pg_fetch_row($q))echo $row[0]; ?>" readonly>
                            </div></p>
                            <p>
                            <div style="width:40%;">
                        Blood Group:<br>
                        <br><input type="text" class="form-control" id="nm" value="<?php  $q=pg_query($db,"select rbloodgroup from users where remail='".$_SESSION['uname']."';");while($row=pg_fetch_row($q))echo $row[0]; ?>" readonly>
                    </div></p>
                    <p>
                        <div style="width:70%;">
                            Gender:<br>
                            <br><input type="text" class="form-control" id="nm" value="<?php  $q=pg_query($db,"select rgender from users where remail='".$_SESSION['uname']."';");while($row=pg_fetch_row($q))echo $row[0]; ?>" readonly>
                        </div></p>
                        <p>
                    <div style="width:70%;">
                        Location:<br>
                        <br><input type="text" class="form-control" id="nm" value="<?php $q=pg_query($db,"select rcity from users where remail='".$_SESSION['uname']."';");while($row=pg_fetch_row($q))echo $row[0]; ?>" readonly>
                    </div></p><p>
                        </div>
                        <div >
                            <div class="form-group">
                                Phone:<br>
                                <br><input type="text" class="form-control" id="nm" value="<?php  $q=pg_query($db,"select rphone from users where remail='".$_SESSION['uname']."';");while($row=pg_fetch_row($q))echo $row[0]; ?>" readonly>
                            </div>
                        </div></p>
                        <p>
                        <div style="width:60%;">
                            Preference type:<br>
                            <br><input type="text" class="form-control" id="nm" placeholder="Update Activity" value="<?php  $q=pg_query($db,"select act from users where remail='".$_SESSION['uname']."';");while($row=pg_fetch_row($q))echo $row[0]; ?>" readonly>
                        </div></p><p>
                        <div style="width:60%;">
                           Activity Status:<br>
                           <br><input type="text" class="form-control" id="nm" placeholder="Update Status" value="<?php  $q=pg_query($db,"select status from users where remail='".$_SESSION['uname']."';");while($row=pg_fetch_row($q))echo $row[0]; ?>" readonly>
                        </div></p>
                    <p style="font-size: 14px; color: red;">*Kindly update your preference and activity status time to time.</p><p>
                            <br><center >
                                <button type="button" id="submit" name="submit" class="btn btn-danger" onclick="location.href='logout.php'">Logout</button>
</center>
                    </form>
            </div></div>
            <?php //include 'footer.php'; ?>
    </body>
    
</html>

<style>
body{
    background-color: lightgrey;
    font-family: 'Times New Roman', Times, serif;
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

<!--<div class="row gutters">
                        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                            <div class="text-center">
                                <button class="btn" type="button" id="submit" name="submit">Cancel</button>
                                <button class="btn" type="button" id="reset" name="submit">Logout</button>
                            </div>
                        </div>
                    </div>-->