<?php
require_once "dbconfig.php";

try {
    if ($_SERVER['REQUEST_METHOD'] == "POST") {
        $sql = "UPDATE registration SET name=:name, email=:email, phone=:phone, CompanyName=:CompanyName, CompanyPackage=:CompanyPackage ,Domain=:Domain, JobProfile=:JobProfile WHERE id=:id";

        $res = $pdo->prepare($sql);

        $res->bindParam(':name', $_REQUEST['name']);
        $res->bindParam(':email', $_REQUEST['email']);
        $res->bindParam(':phone', $_REQUEST['phone']);
        $res->bindParam(':CompanyName', $_REQUEST['CompanyName']);
        $res->bindParam(':CompanyPackage', $_REQUEST['CompanyPackage']);
        $res->bindParam(':Domain', $_REQUEST['Domain']);
        $res->bindParam(':JobProfile', $_REQUEST['JobProfile']);
        $res->bindParam(':id', $_REQUEST['id']);

        $res->execute();

        header("location: index1.php?msg=Data Updated!");
        exit();
    } else {

        $sql = "SELECT * FROM registration WHERE id=:id";

        $res = $pdo->prepare($sql);

        $res->bindParam(':id', $_REQUEST['id']);

        $res->execute();

        if ($res->rowCount() == 1) {
            $row = $res->fetch();
        } else {
            echo "Error: Record not found.";
            exit();
        }
    }


    unset($pdo);
} catch (PDOException $e) {
    echo "Error: unable to execute SQL query " . $e->getMessage();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Student</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        body {
            background-color: #f9f9f9;
            padding: 20px;
        }
     
        form {
            max-width: 500px;
            margin: 0 auto;
            background-color: #fff;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            padding: 20px;
        }

        label {
            font-weight: bold;
        }

        input[type="text"] {
            width: 100%;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
            box-sizing: border-box;
        }

        input[type="submit"] {
            padding: 10px 20px;
            background-color: #007bff;
            color: #fff;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }

        input[type="submit"]:hover {
            background-color: #0056b3;
        }
        h3{
            text-align: center;
        }

    </style>
</head>
<body>
    <div class="container">
        <h3>Edit Student Data</h3>
        <form method="POST">
            <div class="form-group">
                <label for="name">Name:</label>
                <input type="text" id="name" name="name" class="form-control" value="<?php if (isset($row['name'])) {
                    echo $row['name'];
                } ?>">
            </div>

            <div class="form-group">
                <label for="email">Email:</label>
                <input type="text" id="email" name="email" class="form-control" value="<?php if (isset($row['email'])) {
                    echo $row['email'];
                } ?>">
            </div>

            <div class="form-group">
                <label for="phone">Phone:</label>
                <input type="text" id="phone" name="phone" class="form-control" value="<?php if (isset($row['phone'])) {
                    echo $row['phone'];
                } ?>">
            </div>

            <div class="form-group">
                <label for="CompanyName">Company Name:</label>
                <input type="text" id="CompanyName" name="CompanyName" class="form-control" value="<?php if (isset($row['CompanyName'])) {
                    echo $row['CompanyName'];
                } ?>">
            </div>
            <div class="form-group">
                <label for="Domain">Domain:</label>
                <input type="text" id="Domain" name="Domain" class="form-control" value="<?php if (isset($row['Domain'])) {
                    echo $row['Domain'];
                } ?>">
            </div>

            <div class="form-group">
                <label for="JobProfile">Job Profile:</label>
                <input type="text" id="JobProfile" name="JobProfile" class="form-control" value="<?php if (isset($row['JobProfile'])) {
                    echo $row['JobProfile'];
                   
                } ?>">
            </div>
            

            <input type="hidden" name="id" value="<?php echo $_REQUEST['id']; ?>">
            <input type="submit" value="Submit" class="btn btn-primary">
        </form>
    </div>
</body>
</html>
