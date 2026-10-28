<?php
require '../db/dbcon.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $id = $_POST['patientID'];
    $first_name = $_POST['first_name'];
    $middle_name = $_POST['middle_name'];
    $last_name = $_POST['last_name'];
    $birthday = $_POST['birthday'];
    $age = $_POST['age'];
    $gender = $_POST['gender'];
    $nationality = $_POST['nationality'];

    $sql = "UPDATE patients SET first_name=?, middle_name=?, last_name=?, birthday=?, age=?, gender=?, nationality=? WHERE patientID=?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("ssssissi", $first_name, $middle_name, $last_name, $birthday, $age, $gender, $nationality, $id);

    if ($stmt->execute()) {
        header("Location: listofpatients.php");
        exit();
    } else {
        echo "Error updating record: " . $conn->error;
    }
}
?>
