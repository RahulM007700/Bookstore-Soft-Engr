<?php
session_start();
?>

<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8" />
  <title>Manage Promotions</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" />
  <link rel="stylesheet" href="https://cdn.datatables.net/1.10.22/css/dataTables.bootstrap4.min.css" />
  <link rel="stylesheet" href="../manageBooks.css" />
  <script src="https://kit.fontawesome.com/a746b8874d.js" crossorigin="anonymous"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
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
      <a class="navbar-brand" href="adminHomepage.html"><img src="https://placeholder.com/wp-content/uploads/2018/10/placeholder.com-logo4.jpg" height="50" /></a>
      <div class="collapse navbar-collapse">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item px-4">
            <a href="#" class="nav-link py-4">Logout</a>
          </li>
        </ul>
      </div>
    </nav>
  </div>
  <div class="container-fluid" style="background-color: #e9ecef; padding-bottom: 20px; padding-top: 20px">
    <div class="container-fluid">
      <h1 class="jumbotron-heading text-center">Manage Promotions</h1>
    </div>
    <ul class="nav justify-content-center">
      <li class="nav-item px-5">
        <a class="nav-link-main" href="../Admin_Phps/BookRetrieval.php" style="color: black; text-decoration: none"><i class="fas fa-book"></i>&nbsp;&nbsp;Manage Books</a>
      </li>
      <li class="nav-item px-5">
        <a class="nav-link-main" href="../Admin_Phps/PromotionsRetrieval.php" style="color: black; text-decoration: none"><i class="fas fa-dollar-sign"></i>&nbsp;&nbsp;Manage Promotions</a>
      </li>
      <li class="nav-item px-5">
        <a class="nav-link-main" href="../Admin_Phps/UserRetrieval.php" style="color: black; text-decoration: none"><i class="fas fa-users"></i>&nbsp;&nbsp;Manage Users</a>
      </li>
    </ul>
  </div>
  <div class="container mb-3 mt-3 table-responsive">
    <div class="table-wrapper">
      <div class="table-title">
        <div class="row">
          <div class="col-sm-4">
            <h2><b>Promotions</b></h2>
          </div>
          <div class="col-sm-6">
            <button class="btn btn-secondary" id="addBtn">
              <i class="material-icons">&#xE147;</i> <span>Add Promotion</span>
            </button>
            <a href="#" class="btn btn-secondary"><i class="material-icons">&#xE24D;</i>
              <span>Export to Excel</span></a>
          </div>
        </div>
      </div>
      <table class="table table-striped table-bordered" id="mydatatable" style="border-radius: 4px">
        <thead>
          <tr>
            <th>No.</th>
            <th>ISBN No.</th>
            <th>Promotion Name</th>
            <th>Promotion ID</th>
            <th>Discount</th>
            <th>Expiration Date</th>
            <th>Status</th>
            <th>Actions</th>
          </tr>
        </thead>
        <tbody>
          <?php
              //$i = 0;
              for ($i = 0; $i < sizeof($_SESSION['Promotions']); $i++) :
              ?>
          <tr>
             <form method="post" action="../Admin_Phps/PromoUpdate.php">
                            <td><?= $i; ?></td>

                            <td>
                            <?php
<<<<<<< HEAD
                            $actions = "EDIT";
=======
                            $actions="EDIT";
