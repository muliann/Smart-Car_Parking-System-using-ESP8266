<?php
include_once 'database.php'; // Using database connection file here

$error ='';
if(isset($_POST['submit'])){
    if(empty($_POST['username']) || empty($_POST['password'] )){
        $error= "username or password incorrect";
    }else{
        //define user and pass
        $user = $_POST['username'];
        $pass = $_POST['password'];

        //establish a connection
      
        $query = mysqli_query($conn,"SELECT * FROM users WHERE password='$pass' AND username='$user';");
        if(mysqli_num_rows($query)==1){
            //redirect to home page
            header("location: admin.php ");
        }else{
           $error = "username or password incorrect";
        }
        //close connection
        mysqli_close($conn);
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Car_Parking | LogIn</title>
    <style>
        body{
            position: relative;
            background-image: url("https://media.istockphoto.com/photos/new-cars-picture-id871718078?k=20&m=871718078&s=612x612&w=0&h=HWxxJ2fU_BL-plBpNj0f3x1Rr6S6pqEuI6qAXVBlK6M=");
            background-size: cover;
        }
        .container{
            background-color:rgba(247,240,240,0.164); 
            text-align:center;
            margin-top: 4%;
            margin-left: 35%;
            position: absolute;
            width: 30%;                    
        }
        .logo{
            align-items: center;
        }
        h2{
            text-align: center;
        }
        h4{
            padding-left: 300px;
            color:rgb(88, 64, 64);
        }
        h3{
            text-align: justify;
        }
        a{
            text-decoration: underline;
            color: rgb(59, 34, 34);
            padding: 20px;
            font-size: 20px;
        }
        form{
            background-color:rgba(247,240,240,0.226); 
            padding-top: 40px;
            padding-bottom: 40px;
        }
        .error{
            color:red;
        }
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
        .buttons::after {
            content: "";
            clear: both;
            display: table;
        }
    </style>
</head>
<body>
    <div class="container" >
        <div class="logo">
            <h1>Car Parking Portal</h1>
            <h2>Log In</h2>
            <hr>
          </div>
        <h3 style="padding-left:20px;">Kindly signup:</h3><br>
        <form method="POST" action="">
            <p> 
              <label for="name"><b>Username</b></label>
              <input type="name" placeholder="Username " name="username" required>
            </p> 
            <p>
              <label for="password"><b>Password</b></label>
              <input type="password" placeholder="Password " name="password"required>
            </p> 
              <label><input type="checkbox" checked="checked" name="remember"> Remember me</label>
            </p> 
            <div class="error">
                <?php echo $error; ?>   
            </div>
            <div class="buttons">
                <button type="button" name="cancel" class="cancelbtn">Cancel</button>
                <button type="submit" name="submit" class="submitbtn">Log In</button>
            </div> 
            
            <p style=" text-align:center;">Already a member? <a href="signup.php" style="text-decoration: none; color:maroon;">Sign Up</a></p>
             
        </form>
                    
    </div>
</body>
</html>