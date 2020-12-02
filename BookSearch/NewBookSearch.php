<?php
session_start();
?>

<!DOCTYPE html>

<html>

<head>
    <title>New Homepage</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="NewBookSearch.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/a746b8874d.js" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script type="text/javascript" src="../SkeletonEmailCode/sendEmail.js"></script>
    <script>
        var userID = '';
        var chars = 'ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789';
        var length = 7;
        for (var i = 0; i < length; i++) {
            userID += chars.charAt(Math.floor(Math.random() * chars.length));
        }
        var verificationCode = Math.floor((Math.random() * 1000000) + 1);
    </script>
</head>


<body>
    <!--nav bar-->
    <div class="container-fluid">
        <nav class="navbar navbar-expand navbar-light">
            <a class="navbar-brand" href="#"><img src="BooksRUs_Logo.png" width="110%" height="100%"></a>
            <div class="collapse navbar-collapse">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item px-4"><a href="#" class="nav-link py-4">Textbooks</a></li>
                    <li class="nav-item px-4"><a href="#" class="nav-link py-4">Adults</a></li>
                    <li class="nav-item px-4"><a href="#" class="nav-link py-4">Teens</a></li>
                    <li class="nav-item px-4"><a href="#" class="nav-link py-4">Kids</a></li>
                    <div class="dropdown">
                        <li class="nav-item px-4"><a href="#" class="nav-link py-4">

                                <!--Trigger-->

                                <a class="btn-floating btn-lg black dropdown-toggle" type="button" id="dropdownMenu3" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" data-target="#navItem"><i class="fas fa-user fa-2x" style="color:grey;" width="30%" height="30%"></i></a>
                                <!--Menu-->
                                <div class="dropdown-menu dropdown-primary" id="navItem">
                                    <?php
                                    //session_start();
                                    if (isset($_SESSION['Email'])) {
                                        echo '
                              <a href="./LogUserOut.php" id="logout" style="color: black">Logout<br /></a>
                            
                            
                              <a
                                href="../EditProfile/edit_profile.php"
                                style="color: black"
                                >Edit Profile</a
                              >
                            
                            
                              <a
                                href="../OrderHistory/order-history.html"
                                style="color: black"
                                >Order History</a
                              >
                            ';
                                    } else {
                                        echo '<a class="dropdown-item" href="#" id="login" data-toggle="modal" data-target="#loginModal">Login/Sign Up</a>';
                                    }
                                    ?>
                                </div>
                            </a></li>
                    </div>
                    <li class="nav-item px-4"><a href="#" class="nav-link py-4"><i class="fas fa-shopping-cart"></i></a>
                    </li>
                </ul>
            </div>
        </nav>
    </div>

    <!--nav bar end-->
    <br><br>


    <!--Search box-->
    <div class="container-fluid" style="/*background-color:#FFFFF0#ffdead*/; padding-bottom:50px;margin-top:0px;">

        <div class="container-fluid">
            <div class="row justify-content-center">
                <div class="col-9">
                    <form method="POST">
                        <div class="input-group">
                            <div class="dropdown">
                                <button class="btn btn-link dropdown-toggle" type="button" data-toggle="dropdown" style="margin-top:32px; margin-right:5px; background-color:#E0DEDE;"><i class="fas fa-filter" style="color:black;"></i>
                                    <span class="caret"></span></button>
                                <ul class="dropdown-menu" id="filter">
                                    <li style="text-align:left; padding-left:5px;"><input type="checkbox"> Author</li>
                                    <li style="text-align:left; padding-left:5px;"><input type="checkbox"> Title</li>
                                    <li style="text-align:left; padding-left:5px;"><input type="checkbox"> Category</li>
                                    <li style="text-align:left; padding-left:5px;"><input type="checkbox"> ISBN</li>
                                </ul>
                            </div>
                            <input type="text" class="form-control" placeholder="search..." name="search">
                            <div class="input-group-btn">
                                <button class="btn btn-default" type="submit">
                                    <i class="fas fa-search"></i>
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!--end of search box-->

   

    <form method="POST" action="../Shopping%20Cart/updateCart.php">
        <table style="background-color: #faf0e6; border-radius:5px;padding-bottom:50px;">

            <?php
    if (isset($_POST["submit"])) {

        $host = "localhost";
        $dbusername = "root";
        $dbpassword = "";
        $dbname = "online_bookstore";

        //Make Connection
        $conn = mysqli_connect($host, $dbusername, $dbpassword, $dbname);
        if (mysqli_connect_error()) {
            die('Connect Error(' . mysqli_connect_error() . ')'
                . mysqli_connect_error());
        } else {
            $str = $_POST["search"];
            $Available_Books = "SELECT * FROM available_books WHERE Book_Name = '$str'";
            $Books = $conn->query($Available_Books);
            while ($newElement = $Books->fetch_assoc()) {
                $new[] = $newElement;
            }
            $_SESSION['BooksTemp'] = $new;
        }
        $conn->close();
    } else if (!empty($_POST["homeSearch"])) {
        //echo $_SESSION['Email'];
        $host = "localhost";
        $dbusername = "root";
        $dbpassword = "";
        $dbname = "online_bookstore";

        //Make Connection
        $conn = mysqli_connect($host, $dbusername, $dbpassword, $dbname);
        if (mysqli_connect_error()) {
            die('Connect Error(' . mysqli_connect_error() . ')'
                . mysqli_connect_error());
        } else {
            $str = $_POST["homeSearch"];
            $Available_Books = "SELECT * FROM available_books WHERE Book_Name = '$str'";
            $Books = $conn->query($Available_Books);
            while ($newElement = $Books->fetch_assoc()) {
                $new[] = $newElement;
            }
            $_SESSION['BooksTemp'] = $new;
        }
        $conn->close();
    }
    ?>
            <div class="container-fluid features" style="background-color:#faf0e6;border-radius:5px;padding-bottom:50px;">

                <div class="row justify-content-around" style="flex-direction:column;padding-top:50px;">
                    <h1 class="b2" style="margin-left:3%; margin-right:3%;"><span>Search Results</span></h1>
                </div>
                <thead>
                    <tr>
                        <th>Book Cover</th>
                        <th>Title</th>
                        <th>Author</th>
                        <th>Price</th>
                    </tr>
                </thead>

                <tbody>
                    <div>
                        <?php

                        for ($i = 0; $i < sizeof($_SESSION['BooksTemp']); $i++) :
                            $_SESSION['TempISBN'] = $_SESSION['BooksTemp'][$i]['ISBN'];
                        ?>
                            <br>


                            <tr style="height: 255px; padding:30px;">
                                <div class="book card" style="border: 3px black;">
                                    <td><a href="../BookDetails/bookDescriptions.php"><?php echo '<img src="data:image/jpeg;base64,' . base64_encode($_SESSION['BooksTemp'][$i]['Cover']) . '" height="200" width="200"/>'; ?></a></td>
                                    <!--cover picture-->
                                    <td>
                                        <h4 class="name-text"><?php echo $_SESSION['BooksTemp'][$i]['Book_Name']; ?></h4>
                                    </td>
                                    <!--booktitle-->
                                    <td>
                                        <h4 class="author-text"><?php echo $_SESSION['BooksTemp'][$i]['Author']; ?></h4>
                                    </td>
                                    <!--author-->
                                    <td>
                                        <h4 class="price-text"><?php echo $_SESSION['BooksTemp'][$i]['Asking_Price']; ?></h4>
                                    </td>
                                    <!--price-->
                                    <td class="addToCart"><input type="image" name="actions" value="Add to Cart" src="add.png" width="30px" height="30px" alt="Submit Form"></td>

                                    <input name="Item_ID" type="hidden" value="<?php echo $_SESSION['BooksTemp'][$i]['ISBN']; ?>">
                                    <?php $_SESSION['Cover']=$_SESSION['BooksTemp'][$i]['Cover']; ?>
                                    <!--cover picture-->
                                    <input name="Name" type="hidden" value="<?php echo $_SESSION['BooksTemp'][$i]['Book_Name']; ?>">
                                    <!--booktitle-->
                                    <input name="author" type="hidden" value="<?php echo $_SESSION['BooksTemp'][$i]['Author']; ?>">
                                    <!--author-->
                                    <input name="Price" type="hidden" value="<?php echo $_SESSION['BooksTemp'][$i]['Asking_Price']; ?>">
                                    <input name="actions" type="hidden" value="Add to Cart">
                                </div>
                            </tr>

                        <?php endfor;?>
                    </div>
                </tbody>

            </div>

        </table>
    </form>







</body>

</html>