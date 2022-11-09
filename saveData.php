<?
  /* $carID = $_POST['carID'];
   $vinNum = $_POST['vin number'];
   $stockNumner = $_POST['stockNumber'];
   $make = $_POST['make'];
   $model = $_POST['model'];
   $year = $_POST['year'];
   $bodyType = $_POST['bodytype'];
   $trim= $_POST['trim'];
   $driveTrain = $_POST['driveTrain'];
   $transmission= $_POST['transmission'];
   $fuelType = $_POST['fuelType'];
   $engineSize= $_POST['engineSize'];
   $engineBlock = $_POST['engineBlock'];
   $color = $_POST['color'];
   $mileage = $_POST['mileage'];
   $title = $_POST['title'];
   $datePurchased = $_POST['datePurchased'];
   $street = $_POST['street'];
   $city = $_POST['city'];
   $state = $_POST['state'];
   $zip = $_POST['zip'];
   $Price = $_POST['Price'];

   // Database connection 
   $host = "localhost";
   $dbname ="Used Car inventory";
   $username = "root";
   $password ="";

   mysqli_connect($host, $username, $password, $dbname); 
   if(mysqli_connect_errno())
   {
    die("connection error ".mysqli_connect_error());
   }
   echo " connection was successfull"; */

   print($_POST);


?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <title> Car Invetory </title>
    <link rel="stylesheet" href="SaveData.css" />
</head>

<body>
    <form method="POST">
      
        <div>
            <h3>
                Car Description
            </h3>
        </div>
        <div>
            <label for="id">I.D</label>
            <input type="text" id="carID" name="carID" />
        </div>
        <div>

            <label for="vin number">V.I.N Number</label>
            <input type="text" id="vin number" name="vin number" />
        </div>
        <div>
            <label for="stockNumber">Stock Number</label>
            <input type="text" id="stockNumber" name="stockNumber" />
        </div>
        <div>
            <label for="make">make</label>
            <input type="text" id="make" name="make" />
        </div>
        <div>
            <label for="model">Model</label>
            <input type="text" id="model" name="model" />
        </div>
        <div>
            <label for="year">Year</label>
            <input type="number" id="year" name="year" />
        </div>
        <div>
            <label for="bodyType">Body Type</label>
            <input type="text" id="bodyType" name="bodyType" />
        </div>
        <div>
            <label for="trim">Trim</label>
            <input type="text" id="trim" name="trim" />
        </div>
        <div>
            <label for="driveTrain">Drive Train</label>
            <input type="text" id="driveTrain" name="driveTrain" />
        </div>
        <div>
            <label for="vehicleType">Vehicle Type</label>
            <input type="text" id="bodyType" name="bodyType" />
        </div>
        <div>
            <label for="transmission">Transmission</label>
            <input type="text" id="transmission" name="transmission" />
        </div>
        <div>
            <label for="fuelType">Fuel Type</label>
            <input type="text" id="fuelType" name="fuelType" />
        </div>
        <div>
            <label for="engineSize">Engine Size</label>
            <input type="number" id="engineSize" name="engineSize" />
        </div>
        <div>
            <label for="engineBlock">Engine Block</label>
            <input type="text" id="engineBlock" name="engineBlock" />
        </div>
        <div>
            <label for="color">Color</label>
            <input type="text" id="color" name="color" />
        </div>
        <div>
            <label for="mileage">Mileage</label>
            <input type="text" id="mileage" name="mileage" />
        </div>

        <div>
            <label for="title">Title</label>
            <input type="text" id="title" name="title" />
        </div>

        <div>
            <label for="dateRecieved">Date Received</label>
            <input type="date" id="dateReceived" name="dateRecieved" />
        </div>
        <div>
            <label for="purchasedFrom">Purchased From</label>
            <input type="text" id="pFrom" name="pFrom" />
        </div>
        <div>
            <label for="street">Street</label>
            <input type="text" id="street" name="street" />
        </div>
        <div>
            <label for="city">City</label>
            <input type="text" id="city" name="City" />
        </div>
        <div>
            <label for="state">State</label>
            <input type="text" id="vehicleSatte" name="state" />
        </div>
        <div>
            <label for="zip">Zip Code</label>
            <input type="text" id="zipCode" name="zipCode" />
        </div>
        <div>
            <label for="Price">Price</label>
            <input type="text" id="Price" name="Price" />
        </div>
        <div>
            <input type="submit" id="savedButton" value="Save" />
        </div>
    
    </form>

    

</body>
</html>