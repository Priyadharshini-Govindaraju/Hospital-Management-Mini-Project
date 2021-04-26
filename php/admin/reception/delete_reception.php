<?php
    include_once('../../config.php');
    $id = $id = $_GET['delete'];
    $sql = "DELETE FROM reception WHERE id ='$id'";
    $query = mysqli_query($con,$sql);

    if($query){
        header("Location: reception.php");
        die();
    }
 ?>