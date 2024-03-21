<?php session_start(); ?>
<header >
    <div class="container-fluid" style="margin-top:0px;height:200px;color:white;background:linear-gradient(to left,rgb(0,0,0,0.4),rgb(0,0,0,0.2)),darkred;font-family:'Times New Roman', Times, serif">
        <ul>
            <li><a class="active" href="index.php">Home</a></li>
            <li><a href="blog.php">Blog</a></li>
            <li><a href="about.php">About</a></li>
            <li><a href="contactus.php">Contact us</a></li>
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
<style>
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
            /*header{
                margin-bottom: 20px;
            }*/
</style>