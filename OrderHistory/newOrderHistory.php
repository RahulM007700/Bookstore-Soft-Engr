<?php session_start();?>
<!DOCTYPE html>

<html>
<head>
    <title>New Order History</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"></link>
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.22/css/dataTables.bootstrap4.min.css"></link>
    <link rel="stylesheet" href="../Shopping Cart/newShoppingCart.css"></link>
    <script src="https://kit.fontawesome.com/a746b8874d.js" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
</head>
<style>
    .table
    {text-align:left;}
     .modal-body {
    max-height: calc(100vh - 210px);
    overflow-y: auto;
} 
  body {
    padding-top: 50px;
}
.dropdown.dropdown-lg .dropdown-menu {
    margin-top: -1px;
    padding: 6px 20px;
}
.input-group-btn .btn-group {
    display: flex !important;
}
.btn-group .btn {
    border-radius: 0;  
    margin-left: -1px;
}
.btn-group .btn:last-child {
    border-top-right-radius: 4px;
    border-bottom-right-radius: 4px;
}
.btn-group .form-horizontal .btn[type="submit"] {
  border-top-left-radius: 4px;
  border-bottom-left-radius: 4px;
}
.form-horizontal .form-group {
    margin-left: 0;
    margin-right: 0;
}
.form-group .form-control:last-child {
    border-top-left-radius: 4px;
    border-bottom-left-radius: 4px;
}
    .nav-item
    {
        font-size:1.3rem;
    }
    .mycol
    {
        border:1px solid black;
        background-color:black;
    }
    *
    {
        text-align:center;
/*          font-family: Arial, Helvetica, sans-serif;
*/
font-family:"Lucida Sans Unicode", "Lucida Grande", sans-serif;
    }
    .card
    {
        border: none;
        background: #D6D1B1;
    }

    .search {
        width: 100%;
        margin-bottom: auto;
        margin-top: 20px;
        height: 50px;
        background-color: #fff;
        padding: 10px;
        border-radius: 5px;
    }
    
    .search-input {
        color: white;
        border: 0;
        outline: 0;
        background: none;
        width: 0;
        margin-top: 5px;
        caret-color: transparent;
        line-height: 20px;
        transition: width 0.4s linear;
    }
    
    .search .search-input {
        padding: 0 10px;
        width: 100%;
        caret-color: #536bf6;
        font-size: 19px;
        font-weight: 300;
        color: black;
        transition: width 0.4s linear;
    }
    
    .search-icon {
        height: 34px;
        width: 34px;
        float: right;
        display: flex;
        justify-content: center;
        align-items: center;
        color: white;
        background-color: #536bf6;
        font-size: 10px;
        bottom: 30px;
        position: relative;
        border-radius: 5px;
    }
    .dropdown-toggle
    {
        height: 34px;
        width: 34px;
        float: left;
        display: flex;
/*        background-color: #536bf6;
*/        justify-content: center;
        align-items: center;
        color: white;
        font-size: 10px;
        bottom: 30px;
        position: relative;
        border-radius: 5px;
    }
    
    .search-icon:hover {
        color: #fff !important;
    }
    
    a:link {
        text-decoration: none;
    }
    
    .card-inner {
        position: relative;
        display: flex;
        flex-direction: column;
        min-width: 0;
        word-wrap: break-word;
        background-color: #fff;
        background-clip: border-box;
        border: 1px solid rgba(0, 0, 0, .125);
        border-radius: .25rem;
        border: none;
        cursor: pointer;
        transition: all 2s;
    }
    
    .card-inner:hover {
        transform: scale(1.1);
    }
    
    .mg-text span {
        font-size: 12px;
    }
    
    .mg-text {
        line-height: 14px;
    }
    .btn-default
    {
      background-color:#E0DEDE;
      margin-left:5px;
    }
    .features
    {margin-top:50px;}
    .container-fluid {
    padding-right:0;
    padding-left:0;
    margin-right:auto;
    margin-left:auto
 }
 
 .hero-image {
  /* Use "linear-gradient" to add a darken background effect to the image (photographer.jpg). This will make the text easier to read */
  background-image: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)), url("http://www.loganberrybooks.com/img/about/mural%20final%20layout.jpg");

  /* Set a specific height */
  height: 50%;

  /* Position and center the image to scale nicely on all screens */
  background-position: center;
  background-repeat: no-repeat;
  background-size: cover;
  position: relative;
}
.outside
{
  border-left:1px solid /*#a52a2a*/black;
  border-right:1px solid black;
}
.b {
   width: 100%; 
   text-align: center; 
   border-bottom: 1px solid #000; 
   line-height: 0.1em;
   margin: 10px 0 20px; 
} 

