<?php
$userName = $_POST['userName'];
$userPhone = $_POST['userPhone'];
$userEmail = $_POST['userEmail'];
$destination = $_POST['destination'];
$tour = $_POST['tour'];
$numPeople = $_POST['numPeople'];
$arrivalDate = $_POST['arrivalDate'];
$leavingDate = $_POST['leavingDate'];

$servername = "localhost";
$username = "root";
$password = "";
$db = "travel";

$conn = new mysqli($servername, $username, $password, $db);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "INSERT INTO guests(userName, userPhone, userEmail, destination, tour, numPeople, arrivalDate, leavingDate) VALUES ('$userName', '$userPhone', '$userEmail', '$destination', '$tour', '$numPeople', '$arrivalDate', '$leavingDate')";

if ($conn->query($sql) === TRUE) {
    echo "ADDED: " . $userName . ", " . $userPhone . ", " . $userEmail . ", " . $destination . ", " . $tour . ", " . $numPeople . ", " . $arrivalDate . ", " . $leavingDate;
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
