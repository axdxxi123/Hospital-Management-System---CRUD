<?php
require '../db/dbcon.php';

if (isset($_GET['id'])) {
    $id = $_GET['id'];

    $sql = "SELECT * FROM patients WHERE patientID = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("i", $id);
    $stmt->execute();
    $result = $stmt->get_result();
    $patient = $result->fetch_assoc();
} else {
    echo "No patient ID provided.";
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Patient</title>
    <link rel="stylesheet" href="../Assets/css/edit_patient.css">
</head>
<body>
    <div class="container">
       <div class="b-btn">
            <a href="../index.php">
                <button class="back">Back</button>
            </a>
            <div class="title">
                <h1>Edit Patient details</h1>
            </div>
        </div>
        <form method="POST" action="updatebackend.php">
            <div class="form-group">
            <input type="hidden" name="patientID" value="<?= $patient['patientID'] ?>">
            </div>

            <div class="form-group">
            <label>First Name:</label>
            <input type="text" name="first_name" value="<?= $patient['first_name'] ?>" required><br>
            </div>

            <div class="form-group">
            <label>Middle Name:</label>
            <input type="text" name="middle_name" value="<?= $patient['middle_name'] ?>"><br>
            </div>

            <div class="form-group">
            <label>Last Name:</label>
            <input type="text" name="last_name" value="<?= $patient['last_name'] ?>" required><br>
            </div>

            <div class="form-group">
            <label>Birthday:</label>
            <input type="date" name="birthday" value="<?= $patient['birthday'] ?>" required><br>
            </div>

            <div class="form-group">
            <label>Age:</label>
            <input type="number" name="age" value="<?= $patient['age'] ?>" required><br>
            </div>

            <div class="form-group">
            <label>Gender:</label>
            <select name="gender" required>
                <option value="Male" <?= ($patient['gender'] == 'Male') ? 'selected' : '' ?>>Male</option>
                <option value="Female" <?= ($patient['gender'] == 'Female') ? 'selected' : '' ?>>Female</option>
            </select><br>
            </div>

            <div class="form-group">
            <label>Nationality:</label>
            <input type="text" name="nationality" value="<?= $patient['nationality'] ?>" required><br>
            </div>

            <div class="submit">
            <input type="submit" value="Update">
            </div>
        </form>
    </div>
</body>
</html>
