<?php
session_start();
?>

<!DOCTYPE HTML>
<html>

<head>
    <meta charset="utf-8">
    <title>Manage Users</title>
    <link rel="stylesheet" href="manageBooks.css">
    </link>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    </link>
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.22/css/dataTables.bootstrap4.min.css">
    </link>
    <style>
        body {
            padding-top: 50px;
        }

        .nav-link-main:hover {
            background-color: #FAF0E6;
            border-radius: 5px;
            padding: 8px;
        }

        .container-fluid {
            padding-right: 0;
            padding-left: 0;
            margin-right: auto;
            margin-left: auto
        }
    </style>
</head>

<body>
    <form>
        <button class="backbtn" formaction="../loginPage.html">
            <img src="../../arrow.png" class="arrow" width="30" height="30" style="float:left;" /></button>
    </form>
    <div class="container-fluid">
        <nav class="navbar navbar-expand navbar-light">
            <a class="navbar-brand" href="adminHomepage.html"><img
                    src="https://placeholder.com/wp-content/uploads/2018/10/placeholder.com-logo4.jpg" height="50"></a>
            <div class="collapse navbar-collapse">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item px-4"><a href="#" class="nav-link py-4">Logout</a></li>
                </ul>
            </div>
        </nav>
    </div>
    <div class="container-fluid" style="background-color:#e9ecef;padding-bottom:20px; padding-top:20px;">
        <div class="container-fluid">
            <h1 class="jumbotron-heading text-center">Manage Users</h1>
        </div>
        <ul class="nav justify-content-center">
            <li class="nav-item px-5"><a class="nav-link-main" href="./Admin_Phps/BookRetrieval.php" style="color:black;text-decoration:none;"><i
                        class="fas fa-book"></i>&nbsp;&nbsp;Manage Books</a></li>
            <li class="nav-item px-5"><a class="nav-link-main" href="./Admin_Phps/PromotionsRetrieval.php" style="color:black;text-decoration:none;"><i
                        class="fas fa-dollar-sign"></i>&nbsp;&nbsp;Manage Promotions</a></li>
            <li class="nav-item px-5"><a class="nav-link-main" href="./Admin_Phps/UserRetrieval.php" style="color:black;text-decoration:none;"><i
                        class="fas fa-users"></i>&nbsp;&nbsp;Manage Users</a></li>
        </ul>
    </div>
    <div class="container mb-3 mt-3 table-responsive">
        <div class="table-wrapper">
            <div class="table-title">
                <div class="row">
                    <div class="col-sm-4">
                        <h2><b>Book Management</b></h2>
                    </div>
                    <div class="col-sm-6">
                        <button class="btn btn-secondary" id="addBtn"><i class="material-icons">&#xE147;</i>
                            <span>Add New
                                Book</span></button>
                        <a href="#" class="btn btn-secondary"><i class="material-icons">&#xE24D;</i> <span>Export to
                                Excel</span></a>
                    </div>
                </div>
            </div>
            <table class="table table-striped table-bordered" id="mydatatable" style="border-radius:4px;">
                <thead>

                    <tr>
                        <th>No.</th>
                        <th>Book Name</th>
                        <th>ISBN No.</th>
                        <th>Category</th>
                        <th>Author's Name</th>
                        <th>Edition</th>
                        <th>Publisher</th>
                        <th>Publication Year</th>
                        <th>Quantity</th>
                        <th>Selling Price</th>
                        <th>Asking Price</th>
                        <th>Minimum Threshold</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>

                    <?php
                    for ($i = 0; $i < sizeof($_SESSION['Books']); $i++) :
                    ?>
                    <tr>
                        <form method="post" action="./Admin_Phps/BooksUpdate.php">
                            <td><?= $i; ?></td>

                            <td>
                                <?php
                                    $actions = "EDIT";
                                    if ($actions == "EDIT") {
                                        echo '<input type="text" name="Book_Name" value=';
                                        echo $_SESSION['Books'][$i]['Book_Name'];
                                        echo '></input>';
                                    } else {
                                        echo $_SESSION['Books'][$i]['Book_Name'];
                                    }

                            ?></td>

                            <td>
                                <?php
                                    if ($actions == "EDIT") {
                                        echo '<input type="text" name="ISBN" value=';
                                        echo $_SESSION['Books'][$i]['ISBN'];
                                        echo '></input>';
                                    } else {
                                        echo $_SESSION['Books'][$i]['ISBN'];
                                    }

                                    ?></td>

                            <td>
                                <?php
                                    if ($actions == "EDIT") {
                                        echo '<input type="text" name="Category" value=';
                                        echo $_SESSION['Books'][$i]['Category'];
                                        echo '></input>';
                                    } else {
                                        echo $_SESSION['Books'][$i]['Category'];
                                    }

                                    ?></td>

                            <td>
                                <?php
                                    if ($actions == "EDIT") {
                                        echo '<input type="text" name="Author" value=';
                                        echo $_SESSION['Books'][$i]['Author'];
                                        echo '></input>';
                                    } else {
                                        echo $_SESSION['Books'][$i]['Author'];
                                    }

                                    ?></td>

                            <td>
                                <?php
                                    if ($actions == "EDIT") {
                                        echo '<input type="text" name="Edition" value=';
                                        echo $_SESSION['Books'][$i]['Edition'];
                                        echo '></input>';
                                    } else {
                                        echo $_SESSION['Books'][$i]['Edition'];
                                    }

                                    ?></td>

                            <td>
                                <?php
                                    if ($actions == "EDIT") {
                                        echo '<input type="text" name="Publisher" value=';
                                        echo $_SESSION['Books'][$i]['Publisher'];
                                        echo '></input>';
                                    } else {
                                        echo $_SESSION['Books'][$i]['Publisher'];
                                    }

                                    ?></td>

                            <td>
                                <?php
                                    if ($actions == "EDIT") {
                                        echo '<input type="text" name="Date_Published" value=';
                                        echo $_SESSION['Books'][$i]['Date_Published'];
                                        echo '></input>';
                                    } else {
                                        echo $_SESSION['Books'][$i]['Date_Published'];
                                    }

                                    ?></td>

                            <td>
                                <?php
                                    if ($actions == "EDIT") {
                                        echo '<input type="text" name="Quantity" value=';
                                        echo $_SESSION['Books'][$i]['Quantity'];
                                        echo '></input>';
                                    } else {
                                        echo $_SESSION['Books'][$i]['Quantity'];
                                    }

                                    ?></td>


                            <td>
                                <?php
                                    if ($actions == "EDIT") {
                                        echo '<input type="text" name="Selling_Price" value=';
                                        echo $_SESSION['Books'][$i]['Selling_Price'];
                                        echo '></input>';
                                    } else {
                                        echo $_SESSION['Books'][$i]['Selling_Price'];
                                    }

                                    ?></td>

                            <td>
                                <?php
                                    if ($actions == "EDIT") {
                                        echo '<input type="text" name="Asking_Price" value=';
                                        echo $_SESSION['Books'][$i]['Asking_Price'];
                                        echo '></input>';
                                    } else {
                                        echo $_SESSION['Books'][$i]['Asking_Price'];
                                    }

                                    ?></td>


                            <td>
                                <?php
                                    if ($actions == "EDIT") {
                                        echo '<input type="text" name="Min_Threshold" value=';
                                        echo $_SESSION['Books'][$i]['Min_Threshold'];
                                        echo '></input>';
                                    } else {
                                        echo $_SESSION['Books'][$i]['Min_Threshold'];
                                    }

                                    ?></td>

                            <td class="actions">
                                <?php
                                    echo '<select name="actions" onchange="this.form.submit()">                           
                                         <option></option>
                                         <option>EDIT</option>
                                          <option>DELETE</option>
                                      </select>'; ?>

                                <script>
                                    $(function () {
                                        $("button").click(function () {
                                            var fired_button = $(this).val();
                                            alert(fired_button);
                                        });
                                    });
                                </script> 
                                <a href="#" class="button" title="Edit" id="edit" data-toggle="tooltip"><i class="material-icons" onclick()="editAction">&#xE8B8;</i></a>
                                    <a href="#" class="button" title="Delete" id="delete" data-toggle="tooltip"><i class="material-icons" onclick()="deleteAction">&#xE5C9;</i></a>
                            </td>

                        </form> 
                    </tr>

                    <?php endfor; ?> -->
                </tbody>


                <tfoot>
                    <tr>
                        <th>No.</th>
                        <th>Book Name</th>
                        <th>ISBN No.</th>
                        <th>Category</th>
                        <th>Author's Name</th>
                        <th>Title</th>
                        <th>Edition</th>
                        <th>Publisher</th>
                        <th>Publication Year</th>
                        <th>Quantity</th>
                        <th>Selling Price</th>
                        <th>Asking Price</th>
                        <th>Minimum Threshold</th>
                        <th>Actions</th>
                    </tr>
                </tfoot>
            </table>


        </div>
    </div>

    <div id="addModal" class="addBookModal">
        <div class="addBookModal-content">
            <span class="close-button-add">&times;</span>
            <form action="./Admin_Phps/BooksUpdate.php" method="POST">
                <div class="container">
                    <h1 style="text-align: center">Add a Book</h1>
                    <p style="text-align: center">
                        Please fill in the mandatory fields in this form to create an
                        new book.
                    </p>
                    <label for="bookname"><b>Book Name</b></label>
                    <input type="text" placeholder="Enter Book Name" name="Book_Name" id="bookname" required />

                    <label for="isbn"><b>ISBN No.</b></label>
                    <input type="text" placeholder="Enter ISBN Number" name="ISBN" id="isbn" required />

                    <label for="category"><b>Category</b></label>
                    <input type="text" placeholder="Enter the book's category" name="Category" id="category" required />

                    <label for="authorname"><b>Author's Name</b></label>
                    <input type="text" placeholder="Enter the authors name" name="Author" id="authorname" required />

                    <label for="edition"><b>Edition</b></label>
                    <input type="text" placeholder="Enter the edition" name="Edition" id="edition" required/>

                    <label for="publisher"><b>Publisher</b></label>
                    <input type="text" placeholder="Enter publisher" name="Publisher" id="publisher" required/>

                    <label for="pubyear"><b>Publication Year</b></label>
                    <input type="text" placeholder="Enter Publication Year" name="Date_Published" id="pubyear" required/>

                    <label for="quantity"><b>Quantity</b></label>
                    <input type="text" placeholder="Enter Quantity" name="Quantity" id="quantity" required/>

                    <label for="sellprice"><b>Selling Price</b></label>
                    <input type="text" placeholder="Enter selling price" name="Selling_Price" id="sellprice" required/>

                    <label for="askprice"><b>Asking Price</b></label>
                    <input type="text" placeholder="Enter asking price" name="Asking_Price" id="askprice" required/>

                    <label for="minthresh"><b>Minimum Threshold</b></label>
                    <input type="text" placeholder="Enter minimum threshold" name="Min_Threshold" id="minthresh" required/>

                    <input type="hidden" name="actions" value="Add"/>
                    <button type="submit" class="submitbtn" id="submitbtn">
                        Submit
                    </button>
                    <br /><br /><br /><br/>
                </div>
            </form>
        </div>
    </div>

    

    <script>


        var addModal = document.getElementById("addModal");
        var addbtn = document.getElementById("addBtn");
        var span = document.getElementsByClassName("close-button-add")[0];
        var submitbtn = document.getElementById("submitbtn");

        addbtn.onclick = function () {

            addModal.style.display = "block";
        };

        span.onclick = function () {
            addModal.style.display = "none";
        };

        window.onclick = function (event) {
            if (event.target == addModal) {
                addModal.style.display = "none";
            }
        };


    </script>



    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/2.5.4/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>


    <script src="https://cdn.datatables.net/1.10.22/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.22/js/dataTables.bootstrap4.min.js"></script>


</body>

</html>
