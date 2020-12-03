<?php session_start(); ?>
<!DOCTYPE HTML>
<html>
    <head>
        <title>New Shopping Cart</title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"></link>
        <link rel="stylesheet" href="https://cdn.datatables.net/1.10.22/css/dataTables.bootstrap4.min.css"></link>
        <link rel="stylesheet" href="newShoppingCart.css"></link>
        <script src="https://kit.fontawesome.com/a746b8874d.js" crossorigin="anonymous"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>        
    </head>
    <body>
        <!--nav bar-->
        <div class="container-fluid">
          <nav class="navbar navbar-expand navbar-light">
              <a class="navbar-brand" href="#"><img src="../BooksRUs_Logo.png" height="120" style="left:-20px;"></a>
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
    
              <!-- Shopping cart table -->
              <h2>Shopping Cart</h2>
              <h5 id="numOfItems"></h5>
              <div class="table-responsive">
                <table class="table">
                  <thead>
                    <tr>
                      <th scope="col" class="bg-light">
                        <div class="p-2 px-3 text-uppercase">Product</div>
                      </th>
                      <th scope="col" class="bg-light">
                        <div class="py-2 text-uppercase">Price</div>
                      </th>
                      <th scope="col" class="bg-light">
                        <div class="py-2 text-uppercase">Quantity</div>
                      </th>
                      <th scope="col" class="bg-light">
                        <div class="py-2 text-uppercase">Remove</div>
                      </th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php $_SESSION['Total'] = 0;?>
                    <?php  
                      if (isset($_POST['quantity'])) {
                        $value = $_POST['quantity'];
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
                          //echo $value;
                          $ISBN = $_POST['isbn'];
                          //echo $ISBN;
                          $Available_Books = "UPDATE shopping_cart SET Quantity='$value' WHERE Item_ID='$ISBN'";
                          if($conn->query($Available_Books)) {
                            header("Location: http://localhost/Bookstore-Soft-Engr/Shopping%20Cart/shoppingCartRetrieval.php");
                          } else {
                            echo("Error description: " . $conn -> error);
                          }
                        }
                        $conn->close();
                      }
                    ?>
                    <?php for ($i = 0; $i < sizeof($_SESSION['Cart_Items']); $i++) :?>
                    <?php $_SESSION['Total'] += $_SESSION['Cart_Items'][$i]['Price']*$_SESSION['Cart_Items'][$i]['Quantity'];?>
                        <tr>
                            <th scope="row">
                                <div class="p-2">
                                    <?php echo '<img src="data:image/jpeg;base64,'.base64_encode($_SESSION['Cart_Items'][$i]['Cover'] ).'" alt="" width="70" class="img-fluid rounded shadow">'?>
                                    <div class="ml-3 d-inline-block align-middle">
                                        <h5 class="mb-0"><a href="#" class="text-dark d-inline-block align-middle"><?= $_SESSION['Cart_Items'][$i]['Name']; ?></a></h5>
                                    </div>
                                </div>
                            </th>
                            <td class="align-middle"><strong><?= $_SESSION['Cart_Items'][$i]['Price']; ?></strong></td>
                            <td class="align-middle">
                            <form method="POST">
                                <input type="hidden" name="isbn" value="<?= $_SESSION['Changed_Book'] = $_SESSION['Cart_Items'][$i]['Item_ID'];?>">
                                <select id="quantity" name="quantity" onchange="this.form.submit()">
                                    <option><?= $_SESSION['Cart_Items'][$i]['Quantity']; ?></option>
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                    <option value="4">4</option>
                                    <option value="5">5</option>
                                    <option value="6">6</option>
                                    <option value="7">7</option>
                                    <option value="8">8</option>
                                    <option value="9">9</option>
                                    <option value="10">10</option>
                                </select>
                                </form>
                                <script>
                                    //selectElement('leaveCode', '<?= $_SESSION['Cart_Items'][$i]['Quantity']; ?>');
                                    //function selectElement(id, valueToSelect) {    
                                    //    let element = document.getElementById(id);
                                    //    element.value = valueToSelect;
                                    //}
                                </script>
                            </td>
                            <td class="align-middle"><a href="#" class="text-dark"><i class="fa fa-trash"></i></a>
                        </tr>
                    <?php endfor; ?>
                </table>
                <div class="btm" style="float:right;">
                    <h5 id="subtotal"></h5>
                    <script>
                        //var subtotal = 0;
                        //for (int i = 0; i <sizeof($_SESSION['Cart']); i++) {
                        //    subtotal += $_SESSION['Cart'][$i]['product'] * $_SESSION['Cart'][$i]['Quantity'];
                        //}
                        document.getElementById("subtotal").innerHTML = "Subtotal: <?php echo $_SESSION['Total'];?>";
                    </script>
                    <form method="POST" action="../Checkout/checkout.php">
                    <button value="Checkout" type="submit" class="btn btn-light" style=“float:right;”>Checkout</button>
                    </form>
                    </div>              
                <script>
                    var items = $i;
                    document.getElementById("numOfItems").innerHTML = "(" + items + ")" + " in your shopping cart";
                </script>
              </div>
              <!-- End -->
            </div>
          </div>
        </div>
        
    </div> 
        
    </body>
    
</html>
    
