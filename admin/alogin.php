<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Admin Login</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
  <style>
    body{
        background: rgba(47,79,79,0.7);
        font-family: 'Times New Roman', Times, serif;
        
    }
    header{
        background-color: white;
        height: 100px;
        padding-top: 20px;
    }
    .btn{
        background-color: darkslategray;
        color: white;
        width: 100%;
    }
    .btn-default:hover{
        color:white;
        background-color: gray;
    }
    label{
        font-size:17px;
    }
    </style>
</head>
<body>
    <header>
        <h1 class="text-center">Dāan  Administration </h1>
    </header>
    <div class="card h-150" style="width:25%;margin:auto;top:130px;">
        <div class="card-header text-center" ><h3>Admin Login</h3></div>
        <div class="container-fluid">
            <div class="card-body">
            <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="get"><p>
                <label> Username: </label><p>
                <input type="text" name="user" class="form-control"><p>
                <label>Password: </label><p>
                <input type="password" name="pass" class="form-control">
                <div class="form-check" style="float:right;">
                    <input class="form-check-input" type="checkbox" value="" id="form1Example3" checked />
                    <label class="form-check-label" for="form1Example3"> Remember me </label>
                </div>
                <a class="back" href="/Bbms/index.php" style="float:left;margin-bottom:30px;text-decoration:none;">Back to home</a><br>
                <input type="submit" name=submit value="Login" class="btn btn-default ">
            </form>
            </div>
        </div>
    </div>
    <?php 
    if(isset($_SESSION['uname']))
    {
        echo "<script>alert('Logout of other accounts!');
        location.href='/Bbms/pfp.php'</script>";
    }
    else
    {
        if(isset($_GET['submit']))
        {
            $uname=$_GET['user'];
            $pass=$_GET['pass'];
            if($uname=='admin123' && $pass=='123456')
            {
                header("Location: index.php");
            }
            else
            echo "<script>window.alert('Access Denied')</script>";
        }
    }
    ?>
  
</body>
</html>