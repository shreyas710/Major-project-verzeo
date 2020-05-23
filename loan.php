<?php
    session_start();

    if(isset($_SESSION['errorMessage'])){
        echo "<script type='text/javascript'>
                alert('" . $_SESSION['errorMessage'] . "');
              </script>";
         session_unset();
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Loan Details</title>
</head>
<body>
    
</body>
</html>