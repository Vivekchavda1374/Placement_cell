<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration Form</title>
    <!-- Add Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <!-- Custom CSS -->
    <style>
        body {
            background-color: #f8f9fa;
        }
        .container {
            margin-top: 50px;
            background-color: #fff;
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        .form-group {
            margin-bottom: 20px;
        }
        .button-group {
            text-align: right;
        }
    </style>
</head>
<body>
    <?php include './includes/header.php'; ?>
    <div class="container">
        <h2 class="mb-4">Registration Form</h2>
        <form action="registration.php" method="post">
            <div class="form-group">
                <label for="fullname">Full Name:</label>
                <input type="text" id="fullname" name="fullname" class="form-control" required>
            </div>

            <div class="form-group">
                <label for="email">Email:</label>
                <input type="email" id="email" name="email" class="form-control" required>
            </div>

            <div class="form-group">
                <label for="phone">Phone No :</label>
                <input type="tel" id="phone" name="phone" class="form-control" required>
            </div>

            <div class="form-group">
                <label for="CompanyName">Company Name:</label>
                <input type="text" id="CompanyName" name="CompanyName" class="form-control" required>
            </div>

            <div class="form-group">
                <label for="CompanyPackage">Company Package:</label>
                <input type="text" id="CompanyPackage" name="CompanyPackage" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="Domain">Domain:</label>
                <input type="text" id="Domain" name="Domain" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="JobProfile">Job Profile:</label>
                <input type="text" id="JobProfile" name="JobProfile" class="form-control" required>
            </div>

            <div class="button-group">
                <button type="reset" class="btn btn-secondary mr-2">Reset</button>
                <button type="submit" class="btn btn-primary">Register</button>
            </div>
        </form>
    </div>

    <!-- Optional: jQuery and Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
