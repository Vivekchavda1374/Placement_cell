<?php
// Database connection parameters
$servername = "localhost";
$username = "root"; 
$password = ""; 
$dbname = "placement"; 


try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    
    $sql = "SELECT * FROM registration";
    
    $stmt = $conn->prepare($sql);
    $stmt->execute();
    
    $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
  
        include './includes/header.php';
    

    echo "<!DOCTYPE html>
    <html>
    <head>
        <meta charset='UTF-8'>
        <title>DataTables Example</title>
        <link rel='stylesheet' type='text/css' href='https://cdn.datatables.net/1.11.5/css/jquery.dataTables.css'>
        <link rel='stylesheet' href='https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css'>
        <style>
            table {
                border-collapse: collapse;
                width: 100%;
                background-color: #ffffff;
                border-radius: 5px;
                overflow: hidden;
            }
            th, td {
                padding: 10px;
                text-align: left;
                border-bottom: 1px solid #ddd;
            }
            th {
                background-color: #007bff; /* Blue color */
                color: white;
            }
            tr:hover {
                background-color: #b8daff; /* Light blue color */
            }
        </style>
    </head>
    <body>";
    
    echo "<div class='container mt-4'>";
    echo "<table id='example' class='display table table-striped'>";
    echo "<thead class='thead-dark'><tr><th>ID</th><th>Name</th><th>Email</th><th>Phone</th><th>Company Name</th><th>Company Package</th><th>Domain</th><th>JobProfile</th></tr></thead><tbody>";
    foreach ($result as $row) {
        echo "<tr>";
        echo "<td>" . $row['id'] . "</td>";
        echo "<td>" . $row['name'] . "</td>";
        echo "<td>" . $row['email'] . "</td>";
        echo "<td>" . $row['phone'] . "</td>";
        echo "<td>" . $row['CompanyName'] . "</td>";
        echo "<td>" . $row['CompanyPackage'] . "</td>";
        echo "<td>" . $row['Domain'] . "</td>";
        echo "<td>" . $row['JobProfile'] . "</td>";
        echo "</tr>";
    }
    echo "</tbody></table>";
    echo "</div>";

    echo "<script src='https://code.jquery.com/jquery-3.6.0.min.js'></script>";
    echo "<script src='https://cdn.datatables.net/1.11.5/js/jquery.dataTables.min.js'></script>";
    echo "<script src='https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js'></script>";
    echo "<script>
        $(document).ready(function() {
            $('#example').DataTable();
        });
    </script>";
    
    echo "</body></html>";
    
} catch(PDOException $e) {
    error_log("Connection failed: " . $e->getMessage());
    echo "Oops! Something went wrong. Please try again later.";
}

$conn = null;
?>
