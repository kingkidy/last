<?php
    if(isset($_POST['submit']))
    {
        $firstname = $_POST['firstname'];
        $lastname = $_POST['lastname'];
        $phone = $_POST['phone'];
        $email = $_POST['email'];
    }

     // database details
     $host = "localhost";
     $username = "root";
     $password = "";
     $dbname = "photobookdb";
 
     // creating a connection
     $con = mysqli_connect($host, $username, $password, $dbname);
 
     // to ensure that the connection is made
     if (!$con)
     {
         die("Connection failed!" . mysqli_connect_error());
     }
 
     // using sql to create a data entry query
     $sql = "INSERT INTO bookings (firstname, lastname, phone, email) VALUES ('$firstname', '$lastname', '$phone', '$email')";
   
     // send query to the database to add values and confirm if successful
     $rs = mysqli_query($con, $sql);
     if($rs)
     {
         echo "Entries added!";
     }
   
     // close connection
     mysqli_close($con);
?>