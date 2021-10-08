<?php 
        /* connect to databse */
        $link = mysqli_connect('bookingdb1.ccrr81h9vimc.us-east-1.rds.amazonaws.com', 'admin', 'riyamike', 'bookings',3306);

        // Check connection
        if($link === false){
            die("ERROR: Could not connect to database. " . mysqli_connect_error());
        }
        $fName = mysqli_real_escape_string($link, $_REQUEST['fName']);
        $lName = mysqli_real_escape_string($link, $_REQUEST['lName']);
        $email = mysqli_real_escape_string($link, $_REQUEST['email']);
        $time = mysqli_real_escape_string($link, $_REQUEST['time']);

        $sql = "INSERT INTO schedule (fName, lName, email, time) VALUES ('$fName', '$lName', '$email', '$time')";
        
        if(mysqli_query($link, $sql)){
            echo "Record added successfully!</br>";
        } else{
            echo "ERROR: Was not able to execute $sql. " . mysqli_error($link);
        }
        
        /* close db connection */
        mysqli_close($links);
        
?>
    <a class="currentBookings" href="http://ec2-35-175-131-223.compute-1.amazonaws.com/"> View Current Bookings</a>
    <br>
    <button onclick="document.location='index.html'">Make another booking</button>
    <a class="newBooking" href="http://ec2-3-239-168-85.compute-1.amazonaws.com/"> Make Another Booking</a>