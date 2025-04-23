-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 27, 2024 at 01:30 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.0.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cmsa`
--

-- --------------------------------------------------------

--
-- Table structure for table `activities`
--

CREATE TABLE `activities` (
  `id` int(11) NOT NULL,
  `activity_name` varchar(255) NOT NULL,
  `activity_description` text NOT NULL,
  `activity_category` varchar(100) NOT NULL,
  `activity_datetime` datetime NOT NULL,
  `activity_location` varchar(255) NOT NULL,
  `activity_organizer` varchar(255) NOT NULL,
  `activity_requirements` text DEFAULT NULL,
  `registration_deadline` date NOT NULL,
  `activity_contact` varchar(100) NOT NULL,
  `activity_image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `activities`
--

INSERT INTO `activities` (`id`, `activity_name`, `activity_description`, `activity_category`, `activity_datetime`, `activity_location`, `activity_organizer`, `activity_requirements`, `registration_deadline`, `activity_contact`, `activity_image`) VALUES
(1, 'SPORTS2024', 'SPORTS', 'sports', '2024-04-22 16:43:00', 'BBSR', 'USBM', '66', '2024-04-25', '888242425435', 'uploads/Screenshot (8).png');

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(10) NOT NULL,
  `admin_name` varchar(60) NOT NULL,
  `password` varchar(255) NOT NULL,
  `email` varchar(60) NOT NULL,
  `phone` varchar(60) NOT NULL,
  `usertype` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `admin_name`, `password`, `email`, `phone`, `usertype`) VALUES
