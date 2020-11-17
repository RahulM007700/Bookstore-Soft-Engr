<?php
session_start();
$Admin_ID = ;
$Account_ID = ;
$ISBN = ; 
$Author = ;
$Title = ;
$Date = ; 
$Method = ;

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
    } else {
        if(!empty($Account_ID)){
            if($Method == 'Add') {
                $SQL = "INSERT INTO available_books (ISBN, Author, Title, Date_Published) VALUES ('$ISBN','$Author','$Title','$Date');";
                mysqli_query($SQL);
                echo = "Book added succesfully";
            } else if($Method == 'Update') {
                $SQL = "UPDATE available_books SET (Author = '$Author', Title = '$Title', Date_Published = '$Date') WHERE ISBN = '$ISBN';";
                mysqli_querty($SQL);
                echo "Book updated successfully";
            } else if($Method == 'Delete') {
                $SQL = "INSERT INTO archive (ISBN, Author, Title, Date_Published) SELECT * FROM available_books WHERE ISBN = '$ISBN';DELETE FROM available_books WHERE ISBN = '$ISBN';";
                mysqli_query($SQL);
                echo "Book deleted successfully";
            } else {
                echo "Wrong method";
            }
            conn->close();
        }
    }
} 

?>