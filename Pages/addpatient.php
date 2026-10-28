<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add a New Patient</title>
    <link rel="stylesheet" href="../Assets/css/addpatient.css">
</head>
<body>

    <div class="container">
        <div class="b-btn">
            <a href="../index.php">
                <button class="back">Back</button>
            </a>
            <div class="title">
                <h1>New Patient details</h1>
            </div>
        </div>

        <form class="save_info" method="POST" action="backend.php">
            <div class="form-group">
                <label for="first_name">First Name</label>
                <input type="text" name="first_name" id="first_name" placeholder="Enter your first name" required>
            </div>
        
            <div class="form-group">
                <label for="middle_name">Middle Name (optional)</label>
                <input type="text" name="middle_name" id="middle_name" placeholder="Enter your middle name">
            </div>
        
            <div class="form-group">
                <label for="last_name">Last Name</label>
                <input type="text" name="last_name" id="last_name" placeholder="Enter your last name" required>
            </div>
        
            <div class="form-group">
                <label for="bday">Birthday</label>
                <input type="date" name="birthday" id="bday" required>
            </div>

            <div class="form-group">
                <label for="age">Age</label>
                <input type="number" name="age" id="age" placeholder="Age" required>
            </div>

            <div class="form-group">
                <label>Gender</label>
                <div class="gender-options">
                    <input type="radio" name="gender" id="male" value="male" required>
                    <label for="male">Male</label>

                    <input type="radio" name="gender" id="female" value="female" required>
                    <label for="female">Female</label>

                    <input type="radio" name="gender" id="other" value="other" required>
                    <label for="other">Other</label>
                </div>
            </div>
            
            <div class="form-group">
                <label for="nationality">Nationality</label>
                <input type="text" name="nationality" id="nationality" placeholder="Nationality" required>
            </div>
            <div class="submit">
                
                <button type="submit" class="btn" name="save_info">Add Patient</button>
            </div>
        </form>
    </div>
</body>
</html>