<?php
 include_once('php/config.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <title>Hospital Management System</title>
</head>
<body>
<div class="w3-container w3-teal">
  <h1>Doctor</h1>
  </div>
    <div class='container'  style="margin-left:40%;margin-top:15%;font-size:20px;">
        <form method="POST">
        Username : <input type="text" name = 'username'><br><br>
        Password : <input type="password" name ='password'><br><br>
        <input style="margin-left:15%;" type="submit" name="submit" value='submit'>
    </form>
    </div>
    <?php
    if(isset($_POST['submit'])){
        $doctor = 'Doctor';
        $username =  mysqli_real_escape_string($con, $_POST['username']);
        $password = mysqli_real_escape_string($con, $_POST['password']);
        $sql = "SELECT * FROM user where type = '$doctor'";
        $res = mysqli_query($con, $sql);
        $result =  mysqli_fetch_array($res); 
        if ($result['u_name'] == $username && $result['password'] == $password){
            header("Location:php/doc_details/doc_details.php");
            echo 'Successful';
            exit();
        }
        else{
            echo "<p style='color:red;margin-left:40%;font-size:30px;'> Username or Password is wrong</p>";
        } 
    }   
?>
    
</body>
</html>