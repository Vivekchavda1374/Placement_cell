<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>PHP - Multiple Form Inputs</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link href="https://cdn.datatables.net/1.11.6/css/jquery.dataTables.min.css" rel="stylesheet">
    <style>
        .container {
            margin-top: 50px;
        }

        .well {
            background-color: #f8f9fa;
            border-radius: 10px;
            padding: 20px;
        }

        .btn-success,
        .btn-danger {
            margin-bottom: 10px;
            width: calc(50% - 5px); 
        }

        .form-group {
            margin-bottom: 20px;
        }

        label {
            font-weight: bold;
        }

        .table thead th {
            font-weight: bold;
        }
    </style>
</head>

<body>

    <div class="container">
        <div class="row">
            <div class="col-md-3"></div>
            <div class="col-md-6 well">
                <h3 class="text-primary mb-4">PHP - Multiple Form Inputs</h3>
                <div class="col-md-8">
                    <form id="companyPlacementForm" method="POST" action="save.php" onsubmit="return validateForm()">

                        <div class="form-group">
                            <label for="CompanyName">Company Name</label>
                            <input type="text" id="CompanyName" name="CompanyName" placeholder="Enter here..."
                                class="form-control" required>
                        </div>

                        <div class="form-group">
                            <label for="StudentName">Student Name</label>
                            <div id="student">
                                <div class="input-group mb-2">
                                    <input type="text" name="StudentName[]" placeholder="Enter here..."
                                        class="form-control" required>
                                    <div class="input-group-append">
                                        <button type="button" class="btn btn-success" onclick="addEntry();"><span
                                                class="glyphicon glyphicon-plus">Add</span></button>
                                        <button type="button" class="btn btn-danger" onclick="removeEntry(this);"><span
                                                class="glyphicon glyphicon-minus">Delete</span></button>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="position">Position</label>
                            <input type="text" id="position" name="position" placeholder="Enter here..."
                                class="form-control" required>
                        </div>

                        <div class="text-center">
                            <button class="btn btn-primary" type="submit" name="save"><span
                                    class="glyphicon glyphicon-save"></span> Submit</button>
                        </div>
                    </form>
                </div>
                <a href="view.php">Result Find</a>

            </div>
        </div>
    </div>
    <script src="https://cdn.datatables.net/1.11.6/js/jquery.dataTables.min.js"></script>
    <!-- Initialize DataTables -->
    <script>
        $(document).ready(function () {
            $('#companyTable').DataTable();
        });
    </script>
    <script>
        function validateForm() {
            var studentNames = document.getElementsByName('StudentName[]');
            for (var i = 0; i < studentNames.length; i++) {
                if (studentNames[i].value.trim() === '') {
                    alert("Please enter all student names.");
                    return false;
                }
            }
            return true;
        }

        function addEntry() {
            var studentContainer = document.getElementById('student');
            var inputGroup = document.createElement('div');
            inputGroup.classList.add('form-group');
            var inputField = document.createElement('input');
            inputField.setAttribute('type', 'text');
            inputField.setAttribute('name', 'StudentName[]');
            inputField.setAttribute('placeholder', 'Enter here...');
            inputField.classList.add('form-control');
            inputField.required = true;
            var inputGroupAppend = document.createElement('div');
            inputGroupAppend.classList.add('input-group-append');
            var addButton = document.createElement('button');
            addButton.setAttribute('type', 'button');
            addButton.classList.add('btn', 'btn-success');
            addButton.setAttribute('onclick', 'addEntry();');
            addButton.innerHTML = '<span class="glyphicon glyphicon-plus">Add More</span>';
            var removeButton = document.createElement('button');
            removeButton.setAttribute('type', 'button');
            removeButton.classList.add('btn', 'btn-danger');
            removeButton.setAttribute('onclick', 'removeEntry(this);');
            removeButton.innerHTML = '<span class="glyphicon glyphicon-minus">Delete</span>';
            inputGroupAppend.appendChild(addButton);
            inputGroupAppend.appendChild(removeButton);
            inputGroup.appendChild(inputField);
            inputGroup.appendChild(inputGroupAppend);
            studentContainer.appendChild(inputGroup);
        }

        function removeEntry(button) {
            var inputGroup = button.parentNode.parentNode;
            inputGroup.parentNode.removeChild(inputGroup);
        }
    </script>

</body>

</html>
