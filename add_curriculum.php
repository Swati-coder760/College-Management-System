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

    <h2 style="text-align: center;">Curriculum Management Form</h2>
<div class="content">
    <div class="widget">
    <div class="row"></div><br>
    <div class="row">
    <div class="col-md-3"></div>
    <div class="col-md-6">
    <form action="submit_curriculum.php" method="post">
    <div class="form-group">
        <label for="curriculum_name">Curriculum Name:</label>
        <input type="text" id="curriculum_name" class="form-control" name="curriculum_name" required><br><br>
        
        <label for="curriculum_code">Curriculum Code/ID:</label>
        <input type="text" id="curriculum_code" class="form-control"  name="curriculum_code" required><br><br>
        
        <label for="description">Description:</label><br>
        <textarea id="description" name="description" rows="4" cols="50" class="form-control"  required></textarea><br><br>
        
        <label for="educational_goals">Educational Goals/Objectives:</label><br>
        <textarea id="educational_goals" name="educational_goals" class="form-control" rows="4" cols="50" required></textarea><br><br>
        
        <label for="grade_levels">Grade Levels:</label>
        <input type="text" id="grade_levels" name="grade_levels" class="form-control" required><br><br>
        
      
        
        <div class="submit-button-wrapper">

        <input type="submit" class="btn btn-primary"value="Submit"></div>
        </div>
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