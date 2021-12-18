<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
    <title>Parking Management</title>
    <style>
        body {
          margin: 0;
          position: relative;
        }
        
        .menu {
            top: 0;
            list-style-type: none;
            margin: 0;
            padding: 0;
            width: 100%;
            background-color: #f1f1f1;
            position: fixed;
            height: 70px;
            overflow: auto;
        }
        .menu li {
          float: right;
          display: inline;
          margin-top: 20px;
        }
        .menu li a {
          color: #000;
          padding: 8px 36px;
          text-decoration: none;
        }
        
        .menu li a.active {
          background-color: #042baa;
          color: white;
        }
        
        .menu li a:hover:not(.active) {
          background-color: #555;
          color: white;
        }
        .parking{
            background-image: url("https://images.pexels.com/photos/1187313/pexels-photo-1187313.jpeg?auto=compress&cs=tinysrgb&dpr=1&w=500");
            background-repeat: no-repeat;
            background-size: cover;
            width: 100%;
            height:624px;
            margin-top: 70px;
            color: white;
        }
        form{
            text-align: center;
            font-size: 22px;
        }
        input[type=text], input[type=datetime-local] {
            width: 40%;
            display:inline;
            height: 30px;
        }
        .next a {
            text-decoration: none;
            display: inline-block;
            padding: 8px 40px;
            font-size:36px;
            color: white;
        }

        .next a:hover {
            background-color: #ddd;
            color: black;
        }
        
    </style>
</head>
<body>
    <div class="menu">
    <ul>
       
        <li style='font-size:36px; float: left; padding-left:10px; margin-top: 10px;'><b>Car Parking Bookings</b> </li>
        <i class='fas fa-user-tie' style='font-size:36px; float: right; padding-right:10px; padding-left:160px; margin-top: 10px;'><b style='font-size:20px'>Driver</b></i>
        <li><a href="#">About</a></li>
        <li><a class="active" href="#home">Home</a></li>
    </ul>
</div>
    <div class="parking">
        <p style="font-size:36px; text-align: center;padding-top: 120px;">BOOK YOUR PARKING SPACE</p>
        <form method="POST" action="">
          
            <label for="drivername"><i>Driver Name</i></label>
            <br>
            <input type="text" placeholder="Your Nname " name="drivername" required>
            <br><br>
            <label for="numberplate"><i>Number Plate</i></label>
            <br>
            <input type="text" placeholder="Number Plate " name="numberplate"required>
            <br><br>
            <label for="date&time"><i>Date & Time</i></label>
            <br>
            <label for="from">From</label>
            <input type="datetime-local" placeholder="Date & Time" name="arrivaltime"required style="width: 17%;">
            <label for="from">To</label>
            <input type="datetime-local" placeholder="Date & Time" name="d" style="width: 17%;">
            
            <br><br>

            <div class="next">
                <a href="parking_slots.php" class="next" >Choose Your Space &raquo;</a>
            </div> 
        </form>
    </div>      
  
</body>
</html>