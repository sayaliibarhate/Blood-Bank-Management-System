<?php include 'ndb.php'; 
if(isset($_SESSION['count']))
$_SESSION['count']=$_SESSION['count']+1;
                else
                $_SESSION['count']=1;
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Dāan:United by blood</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>

  <link rel="icon" type="image/x-icon" href="favicon.ico">
  <style>
    .jumbotron{
      background:linear-gradient(0deg, rgba(0, 0,0, 0.5), rgba(0, 0,0, 0.5)), url(img/bg.jpg);
      background-size: cover;
    }
  /*Navigation bar*/  ul 
        {
            list-style-type: none;
            width: 500px;
            margin: 0;
            padding:50px 0 0px 0;
            overflow: hidden;
            float: right;
        }
        li{
            float: left;
        }
        li a 
        {
            font-size: large;
            display: block;
            text-align: center;
            padding: 22px 28px;
            text-decoration: none;
            color: whitesmoke;
        }
        .active {
              color: white;
            }
        body{background-color:#ded8d7; font-family:'Times New Roman', Times, serif;font-size:large;}
  a:hover{color:yellow;}
        table,th,td{
          border:2px solid black;
          border-radius: 5%;
          border-collapse: collapse;
          text-align: center;
          padding: 10px;}
/*page divider*/ hr.solid { border: 1px solid darkred;}
.imgCon{
  float: left;
  width: 30%;
  padding: 5px;
}
.butt{
  border: 1px black solid;
  border-radius: 7px;
  background-color: darkred;
  text-decoration: none;
  color:antiquewhite;
  padding: 10px;
}
.butt:hover{color:white;background-color: gray;}
#btn-back-to-top {
position: fixed;
bottom: 90px;
right: 60px;
display: none;
border-radius: 100%;
background-color:brown;
color: white;
}
.btn-outline-dark:hover{color:red;}
    </style>
