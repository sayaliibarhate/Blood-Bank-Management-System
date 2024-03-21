<!DOCTYPE html>
<html lang="en">
<head>
  <title>Donation Appointment Booking</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>

  <link rel="icon" type="image/x-icon" href="favicon.ico">
  <style>
   
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
   body{
    background-color: whitesmoke;
   }
   </style>
 <?php include 'header.php';?>
 </head>

 <body>
 <div class="container-fluid" style="width:auto;background-color:lightgrey;margin:90px;padding:50px 50px;">

  <center><form enctype="multipart/form-data" action ="donationdb.php" method ="post"> 
    <h1 class="heading">Donation Form</h1><br></center>

     <div class = "row">
      <div class="col-sm-4">
       <label for="name"> <h4><b>Full Name: <font color="#ff2600" size="+1"><sup>*</sup></font></b></h4> </label>
       <input class="form-control" type = "text"  placeholder = "First Middle Last" name = "name" required /> <p>
      </div>

      <div class="col-sm-4">
       <label for="age"> <h4><b> Age: <font color="#ff2600" size="+1"><sup>*</sup></font></b></h4> </label>
       <input class="form-control" type = "number" min="18" max="75" placeholder = "ie., 21" name= "age" required /><br>
      </div>
      
      <div class="col-sm-4">
        <label for="acard"> <h4><b> Adhar Card Number: <font color="#ff2600" size="+1"><sup>*</sup></font></b></h4> </label>
        <input class="form-control" type = "text" placeholder = "    -    -    " name = "acard" required /> <br>
       </div> 
     </div>

     <div class = "row">
      <div class="col-sm-6">
       <label for="gender"> <h4><b> Gender: <font color="#ff2600" size="+1"><sup>*</sup></font></b></h4> </label>
        <select name="g" class="form-control" required >
         <option value="">Select Gender</option>
         <option value="Male">Male</option>
         <option value="Female">Female</option>
         <option value="Other">Other</option>
        </select><br>
       </div>

       <div class="col-sm-6">
        <label for="bloodgroup"> <h4><b> Blood-group: <font color="#ff2600" size="+1"><sup>*</sup></font></b></h4> </label>
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
      </div>

      <div class = "row">
       <div class="col-sm-4">
        <label for="mob"> <h4><b> Mobile Number: <font color="#ff2600" size="+1"><sup>*</sup></font></b></h4> </label>
        <input class="form-control" type = "text" placeholder = "Enter 10 digits" name= "mob" required /> <br>
       </div>
 
       <div class="col-sm-4">
        <label for="email"> <h4><b> E-mail id: <font color="#ff2600" size="+1"><sup>*</sup></font></b></h4> </label>
        <input class="form-control" type = "email" placeholder = "abc@gmail.com" name = "email" required /> <br>
       </div>
       
       <div class="col-sm-4">
        <label for="pcode"> <h4><b> Pincode: <font color="#ff2600" size="+1"><sup>*</sup></font></b></h4> </label>
        <input class="form-control" type = "text" name = "pcode" required /> <br>
       </div>
      </div>
      
      <div class = "row">
       <div class="col-sm-4">
        <label for="addr"> <h4><b>Address: <font color="#ff2600" size="+1"><sup>*</sup></font></b></h4> </label>
        <input class="form-control" type = "text" name = "addr" required /> <br>
       </div>
 
       <div class="col-sm-4">
        <label for="state"> <h4><b>State: <font color="#ff2600" size="+1"><sup>*</sup></font></b></h4> </label>
        <input class="form-control" type = "text" placeholder = "i.e., Maharashtra" value=" Maharashtra" name = "state" readonly /> <br>
       </div>

       <div class="col-sm-4">
        <label for="city"> <h4><b> City: <font color="#ff2600" size="+1"><sup>*</sup></font></b></h4> </label>
        <input class="form-control" type = "text" placeholder = "i.e., Pune" name = "city" required /> <br>
       </div>
      </div>
