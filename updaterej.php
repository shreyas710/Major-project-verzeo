<?php
    $user_id=$_POST['val'];
    $status = 'REJECTED';
    $conn = mysqli_connect('localhost', 'root', '', 'projectdatabase') or die('ERROR: Cannot Connect='.mysql_error($conn));
    mysqli_query($conn,"update loan_application set approval='$status' where email = '$user_id'");
?>