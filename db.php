
<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="styles.css"/>
</head>
<form onsubmit="return true" action="Welcome.html">
        
    <button type="submit">Return</button><br>
    
</form>
<body>

<?php
$servername = "sql1.njit.edu";
$username = "sca29";
$password = "pass";
$dbname = "sca29";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT * from Table2";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "<br> | Name of Client: ". $row["Name of Client"]. " | Type of Client: ". $row["Type of client"]. " | Inventory of homes for sale(Sellers Only): " . $row["Inventory of homes for sale"] . " | Home(s) to visit: ". $row["Home(s) to visit"] . " | Date and Time of Appointments: " .  $row["Date and Time of Appointments"] . " |" . "<br>";
    }
} else {
    echo "0 results";
}

$conn->close();
?>

</body>
</html>