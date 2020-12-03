<?php
session_start();
$Email = $_SESSION['Email'];

$host = "localhost";
$dbusername = "root";
$dbpassword = "";
$dbname = "online_bookstore";

//Make Connection
$conn = mysqli_connect($host, $dbusername, $dbpassword, $dbname);

if (mysqli_connect_error()){
    die('Connect Error('. mysqli_connect_error() .')'
        . mysqli_connect_error());
}
else {
    $now = getdate();
    $day = $now['mday'];
    $mon = $now['mon'];
    $year= $now['year'];
    $date = $mon.'-'.$day.'-'.$year;
    $SQL = "INSERT INTO order_history (ISBN, Name, Quantity, Price, User_ID, Cover, Email, Date_Purchased) SELECT Item_ID, Name, Quantity, Price, Account_ID, Cover, Email, Date_Purchased FROM shopping_cart WHERE Email='$Email'";
    $SQL2 = "UPDATE shopping_cart SET Date_Purchased='$date' WHERE Email='$Email'";
    $SQL3 = "DELETE FROM shopping_cart WHERE Email='$Email'";
    //echo $SQL;
    if($conn->query($SQL2)) {
        echo "ur ";
        if($conn->query($SQL)) {
            echo "mom";
            if($conn->query($SQL3)) {
                echo " is awesome";
                header("Location: http://localhost/Bookstore-Soft-Engr/OrderHistory/orderHistoryRetrieval.php");
            } else {
                echo("Error description: " . $conn -> error);
            }
        } else {
            echo("Error description: " . $conn -> error);
        }
    } else {
        echo("Error description: " . $conn -> error);
    }    
}
$conn->close();

?>