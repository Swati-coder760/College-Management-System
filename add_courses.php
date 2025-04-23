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

    <h2 style="text-align: center;">Welcome to ADD COURSE</h2>
    <div class="content">
    <div class="widget">
    <div class="row"></div><br>
    <div class="row">
    <div class="col-md-3"></div>
    <div class="col-md-6">
    <form action="submit_course.php" method="post">
    <div class="form-group">
        <label for="course_name">Course Name:</label>
        <input type="text" id="course_name" name="course_name" class="form-control" required><br><br>
        
        <label for="course_code">Course Code/ID:</label>
        <input type="text" id="course_code" name="course_code" class="form-control"  required><br><br>
        
        <label for="course_code">Course Fees:</label>
        <input type="text" id="course_fees" name="course_fees" class="form-control"  required><br><br>
        
        <label for="course_description">Description:</label><br>
        <textarea id="course_description" name="course_description" class="form-control"  required></textarea><br><br>
        
        <label for="credits">Credits:</label>
        <input type="number" id="credits" name="credits" class="form-control" required><br><br>
        
        <label for="prerequisites">Prerequisites:</label>
        <input type="text" id="prerequisites" name="prerequisites"class="form-control" ><br><br>
        
        <label for="instructor">Instructor:</label>
        <input type="text" id="instructor" name="instructor" class="form-control" required><br><br>
        
        <label for="schedule">Schedule:</label>
        <input type="text" id="schedule" name="schedule"class="form-control"  placeholder="E.g., Monday 10:00 AM - 12:00 PM" required><br><br>
        
        <label for="location">Location:</label>
        <input type="text" id="location" name="location"class="form-control"  required><br><br>
        
        <label for="enrollment_limit">Enrollment Limit:</label>
        <input type="number" id="enrollment_limit" class="form-control" name="enrollment_limit" required><br><br>
        
        <label for="resources_needed">Resources Needed:</label>
        <input type="text" id="resources_needed" name="resources_needed" class="form-control" required><br><br>
        
        <label for="grading_scale">Grading Scale:</label>
        <input type="text" id="grading_scale" name="grading_scale" class="form-control" required><br><br>
        
        <label for="assessment_methods">Assessment Methods:</label>
        <input type="text" id="assessment_methods" name="assessment_methods" class="form-control" required><br><br>
        
        <label for="communication_channels">Communication Channels:</label>
        <input type="text" id="communication_channels" name="communication_channels" class="form-control" required><br><br>
        
        <label for="additional_notes">Additional Notes:</label><br>
        <textarea id="additional_notes" name="additional_notes" rows="4" cols="50" class="form-control" ></textarea><br><br>
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