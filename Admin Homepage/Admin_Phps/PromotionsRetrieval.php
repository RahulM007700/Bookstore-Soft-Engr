<?php 

session_start();

$Admin_ID = "12345";

if (!empty($Admin_ID)) {

    $host = "localhost";
    $dbusername = "root";
    $dbpassword = "";
    $dbname = "online_bookstore";

    //Make Connection
    $conn = mysqli_connect($host, $dbusername, $dbpassword, $dbname);
    
    $loginSql = "Select * from admin a where a.Admin_ID = $Admin_ID;";
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
            $Email_List = "SELECT EmailAddress FROM customer_account";
            $List = $conn->query($Email_List);
            $List2 = array();
            while ($newElement = $List->fetch_assoc()){
                $List2[] = $newElement['EmailAddress'];                 
            }
            $List3 = implode(', ', $List2);
            $_Session['Emails'] = $List3;
            //print_r($_Session['Emails']);
            $_SESSION['Promotions'] = $new;
            header("Location: http://localhost/Bookstore-Soft-Engr/Admin%20Homepage/ManagePromotions/manage_promotions.php");
        }
        else{
            header("Location: ");
        }
    }
    $conn->close();

}
?>