<?php
    $EmailAddress = filter_input(INPUT_POST,'EmailAddress');
    $Password = filter_input(INPUT_POST,'Password');

    $host = "localhost";
    $dbusername = "root";
    $dbpassword = "";
    $dbname = "online_bookstore";

    $conn = new mysqli ($host, $dbusername, $dbpassword, $dbname);

    if (mysqli_connect_error()){
        die('Connect Error('. mysqli_connect_error() .')'
            . mysqli_connect_error());
    } 
    else {
        $sql = "Select * from customer_account ca where (ca.EmailAddress = $EmailAddress and 
                                                         ca.Password = $Password)";
        $openAccount = mysqli_query($conn, $sql);
        $results = mysqli_fetch_array();
        $F = $results[0];
        $L = $results[1];
        $E = $results[3];
        $P = $results[4];
        $SA = $results[5];
        $C = $results[6];
        $St = $results[7];
        $ZC = $results[8];
        $CT = $results[9];
        $CN = $results[10];
        $Exp = $results[11];
        $CVV = $results[12];

        header("Location: http://localhost/bookstore-Soft-Engr-master/EditProfile/edit_profile.php?F=$F&L=$L&E=$E&Phone=$P&Street=$SA&City=$C&State=$St&Zip=$ZC&CT=$CT&CN=$CN&Exp=$Exp&CVV=$CVV");
    }
    