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
    
    $loginSql = "Select * from employees";
    if (mysqli_connect_error()){
        die('Connect Error('. mysqli_connect_error() .')'
            . mysqli_connect_error());
    }
    else {
        $Account = mysqli_query($conn, $loginSql);
        $Admin_Account = mysqli_fetch_array($Account);
        if ($Admin_Account['Employee_ID'] != null){
            $Admin_Sql = "Select * from admin;";
            $Employee_Sql = "Select * from employees;";
            $List = "Select FirstName, LastName, AccountType, Status FROM customer_account";
            $List = $conn->query($List);
            $Admin = $conn->query($Admin_Sql);
            $Employee = $conn->query($Employee_Sql);
            $new = array();
            while ($newElement = $List->fetch_assoc()){
                $new[] = $newElement;   
                echo $newElement['AccountType'];              
            }
            $_SESSION['Employees'] = $new;           
            header("Location: http://localhost/Bookstore-Soft-Engr/Admin%20Homepage/ManageUsers/manageUsers.php");
        }
        else{
            header("Location: ");
        }
    }
    $conn->close();

}
?>