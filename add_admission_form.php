<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <title>Dashboard</title>
    <link rel="stylesheet" href="style.css">
<style>
            .widget {
            background-color: #f2f2f2;
            padding: 20px;
            margin-left: 100px;
            margin-bottom: 20px;
            border-radius: 5px;
        }
        .widget h2 {
            margin-top: 0;
        }
        .submit-button-wrapper {
            text-align: center;
        }

    </style>
</head>
<body>
<?php
    // Include database connection
    include'sidebar.php';
    include'header.php';
?> 
    <div class="dashboard">
    <div class="widget">

    <h2 style="text-align: center;">Admission Application Form</h2>
    <div class="content">
    <div class="widget">
    <div class="row"></div><br>
    <div class="row">
    <div class="col-md-3"></div>
    <div class="col-md-6">
    <form action="submit_application.php" method="post" enctype="multipart/form-data">
    <div class="form-group">
        <!-- Personal Information -->
        <label for="first_name">First Name:</label>
        <input type="text" id="first_name" name="first_name" class="form-control"  required><br><br>
        
        <label for="last_name">Last Name:</label>
        <input type="text" id="last_name" name="last_name" class="form-control"  required><br><br>
        
        <label for="gender">Gender:</label>
        <select id="gender" name="gender"class="form-control"  required>
            <option value="">Select</option>
            <option value="Male">Male</option>
            <option value="Female">Female</option>
            <option value="Other">Other</option>
        </select><br><br>
        
        <label for="dob">Date of Birth:</label>
        <input type="date" id="dob" name="dob" class="form-control"  required><br><br>
        
        <!-- Contact Information -->
        <label for="phone">Phone Number:</label>
        <input type="tel" id="phone" name="phone" class="form-control" required><br><br>
        
        <label for="email">Email Address:</label>
        <input type="email" id="email" name="email"class="form-control"  required><br><br>
        
        <label for="address">Address:</label>
        <textarea id="address" name="address" rows="3" cols="30" class="form-control" required></textarea><br><br>
        
        <label for="city">City:</label>
        <input type="text" id="city" name="city" class="form-control"  required><br><br>
        
        <label for="state">State/Province:</label>
        <input type="text" id="state" name="state" class="form-control" required><br><br>
        
        <label for="zip">Zip/Postal Code:</label>
        <input type="text" id="zip" name="zip" class="form-control"  required><br><br>
        
        <label for="country">Country:</label>
        <input type="text" id="country" name="country" class="form-control" required><br><br>
        
        <!-- Educational Background -->
        <label for="prev_school">Previous School/College Name:</label>
        <input type="text" id="prev_school" name="prev_school"class="form-control"  required><br><br>
        
        <label for="education_level">Highest Education Level Attained:</label>
        <input type="text" id="education_level" name="education_level" class="form-control" required><br><br>
        
        <label for="grad_year">Year of Graduation:</label>
        <input type="number" id="grad_year" name="grad_year" class="form-control" required><br><br>
        
        <label for="gpa">Grade Point Average (GPA):</label>
        <input type="number" id="gpa" name="gpa" step="0.01" class="form-control" required><br><br>
        
        <!-- Program of Interest -->
        <label for="program">Program of Interest:</label>
        <input type="text" id="program" name="program"class="form-control"  required><br><br>
        
        <label for="start_date">Intended Start Date:</label>
        <input type="date" id="start_date" name="start_date" class="form-control" required><br><br>
        
        <!-- Standardized Test Scores -->
        <label for="sat_score">SAT Score:</label>
        <input type="number" id="sat_score" name="sat_score"class="form-control" ><br><br>
        
        <label for="act_score">ACT Score:</label>
        <input type="number" id="act_score" name="act_score"class="form-control" ><br><br>
        
        <label for="toefl_score">TOEFL Score:</label>
        <input type="number" id="toefl_score" name="toefl_score"class="form-control" ><br><br>
        
        <!-- Additional Information -->
        <label for="activities">Extracurricular Activities:</label>
        <textarea id="activities" name="activities" rows="3" cols="30"class="form-control" ></textarea><br><br>
        
        <label for="volunteer_exp">Volunteer Experience:</label>
        <textarea id="volunteer_exp" name="volunteer_exp" rows="3" cols="30"class="form-control" ></textarea><br><br>
        
        <!-- Essay or Personal Statement -->
        <label for="personal_statement">Personal Statement:</label><br>
        <textarea id="personal_statement" name="personal_statement" rows="5" cols="50"class="form-control" ></textarea><br><br>
        
        <!-- Documents Upload -->
        <label for="transcript">Transcript:</label>
        <input type="file" id="transcript" name="transcript" class="form-control"  accept="application/pdf"><br><br>
        
        <label for="recommendation">Letter of Recommendation:</label>
        <input type="file" id="recommendation" name="recommendation" accept="application/pdf" class="form-control" ><br><br>
        
        <!-- Declaration and Consent -->
        <input type="checkbox" id="agree" name="agree" required>
        <label for="agree">I agree to the terms and conditions.</label><br><br>
        
        <!-- Submit Button -->
        <div class="submit-button-wrapper">

<input type="submit" class="btn btn-primary"value="Submit"></div>
</div>
</div>
<div class="col-md-3"></div>
</div>
</div>
</form>

</div>
</div>
</div>

<?php
// Include database connection
include'footer.php';
?>
</html>    