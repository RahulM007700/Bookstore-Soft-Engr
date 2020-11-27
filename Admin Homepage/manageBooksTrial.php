<?php
session_start();
?>

<!DOCTYPE HTML>
<html>

<head>
    <script> 
    function dothis(i) { 
      console.log(i)
      var variable = i;
      document.getElementById("delete").elements[1].value=variable;
    } 
    function dothat(i1, i2, i3, i4, i5, i6, i7, i8, i9, i10, i11) {
      console.log("Hello");
      var i1 = i1;
      var i2 = i2;
      var i3 = i3;
      var i4 = i4;
      var i5 = i5;
      var i6 = i6;
      var i7 = i7;
      var i8 = i8;
      var i9 = i9;
      var i10 = i10;
      var i11 = i11;
      document.getElementById("edit").elements[0].value = i1;
      document.getElementById("edit").elements[1].value = i2;
      document.getElementById("edit").elements[2].value = i3;
      document.getElementById("edit").elements[3].value = i4;
      document.getElementById("edit").elements[4].value = i5;
      document.getElementById("edit").elements[5].value = i6;
      document.getElementById("edit").elements[6].value = i7;
      document.getElementById("edit").elements[7].value = i8;
      document.getElementById("edit").elements[8].value = i9;
      document.getElementById("edit").elements[9].value = i10;
      document.getElementById("edit").elements[10].value = i11;

    }
    </script>
    <meta charset="utf-8">
    <title>Manage Books</title>
    <link rel="stylesheet" href="manageBooks.css">
    </link>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    </link>
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.22/css/dataTables.bootstrap4.min.css">
    </link>
    <script src="https://kit.fontawesome.com/a746b8874d.js" crossorigin="anonymous"></script>
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
            <h1 class="jumbotron-heading text-center">Manage Books</h1>
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
                            <td><input type="hidden" name="i1" value='<?php echo $i;?>'><?= $i; ?></td>
                            <td><input type="hidden" name="i2" value='<?php echo $_SESSION['Books'][$i]['Book_Name'];?>'><?= $_SESSION['Books'][$i]['Book_Name']; ?></td>
                            <td><input type="hidden" name="i3" value='<?php echo $_SESSION['Books'][$i]['ISBN'];?>'><?= $_SESSION['Books'][$i]['ISBN']; ?></td>
                            <td><input type="hidden" name="i4" value='<?php echo $_SESSION['Books'][$i]['Category'];?>'><?= $_SESSION['Books'][$i]['Category']; ?></td>
                            <td><input type="hidden" name="i5" value='<?php echo $_SESSION['Books'][$i]['Author'];?>'><?= $_SESSION['Books'][$i]['Author']; ?></td>
                            <td><input type="hidden" name="i6" value='<?php echo $_SESSION['Books'][$i]['Edition'];?>'><?= $_SESSION['Books'][$i]['Edition']; ?></td>
                            <td><input type="hidden" name="i7" value='<?php echo $_SESSION['Books'][$i]['Publisher'];?>'><?= $_SESSION['Books'][$i]['Publisher']; ?></td>
                            <td><input type="hidden" name="i8" value='<?php echo $_SESSION['Books'][$i]['Date_Published'];?>'><?= $_SESSION['Books'][$i]['Date_Published']; ?></td>
                            <td><input type="hidden" name="i9" value='<?php echo $_SESSION['Books'][$i]['Quantity'];?>'><?= $_SESSION['Books'][$i]['Quantity']; ?></td>
                            <td><input type="hidden" name="i10" value='<?php echo $_SESSION['Books'][$i]['Selling_Price'];?>'><?= $_SESSION['Books'][$i]['Selling_Price']; ?></td>
                            <td><input type="hidden" name="i11" value='<?php echo $_SESSION['Books'][$i]['Asking_Price'];?>'><?= $_SESSION['Books'][$i]['Asking_Price']; ?></td>
                            <td><input type="hidden" name="i12" value='<?php echo $_SESSION['Books'][$i]['Min_Threshold'];?>'><?= $_SESSION['Books'][$i]['Min_Threshold']; ?></td>
                            <td class="actions">
                                <!--<a href="#" class="button" title="Add" data-toggle="tooltip"><i
                                    class="material-icons">&#xe148;</i></a>-->
                                <input id="number" type="hidden" name="i2" value='<?php echo $i;?>'></input>

                                <!-- <input type="button" name="editbtn" title="Edit" data-toggle="modal" data-target="#editModal" onclick="dothat('<?php echo $_SESSION['Books'][$i]['Book_Name'];?>','<?php echo $_SESSION['Books'][$i]['ISBN'];?>','<?php echo $_SESSION['Books'][$i]['Category'];?>','<?php echo $_SESSION['Books'][$i]['Author'];?>','<?php echo $_SESSION['Books'][$i]['Edition'];?>','<?php echo $_SESSION['Books'][$i]['Publisher'];?>','<?php echo $_SESSION['Books'][$i]['Date_Published'];?>','<?php echo $_SESSION['Books'][$i]['Quantity'];?>','<?php echo $_SESSION['Books'][$i]['Selling_Price'];?>','<?php echo $_SESSION['Books'][$i]['Asking_Price'];?>','<?php echo $_SESSION['Books'][$i]['Min_Threshold'];?>')"><i class="material-icons">&#xE8B8;</i></input>
                                <input type="button" name="deletebtn" title="Delete" data-toggle="modal" data-target="#deleteModal" onclick="dothis(<?php echo $i?>)"><i class="material-icons">&#xE5C9;</i></input>
                            -->
                         <button type="button" name="editbtn" title="Edit" data-toggle="modal" data-target="#editModal" onclick="dothat('<?php echo $_SESSION['Books'][$i]['Book_Name'];?>','<?php echo $_SESSION['Books'][$i]['ISBN'];?>','<?php echo $_SESSION['Books'][$i]['Category'];?>','<?php echo $_SESSION['Books'][$i]['Author'];?>','<?php echo $_SESSION['Books'][$i]['Edition'];?>','<?php echo $_SESSION['Books'][$i]['Publisher'];?>','<?php echo $_SESSION['Books'][$i]['Date_Published'];?>','<?php echo $_SESSION['Books'][$i]['Quantity'];?>','<?php echo $_SESSION['Books'][$i]['Selling_Price'];?>','<?php echo $_SESSION['Books'][$i]['Asking_Price'];?>','<?php echo $_SESSION['Books'][$i]['Min_Threshold'];?>')"><img src="../edit.png" class="arrow" width="30" height="30" style="float:left;" /></input>
                                <button type="button" name="deletebtn" title="Delete" data-toggle="modal" class="button-delete"
                                    data-target="#deleteModal" ><img src="../trash.png" class="arrow" width="30" height="30" style="float:left;" /></input>
                    
