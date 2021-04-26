<?php
 include_once('../../config.php');

    $id = $_GET['edit'];
    $sql = "SELECT * FROM reception where id = '$id'";
    $res = mysqli_query($con,$sql);
    $row = mysqli_fetch_array($res);

    if (isset($_POST['update'])){
        $name = $_POST['name'];
        $shift = $_POST['shift'];
        $designation = $_POST['designation'];
        $phone_number = $_POST['phone_number'];
        $email = $_POST['email'];
        $salary = $_POST['salary'];

        $sql1= "UPDATE `reception` SET  `name`= '".$name."',`designation`= '".$designation."',`phone_number`= '".$phone_number."',`email_id`= '".$email."',`shift`= '".$shift."',`salary`= '".$salary."' where `id`= $id";
        $result = mysqli_query($con,$sql1);

        if($result == true){
                header("Location:reception.php");
                 echo '<div><script>alert("Updated successfully")</script></div>';
                 die();
        }
        else{
            echo 'Updation Unsucessful';
        }
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <title>Document</title>
</head>
<body>
<div class="w3-container w3-teal">
  <h1>Reception</h1>
  </div>
  <div>  <a href="reception.php" style = "text-decoration:none;color:black;font-size:20px;margin-top:20px; margin-left:10px;" class="w3-bar-item w3-button w3-green" id='back-btn'>Back</a></div>
<div id="ModalLogin" >
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title">Details</h1>
            </div>
            <div class="modal-body">
                <form role="form" method="POST">
                <div class="form-group">
                <input type="hidden" name="_token" value="">
                    <div class="form-group">
                        <label class="control-label">Name</label>
                        <div>
                            <input type="text" class="form-control input-lg" name="name" value="<?php echo $row['name'];?>">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label">Designation</label>
                        <div>
                            <input type="text" class="form-control input-lg" name="designation" value="<?php echo $row['designation'];?>">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label">Phone Number</label>
                        <div>
                            <input type="text" class="form-control input-lg" name="phone_number" value="<?php echo $row['phone_number'];?>">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label">Email Id</label>
                        <div>
                            <input type="email" class="form-control input-lg" name="email" value="<?php echo $row['email_id'];?>">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label">Shift</label>
                        <div>
                            <input type="text" class="form-control input-lg" name="shift" value="<?php echo $row['shift'];?>">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label">Salary</label>
                        <div>
                            <input type="text" class="form-control input-lg" name="salary" value="<?php echo $row['salary'];?>">
                        </div>
                    </div>
                        <div>
                            <button type="submit" name ='update' value="submit1" class="btn btn-success">
                                Save Changes
                            </button>
                            </form>
                        </div>
                    </div>    
                </form>
            </div>
        </div> 
    </div>
</div>
    
</body>
</html>

