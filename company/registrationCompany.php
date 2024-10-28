<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Company Details</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f9f9f9;
        }
        .container {
            max-width: 800px;
            margin: 50px auto;
            background-color: #fff;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            padding: 20px;
        }
        h2 {
            text-align: center;
            color: #007bff; /* Blue color */
            margin-bottom: 20px;
        }
        .form-group {
            margin-bottom: 20px;
        }
        label {
            font-weight: bold;
        }
        input[type="text"],
        input[type="email"],
        input[type="tel"],
        input[type="number"],
        input[type="date"],
        input[type="reset"],
        input[type="submit"] {
            width: 100%;
            padding: 10px;
            border-radius: 5px;
        }
        .button-group {
            text-align: right;
            display: flex;
            justify-content: flex-end;
            align-items: center;
        }
        .button-group input[type="reset"],
        .button-group input[type="submit"] {
            margin-left: 10px;
        }
        a {
            text-decoration: none;
            color: #007bff;
        }
    </style>
</head>
<body>
    <div class="container">
        <h2>Company Details</h2>
        <form action="registrationSuccess.php" method="post">
            <div class="form-group">
                <label for="CompanyName">Company Name:</label>
                <input type="text" id="CompanyName" name="CompanyName" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="CampaseDate">Campase Date:</label>
                <input type="date" id="CampaseDate" name="CampaseDate" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="LastRegistration">Last Registration Date:</label>
                <input type="date" id="LastRegistration" name="LastRegistration" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="JobProfile">Job Profile:</label>
                <input type="text" id="JobProfile" name="JobProfile" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="CompanyPackage">Company Package:</label>
                <input type="text" id="CompanyPackage" name="CompanyPackage" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="TechSkill">Tech Skill:</label>
                <input type="text" id="TechSkill" name="TechSkill" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="Stipend">Stipend:</label>
                <input type="number" id="Stipend" name="Stipend" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="Stipend">Domain:</label>
                <input type="number" id="Domain" name="Domain" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="Stipend">JobProfile:</label>
                <input type="number" id="JobProfile" name="JobProfile" class="form-control" required>
            </div>
            <div class="button-group">
                <input type="reset" value="Reset" class="btn btn-secondary">
                <input type="submit" value="Register" class="btn btn-primary">
            </div>
        </form>
    </div>
</body>
</html>