</head>

    <body><!--Headerbackground-image: linear-gradient(to right, #8b0014, #9c1b27, #ac2e3a, #bb404e, #ca5162);-->
    <div class="jumbotron" style="color:white;height:650px;">
    <div class="container-fluid">
    <ul>
            <li><a class="active" href="index.php">Home</a></li>
            <li><a href="blog.php">Blog</a></li>
            <li><a href="about.php">About</a></li>
            <li><a href="contactus.php">Contact us</a></li>
            <li><li><?php if(isset($_SESSION['uname']))
            {
                 echo "<a href='pfp.php'>";
            }
            else 
                echo "<a href='login.php'>"; 
            ?><i class="fa fa-user fa-lg"></i></a></li>
        </ul></div>
  <div class="container text-center" style="padding:150px 0 0 0px;">
        <a href="index.php" class="site-logo" style="color:#fff;text-decoration:none;font-size:110px;opacity:0.9;">
            Dāan<img src="https://cdn-icons-png.flaticon.com/512/4088/4088680.png" style="height:95px;margin-left:30px;"></a>
            <p class="lead" style="font-size:28px;">United by blood</p><h5 style="opacity:0.5;">
            रक्तदान सर्वश्रेष्ठ दान</h5>
          <div style="padding-top: 55px;">
            <a href="regi.php" class="btn btn-outline-light btn-lg" role="button" data-mdb-ripple-color="dark" aria-pressed="true" style="margin-right:30px;">Register/Login</a>
            <a href="admin/alogin.php" class="btn btn-outline-light btn-lg" role="button" data-mdb-ripple-color="dark" aria-pressed="true" >Admin Login</a>
          </div>
    </div>
  </div>

<div class="container-fluid" style="padding:20px 50px"> <!--Carousel-->
<div id="carouselExampleFade" class="carousel carousel-dark slide carousel-fade" data-bs-ride="carousel">
<div class="carousel-indicators">
    <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="1" aria-label="Slide 2"></button>
    <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="2" aria-label="Slide 3"></button>
    <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="3" aria-label="Slide 4"></button>
    <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="4" aria-label="Slide 5"></button>
  </div>
  <div class="carousel-inner" >
    <div class="carousel-item active" >
      <img src="img/gift.jpg" class="d-block" style="width:100%;height:600px;">
    </div>
    <div class="carousel-item">
      <img src="img/fact.jpg" class="d-block" style="width:100%;height:600px;">
    </div>
    <div class="carousel-item">
      <img src="img/wbdd.jpg" class="d-block" style="width:100%;height:600px;">
    </div>
    <div class="carousel-item">
      <img src="img/living.jpg" class="d-block" style="width:100%;height:600px;">
    </div>
  <div class="carousel-item">
      <img src="img/drop.png" class="d-block" style="width:100%;height:600px;">
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

<hr class="solid">

<section style="padding:50px 80px;"> <!--cards section-->
<center>
<div class="row row-cols-1 row-cols-md-2 g-4">
  <div class="col">
  <div class="card text-bg-light mb-4" style="width:60%;box-shadow: 1px 1px 8px 0 grey;">
  <div class="card-header" >Number of Visitors:</div>
  <div class="card-body">
    <h5 class="card-title">
                <?php echo $_SESSION['count'];?></h5>
    <p class="card-text">Visitors</p>
  </div>
</div>
</div>
  <div class="col">
  <div class="card text-bg-light mb-4" style="width:60%;box-shadow: 1px 1px 8px 0 grey;">
  <div class="card-header">Total Donors Available:</div>
  <div class="card-body">
    <h5 class="card-title">
<?php $cnt=0;
$ret=pg_query($db,"select remail from users where act='Donor';");
while($row=pg_fetch_row($ret))
{
    $cnt++;
}
echo $cnt;?>
</h5>
    <p class="card-text">Donors.</p>
  </div>
</div>
  </div>
  <div class="col">
  <div class="card text-bg-light mb-4" style="width:60%;box-shadow: 1px 1px 8px 0 grey;">
  <div class="card-header">Camps Organized:</div>
  <div class="card-body">
    <h5 class="card-title">23</h5>
    <p class="card-text">Donations.</p>
  </div>
</div>
  </div>
  <div class="col">
  <div class="card text-bg-light mb-3" style="width:60%;box-shadow: 1px 1px 8px 0 grey;">
  <div class="card-header">Total Donations:</div>
  <div class="card-body">
    <h5 class="card-title">536</h5>
    <p class="card-text">Donations.</p>
  </div>
</div>
  </div>
</div>
</center>
</section>

<hr class="solid">

<div class="container-fluid" style="padding:50px 60px 0"><center>
<h2>What does blood bank contain?</h2>
Each unit of blood is broken down into components, such as red blood cells, plasma, cryoprecipitated AHF, and platelets.
<br> One unit of whole blood, once it's separated, may be transfused to several patients, each with different needs.

<div class="row row-cols-1 row-cols-md-3 g-4" style="padding: 50px 0;">
  <div class="col">
    <div class="card h-100">
      <img src="img/cells.jpg" class="card-img-top"
        alt="Blood cells" />
      <div class="card-body">
        <h5 class="card-title"><b>Blood Cells</b></h5>
        <p class="card-text">
        Blood contains many types of cells: white blood cells (monocytes, lymphocytes, neutrophils, eosinophils, basophils, and macrophages), red blood cells (erythrocytes), and platelets.
        <h5><u>Benefit:</u></h5>Patients who benefit most from receiving red blood cells include those with chronic anemia resulting from kidney failure or gastrointestinal bleeding, and those with acute blood loss resulting from trauma.
        </p>
      </div>
    </div>
  </div>
  <div class="col">
    <div class="card h-100">
      <img src="img/plasma.jpg" class="card-img-top h-70"
        alt="plasma" />
      <div class="card-body">
        <h5 class="card-title"><b>Plasma</b></h5>
        <p class="card-text">
        Blood plasma is a light amber-colored liquid component of blood. The main role of plasma is to take nutrients, hormones, and proteins to the parts of the body that need it.
          <h5><u>Benefit:</u></h5>Plasma is commonly given to trauma, burn and shock patients, as well as people with severe liver disease or multiple clotting factor deficiencies. It helps boost the patient's blood volume, which can prevent shock, and helps with blood clotting.
        </p>
      </div>
    </div>
  </div>
  <div class="col">
    <div class="card h-100">
      <img src="img/platelet.jpeg" class="card-img-top h-30" alt="platelet" >
      <div class="card-body">
        <h5 class="card-title"><b>Platelets</b></h5>
        <p class="card-text">
        Platelets, or thrombocytes, are small, colorless cell fragments in our blood that form clots and stop or prevent bleeding. Platelets are made in our bone marrow, the sponge-like tissue inside our bones.
          <h5><u>Benefit:</u></h5>Platelets are used for cancer, trauma, burn and surgery patients to assist with blood clotting and stop internal and external bleeding.

        </p>
      </div>
    </div>
  </div>
</div>
</center>
</div>

<hr class="solid">

<article style="padding:50px 150px;font-family:'Times New Roman', Times, serif;font-size:large"><center>
        <h2>Why should you donate blood? </h2><br>
        <p><b>Safe blood saves lives. </b><br>
        Blood is needed by women with complications during pregnancy and childbirth, children with severe anaemia, often resulting from malaria or malnutrition, accident victims and surgical and cancer patients.
        <br> There is a constant need for a regular supply of blood because it can be stored only for a limited period of time before use. <br>
        Regular blood donation by a sufficient number of healthy people is needed to ensure that blood will always be available whenever and wherever it is needed. 
        <br>Blood is the most precious gift that anyone can give to another person – the gift of life.<br>
         A decision to donate your blood can save a life, or even several if your blood is separated into its components – red cells, platelets and plasma – which can be used individually for patients with specific conditions.</p>
         </center></article>

<!--<hr class="solid">--> <!--donate-request button--><center>
<div class="container-fluid" style="padding-top:30px;height:250px;background: linear-gradient(0deg, rgba(0, 0,0, 0.4), rgba(0, 0,0, 0.4)), url(img/bg.jpg);background-size:cover;">
<div class="d-grid gap-2 col-6 mx-auto">
<a href="donation.php" class="btn btn-outline-dark btn-lg" role="button" aria-pressed="true" style="background-color:beige;margin:30px 0;">Donate</a>
<a href="request.php" class="btn btn-outline-dark btn-lg" role="button" aria-pressed="true" style="background-color:beige;margin-bottom:30px;">Request for blood</a></center>
</div>
       </div>
<!--<hr class="solid">-->

<div class="container" style="padding:40px 20px;">
  <div class="row">
    <div class="col-sm-8" style="background-image: url('img/hear.png');background-repeat:no-repeat;background-size:83% 120%;"><p>
    <h2>What is blood donation?</h2>
 A blood donation occurs when a person voluntarily has blood drawn and used for transfusions and/or made into biopharmaceutical medications by a process called fractionation (separation of whole blood components).<br>
  Donation may be of whole blood, or of specific components directly (apheresis).
 <br> Blood banks often participate in the collection process as well as the procedures that follow it.
 <p><br><br><h2>What are the major blood types?</h2>
Your blood type is determined by the antigens it contains. <br>
There are two major types of blood antigens:<br>
 ABO and Rh, which combine to create blood types: O+. O-, A+, A-, B+, B-, AB+ & AB-
<p><br>
    </div>
    <div class="col-sm-4" >
    <table>
        <tr><th>Blood Group</th><th>Who can you give?</th><th>Who can Recieve?</th></tr>
        <tr><td>A+</td><td>	A+, AB+</td><td>A+, A-, O+, O-</td></tr>
        <tr><td>B+</td><td>B+, AB+</td><td>B+, B-, O+, O-</td></tr>
        <tr><td>AB+</td><td>AB+ Only</td><td>All Blood Types</td></tr>
        <tr><td>O+</td><td>O+, A+, B+, AB+</td><td>O+, O-</td></tr>
        <tr><td>A-</td><td>A-, A+, AB-, AB+	</td><td>	A-, O-</td></tr>
        <tr><td>B-</td><td>	B-, B+, AB-, AB+</td><td>	B-, O-</td></tr>
        <tr><td>AB-</td><td>AB-, AB+</td><td>AB-, A-, B-, O-</td></tr>
        <tr><td>O-</td><td>All Blood Types</td><td>	O-</td></tr>
      </table>
    </div>
  </div>
</div>
<hr class="solid"> 
<!-- Camp organization section--->
<section>
  <div class="container" style="margin-top:60px;">
  <div class="col-12">
    <h2>About Blood Donation Camps</h2>
    <p>Dāan collaborates with voluntary organizations that organize blood donation camps. We provide means and methods to help organize
      an efficient camp that provides best doctors, staff and services to donors.
      <h4>How can we help making it interesting:</h4>
      We do not just help you organize a camp, but we also try to ensure each donor feels special. A blood donation camp can be fun with music, it can have a theme, it can motivate people for greater things. We help you do that, right from motivating people before the camp to ensuring each donor feels a sense of pride and happiness post donation.
    </p>
    <h3>To register your organization</h3>
    <p> Click on Request callback button provided below. Fill the details regarding your organization and submit the information.<br>
  Our team will verify your details and reach out to you for further process.
  <br> We will help you advertise the camp and attract donors for the better cause.<br>
There will sessions held during camps to spread the awareness about blood donation to education more people and keep them engrossed.</p><br>
<center><a href="camp.php" role="button" class="butt">Request Callback</a></center>
</div>
  <p><br>
</section>
<button type="button" class="btn btn-default btn-floating btn-lg" id="btn-back-to-top">
  <i class="fa fa-arrow-up"></i>
</button>
<?php echo '<script>//Get the button
let mybutton = document.getElementById("btn-back-to-top");

// When the user scrolls down 60px from the top of the document, show the button
window.onscroll = function () {
scrollFunction();
};

function scrollFunction() {
if (
document.body.scrollTop > 60 ||
document.documentElement.scrollTop > 60
) {
mybutton.style.display = "block";
} else {
mybutton.style.display = "none";
}
}
// When the user clicks on the button, scroll to the top of the document
mybutton.addEventListener("click", backToTop);

function backToTop() {
document.body.scrollTop = 0;
document.documentElement.scrollTop = 0;
}</script>'; ?>
</body><br><br>
<?php include 'footer.php';?>  
</html>