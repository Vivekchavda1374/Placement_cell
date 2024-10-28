<?php
require 'conn.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $companyName = $_POST['CompanyName'];
    $studentNames = $_POST['StudentName']; 
    $position = $_POST['position'];

    $studentNamesString = implode('<br/> ', $studentNames);

    $insertQuery = "INSERT INTO companyplacement (CompanyName, StudentName, Position) VALUES ('$companyName', '$studentNamesString', '$position')";

    if (mysqli_query($conn, $insertQuery)) {
        header("Location: success.php");
        exit();
    } else {
        echo "Error: " . $insertQuery . "<br>" . mysqli_error($conn);
    }
}

mysqli_close($conn);
?>
