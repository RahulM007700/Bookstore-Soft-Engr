<?php
 $firstName = $_POST['firstNameBar'];
 $lastName = $_POST['lastNameBar'];
 $phonenumber = $_POST['phoneNumberBar'];
 $emailaddress = $_POST['emailAddressBar'];
 $password = $_POST['passwordBar'];
 $streetaddress = $_POST['streetAddressBar'];
 $city = $_POST['cityBar'];
 $state = $_POST['stateBar'];
 $zipcode = $_POST['zipCodeBar'];
 $cardtype = $_POST['cardTypeBar'];
 $cardnumber = $_POST['cardNumberBar'];
 $cvc = $_POST['CVCBar'];
 $expirationdate = $_POST['expirationDateBar'];

$result = $_POST[''];
  
$host = "localhost";
$dbusername = "root";
$dbpassword = "";
$dbname = "online_bookstore";

//Make Connection
$conn = new mysqli ($host, $dbusername, $dbpassword, $dbname);

if (mysqli_connect_error()){
    die('Connect Error('. mysqli_connect_error() .')'
        . mysqli_connect_error());
}
else {
     $result = mysqli_query("select * from users where username = $username' and password = '$password'");
                or die("Failed to query database ".mysql_error());
     $row = mysql_fetch_array($result);    
     if($row['username'] == $username && $row['password'] == $password){ //correct
         //the email exists and user can login
         echo true;
     }else if($row['username'] != $username || $row['password'] != $password){ //wrong crdentials
         echo false;
     } 

     $conn->close();
        
}
?>