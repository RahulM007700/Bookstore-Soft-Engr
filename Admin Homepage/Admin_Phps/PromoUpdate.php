<?php 

session_start();
$Admin_ID = "12345";
$Promo_Name = filter_input(INPUT_POST,'Promotion_Name');
$Promo = filter_input(INPUT_POST,'Promotion_ID');
$ISBN = filter_input(INPUT_POST,'ISBN');
$Discount = filter_input(INPUT_POST,'Discount'); 
$Exp_Date = filter_input(INPUT_POST,'Expiration_Date');
$Method = filter_input(INPUT_POST,'actions');

if (!empty($Admin_ID)) {

    $host = "localhost";
    $dbusername = "root";
    $dbpassword = "";
    $dbname = "online_bookstore";

    //Make Connection
    $conn = mysqli_connect($host, $dbusername, $dbpassword, $dbname);
    
    $loginSql = "Select * from admin a where a.Admin_ID = '$Admin_ID'";
    if (mysqli_connect_error()){
        die('Connect Error('. mysqli_connect_error() .')'
            . mysqli_connect_error());
    } else {
        if($Method == "Add") {
            //echo "add";
            $SQL1 = "INSERT INTO promotions (Name, Promotion_ID, ISBN, Discount, Exp_Date)
                VALUES ('$Promo_Name', '$Promo', '$ISBN', '$Discount', '$Exp_Date');";
            if($conn->query($SQL1)) {
                //echo "Book added succesfully";
                header("Location: http://localhost/Bookstore-Soft-Engr/Admin%20Homepage/Admin_Phps/PromotionsRetrieval.php");
            }
        } else if($Method == "EDIT") {
            echo "edit";
            echo "$Promo_Name";     
            $SQL2 = "UPDATE promotions 
                    SET Name = '$Promo_Name', ISBN = '$ISBN', Discount = '$Discount', Exp_Date = '$Exp_Date'
                    WHERE Promotion_ID = '$Promo'";
            if (mysqli_query($conn, $SQL2)){
                //echo "Book updated successfully";
                header("Location: http://localhost/Bookstore-Soft-Engr/Admin%20Homepage/Admin_Phps/PromotionsRetrieval.php");
            }
        } else if($Method == "DELETE") {
            //echo "delete";
            $SQL = "DELETE FROM promotions WHERE Promotion_ID = '$Promo';";
            if ($conn->query($SQL)){
                header("Location: http://localhost/Bookstore-Soft-Engr/Admin%20Homepage/Admin_Phps/PromotionsRetrieval.php");
            }
            
        } else {
            echo "Wrong method";
        }
        $conn->Close();
    }

}

?>