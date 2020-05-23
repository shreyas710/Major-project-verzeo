<html>
    <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Application Page</title>
    </head>
    <style>
        body{background-color: rgb(18,89,86)}
        /*nav{background-color: black ,height: 50px}*/
        form{color: white}
        
    </style>
    <body>
        <nav>
            <b style="color: red">APPLICATION FORM</b>
        </nav>
        <form method="POST" action="processapp.php">
            First Name : <input type="text" name="firstname" ><br><br>
            Last Name : <input type="text" name="lastname"><br><br>
            Email : <input type="email" name="email" value="<?php
                session_start();
                echo ($_SESSION['email']);
            ?>" readonly><br><br>
            Age : <input type="number" name="age"><br><br>
            Date Of Birth : <input type="text" name="dateofbirth"><br><br>
            Monthly Income : <input type="number" name="monthlyincome"><br><br>
            Loan Amount Needed : <input type="number" name="loanamountneeded"><br><br>
            <label> Purpose :</label>
            <select name="purpose">
                <option value="mortage">Mortage</option>
                <option value="homepurchase">Home Purchase</option>
                <option value="studentloan">Student Loan</option>
            </select><br><br>
           
            Tenure : <input type="radio" name="tenure" value="6 Months"><label>6 Months</label><br>
            <input type="radio" name="tenure" value="12 Months"><label>12 Months</label><br>
            <input type="radio" name="tenure" value="24 Months"><label>24 Months</label><br>
            <input type="radio" name="tenure" value="32 Months"><label>32 Months</label>
            <br>
            <br>
            <input type="submit" name="save" value="submit">
        </form>
    </body>
</html>