>>>>>>> 7ef78740b9ad20ea504e7195fdd1119c6beee830
                            if ($actions == "EDIT") {
                              echo '<input type="text" name="ISBN" value=';
                              echo $_SESSION['Promotions'][$i]['ISBN'];
                              echo '></input>';
                            } else {
                              echo $_SESSION['Promotions'][$i]['ISBN'];
                            }

                            ?></td>

                            <td>
                            <?php
                            if ($actions == "EDIT") {
                              echo '<input type="text" name="Promotion_Name" value=';
                              echo $_SESSION['Promotions'][$i]['Name'];
                              echo '></input>';
                            } else {
                              echo $_SESSION['Promotions'][$i]['Name'];
                            }

                            ?></td>

                            <td>
                                <?php
                                if ($actions == "EDIT") {
                                  echo '<input type="text" name="Promotion_ID" value=';
                                  echo $_SESSION['Promotions'][$i]['Promotion_ID'];
                                  echo '></input>';
                                } else {
                                  echo $_SESSION['Promotions'][$i]['Promotion_ID'];
                                }

                                ?></td>

                            <td>
                                <?php
                                if ($actions == "EDIT") {
                                  echo '<input type="text" name="discount" value=';
                                  echo $_SESSION['Promotions'][$i]['Discount'];
                                  echo '></input>';
                                } else {
                                  echo $_SESSION['Promotions'][$i]['Discount'];
                                }

                                ?></td>

                            <td>
                                <?php
                                if ($actions == "EDIT") {
                                  echo '<input type="text" name="Expiration_Date" value=';
                                  echo $_SESSION['Promotions'][$i]['Exp_Date'];
                                  echo '></input>';
                                } else {
                                  echo $_SESSION['Promotions'][$i]['Exp_Date'];
                                }

                                ?></td>

                            <td>
                                <?php
                                if ($actions == "EDIT") {
                                  echo '<input type="text" name="Status" value=';
                                  echo $_SESSION['Promotions'][$i]['Status'];
                                  echo '></input>';
                                } else {
                                  echo $_SESSION['Promotions'][$i]['Status'];
                                }

                                ?></td>

                            <td class="actions" name="actions">
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

                    <?php endfor; ?> 
          </tr>
        </tbody>
        <tfoot>
          <tr>
            <th>No.</th>
            <th>ISBN No.</th>
            <th>Promotion Name</th>
            <th>Promotion ID</th>
            <th>Discount</th>
            <th>Expiration Date</th>
            <th>Status</th>
            <th>Actions</th>
          </tr>
        </tfoot>
      </table>
    </div>
  </div>

  <div id="addModal" class="addBookModal">
    <div class="addBookModal-content">
      <span class="close-button-add">&times;</span>
<<<<<<< HEAD
      <form action="../Admin_Phps/PromoUpdate.php" method="POST">
=======
      <form id="fr1" action="insertBook.php" method="POST">
>>>>>>> 7ef78740b9ad20ea504e7195fdd1119c6beee830
        <div class="container">
          <h1 style="text-align: center">Add a Promotion</h1>
          <p style="text-align: center">
            Please fill in the mandatory fields in this form to create a new
            promotion.
          </p>
<<<<<<< HEAD
=======

>>>>>>> 7ef78740b9ad20ea504e7195fdd1119c6beee830
          <label for="isbn"><b>ISBN No.</b></label>
          <input type="text" placeholder="Enter ISBN Number" name="ISBN" id="isbn" required />

          <label for="promotion-name"><b>Promotion Name</b></label>
          <input type="text" placeholder="Enter promotion ID" name="Promotion_Name" id="promotion-name" required />

          <label for="promotion-id"><b>Promotion ID</b></label>
          <input type="text" placeholder="Enter promotion ID" name="Promotion_ID" id="promotion-id" required />

          <label for="discount"><b>Discount</b></label>
          <input type="text" placeholder="Enter discount ($x)" name="Discount" id="discount" required />

          <label for="expiration-date"><b>Expiration Date</b></label>
          <input type="text" placeholder="Enter expiration date" name="Expiration_Date" id="expiration-date" required />
          
          <button value="Add" name="actions" type="submit" class="submitbtn" id="submitbtn">
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

    addbtn.onclick = function() {
      addModal.style.display = "block";
    };

    span.onclick = function() {
      addModal.style.display = "none";
    };

    window.onclick = function(event) {
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

    table.find("tr").each(function() {
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
  </script>
  <script>
    $(document).ready(function() {
      $('#submitbtn').click(function() {
        $('#fr1').attr('action',
          'mailto:kevinwin31@gmail.com?subject=New Promotion' +
          $('#promotion-name').val() + '&body=' + $('#promotion-id').val() + $('#discount').val());
        $('#fr1').submit();
      });
    });
  </script>
</body>

</html>