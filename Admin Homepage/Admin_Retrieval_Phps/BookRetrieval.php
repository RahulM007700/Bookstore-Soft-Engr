<?php 
session_start();
$Admin_ID = ;

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
        $Account = mysqli_query($conn, $loginSql);
        $Admin_Account = mysqli_fetch_array($Account);
        if ($Admin_Account['Admin_ID'] != null){
            $Available_Books = "Select * from available_books";
            $Books = mysqli_query($conn, $Available_Books);
            $All_Promotion = mysqli_fetch_array($Books);
            $_SESSION['Books'] = $All_Promotions;
            header("Location: ");
        }
        else{
            header("Location: ";)
        }
    }
    $conn->close();

}
?>