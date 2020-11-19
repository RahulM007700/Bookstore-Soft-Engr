<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8" />
    <title>Manage Promotions</title>
    <link
      rel="stylesheet"
      href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"
    />
    <link
      rel="stylesheet"
      href="https://cdn.datatables.net/1.10.22/css/dataTables.bootstrap4.min.css"
    />
    <script
      src="https://kit.fontawesome.com/a746b8874d.js"
      crossorigin="anonymous"
    ></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="manage_promotions_style.css"></script>
    <script>
      $(document).ready(function () {
        $("#btn").click(function () {
          $("#user-type").html("Admin");
        });
      });
    </script>
  </head>
  <style>
    body {
      padding-top: 50px;
    }
    .nav-link-main:hover {
      background-color: #faf0e6;
      border-radius: 5px;
      padding: 8px;
    }
    .container-fluid {
      padding-right: 0;
      padding-left: 0;
      margin-right: auto;
      margin-left: auto;
    }
  </style>
  <body>
    <div class="container-fluid">
      <nav class="navbar navbar-expand navbar-light">
        <a class="navbar-brand" href="adminHomepage.html"
          ><img
            src="https://placeholder.com/wp-content/uploads/2018/10/placeholder.com-logo4.jpg"
            height="50"
        /></a>
        <div class="collapse navbar-collapse">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item px-4">
              <a href="#" class="nav-link py-4">Logout</a>
            </li>
          </ul>
        </div>
      </nav>
    </div>
    <div
      class="container-fluid"
      style="background-color: #e9ecef; padding-bottom: 20px; padding-top: 20px"
    >
      <div class="container-fluid">
        <h1 class="jumbotron-heading text-center">Manage Users</h1>
      </div>
      <ul class="nav justify-content-center">
        <li class="nav-item px-5">
          <a
            class="nav-link-main"
            href="#"
            style="color: black; text-decoration: none"
            ><i class="fas fa-book"></i>&nbsp;&nbsp;Manage Books</a
          >
        </li>
        <li class="nav-item px-5">
          <a
            class="nav-link-main"
            href="#"
            style="color: black; text-decoration: none"
            ><i class="fas fa-dollar-sign"></i>&nbsp;&nbsp;Manage Promotions</a
          >
        </li>
        <li class="nav-item px-5">
          <a
            class="nav-link-main"
            href="#"
            style="color: black; text-decoration: none"
            ><i class="fas fa-users"></i>&nbsp;&nbsp;Manage Users</a
          >
        </li>
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
              <button class="btn btn-secondary" id="addBtn">
                <i class="material-icons">&#xE147;</i> <span>Add New Book</span>
              </button>
              <a href="#" class="btn btn-secondary"
                ><i class="material-icons">&#xE24D;</i>
                <span>Export to Excel</span></a
              >
            </div>
          </div>
        </div>
        <table
          class="table table-striped table-bordered"
          id="mydatatable"
          style="border-radius: 4px"
        >
          <thead>
            <tr>
              <th>No.</th>
              <th>Book Name</th>
              <th>Promotion ID</th>
              <th>Promotion Amount</th>
              <th>Expiration Date</th>
              <th>Status</th>
              <th>Actions</th>
            </tr>
          </thead>
          <tbody>
            <!--<?php
                    //$i = 0;
                    for ($i = 0; $i < sizeof($_SESSION['Books']); $i++) :
                    ?>-->
            <tr>
              <!--  <form method="post" action="../Admin_Phps/BooksUpdate.php">
                            <td><?= $i; ?></td>

                            <td>
                                <?php
                                    if (actions == EDIT) {
                                        echo '<input type="text" name="Book_Name" value=';
                                        echo $_SESSION['Books'][$i]['Book_Name'];
                                        echo '></input>';
                                    } else {
                                        echo $_SESSION['Books'][$i]['Book_Name'];
                                    }

                            ?></td>

                            <td>
                                <?php
                                    if (actions == EDIT) {
                                        echo '<input type="text" name="ISBN" value=';
                                        echo $_SESSION['Books'][$i]['ISBN'];
                                        echo '></input>';
                                    } else {
                                        echo $_SESSION['Books'][$i]['ISBN'];
                                    }

                                    ?></td>

                            <td>
                                <?php
                                    if (actions == EDIT) {
                                        echo '<input type="text" name="Category" value=';
                                        echo $_SESSION['Books'][$i]['Category'];
                                        echo '></input>';
                                    } else {
                                        echo $_SESSION['Books'][$i]['Category'];
                                    }

                                    ?></td>

                            <td>
                                <?php
                                    if (actions == EDIT) {
                                        echo '<input type="text" name="Author" value=';
                                        echo $_SESSION['Books'][$i]['Author'];
                                        echo '></input>';
                                    } else {
                                        echo $_SESSION['Books'][$i]['Author'];
                                    }

                                    ?></td>

                            <td>
                                <?php
                                    if (actions == EDIT) {
                                        echo '<input type="text" name="Title" value=';
                                        echo $_SESSION['Books'][$i]['Title'];
                                        echo '></input>';
                                    } else {
                                        echo $_SESSION['Books'][$i]['Title'];
                                    }

                                    ?></td>

                            <td>
                                <?php
                                    if (actions == EDIT) {
                                        echo '<input type="text" name="Edition" value=';
                                        echo $_SESSION['Books'][$i]['Edition'];
                                        echo '></input>';
                                    } else {
                                        echo $_SESSION['Books'][$i]['Edition'];
                                    }

                                    ?></td>

                            <td>
                                <?php
                                    if (actions == EDIT) {
                                        echo '<input type="text" name="Publisher" value=';
                                        echo $_SESSION['Books'][$i]['Publisher'];
                                        echo '></input>';
                                    } else {
                                        echo $_SESSION['Books'][$i]['Publisher'];
                                    }

                                    ?></td>

                            <td>
                                <?php
                                    if (actions == EDIT) {
                                        echo '<input type="text" name="Date_Published" value=';
                                        echo $_SESSION['Books'][$i]['Date_Published'];
                                        echo '></input>';
                                    } else {
                                        echo $_SESSION['Books'][$i]['Date_Published'];
                                    }

                                    ?></td>

                            <td>
                                <?php
                                    if (actions == EDIT) {
                                        echo '<input type="text" name="Quantity" value=';
                                        echo $_SESSION['Books'][$i]['Quantity'];
                                        echo '></input>';
                                    } else {
                                        echo $_SESSION['Books'][$i]['Quantity'];
                                    }

                                    ?></td>


                            <td>
                                <?php
                                    if (actions == EDIT) {
                                        echo '<input type="text" name="Selling_Price" value=';
                                        echo $_SESSION['Books'][$i]['Selling_Price'];
                                        echo '></input>';
                                    } else {
                                        echo $_SESSION['Books'][$i]['Selling_Price'];
                                    }

                                    ?></td>

                            <td>
                                <?php
                                    if (actions == EDIT) {
                                        echo '<input type="text" name="Asking_Price" value=';
                                        echo $_SESSION['Books'][$i]['Asking_Price'];
                                        echo '></input>';
                                    } else {
                                        echo $_SESSION['Books'][$i]['Asking_Price'];
                                    }

                                    ?></td>


                            <td>
                                <?php
                                    if (actions == EDIT) {
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

                    <?php endfor; ?> -->
            </tr>
          </tbody>

          <tfoot>
            <tr>
              <th>No.</th>
              <th>Book Name</th>
              <th>Promotion ID</th>
              <th>Promotion Amount</th>
              <th>Expiration Date</th>
              <th>Status</th>
              <th>Actions</th>
            </tr>
          </tfoot>
        </table>
      </div>
    </div>
    <div class="col-sm-6">
      <button type="submit">Submit Changes</button>
    </div>
    <div id="addModal" class="addBookModal">
      <div class="addBookModal-content">
        <span class="close-button-add">&times;</span>
        <form action="insertBook.php" method="POST">
          <div class="container">
            <h1 style="text-align: center">Add a Book</h1>
            <p style="text-align: center">
              Please fill in the mandatory fields in this form to create an new
              book.
            </p>
            <label for="bookname"><b>Book Name</b></label>
            <input
              type="text"
              placeholder="Enter Book Name"
              name="bookname"
              id="bookname"
              required
            />

            <label for="isbn"><b>ISBN No.</b></label>
            <input
              type="text"
              placeholder="Enter ISBN Number"
              name="isbn"
              id="isbn"
              required
            />

            <label for="category"><b>Category</b></label>
            <input
              type="text"
              placeholder="Enter the book's category"
              name="category"
              id="category"
              required
            />

            <label for="authorname"><b>Author's Name</b></label>
            <input
              type="text"
              placeholder="Enter the authors name"
              name="authorname"
              id="authorname"
              required
            />

            <label for="title"><b>Title</b></label>
            <input
              type="text"
              placeholder="Enter Phone Number"
              name="title"
              id="title"
              required
            />

            <label for="edition"><b>Edition</b></label>
            <input
              type="text"
              placeholder="Enter the edition"
              name="edition"
              id="edition"
              required
            />

            <label for="publisher"><b>Publisher</b></label>
            <input
              type="text"
              placeholder="Enter publisher"
              name="publisher"
              id="publisher"
              required
            />

            <label for="pubyear"><b>Publication Year</b></label>
            <input
              type="text"
              placeholder="Enter Publication Year"
              name="pubyear"
              id="pubyear"
              required
            />

            <label for="quantity"><b>Quantity</b></label>
            <input
              type="text"
              placeholder="Enter Quantity"
              name="quantity"
              id="quantity"
              required
            />

            <label for="sellprice"><b>Selling Price</b></label>
            <input
              type="text"
              placeholder="Enter selling price"
              name="sellprice"
              id="sellprice"
              required
            />

            <label for="askprice"><b>Asking Price</b></label>
            <input
              type="text"
              placeholder="Enter asking price"
              name="askprice"
              id="askprice"
              required
            />

            <label for="minthresh"><b>Minimum Threshold</b></label>
            <input
              type="text"
              placeholder="Enter minimum threshold"
              name="minthresh"
              id="minthresh"
              required
            />

            <button type="submit" class="submitbtn" id="submitbtn">
              Submit
            </button>
            <br /><br /><br /><br />
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
    <script>
      $("#mydatatable").DataTable();

      var table = document.getElementById("mydatatable");

      table.find("tr").each(function () {
        var $tds = $(this).find("td");
        //var number = $tds.eq(0).text();
        //var name = $tds.eq(1).text();
        //var accountID = $tds.eq(2).text();
        var role = $tds.eq(3).text();
        var status = $tds.eq(4).text();
        var action = $tds.eq(5).text();
        // do something with it
        if (role.value == "User") {
          action.html(
            "<select><option>Suspend</option><option>Unsuspend</option></select>"
          );
        } else if (role.value == "Employee") {
          action.html("<button>Promote</button>");
        } else if (role.value == "Admin") {
          action.html("<button>Demote</button>");
        }
      });

      function promote() {
        if (document.getElementById("user-type").innerHTML === "Employee") {
          document.getElementById("user-type").innerHTML = "Admin";
        }
        //var xhttp = new XMLHttpRequest();
        //xhttp.onreadystatechange = function() {
        //if (this.readyState == 4 && this.status == 200) {
        //document.getElementById("here").innerHTML = this.responseText;
        //}
        //};
        //xhttp.open("GET", "data.txt", true);
        //xhttp.Sent();
      }

      function changeSelected() {
        //var select = document.getElementById("suspension").value;
        //if (select.value == "Suspended") {
        //    status.html("<p><span class='status text-warning'>&bull;</span> Not Sent</p>");
        //} else if (select.value == "Unsuspended") {
        //    status.html("<p><span class='status text-success'>&bull;</span> Active</p>");
        //}
      }

      function demote() {
        //role.html("Employee");
      }
    </script>
  </body>
</html>
