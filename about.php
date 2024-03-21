<!DOCTYPE html>
<html lang="en">
<head>
  <title>Dāan| About</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>

  <link rel="icon" type="image/x-icon" href="favicon.ico">
  <style>
    .container{
        padding: 10px;
    }
    .body{
      margin:0px;
      padding: 0px;
      box-sizing: border-box;
      font-family: 'Montserrat', sans-serif;
     }
     .card{
        background-color:beige;
        padding:30px ;
     }
     .card-title{
        font-weight: 50px;
     }
     h1{
        font-family:'Times New Roman', Times, serif;
        font-size: 45px;
        font-weight: 100;
        line-height: 1.4;
        letter-spacing: 0.5rem;
        text-align: center;
        color:#333;
        margin-top: 50px;
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
    </style>

    </head>
    <body >
    <?php session_start(); ?>
<header >
    <div class="container-fluid" style="margin-top:0px;height:200px;color:white;background:linear-gradient(rgb(0,0,0,0.4),rgb(0,0,0,0.2)),darkred;font-family:'Times New Roman', Times, serif">
        <ul style=" list-style-type: none;
            width: 505px;
            margin: 0;
            padding:20px 0 0 0;
            overflow: hidden;
            float:right;">
            <li style="float: left;"><a class="active" href="index.php">Home</a></li>
            <li style="float: left;"><a href="blog.php">Blog</a></li>
            <li style="float: left;"><a href="about.php">About</a></li>
            <li style="float: left;"><a href="contactus.php">Contact us</a></li>
            <li><?php if(isset($_SESSION['uname']))
            {
                 echo "<a href='pfp.php'>";
            }
            else 
                echo "<a href='login.php'>"; 
            ?><i class="fa fa-user-circle fa-lg"></i></a></li>
        </ul>
      <div class="text-center;" style="padding:20px 0 0 80px;">
			    <a href="index.php" class="site-logo" style="color:#fff;text-decoration:none;font-size:60px;">
            Dāan<img src="https://cdn-icons-png.flaticon.com/512/4088/4088680.png" style="height:60px;margin-left:16px;"></a>
            <p class="lead">United by blood</p>
      </div>
  </div>
</header>
    <div class="container">    
        <div class="card">
            <div class="card-title">
                <h1>About Us</h1>
            </div>
            <div class="maindiv">
        
                <div class="article">
                    <div style="padding-top:0%;" class="content">
                    <div class="container-fluid" style="padding:20px 50px"> <!--Carousel-->
<div id="carouselExampleFade" class="carousel carousel-dark slide carousel-fade" data-bs-ride="carousel">
<div class="carousel-indicators">
    <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="1" aria-label="Slide 2"></button>
    <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="2" aria-label="Slide 3"></button>
  </div>
  <div class="carousel-inner" >
    <div class="carousel-item active" >
      <img src="https://acropolis.org.in/wp-content/uploads/2021/08/IMG_0207.jpg" class="d-block" style="width:100%;height:600px;">
    </div>
    <div class="carousel-item">
      <img src="https://sarthakfoundation.in/images/our-impact/blood-donation-camp-big.jpg" class="d-block" style="width:100%;height:600px;">
    </div>
    <div class="carousel-item">
      <img src="https://baif.org.in/wp-content/uploads/2023/03/Boold-donation-2023-1.jpeg" class="d-block" style="width:100%;height:600px;">
    </div>
    </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div> 
</div>

                    <p style="font-weight: bold;">Dana network has been helping people across maharashtra to fight various blood related diseases by making suitable blood avaliable for patients. We have successfully arranged multiple blood donation camps, among which
                        Sarthak foundation(pune) and Baif reasearch centre(pune) has been major ones. These camps were held by organizations having tie ups with us.
                        Following camps helped multiple people across maharashtra to get their suitable blood type through our online portal.<br><p>
                        <div class="img">
                            <img style="width: 50%; height: 50%; float: left; padding-right: 2%;" src="https://baif.org.in/wp-content/uploads/2023/03/Boold-donation-2023-certificate.jpg">
                        </div>
                    </p>
                    <h4><u>Significance of portal</u></h4>
                    <p>Blood donation and transfusion service is an indispensable part of contemporary medicine and health care. Blood management has been recognized as a challenging task because of life threatening nature of blood products entails the punctilious administration due to its perishable nature & required timely processing and it also saves the life.</p>
                    <p>Such great challenge has been considerably alleviated with the development of information and computer technology. e-Blood Bank is an integrated blood bank automation system. This web based mechanism inter connects all the Blood Banks of the State into a single network. Integrated Blood Bank MIS refers the acquisition, validation, storage and circulation of various live data and information electronically regarding blood donation and transfusion service. Such system is able to assemble heterogeneous data into legible reports to support decision making from effective donor screening to optimal blood dissemination in the field. Those electronic processes will help the public for easy access to the blood availability status of blood banks on finger tips; so that he can place a requisition of a particular blood group in nearby blood bank (Especially rare groups) save a valuable life.</p>
                    <p>It also provides online status of blood group wise availability of blood units in all the licensed blood banks in the state. It includes online tracking and trailing system of the blood and blood products (components of blood) by the state level administrators. The system manages all the activities from blood collection both from camps & hospitals till the issue of blood units. It includes donor screening, blood collection, mandatory testing, storage and issue of the unit (whole human blood IP, different Blood component and aphaeresis blood products).</p>
                   </div>
                   <h3>Features</h3>
                   <div class="container"> 
                   <ul >
                    <div class="img">
                        <img style="width: 50%; height: 55%; float: right; padding-left: 2%;" src="https://www.raster.in/img/products/blood-bank/blood-bank-management-system.jpg">
                    </div>
                    <li>State & Blood Bank dashboard to provide the group wise blood stocks status for every user.</li>
                    <li>Dashboards for Blood Bank Officers (Tested/ Untested/ Buffer stock of blood units)</li>
                    <li>Distribution of blood from mother blood banks to blood storage centers.</li>
                    <li>Recruitment and retention of the regular blood donors in the state.</li>
                    <li>Maintain all the registers according to Drugs & Cosmetic Act of 1940.</li>
                    <li>Inventory of kits and consumables with alert for short expiry.</li>
                    <li>Alert mechanism for License, regular donors and organization </li>
                    <li>Provides a paperless donor room</li>
                    <li>Real time information form collection to testing and use of blood and blood products.</li>
                    <li>Unique bar coding for each blood packets.</li>
                    <li>The citizen can access the availability of blood units from any blood bank of Maharashtra by using website</li>
                    </ul>
                   </div>
                </div>
            </div>
        </div>
    </div>    
    </body>
    <?php include 'footer.php'; ?>
</html>    