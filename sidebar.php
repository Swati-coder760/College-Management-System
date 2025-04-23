<?php
session_start();
include 'db_connection.php';
$user=$_SESSION['username'] ;
$usertype=$_SESSION['usertype'] ;

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Header with Sidebar</title>
    <link rel="stylesheet" href="style.css">

<style>
   .menu-link {
    font-size: 8px; /* Adjust the font size as needed */
}

    </style>
</head>
<body>
    <div class="sidebar" style="width:300px">
        <img src="image/b1.jpg" alt="your logo">
       
        <?php 
        if($usertype==='student')
        {
            ?>
       <nav class="navbar">
    <ul >
        <li>
            <a href="#" style='font-size:22px' >Dashboard</a>
        </li>
        <li>
            <a href="#" style='font-size:22px' >Student Management</a>
            <ul >
                <li><a href="student_profile.php" style='font-size:16px'>Student Profile</a></li>
            </ul>
        </li>
        <li>
            <a href="#" style='font-size:22px'>View Course</a>
            <ul class="submenu" >
            <li><a href="view_courses.php" style='font-size:16px'>View Course</a></li>
            </ul>
        </li>
        <li>
            <a href="#" style='font-size:22px'>View extracurricular Activity</a>
            <ul class="submenu" >
            <li><a href="view_extracurricular_activities.php" style='font-size:16px'>View extracurricular activities</a></li>
            </ul>
        </li>
        <li>
            <a href="#" style='font-size:22px'>Assignments Management</a>
            <ul class="submenu" >
            <li><a href="assign.php" style='font-size:16px'>View Assignment</a></li>
            </ul>
        </li>
        <li>
            <a href="#" style='font-size:22px'>Time Table Management</a>
            <ul class="submenu" >
            <li><a href="view_timetable.php" style='font-size:16px'>View Time Table</a></li>
            </ul>
        </li>
        <li>
            <a href="#" style='font-size:22px'>Exam Mangement</a>
            <ul class="submenu" >
            <li><a href="view_exam.php" style='font-size:16px'>View Exam Schedule</a></li>
            </ul>
        </li>


      
      
      
        </li>
        <li>
            <a href="#" style='font-size:22px'>SESSION OUT</a>
            <ul class="submenu" >
            <li><a href="logout.php" style='font-size:16px'>LOG OUT</a></li>
            </ul>
        </li>
        <!-- Add more menu items as needed -->
    </ul>
</nav>
        <?php
        }
        ?>
                <?php 
        if($usertype==='faculty')
        {
            ?>
       <nav class="navbar">
    <ul >
        <li>
            <a href="#" style='font-size:22px' >Dashboard</a>
        </li>
        <li>
            <a href="#" style='font-size:22px' >Teacher Management</a>
            <ul >
                <li><a href="teacher_profile.php" style='font-size:16px'>Teacher Profile</a></li>
            </ul>
        </li>
        <li>
            <a href="#" style='font-size:22px' >Student Management</a>
            <ul >
             <li><a href="view_student.php" style='font-size:16px'>View All Student </a></li>
            </ul>
        </li>
        <li>
            <a href="#" style='font-size:22px' >Course Management</a>
            <ul >
                <li><a href="add_courses.php" style='font-size:16px'>Add Courses</a></li>
                <li><a href="view_courses.php" style='font-size:16px'>View Courses</a></li>
            </ul>
        </li>
      
        <li>
            <a href="#" style='font-size:22px'>Assignments Management</a>
            <ul class="submenu" >
            <li><a href="add_assignments.php" style='font-size:16px'>Add Assignment</a></li>
            <li><a href="view_update_assignments.php" style='font-size:16px'>Update Assignment</a></li>
            <li><a href="view_assignments.php" style='font-size:16px'>View Assignment</a></li>
            </ul>
        </li> 
         <li>
            <a href="#" style='font-size:22px'>Time Table Management</a>
            <ul class="submenu" >
            <li><a href="add_timetable.php" style='font-size:16px'>Add Time Table </a></li>
            <li><a href="view_update_timetable.php" style='font-size:16px'>Update Time Table</a></li>
            <li><a href="view_timetable.php" style='font-size:16px'>View Time Table</a></li>
            </ul>
        </li>
         <li>
            <a href="#" style='font-size:22px'>Add Exam Details</a>
            <ul class="submenu" >
            <li><a href="add_exam.php" style='font-size:16px'>Create Exam Schedule</a></li>
            <li><a href="view_update_exam.php" style='font-size:16px'> Exam Schedule(update/delete)</a></li>
            <li><a href="view_exam.php" style='font-size:16px'> Exam Schedule(view)</a></li>

            </ul>
        </li>
        <li>
            <a href="#" style='font-size:22px'>SESSION OUT</a>
            <ul class="submenu" >
            <li><a href="logout.php" style='font-size:16px'>LOG OUT</a></li>
            </ul>
        </li>
        <!-- Add more menu items as needed -->
    </ul>
</nav>

        <?php
        }
        ?>

