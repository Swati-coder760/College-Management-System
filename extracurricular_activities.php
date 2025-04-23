<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Extracurricular Activity Form</title>
</head>
<body>

<h2>Extracurricular Activity Form</h2>

<form action="#" method="post" enctype="multipart/form-data">
  
  <label for="activity_name">Activity Name:</label><br>
  <input type="text" id="activity_name" name="activity_name"><br>
  
  <label for="activity_description">Description:</label><br>
  <textarea id="activity_description" name="activity_description"></textarea><br>
  
  <label for="activity_category">Category:</label><br>
  <select id="activity_category" name="activity_category">
    <option value="sports">Sports</option>
    <option value="cultural">Cultural</option>
    <option value="academic">Academic</option>
  </select><br>
  
  <label for="activity_datetime">Date/Time:</label><br>
  <input type="datetime-local" id="activity_datetime" name="activity_datetime"><br>
  
  <label for="activity_location">Location:</label><br>
  <input type="text" id="activity_location" name="activity_location"><br>
  
  <label for="activity_organizer">Organizer:</label><br>
  <input type="text" id="activity_organizer" name="activity_organizer"><br>
  
  <label for="activity_requirements">Participant Requirements:</label><br>
  <textarea id="activity_requirements" name="activity_requirements"></textarea><br>
  
  <label for="registration_deadline">Registration Deadline:</label><br>
  <input type="date" id="registration_deadline" name="registration_deadline"><br>
  
  <label for="activity_contact">Contact Information:</label><br>
  <input type="text" id="activity_contact" name="activity_contact"><br>
  
  <label for="activity_image">Image/Logo:</label><br>
  <input type="file" id="activity_image" accept="image/*" name="activity_image"><br>
  
  <input type="submit" value="Submit">
</form>

</body>
</html>
