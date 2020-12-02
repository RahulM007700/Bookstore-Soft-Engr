<?php session_start();?>
<!DOCTYPE html>

<html>
<head>
    <title>New Order History</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"></link>
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.22/css/dataTables.bootstrap4.min.css"></link>
    <link rel="stylesheet" href="newShoppingCart.css"></link>
    <script src="https://kit.fontawesome.com/a746b8874d.js" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>    
</head>
<style>
    .table
    {text-align:left;}
</style>
<body>
<!--nav bar-->
    <div class="container-fluid">
      <nav class="navbar navbar-expand navbar-light">
          <a class="navbar-brand" href="#"><img src="https://placeholder.com/wp-content/uploads/2018/10/placeholder.com-logo4.jpg" height="50"></a>
          <div class="collapse navbar-collapse">
            <ul class="navbar-nav ml-auto">
              <li class="nav-item px-4"><a href="#" class="nav-link py-4">Textbooks</a></li>
              <li class="nav-item px-4"><a href="#" class="nav-link py-4">Adults</a></li>
              <li class="nav-item px-4"><a href="#" class="nav-link py-4">Teens</a></li>
              <li class="nav-item px-4"><a href="#" class="nav-link py-4">Kids</a></li>
                <div class="dropdown">
                <li class="nav-item px-4"><a href="#" class="nav-link py-4">
    
                  <!--Trigger-->
                 
                  <a class="btn-floating btn-lg black dropdown-toggle"type="button" id="dropdownMenu3" data-toggle="dropdown"
                  aria-haspopup="true" aria-expanded="false" data-target="#navItem"><i class="fas fa-user fa-2x" style="color:grey;"></i></a>              
                  <!--Menu-->
                  <div class="dropdown-menu dropdown-primary" id="navItem">
                    <a class="dropdown-item" href="#" id="login" data-toggle="modal" data-target="#loginModal">Login/Sign Up</a>
                    <a class="dropdown-item" href="#">Edit Profile</a>
                    <a class="dropdown-item" href="#">Order History</a>
                  </div>
                  </a></li>
                </div>
              <li class="nav-item px-4"><a href="#" class="nav-link py-4"><i class="fas fa-shopping-cart"></i></a></li>
            </ul>     
          </div>
      </nav>
    </div>
<!--end of nav bar-->

<div class="pb-5">
    <div class="container">
      <div class="row">
        <div class="col-lg-12 p-5 bg-white rounded shadow mb-5">
            <h2 style="text-align:left;">Your Orders</h2>
            <div class="col-lg-12 p-5 bg-white rounded shadow mb-5">
                <div class="table-responsive">
                    <table class="table">
                        <thead style="text-align:left;">
                            <td>Order Placed<span class="text-muted font-weight-normal font-italic d-block">Date goes here</span></td>
                            <td>Total<span class="text-muted font-weight-normal font-italic d-block">Total goes here</span></td>
                            <td>ORDER #<span class="text-muted font-weight-normal font-italic d-block">Order num goes here</span></td>
                        </thead>
                        <?php for ($i = 0; $i < sizeof($_SESSION['Order_History']); $i++) :?>
                        <tbody>
                            <tr>
                                <td><?php echo '<img src="data:image/jpeg;base64,'.base64_encode($_SESSION['Order_History'][$i]['Cover'] ).'" alt="" height="70" width="70">'?></td>
                                <td><?php echo "Quantity: ";?><?= $_SESSION['Order_History'][$i]['Quantity']; ?></td>
                                <td><?php echo "$ ";?><?= $_SESSION['Order_History'][$i]['Price']; ?></td>
                            </tr>
                        </tbody>
                        <?php endfor; ?>
                    </table>
                    <button type = "button" class="btn btn-light" style="float:right;">Reorder</button>
                </div>
            </div>
        </div>
      </div>
    </div>
</div>
</html>
