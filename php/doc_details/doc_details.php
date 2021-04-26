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
  <h1>Welcome</h1>
  <a style = "text-decoration:none;color:black;font-size:20px;" href="../../index.php" class="w3-bar-item w3-button w3-white" id='f1'>Main Page</a>
  </div>
  <?php
    $sql = "SELECT * FROM employee where designation = 'Doctor'";
    $result = mysqli_query($con,$sql);

echo "<table style='width:95%;border:1px solid black'>
<tr>
<th class='r'>Id</th>
<th class='r'>Name</th>
<th class='r'>Show</th>
</tr>";
 
while($row = mysqli_fetch_array($result))
  {
  echo "<tr>";
  echo "<td>" . $row['id'] . "</td>";
  echo "<td>" . $row['name'] . "</td>";
  echo "<td><a style = 'text-decoration:none;color:black;' href='individual_detail.php?log=$row[0]'>Show</a></td>";
  echo "</tr>";
}
echo "</table>";
?>
</body>
</html>
