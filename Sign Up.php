<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
    <title>Admission Form</title>
    <style>


* 

{
  box-sizing: border-box;
}

/* Add padding to containers */
.container {
  padding: 50px;
  background-color: #0034F7;
  color: #f1f1f1;
  border-radius: 25px;
  opacity: .9;
}


/* Overwrite default styles of hr */
hr {
  border: 1px solid black;
  margin-bottom: 25px;
}
input[type=text] {
  width: 100%;
  padding: 15px;
  margin: 5px 0 22px 0;
 
  border: none;
  background: white;
  color: black;
}

input[type=text]{
  background-color: white;
  outline: none;
} 

.registerbtn {
  background-color: grey;
  color: white;
  padding: 16px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 100%;
  opacity: 0.9;
}

.registerbtn:hover {
  opacity: 1;
}


     .text {

            color:black

     }


     input:invalid {
    border: 3px solid red;
}

 datalist
 {
   color: black;
  

 }

 body {
  background-image: url("School2.jpg");
  background-repeat: no-repeat;
  background-attachment: fixed;
  height: 100%;
  background-position: center;
  background-size: cover;
}
.button {
        background-color: #0034F7;;
        border: none;
        color: white;
        padding: 20px 34px;
        font-size: 20px;
        margin: 4px 2px;
        border-radius: 25px;
        float: right;
        
        
      }
      a:link {
  color: black;
  background-color: transparent;
  text-decoration: none;}

  label{
    color: black;
  }
  h1{
    color: black;
  }
  p{
    color: black;
  }

    </style>
</head>
<body>
<nav class="navbar navbar-expand-lg" style="background-color: #0034F7;"> 
<a class="navbar-brand" href="Index.php" style="color:White">San Jose Litex Senior High School</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
    
      
    
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      
        <a class="nav-link" href="Sign Up.php" style="color:White">Sign Up<span class="sr-only" >(current)</span></a>
      
      <a class="nav-link" href="Administrator.php" style="color:White">Administrator<span class="sr-only" ></span></a>
      <a class="nav-link" href="#" style="color:White">About Us<span class="sr-only" ></span></a>
      <a class="nav-link" href="#" style="color:White">Contacts<span class="sr-only" ></span></a>
      <a class="nav-link" href="Results.php"style="color:White">Student Results<span class="sr-only" span></a>
      
         
        </div>
     
    </ul>
    
  </div>
</nav><!--Navigational Bar-->
<br> <br> <br> 
<div class="container">
    <h1>ENHANCED BASIC EDUCATION ENROLLMENT FORM</h1>
    <hr>
  </div>
  <br>
  <div class="container">
    <hr>
  <p>Print legibly all information in CAPITAL letters. Submit accomplished form to the person in-charge/Registrar/Class Adviser.</p>
    <hr>
    <label for="School Year"><b>School Year 
    (e.g 2021-2022)</label> 
    <input type="text" placeholder="School Year" list="SchoolYear"  maxlength="9" name="SchoolYear"/>
<datalist id="SchoolYear">
  <option>2023-2024</option>
  <option>2024-2025</option>
</datalist>
  
    
</select>

    <label for="Grade Level to Enroll"><b>Grade Level to Enroll (e.g 12 or 11)</label>
    <input type="text" placeholder="Grade Level to Enroll" list="GLTE" pattern="[0-9]+" maxlength="2" name="GLTE"/>
<datalist  id="GLTE">
  <option>11</option>
  <option>12</option>
</datalist>
    <br><br>
    <hr>
    <h1>LEARNERS INFORMATION</h1>
    <hr>
    <label for="PSA"><b> PSA Birth certificate number (If available upon registration)</label>
    <input type="text" placeholder="PSA Birth Certificate Number" name="PSA" id="PSA" pattern="[0-9]+" maxlength="12" >

     
      <p><b>Strands Offered <br></p>
    <p>  Academic Strand  <br>
  Accountancy,Bussiness and Management <br>
  Humanities and Social Science <br>
  Technical-Vocational-Livelyhood Information Communcation Technology <br>
  Technical-Vocational-Livelyhood Home Economics <br></p>
     <label for="Strand"><b>Strand <br> </label>
     <input type="text" placeholder="Strand" name="Strand" id="Strand" >
    
  
    



    <label for="LRN"><b>LRN (Learners Reference No.)</b></label>
    <input type="text" placeholder="LRN" name="LRN" id="LRN" pattern="[0-9]+" maxlength="12" >

    <!-- NAAYOS KOREN PUTANG INA SA WAKAS Maayos na tong taas please wag nyo na pakealama 3:30 1/21/23-->
     

    <label for="Last Name"><b>Last Name</b></label>
    <input type="text" placeholder="Last Name" name="LastName" id="LastName">

    <label for="First Name"><b>First Name</b></label>
    <input type="text" placeholder="First Name" name="FirstName" id="FirstName">

    <label for="Middle Name"><b>Middle Name</b></label>
    <input type="text" placeholder="Middle Name" name="MiddleName" id="MiddleName">

    <label for="Extension"><b>Extension e.g JR, III (If Applicable)</b></label>
    <input type="text" placeholder="Extension" name="Extension" id="Extension">

    <label for="BirthDate"><b>Birth Date</b></label>
    <input type="date" name="BirthDate" id="BirthDate">
