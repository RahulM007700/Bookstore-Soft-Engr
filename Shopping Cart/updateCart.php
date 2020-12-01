<?php 
    session_start();
    $Item_ID = filter_input(INPUT_POST,'Item_ID');
    $Cover = $_SESSION['cover'];
    $Name = filter_input(INPUT_POST,'Name');
    $Quantity = filter_input(INPUT_POST,'quantity');
    $Price = filter_input(INPUT_POST,'Price');
    $Method = filter_input(INPUT_POST, 'actions');
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
        echo "hello";
        //echo $Email;
        if ($Method == "Add to Cart"){
            $SQL = "SELECT Item_ID from shopping_cart where Item_ID='$Item_ID'";
            $check = mysqli_query($conn, $SQL);
            $checkArr = mysqli_fetch_array($check);
            if (!empty($checkArr['Item_ID'])){
                echo "Item already in cart!";
                header("Location: http://localhost/Bookstore-Soft-Engr/Homepage/homepage.php");
            }
            else {
                echo "here";
                $SQL2 = "INSERT INTO shopping_cart (Account_ID, Item_ID, Name, Quantity, Price, Email) values ('2', '$Item_ID', '$Name', '$Quantity', '$Price', '$Email')";
                if (mysqli_query($conn, $SQL2)){
                    echo "Add Successful";
                    header("Location: http://localhost/Bookstore-Soft-Engr/Homepage/homepage.php");
                }
                else {
                    echo("Error description: " . $conn -> error);
                    echo $Item_ID;
                }
            }
        }
        else if ($Method == "EDIT"){
            $SQL = "UPDATE shopping_cart SET Quantity='$Quantity' WHERE Item_ID=$Item_ID";
            if (mysqli_query($conn, $SQL)){
                $SQL1 = "SELECT Quantity FROM shopping_cart WHERE Item_ID='$Item_ID'";
                $check = mysqli_query($conn, $SQL1);
                $checkArr = mysqli_fetch_array($check);
                if ($checkArr['Quantity'] == "0"){
                    $SQL3 = "DELETE FROM shopping_cart WHERE ITEM_ID='$Item_ID'";
                    if (mysqli_query($conn, $SQL3)){
                        echo "Quantity was Zero";
                        header("Location: http://localhost/Bookstore-Soft-Engr/Homepage/homepage.php");
                    }
                }
                else {
                    echo "quantity updated";
                }
            }
        }
        else if ($Method == "DELETE"){
            $SQL = "DELETE FROM shopping_cart WHERE ITEM_ID='$Item_ID'";
            if (mysqli_query($conn, $SQL)){
                echo "DELETE";
                header("Location: http://localhost/Bookstore-Soft-Engr/Homepage/homepage.php?results=Login-Successful");
            }
        }
    }

?>