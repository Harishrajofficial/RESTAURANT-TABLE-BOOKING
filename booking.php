<?php 
session_start();
if(!isset($_SESSION['usname'])){
  header("Location: register.php");
 
}
session_destroy();


if (isset($_POST['logout'])) {
    header("Location: index.php");
}

// create database

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "mrhut";

// Create connection

$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection

// if ($conn->connect_error) {
//   die("Connection failed: " . $conn->connect_error);
// }
// else {
//     echo "connected<br>";
// }



// define variables and set to empty values

$yournameErr =$youremailErr= $dateErr = $timeErr=$hmpErr= "";

//condition if check all textbox is required 

if (isset($_POST['SUB'])) {

  $Yourname=$_POST["yourname"];
$Youremail=$_POST["youremail"];
$Date=$_POST["date"];
$Time=$_POST["time"];
$HMP=$_POST["select"];


  if (empty($Yourname)) {
    $yournameErr = "Your name is required";
  } 
  elseif (empty($Youremail)) {
    $youremailErr = "Your email is required";
  } 
  elseif (empty($Date)) {
    $dateErr = "Date is required";
  } 
  elseif (empty($Time)) {
    $timeErr = "Time is required";
  } 
  elseif (empty($HMP)) {
    $hmpErr = "How Many People is required";
  } 
 else
 {
  $sql = "INSERT INTO `booking_data`(`YOURNAME`,`YOUREMAIL`,`DATE`,`TIME`,`HOW_MANY_PEOPLE?`)VALUES('$Yourname','$Youremail','$Date','$Time','$HMP');";
  $rs =mysqli_query($conn, $sql);
  header("Location: success.php");
  }
   }

 ?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Table Booking</title>
    <link rel="stylesheet" href="css/booking.css">
    <style>
			.error {color: #FF0000;}
        .container{
           background-image: url("imgs/red-apple-fruit.jpg");
           width: 1200px;
        }

        .tit{
  position: absolute;
  top: 30px;
  /* left: 23%; */
  font-size:50px;
  font-weight:bolder;
}
.t{
  color: white;
}
.tt{
  /* color: white; */
  color: #998100;
}
.e1{
    position: absolute;
    right: 370px;
}
.log{
  color:white;
  text-decoration:none;
}

    </style>

</head>
<body>

<marquee class="tit"  style="color:black">BOOK YOUR TABLE NOW!!!</marquee>
    
<div class="container">
<div class="container-time">

<h2 class="heading">Time Open</h2>
<h3 class="heading-days">Monday-Friday</h3>
<p>7am - 11am (breakfast)</p>
<p>11am - 10pm (lunch/dinner)</p>
<h3 class="heading-days">Saturday and Sunday</h3>
<p>9am - 1am (breakfast)</p>
<p>1pm - 10pm (lunch/dinner)</p>
<h4 class="heading-phone">Call Us: (123) 45-45-456</h4>

</div>

<div class="container-form">
<form action="" method="post">
<h2 class="tt heading heading-yellow" >Reservation Online</h2>
<div class="form-field">
<p class="t">Your Name</p>
<input type="text" placeholder="Your Name" name="yourname" required>

</div>
<div class="form-field">
<p class="t">Your Email</p>
<input class="e1" type="email" placeholder="Your Email" name="youremail" required><br><br><br>

</div>
<div class="form-field">
<p class="t"> Date</p>
<input type="date" name="date" required>

</div>
<div class="form-field">
<p class="t">Time</p>
<input type="time" name="time" required >
</div>

<div class="form-field">
<p class="t">How many people?</p>
<select name="select" id="#" required>
<option value="1">1 persons</option>
<option value="2">2 persons</option>
<option value="3">3 persons</option>
<option value="4">4 persons</option>
<option value="5">5 persons</option>
<option value="5+">5+ persons</option>

</select>

</div>

<button class="btn" name="SUB">Submit</button>
<button class="btn"><a href="register.php" class="log" name="logout">LOG OUT</button></a>

</form>
</div>
</div>

</body>
</html>