<br>
    <label for="BirthPlace"><b>Birth Place</b></label>
    <input type="text" placeholder="BirthPlace" name="BirthPlace" id="BirthPlace">

    <label for="Sex">Sex</label>
    <input type="text" placeholder="Sex" list="Sex" name="Sex"/>
<datalist id="Sex">
  <option>Male</option>
  <option>Female</option>
  <option>Other</option>
</datalist>

    <label for="Age" >Age</label>
    <input type="number" placeholder="Age" name="Age" id="Age" min="15" max="20" >
    <br>
    <label for="Mother Tongue">Mother Tongue</label>
    <input type="text" placeholder="Mother Tongue" name="MotherTongue" id="MotherTongue">

     <!-- Done  4:27 PM 1/21/23 -->

    <label for="IP">belonging to any indigenous peopls (IP) Community/Indigenous Cultural Community?  If yes, please specify</label>
    <input type="text" placeholder="Community / Indigenous Cultural Community"  name="IP" id="IP"> 

    <label for="FourP">Is your family a benificiary of 4Ps? If yes, write the 4Ps Household ID Number below</label>
    <input type="text" placeholder="4Ps Household Number" name="FourP" id="FourP" pattern="[0-9]+" maxlength="12">
     
    <label for="Email"><b>Email</b></label>
    <input type="text" placeholder="Enter Email" name="Email" id="Email">
<hr>

<hr>
Address 
<hr>
<label for ="HouseNumber/Street" > House Number / Street </label>
<input type="text" placeholder="House Number / Street" name="HouseNumberStreet" id="HouseNumberStreet">
<label for ="StreetName"> Street Name</label>
<input type="text" placeholder="Street Name" name="StreetName" id="StreetName">
<label for ="Barangay" > Barangay</label>
<input type="text" placeholder="Barangay" name="Barangay" id="Barangay">
<label for ="Municipality/City" > Municipality / City</label>
<input type="text" placeholder="Municipality / City" name="MunicipalityCity" id="MunicipalityCity">
<label for ="Province" > Province</label>
<input type="text" placeholder="Province" name="Province" id="Province">
<label for ="Country" >Country </label>
<input type="text" placeholder="Country" name="Country" id="Country">
<label for ="ZipCode" >Zip Code</label>
<input type="text" placeholder="Zip Code" name="ZipCode" id="ZipCode">

    <hr>
 <h1> PARENT/GUARDIAN INFORMATION </h1>
<hr>
    <label for="FatherLastName"> Father's Last name </label>
    <input type="Text" placeholder="Last Name" name="FatherLastName" id="FatherLastName">
    <label for="FatherFirstName"> Father's First name </label>
    <input type="Text" placeholder="First Name" name="FatherFirstName"id="FatherFirstName">
    <label for="FatherMiddleName"> Father's Middle name </label> 
    <input type="Text" placeholder="Middle Name"name="FatherMiddleName"id="FatherMiddleName">
    <label for="FatherContactNumber"> Father's Last name </label>
    <input type="Text" placeholder="Contact Number"name="FatherContactNumber"id="FatherContactNumber"pattern="[0-9]+" maxlength="11">
    <hr>
    <Label for="MotherLastName"> Mother's Last Name</Label>
    <input type="Text" placeholder="Last Name"name="MotherLastName"id="MotherLastName">
    <Label for="MotherFirstName"> Mother's First Name</Label>
    <input type="Text" placeholder="First Name"name="MotherFirstName"id="MotherFirstName"> 
    <Label for="MotherMiddleName"> Mother's Middle Name</Label>
    <input type="Text" placeholder="Middle Name"name="MotherMiddleName"id="MotherMiddleName">
    <Label for="MotherContactNumber"> Mother's Contact Number</Label>
    <input type="Text" placeholder="Contact Number"name="MotherContactNumber"id="MotherContactNumber"pattern="[0-9]+" maxlength="11"> 
    <hr>
    <Label for="GuardianLastName">Guardian's Last Name</Label>
    <input type="Text" placeholder="Last Name"name="GuardianLastName"id="GuardianLastName">
    <Label for="GuardianFirstName">Guardian's First Name</Label>
    <input type="Text" placeholder="First Name"name="GuardianFirstName"id="GuardianFirstName"> 
    <Label for="GuardianMiddleName">Guardian's Middle Name</Label>
    <input type="Text" placeholder="Middle Name"name="GuardianMiddleName"id="GuardianMiddleName">
    <Label for="GuardianContactNumber">Guardian's Contact Number</Label>
    <input type="Text" placeholder="Contact Number"name="GuardianContactNumber"id="GuardianContactNumber"pattern="[0-9]+" maxlength="11">
    <hr>




    <button type="submit" class="registerbtn" value="submit">Register</button>
  </div>
   
  
 
</form>

    <div> <!--Scripts-->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnj.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    
    
        
        
        
    
   
</div>
</body>
</html>