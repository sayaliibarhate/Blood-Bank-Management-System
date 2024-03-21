<!DOCTYPE html>
<html>
  <head>
    <title>Camp organization registration form</title>
    <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.1/css/all.css" integrity="sha384-5sAR7xN1Nv6T6+dT2mhtzEpVJvfS3NScPQTrOxhwjIuvcA67KV2R5Jz6kr4abQsz" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700" rel="stylesheet">
        <!--nav-bar-->
    <!--end of nav-bar-->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.1/css/all.css" integrity="sha384-5sAR7xN1Nv6T6+dT2mhtzEpVJvfS3NScPQTrOxhwjIuvcA67KV2R5Jz6kr4abQsz" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700" rel="stylesheet">
    <!--Bootstrap for responsive webpage-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>

    <link rel="icon" type="image/x-icon" href="favicon.ico">
  </head>
  <body>
    <?php include 'header.php'; ?>
    <div class="container">
      <div class="left-part">
        <i class="fas fa-heartbeat"></i>
        <h1 style=" font-size: 18px;text-transform: uppercase;font-weight: 400;color: black;">Organize a camp</h1>
        <p style="font-size: 14px;text-transform: uppercase;font-weight: 400;color: black;">Fill this form and a team member would be in touch with you soon</p>
      </div>
      <form enctype="multipart/form-data" action ="campdb.php" method ="post">
        <div  class="display-3" style="align-items: center;margin:10px 0 20px 0px;"> 
          <h6 class="text-center"><b>Register your camp</b></h6>
        </div>
        <div class="info">
          <input class="fname" type="text" for="name" name="name" placeholder="Full name" required>
          <input type="text" name="Email" for="Email" placeholder="Email" required>
          <input type="text" name="Phone" for="Phone" placeholder="Phone" required>
          <input type="text" name="org" for="org" placeholder="Organization name" required>
          <select name="city" for="city" required>
            <option value="">City</option>
            <option value="Ahmednagar">Ahmednagar</option>
            <option value="Beed">Beed</option>
            <option value="Bhandara">Bhandara</option>
            <option value="Chandrapur">Chandrapur</option>
            <option value="Dhule">Dhule</option>
            <option value="Gadchiroli">Gadchiroli</option>
            <option value="Jalgaon">Jalgaon</option>
            <option value="Jalna">Jalna</option>
            <option value="Kolhapur">Kolhapur</option>
            <option value="Latur">Latur</option>
            <option value="Pune">Pune</option>
            <option value="Nagpur">Nagpur</option>
            <option value="Nanded">Nanded</option>
            <option value="Nashik">Nashik</option>
            <option value="Osmanabad">Osmanabad</option>
            <option value="Ratnagiri">Ratnagiri</option>
            <option value="Solapur">Solapur</option>
            <option value="Thane">Thane</option>
            <option value="Wardha">Wardha</option>
          </select>
        </div>
        <div class="checkbox">
          <input type="checkbox" name="checkbox" required><span aria-required="true">I hereby declare that all contact information provided is genuine.
          </span required>
          <p style="color: red; font-size:11px;">*Note: Information once entered cannot be updated. </p>
        </div>
        <button type="submit" href="/">Submit</button>
      </form>
    </div>
    <?php include 'footer.php'; ?>
  </body>
</html>
<style>

    body, div, form, input, select, p { 
    padding: 0;
    margin: 0;
    outline: none;
    font-size: 16px;
    color: #eee;
    }
    body {
    background-color:whitesmoke;
    font-family:Arial, Helvetica, sans-serif;
    }
    
    .fa-home{
       font-size: 25px;   
       color: maroon;
      }
   
    /*h2 {
    margin: 0 0 0 8px;
    }*/
    .container{
    display: flex;
    flex-direction: column;
    justify-content: center;
    align-items: center;
    height: 100%;
    padding: 100px;
    background-size:cover;
   
    }

    .left-part, form {
    padding: 25px;
    }
    .left-part {
    text-align: center;
    }
    .fa-heartbeat {
    font-size: 70px;
    color: darkred;
    }
    form {
    background: rgba(0, 0, 0, 0.7); 
    }
    
    .info {
    display: flex;
    flex-direction: column;
    }
    input, select {
    padding: 5px;
    margin-bottom: 30px;
    background: transparent;
    border: none;
    border-bottom: 1px solid #eee;
    }
    input::placeholder {
    color: #eee;
    }
    option:focus {
    border: none;
    }
    option {
    background: black; 
    border: none;
    }
    .checkbox input {
    margin: 0 10px 0 0;
    vertical-align: middle;
    }
    .checkbox a {
    color: #26a9e0;
    }
    .checkbox a:hover {
    color: #85d6de;
    }
    .btn-item, button {
    padding: 10px 5px;
    margin-top: 20px;
    border-radius: 5px; 
    border: none;
    background: maroon; 
    text-decoration: none;
    font-size: 15px;
    font-weight: 400;
    color: #fff;
    }
    .btn-item {
    display: inline-block;
    margin: 20px 5px 0;
    }
    button {
    width: 100%;
    }
    button:hover, .btn-item:hover {
    background: #85d6de;
    }
    @media (min-width: 568px) 
    {
    html, body {
    height: 100%;
    }
  }
    .main-block {
    flex-direction:column;
    height: calc(50% 50px);
    }
    .left-part, form {
    flex: 1;
    height: auto;
    }
  </style>