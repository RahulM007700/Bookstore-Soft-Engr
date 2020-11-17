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
            $Promotions_Sql = "Select * from promotions;";
            $Promotions = $conn->query($Promotions_Sql);
            $new = array();
            while ($newElement = $Promotions->fetch_assoc()){
                $new[] = $newElement;                 
            }
            $_SESSION['Promotions'] = $new;
            header("Location: ");
        }
        else{
            header("Location: ")
        }
    }
    $conn->close();

}
?>