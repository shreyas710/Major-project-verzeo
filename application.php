<?php
   session_start();
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
    <link rel="stylesheet" href="application.css?1422585377" type="text/css"/>
    <?php include 'links.php'?>
    </head>
    <body>
        <nav>
            <div class="text"><h4>APPLICATION FORM</h4></div>
        </nav>
        <form method="POST" action="processapp.php" onsubmit="return validateForm()" name="myform">
            <div class="text1">First Name : <input type="text" name="firstname" class="form-control" autocomplete="off" placeholder = "Enter First Name"></div>
            <br><br>
            <div class="text2">Last Name : <input type="text" name="lastname" class="form-control" autocomplete="off" placeholder = "Enter Last Name"></div>
            <br><br>
            <div class="text3">Email : <input type="email" name="email" value="<?php
            if(isset($_SESSION['email'])){
                echo ($_SESSION['email']);
                session_unset();
            }else{
                echo "";
            }
               
            ?>" readonly class="form-control" autocomplete="off"></div>
            <br><br>
            <div class="text4">Age : <input type="number" name="age" class="form-control" autocomplete="off" placeholder = "Enter Age"></div>
            <br><br>
            <div class="text5">Date Of Birth : <input type="text" name="dateofbirth" class="form-control" autocomplete="off" placeholder = "Enter Date of Birth"></div>
            <br><br>
            <div class="text6">Monthly Income : <input type="number" name="monthlyincome" class="form-control" autocomplete="off" placeholder = "Enter Monthly Income"></div>
            <br><br>
            <div class="text7">Loan Amount Needed : <input type="number" name="loanamountneeded" class="form-control" autocomplete="off" placeholder = "Enter Loan Amount Needed"></div>
            <br><br>
            <div class="text8"><label> Purpose :</label><br>
            <select name="purpose" id = "purpose">
                <option value="Mortage">Mortage</option>
                <option value="Home Purchase">Home Purchase</option>
                <option value="Student Loan">Student Loan</option>
            </select></div>
            <br><br>
           <div class="text9">Tenure : <br><br><input type="radio" name="tenure" value="6 Months" class = "one" checked><label style="position: relative; top: 2px; left:12px; color: black;">6 Months</label><br>
            <input type="radio" name="tenure" value="12 Months"><label  style="color: black;">12 Months</label><br>
            <input type="radio" name="tenure" value="24 Months"><label  style="color: black;">24 Months</label><br>
            <input type="radio" name="tenure" value="32 Months"><label  style="color: black;">32 Months</label></div>
            <br>
            <br>
            <div class="submitbutton"><input type="submit" name="save" value="SUBMIT" class="btn btn-success"></div>
        </form>

        <script>
            function validateForm() {
                var fn = document.forms["myform"]["firstname"].value;
                var ln = document.forms["myform"]["lastname"].value;
                var ag = document.forms["myform"]["age"].value;
                var db = document.forms["myform"]["dateofbirth"].value;
                var mi = document.forms["myform"]["monthlyincome"].value;
                var lan = document.forms["myform"]["loanamountneeded"].value;
                if (fn == "" || ln == "" || ag == "" || db == "" || mi == "" || lan == "") {
                    alert("Form not filled");
                    return false;
                }
                return true;
            }
        </script>

    </body>
</html>
