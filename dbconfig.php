<?php
try{
$pdo = new PDO("mysql:host=localhost;dbname=placement", "root","");

$pdo->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);

// echo "Connection Done!";
}catch(PDOException $e){
    echo "ERROR: could not connect with DB".$e->getMessage();

}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
</body>
</html>