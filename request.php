<!DOCTYPE html>
<html lang="en">
<head>
  <title>Blood Requisition</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>

  <link rel="icon" type="image/x-icon" href="favicon.ico">
  <style>
    body 
    {
      background-color:whitesmoke;
    }
   .heading
   {
    color:#D2042D;
    font-family:Caliber;
   }
   .btn-default
   {
    background:#D2042D; 
    width:100px;
    margin:10px;
    color:white;
   }
   label 
   {
    font-family:Caliber;
   }
   </style>
  <?php include 'header.php';?>
 </head>

 <body>
 <div class="container-fluid" style="width:auto;background-color: lightgrey;margin:50px;padding:50px 50px">

  <center><form enctype="multipart/form-data" action ="requestdb.php" method ="post"> 
    <h1 class="heading">Requisition Form</h1><br></center>
<p>
      <div class = "row">
       <div class="col-sm-6">
        <label><h5><b>Request type: </b></h5></label>&nbsp; &nbsp; &nbsp;     
        <input  type = "radio" value= "Routine" name = "rt" >
        <label><b>Routine</b></label>&nbsp;
        <input  type = "radio" value= "Emergency" name = "rt" >
        <label><b>Emergency</b></label>&nbsp;
        <input  type = "radio" value= "Urgent" name = "rt" > 
        <label><b>Urgent</b></label>&nbsp;
        <input  type = "radio" value= "Immediate" name = "rt" >  
        <label><b>Immediate</b></label>
       </div>
     
       <div class="col-sm-6">
        <label><h5><b>Requestor type: </b></h5></label>&nbsp; &nbsp; &nbsp;     
        <input type = "radio" value= "Individual" name = "rqt" >
        <label><b>Individual</b></label>&nbsp;
        <input type = "radio" value= "Hospital" name = "rqt" >
        <label><b>Hospital</b></label>
       </div>
      </div><br>
</p>
<p>      
      <div class = "row">
       <div class="col-sm-4">
        <label for="bloodgroup"> <h4><b> Blood-group needed <font color="#ff2600" size="+1"><sup>*</sup></font></b></h4> </label>
         <select name="bg" class="form-control" required >
          <option value="">Select Blood Group</option>
          <option value="A+">A+</option>
          <option value="A-">A-</option>
          <option value="B+">B+</option>
          <option value="B-">B-</option>
          <option value="O+">O+</option>
          <option value="O-">O-</option>
          <option value="AB+">AB+</option>
          <option value="AB-">AB-</option>
        </select><br>
       </div>

       <div class="col-sm-4">
        <label for="name"> <h4><b>Full Name: <font color="#ff2600" size="+1"><sup>*</sup></font></b></h4> </label>
        <input class="form-control" type = "text"  placeholder = "First Middle Last" name = "name" required /> <p>
       </div>

       <div class="col-sm-4">
        <label for="age"> <h4><b> Age: <font color="#ff2600" size="+1"><sup>*</sup></font></b></h4> </label>
        <input class="form-control" type = "number" min="18" max="75" placeholder = "ie., 21" name= "age" required /><br>
       </div>
      </div>
</p>
<p>
       <div class = "row">
        <div class="col-sm-4">
         <label for="gender"> <h4><b> Gender: <font color="#ff2600" size="+1"><sup>*</sup></font></b></h4> </label>
         <select name="g" class="form-control" required >
         <option value="">Select Gender</option>
         <option value="Male">Male</option>
         <option value="Female">Female</option>
         <option value="Other">Other</option>
         </select><br>
       </div>
       
       <div class="col-sm-4">
        <label for="mob"> <h4><b> Mobile Number: <font color="#ff2600" size="+1"><sup>*</sup></font></b></h4> </label>
        <input class="form-control" type = "text" placeholder = "Enter 10 digits" name= "mob" required /> <br>
       </div>
 
       <div class="col-sm-4">
        <label for="email"> <h4><b> E-mail id: <font color="#ff2600" size="+1"><sup>*</sup></font></b></h4> </label>
        <input class="form-control" type = "email" placeholder = "abc@gmail.com" name = "email" required /> <br>
       </div>
      </div>
