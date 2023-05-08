<?php

  $con =mysqli_connect('localhost', 'root');

  if($con){

    echo "Connection Succesful";
  }
else {

    echo "Connection Failed";
}
  mysqli_select_db($con, 'accounts');
  //Student's information
  $SchoolYear    = $_POST['SchoolYear'];
  $GLTE          = $_POST['GLTE'];
  $PSA           = $_POST['PSA'];
  $Strand        = $_POST['Strand'];
  $LRN           = $_POST['LRN'];
  $LastName      = $_POST['LastName'];
  $FirstName     = $_POST['FirstName'];
  $MiddleName    = $_POST['MiddleName'];
  $Extension     = $_POST['Extension'];
  $BirthDate     = $_POST['BirthDate'];
  $BirthPlace    = $_POST['BirthPlace'];
  $Sex           = $_POST['Sex'];
  $Age           = $_POST['Age'];
  $MotherTongue  = $_POST['MotherTongue'];
  $IP                = $_POST['IP'];
  $FourP               = $_POST['FourP'];    
  $Email             = $_POST['Email']; 
  $HouseNumberStreet = $_POST['HouseNumberStreet'];
  $StreetName        = $_POST['StreetName'];
  $Barangay          = $_POST['Barangay'];
  $MunicipalityCity  = $_POST['MunicipalityCity'];
  $Province          = $_POST['Province'];
  $Country           = $_POST['Country'];
  $ZipCode           = $_POST['ZipCode'];

  $FatherLastName    = $_POST['FatherLastName'];
  $FatherFirstName   = $_POST['FatherFirstName'];
  $FatherMiddleName  = $_POST['FatherMiddleName'];
  $FatherContactNumber = $_POST['FatherContactNumber'];

  $MotherLastName     = $_POST['MotherLastName'];
  $MotherFirstName     = $_POST['MotherFirstName'];
  $MotherMiddleName   = $_POST['MotherMiddleName'];
  $MotherContactNumber = $_POST['MotherContactNumber'];

  $GuardianLastName   = $_POST['GuardianLastName'];
  $GuardianFirstName  = $_POST['GuardianFirstName'];
  $GuardianMiddleName = $_POST['GuardianMiddleName'];
  $GuardianContactNumber = $_POST['GuardianContactNumber'];
 
 $query ="INSERT INTO user_data 
  ( SchoolYear , GradeLevelEnrollingFor , PSA, Strand, LRN, LastName, FirstName, MiddleName, Extension, BirthDate, BirthPlace, Sex, Age, Mothertongue , IP , FourP, Email ,
  
  HouseNumberStreet, StreetName ,Barangay ,MunicipalityCity, Province ,Country ,ZipCode, FatherLastName, FatherFirstName, FatherMiddleName, FatherContactNumber,MotherLastName,
  MotherFirstName,MotherMiddleName,MotherContactNumber, GuardianLastName, GuardianFirstName, GuardianMiddleName, GuardianContactNumber) 
  VALUES 
  ('$SchoolYear', '$GLTE', '$PSA','$Strand', '$LRN' , '$LastName','$FirstName','$MiddleName','$Extension' , '$BirthDate', '$BirthPlace', '$Sex', '$Age', '$MotherTongue' , '$IP', '$FourP' , '$Email',
   '$HouseNumberStreet','$StreetName','$Barangay','$MunicipalityCity','$Province','$Country','$ZipCode', '$FatherLastName', '$FatherFirstName', '$FatherMiddleName','$FatherContactNumber'
   ,'$MotherLastName','$MotherFirstName','$MotherMiddleName','$MotherContactNumber','$GuardianLastName','$GuardianFirstName','$GuardianMiddleName', '$GuardianContactNumber')";
  
  mysqli_query($con , $query );
  header('location:Success.php'); 

?>
