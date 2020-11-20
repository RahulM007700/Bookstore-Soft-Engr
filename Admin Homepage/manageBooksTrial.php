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
                    <li class="nav-item px-4"><a href="../Homepage/LogUserOut.php" class="nav-link py-4">Logout</a></li>
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
                        <button class="btn btn-secondary" id="addBtn" data-target="#addModal" data-toggle="modal"
 ><i class="material-icons">&#xE147;</i>
                            <span>Add New Book</span></button>
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


                    <form action="./Admin_Phps/BooksUpdate.php" method="POST">
                        <?php
                    for ($i = 0; $i < sizeof($_SESSION['Books']); $i++) :
                    ?>
                        <tr>
                            <td><?= $i; ?></td>
                            <td><?= $_SESSION['Books'][$i]['Book_Name']; ?></td>
                            <td><?= $_SESSION['Books'][$i]['ISBN']; ?></td>
                            <td><?= $_SESSION['Books'][$i]['Category']; ?></td>
                            <td><?= $_SESSION['Books'][$i]['Author']; ?></td>
                            <td><?= $_SESSION['Books'][$i]['Edition']; ?></td>
                            <td><?= $_SESSION['Books'][$i]['Publisher']; ?></td>
                            <td><?= $_SESSION['Books'][$i]['Date_Published']; ?></td>
                            <td><?= $_SESSION['Books'][$i]['Quantity']; ?></td>
                            <td><?= $_SESSION['Books'][$i]['Selling_Price']; ?></td>
                            <td><?= $_SESSION['Books'][$i]['Asking_Price']; ?></td>
                            <td><?= $_SESSION['Books'][$i]['Min_Threshold']; ?></td>
                            <td class="actions">
                                <!--<a href="#" class="button" title="Add" data-toggle="tooltip"><i
                                    class="material-icons">&#xe148;</i></a>-->
                                <input type="button" name="editbtn" title="Edit" data-toggle="modal" data-target="#editModal"><i
                                    class="material-icons">&#xE8B8;</i></a>
                                <input type="button" name="deletebtn" title="Delete" data-toggle="modal"
                                    onclick="deleteBook" data-target="#deleteModal"><i class="material-icons">&#xE5C9;</i></a>
                            </td>


                        </tr>

                        <?php endfor; ?>
                    </form>

                    <?php
                    
                    for ($i = 0; $i < sizeof($_SESSION['Books']); $i++) :
                    ?>
                    <tr>
                        <form method="post" action="../Admin_Phps/BooksUpdate.php">
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

                            <td class="actions" name="actions">
                                <?php
                                    echo '<select onchange="this.form.submit()">                           
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

                    <?php endfor; ?>
                </tbody>


                <tfoot>
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
                </tfoot>
            </table>


        </div>
    </div>

    <!--add a book modal-->
    <div class="modal fade" id="addModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header text-center">
          <h4 class="modal-title w-100 font-weight-bold">Add a Book</h4>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <form action="Admin_Phps/BooksUpdate.php" method="POST">
          <div class="modal-body mx-3">
            <div class="md-form mb-5">
              <label for="bookname"><b>Book Name</b></label>
            <input type="text" placeholder="Enter Book Name" name="Book_Name" id="bookname" required />
            </div>
            
            <div class="md-form mb-5">
             <label for="isbn"><b>ISBN No.</b></label>
                    <input type="text" placeholder="Enter ISBN Number" name="ISBN" id="isbn" required />
            </div>
            
            <div class="md-form mb-5">
              <label for="category"><b>Category</b></label>
                    <input type="text" placeholder="Enter the book's category" name="Category" id="category" required />
            </div>
            
            <div class="md-form mb-5">
             <label for="authorname"><b>Author's Name</b></label>
                    <input type="text" placeholder="Enter the authors name" name="Author" id="authorname" required />
            </div>
            
            
            <div class="md-form mb-5">
             <label for="edition"><b>Edition</b></label>
                    <input type="text" placeholder="Enter the edition" name="Edition" id="edition" required/>
            </div>
            
            <div class="md-form mb-5">
              <label for="publisher"><b>Publisher</b></label>
                    <input type="text" placeholder="Enter publisher" name="Publisher" id="publisher" required/>
            </div>
            
            <div class="md-form mb-5">
              <label for="pubyear"><b>Publication Year</b></label>
                    <input type="text" placeholder="Enter Publication Year" name="Date_Published" id="pubyear" required/>

            </div>
            
            <div class="md-form mb-5">
              <label for="quantity"><b>Quantity</b></label>
                    <input type="text" placeholder="Enter Quantity" name="Quantity" id="quantity" required/>
            </div>
            
            <div class="md-form mb-5">
              <label for="sellprice"><b>Selling Price</b></label>
                    <input type="text" placeholder="Enter selling price" name="Selling_Price" id="sellprice" required/>
            </div>
            
            <div class="md-form mb-5">
               <label for="askprice"><b>Asking Price</b></label>
                    <input type="text" placeholder="Enter asking price" name="Asking_Price" id="askprice" required/>
            </div>
            
            <div class="md-form mb-5">
               <label for="minthresh"><b>Minimum Threshold</b></label>
                    <input type="text" placeholder="Enter minimum threshold" name="Min_Threshold" id="minthresh" required/>

            </div>

          </div>
          <div class="modal-footer d-flex justify-content-center">
            <input class="btn btn-default" type="submit" id="submitbtn" name="actions" value="Add"></input>
            <br>
          </div>
        </form>
      </div>
    </div>
  </div>


    <!-- end of add a book modal-->

    <!-- start of edit book -->

    <div id="editModal" class="editBookModal">
        <div class="editBookModal-content">
            <span class="close-button-edit">&times;</span>
            <form action="editBook.php" method="POST">
                <div class="container">
                    <h1 style="text-align: center">Edit a Book</h1>

                    <label for="bookname"><b>Book Name</b></label>
                    <input type="text" name="bookname" id="bookname"
                        value="<?php echo $_SESSION['Books'][$i]['Book_Name']; ?>" required />

                    <label for="isbn"><b>ISBN No.</b></label>
                    <input type="text" name="isbn" id="isbn" value="<?php echo $_SESSION['Books'][$i]['ISBN']; ?>"
                        required />

                    <label for="category"><b>Category</b></label>
                    <input type="text" name="category" id="category"
                        value="<?php echo $_SESSION['Books'][$i]['Category']; ?>" required />

                    <label for="authorname"><b>Author's Name</b></label>
                    <input type="text" name="authorname" id="authorname"
                        value="<?php echo $_SESSION['Books'][$i]['Author']; ?>" required />

                    <label for="title"><b>Title</b></label>
                    <input type="text" name="title" id="title"
                        value="<?php echo $_SESSION['Books'][$i]['Book_Name']; ?>" required />

                    <label for="edition"><b>Edition</b></label>
                    <input type="text" name="edition" id="edition"
                        value="<?php echo $_SESSION['Books'][$i]['Edition']; ?>" required />

                    <label for="publisher"><b>Publisher</b></label>
                    <input type="text" name="publisher" id="publisher"
                        value="<?php echo $_SESSION['Books'][$i]['Publisher']; ?>" required />

                    <label for="pubyear"><b>Publication Year</b></label>
                    <input type="text" name="pubyear" id="pubyear"
                        value="<?php echo $_SESSION['Books'][$i]['Publication']; ?>" required />

                    <label for="quantity"><b>Quantity</b></label>
                    <input type="text" name="quantity" id="quantity"
                        value="<?php echo $_SESSION['Books'][$i]['Quantity']; ?>" required />

                    <label for="sellprice"><b>Selling Price</b></label>
                    <input type="text" name="sellprice" id="sellprice"
                        value="<?php echo $_SESSION['Books'][$i]['Selling_Price']; ?>" required />

                    <label for="askprice"><b>Asking Price</b></label>
                    <input type="text" name="askprice" id="askprice"
                        value="<?php echo $_SESSION['Books'][$i]['Asking_Price']; ?>" required />

                    <label for="minthresh"><b>Minimum Threshold</b></label>
                    <input type="text" name="minthresh" id="minthresh"
                        value="<?php echo $_SESSION['Books'][$i]['Min_Threshold']; ?>" required />


                    <button type="submit" class="submitbtn" id="submitbtn2">
                        Submit
                    </button>
                    <br /><br /><br /><br />
                </div>
            </form>
        </div>
    </div>

    <!-- end of edit book modal-->

    <!--start of delete book modal-->

    <div id="deleteModal" class="deleteBookModal">
        <div class="deleteBookModal-content">
            <span class="close-button-delete">&times;</span>
            <form action="deleteBook.php" method="POST">
                <div class="container">
                    <h1 style="text-align: center">Delete Book</h1>

                    <p>Are you sure you want to delete these records? This action cannot be undone.</p>

                    <input type="button" class="btn btn-default" data-dismiss="modal" value="Cancel">
                    <button type="submit" class="submitbtn" id="submitbtn3" onclick="deleteBook">Submit</button>
                    <br /><br /><br /><br />
                </div>
            </form>
        </div>
    </div>



    <script>

        /** ADD JS */
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

        /** EDIT JS */
        var editModal = document.getElementById("editModal");
        var editbtn = document.getElementById("editBtn");
        var span = document.getElementsByClassName("close-button-edit")[0];
        var submitbtn = document.getElementById("submitbtn2");

        editbtn.onclick = function () {

            editModal.style.display = "block";
        };

        span.onclick = function () {
            editModal.style.display = "none";
        };

        window.onclick = function (event) {
            if (event.target == editModal) {
                editModal.style.display = "none";
            }
        };

        /** delete JS */

        submitbtn3.onclick = function () {

            <? php echo $_SESSION['Books'][$i]['ISBN']; ?>;
        };

        var deleteModal = document.getElementById("deleteModal");
        var deletebtn = document.getElementById("deleteBtn");
        var span = document.getElementsByClassName("close-button-delete")[0];
        var submitbtn = document.getElementById("submitbtn3");

        deletebtn.onclick = function () {

            deleteModal.style.display = "block";
        };

        span.onclick = function () {
            deleteModal.style.display = "none";
        };

        window.onclick = function (event) {
            if (event.target == deleteModal) {
                deleteModal.style.display = "none";
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
