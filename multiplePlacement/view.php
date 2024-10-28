<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Company Placement Table</title>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.datatables.net/1.11.6/css/jquery.dataTables.min.css" rel="stylesheet">
    <style>
        .mt-5 {
            margin-top: 3rem;
        }
        .bg-info {
            background-color: #17a2b8 !important; 
        }
    </style>
</head>
<body>
<?php
include '../includes/header.php';
?>
<div class="container mt-5">
    <div class="row">
        <div class="col-md-12">
            <div class="table-responsive">
                <table id="companyTable" class="table table-bordered">
                    <thead class="bg-info text-white">
                        <tr>
                            <th>Company Name</th>
                            <th>Student Name</th>
                            <th>Position</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        require 'conn.php';
                        $query = mysqli_query($conn, 'SELECT * FROM `companyplacement`') or die(mysqli_error($conn));
                        while ($fetch = mysqli_fetch_array($query)) {
                            ?>
                            <tr>
                                <td><?php echo $fetch['CompanyName'] ?></td>
                                <td><?php $studentNames = explode('<br/>', $fetch['StudentName']); echo implode('<br/>', $studentNames); ?></td>
                                <td><?php echo $fetch['Position'] ?></td>
                            </tr>
                            <?php
                        }
                        ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

<script src="https://cdn.datatables.net/1.11.6/js/jquery.dataTables.min.js"></script>

<script>
    $(document).ready(function() {
        $('#companyTable').DataTable();
    });
</script>
</body>
</html>