<p>
      <div class = "row">
       <div class="col-sm-6">
        <label><h4><b>Have you donated blood in the last three months? <font color="#ff2600" size="+1"><sup>*</sup></font></b></h4></label><br>
        <input  type = "radio" value= "Yes" name = "ll" onclick="alert('Not eligible, as you have donated blood in the last three months');" required />
        <label>Yes</label><br>  
        <input  type = "radio" value= "No" name = "ll" required />
        <label>No</label><br>  
       </div><br>

       <div class="col-sm-6">
        <label for="ww"> <h4><b> If yes, then when and where have you donated: <font color="#ff2600" size="+1"></font></b></h4> </label><br>
        <input class="form-control" type = "text" name = "ww">
       </div>
      </div>
  </p>
  <p>      
      <div class = "row">
       <div class="col-sm-6">
        <label><h4><b>Medical History: <font color="#ff2600" size="+1"><sup>*</sup></font></b></h4></label><br>     
          <input  type = "checkbox" value= "Blood Pressure" name = "mh" >
          <label>Blood Pressure</label><br>
          <input  type = "checkbox" value= "Diabetes" name = "mh">
          <label>Diabetes</label><br>
          <input  type = "checkbox" value= "Haemoglobin" name = "mh"> 
          <label>Low Haemoglobin</label><br>
          <input  type = "checkbox" value= "Communicable diseases" name = "mh">  
          <label>Communicable Diseases</label><br>
          <label>Other</label><br>
          <input class="form-control" type = "text" name = "other">
       </div><br>

       <div class="col-sm-6">
        <label><h4><b> Do you have tattoo? <font color="#ff2600" size="+1"><sup>*</sup></font></b></h4></label><br>
         <input  type = "radio" value= "Yes" name = "tt" required />
         <label>Yes</label><br>
         <input  type = "radio" value= "No" name = "tt" required />
         <label>No</label><br>
           <br>
        <label><h4><b> If yes, how many years since you had your last tattoo? <font color="#ff2600" size="+1"><sup>*</sup></font></b></h4></label><br>
        <input  type = "radio" value= "Less than 3 years" name = "ty" onclick="alert('You are not eligible to donate blood');" required />
        <label>Less than 3 years</label><br>
        <input  type = "radio" value= "More then 3 years" name = "ty" required />
        <label>More then 3 years</label><br>
        <input  type = "radio" value= "None" name = "ty" required />
        <label>None</label><br>
       </div>
      </div>
  </p>
      <p>
      <div class = "row">
       <div class="col-sm-4">
        <label for="centre"> <h4><b>Select Centre: <font color="#ff2600" size="+1"><sup>*</sup></font></b></h4> </label>
         <select name="centre" class="form-control" required >
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
        </select><br>
       </div>

       <div class="col-sm-4">
        <label for="date"> <h4><b>Select Date: <font color="#ff2600" size="+1"><sup>*</sup></font></b></h4> </label>
         <select name="date" class="form-control" required >
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
        </select><br>
       </div>
 
       <div class="col-sm-4">
        <label for="time"> <h4><b>Select Time: <font color="#ff2600" size="+1"><sup>*</sup></font></b></h4> </label>
         <select name="time" class="form-control" required >
          <option value="">Select time</option>
          <option value="10-00 - 12-00">10-00 - 12-00</option>
          <option value="12-00 - 2-00">12-00 - 2-00</option>
          <option value="3-00 - 5-00">3-00 - 5-00</option>
        </select><br>
       </div>
      </div>
</p>
       <!---<input type="hidden" name="MAX_FILE_SIZE" value="16000">
       <label for="file"> <h4><b>Upload documents: <font color="#ff2600" size="+1"><sup>*</sup></font></b></h4> </label><br>
       <input type="file" name="ufile" accept=".doc,.docx,.pdf" ><br>-->
     
     
     <p><center><button type = "submit" class = "btn btn-default" >SUBMIT</button></center>
</form>
</div>
  
<?php include 'footer.php';?>
</body>
</html>