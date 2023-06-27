<?php
// Create connection
$conn = new mysqli("localhost","root","","mrhut" );


if(!$conn){
    die(mysqli_error_($conn));
}

$id=$_GET['updateid'];
$sql= "Select * from `booking_data` where ID=$id";
$result=mysqli_query($conn,$sql);
$row=mysqli_fetch_assoc($result);
$yourname=$row['YOURNAME'];
$youremail=$row['YOUREMAIL'];
$date=$row['DATE'];
$time=$row['TIME'];
$Hm=$row['HOW_MANY_PEOPLE?'];

if(isset($_POST['submit'])){
    $yourname=$_POST['yourname'];
    $youremail=$_POST['youremail'];
    $date=$_POST['date'];
    $time=$_POST['time'];
    $Hmp=$_POST['select'];


    $sql="UPDATE `booking_data` SET `ID`='$id',`YOURNAME`='$yourname',`YOUREMAIL`='$youremail',`DATE`='$date',`TIME`='$time',`HOW_MANY_PEOPLE?`='$Hmp' WHERE `ID`='$id'";
    $result=mysqli_query($conn,$sql);
    if($result){
      
        echo "update successfully";
        header('location:tables.php');
    }else{
        die(mysqli_error_($conn));
    }

}

?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
        <title>CRUD</title>

</head>

  <body>
<div class="container my-5">
<form method="post">
  <div class="mb-3">
    <label class="form-label">YOUR NAME</label>
    <input type="text" class="form-control" placeholder="Your Name" name="yourname" value="<?php echo $yourname;?>">
    </div>

    <div class="mb-3">
    <label class="form-label">YOUR EMAIL</label>
    <input type="text" class="form-control" placeholder="Your Email" name="youremail" value=<?php echo $youremail;?>>
    </div>

    <div class="mb-3">
    <label class="form-label">DATE</label>

    <input type="date" class="form-control" name="date" value=<?php echo $date;?>>

    </div>

    <div class="mb-3">
    <label class="form-label">TIME</label>

    <input type="time" class="form-control" name="time" value=<?php echo $time;?>>

    </div>

    <div class="mb-3">
    <label class="form-label">How many people?</label>

    <select name="select" class="form-control"  id="#" value=<?php echo $Hm;?>>
<option  value="1">1 person</option>
<option value="2">2 persons</option>
<option value="3">3 persons</option>
<option value="4">4 persons</option>
<option value="5">5 persons</option>
<option value="5+">5+ persons</option>

</select>
    </div>


  <button type="submit" name="submit" class="btn btn-primary">Update</button>
</form>
</div>

  </body>
</html>