<?php
 include_once('../../config.php');
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
    $id = $_POST['id'];
    $name = $_POST['name'];
    $designation = $_POST['designation'];
    $other = $_POST['other'];
    $phone_number = $_POST['phone_number'];
    $email = $_POST['email'];
    $shift = $_POST['shift'];
    $salary = $_POST['salary'];

    if (isset($_POST['submit'])){
            $sql1= "INSERT INTO reception (id,name,designation,type,phone_number,email_id,shift,salary) VALUES ('$id','$name','$designation','$other','$phone_number','$email','$shift','$salary')";
            $result = mysqli_query($con,$sql1);
            if($result == true){
                header('Location:reception.php');
                echo '<div><script>alert("Inserted successfully")</script></div>';
                // echo 'Inserted Sucessfully';
                exit();
            }
            else{
                header('Location:reception.php');
                echo 'Insertion Unsucessful';
                exit();
            }
       }
    ?>

</body>
</html>