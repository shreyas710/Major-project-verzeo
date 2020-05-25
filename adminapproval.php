<?php
session_start();

    if(isset($_SESSION['message'])){
        echo "<script type='text/javascript'>
            alert('" . $_SESSION['message'] . "');
            </script>";
            session_unset();
    }
?>

<html> 
    <head>
        <title>Admin Approval</title>
    <style>
        tr{
            text-align: center;
            font-size: 17px;
            font-weight: bold;
            color: blue; 
        }
        th{
            text-align: center;
            font-size: 20px;
            font-weight: bold;
            color: brown; 
        }
input[type="submit"]{
    /* change these properties to whatever you want */
    background-color: brown;
    font-size: 20px;
    color: white;
    border-radius: 10px;
}
</style></head>
    <body text="brown">
        <h1><font color="black">Pending Applications</font></h1>
        <div class="back" style="text-align: center;
    background-color: rgb(61, 61, 61);
	height: 90px;
	position: relative;
	top: 0px;">
                <a href="main.php" style="position: relative;
    left: 500px;
    top: -45px;
    color: black;">GO TO MAIN PAGE</a>
        </div>

    <?php
    include_once('database.php');
    $conn = mysqli_connect($dbServername, $dbUsername, $dbPassword, $dbName);
if (!$conn)
  {
  die('Could not connect: ' . mysqli_error());
  }

$query = ("select * from loan_application where approval='PENDING'");

$result=mysqli_query($conn,$query);

$i = 1; //counter for the checkboxes so that each has a unique name
echo "<form method='post'>"; //form started here
echo "<table border='7' cellpadding='8' cellspacing='8' color='white' bordercolor='black' bgcolor='lightgreen' 
style='table-layout: fixed;
width: 100%;'>
<tr>
<th>First Name</th>
<th>Last Name</th>
<th>Email </th>
<th>Age</th>
<th>Date of Birth</th>
<th>Monthly Income</th>
<th>Loan Amount Needed</th>
<th>Purpose</th>
<th>Tenure</th>
<th>Approval Status</th>
<th>Approve</th>
<th>Reject</th>
</tr>";

while($row = mysqli_fetch_array($result))
{
    $ma = $row['email'];
    echo "<tr>";
    echo "<td style='word-wrap: break-word; word-break: break-all;'>" . $row['firstname'] . "</td>";
    echo "<td style='word-break: break-all;'>" . $row['lastname'] . "</td>";
    echo "<td style='word-break: break-all;'>" . $row['email'] . "</td>";
    echo "<td style='word-break: break-all;'>" . $row['age'] . "</td>";
    echo "<td style='word-break: break-all;'>" . $row['dateofbirth'] . "</td>";
    echo "<td style='word-break: break-all;'>" . $row['monthlyincome'] . "</td>";
    echo "<td style='word-break: break-all;'>" . $row['loanamountneeded'] . "</td>";
    echo "<td style='word-break: break-all;'>" . $row['purpose'] . "</td>";
    echo "<td style='word-break: break-all;'>" . $row['tenure'] . "</td>";
    echo "<td style='word-break: break-all;'>" . $row['approval'] . "</td>";
    echo "<td><input type='submit' name='approve' value='Approve' id = $ma onclick='updatedata(this.id)'></td>";
    echo "<td><input type='submit' name='reject' value='Reject' id = $ma onclick='updatedata1(this.id)'></td>";
    echo "</tr>";
    $_SESSION['status'] = $row['approval'];
    $i++;
}
echo "</table>";
echo "</form>";


    mysqli_close($conn);
    ?>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script>
    function updatedata(id){

        trid=id;

        $.ajax({
            url: "updateacc.php",
            type:"post",
            data:{ val : id },


            success: function(result){
                $('table#sHold tr#'+trid).remove();

        }
        });
    }


    function updatedata1(id){
        trid=id;

        $.ajax({
        url: "updaterej.php",
        type:"post",
        data:{ val : id },


        success: function(result){
            $('table#sHold tr#'+trid).remove();
        }
        });
    }
    </script>
    </body>
</html>