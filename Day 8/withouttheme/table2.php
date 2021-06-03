<?php
//DB connection
$connection = mysqli_connect("localhost", "root", "","db_internship");
//query
$q = mysqli_query($connection, "select * from tbl_student")or die(mysqli_error($connection));

echo "<table border='1'>";
echo "<tr>";
echo "<th>ID</th>";
echo "<th>Name</th>";
echo "<th>Gender</th>";
echo "<th>Dob</th>";
echo "<th>email</th>";
echo "<th>password</th>";
echo "<th>mobile</th>";
echo "<th>address</th>";
echo "<th>area</th>";
echo "<th>bloodgroup</th>";
echo "<th>Action</th>";
echo "</tr>";
$i =0;
while($row = mysqli_fetch_array($q)){
    $i++;
  echo "<tr>";
  echo "<td>$i</td>";
  echo "<td>{$row['st_name']}</td>";
  echo "<td>{$row['st_gender']}</td>";
  echo "<td>{$row['st_dob']}</td>";
  echo "<td>{$row['st_email']}</td>";
  echo "<td>{$row['st_password']}</td>";
  echo "<td>{$row['st_mobile']}</td>";
  echo "<td>{$row['st_address']}</td>";
  echo "<td>{$row['st_area']}</td>";
  echo "<td>{$row['st_bloodgroup']}</td>";
  echo "<td><a href='edit2.php?id={$row['st_id']}'>edit</a> | <a href='delete2.php?deleteid={$row['st_id']}'>delete</a></td>";
  echo "</tr>";
}
echo "</table>";

echo "<a href='WithoutTheme.php'>Add Record</a>";
?>
