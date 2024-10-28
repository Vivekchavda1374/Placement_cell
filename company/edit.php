<?php
require_once("dbConnection.php");

$id = $_GET['id'];

$result = mysqli_query($mysqli, "SELECT * FROM companydetails WHERE id = $id");

// Check if the query returned any result
if(mysqli_num_rows($result) > 0) {
    $resultData = mysqli_fetch_assoc($result);

    $CompanyName = $resultData['ComapnyName'];
    $CampaseDate = $resultData['CampaseDate'];
    $LastRegistration = $resultData['LastRegistration'];
    $JobProfile = $resultData['JobProfile'];
    $CompanyPackage = $resultData['CompanyPackage'];
    $TechSkill = $resultData['TechSkill'];
    $Stipend = $resultData['Stipend'];
} else {
    echo "No data found for the provided ID.";
   
}
?>
<!DOCTYPE html>
<html lang="en">
<head>    
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Data</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <!-- Custom Styles -->
    <style>
        /* Custom Styles */
        body {
            background-color: #f0f5f9;
        }
        .container {
            margin-top: 50px;
        }
        .form-group {
            margin-bottom: 20px;
        }
        label {
            font-weight: bold;
        }
        .btn-primary {
            background-color: #007bff;
            border-color: #007bff;
        }
        .btn-primary:hover {
            background-color: #0056b3;
            border-color: #0056b3;
        }
    </style>
</head>
<body>
    <div class="container">
        <h2>Edit Data</h2>
        <p>
            <a href="index.php" class="btn btn-secondary">Home</a>
        </p>
        
        <form name="edit" method="post" action="editAction.php">
            <div class="form-group">
                <label for="cname">Company Name</label>
                <input type="text" class="form-control" id="cname" name="cname" value="<?php echo $CompanyName; ?>">
            </div>
            <div class="form-group">
                <label for="cdate">Campus Date</label>
                <input type="text" class="form-control" id="cdate" name="cdate" value="<?php echo $CampaseDate; ?>">
            </div>
            <div class="form-group">
                <label for="ldate">Last Registration Date</label>
                <input type="text" class="form-control" id="ldate" name="ldate" value="<?php echo $LastRegistration; ?>">
            </div>
            <div class="form-group">
                <label for="jprofile">Job Profile</label>
                <input type="text" class="form-control" id="jprofile" name="jprofile" value="<?php echo $JobProfile; ?>">
            </div>
            <div class="form-group">
                <label for="cpackage">Company Package</label>
                <input type="text" class="form-control" id="cpackage" name="cpackage" value="<?php echo $CompanyPackage; ?>">
            </div>
            <div class="form-group">
                <label for="tskill">Technical Skills</label>
                <input type="text" class="form-control" id="tskill" name="tskill" value="<?php echo $TechSkill; ?>">
            </div>
            <div class="form-group">
                <label for="stipend">Stipend</label>
                <input type="text" class="form-control" id="stipend" name="stipend" value="<?php echo $Stipend; ?>">
            </div>
            <input type="hidden" name="id" value="<?php echo $id; ?>">
            <button type="submit" name="update" class="btn btn-primary">Update</button>
        </form>
    </div>

    <!-- Bootstrap JS (optional) -->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
