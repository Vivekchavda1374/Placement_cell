<?php
require_once("dbconfig.php");

if(isset($_GET['id'])) {
    $id = $_GET['id'];

    try {
        $stmt = $pdo->prepare("DELETE FROM companydetails WHERE id = :id");
        $stmt->bindParam(':id', $id, PDO::PARAM_INT);
        $stmt->execute();

        header("Location: index1.php");
        exit();
    } catch(PDOException $e) {
        echo "Error: " . $e->getMessage();
       
    }
} else {
    header("Location: error.php");
    exit();
}
?>
