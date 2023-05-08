<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
    <title>Administrator</title>
    <style>


* 

{
  box-sizing: border-box;
}

/* Add padding to containers */
.container {
  padding: 0px;
  background-color: #212121;
  color: #f1f1f1;
}


/* Overwrite default styles of hr */
hr {
  border: 1px solid #f1f1f1;
  margin-bottom: 25px;
}
input[type=text], input[type=password] {
  width: 100%;
  padding: 15px;
  margin: 5px 0 22px 0;
 
  border: none;
  background: white;
  color: black;
}

input[type=text]:focus, input[type=password]:focus {
  background-color: #ddd;
  outline: none;
} 
/* Set a style for the submit button */
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
    </style>
</head>
<body style="background-color: #212121;">
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <a class="navbar-brand" href="Index.php">San Jose Litex Senior High School</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        
      
      
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      
        <a class="nav-link" href="Sign Up.php">Sign Up<span class="sr-only">(current)</span></a>
      
      <a class="nav-link" href="Administrator.php">Administrator<span class="sr-only"></span></a>
      <a class="nav-link" href="#">About Us<span class="sr-only"></span></a>
      <a class="nav-link" href="#">Contacts<span class="sr-only"></span></a>
      <a class="nav-link" href="Results.php">Student Results<span class="sr-only"></span></a>
      
         
        </div>
     
    </ul>
    
  </div>
</nav>
<hr><h1 style="color:White" >Basic Information</h1><hr>
<table class="table table-dark">
<thead> <!--Para sa Basic Information -->
    <tr>
      <th >ID</th>
      <th >School Year</th>
      <th >Grade Level Enrolling For</th>
      <th >PSA</th>
      <th >LRN</th>
      <th >Last Name</th>
      <th >First Name</th>
      <th >Middle Name</th>
      <th >Extension</th>
      <th >Birth Date</th>
      <th >Birth Place</th>
      <th >Sex</th>
      <th >Age</th>
      <th >Mothertongue</th>
      <th >Idigenous People</th>
      <th >Four P's Member</th>
      <th >Email</th>
    </tr>
    <?php
    $conn = mysqli_connect("localhost", "root", "", "accounts");
    if($conn-> connect_error){
       die("Connection Failed:".$conn->connect_error);
   }
    $sql = 
    "SELECT ID, 
    SchoolYear,
    GradeLevelEnrollingFor,
     PSA, 
     LRN, 
    Lastname, 
    Firstname, 
    MiddleName, 
    Extension,
    BirthDate,
    BirthPlace,
    Sex,
    Age, 
    Mothertongue,
    IP,
    FourP,
    Email
FROM user_data";
    $result = $conn-> query($sql);
    if ($result-> num_rows > 0)
    {
      while ($row = $result-> fetch_assoc())
      {
        echo "<tr><td>". 
         $row["ID"]. "</td><td>"
        .$row["SchoolYear"]."</td><td>"
        .$row["GradeLevelEnrollingFor"]."</td><td>"
        .$row["PSA"]."</td><td>"
        .$row["LRN"]. "</td><td>"
        .$row["Lastname"]. "</td><td>"
        . $row["Firstname"]. "</td><td>" 
        . $row["MiddleName"]. "</td><td>"
        . $row["Extension"]. "</td><td>"
        . $row["BirthDate"]. "</td><td>"
        . $row["BirthPlace"]. "</td><td>"
        . $row["Sex"]. "</td><td>"
        . $row["Age"]. "</td><td>"
        . $row["Mothertongue"]. "</td><td>"
        . $row["IP"]. "</td><td>"
        . $row["FourP"]. "</td><td>"
        .$row["Email"]. "</td></tr>";  

         
      }
      echo "";
    }
     else {

      echo "O Result";
     }
     $conn-> close();
   ?>


</table> 



<hr><h1 style="color:White">Address</h1><hr>
<table class="table table-dark">
<thead>
    <tr>
      <th >ID</th>
      <th >HouseNumberStreet </th>
      <th >StreetName </th>
      <th >Barangay </th>
      <th >MunicipalityCity </th>
      <th >Province </th>
      <th >Country </th>
      <th >Zip Code</th>
    <?php
    $conn = mysqli_connect("localhost", "root", "", "accounts");
    if($conn-> connect_error){
       die("Connection Failed:".$conn->connect_error);
   };
    $sql = 
    "SELECT ID, 
HouseNumberStreet,	
StreetName	,
Barangay	,
MunicipalityCity	,
Province	,
Country	,
ZipCode	

     FROM user_data";
    $result = $conn-> query($sql);
    if ($result-> num_rows > 0)
    {
      while ($row = $result-> fetch_assoc())
      {
        echo "<tr><td>". 
         $row["ID"]. "</td><td>"
        .$row["HouseNumberStreet"]. "</td><td>"  
        .$row["StreetName"]. "</td><td>"  
        .$row["Barangay"]. "</td><td>"  
        .$row["MunicipalityCity"]. "</td><td>"  
        .$row["Province"]. "</td><td>"  
        .$row["Country"]. "</td><td>"
        .$row["ZipCode"]. "</td><td>";
        

         
      }
      echo "</table>";
    }
     else {

      echo "O Result";
     }
     $conn-> close();
   ?>

    
</table>



<hr><h1 style="color:White">Contact Details</h1><hr>
<table class="table table-dark">
<thead>
    <tr>
    <th >ID </th>
    <th >FatherLastName	 </th>
      <th >FatherFirstName	 </th>
      <th >FatherMiddleName </th>
      <th >FatherContactNumber </th>
      <th >MotherLastName	, </th>
      <th >MotherFirstName	 </th>
      <th >MotherMiddleName </th>
      <th >MotherContactNumber </th>
      <th > GuardianLastName</th>
      <th >GuardianFirstName	 </th>
      <th >GuardianMiddleName </th>
      <th >GuardianContactNumber </th>
    <?php
    $conn = mysqli_connect("localhost", "root", "", "accounts");
    if($conn-> connect_error){
       die("Connection Failed:".$conn->connect_error);
   };
    $sql = 
    "SELECT ID, 

FatherLastName	,
FatherFirstName	,
FatherMiddleName	,
FatherContactNumber	,
MotherLastName	,
MotherFirstName	,
MotherMiddleName	,
MotherContactNumber	,
GuardianLastName	,
GuardianFirstName	,
GuardianMiddleName	,
GuardianContactNumber
     FROM user_data";
    $result = $conn-> query($sql);
    if ($result-> num_rows > 0)
    {
      while ($row = $result-> fetch_assoc())
      {
        echo "<tr><td>" 
        .$row["ID"]. "</td><td>"  
        .$row["FatherLastName"]. "</td><td>"  
        .$row["FatherFirstName"]. "</td><td>"  
        .$row["FatherMiddleName"]. "</td><td>"  
        .$row["FatherContactNumber"]. "</td><td>"  
        .$row["MotherLastName"]. "</td><td>"  
        .$row["MotherFirstName"]. "</td><td>"  
        .$row["MotherMiddleName"]. "</td><td>"  
        .$row["MotherContactNumber"]. "</td><td>"  
        .$row["GuardianLastName"]. "</td><td>"  
        .$row["GuardianFirstName"]. "</td><td>"  
        .$row["GuardianMiddleName"]. "</td><td>"  
        .$row["GuardianContactNumber"]. "</td></tr>";  

         
      }
      echo "</table>";
    }
     else {

      echo "O Result";
     }
     $conn-> close();
   ?>

    
</table>



    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnj.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>



<