<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "placement";

try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // Check if the form fields are set and assign their values accordingly
    $name = isset($_POST['CompanyName']) ? $_POST['CompanyName'] : '';
    $email = isset($_POST['CampaseDate']) ? $_POST['CampaseDate'] : '';
    $phone = isset($_POST['LastRegistration']) ? $_POST['LastRegistration'] : '';
    $company = isset($_POST['JobProfile']) ? $_POST['JobProfile'] : '';
    $package = isset($_POST['CompanyPackage']) ? $_POST['CompanyPackage'] : '';
    $skill = isset($_POST['TechSkill']) ? $_POST['TechSkill'] : '';
    $stipend = isset($_POST['Stipend']) ? $_POST['Stipend'] : '';

    $sql = "INSERT INTO companydetails (ComapnyName, CampaseDate, LastRegistration, JobProfile, CompanyPackage, TechSkill, Stipend) 
    VALUES (:CompanyName, :CampaseDate, :LastRegistration, :JobProfile, :CompanyPackage, :TechSkill, :Stipend)";
    $stmt = $conn->prepare($sql);

    // Bind parameters
    $stmt->bindParam(':CompanyName', $name);
    $stmt->bindParam(':CampaseDate', $email);
    $stmt->bindParam(':LastRegistration', $phone);
    $stmt->bindParam(':JobProfile', $company);
    $stmt->bindParam(':CompanyPackage', $package);
    $stmt->bindParam(':TechSkill', $skill);
    $stmt->bindParam(':Stipend', $stipend);

    $stmt->execute();

    echo "Registration successful!";
} catch(PDOException $e) {
    error_log("Registration failed: " . $e->getMessage());
    echo "Oops! Something went wrong. Please try again later.";
}

$conn = null;
?>
