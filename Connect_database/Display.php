
<?php
// Connect to database
$conn = mysqli_connect("localhost", "root", "", "college");

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

echo "<h2>Student Details</h2>";

// Retrieve data
$sql = "SELECT * FROM student";
$result = mysqli_query($conn, $sql);

// Display data
echo "<table border='1' cellpadding='10'>";
echo "<tr>
        <th>ID</th>
        <th>Name</th>
        <th>Course</th>
        <th>Mark</th>
      </tr>";

while ($row = mysqli_fetch_assoc($result)) {
    echo "<tr>";
    echo "<td>" . $row['id'] . "</td>";
    echo "<td>" . $row['name'] . "</td>";
    echo "<td>" . $row['course'] . "</td>";
    echo "<td>" . $row['mark'] . "</td>";
    echo "</tr>";
}

echo "</table>";

// Close connection
mysqli_close($conn);
?>
