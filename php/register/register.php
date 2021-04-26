<?php
 include_once('../config.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="../css/admin_style.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script> 

    <title>Document</title>

</head>
<body>
<div class="w3-container w3-teal">
  <h1>Registration</h1>
  <button id= 'f1' style = "font-size:20px;" type='submit' value='Add' data-toggle="modal" data-target="#ModalLoginForm">Add Patient</button>
  </div>
  <div> <a style = "text-decoration:none;color:black;font-size:20px;" href="../../index.php" id='f1'>Main Page</a></div>

  <div id="ModalLoginForm" class="modal fade">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title">Details</h1>
            </div>
            <div class="modal-body">
                <form role="form" method="POST" action="add_patient.php">
                    <input type="hidden" name="_token" value="">
                    <div class="form-group">
                        <label class="control-label">Patient ID</label>
                        <div>
                            <input type="text" class="form-control input-lg" name="pid" value="">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label">Name</label>
                        <div>
                            <input type="text" class="form-control input-lg" name="pname" value="">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label">Address</label>
                        <div>
                            <input type="text" class="form-control input-lg" name="padd" value="">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label">Phone_number</label>
                        <div>
                            <input type="text" class="form-control input-lg" name="p_no" value="">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label">Appointment</label>
                        <div>
                            <input type="text" class="form-control input-lg" name="papp" value="">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label">Doctor Fee</label>
                        <div>
                            <input type="text" class="form-control input-lg" name="fee" value="">
                        </div>
                    </div>
                    <div class="form-group">
                        <div>
                            <button type="submit" name ='submit' value="submit" class="btn btn-success">
                                Submit
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </div> 
    </div>
</div>

<?php
$sql = "SELECT * FROM pat";
$result = mysqli_query($con,$sql);
// $row = mysqli_fetch_array($result);
// print_r($row);

echo "<table style='width:95%;border:1px solid black'>
<tr>
<th class='r'>Patient Id</th>
<th class='r'>Name</th>
<th class='r'>Address</th>
<th class='r'>Phone Number</th>
<th class='r'>Appointed Doctor</th>
<th class='r'>Doctor Fee</th>
</tr>";
 
while($row = mysqli_fetch_array($result))
  {
  echo "<tr>";
  echo "<td>" . $row['id'] . "</td>";
  echo "<td>" . $row['name'] . "</td>";
  echo "<td>" . $row['address'] ."</td>";
  echo "<td>" . $row['phone_number'] ."</td>";
  echo "<td>" . $row['appointment'] ."</td>";
  echo "<td>" . $row['doctor_fee']."</td>";
  echo "</tr>";
}
echo "</table>";
?>

</body>
</html>