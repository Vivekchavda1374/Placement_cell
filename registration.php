<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "placement";

try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $name = isset($_POST['fullname']) ? $_POST['fullname'] : '';
    $email = isset($_POST['email']) ? $_POST['email'] : '';
    $phone = isset($_POST['phone']) ? $_POST['phone'] : '';
    $company = isset($_POST['CompanyName']) ? $_POST['CompanyName'] : '';
    $package = isset($_POST['CompanyPackage']) ? $_POST['CompanyPackage'] : '';
    $domain = isset($_POST['Domain']) ? $_POST['Domain'] : '';
    $jobprofile = isset($_POST['JobProfile']) ? $_POST['JobProfile'] : '';

    $sql = "INSERT INTO registration (Name, Email, phone, CompanyName, CompanyPackage, Domain, JobProfile) VALUES (:name, :email, :phone, :company, :package, :domain, :jobprofile)";
    $stmt = $conn->prepare($sql);

    $stmt->bindParam(':name', $name);
    $stmt->bindParam(':email', $email);
    $stmt->bindParam(':phone', $phone);
    $stmt->bindParam(':company', $company);
    $stmt->bindParam(':package', $package);
    $stmt->bindParam(':domain', $domain);
    $stmt->bindParam(':jobprofile', $jobprofile);

    $stmt->execute();

    echo "Registration successful!";
} catch (PDOException $e) {
    error_log("Registration failed: " . $e->getMessage());
    echo "Oops! Something went wrong. Please try again later.";
}

$conn = null;
