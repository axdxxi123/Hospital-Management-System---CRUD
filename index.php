<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome to our Hospital</title>
    <link rel="stylesheet" href="Assets/css/landingpage.css">
</head>
<body>

    <div class="container">
        <h1>Welcome to our Hospital</h1>
        <p>Our Patient's health is our priority. Please choose an option below:</p>

        <div class="button-container">
            <a href="Pages/addpatient.php" class="button">Add a New Patient</a>
            <a href="Pages/listofpatients.php" class="button">View List of Patients</a>
            <a href="Pages/managingpatient.php" class="button">Manage Patient Data</a>
        </div>
    </div>

</body>
</html>