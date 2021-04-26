<?php
 include_once('../config.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <title>Document</title>
</head>
<body>

    <?php
    $id = $_POST['pid'];
    $name = $_POST['pname'];
    $add = $_POST['padd'];
    $phone_number = $_POST['p_no'];
    $appointment = $_POST['papp'];
    $fee= $_POST['fee'];

    if (isset($_POST['submit'])){
            $sql1= "INSERT INTO pat (id,name,address,phone_number,appointment,doctor_fee) VALUES ('$id','$name','$add','$phone_number','$appointment','$fee')";
            $result = mysqli_query($con,$sql1);
            if($result == true){
                header('Location:register.php');
                echo '<div><script>alert("Inserted successfully")</script></div>';
                exit();
            }
            else{
                header('Location:register.php');
                echo 'Insertion Unsucessful';
                exit();
            }
       }
       else{
        header('Location:register.php');
        echo '<script>alert("Failed")</script>';
       }

    ?>

</body>
</html>