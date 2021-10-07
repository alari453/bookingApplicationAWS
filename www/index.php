<!--index page to display data:-->
<!DOCTYPE HTML PUBLIC "-//IETF//DTD HTML//EN">
<html>
    <head>
      <meta charset="utf-8">
      <title>Mars Reservation Booking Details</title>
      <link rel="stylesheet" href="style.css">
    </head>

  <body>
    <!--Display Form:-->
    <div class="container">
        <div id="header1">
        <h1>Mars Reservation Booking Details</h1>
    </div>
    
      <div class="grid-container">
        <div class="grid-item">
        <h2>Current Bookings to Mars:</h2>
          
          <table border="5">
            <tr><th>BOOKINGID</th><th>FIRST NAME</th><th>LAST NAME</th><th>BOOKING TIME</th></tr>
            <!--call information from database:-->
            <?php
              $db_host   = 'bookingdb1.ccrr81h9vimc.us-east-1.rds.amazonaws.com';
              $db_name   = 'bookings';
              $db_user   = 'admin';
              $db_passwd = 'riyamike';

              $pdo_dsn = "mysql:host=$db_host;dbname=$db_name";
              $pdo = new PDO($pdo_dsn, $db_user, $db_passwd);
              
              /*call schedule table from the database*/
              $q = $pdo->query("SELECT * FROM schedule");

              /*input data into table*/
              while($row = $q->fetch()){
                echo "<tr><td>".$row["bookingID"]."</td><td>".$row["fName"]."</td><td>".$row["lName"]."</td><td>".$row["time"]."</td></tr>\n";
              }
            ?>
            </table>
          </div>
        </div>
  </body>
</html>