</td>


                        </tr>

                        <?php endfor; ?>
                    </form>
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
              
             <div class="md-form mb-5">
              <label for="coverphoto"><b>Cover Photo</b></label>
              <input type="file" name="image" required />
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

    <div class="modal fade" id="editModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header text-center">
          <h4 class="modal-title w-100 font-weight-bold">Edit a Book</h4>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <>
        <form id="edit" action="./Admin_Phps/BooksUpdate.php" method="POST">
          <div class="modal-body mx-3">
            <div class="md-form mb-2">
              <label for="bookname"><b>Book Name</b></label>
              <input type="text" name="Book_Name" id="bookname" value="" required />
            </div>
            
            <div class="md-form mb-2">
             <label for="isbn"><b>ISBN No.</b></label>
              <input type="text" name="ISBN" id="isbn" value="i3" required />
            </div>
            
            <div class="md-form mb-2">
              <label for="category"><b>Category</b></label>
                    <input type="text" name="Category" id="category"
                        value="i4" required />
            </div>
            
            <div class="md-form mb-2">
             <label for="authorname"><b>Author's Name</b></label>
                    <input type="text" name="Author" id="authorname"
                        value="i5" required />
            </div>
            
            <div class="md-form mb-2">
             <label for="edition"><b>Edition</b></label>
                    <input type="text" name="Edition" id="edition"
                        value="i6" required />
            </div>
            
            <div class="md-form mb-2">
              <label for="publisher"><b>Publisher</b></label>
                    <input type="text" name="Publisher" id="publisher"
                        value="i7" required />

            </div>
            
            <div class="md-form mb-2">
              <label for="pubyear"><b>Publication Year</b></label>
                    <input type="text" name="Date_Published" id="pubyear"
                        value="i8" required />

            </div>
            
            <div class="md-form mb-2">
              <label for="quantity"><b>Quantity</b></label>
                    <input type="text" name="Quantity" id="quantity"
                        value="i9" required />

            </div>
            
            <div class="md-form mb-2">
              <label for="sellprice"><b>Selling Price</b></label>
                    <input type="text" name="Selling_Price" id="sellprice"
                        value="i10" required />
            </div>
            
            <div class="md-form mb-2">
               <label for="askprice"><b>Asking Price</b></label>
                    <input type="text" name="Asking_Price" id="askprice"
                        value="i11" required />
            </div>
            
            <div class="md-form mb-2">
               <label for="minthresh"><b>Minimum Threshold</b></label>
                    <input type="text" name="Min_Threshold" id="minthresh"
                        value="i12" required />

            </div>

          </div>
          <div class="modal-footer d-flex justify-content-center">
            <input class="btn btn-default" type="submit" id="submitbtn2" name="actions" value="EDIT"></input>
            <br>
          </div>
        </form>
      </div>
    </div>
  </div>


    <!-- end of edit book modal-->

    <!--start of delete book modal-->

    <div class="modal fade" id="deleteModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header text-center">
          <h4 class="modal-title w-100 font-weight-bold">Delete Book</h4>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <form id="delete" action="Admin_Phps/BooksUpdate.php" method="POST">
          <div class="modal-body mx-3">
            <p>Are you sure you want to delete these records? This action cannot be undone.</p>
          </div>
          <div class="modal-footer d-flex justify-content-center">
            <button class="btn btn-default"  id="submitbtn3">Cancel</button>
            <input type="hidden" id="i" name="i" value=""></input>
            <input class="btn btn-default" type="submit" id="submitbtn3" name="actions" value="DELETE"></input>
            <br>
          </div>
        </form>
      </div>
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
