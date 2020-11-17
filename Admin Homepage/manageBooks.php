<?php
session_start();
?>

<!DOCTYPE HTML>
<html>

<head>
    <meta charset="utf-8">
    <title>Manage Users</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    </link>
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.22/css/dataTables.bootstrap4.min.css">
    </link>
</head>

<body>
    <form>
        <button class="backbtn" formaction="../loginPage.html">
            <img src= "../../arrow.png" class="arrow"width="30" height="30" style="float:left;"/></button>
    </form>
    <div class="container mb-3 mt-3 table-responsive">
        <div class="table-wrapper">
            <div class="table-title">
                <div class="row">
                    <div class="col-sm-4">
                        <h2><b>Book Management</b></h2>
                    </div>
                    <div class="col-sm-6">
                        <a href="#" class="btn btn-secondary"><i class="material-icons">&#xE147;</i> <span>Add New
                                Book</span></a>
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
                </thead>
                <tbody>

                    <?php 
                        //$i = 0;
                        for($i = 0; $i < sizeof($_SESSION['Books']); $i++):
                    ?>
                    <tr>
                        <td><?= $i; ?></td>
                        <td><?php echo $_SESSION['Books'][$i]['Book_Name'];?></td>
                        <td><?php echo $_SESSION['Books'][$i]['ISBN'];?></td>
                        <td><?php echo $_SESSION['Books'][$i]['Category'];?></td>
                        <td><?php echo $_SESSION['Books'][$i]['Author'];?></td>
                        <td><?php echo $_SESSION['Books'][$i]['Title'];?></td>
                        <td><?php echo $_SESSION['Books'][$i]['Edition'];?></td>
                        <td><?php echo $_SESSION['Books'][$i]['Publisher'];?></td>
                        <td><?php echo $_SESSION['Books'][$i]['Date_Published'];?></td>
                        <td><?php echo $_SESSION['Books'][$i]['Quantity'];?></td>
                        <td><?php echo $_SESSION['Books'][$i]['Selling_Price'];?></td>
                        <td><?php echo $_SESSION['Books'][$i]['Asking_Price'];?></td>
                        <td><?php echo $_SESSION['Books'][$i]['Min_Threshold'];?></td>
                        <td class="actions">
                            <!--<a href="#" class="button" title="Add" data-toggle="tooltip"><i
                                    class="material-icons">&#xe148;</i></a>-->
                            <a href="#" class="button" title="Edit" data-toggle="tooltip"><i
                                    class="material-icons">&#xE8B8;</i></a>
                            <a href="#" class="button" title="Delete" data-toggle="tooltip"><i
                                    class="material-icons">&#xE5C9;</i></a>
                        </td>


                    </tr>

                        <?php endfor;?>
                </tbody>

                <!--<tbody>
                    <tr>
                        <td>1</td>
                        <td>Olusade Calhoun</td>
                        <td>olc39417</td>
                        <td class="user-type">Employee</td>
                        <td class="status"><span class="status text-success">&bull;</span> Active</td>
                        <td class="promotion">
                            <button onclick="promote();">Promote</button>
                        </td>
                        <td>1</td>
                        <td>Olusade Calhoun</td>
                        <td>olc39417</td>
                        <td class="user-type">Employee</td>
                        <td class="status"><span class="status text-success">&bull;</span> Active</td>
                        <td class="promotion">
                            <button onclick="promote();">Promote</button>
                        </td>
                        <td>1</td>
                        <td>Olusade Calhoun</td>
               
                    </tr>
                    
                 
                </tbody>-->
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
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/2.5.4/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>


    <script src="https://cdn.datatables.net/1.10.22/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.22/js/dataTables.bootstrap4.min.js"></script>
    <script>
        $("#mydatatable").DataTable();

        var table = document.getElementById("mydatatable");

        table.find('tr').each(function () {
            var $tds = $(this).find('td');
            //var number = $tds.eq(0).text();
            //var name = $tds.eq(1).text();
            //var accountID = $tds.eq(2).text();
            var role = $tds.eq(3).text();
            var status = $tds.eq(4).text();
            var action = $tds.eq(5).text();
            // do something with it
            if (role.value == "User") {
                action.html("<select><option>Suspend</option><option>Unsuspend</option></select>");
            } else if (role.value == "Employee") {
                action.html("<button>Promote</button>");
            } else if (role.value == "Admin") {
                action.html("<button>Demote</button>");
            }
        });

        function changeSelected() {
            var select = document.getElementById("suspension").value;
            if (select.value == "Suspended") {
                status.html("<p><span class='status text-warning'>&bull;</span> Inactive</p>");
            } else if (select.value == "Unsuspended") {
                status.html("<p><span class='status text-success'>&bull;</span> Active</p>");
            }
        }

        function demote() {
            role.html("Employee");
        }

        function promote() {
            role.html("Admin");
        }




    </script>
</body>

</html>