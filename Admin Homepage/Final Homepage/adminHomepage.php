<!DOCTYPE html>

<html>
<head>
    <title>New Admin Homepage</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/a746b8874d.js" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
</head>
<body>
  <style>
    body
    {
      padding-top: 50px;
    }
    *
    {
      text-align:center;
    }
  </style>
  <div class="container-fluid">
    <nav class="navbar navbar-expand navbar-light">
       <a class="navbar-brand" href="#"><img src="https://placeholder.com/wp-content/uploads/2018/10/placeholder.com-logo4.jpg" height="50"></a>
        <div class="collapse navbar-collapse">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item px-4"><a href="../../Homepage/LogUserOut.php" class="nav-link py-4" >Logout</a></li> 
          </ul>     
        </div>
    </nav>
  </div>
  <section class="jumbotron text-center">
        <div class="container-fluid">
          <h1 class="jumbotron-heading">Welcome, admin!</h1>
          <p class="lead text-muted">Manage the website by choosing one of the options below</p>
        </div>
  </section>
  <div class="album py-5 bg-light">
    <div class="container">
      <div class="row">
        <div class="col-md-4">
          <div class="card mb-4 box-shadow">
            <br>
            <a href="../Admin_Phps/BookRetrieval.php" style="color:black;"><i class="fas fa-book card-img-top fa-10x"></i></a>
            <div class="card-body">
              <a href="#" style="text-decoration:none;color:black;"><h3 class="card-text">Manage Books</h3></a>
              <br>
              <p class="card-text">Add, delete and edit books within the inventory</p>  
              <div class="d-flex justify-content-between align-items-center">
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="card mb-4 box-shadow">
            <br>
            <a href="../Admin_Phps/PromotionsRetrieval.php" style="color:black;"><i class="fas fa-dollar-sign card-img-top fa-10x"></i></a>
            <div class="card-body">
              <a href="#" style="text-decoration:none;color:black;"><h3 class="card-text">Manage Promotions</h3></a>
              <br>
              <p class="card-text">Add promotions to send out to all subscribed users</p>
              <div class="d-flex justify-content-between align-items-center">
              </div>
            </div>
          </div>
        </div>
        
        <div class="col-md-4">
          <div class="card mb-4 box-shadow">
            <br>
            <a href="../Admin_Phps/UserRetrieval.php" style="color:black;"><i class="fas fa-users card-img-top fa-10x"></i></a>
            <div class="card-body">
              <a href="manageUsers.html" style="text-decoration:none;color:black;"><h3 class="card-text">Manage Users</h3></a>
              <br>
              <p class="card-text">Promote/demote employees and suspend/unsuspend users if need be</p>
              <div class="d-flex justify-content-between align-items-center">
              </div>
            </div>
          </div>
        </div>
      
      </div>
    </div>
  </div>
  
  <script>
    var dt = new Date();
    document.getElementById("datetime").innerHTML = (("0"+dt.getDate()).slice(-2)) +"."+ (("0"+(dt.getMonth()+1)).slice(-2)) +"."+ (dt.getFullYear()) +" "+ (("0"+dt.getHours()).slice(-2)) +":"+ (("0"+dt.getMinutes()).slice(-2));
  </script>

</body>
</html>
