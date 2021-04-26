<?php
    include_once('../../config.php');
    $id = $id = $_GET['delete'];
    // $sql = "DELETE FROM employee WHERE id ='$id'";
    $sql1 = "DELETE FROM user WHERE id ='$id'";
    // $query = mysqli_query($con,$sql);
    $query1 = mysqli_query($con,$sql1);

    if($query1){
        header("Location: doctor.php");
        die();
    }
 ?>