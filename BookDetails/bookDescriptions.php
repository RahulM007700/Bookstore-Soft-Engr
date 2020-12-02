<?php session_start(); ?>
<!DOCTYPE HTML>
<html>
    <head>
        <title>Book Descriptions</title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"></link>
        <link rel="stylesheet" href="https://cdn.datatables.net/1.10.22/css/dataTables.bootstrap4.min.css"></link>
        <script src="https://kit.fontawesome.com/a746b8874d.js" crossorigin="anonymous"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>        
    </head>
    <style>
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
  background-image: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)), url("https://s3.amazonaws.com/prod.assets.thebanner/styles/article-large/s3/article/large/TIN-332%20Books%20from_large.jpg?itok=goIsOQs0");

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
        <!--nav bar end-->
        
        <div class="container" style="margin-top:50px;">
            <div class="row justify-content-around">
                
                    <?php
                        for ($i = 0; $i < sizeof($_SESSION['Books']); $i++) {   
                            //echo '<img src="data:image/jpeg;base64,'.base64_encode($_SESSION['Books'][$i]['Cover'] ).'" alt="top1" class="top1" height="500"/>';                         
                            if ($_SESSION['Books'][$i]['ISBN'] == $_SESSION['TempISBN']) {
                                echo '<div class= "col-5 justify-content-center">';
                                echo "Here";
                                $_SESSION['Cover'] = $_SESSION['Books'][$i]['Cover'];
                                echo '<img src="data:image/jpeg;base64,'.base64_encode($_SESSION['Books'][$i]['Cover'] ).'" alt="top1" class="top1" height="500"/>';
                                echo '</div>';
                                echo '<div class="col-7" style="padding-left:30px;padding-top:10px;background-color:#faf0e6;">';
                                echo '<div class="row">';
                                echo '<h1 id="title">';
                                echo $_SESSION['Books'][$i]['Book_Name'];
                                echo '</h1>';
                                echo '</div>';
                                echo '<div class="row">';
                                echo '<p id="author">';
                                echo $_SESSION['Books'][$i]['Author'];
                                echo '</p>';
                                echo '</div>';
                                echo '<div class="row">';
                                echo '<p id="rating">Rating</p>';
                                echo '</div>';
                                echo '<hr>';
                                echo '<div class="row">';
                                echo '<h6 id="ISBN">ISBN:';
                                echo $_SESSION['Books'][$i]['ISBN'];
                                echo '</h6>';
                                echo '</div>';
                                echo '<div class="row">';
                                echo '<h4 id="price">';
                                echo $_SESSION['Books'][$i]['Asking_Price'];
                                echo '</h4>';
                                echo '</div>';
                                echo '<div class="row">';
                                echo '<p><b>Description</b></p>';
                                echo '<p style="text-align:left;">hello hello In front of me is a kiosk, a couch and a chair. There are some people sitting upstairs in the lobby. A lot of people are moving out right now because Thanksgiving is tomorrow and classes are online post-Thanksgiving. I am trying to figure out why the text is centered.</p>';
                                echo '</div>';
                                echo '<div class="row" style="float:left;padding-left:0px;">';
                                echo '<div class="col-12 justify-content-center">';
                                echo '<form method="POST" action="../Shopping%20Cart/updateCart.php">';
                                echo '<input type="hidden" name="Name" value="';
                                echo $_SESSION['Books'][$i]['Book_Name'];
                                echo '">';
                                echo '<input type="hidden" name="Item_ID" value="';
                                echo $_SESSION['Books'][$i]['ISBN'];
                                echo '">';
                                echo '<input type="hidden" name="Name" value="';
                                echo $_SESSION['Books'][$i]['Book_Name'];
                                echo '">';
                                echo '<input type="hidden" name="Price" value="';
                                echo $_SESSION['Books'][$i]['Asking_Price'];
                                echo '">';
                                echo '<label for="quantity">Quantity:</label>';
                                echo '<input type="number" id="quantity" name="quantity" step="1" style="width:25%;">';
                                echo '<input type="submit" name="actions" value="Add to Cart" style="width:30%;"></input><!--does this need to be input instead?-->';
                                echo '</form>';
                                echo '</div>';
                                echo '</div>';
                            }
                        }
                    ?>    
                </div>
            </div>
            
        </div>
        
    </body>
</html>
