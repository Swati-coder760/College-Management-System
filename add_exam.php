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

    <h2 style="text-align: center;">Add Exam Details</h2>
    <div class="content">
    <div class="widget">
    <div class="row"></div><br>
    <div class="row">
    <div class="col-md-3"></div>
    <div class="col-md-6">
    <form action="submit_exam.php" method="post">
    <div class="form-group">
        <label for="exam_name">Exam Name:</label>
        <input type="text" id="exam_name" class="form-control" name="exam_name" required><br>

        <label for="exam_code">Exam Code:</label>
        <input type="text" id="exam_code" class="form-control" name="exam_code" required>

        <label for="description">Description:</label>
        <textarea id="description" name="description" class="form-control"></textarea>

        <label for="exam_date">Exam Date:</label>
        <input type="date" id="exam_date" name="exam_date" class="form-control" required>

        <label for="exam_time">Exam Time:</label>
        <input type="time" id="exam_time" name="exam_time" class="form-control"required>

        <label for="location">Location:</label>
        <input type="text" id="location" name="location"class="form-control">

        <label for="instructor">Instructor:</label>
        <input type="text" id="instructor" name="instructor"class="form-control">

        <label for="total_marks">Total Marks:</label>
        <input type="number" id="total_marks" name="total_marks"class="form-control" required>

        <label for="passing_marks">Passing Marks:</label>
        <input type="number" id="passing_marks" name="passing_marks" class="form-control"required>
        <br>
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