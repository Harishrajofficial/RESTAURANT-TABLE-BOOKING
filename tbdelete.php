<?php
// Create connection
$conn = new mysqli("localhost","root","","mrhut" );


if(!$conn){
    die(mysqli_error_($conn));
}

if(isset($_GET['deleteid'])){
    $id=$_GET['deleteid'];

    $sql="delete from `booking_data` where ID=$id";
    $result=mysqli_query($conn,$sql);
    if($result){
        header('location:tables.php');
    }else{
        die(mysqli_error_($conn));
    }
}

?>