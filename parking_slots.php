<?php
include_once 'database.php'; // Using database connection file here

$records = mysqli_query($conn,"select status from sensor_status order by id desc limit 1;");
while($data = mysqli_fetch_array($records))
    {
        if($data['status']==111){
            echo "<style>
            .slot1:before{
            background-color:red;
            content: 'Occupied';
            padding:30px;
            font-size:20px;
            position:relative;
            top:110px;
            width:30%;
            }
            .slot2:before{
            background-color:red;
            content: 'Occupied';
            padding:30px;
            font-size:20px;
            position:relative;
            top:110px;
            width:34%;
            }
            .slot3:before{
            background-color:red;
            content: 'Occupied';
            padding:30px;
            font-size:20px;
            position:relative;
            top:110px;
            width:32%;
            }
            </style>";
                
        }
        elseif($data['status']==100)
        {
            echo "<style>
            .slot1:before{
              background-color:red;
              content: 'Occupied';
              padding:30px;
              font-size:20px;
              position:relative;
              top:110px;
              width:30%;
            }
            </style>";
        } 
        elseif($data['status']==010)
        {
            echo " <style>
            .slot2:before{
              background-color:red;
              content: 'Occupied';
              padding:30px;
              font-size:20px;
              position:relative;
              top:110px;
              width:30%;
            }
            </style>";
        } 
        elseif($data['status']==001){
            echo " <style>
            .slot3:before{
              background-color:red;
              content: 'Occupied';
              padding:30px;
              font-size:20px;
              position:relative;
              top:110px;
              width:30%;
            }
            </style>
          ";
        }
        elseif($data['status']==110)
        {
            echo "<style>
            .slot1:before{
              background-color:red;
              content: 'Occupied';
              padding:30px;
              font-size:20px;
              position:relative;
              top:110px;
              width:31%;
            }
            .slot2:before{
              background-color:red;
              content: 'Occupied';
              padding:30px;
              font-size:20px;
              position:relative;
              top:60px;
              width:32%;
            }
            </style>";
        } 
        elseif($data['status']==101)
        {
            echo "<style>
            .slot1:before{
              background-color:red;
              content: 'Occupied';
              padding:30px;
              font-size:20px;
              position:relative;
              top:110px;
              width:31%;
            }
            .slot3:before{
              background-color:red;
              content: 'Occupied';
              padding:30px;
              font-size:20px;
              position:relative;
              top:110px;
              width:32%;
            }
            </style>";
        } 
        elseif($data['status']==011)
        {
            echo "<style>
            .slot2:before{
              background-color:red;
              content: 'Occupied';
              padding:30px;
              font-size:20px;
              position:relative;
              top:110px;
              width:32%;
            }
            .slot3:before{
              background-color:red;
              content: 'Occupied';
              padding:30px;
              font-size:20px;
              position:relative;
              top:110px;
              width:32%;
            }
            </style>";
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
    <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
    <title>Parking Management</title>
    <style>
      body {
        margin: 0;
        position: relative;
        overflow:hidden;
        background-image: url("https://images.pexels.com/photos/1187313/pexels-photo-1187313.jpeg?auto=compress&cs=tinysrgb&dpr=1&w=500");
        background-repeat: no-repeat;
        background-size: cover;
      }
      
      .menu {
        top: 0;
        list-style-type: none;
        margin: 0;
        padding: 0;
        width: 100%;
        background-color: #f1f1f1;
        position: absolute;
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
        position:absolute;
        width: 100%;
        height:570px;
        margin-top: 30px;
        color: white;
      }
      .slots{
        padding-top: 80px;
        padding-left: 25%;
        height:600px;
        
      }  
      .upper{
        border: 6px solid white;
        border-top: 0;
        width:60%;
        height:260px;
        position:relative;
      }
      .lower{
        border: 6px solid white;
        border-bottom: 0;
        width:60%;;
        height:260px;
        position:relative;
      }
      .slot1{
        text-decoration: none;
        color: white;
        text-align: center;
        font-size: 160px;
        position:absolute;
        border: 5px solid white;
        border-top: 0px;
        height: 260px;
        width: 31%;
        background-color:black;
        bottom:0;
      }
      
      .slot2{
        text-decoration: none;
        color: white;
        bottom:0;
        text-align: center;
        font-size: 160px;
        position:absolute;
        margin-left: 32%;
        border: 5px solid white;
        border-top: 0px;
        height: 260px;
        width: 34%;
        background-color:black;
      }
      .slot3{
        text-decoration: none;
        color: white;
        text-align: center;
        font-size: 160px;
        position:absolute;
        margin-left: 67%;
        border: 5px solid white;
        border-top: 0px;
        height: 260px;
        width: 32%;
        background-color:black;
        bottom:0;
      }
      .slot4{
        text-decoration: none;
        color: white;
        text-align: center;
        font-size: 160px;
        position:absolute;
        border: 5px solid white;
        border-bottom: 0px;
        height: 260px;
        width: 31%;
        background-color:black;
      }
      .slot5{
        text-decoration: none;
        color: white;
        text-align: center;
        font-size: 160px;
        position:absolute;
        margin-left: 32%;
        border: 5px solid white;
        border-bottom: 0px;
        height: 260px;
        width: 34%;
        top:0;
        background-color:black;
      }
      .slot6{
        text-decoration: none;
        color: white;
        text-align: center;
        font-size: 160px;
        position:absolute;
        margin-left: 67%;
        border: 5px solid white;
        border-bottom: 0px;
        height: 260px;
        width: 32%;
        top:0;
        background-color:black;
      } 
      .slot1 button{
        font-size: 19px;
      }
      .slot2 button{
        font-size: 21px;
      }
      .slot3 button{
        font-size: 21px;
      }
      .slot4 button{
        font-size: 19px;
      } 
      .slot5 button{
        font-size: 21px;
      }
      .slot6 button{
        font-size: 21px;
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
      
        <form method="POST" action="" class="slots">
            <div class="upper">
              <a href="#"  id="slot1" class="slot1"><div >1</div><div style="height:60px; width: 31%; "></div></a>  
              <a href="#"  id="slot2" class="slot2" ><div >2</div><div style="height:60px;width: 34%;background-color:black; "></div></a>
              <a href="#"  id="slot3" class="slot3"><div >3</div><div style="height:60px; width: 32%;"></div></a>
            </div>
            <div class="lower">
            <a href="#"  id="slot4" >
              <div class="slot4">4</div>
              <div style="height:60px; width: 31%;border: 5px solid white; border-bottom: 0px;"></div>          
            </a>
            <a href="#"  id="slot5" ><div class="slot5">5</div><div style="height:60px; width: 34%;border: 5px solid white; border-bottom: 0px;"></div></a>
            <a href="#"  id="slot6" ><div class="slot6">6</div><div style="height:60px; width: 32%;border: 5px solid white; border-bottom: 0px;"></div></a>
            </div>
        </form>
    </div>      
  </body>
</html>