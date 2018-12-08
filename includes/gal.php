<?php
$user = "root";
$password = ""; //blank for windows, root for mac
$host = "localhost";
$db = "portfolio";

// Check connection
$conn = mysqli_connect($host, $user, $password, $db);
if ($conn->connect_error) {
    die ("Connection failed: " . $conn->connect_error);
    echo "Connection failed";
} 

// if (isset($_GET["imgText"])) { // check for a parametr ?carModel=R58
//     $car = $_GET["imgText"];
$myQuery = "SELECT * FROM tbl_gallery";

$result = mysqli_query($conn, $myQuery);

$rows = array();

while($row = mysqli_fetch_assoc($result)) {
    $rows[] = $row;
}

echo json_encode($rows);
    
?>