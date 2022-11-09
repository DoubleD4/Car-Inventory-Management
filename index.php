
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <title></title>
    <link rel="stylesheet" href="SeniorProject.css"/>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />

    <script type="text/javascript" src="signUp.js"></script>

</head>
<body>
    <header>
        <div id="buttonDiv" class="w3-container w3-white">
            <a class="button" id="homeButton" href="#top"> Home</a>
            <a class="button" id="loadButton" href="saveData.php" target="_blank" > Load Data </a>
            <a class="button" id="saveButton" href="saveData.php" target="_blank"> Save Data</a>
            <a class="button" id="deleteButton" href="saveData.php" target="_blank" > Delete </a>
            <a class="button" id="reportButton" href="saveData.php" target="_blank" > Report a Car</a>
        </div>
    </header>
    <div class="w3-container  w3-display-middle">
        <div>
            <h1>
                Online inventory management software for cars' dealerships accross The Nation
            </h1>
            <p>
                Inventory management software that enables you to control your inventory,<br>
                manage and fulfill your orders, oversee sales, and streamline multiple sales channels.
            </p>
        </div>
        <div class=" w3-bar w3-show-inline-block">
            <div>
                <a class="w3-button w3-red w3-round  w3-bar-item" id="signInButton">Sign Up- Now!</a>
            </div>
            <div>
                <a class="w3-button w3-red w3-round w3-bar-item" id="lognInButton">Logn In </a>
            </div>
        </div> <!-- div fo the button-->
    </div>


    <!-- sign in sheet-->
    <div id="signInDiv" class="model">
        <form id="signInForm">
            <div class="container">
                <h1>Sign Up</h1>
                <p>Please fill in this form to create an account.</p>
                <hr>
                <label for="email"><b>Email</b></label>
                <input type="text" id="emailId" placeholder="Enter Email" name="email" required>

                <label for="psw"><b>Password</b></label>
                <input type="password" placeholder="Enter Password" name="psw" required>

                <label for="psw-repeat"><b>Repeat Password</b></label>
                <input type="password" placeholder="Repeat Password" name="psw-repeat" required>

                <label>
                    <input type="checkbox" checked="checked" name="remember" style="margin-bottom:15px"> Remember me
                </label>

                <p>By creating an account you agree to our <a href="#" style="color:dodgerblue">Terms & Privacy</a>.</p>

                <div class="clearfix">
                    <button type="button" onclick="document.getElementById('signInDiv').style.display='none'" class="cancelbtn">Cancel</button>
                    <button type="submit" class="signup">Sign Up</button>
                </div>
            </div>
        </form>
    </div>

    <script>
        //sign up sheet appears on click5
        document.getElementById("signInButton").addEventListener("click", function () 
        {
            
            document.getElementById("signInDiv").style.display = "flex";
        })

        var modal = document.getElementById('signInDIv');

        // When the user clicks anywhere outside of the modal, close it
        window.onclick = function (event) {
            if (event.target == modal) {
                modal.style.display = "none";
            }
        }
    </script>

    <!-- form for the logn in button-->


    <div id="lognInDiv" class="lognM">

        <form id="formId">
            <div class="imgcontainer">
            </div>

            <div class="containerLogn">
                <label for="uname"><b>Username</b></label>
                <input type="text" placeholder="Enter Username" name="username" id="userId" required>

                <label for="psw"><b>Password</b></label>
                <input type="password" placeholder="Enter Password" name="psw" id="pswId" required>

                <button type="submit" name="submit" class="lognButton">Login</button>
                <label>
                    <input type="checkbox" checked="checked" name="remember"> Remember me
                </label>
            </div>

            <div class="container" style="background-color:#f1f1f1">
                <button type="button" onclick="document.getElementById('lognInDiv').style.display='none'" class="canBtn">Cancel</button>
                <span class="psw">Forgot <a href="#">password?</a></span>
            </div>
        </form>
    </div>
    <!-- javascript for the logn in document-->
    <script>
        document.getElementById("lognInButton").addEventListener("click", function () {
            document.getElementById("lognInDiv").style.display = "flex";
        })


        // Get the modal
        var modal = document.getElementById('lognInDiv');

        // When the user clicks anywhere outside of the modal, close it
        window.onclick = function (event) {
            if (event.target == modal) {
                modal.style.display = "none";
            }
        }
    </script>

</body>
</html>