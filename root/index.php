<html>
<head>
</head>

<body>
<h1>Test web server</h1>

<?php

// Create connection
$host = "localhost";
$username = "root";
$password = "usbw";
$database_in_use = "test";


$conn = new mysqli($host, $username, $password, $database_in_use);

if ($conn->connect_errno){
    echo "Falied to connect: ( " . $conn->connect_errno . " ) <br><br>";
}

echo $conn->host_info . "<br><br>";

// Get database table
$sql = "SELECT population_ID, population_Area, population_Date, population_Value FROM population_table";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    echo "# " . $row["population_ID"]. " - Area: " . $row["population_Area"]. " - Date: " . $row["population_Date"]. " - Population: " . $row["population_Value"]. "<br>";
  }
} else {
  echo "0 results";
}
$conn->close();

?>

</body>

</html>