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
        ul {
          position: absolute;
          list-style-type: none;
          margin: 0;
          padding: 0;
          width: 100%;
          background-color: #f1f1f1;
          position: fixed;
          height: 10%;
          overflow: auto;
        }
        li {
          float: right;
          display: inline;
          margin-top: 25px;
        }
        li a {
          color: #000;
          padding: 8px 36px;
          text-decoration: none;
        }
        
        li a.active {
          background-color: #042baa;
          color: white;
        }
        
        li a:hover:not(.active) {
          background-color: #555;
          color: white;
        }

        table {
          border-collapse: collapse;
          width: 55%;
          position: absolute;
          margin-left: 13%;
          margin-top: 12%;
        }

        th, td {
          text-align: left;
          padding: 8px;
        }

        tr:nth-child(even){background-color: #f2f2f2}

        th {
          background-color: black;
          color: white;
        }
        tr:hover {background-color:#042baa;}
  </style>
</head>
<body>
  <ul>
    <li style='font-size:36px; float: left; padding-left:10px; margin-top: 15px;'><b>Parking Management</b> </li>
    <i class='fas fa-user-tie' style='font-size:36px; float: right; padding-right:10px; padding-left:160px; margin-top: 15px;'><b style='font-size:20px'>Admin</b></i>
    <li><a href="#bookings">Booking</a></li>
    <li><a class="active" href="#dashboard">Dashboard</a></li>
  </ul>

  <table border="2">
    <tr>
    <th>Id</th>
      <th>Slots</th>
    </tr>
      
    <?php
      
    include_once 'database.php'; // Using database connection file here
      
    $records = mysqli_query($conn,"select * from sensor_status"); // fetch data from database
      
    while($data = mysqli_fetch_array($records))
    {
      ?>
      <tr>
        <td><?php echo $data['id']; ?></td>
        <td><?php echo $data['slot']; ?></td>
      </tr>	
      <?php
    }
      ?>
  </table>
      
  <?php mysqli_close($conn); // Close connection ?>

</body>
</html>