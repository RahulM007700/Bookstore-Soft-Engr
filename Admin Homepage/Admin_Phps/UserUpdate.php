<?php 

session_start();
$Admin_ID = filter_input(INPUT_POST,'FName');
$Account_ID = filter_input(INPUT_POST,'Employee_ID');
$Status_Change = filter_input(INPUT_POST,'Status');

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
        if (!empty($Admin_ID)){
            if (!empty($Status_Change)){
                $sql = "UPDATE employees SET Status = '$Status_Change' WHERE Employee_ID = '$Account_ID';";
                if ($conn->query($sql)){
                    header("Location: http://localhost/Bookstore-Soft-Engr/Admin%20Homepage/Admin_Phps/UserRetrieval.php");
                } else {
                    echo "Error: ". $sql ."<br>". $conn->error;
                }
                $conn->close();
            }
        }
    }

}

?>