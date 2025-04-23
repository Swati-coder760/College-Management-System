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

    <h2 style="text-align: center;">
    <h2>Curriculum Management Form</h2>
<div class="content">
    <div class="widget">
    <div class="row"></div><br>
    <div class="row">
    <div class="col-md-3"></div>
    <div class="col-md-6">
    <form action="submit_curriculum.php" method="post">
    <div class="form-group">
        <label for="curriculum_name">Curriculum Name:</label>
        <input type="text" id="curriculum_name" name="curriculum_name" required><br><br>
        
        <label for="curriculum_code">Curriculum Code/ID:</label>
        <input type="text" id="curriculum_code" name="curriculum_code" required><br><br>
        
        <label for="description">Description:</label><br>
        <textarea id="description" name="description" rows="4" cols="50" required></textarea><br><br>
        
        <label for="educational_goals">Educational Goals/Objectives:</label><br>
        <textarea id="educational_goals" name="educational_goals" rows="4" cols="50" required></textarea><br><br>
        
        <label for="subject_areas">Subject Areas:</label>
        <input type="text" id="subject_areas" name="subject_areas" required><br><br>
        
        <label for="grade_levels">Grade Levels:</label>
        <input type="text" id="grade_levels" name="grade_levels" required><br><br>
        
        <label for="learning_standards">Learning Standards/Frameworks:</label>
        <input type="text" id="learning_standards" name="learning_standards" required><br><br>
        
        <label for="instructional_materials">Instructional Materials/Resources:</label><br>
        <textarea id="instructional_materials" name="instructional_materials" rows="4" cols="50" required></textarea><br><br>
        
        <label for="assessment_methods">Assessment Methods:</label><br>
        <textarea id="assessment_methods" name="assessment_methods" rows="4" cols="50" required></textarea><br><br>
        
        <label for="implementation_timeline">Implementation Timeline:</label>
        <input type="text" id="implementation_timeline" name="implementation_timeline" required><br><br>
        
        <label for="budget_allocation">Budget Allocation:</label>
        <input type="number" id="budget_allocation" name="budget_allocation" required><br><br>
        
        <label for="staffing_requirements">Staffing Requirements:</label><br>
        <textarea id="staffing_requirements" name="staffing_requirements" rows="4" cols="50" required></textarea><br><br>
        
        <label for="professional_development">Professional Development Needs:</label><br>
        <textarea id="professional_development" name="professional_development" rows="4" cols="50" required></textarea><br><br>
        
        <label for="evaluation_plan">Evaluation Plan:</label><br>
        <textarea id="evaluation_plan" name="evaluation_plan" rows="4" cols="50" required></textarea><br><br>
        
        <label for="additional_notes">Additional Notes:</label><br>
        <textarea id="additional_notes" name="additional_notes" rows="4" cols="50"></textarea><br><br>
        
        <input type="submit" value="Submit">
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