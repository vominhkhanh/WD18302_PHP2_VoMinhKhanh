<?php
include '../config/config.php';
?>
<!DOCTYPE html>
<html>
<head>
<style>
#customers {
  font-family: Arial, Helvetica, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

#customers td, #customers th {
  border: 1px solid #ddd;
  padding: 8px;
}

#customers tr:nth-child(even){background-color: #f2f2f2;}

#customers tr:hover {background-color: #ddd;}

#customers th {
  padding-top: 12px;
  padding-bottom: 12px;
  text-align: left;
  background-color: #04AA6D;
  color: white;
}
</style>
</head>
<body>

<h1>List User</h1>

<table id="customers">
  <tr>
    <th>id</th>
    <th>firstname</th>
    <th>lastname</th>
    <th>email</th>
    <th>status</th>
    <th>created_at</th>
    <th>password</th>
    <th>action</th>
  </tr>
<?php 
$sql = "SELECT * FROM users";
$result = $mysqli->query($sql);

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        echo '<tr>';
        echo '<td>' . $row['id'] . '</td>';
        echo '<td>' . $row['firstname'] . '</td>';
        echo '<td>' . $row['lastname'] . '</td>';
        echo '<td>' . $row['email'] . '</td>';
        echo '<td>' . $row['status'] . '</td>';
        echo '<td>' . $row['created_at'] . '</td>';
        echo '<td>' . $row['password'] . '</td>';
        echo '<td><i class="fas fa-edit "></i></td>'; 
        echo '</tr>';
    }
}
?>
</table>

</body>
</html>


