<?php
    //all the variables 
    $FirstName = filter_input(INPUT_POST,'firstName');
    $LastName = filter_input(INPUT_POST,'lastName');
    $PhoneNumber = filter_input(INPUT_POST,'phoneNumber');
    $CardNumber = filter_input(INPUT_POST,'cardNumber');
    $CardType = filter_input(INPUT_POST,'cardtype');
    $City = filter_input(INPUT_POST,'city');
    $CVV = filter_input(INPUT_POST,'cvc');
    $EmailAddress = filter_input(INPUT_POST,'emailAddress');
    $ExpirationDate = filter_input(INPUT_POST,'expirationDate');
    $FullName = filter_input(INPUT_POST,'fullName');
    $Password = filter_input(INPUT_POST,'password');
    $State = filter_input(INPUT_POST,'state');
    $StreetAddress = filter_input(INPUT_POST,'street');
    $ZipCode = filter_input(INPUT_POST,'zipCode');

    //db credentials & connect to database 
    $host = "localhost";
    $dbusername = "root";
    $dbpassword = "";
    $dbname = "online_bookstore";

    $conn = new mysqli ($host, $dbusername, $dbpassword, $dbname);
    if (mysqli_connect_error()){
        die('Connect Error('. mysqli_connect_error() .')'
            . mysqli_connect_error());
    } else {
        $sql = "UPDATE customer_account
                SET FirstName = '$FirstName', LastName = '$LastName', PhoneNumber ='$PhoneNumber', StreetAddress = '$StreetAddress', City = '$City', State = '$State', ZipCode = '$ZipCode', CardType = '$CardType', CardNumber = '$CardNumber', ExpirationDate = '$ExpirationDate', CVV= '$CVV'
                WHERE EmailAddress = '$EmailAddress'";
        if ($conn->query($sql)){
            echo "User Information Updated Successfully";
        } else {
            echo "Error: ". $sql ."<br>". $conn->error;
        }
        $conn->close();
    }

?>