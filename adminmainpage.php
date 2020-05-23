<?php
session_start();

?>


<!DOCTYPE html>
<html>
<head>
  
    <title></title>
    <link rel="stylesheet" href="adminstyle.css">
    <?php include 'links.php'?>
</head>
<body>
    

<div class="container center-div shadow">
    <div class="heading text-center text-uppercase text-ehite mb-5" > 
        this is admin page
         <?php echo $_SESSION['user']?> h</div>
<a href="logout.php" class="btn btn-danger">Logout</a>

</div>
 

</body>
</html>