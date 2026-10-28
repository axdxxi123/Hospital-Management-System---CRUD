<?php
require '../db/dbcon.php';

if (isset($_GET['id'])) {
    $id = $_GET['id'];

    $delete_query = "DELETE FROM patients WHERE patientID = ?";
    $stmt = $conn->prepare($delete_query);
    $stmt->bind_param("i", $id);

    if ($stmt->execute()) {
        $reorder_query = "SET @new_id = 0;
                          UPDATE patients SET patientID = (@new_id := @new_id + 1) ORDER BY patientID;
                          ALTER TABLE patients AUTO_INCREMENT = 1;";

        if ($conn->multi_query($reorder_query)) {
            header("Location: listofpatients.php");
            exit();
        } else {
            die("Error reordering patient IDs: " . $conn->error);
        }
    } else {
        die("Error deleting patient: " . $stmt->error);
    }

    $stmt->close();
    $conn->close();
}
?>
