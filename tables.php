
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">

    <title>CRUD</title>
    <style>
        .container{
            position: relative;
            top: 100px;
        }
    </style>
</head>
<body>
    
<div class="container">


    <table class="table">
  <thead>
    <tr>

      <th scope="col">ID</th>
      <th scope="col">Your Name</th>
      <th scope="col">Your Email</th>
      <th scope="col">Date</th>
      <th scope="col">Time</th>
      <th scope="col">How many people?</th>

    </tr>
  </thead>
  <tbody>
<?php
// Create connection
$conn = new mysqli("localhost","root","","mrhut" );


if(!$conn){
    die(mysqli_error_($conn));
}

// $conn = new mysqli($servername, $username, $password, $dbname);

$sql="select*from `booking_data`";
$result=mysqli_query($conn,$sql);
if($result){
    while($row=mysqli_fetch_assoc($result)){
        $id=$row['ID'];
        $yourname=$row['YOURNAME'];
        $youremail=$row['YOUREMAIL'];
        $date=$row['DATE'];
        $time=$row['TIME'];
        $Hmp=$row['HOW_MANY_PEOPLE?'];
        echo ' <tr>
        <th scope="row">'.$id.'</th>
        <td>'.$yourname.'</td>
        <td>'.$youremail.'</td>
        <td>'.$date.'</td>
        <td>'.$time.'</td>
        <td>'.$Hmp.'</td>
        <td>
    <button class="btn btn-primary"><a href="tbupdate.php?updateid='.
    $id.'" class="text-light">Update</a></button>
    <button class="btn btn-danger"><a href="tbdelete.php?deleteid='.
    $id.'" class="text-light">Delete</a></button>
</td>
      </tr>';

    }
}
    
?>

  </tbody>
</table>
</div>
</body>
</html>

       