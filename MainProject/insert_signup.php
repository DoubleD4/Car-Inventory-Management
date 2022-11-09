<!DOCTYPE html>
<html>

<head>
    <title> Insert Page page</title>
</head>

<body>
    <?php
    
    // servername = localhost
    // userneme = username
    // password = password
    // database name = signup

    $conn = mysqli_connect("localhost", "username", "password", "signup");

    //Check Connection
    if($conn === false) {
        die("Error: Could Not Connect. " . mysqli_connect_error());
    }

    //Getting values from the form
    $email = $_REQUEST['email'];
    $psw = $_REQUEST['psw'];
    $psw_repeat = $_REQUEST['psw_repeat'];

    //Insert data
    $sql = "INSERT INTO Info VALUES ('$email', '$psw', '$psw_repeat')";

    if(mysqli_query($conn, $sql)) {
        echo "<h3>Thank you for signing up! Your information has been successfully received.";

    } else {
        echo "Sorry, there has been an error." . myspli_error($conn);
    }

    //Close Connection
    mysqli_close($conn);
    ?>
</body>