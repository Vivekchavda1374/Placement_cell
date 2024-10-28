<?php
// Include the database connection file
require_once("dbConnection.php");

if (isset($_POST['update'])) {
    // Escape special characters in a string for use in an SQL statement
    $id = mysqli_real_escape_string($mysqli, $_POST['id']);
    $CompanyName = mysqli_real_escape_string($mysqli, $_POST['cname']);
    $CampusDate = mysqli_real_escape_string($mysqli, $_POST['cdate']);
    $LastRegistration = mysqli_real_escape_string($mysqli, $_POST['ldate']);
    $JobProfile = mysqli_real_escape_string($mysqli, $_POST['jprofile']);
    $CompanyPackage = mysqli_real_escape_string($mysqli, $_POST['cpackage']);
    $TechSkill = mysqli_real_escape_string($mysqli, $_POST['tskill']);
    $Stipend = mysqli_real_escape_string($mysqli, $_POST['stipend']);

    // Check for empty fields
    if (empty($CompanyName) || empty($CampusDate) || empty($LastRegistration) || empty($JobProfile) || empty($CompanyPackage) || empty($TechSkill) || empty($Stipend)) {
        echo "<font color='red'>One or more fields are empty.</font><br/>";
    } else {
        // Update the database table
        $result = mysqli_query($mysqli, "UPDATE companydetails SET `ComapnyName` = '$CompanyName', `CampaseDate` = '$CampusDate', `LastRegistration` = '$LastRegistration', `JobProfile` = '$JobProfile', `CompanyPackage` = '$CompanyPackage', `TechSkill` = '$TechSkill', `Stipend` = '$Stipend' WHERE `id` = $id");

        // Check if the update was successful
        if ($result) {
            // Display success message
            echo "<p><font color='green'>Data updated successfully!</font></p>";
            echo "<a href='index.php'>View Result</a>";
        } else {
            // Display error message if the update fails
            echo "<p><font color='red'>Error updating data: " . mysqli_error($mysqli) . "</font></p>";
        }
    }
}
?>
