<?php
//all the variables
$CardNumber = filter_input(INPUT_POST, 'cardNumber');
$CardType = filter_input(INPUT_POST, 'cardType');
$City = filter_input(INPUT_POST, 'city');
$CVC = filter_input(INPUT_POST, 'cvc');
$EmailAddress = filter_input(INPUT_POST, 'emailAddress');
$ExpirationDate = filter_input(INPUT_POST, 'expirationDate');
$FirstName = filter_input(INPUT_POST, 'firstName');
$LastName = filter_input(INPUT_POST, 'lastName');
$Password = filter_input(INPUT_POST, 'password');
$State = filter_input(INPUT_POST, 'state');
$StreetAddress = filter_input(INPUT_POST, 'streetAddress');
$ZipCode = filter_input(INPUT_POST, 'zipCode');

//db credentials & connect to database
$host = "localhost";
$dbusername = "root";
$dbpassword = "";
$dbname = "online_bookstore";

$conn = new mysqli($host, $dbusername, $dbpassword, $dbname);

if (mysqli_connect_error()) {
    die('Connect Error(' . mysqli_connect_error() . ')'
        . mysqli_connect_error());
} else {
    $sql = "UPDATE customer_account
                SET FirstName = '$FirstName', LastName = '$LastName', Password = '$Password', PhoneNumber ='$PhoneNumber', StreetAddress = '$StreetAddress', City = '$City', State = '$State', ZipCode = '$ZipCode', CardType = '$CardType', CardNumber = '$CardNumber', ExpirationDate = '$ExpirationDate', CVC= '$CVC'
                WHERE EmailAddress = '$EmailAddress'";
    if ($conn->query($sql)) {
        echo "User Information Updated Successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
    $conn->close();
}
