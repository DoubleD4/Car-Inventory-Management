<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <title> this is the dtabase </title>
    <link rel="StyleSheet" href="style.css" />
</head>
<body>
    <h1> this is testing the database</h1>

    <form action="index.php" method="POST">
        <div>
            <label for="ID"> ID</label>
            <input type="number" id="id" name="id" />
        </div>
        <div>
            <label for="firstname"> First name</label>
            <input type="text" id="fName" name="fName" />
        </div>
        <div>
            <label for="Lastname"> Lastname</label>
            <input type="text" id="lName" name="lName" />
        </div>
        <div>
            <label for="Age"> Age</label>
            <input type="number" id="Age" name="Age" />
        </div>
        <div>
            <button value="submit"></button>
        </div>
    </form>




</body>
</html>


<?php
   $id = $_POST["id"];
   $fname = $_POST["fname"];
   $lname= $_POST["lname"];
   $age = $_POST["age"];

   $ServerName = "LAPTOP-20KIKHV6";
   $dbname ="Used Car inventory";
   $username = "LAPTOP-20KIKHV6\jefte";
   $password ="";

   $conn= mysqli_connect($ServerName, $username, $password, $dbname);
   if(mysqli_connect_errno())
   {
    die("connection error ".mysqli_connect_error());
   }
   $sql = "INSERT INTO parson (id, fname, lname, age)
            VALUE (?,?,?,?)";

    $stmt = mysqli_stmt_init($conn);
    if(! mysqli_stmt_prepare($stmt, $sql))
    {
         die(mysqli_error($conn));
    }

    mysqli_stmt_bind_param($stmt, "issi", $id, $fname, $lname,$age);

    mysqli_stmt_execute($stmt);

    echo "record has been saved";


?>



