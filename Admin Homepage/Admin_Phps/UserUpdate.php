<?php 

session_start();
$Admin_ID = "12345";
$Account_ID = filter_input(INPUT_POST,'Employee_ID');
$Status_Change = filter_input(INPUT_POST,'change');
echo $Admin_ID;
echo $Account_ID;
echo $Status_Change;

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
                if ($Status_Change == "Reinstate") {
                    $sql = "UPDATE employees SET Status = 'Active' WHERE Employee_ID = '$Account_ID';";
                }
                else if ($Status_Change == "Suspend") {
                    $sql = "UPDATE employees SET Status = 'Suspended' WHERE Employee_ID = '$Account_ID';";
                }
                else if ($Status_Change == "Promote") {
                    $sql = "UPDATE employees SET Role = 'Admin' WHERE Employee_ID = '$Account_ID';";
                }
                else if ($Status_Change == "Demote") {
                    $sql = "UPDATE employees SET Role = 'Employee' WHERE Employee_ID = '$Account_ID';";
                }
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