
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

    <h2 style="text-align: center;">Extra Curricular Application Entry Form</h2>
    <div class="content">
    <div class="widget">
    <div class="row"></div><br>
    <div class="row">
    <div class="col-md-3"></div>
    <div class="col-md-6">
    <form action="submit_extracurricular_activity.php" method="post" enctype="multipart/form-data">
            <div class="form-group">

<h2></h2>

  
  <label for="activity_name">Activity Name:</label><br>
  <input type="text" id="activity_name" class="form-control" name="activity_name"><br>
  
  <label for="activity_description">Description:</label><br>
  <textarea id="activity_description"class="form-control"  name="activity_description"></textarea><br>
  
  <label for="activity_category">Category:</label><br>
  <select id="activity_category" class="form-control" name="activity_category">
    <option value="sports">Sports</option>
    <option value="cultural">Cultural</option>
    <option value="academic">Academic</option>
  </select><br>
  
  <label for="activity_datetime">Date/Time:</label><br>
  <input type="datetime-local"class="form-control"  id="activity_datetime" name="activity_datetime"><br>
  
  <label for="activity_location">Location:</label><br>
  <input type="text" id="activity_location"class="form-control"  name="activity_location"><br>
  
  <label for="activity_organizer">Organizer:</label><br>
  <input type="text" id="activity_organizer"class="form-control"  class="form-control" name="activity_organizer"><br>
  
  <label for="activity_requirements">Participant Requirements:</label><br>
  <textarea id="activity_requirements" name="activity_requirements"class="form-control" ></textarea><br>
  
  <label for="registration_deadline">Registration Deadline:</label><br>
  <input type="date" id="registration_deadline"class="form-control"  name="registration_deadline"><br>
  
  <label for="activity_contact">Contact Information:</label><br>
  <input type="text" id="activity_contact" class="form-control" name="activity_contact"><br>
  
  <label for="activity_image">Image/Logo:</label><br>
  <input type="file" id="activity_image" class="form-control" accept="image/*" name="activity_image"><br>
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