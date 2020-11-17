<?php session_start(); ?>
<!DOCTYPE HTML> 

<html>
    <head>
        <title>Edit Profile</title>
    </head>
    <body>
        <form method="POST" action="UserUpdate.php">
            Test Data : <?php echo $_SESSION['Employees'][0]['First_Name'];?><br><br>
            <input type="submit" value="Update">
        </form>
    </body>

</html>