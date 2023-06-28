<?php
  
  session_start();

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


// create table

$sql= "CREATE TABLE userdata (UserName varchar(30) NOT NULL,E_mail varchar(30) NOT NULL , Password varchar(20) NOT NULL)";

// if ($conn->query($sql)=== TRUE){
//     echo"<br>create table succesfully";
// }
// else{
//     echo "error creating table".$conn->error;
// }
// $conn->close();


// define variables and set to empty values

$nameErr =$passErr= $emailErr = "";

//condition if check all textbox is required 

if (isset($_POST['submit'])) {

  $name=$_POST["usname"];
$email=$_POST["email"];
$password=$_POST["pass"];


  if (empty($name)) {
    $nameErr = "username is required";
    // header("location : 
  } 
  
  elseif (empty($email)) {
    $emailErr = "email is required";
  } 
  elseif (empty($password)) {
    $passErr = "password is required";
  } 
 else
 {
  $sql = "INSERT INTO `userdata`(`UserName`,`E_mail`,`Password`)VALUES('$name','$email','$password');";
  $rs =mysqli_query($conn, $sql);
//   header("Location: login.php");
echo "<script>alert('ACCOUNT CREATED SUCCESSFULLY');</script>";

  }


   }


// define variables and set to empty values

$userError = $passwordError = "";

//condition if check all textbox is required 


if (isset($_POST['sub'])) {

    $username=$_POST['t1'];
    $pass=$_POST['t2'];
    
    if(empty($username)){

        $userError = " Please Enter Valid User Name";
    }
    elseif(empty($pass)){
    $passwordError = "Please Enter Valid Password";
    } 
    else{
        $sql="select UserName,Password FROM userdata WHERE UserName='$username' and Password='$pass'";
        $result=$conn->query($sql);
        if($result->num_rows==1){
			$_SESSION['usname']=$username;
            header("Location: booking.php");
        
        }
        else{
            echo "<script>alert('INVALID USER')</script>";
        }
        
           
    }
}


?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width-device-width,initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="sie-edge" />
    <link
      href="https://unpkg.com/ionicons@4.2.2/dist/css/ionicons.min.css"
      rel="stylesheet"
    />
    <link rel="stylesheet" href="css/reg.css" />
    <title>Slider Form</title>
    <style>
			.error {color: #FF0000;}
		</style>
  </head>

<body>
  
  <div class="container" id="container">

      <div class="form-container sign-in-container">
        <form action="" method="post">
          <h1>Sign In</h1>
          <input type="text" placeholder="User Name" name="t1"/>
          <span class="error">* <?php echo $userError;?></span>

          <input type="password" placeholder="Password" name="t2" />
          <span class="error">* <?php echo $passwordError;?></span>

          <button name="sub">Sign In</button>
        </form>
      </div>

      <div class="form-container sign-up-container" >
        <form action="#" method="post">
          <h1>Create Account</h1>
         
          <input type="text" placeholder="User Name" name="usname" />
          <span class="error">* <?php echo $nameErr;?></span>

          <input type="email" placeholder="Email" name="email" />
				<span class="error">* <?php echo $emailErr;?></span>


          <input type="password" placeholder="Password" name="pass"/>
          <span class="error">* <?php echo $passErr;?></span>


          <button name="submit">Sign Up</button>
        </form>
      </div>



      <div class="overlay-container">
        <div class="overlay">
          <div class="overlay-panel overlay-left">
            <h1>Welcome Back</h1>
            <p>
              To keep connected with us please login with your personal info
            </p>
            <button class="ghost" id="signIn">Sign In</button>
          </div>
          <div class="overlay-panel overlay-right">
            <h1>Hello,Friend</h1>
            <p>Enter your personal details and start journey with us</p>
          <button class="ghost" id="signUp">Sign Up</button>

          </div>

        </div>
      </div>
      </div>

    <script src="js/reg.js"></script>
    <script src="https://unpkg.com/ionicons@4.2.2/dist/ionicons.js"></script>
  </body>
</html>
