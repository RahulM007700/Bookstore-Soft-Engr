<?php 

session_start();
$Admin_ID = ;
$Account_ID = ;
$Promo = ;
$ISBN = ;
$Discount = ; 
$Effective = ;
$Sell = ;

if (!empty($Admin_ID)) {

    $host = "localhost";
    $dbusername = "root";
    $dbpassword = "";
    $dbname = "online_bookstore";

    //Make Connection
    $conn = mysqli_connect($host, $dbusername, $dbpassword, $dbname);
    
    $loginSql = "Select * from admin a where a.Admin_ID = $Admin_ID;"
    if (mysqli_connect_error()){
        die('Connect Error('. mysqli_connect_error() .')'
            . mysqli_connect_error());
    }
    else {
        if (!empty($Account_ID)){
            if (!empty($Promo)){
                $SQL = "SELECT * FROM promotions WHERE Promotion_ID = '$Promo'";
                $check = mysqli_query($SQL);
                $check = mysqli_fetch_array($check);
                if (sizeof($check) != 0) { 
                    $sql = "UPDATE promotions SET Promotion_ID = '$Status_Change' WHERE Employee_ID = '$Account_ID';";
                    if ($conn->query($sql)){
                        echo "Promotion information updated Successfully";
                    } else {
                        echo "Error: ". $sql ."<br>". $conn->error;
                    }
                } else {
                    $sql = "INSERT INTO promotions (Promotion_ID, ISBN, Discount, Effective_Date, SellBy_Date) VALUES ('$Promo', '$ISBN', '$Discount', '$Effective', '$Sell');";    
                    if ($conn->query($sql)) {
                        echo "Promotion information inserted."
                    } else {
                        echo "Error: ". $sql ."<br>". $conn->error;
                    }
                }
                $conn->close();
            }
        }
    }

}

?>