</p>
      <div class = "row">
       <div class="col-sm-12">
        <label for="cd"> <h4><b> Clinical Diagnosis <font color="#ff2600" size="+1"><sup>*</sup></font></b></h4> </label>
        <input class="form-control" type = "text" name = "cd" required><br>
       </div>
      </div>
<br>
      <div class = "row">
       <div class="col-sm-12">
        <label for="op"> <h4><b> Name of the Operative Procedure <font color="#ff2600" size="+1"><sup>*</sup></font></b></h4> </label>
        <input class="form-control" type = "text" name = "op" required><br>
       </div>
      </div>
<br>
<p>
<div class = "row">
       <div class="col-sm-6">
        <label for="rtrans"> <h4><b> Reason For Tranfusion <font color="#ff2600" size="+1"><sup>*</sup></font></b></h4> </label>
        <input class="form-control" type = "text" name = "rtrans" required><br>
       </div>

       <div class="col-sm-6">
        <label><h4><b>Whether previously transfused? <font color="#ff2600" size="+1"><sup>*</sup></font></b></h4></label><br>      
        <input type = "radio" value= "Yes" name = "pt" required>
        <label><b>Yes</b></label><br>
        <input type = "radio" value= "No" name = "pt" required>
        <label><b>No</b></label><br>
       </div>
      </div>
</p>
<p>
      <div class = "row">
       <div class="col-sm-6">
        <label for="transh"> <h4><b> Any previous transfusion history: <font color="#ff2600" size="+1"><sup>*</sup></font></b></h4> </label><br>
        <br><input class="form-control" type = "text" name = "transh"><br>
       </div>
        
       <div class="col-sm-6">
        <label for="ph"> <h4><b> Previous pregnancy with HDFN, still birth, Miscarriage: <font color="#ff2600" size="+1"><sup>*</sup></font></b></h4> </label><br>
       <br><input class="form-control" type = "text" name = "ph"><br>
       </div>
      </div>
</p>
<p>
      <div class = "row">
       <div class="col-sm-6">
        <label for="date"> <h4><b> Date of requirement: <font color="#ff2600" size="+1"><sup>*</sup></font></b></h4> </label>
        <input class="form-control" type = "date" placeholder="dd-mm-yyyy" name = "date" required><br>
       </div>

       <div class="col-sm-6">
        <label for="time"> <h4><b> Time of requirement: <font color="#ff2600" size="+1"><sup>*</sup></font></b></h4> </label>
        <input class="form-control" type = "text" placeholder="hh.mm" name = "time" required><br>
       </div>
      </div>
      <p>
            <div class=row>
            <label for="address"> <h4><b>Delivery Address: <font color="#ff2600" size="+1"><sup>*</sup></font></b></h4> </label>
        <input class="form-control" type = "text" placeholder="" name = "add" required><br>
       </div>
</p>
</p>
      <div class = "row">
       <div class="col-sm-3">
        <br><label for="iv"> <h4><b> Investigation Values: <font color="#ff2600" size="+1"><sup>*</sup></font></b></h4> </label>
       </div>
       
       <div class="col-sm-3">
        <label for="hb"> <h4><b> Hameoglobin </b></h4> </label>
        <input class="form-control" type = "text" placeholder="gm/dl" name = "hb" required>
       </div>

       <div class="col-sm-3">
        <label for="pl"> <h4><b> Platelet </b></h4> </label>
        <input class="form-control" type = "text" placeholder="cu-mm" name = "pl" required>
       </div>

       <div class="col-sm-3">
        <label for="pm"> <h4><b> Plasma </b></h4> </label>
        <input class="form-control" type = "text" placeholder="litre" name = "pm" required>
       </div>
      </div>
     
      <p><center><input type = "submit" class = "btn btn-default" value=SUBMIT></center>
</form>
</div>
<?php include 'footer.php';?>
</body>
</html>


 






