<?php
session_start();
$Book_Name = filter_input(INPUT_POST,'Book_Name');
$ISBN = filter_input(INPUT_POST,'ISBN');
$Category = filter_input(INPUT_POST,'Category');
$Author = filter_input(INPUT_POST,'Author');
$Edition = filter_input(INPUT_POST,'Edition');
$Publisher = filter_input(INPUT_POST,'Publisher');
$Date_Published = filter_input(INPUT_POST,'Date_Published');
$Quantity = filter_input(INPUT_POST,'Quantity');
$Selling_Price = filter_input(INPUT_POST,'Selling_Price');
$Asking_Price = filter_input(INPUT_POST,'Asking_Price');
$Min_Threshold = filter_input(INPUT_POST,'Min_Threshold');
//$image = filter_input(INPUT_POST, $_FILES['image']['tmp_name']); 
$Admin_ID = "12345";
$Method = filter_input(INPUT_POST,'actions');


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
    } else {
        if($Method == "Add") {
            $SQL1 = "INSERT INTO available_books (Book_Name, ISBN, Category, Author, Edition, Publisher, Date_Published, Quantity, Selling_Price, Asking_Price, Min_Threshold, Cover)
                VALUES (?,?,?,?,?,?,?,?,?,?,?,?);";
            $image = $_FILES['image']['tmp_name'];
            $img = file_get_contents($image);
            $conn = mysqli_connect('localhost','root','','online_bookstore') or die('Unable To connect');
            $sql = "UPDATE available_books SET (Cover=?) WHERE ISBN='$ISBN'";
            $stmt = mysqli_prepare($conn, $SQL1);

            mysqli_stmt_bind_param($stmt, "sssssssiddis",$Book_Name, $ISBN, $Category, $Author, $Edition,$Publisher, $Date_Published, $Quantity, $Selling_Price, $Asking_Price, $Min_Threshold, $img);
            mysqli_stmt_execute($stmt);
            //print_r($img);
            $check = mysqli_stmt_affected_rows($stmt);
            echo $check;
            if($check==1){
                $msg = 'Image Successfullly UPloaded';
            } else{
                echo("Error description: " . $conn -> error);
            }            
            //echo "Book added succesfully";
            header("Location: http://localhost/Bookstore-Soft-Engr/Admin%20Homepage/Admin_Phps/BookRetrieval.php");
        } else if($Method == "EDIT") {
            //echo $ISBN;
            $SQL2 = "UPDATE available_books 
                    SET Book_Name = '$Book_Name', ISBN = '$ISBN', Category = '$Category', Author = '$Author', Edition = '$Edition', Publisher = '$Publisher', Date_Published = '$Date_Published', 
                        Quantity = '$Quantity', Selling_Price = '$Selling_Price', Asking_Price = '$Asking_Price', 
                        Min_Threshold = '$Min_Threshold', Cover = '$Image' 
                    WHERE ISBN = '$ISBN'";
            if (mysqli_query($conn, $SQL2)){
                //echo "Book updated successfully";
                header("Location: http://localhost/Bookstore-Soft-Engr/Admin%20Homepage/Admin_Phps/BookRetrieval.php");
            }
        } else if($Method == "DELETE") {
            //echo "Hello";
            $i = filter_input(INPUT_POST,'i');
            //echo "i is".$i;
            $Darealisbn = $_SESSION['Books'][$i]['ISBN'];
            //echo($Darealisbn);
            $SQL3 = "INSERT INTO archive (Book_Name, ISBN, Category, Author, Edition, Publisher, Date_Published, Quantity, Selling_Price, Asking_Price, Min_Threshold, Cover)
                SELECT * FROM available_books WHERE ISBN = '$Darealisbn'";
            $SQL4 = "DELETE FROM available_books WHERE ISBN = '$Darealisbn';";
            if ($conn->query($SQL3)){
                echo "Hello from the outside!";
                if ($conn->query($SQL4)){
                    echo "Book deleted successfully";
                    header("Location: http://localhost/Bookstore-Soft-Engr/Admin%20Homepage/Admin_Phps/BookRetrieval.php");
                }
            }
        } else {
            echo "Wrong method";
        }
        $conn->close();
    }
} 

?>