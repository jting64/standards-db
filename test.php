
<?php
include 'connection.php';
 
$conn = OpenCon();
 
echo "Connected Successfully<br />";
echo "<h1> Test List of Standards </h1>";
$sql = "SELECT ID, Text ,Department FROM standard";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "id: " . $row["ID"]. " - Standard: " . $row["Text"]. " " . $row["Department"]. "<br>";
    }
} else {
    echo "0 results";
}

CloseCon($conn);
 
?>