.b span { 
    background:#ECEEEF; 
    padding:0 10px; 
}
.b2
{
  width: 94%;
  margin-left:2.5%;
  margin-right:2.5%;
   text-align: center; 
   border-bottom: 1px solid #000; 
   line-height: 0.1em;
   margin: 10px 0 20px;
}

.b2 span
{
  background:#faf0e6; 
  padding:0 10px;
}
.required:after {
    content:" *";
    color: red;
  }
</style>
<body>  
    
<!--nav bar-->
 <!--nav bar-->
  <div class="container-fluid">
    <nav class="navbar navbar-expand navbar-light">
        <a class="navbar-brand" href="#"><img src="BooksRUs_Logo.png" height="80"></a>
        <div class="collapse navbar-collapse">
          <ul class="navbar-nav ml-auto">
            <!--<li class="nav-item px-4"><a href="#" class="nav-link py-4">Textbooks</a></li>
            <li class="nav-item px-4"><a href="#" class="nav-link py-4">Adults</a></li>-->
            <div class="btn-group dropdown">
               <li class="nav-item px-4 mt-0"><a href="#" class="nav-link py-4"><a style="color:rgba(0,0,0,.5);top:-24px;" href="#" class="dropdown" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" data-target="#cat">Categories</a>            
                  <div class="dropdown-menu dropdown-primary" id="cat">
                    <a class="dropdown-item" href="#" id="biography"><input type="hidden">Biography</a>
                    <a class="dropdown-item" href="#" id="sciencefiction"><input type="hidden">Science-Fiction</a>
                    <a class="dropdown-item" href="#" id="nonfiction"><input type="hidden">Non-Fiction</a>
                    <a class="dropdown-item" href="#" id="poetry"><input type="hidden">Poetry</a>
                    <a class="dropdown-item" href="#" id="drama"><input type="hidden">Drama</a>
                  </div>
                 </a>
               </li>
            </div>
                  
            <li class="nav-item px-4"><a href="#" class="nav-link py-4">About Us</a></li>
            <li class="nav-item px-4"><a href="#" class="nav-link py-4">Contact</a></li>
              <div class="dropdown">
              <li class="nav-item px-4"><a href="#" class="nav-link py-4">

                <!--Trigger-->
               
                <a class="btn-floating btn-lg black dropdown-toggle"type="button" id="dropdownMenu3" data-toggle="dropdown"
                aria-haspopup="true" aria-expanded="false" data-target="#navItem"><i class="fas fa-user fa-2x" style="color:grey;"></i></a>              
                <!--Menu-->
                <div class="dropdown-menu dropdown-primary" id="navItem">
                <?php
                    //session_start();
                    if (isset($_SESSION['Email'])){
                      echo '
                              <a class="dropdown-item" href="./LogUserOut.php" id="logout" style="color: black">Logout</a>
                            
                            
                              <a class="dropdown-item"
                                href="../EditProfile/edit_profile.php"
                                style="color: black"
                                >Edit Profile</a
                              >
                            
                            
                              <a class="dropdown-item"
                                href="../OrderHistory/order-history.html"
                                style="color: black"
                                >Order History</a
                              >
                            ';
                    }
                    else {
                      echo '<a class="dropdown-item" href="#" id="login" data-toggle="modal" data-target="#loginModal">Login/Sign Up</a>';
                    }
                  ?>
                </div>
                </a></li>
              </div>
            <li class="nav-item px-4"><a href="../Shopping Cart/shoppingCartRetrieval.php" class="nav-link py-4"><i class="fas fa-shopping-cart"></i></a></li>
          </ul>     
        </div>
    </nav>
  </div>
  
<!--end of nav bar-->

<div class="container-fluid">
    <div class="hero-image">
      <div class="hero-text" style="color:transparent;">
        <h1>hello</h1>
        <h1>you are annoying</h1>
        <h1>why is it only growing with image</h1>
      </div>
    </div>
  </div>

