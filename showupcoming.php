<?php

$servername = "localhost";
$username = "root"; 
$password = ""; 
$dbname = "placement"; 

try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    
    $sql = "SELECT * FROM companydetails";
    
    $stmt = $conn->prepare($sql);
    $stmt->execute();
    
    $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
    include './includes/header.php';
    echo "<!DOCTYPE html>
    <html>
    <head>
        <meta charset='UTF-8'>
        <title>Company Details</title>
        <link rel='stylesheet' type='text/css' href='https://cdn.datatables.net/1.11.5/css/jquery.dataTables.css'>
        <link rel='stylesheet' href='https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css'>
        <style>
            th, td {
                padding: 8px;
                text-align: left;
                border-bottom: 1px solid #dee2e6;
            }
            th {
                background-color: #f2f2f2;
            }
        </style>
    </head>
    <body>";
    
    echo "<div class='container mt-4'>";
    echo "<table id='companyTable' class='table'>";
    echo "<thead class='thead-light'><tr><th>ID</th><th>Company Name</th><th>Campase Date</th><th>Last Registration</th><th>Job Profile</th><th>Company Package</th><th>Tech Skill</th><th>Stipend</th></tr></thead><tbody>";
    foreach ($result as $row) {
        echo "<tr>";
        echo "<td>" . $row['id'] . "</td>";
        echo "<td>" . $row['ComapnyName'] . "</td>";
        echo "<td>" . $row['CampaseDate'] . "</td>";
        echo "<td>" . $row['LastRegistration'] . "</td>";
        echo "<td>" . $row['JobProfile'] . "</td>";
        echo "<td>" . $row['CompanyPackage'] . "</td>";
        echo "<td>" . $row['TechSkill'] . "</td>";
        echo "<td>" . $row['Stipend'] . "</td>";
        echo "</tr>";
    }
    echo "</tbody></table>";
    echo "</div>";

    echo "<script src='https://code.jquery.com/jquery-3.6.0.min.js'></script>";
    echo "<script src='https://cdn.datatables.net/1.11.5/js/jquery.dataTables.min.js'></script>";
    echo "<script src='https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js'></script>";
    echo "<script>
        $(document).ready(function() {
            $('#companyTable').DataTable();
        });
    </script>";
    
    echo "</body></html>";
    
} catch(PDOException $e) {
    error_log("Connection failed: " . $e->getMessage());
    echo "Oops! Something went wrong. Please try again later.";
}

$conn = null;
?>
