<?php
    //all the variables 
    $FirstName = filter_input(INPUT_POST,'firstNameBar');
    $LastName = filter_input(INPUT_POST,'lastNameBar');
    $Password = filter_input(INPUT_POST,'passwordBar');
    $EmailAddress = filter_input(INPUT_POST,'emailAddressBar');
    $PhoneNumber = filter_input(INPUT_POST,'phoneNumberBar');
    $StreetAddress = filter_input(INPUT_POST,'streetAddressBar');
    $City = filter_input(INPUT_POST,'cityBar');
    $State = filter_input(INPUT_POST,'stateBar');
    $ZipCode = filter_input(INPUT_POST,'zipCodeBar');
    $CardType = filter_input(INPUT_POST,'cardTypeBar');
    $CardNumber = filter_input(INPUT_POST,'cardnumberBar');
    $ExpirationDate = filter_input(INPUT_POST,'expirationDateBar');
    $CVV = filter_input(INPUT_POST,'CVCBar');

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
                SET FirstName = '$FirstName', LastName = '$LastName', Password = '$Password', PhoneNumber ='$PhoneNumber', StreetAddress = '$StreetAddress', City = '$City', State = '$State', ZipCode = '$ZipCode', CardType = '$CardType', CardNumber = '$CardNumber', ExpirationDate = '$ExpirationDate', CVV = '$CVV'
                WHERE EmailAddress = '$EmailAddress'";
        if ($conn->query($sql)){
            echo "User Information Updated Successfully";
        } else {
            echo "Error: ". $sql ."<br>". $conn->error;
        }
        $conn->close();
    }

?>