<div class="pb-5 mt-5">
    <div class="container">
      <div class="row">
        <div class="col-lg-12 p-5 bg-white rounded shadow mb-5">
            <h2 style="text-align:left;">Your Orders</h2>
            <div class="col-lg-12 p-5 bg-white rounded shadow mb-5">
                <div class="table-responsive">
                    <table class="table">
                        <thead style="text-align:left;">
                            <td>Order Placed<span class="text-muted font-weight-normal font-italic d-block"></span></td>
                            <td>Quantity<span class="text-muted font-weight-normal font-italic d-block"></span></td>
                            <td>Price<span class="text-muted font-weight-normal font-italic d-block"></span></td>
                            <td>Date<span class="text-muted font-weight-normal font-italic d-block"></span></td>
                        </thead>
                        <?php for ($i = 0; $i < sizeof($_SESSION['Order_History']); $i++) :?>
                        <tbody>
                            <tr>
                                <td><?php echo '<img src="data:image/jpeg;base64,'.base64_encode($_SESSION['Order_History'][$i]['Cover'] ).'" alt="" height="70" width="70">'?></td>
                                <td><?= $_SESSION['Order_History'][$i]['Quantity']; ?></td>
                                <td><?php echo "$";?><?= $_SESSION['Order_History'][$i]['Price']; ?></td>
                                <td><?= $_SESSION['Order_History'][$i]['Date_Purchased']; ?></td>
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
<footer style="background-color:#F8F8F8; text-align:center;">
        	<div class="footer-top" style="text-align:left;">
		        <div class="container">
		        	<div class="row">
		        		<div class="col-md-3 mt-5 footer-about " style="visibility: visible;text-align:center;">
		        			<p>
		        				We are a young online bookstore company always looking for new and creative ways for you to enhance your book collection.
		        			</p>
		        			<p>© Books-R-Us Inc.</p>
	                    </div>
		        		<div class="col-md-4 mt-5 offset-md-1 footer-contact" style="visibility: visible; text-align:center;">
		                	<p><i class="fas fa-map-marker-alt"></i> University of Georgia, Athens, GA 30602</p>
		                	<p><i class="fas fa-phone"></i> Phone: (123) 456 7890</p>
		                	<p><i class="fas fa-envelope"></i> Email: <a href="onlinebookstoreTC8@gmail.com" style="color:black; text-decoration: none;">onlinebookstoreTC8@gmail.com</a></p>
	                    </div>
	                    <div class="col-md-4 mt-5 footer-links" style="visibility: visible; left:80px;">
	                    	<!--<div class="row">
	                    		<div class="col">
	                    			<h3>Links</h3>
	                    		</div>
	                    	</div>-->
	                    	<div class="row">
	                    		<div class="col-md-6">
	                    			<p style="text-align:left;color:black;"><a class="scroll-link" href="#" style="color:black; text-decoration: none;">Home</a></p>
	                    			<p style="text-align:left;color:black;"><a href="#" style="color:black; text-decoration: none;">About Us</a></p>
	                    		</div>
	                    		<div class="col-md-6">
                                    <p style="text-align:left;color:black;"><a href="#" style="color:black; text-decoration: none;">Login</a></p>
	                    			<p style="text-align:left;color:black;"><a href="#" style="color:black; text-decoration: none;">Registration</a></p>
	                    		</div>
	                    	</div>
	                    </div>
		            </div>
		        </div>
	        </div>
	        <div class="footer-bottom">
	        	<div class="container">
	        		<div class="row">
	           			<div class="col footer-social">
	                    	<a href="#"><i class="fab fa-facebook-f px-2 blackiconcolor" style="color:black;"></i></a> 
							<a href="#"><i class="fab fa-twitter px-2" style="color:black;"></i></a> 
							<a href="#"><i class="fab fa-google-plus-g px-2" style="color:black;"></i></a> 
							<a href="#"><i class="fab fa-instagram px-2" style="color:black;"></i></a> 
							<a href="#"><i class="fab fa-pinterest px-2" style="color:black;"></i></a>
	                    </div>
	           		</div>
	        	</div>
	        </div>
        </footer>
</html>
