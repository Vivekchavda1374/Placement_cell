<?php
if($_SERVER['REQUEST_METHOD'] == "POST"){
    require_once "dbconfig.php";

    try {
        $sql = "INSERT INTO registration (name, email, phone, CompanyName, CompanyPackage) VALUES (:name, :email, :phone, :CompanyName, :CompanyPackage)";

        $res = $pdo->prepare($sql);

        $res->bindParam(':name', $_REQUEST['name']);
        $res->bindParam(':email', $_REQUEST['email']);
        $res->bindParam(':phone', $_REQUEST['phone']);
        $res->bindParam(':CompanyName', $_REQUEST['CompanyName']);
        $res->bindParam(':CompanyPackage', $_REQUEST['CompanyPackage']);

        $res->execute();

        header("location: index1.php?msg=Data Inserted!");
        exit(); 

    } catch(PDOException $e) {
        
        error_log("Error inserting data: " . $e->getMessage());
        echo "Oops! Something went wrong. Please try again later.";
    }

    
    unset($pdo);
}
?>
<html>
<head>
    <title>Add Student</title>
</head>
<body>
    <h3>Add Student Data</h3>
    <form method="POST">
        <label>Name:</label>
        <input type="text" id="name" name="name"/>
        <label>Email:</label>
        <input type="text" id="email" name="email"/>
        <label>Phone no:</label>
        <input type="tel" id="phone" name="phone"/>
        <label>Company Name:</label>
        <input type="text" id="CompanyName" name="CompanyName"/> 
        <label>Company Package:</label>
        <input type="text" id="CompanyPackage" name="CompanyPackage"/> 
        <input type="submit" value="submit"/>
    </form>
</body>
</html>
