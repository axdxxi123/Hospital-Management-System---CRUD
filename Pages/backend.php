<?php
require '../db/dbcon.php';

if (isset($_POST['save_info'])) {
    $first_name = mysqli_real_escape_string($conn, $_POST['first_name']);
    $middle_name = mysqli_real_escape_string($conn, $_POST['middle_name']);
    $last_name = mysqli_real_escape_string($conn, $_POST['last_name']);
    $birthday = mysqli_real_escape_string($conn, $_POST['birthday']); 
    $age = mysqli_real_escape_string($conn, $_POST['age']); 
    $gender = mysqli_real_escape_string($conn, $_POST['gender']);
    $nationality = mysqli_real_escape_string($conn, $_POST['nationality']);

    if ($first_name != "" && $last_name != "" && $birthday != "" && $age != "" && $gender != "" && $nationality != "") {
        $sql = "INSERT INTO patients (first_name, middle_name, last_name, birthday, age, gender, nationality) 
                VALUES ('$first_name', '$middle_name', '$last_name', '$birthday', '$age', '$gender', '$nationality')";
        
        $result = mysqli_query($conn, $sql);
        
        if ($result) {
            header("Location: listofpatients.php");
            exit(0);
        } else {
            echo "Error: " . mysqli_error($conn);
        }
    } else {
        echo "All fields are required.";
    }

    mysqli_close($conn);
}
?>