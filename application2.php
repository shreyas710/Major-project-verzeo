<?php
   session_start();
   if(isset($_SESSION['message'])){
    echo "<script type='text/javascript'>
            alert('" . $_SESSION['message'] . "');
          </script>";
}
if(isset($_SESSION['errorMessage11'])){
     echo "<script type='text/javascript'>
     alert('" . $_SESSION['errorMessage11'] . "');
     </script>";
}
?>

<html>
    <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Application Page</title>
    <link rel="stylesheet" href="application2.css">
    <?php include 'links.php'?>
    </head>
    <body>
        <nav>
        <div class="text"><h4>APPLICATION FORM STATUS</h4></div>
            <div class="back">
                <a href="main.php">GO TO MAIN PAGE</a>
            </div>
        </nav>
        <form>
            <div class="text1">First Name : <input type="text" name="firstname" value="<?php
                if(isset($_SESSION['firstnameapp2'])){
                    echo ($_SESSION['firstnameapp2']);
                }else{
                    echo "";
                }
            ?>" readonly class="form-control" autocomplete="off"></div>
            <br><br>
            <div class="text2">Last Name : <input type="text" name="lastname" value="<?php
            if(isset($_SESSION['lastnameapp2'])){
                echo ($_SESSION['lastnameapp2']);
            }else{
                echo "";
            }
            ?>" readonly class="form-control" autocomplete="off"></div>
            <br><br>
            <div class="text3">Email : <input type="email" name="email" value="<?php
                if(isset($_SESSION['emailapp2'])){
                    echo ($_SESSION['emailapp2']);
                }else{
                    echo "";
                }
            ?>" readonly class="form-control" autocomplete="off"></div>
            <br><br>
            <div class="text4">Age : <input type="number" name="age" value="<?php
                if(isset($_SESSION['ageapp2'])){
                    echo ($_SESSION['ageapp2']);
                }else{
                    echo "";
                }
            ?>" readonly class="form-control" autocomplete="off"></div>
            <br><br>
            <div class="text5">Date Of Birth : <input type="text" name="dateofbirth" value="<?php
                if(isset($_SESSION['dateofbirthapp2'])){
                    echo ($_SESSION['dateofbirthapp2']);
                }else{
                    echo "";
                }
            ?>" readonly class="form-control" autocomplete="off"></div>
            <br><br>
            <div class="text6">Monthly Income : <input type="number" name="monthlyincome" value="<?php
                if(isset($_SESSION['monthlyincomeapp2'])){
                    echo ($_SESSION['monthlyincomeapp2']);
                }else{
                    echo "";
                }
            ?>" readonly class="form-control" autocomplete="off"></div>
            <br><br>
            <div class="text7">Loan Amount Needed : <input type="number" name="loanamountneeded" value="<?php
                if(isset($_SESSION['loanamountneededapp2'])){
                    echo ($_SESSION['loanamountneededapp2']);
                }else{
                    echo "";
                }
            ?>" readonly class="form-control" autocomplete="off"></div>
            <br><br>
            <div class="text8">Purpose : <input type="text" name="purpose" value="<?php
                if(isset($_SESSION['purposeapp2'])){
                    echo ($_SESSION['purposeapp2']);
                }else{
                    echo "";
                }
            ?>" readonly class="form-control" autocomplete="off"></div>
            <br><br>
            <div class="text9">Tenure : <input type="text" name="tenure" value="<?php
                if(isset($_SESSION['tenureapp2'])){
                    echo ($_SESSION['tenureapp2']);
                }else{
                    echo "";
                }
            ?>" readonly class="form-control" autocomplete="off"></div>
            <div class="status">
                <input type="text" value="<?php
                if(isset($_SESSION['status'])){
                    echo ($_SESSION['status']);
                }else{
                    echo "PENDING";
                }
            ?>" readonly>
            </div>
            <br>
            <br>
        </form>
    </body>
</html>
