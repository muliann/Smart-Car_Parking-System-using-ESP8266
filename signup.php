<?php
include_once 'database.php'; // Using database connection file here

$error ='';
if(isset($_POST['signup'])){
      // set parameters and execute
      $user = $_POST['username'];
      $phoneno = $_POST['phoneno'];
      $password = $_POST['password'];
      $confirm = $_POST['confirm'];
      
    // prepare and bind
    $stmt=$conn->prepare("INSERT INTO users (username,phoneno,password,confirm) VALUES (?, ? , ? ,?)");
    $stmt->bind_param("ssss", $user,$phoneno,$password,$confirm);
    $stmt->execute();

    $query = "SELECT * FROM users WHERE username='$username' LIMIT 1;";
    $result = mysqli_query($conn,$query);


    if(mysqli_num_rows($result)==0){
        if($password==$confirm ){
            header("location: login.php ");
        }else{
            $error='Passwords do not match';
        }
    }      
    else{
        $error= 'Username already exists';
    }
   
}
$conn->close();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Car_Parking | SignUp</title>
    <style>
        body{
            position: relative;
            background-image: url("https://media.istockphoto.com/photos/new-cars-picture-id871718078?k=20&m=871718078&s=612x612&w=0&h=HWxxJ2fU_BL-plBpNj0f3x1Rr6S6pqEuI6qAXVBlK6M=");
            background-size: cover;
        }
        input[type=text], input[type=password] {
            width: 75%;
            padding: 10px;
            margin: 5px 0 22px 0;
            display:inline;
            border: none;
            background: #f1f1f1;
        }

        input[type=text]:focus, input[type=password]:focus {
            background-color: #ddd;
            outline: none;
        }

        hr {
            border: 1px solid #f1f1f1;
            margin-bottom: 25px;
        }

        /*  styles for all buttons */
        button {
            background-color: #4CAF50;
            color: white;
            padding: 14px 20px;
            border: none;
            cursor: pointer;
            width: 100%;
            opacity: 0.9;
        }

        button:hover {
            opacity:1;
        }

        /* Extra styles for the cancel button */
        .cancelbtn {
            padding: 14px 20px;
            background-color: #f44336;
        }

        /* Float cancel and signup buttons and add an equal width */
        .submitbtn,.cancelbtn {
            margin: 20px;
            float: right;
            width: 100px;
        }

        /* Add padding to container elements */
        .container {
            width:50%;
            height: 620px;
            padding: 20px;
            position: absolute;
            background-color:rgba(247, 240, 240, 0.089); 
            margin-left: 25%;
        }

        /* Clear floats */
        .buttons::after {
            content: "";
            clear: both;
            display: table;
        }
        .error{
            color:red;
            text-align:center;
        }

        /* Change styles for cancel button and signup button on extra small screens */
        @media screen and (max-width: 700px) {
            body{
                background:none;
                background-color:rgba(211, 211, 211, 0.5); 
            }
            input[type=text], input[type=password] {
                width: 100%;
                display:inline;
            }
            .cancelbtn, .submitbtn {
                width: 100px;
                margin-right:5px ;
                margin-left: 2px;
            }
            .container {
                background:none;
                padding: 20px;
                margin-left: 2%;
                margin-right: 2%;
            }
        }
    </style>
</head>
<body>
    <div class="container" >
            <h1 style="text-align:center;" >Sign Up</h1>
            <p style="text-align:center;">Please fill in this form to create an account.</p>
            <hr>

        <form method="POST" action="" >
            <div class="error">
                <?php echo $error; ?>   
            </div>
            <label for="username" style="padding-right:23px;"><b>UserName</b></label>
            <input type="text" placeholder="Enter user Name" name="username" required>
            <br>
            <label for="phoneno" style="padding-right:25px;"><b>Phone No.</b></label>
            <input type="text" placeholder="Enter Phone Number" name="phoneno" required>
            <br>
            <label for="psw" style="padding-right:27px;"><b>Password</b></label>
            <input type="password" placeholder="Enter Password" name="password" required>
            <br>
            <label for="confirm" style="padding-right:33px;"><b>Confirm</b></label>
            <input type="password" placeholder="Re-enter Password" name="confirm" required>
            <br>         
            <p>By creating an account you agree to our <a href="#" style="color:blue">Terms & Privacy</a>.</p>
      
            <div class="buttons">
                <button type="button" name="cancel" class="cancelbtn"><a href="signup.html" style="text-decoration: none;">Cancel</a></button>
                <button type="submit" name="signup" class="submitbtn">Sign Up</button>
            </div> 
            <p style=" text-align:center;">Already a member? <a href="login.php" style="text-decoration: none; color:maroon;">Sign in</a></p>
        </form>
                    
    </div>
</body>
</html>