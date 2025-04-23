<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admission process management</title>
</head>
<body>
    <h2>Admission process management</h2>
    <form action="submit_apm.php" method="post">
        <label for="studentname">Student name:</label><br>
        <input type="text" id="studentname" name="studentname" required><br><br>
        
        <label for="coursename">Course name:</label><br>
        <input type="text" id="coursename" name="coursename" required><br><br>
        
        <label for="checkcoursefees">Check course fees:</label><br>
        <input type="text" id="checkcoursefees" name="checkcoursefees" required><br><br>
        
        <label for="semester">Semester:</label><br>
        <input type="text" id="semester" name="semester" required><br><br>
        
        <input type="submit" value="Register">
    </form>
</body>
</html>
