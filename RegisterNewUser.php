<?php

$Username = filter_input(INPUT_POST, 'username');
$Password = filter_input(INPUT_POST, 'password');
$FullName = filter_input(INPUT_POST, 'fullName');
$EmailAddress = filter_input(INPUT_POST, 'emailAddress');
$StreetAddress = filter_input(INPUT_POST, 'streetAddress');
$State = filter_input(INPUT_POST, 'state');
$ZipCode = filter_input(INPUT_POST, 'zipCode');
$CardNumber = filter_input(INPUT_POST, 'cardNumber');
$ExpirationDate = filter_input(INPUT_POST, 'expirationDate');
$CVV = filter_input(INPUT_POST, 'CVV');
$AccountID = filter_input(INPUT_POST, 'accountID');

//echo "Password is $password";

if (!empty($Username)){
    if (!empty($Password)){
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
            $sql = "INSERT INTO customer_account (Username, Password, FullName, EmailAddress, StreetAddress, State, ZipCode, CardNumber, ExpirationDate, CVV, AccountID)
                    values ('$Username','$Password', '$FullName', '$EmailAddress', '$StreetAddress', '$State', '$ZipCode', '$CardNumber', '$ExpirationDate', '$CVV', '$AccountID')";
            if ($conn->query($sql)){
                echo "New User is Registered Successfully";
            }
            else {
                echo "Error: ". $sql ."<br>". $conn->error;
            }
            $conn->close();
        }
    }
    else {
        echo "Password is Required";
        die();
    }
}
else {
    echo "Username is Required";
    die();
}

?>