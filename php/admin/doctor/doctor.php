<?php
 include_once('../../config.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="../../css/admin_style.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script> 

    <title>Document</title>

</head>
<body>
<div class="w3-sidebar w3-light-grey w3-bar-block" style="width:25%">
  <h3 class="w3-bar-item">Menu</h3>
  <a style = "text-decoration:none;color:black;" href="doctor/doctor.php" class="w3-bar-item w3-button w3-teal">Manage Doctors</a>
  <a href="../reception/reception.php" style = "text-decoration:none;color:black;" class="w3-bar-item w3-button">Manage Reception</a>
  <a href="../../../index.php" style = "text-decoration:none;color:black;" class="w3-bar-item w3-button">Main Page</a>
</div>
<div style="margin-left:25%">
<div class="w3-container w3-teal">
  <h1>Doctors</h1>
  <button id= 'f1' type='submit' value='Add' data-toggle="modal" data-target="#ModalLoginForm">Add</button>
  </div>

  <div id="ModalLoginForm" class="modal fade">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title">Details</h1>
            </div>
            <div class="modal-body">
                <form role="form" method="POST" action="add_doctor.php">
                    <input type="hidden" name="_token" value="">
                    <div class="form-group">
                        <label class="control-label">ID</label>
                        <div>
                            <input type="text" class="form-control input-lg" name="id" value="">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label">Name</label>
                        <div>
                            <input type="text" class="form-control input-lg" name="name" value="">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label">User name</label>
                        <div>
                            <input type="text" class="form-control input-lg" name="u_name" value="">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label">First name</label>
                        <div>
                            <input type="text" class="form-control input-lg" name="f_name" value="">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label">Last name</label>
                        <div>
                            <input type="text" class="form-control input-lg" name="l_name" value="">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label">Password</label>
                        <div>
                            <input type="text" class="form-control input-lg" name="password" value="">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label">Specialist</label>
                        <div>
                            <input type="text" class="form-control input-lg" name="specialist" value="">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label">Phone Number</label>
                        <div>
                            <input type="text" class="form-control input-lg" name="phone_number" value="">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label">Email Id</label>
                        <div>
                            <input type="email" class="form-control input-lg" name="email" value="">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label">Shift</label>
                        <div>
                            <input type="text" class="form-control input-lg" name="shift" value="">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label">Salary</label>
                        <div>
                            <input type="text" class="form-control input-lg" name="salary" value="">
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

<div class="doc">
<?php
$sql = "SELECT * FROM employee where designation = 'Doctor'";
$result = mysqli_query($con,$sql);

echo "<table style='width:95%;border:1px solid black'>
<tr>
<th class='r'>Id</th>
<th class='r'>Name</th>
<th class='r'>User Name</th>
<th class='r'>Password</th>
<th class='r'>Specialist</th>
<th class='r'>Phone Number</th>
<th class='r'>Email</th>
<th class='r'>Shift</th>
<th class='r'>Salary</th>
<th class='r'>Update</th>
<th class='r'>Delete</th>
</tr>";
 
while($row = mysqli_fetch_array($result))
  {
  echo "<tr>";
  echo "<td>" . $row['id'] . "</td>";
  echo "<td>" . $row['name'] . "</td>";
  echo "<td>" . $row['u_name'] ."</td>";
  echo "<td>" . $row['password'] ."</td>";
  echo "<td>" . $row['specialist'] ."</td>";
  echo "<td>" . $row['phone_number']."</td>";
  echo "<td>" . $row['email_id'] . "</td>";
  echo "<td>" . $row['shift'] . "</td>";
  echo "<td>" . $row['salary'] . "</td>";
  echo "<td><a href='update_doctor.php?edit=$row[0]'>Update</a></td>";
  echo "<td><a href='delete_doctor.php?delete=$row[0]'>Delete</a></td>";
  echo "</tr>";
}
echo "</table>";
?>
</div>

</body>
</html>