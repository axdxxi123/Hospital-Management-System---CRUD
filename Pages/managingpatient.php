<?php
require '../db/dbcon.php';

$sql = "SELECT * FROM patients";
$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Managing Patient Data</title>
    <link rel="stylesheet" href="../Assets/css/managingpatient.css">
</head>
<body>
    <div class="container">
        <div class="b-btn">
            <a href="../index.php" >
                <button class="back">Back</button>
            </a>
            <h1>Manage Patient Data</h1>
        </div>
        

        <table>
            <tr>
                <th>Patient ID</th>
                <th>First Name</th>
                <th>Middle Name</th>
                <th>Last Name</th>
                <th>Birthday</th>
                <th>Age</th>
                <th>Gender</th>
                <th>Nationality</th>
                <th>Action</th>
            </tr>

            <?php
            if ($result->num_rows > 0) {
                while ($row = $result->fetch_assoc()) {
                    echo "<tr>
                            <td>{$row['patientID']}</td>
                            <td>{$row['first_name']}</td>
                            <td>{$row['middle_name']}</td>
                            <td>{$row['last_name']}</td>
                            <td>{$row['birthday']}</td>
                            <td>{$row['age']}</td>
                            <td>{$row['gender']}</td>
                            <td>{$row['nationality']}</td>
                            <td>
                                <a href='edit_patients.php?id={$row['patientID']}'><button class='edit'>Edit</button></a>
                                <a href='delete_patient.php?id={$row['patientID']}' onclick='return confirm(\"Are you sure you want to delete this patient?\");'><button class='delete'>Delete</button></a>
                            </td>
    </form>
</td>

                        </tr>";
                }
            } else {
                echo "<tr><td colspan='9'>No patients found</td></tr>";
            }
            ?>
        </table>
    </div>  
</body>
</html>