<?php 
        if($usertype==='admin')
        {
            ?>
<nav class="navbar">
    <ul >
        <li>
            <a href="#" style='font-size:22px' >Dashboard</a>
        </li>
        <li>
            <a href="#" style='font-size:22px' >Student Management</a>
            <ul >
            <li><a href="add_student.php" style='font-size:16px'>Add Students</a></li>
            <li><a href="view_update_student.php" style='font-size:16px'>Update Student information</a></li>

             <li><a href="view_student.php" style='font-size:16px'>View All Student </a></li>
            </ul>
        </li>
        <li>
            <a href="#" style='font-size:22px'>Faculty/Staff Management</a>
            <ul class="submenu" >
            <li><a href="add_faculty_inf.php" style='font-size:16px'>Add Faculty/Staff</a></li>
            <li><a href="view_update_faculty.php" style='font-size:16px'>Update Faculty/Staff information</a></li>
            <li><a href="view_faculty.php" style='font-size:16px'>View Faculty/Staff information</a></li>
            </ul>
        </li>
        <!--<li>
            <a href="#" style='font-size:22px'>Registrations Management</a>
            <ul class="submenu" >
            <li><a href="enroll_student.php" style='font-size:16px'>Registration Management(For Student)</a></li>
            <li><a href="enroll_staff.php" style='font-size:16px'>Registration Management(For Staff)</a></li>

            </ul>      
        </li>-->
        <li>
            <a href="#" style='font-size:22px'>Courses Management </a>
            <ul class="submenu" >
            <li><a href="view_update_courses.php" style='font-size:16px'>Course Management(Update)</a></li>
            <li><a href="view_courses.php" style='font-size:16px'>Course Management(View)</a></li>
            </ul>
        </li>
         <li>
            <a href="#" style='font-size:22px'> Extracurricular activities Management</a>
            <ul class="submenu" >
            <li><a href="add_extracurricular_activities.php" style='font-size:16px'>Extracurricular activities(New)</a></li>
            <li><a href="view_update_extracurricular_activities.php" style='font-size:16px'>Extracurricular activities(Update)</a></li>
            <li><a href="view_extracurricular_activities.php" style='font-size:16px'>Extracurricular activities(View)</a></li>
            </ul>
        </li>
        

        <li>
            <a href="#" style='font-size:22px'>Exam Mangement</a>
            <ul class="submenu" >
            <li><a href="view_update_exam.php" style='font-size:16px'> Exam Schedule(update/delete)</a></li>
            <li><a href="view_exam.php" style='font-size:16px'> Exam Schedule(view)</a></li>
            </ul>
        </li>

        <li>
            <a href="#" style='font-size:22px'>SESSION OUT</a>
            <ul class="submenu" >
            <li><a href="logout.php" style='font-size:16px'>LOG OUT</a></li>
            </ul>
        </li>
        <!-- Add more menu items as needed -->
    </ul>
</nav>

        <?php
        }
        ?>

    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

  <script>
</script>
</body>
</html>