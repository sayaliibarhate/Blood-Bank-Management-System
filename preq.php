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
                <a href="pfp.php"  class="nav-link" id="home-tab0" data-mdb-toggle="tab" data-mdb-target="#home0" type="button" role="tab" aria-selected="true"> Personal Details </a>
            </li>
            <li class="nav-item" role="presentation" >
                <a href="papphist.php" class="nav-link " id="profile-tab0" data-mdb-toggle="tab" data-mdb-target="#profile0" type="button" role="tab"  aria-selected="false"  style="color:darkred;"> Appointment History </a>
            </li>
            <li class="nav-item" role="presentation">
                <a href="preq.php" class="nav-link active" id="contact-tab0" data-mdb-toggle="tab" data-mdb-target="#contact0" type="button" role="tab"  aria-selected="false"  style="color:darkred;"> Blood Requests </a>
            </li>
        </ul>

        <center><p><h3>Blood Requested</h3></p></center><br>
        <div class="container" style="overflow-x:auto;">
<hr class="solid">

        <?php 
        $cnt=0;
        $str="select * from rf where remail='".$_SESSION['uname']."';";
        $q=pg_query($db,$str);
        while($row=pg_fetch_row($q))
        {
            echo "<table><tr><th>Name: </th><td>".$row[0]. "</td>";
            echo "<th>Age: </th><td>".$row[1]. "</td></tr><tr><th>Request Type: </th><td>".$row[2]. "</td><th>Requestor type: </th><td>".$row[3]."
            </td></tr><tr><th>Blood Group Needed: </th><td>".$row[4]. "</td></tr>";
            echo "<tr><th>Mobile: </th><td>".$row[6]. "</td><th>Email: </th><td>".$row[7]. "</td></tr>";
            echo "<tr><th>Clinical Diagnosis: </th><td>".$row[8]. "</td><th>Operative Procedure: </th><td>".$row[9]. "</td></tr>
            <tr><th>Reason for transfusion: </th><td>".$row[10]. "</td>";
            echo "<th>Previous transfrusions?: </th><td>".$row[11]. "</td></tr>";
            echo "<tr><th>Pregnancy History: </th><td>".$row[13]. "</td></tr>";
            echo "<tr><th><i class='fa fa-calendar-o'></i> Date: </th><td>".$row[14]. "</td><th><i class='fa fa-clock'></i> Time : </th><td>".$row[15]. "</td></tr>";
            echo "<tr><th>Haemoglobin: </th><td>".$row[16]. "</td><th>Platelets:</th><td>".$row[17]. "</td>
            <th>Plasma: </th><td>".$row[18]. "</td></tr></table>";
            echo "<hr class=solid>";
            $cnt++;
        }
        ?>
Requests Created: <?php echo $cnt; ?>
<hr class="solid">
        </div>
        </div>
            <?php //include 'footer.php'; ?>
    </body>
    
</html>

<style>
    .solid{color:darkred;}
    table{
        width: 80%;
        border:1px lightgrey solid;
        margin: auto;
        margin-top: 20px;
        margin-bottom: 20px;
/*        text-align: center;*/
    }
    th,tr{
        border:1px lightgrey solid;   
        padding: 10px 5px;
    }
    td,th{padding-left: 15px;}
body{
    background-color: lightgrey;
    font-family: 'Times New Roman', Times, serif;
}
.nav-link{
    color: darkred;
}
.nav-link:hover
{
    background-color: white;
    color: darkred;
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