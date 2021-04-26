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
    $u_name = $_POST['u_name'];
    $f_name = $_POST['f_name'];
    $l_name = $_POST['l_name'];
    $password = $_POST['password'];
    $shift = $_POST['shift'];
    $specialist = $_POST['specialist'];
    $phone_number = $_POST['phone_number'];
    $email = $_POST['email'];
    $salary = $_POST['salary'];
    $doctor = 'Doctor';

    if (isset($_POST['submit'])){
       $sql_con = "INSERT INTO user (id,u_name,password,f_name,l_name,type) VALUES ('$id','$u_name','$password','$f_name','$l_name','$doctor')";
       
       try{
            $res = mysqli_query($con, $sql_con);
        }
        catch(exception $e){
            echo $e;
        }
       if ($res == true){
            $sql1= "INSERT INTO employee (id,name,u_name,password,shift,specialist,phone_number,designation,email_id,salary) VALUES ('$id','$name','$u_name','$password','$shift','$specialist','$phone_number','$doctor','$email','$salary')";
            $result = mysqli_query($con,$sql1);
            if($result == true){
                header('Location:doctor.php');
                echo '<div><script>alert("Inserted successfully")</script></div>';
                exit();
            }
            else{
                header('Location:doctor.php');
                echo 'Insertion Unsucessful';
                exit();
            }
       }
       else{
        header('Location:doctor.php');
        echo '<script>alert("Failed")</script>';
       }

    }
    ?>

</body>
</html>