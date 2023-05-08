<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>Results</title>
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
<br><br><br>

    

                  
          
                                <form action="" method="GET">
                                <div class="container">
                                        <input type="text" name="search" required value="<?php if(isset($_GET['search'])){echo $_GET['search']; } ?>" placeholder="LRN">
                                        <button type="submit" class="registerbtn" value="Search">Search</button>
                                    

                          
                                        
                                
                            <?php 
                                    $con = mysqli_connect("localhost","root","","accounts");

                                    if(isset($_GET['search']))
                                    {
                                        $filtervalues = $_GET['search'];
                                        $query = "SELECT * FROM user_data WHERE CONCAT(ID, 
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
                                        Email, 
                                        HouseNumberStreet,	
                                        StreetName	,
                                        Barangay	,
                                        MunicipalityCity	,
                                        Province	,
                                        Country	,
                                        ZipCode,
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
                                        GuardianContactNumber	   ) LIKE '%$filtervalues%' ";
                                        $query_run = mysqli_query($con, $query);

                                        if(mysqli_num_rows($query_run) > 0)
                                        {
                                            foreach($query_run as $data)
                                            {
                                                ?>
                                                <hr><h1>Basic Information</h1> <hr>
                                                <h5>ID:<?= $data['ID']; ?> </h5>
                                                    <h5>School Year: <?= $data['SchoolYear']; ?></h5>
                                                    <h5>Grade Level Enrolling For: <?= $data['GradeLevelEnrollingFor']; ?></h5>
                                                    <h5>PSA: <?= $data['PSA']; ?></h5>
                                                    <h5>LRN: <?= $data['LRN']; ?></h5>
                                                    <h5>Last Name: <?= $data['LastName']; ?></h5>
                                                    <h5>First Name: <?= $data['FirstName']; ?></h5>
                                                    <h5>Middle Name: <?= $data['MiddleName']; ?></h5>
                                                    <h5>Extension: <?= $data['Extension']; ?></h5>
                                                    <h5>Birth Date: <?= $data['BirthDate']; ?></h5>
                                                    <h5>Birth Place: <?= $data['BirthPlace']; ?></h5>
                                                    <h5>Sex: <?= $data['Sex']; ?></h5>
                                                    <h5>Age: <?= $data['Age']; ?></h5>
                                                    <h5>Mother Tongue: <?= $data['Mothertongue']; ?></h5>
                                                    <h5>IP: <?= $data['IP']; ?></h5>
                                                    <h5>FourP's ID no.: <?= $data['FourP']; ?></h5>
                                                    <h5>Email: <?= $data['Email']; ?></h5>

                                                    <hr><h1>Address</h1>  <hr> 
                                                    <h5>House Number / Street: <?= $data['HouseNumberStreet']; ?></h5>
                                                    <h5>Street Name: <?= $data['StreetName']; ?></h5>
                                                    <h5>Barangay: <?= $data['Barangay']; ?></h5>
                                                    <h5>Municipality / City: <?= $data['MunicipalityCity']; ?></h5>
                                                    <h5>Province: <?= $data['Province']; ?></h5>
                                                    <h5>Country: <?= $data['Country']; ?></h5>
                                                    <h5>Zipcode: <?= $data['ZipCode']; ?></h5>
                                                    
                                                    <hr><h1>Contacts</h1><hr>
                                                    <h5>Father's Last Name: <?= $data['FatherLastName']; ?></h5>
                                                    <h5>Father's First Name: <?= $data['FatherFirstName']; ?></h5>
                                                    <h5>Father's Middle Name: <?= $data['FatherMiddleName']; ?></h5>
                                                    <h5>Father's Contact Number: <?= $data['FatherContactNumber']; ?></h5>
                                                    <h5>Mother's Last Name: <?= $data['MotherLastName']; ?></h5>
                                                    <h5>Mother's First Name: <?= $data['MotherFirstName']; ?></h5>
                                                    <h5>Mother's Middle Name: <?= $data['MotherMiddleName']; ?></h5>
                                                    <h5>Mother's Contact Number: <?= $data['MotherContactNumber']; ?></h5>
                                                    <h5>Guardian's Last Name: <?= $data['GuardianLastName']; ?></h5>
                                                    <h5>Guardian's First Name: <?= $data['GuardianFirstName']; ?></h5>
                                                    <h5>Guardian's Middle Name: <?= $data['GuardianMiddleName']; ?></h5>
                                                    <h5>Guardian's Contact Number: <?= $data['GuardianContactNumber']; ?></h5>

      
      
      

      
      
    
      
     
      
      
     
      
   
      
      
     
                                                
                                            
                                                <?php
                                            }
                                        }
                                        else
                                        {
                                            ?>
                                                <tr>
                                                    <td colspan="4">No Record Found</td>
                                                </tr>
                                            <?php
                                        }
                                    }
                                ?>
                                
   






    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnj.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>