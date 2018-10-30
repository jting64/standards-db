
<?php
include 'connection.php';
 
$conn = OpenCon();
 
echo "Connected Successfully<br />";
echo "<h1> Test List of Webb DOK Assessment</h1>";
echo "<div style='float:left'><h2>Products</h2>";
$sql = "SELECT Word, Level FROM section WHERE Type = 'Product'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "<ul>" . $row["Word"]. " " . $row["Level"] . "</ul>";
    }
} else {
    echo "0 results";
}

echo "</div><div style='float:left'><h2>Teacher</h2>";
$sql = "SELECT Word , Level FROM section WHERE Type = 'Teacher'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "<ul>" . $row["Word"]. " " . $row["Level"] . "</ul>";
    }
} else {
    echo "0 results";
}

echo "</div><div style='float:left'><h2>Student</h2>";
$sql = "SELECT Word, Level  FROM section WHERE Type = 'Student'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "<ul>" . $row["Word"]. " " . $row["Level"] . "</ul>";
    }
} else {
    echo "0 results";
}
echo "</div><div style='clear:both'";
CloseCon($conn);
 
?>