<?php session_start(); ?>
<!DOCTYPE HTML>
<html>
    <head>
        <meta charset="utf-8">
        <title>Manage Users</title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"></link>
        <link rel="stylesheet" href="https://cdn.datatables.net/1.10.22/css/dataTables.bootstrap4.min.css"></link>
        <script src="https://kit.fontawesome.com/a746b8874d.js" crossorigin="anonymous"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <script>
            $(document).ready(function(){
                $("#btn").click(function(){   
                   $("#user-type").html('Admin');
               });
            });
        </script>
            
    </head>
    <style>
    body
    {
        padding-top: 50px;
    }
    .nav-link-main:hover
    {
        background-color:#FAF0E6;
        border-radius:5px;
        padding:8px;
    }
    .container-fluid
    {
        padding-right:0;
        padding-left:0;
        margin-right:auto;
        margin-left:auto
    }
    </style>
    <body>
        <div class="container-fluid">
            <nav class="navbar navbar-expand navbar-light">
                <a class="navbar-brand" href="adminHomepage.html"><img src="https://placeholder.com/wp-content/uploads/2018/10/placeholder.com-logo4.jpg" height="50"></a>
                <div class="collapse navbar-collapse">
                  <ul class="navbar-nav ml-auto">
                    <li class="nav-item px-4"><a href="../../Homepage/LogUserOut.php" class="nav-link py-4">Logout</a></li> 
                  </ul>     
                </div>
            </nav>
        </div>
        <div class="container-fluid" style="background-color:#e9ecef;padding-bottom:20px; padding-top:20px;">
            <div class="container-fluid">
              <h1 class="jumbotron-heading text-center">Manage Users</h1>
            </div>
            <ul class="nav justify-content-center">
                <li class="nav-item px-5"><a class="nav-link-main" href="../Admin_Phps/BookRetrieval.php" style="color:black;text-decoration:none;"><i class="fas fa-book"></i>&nbsp;&nbsp;Manage Books</a></li>
                <li class="nav-item px-5"><a class="nav-link-main" href="../Admin_Phps/PromotionsRetrieval.php" style="color:black;text-decoration:none;"><i class="fas fa-dollar-sign"></i>&nbsp;&nbsp;Manage Promotions</a></li>
                <li class="nav-item px-5"><a class="nav-link-main" href="../Admin_Phps/UserRetrieval.php" style="color:black;text-decoration:none;"><i class="fas fa-users"></i>&nbsp;&nbsp;Manage Users</a></li>
            </ul>
        </div>
        <div class="container mb-3 mt-3">
            <table class="table table-striped table-bordered" id="mydatatable" style="border-radius:4px;">
                <thead>
                    <tr>
                        <th>No.</th>
                        <th>Name</th>
                        <th>Role</th>
                        <th>Status</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                
                    <?php 
                        //$i = 0;
                        for($i = 0; $i < sizeof($_SESSION['Employees']); $i++):
                    ?>
                    
                    <tr>
                        <form method="post" action="../Admin_Phps/UserUpdate.php">
                        <td><?= $i; ?></td>
                        <td><?php echo $_SESSION['Employees'][$i]['FirstName'];
                                  echo " ";
                                  echo $_SESSION['Employees'][$i]['LastName'];
                            ?>
                        </td>
                        <td><?php echo $_SESSION['Employees'][$i]['AccountType'];?></td>
                        <td><?php echo $_SESSION['Employees'][$i]['Status'];?></td>
                        <td class="promotion" name="change">
                        <input type="hidden" name="FirstName" value='<?php echo $_SESSION['Employees'][$i]['FirstName'];?>'/></input>
                        <?php 
                        if ($_SESSION['Employees'][$i]['AccountType'] == "Admin" || $_SESSION['Employees'][$i]['AccountType'] == "Employee"){
                            echo '<select name="change" onchange="this.form.submit()">                           
                                <option></option>                                
                                <option value="Promote">Promote</option>
                                <option value="Demote">Demote</option>
                            </select>'; 
                        }
                        else {
                            echo '<select name="change" onchange="this.form.submit()"> 
                                <option></option>
                                <option value="Suspend">Suspend</option>
                                <option value="Reinstate">Reinstate</option>
                            </select>';
                        }
                        ?>
                        
                        </td>
                        </form>
                    </tr>
                    
                    <?php endfor;?>
                                 
                </tbody>
                <tfoot>
                    <tr>
                        <th>No.</th>
                        <th>Name</th>
                        <th>Role</th>
                        <th>Status</th>
                        <th>Action</th>
                    </tr>
                </tfoot>
            </table>
            <h1 id="here"></h1>
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
                } else if (role.value == "Employee"){
                    action.html("<button>Promote</button>");
                } else if (role.value == "Admin") {
                    action.html("<button>Demote</button>");
                }    
            });
            
            function promote() {
                if (document.getElementById("user-type").innerHTML === "Employee"){
                    document.getElementById("user-type").innerHTML = "Admin";
                }
              //var xhttp = new XMLHttpRequest();
              //xhttp.onreadystatechange = function() {
                //if (this.readyState == 4 && this.status == 200) {
                  //document.getElementById("here").innerHTML = this.responseText;
                //}
              //};
              //xhttp.open("GET", "data.txt", true);
              //xhttp.send();
            }
            
            function changeSelected() {
                //var select = document.getElementById("suspension").value;
                //if (select.value == "Suspended") {
                //    status.html("<p><span class='status text-warning'>&bull;</span> Inactive</p>");
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
