<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- Bootstrap CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/5.1.3/css/bootstrap.min.css" rel="stylesheet">
    <style>
        * {
            list-style: none;
            text-decoration: none;
        }

        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
        }

        nav {
            background-color: #007bff;
            padding: 10px 0;
        }

        .navbar-brand {
            font-size: 24px;
            font-weight: bold;
            color: #fff;
        }

        ul.navbar-nav {
            text-align: center;
            margin: 0;
            padding: 0;
        }

        .nav-item {
            margin: 0 15px;
        }

        .nav-link {
            color: #fff;
            font-size: 18px;
            text-decoration: none;
            transition: color 0.3s ease;
        }

        .nav-link:hover {
            color: #ffc107;
        }

        .container1 {
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            margin-top: 50px;
            
        }

        .card {
            width: 300px;
            margin: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
            transition: box-shadow 0.3s ease;
        }

        .card:hover {
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.3);
        }

        .card-body {
            padding: 20px;
            text-align: center;
        }

        .card-title {
            font-size: 20px;
            margin-bottom: 10px;
        }

        .card-link {
            color: #007bff;
            text-decoration: none;
            font-weight: bold;
        }

        .card-link:hover {
            text-decoration: underline;
        }
    </style>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
        <div class="container" style="margin-left: 20px;">
            <a class="navbar-brand"  href="#">Information and <br>  Communication Technology</a>
        </div>
    </nav>

    <div class="container1">
        <div class="card">
            <div class="card-body">
                <h5 class="card-title">Registration Form</h5>
                <a href="index1.php" class="card-link">Register here....</a>
            </div>
        </div>
        <div class="card">
            <div class="card-body">
                <h5 class="card-title">Edit Upcoming Company</h5>
                <a href="./company/index.php" class="card-link">Upcoming Company....</a>
            </div>
        </div>
        <div class="card">
            <div class="card-body">
                <h5 class="card-title">Upcoming Company</h5>
                <a href="./company/registrationCompany.php" class="card-link">Upcoming Company....</a>
            </div>
        </div>
        <div class="card">
            <div class="card-body">
                <h5 class="card-title">Multiple Placement Add</h5>
                <a href="./multiplePlacement/index.php" class="card-link">Multiple Placement....</a>
            </div>
        </div>
    </div>

    <!-- Bootstrap Bundle JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.1.3/js/bootstrap.bundle.min.js"></script>
</body>

</html>