(1, 'admin', '1111', 'lopa@gmail.com', '09078438795', 'admin'),
(2, 'Lopa', '1111', 'lopalopa@gmail.com', '09078438795', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `assign`
--

CREATE TABLE `assign` (
  `course_name` varchar(255) NOT NULL,
  `title` varchar(255) NOT NULL,
  `answer` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `assignment`
--

CREATE TABLE `assignment` (
  `assignment_id` int(11) NOT NULL,
  `course_name` varchar(255) NOT NULL,
  `title` varchar(255) NOT NULL,
  `semester` varchar(255) NOT NULL,
  `description` text DEFAULT NULL,
  `course_id` int(11) NOT NULL,
  `due_date` date DEFAULT NULL,
  `submitted_date` date NOT NULL,
  `max_score` int(11) DEFAULT NULL,
  `answer` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL DEFAULT 'SUBMIT',
  `student_name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `assignment`
--

INSERT INTO `assignment` (`assignment_id`, `course_name`, `title`, `semester`, `description`, `course_id`, `due_date`, `submitted_date`, `max_score`, `answer`, `status`, `student_name`) VALUES
(1, 'MCA', 'C', '1st', 'Write a program to add 2 numbers', 0, '2024-04-26', '2024-04-24', 10, 'int main(){\r\n\r\n\r\n}', 'SUBMITTED', 'student'),
(2, 'MCA', 'C', '1st', 'What is C?', 0, '2024-04-16', '0000-00-00', 10, '', 'SUBMIT', '');

-- --------------------------------------------------------

--
-- Table structure for table `assign_answer`
--

CREATE TABLE `assign_answer` (
  `id` int(11) NOT NULL,
  `course_name` varchar(255) NOT NULL,
  `title` varchar(255) NOT NULL,
  `description` text DEFAULT NULL,
  `answer` text DEFAULT NULL,
  `deposit_date` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

-- --------------------------------------------------------

--
-- Table structure for table `class`
--

CREATE TABLE `class` (
  `class_id` int(11) NOT NULL,
  `class_name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

-- --------------------------------------------------------

--
-- Table structure for table `class_timetable`
--

CREATE TABLE `class_timetable` (
  `id` int(11) NOT NULL,
  `course_name` varchar(255) NOT NULL,
  `semester` varchar(50) NOT NULL,
  `section` varchar(100) NOT NULL,
  `timetable_image` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `class_timetable`
--

INSERT INTO `class_timetable` (`id`, `course_name`, `semester`, `section`, `timetable_image`, `created_at`) VALUES
(1, 'MCA', '1st', 'A', 'uploads/Screenshot (13).png', '2024-04-27 11:19:07');

-- --------------------------------------------------------

--
-- Table structure for table `course`
--

CREATE TABLE `course` (
  `id` int(10) NOT NULL,
  `Course` varchar(30) NOT NULL,
  `Fees` varchar(50) NOT NULL,
  `Eligibility` varchar(30) NOT NULL,
  `Action` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci COMMENT='USBM Fees and Eligibility';

-- --------------------------------------------------------

--
-- Table structure for table `courses`
--

CREATE TABLE `courses` (
  `course_id` int(11) NOT NULL,
  `course_name` varchar(255) NOT NULL,
  `course_code` varchar(50) NOT NULL,
  `course_fees` int(10) NOT NULL,
  `course_description` text DEFAULT NULL,
  `credits` int(11) DEFAULT NULL,
  `prerequisites` varchar(255) DEFAULT NULL,
  `instructor` varchar(100) DEFAULT NULL,
  `schedule` varchar(100) DEFAULT NULL,
  `location` varchar(100) DEFAULT NULL,
  `enrollment_limit` int(11) DEFAULT NULL,
  `resources_needed` text DEFAULT NULL,
  `grading_scale` varchar(100) DEFAULT NULL,
  `assessment_methods` text DEFAULT NULL,
  `communication_channels` text DEFAULT NULL,
  `additional_notes` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `courses`
--

INSERT INTO `courses` (`course_id`, `course_name`, `course_code`, `course_fees`, `course_description`, `credits`, `prerequisites`, `instructor`, `schedule`, `location`, `enrollment_limit`, `resources_needed`, `grading_scale`, `assessment_methods`, `communication_channels`, `additional_notes`) VALUES
(1, 'MCA', 'Code001', 2000000, 'Computer Application', 9, 'BCA', 'Mahima', '55', 'BBSR', 50, 'YES', '90', 'good', 'good', 'yes');

-- --------------------------------------------------------

--
-- Table structure for table `curriculum`
--

CREATE TABLE `curriculum` (
  `curriculum_id` int(11) NOT NULL,
  `curriculum_name` varchar(255) NOT NULL,
  `curriculum_code` varchar(50) NOT NULL,
  `description` text DEFAULT NULL,
  `educational_goals` text DEFAULT NULL,
  `subject_areas` varchar(255) DEFAULT NULL,
  `grade_levels` varchar(100) DEFAULT NULL,
  `learning_standards` text DEFAULT NULL,
  `instructional_materials` text DEFAULT NULL,
  `assessment_methods` text DEFAULT NULL,
  `implementation_timeline` varchar(100) DEFAULT NULL,
  `budget_allocation` decimal(10,2) DEFAULT NULL,
  `staffing_requirements` text DEFAULT NULL,
  `professional_development` text DEFAULT NULL,
  `evaluation_plan` text DEFAULT NULL,
  `additional_notes` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

-- --------------------------------------------------------

--
-- Table structure for table `ecam`
--

CREATE TABLE `ecam` (
  `id` int(11) NOT NULL,
  `indooractivity` varchar(200) NOT NULL,
  `outdooractivity` varchar(200) NOT NULL,
  `ex_date` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

-- --------------------------------------------------------

--
-- Table structure for table `exam`
--

CREATE TABLE `exam` (
  `exam_id` int(11) NOT NULL,
  `exam_name` varchar(255) NOT NULL,
  `exam_code` varchar(50) NOT NULL,
  `description` text DEFAULT NULL,
  `exam_date` date DEFAULT NULL,
  `exam_time` time DEFAULT NULL,
  `location` varchar(100) DEFAULT NULL,
  `instructor` varchar(100) DEFAULT NULL,
  `total_marks` int(11) DEFAULT NULL,
  `passing_marks` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `exam`
--

INSERT INTO `exam` (`exam_id`, `exam_name`, `exam_code`, `description`, `exam_date`, `exam_time`, `location`, `instructor`, `total_marks`, `passing_marks`) VALUES
(1, 'INTERNAL', 'E001', 'NO', '2024-04-16', '08:50:00', 'BBSR', 'no', 100, 40);

-- --------------------------------------------------------

--
-- Table structure for table `exams`
--

CREATE TABLE `exams` (
  `id` int(10) NOT NULL,
  `exam_name` varchar(60) NOT NULL,
  `exam_date` date NOT NULL,
  `exam_type` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `faculty`
--

CREATE TABLE `faculty` (
  `id` int(11) NOT NULL,
  `faculty_name` varchar(60) NOT NULL,
  `password` varchar(255) NOT NULL,
  `email` varchar(60) NOT NULL,
  `phone` varchar(60) NOT NULL,
  `usertype` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

-- --------------------------------------------------------

--
-- Table structure for table `newfaculty`
--

CREATE TABLE `newfaculty` (
  `id` int(11) NOT NULL,
  `fullname` varchar(100) NOT NULL,
  `gender` enum('male','female','other') NOT NULL,
  `dob` date DEFAULT NULL,
  `phone` varchar(20) NOT NULL,
  `email` varchar(100) NOT NULL,
  `address` text NOT NULL,
  `degree` varchar(100) NOT NULL,
  `institution` varchar(100) NOT NULL,
  `major` varchar(100) NOT NULL,
  `experience` text DEFAULT NULL,
  `teaching` text DEFAULT NULL,
  `research` text DEFAULT NULL,
  `admin` text DEFAULT NULL,
  `memberships` text DEFAULT NULL,
  `awards` text DEFAULT NULL,
  `submission_date` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `newproject`
--

CREATE TABLE `newproject` (
  `id` int(10) NOT NULL,
  `studentname` varchar(15) NOT NULL,
  `coursename` varchar(20) NOT NULL,
  `checkcoursefees` varchar(30) NOT NULL,
  `semester` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `new_faculty`
--

CREATE TABLE `new_faculty` (
  `id` int(11) NOT NULL,
  `fullname` varchar(255) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `dob` date NOT NULL,
  `phone` varchar(20) NOT NULL,
  `email` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `degree` varchar(100) NOT NULL,
  `institution` varchar(100) NOT NULL,
  `major` varchar(100) NOT NULL,
  `experience` text DEFAULT NULL,
  `teaching` text DEFAULT NULL,
  `research` text DEFAULT NULL,
  `admin` text DEFAULT NULL,
  `memberships` text DEFAULT NULL,
  `awards` text DEFAULT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `usertype` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `new_faculty`
--

INSERT INTO `new_faculty` (`id`, `fullname`, `gender`, `dob`, `phone`, `email`, `address`, `degree`, `institution`, `major`, `experience`, `teaching`, `research`, `admin`, `memberships`, `awards`, `username`, `password`, `usertype`) VALUES
(1, 'New', 'female', '2024-04-22', '7676767555', 'lopalopa200711@gmail.com', 'ghghgh', 'MCA', 'USBM', 'NOTHING', 'YES', 'YES ', 'Yes', 'rere', 'erere', 'erere', 'faculty', '1111', 'faculty');

-- --------------------------------------------------------

--
-- Table structure for table `projectdemo`
--

CREATE TABLE `projectdemo` (
  `id` int(10) NOT NULL,
  `name` varchar(20) NOT NULL,
  `email` varchar(20) NOT NULL,
  `phone` int(10) NOT NULL,
  `usertype` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

-- --------------------------------------------------------

--
-- Table structure for table `sim`
--

CREATE TABLE `sim` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `currentcourse` varchar(200) NOT NULL,
  `previouscourse` varchar(200) NOT NULL,
  `phoneno` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `document` enum('+2','10th','Adhar') DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

-- --------------------------------------------------------

--
-- Table structure for table `students`
--

CREATE TABLE `students` (
  `id` int(11) NOT NULL,
  `student_id` varchar(20) NOT NULL,
  `first_name` varchar(50) NOT NULL,
  `last_name` varchar(50) NOT NULL,
  `date_of_birth` date NOT NULL,
  `gender` enum('male','female','other') NOT NULL,
  `email` varchar(100) NOT NULL,
  `contact_number` varchar(20) NOT NULL,
  `address` text NOT NULL,
  `department` varchar(100) NOT NULL,
  `admission_year` year(4) NOT NULL,
  `course_name` varchar(20) NOT NULL,
  `date_of_admission` date NOT NULL,
  `emergency_contact_person` varchar(100) NOT NULL,
  `emergency_contact_number` varchar(20) NOT NULL,
  `guardian_name` varchar(100) NOT NULL,
  `guardian_email` varchar(100) NOT NULL,
  `guardian_contact_number` varchar(20) NOT NULL,
  `student_photo` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `usertype` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `students`
--

INSERT INTO `students` (`id`, `student_id`, `first_name`, `last_name`, `date_of_birth`, `gender`, `email`, `contact_number`, `address`, `department`, `admission_year`, `course_name`, `date_of_admission`, `emergency_contact_person`, `emergency_contact_number`, `guardian_name`, `guardian_email`, `guardian_contact_number`, `student_photo`, `username`, `password`, `usertype`) VALUES
(1, 'USBM001', 'Student1', 'USBM', '2024-04-01', 'male', 'usbm@gmail.com', '544545544545', 'BBSR', '', '2024', '', '2024-04-15', 'USBM', '876767676', 'USBM', 'usbm@usbm.com', '76767677676', 'student_photos/Screenshot (8).png', 'student', '1111', 'student');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `firstname` varchar(255) NOT NULL,
  `lastname` varchar(255) NOT NULL,
  `register_no` varchar(255) NOT NULL,
  `class_name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phoneno` varchar(255) NOT NULL,
  `usertype` enum('student','admin','faculty') DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `activities`
--
ALTER TABLE `activities`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `assignment`
--
ALTER TABLE `assignment`
  ADD PRIMARY KEY (`assignment_id`);

--
-- Indexes for table `assign_answer`
--
ALTER TABLE `assign_answer`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `class`
--
ALTER TABLE `class`
  ADD PRIMARY KEY (`class_id`);

--
-- Indexes for table `class_timetable`
--
ALTER TABLE `class_timetable`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `course`
--
ALTER TABLE `course`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `courses`
--
ALTER TABLE `courses`
  ADD PRIMARY KEY (`course_id`);

--
-- Indexes for table `curriculum`
--
ALTER TABLE `curriculum`
  ADD PRIMARY KEY (`curriculum_id`);

--
-- Indexes for table `ecam`
--
ALTER TABLE `ecam`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `exam`
--
ALTER TABLE `exam`
  ADD PRIMARY KEY (`exam_id`);

--
-- Indexes for table `exams`
--
ALTER TABLE `exams`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `faculty`
--
ALTER TABLE `faculty`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `newfaculty`
--
ALTER TABLE `newfaculty`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `newproject`
--
ALTER TABLE `newproject`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `new_faculty`
--
ALTER TABLE `new_faculty`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `projectdemo`
--
ALTER TABLE `projectdemo`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sim`
--
ALTER TABLE `sim`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `students`
--
ALTER TABLE `students`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `student_id` (`student_id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `activities`
--
ALTER TABLE `activities`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `assignment`
--
ALTER TABLE `assignment`
  MODIFY `assignment_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `assign_answer`
--
ALTER TABLE `assign_answer`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `class`
--
ALTER TABLE `class`
  MODIFY `class_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `class_timetable`
--
ALTER TABLE `class_timetable`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `course`
--
ALTER TABLE `course`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `courses`
--
ALTER TABLE `courses`
  MODIFY `course_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `curriculum`
--
ALTER TABLE `curriculum`
  MODIFY `curriculum_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `ecam`
--
ALTER TABLE `ecam`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `exam`
--
ALTER TABLE `exam`
  MODIFY `exam_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `exams`
--
ALTER TABLE `exams`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `faculty`
--
ALTER TABLE `faculty`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `newfaculty`
--
ALTER TABLE `newfaculty`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `newproject`
--
ALTER TABLE `newproject`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `new_faculty`
--
ALTER TABLE `new_faculty`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `projectdemo`
--
ALTER TABLE `projectdemo`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `sim`
--
ALTER TABLE `sim`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `students`
--
ALTER TABLE `students`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
