<!DOCTYPE html>
<html>
<body>

<?php
$servername = "192.168.150.213";
$username = "webprogmi211";
$password = "j@zzyAngle30";
$dbname = "webprogmi211";
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
$sql = "SELECT fullname, email, website, comment, gender FROM eplascano_guests";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
  // output data of each row
  while ($row = $result->fetch_assoc()) {
    echo " - Name: " . $row["fullname"]. " - Email: " . $row["email"]. " - Website :" . $row["website"]. " - Comment : ". $row["comment"].  "<br>";
  }
} else {
  echo "0 results";
}
$conn->close();
?>

</body>
</html>