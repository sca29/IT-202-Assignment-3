
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
$password = "TsuShowMinnow13589!";
$dbname = "sca29";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT * from Table1";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "<br> | Realtor Name: ". $row["Realtor Name"]. " | Realtor Password: ". $row["Realtor Password"]. " | Realtor ID Number: " . $row["Realtor ID Number (8 digit)"] . " | Realtor Email Address: ". $row["Realtor Email Address"] . " | Realtor Appointment Schedule: " .  $row["Realtor Appointment Schedule"] . " |" . "<br>";
    }
} else {
    echo "0 results";
}

$conn->close();
?>

</body>
</html>