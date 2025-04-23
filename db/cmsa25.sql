-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 26, 2024 at 10:42 AM
-- Server version: 10.1.36-MariaDB
-- PHP Version: 7.0.32

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
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
  `activity_requirements` text,
  `registration_deadline` date NOT NULL,
  `activity_contact` varchar(100) NOT NULL,
  `activity_image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `activities`
--

INSERT INTO `activities` (`id`, `activity_name`, `activity_description`, `activity_category`, `activity_datetime`, `activity_location`, `activity_organizer`, `activity_requirements`, `registration_deadline`, `activity_contact`, `activity_image`) VALUES
(1, 'SPorts', 'no', 'sports', '2024-04-09 22:05:00', 'bbsr', 'lll', 'lll', '2024-04-11', 'nnn', 'uploads/Screenshot (13).png');

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
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `admin_name`, `password`, `email`, `phone`, `usertype`) VALUES
(9, 'admin', '1111', 'lopa@gmail.com', '907843879', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `assignment`
--

CREATE TABLE `assignment` (
  `assignment_id` int(11) NOT NULL,
  `course_name` varchar(255) NOT NULL,
  `title` varchar(255) NOT NULL,
  `semester` varchar(255) NOT NULL,
  `description` text,
  `course_id` int(11) NOT NULL,
  `due_date` date DEFAULT NULL,
  `max_score` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `assignment`
--

INSERT INTO `assignment` (`assignment_id`, `course_name`, `title`, `semester`, `description`, `course_id`, `due_date`, `max_score`) VALUES
(1, '', 'hjhkjhkh', 'Spring', 'khkhkh', 7799, '2024-04-19', 999),
(2, 'BCA', 'CFUNDA', '3rd', 'hkhkhkhkhk', 0, '2024-04-23', 20);

-- --------------------------------------------------------

--
-- Table structure for table `class`
--

CREATE TABLE `class` (
  `class_id` int(11) NOT NULL,
  `class_name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

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
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `class_timetable`
--

INSERT INTO `class_timetable` (`id`, `course_name`, `semester`, `section`, `timetable_image`, `created_at`) VALUES
(1, 'BCA', '1st', 'A', 'uploads/Screenshot (12).png', '2024-04-26 07:49:27');

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
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COMMENT='USBM Fees and Eligibility';

--
-- Dumping data for table `course`
--

INSERT INTO `course` (`id`, `Course`, `Fees`, `Eligibility`, `Action`) VALUES
(1, 'BCA', '150000', '10TH & +2(sc/arts/commers)', 'Apply now>'),
(2, 'BBA', '150000', '10TH & +2(sc/arts/commers)', 'Apply now>'),
(3, 'MCA', '220000', 'Graduation with 50%', 'Apply now>'),
(4, 'MBA', '220000', 'Graduation with 50%', 'Apply now>');

-- --------------------------------------------------------

--
-- Table structure for table `courses`
--

CREATE TABLE `courses` (
  `course_id` int(11) NOT NULL,
  `course_name` varchar(255) NOT NULL,
  `course_code` varchar(50) NOT NULL,
  `course_fees` int(10) NOT NULL,
  `course_description` text,
  `credits` int(11) DEFAULT NULL,
  `prerequisites` varchar(255) DEFAULT NULL,
  `instructor` varchar(100) DEFAULT NULL,
  `schedule` varchar(100) DEFAULT NULL,
  `location` varchar(100) DEFAULT NULL,
  `enrollment_limit` int(11) DEFAULT NULL,
  `resources_needed` text,
  `grading_scale` varchar(100) DEFAULT NULL,
  `assessment_methods` text,
  `communication_channels` text,
  `additional_notes` text
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `courses`
--

INSERT INTO `courses` (`course_id`, `course_name`, `course_code`, `course_fees`, `course_description`, `credits`, `prerequisites`, `instructor`, `schedule`, `location`, `enrollment_limit`, `resources_needed`, `grading_scale`, `assessment_methods`, `communication_channels`, `additional_notes`) VALUES
(1, 'BCA', '0001', 0, 'sfsfs', 7, 'BCA', 'jj', 'jj', 'jjj', 8, 'hjhh', '8', 'hhh', 'hhh', 'ssdsd'),
(2, 'BCA', '0001', 0, 'sfsfs', 7, 'BCA', 'jj', 'jj', 'jjj', 8, 'hjhh', '8', 'hhh', 'hhh', 'ssdsd');

-- --------------------------------------------------------

--
-- Table structure for table `curriculum`
--

CREATE TABLE `curriculum` (
  `curriculum_id` int(11) NOT NULL,
  `curriculum_name` varchar(255) NOT NULL,
  `curriculum_code` varchar(50) NOT NULL,
  `description` text,
  `educational_goals` text,
  `subject_areas` varchar(255) DEFAULT NULL,
  `grade_levels` varchar(100) DEFAULT NULL,
  `learning_standards` text,
  `instructional_materials` text,
  `assessment_methods` text,
  `implementation_timeline` varchar(100) DEFAULT NULL,
  `budget_allocation` decimal(10,2) DEFAULT NULL,
  `staffing_requirements` text,
  `professional_development` text,
  `evaluation_plan` text,
  `additional_notes` text
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `curriculum`
--

INSERT INTO `curriculum` (`curriculum_id`, `curriculum_name`, `curriculum_code`, `description`, `educational_goals`, `subject_areas`, `grade_levels`, `learning_standards`, `instructional_materials`, `assessment_methods`, `implementation_timeline`, `budget_allocation`, `staffing_requirements`, `professional_development`, `evaluation_plan`, `additional_notes`) VALUES
(1, 'Sports', '9988822', 'vvvv', 'no', NULL, 'A', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `ecam`
--

CREATE TABLE `ecam` (
  `id` int(11) NOT NULL,
  `indooractivity` varchar(200) NOT NULL,
  `outdooractivity` varchar(200) NOT NULL,
  `ex_date` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `exam`
--

CREATE TABLE `exam` (
  `exam_id` int(11) NOT NULL,
  `exam_name` varchar(255) NOT NULL,
  `exam_code` varchar(50) NOT NULL,
  `description` text,
  `exam_date` date DEFAULT NULL,
  `exam_time` time DEFAULT NULL,
  `location` varchar(100) DEFAULT NULL,
  `instructor` varchar(100) DEFAULT NULL,
  `total_marks` int(11) DEFAULT NULL,
  `passing_marks` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `exam`
--

INSERT INTO `exam` (`exam_id`, `exam_name`, `exam_code`, `description`, `exam_date`, `exam_time`, `location`, `instructor`, `total_marks`, `passing_marks`) VALUES
(1, 'hjhjh', 'hj', 'hh', '2024-04-17', '07:19:00', 'khkh', 'kh', 55, 5);

-- --------------------------------------------------------

--
-- Table structure for table `exams`
--

CREATE TABLE `exams` (
  `id` int(10) NOT NULL,
  `exam_name` varchar(60) NOT NULL,
  `exam_date` date NOT NULL,
  `exam_type` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `exams`
--

INSERT INTO `exams` (`id`, `exam_name`, `exam_date`, `exam_type`) VALUES
(1, 'BCA', '2024-04-09', 'Intrenal'),
(2, '', '0000-00-00', ''),
(4, '', '0000-00-00', ''),
(5, '', '0000-00-00', ''),
(6, '', '0000-00-00', ''),
(7, 'BCA1st', '2024-04-16', 'Intrenal');

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
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `faculty`
--

INSERT INTO `faculty` (`id`, `faculty_name`, `password`, `email`, `phone`, `usertype`) VALUES
(1, 'teacher1', '1111', 'lopa@gmail.com', '11111111', 'teacher');

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
  `experience` text,
  `teaching` text,
  `research` text,
  `admin` text,
  `memberships` text,
  `awards` text,
  `submission_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

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
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `newproject`
--

INSERT INTO `newproject` (`id`, `studentname`, `coursename`, `checkcoursefees`, `semester`) VALUES
(1, 'Sandhyarani Rou', 'BCA', '50000', '6th'),
(2, 'Sandhyarani Rou', 'BCA', '50000', '6th'),
(3, 'Sandhyarani Rou', 'BCA', '50000', '6th'),
(4, 'Sandhyarani Rou', 'BCA', '50000', '6th');

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
  `experience` text,
  `teaching` text,
  `research` text,
  `admin` text,
  `memberships` text,
  `awards` text,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `usertype` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `new_faculty`
--

INSERT INTO `new_faculty` (`id`, `fullname`, `gender`, `dob`, `phone`, `email`, `address`, `degree`, `institution`, `major`, `experience`, `teaching`, `research`, `admin`, `memberships`, `awards`, `username`, `password`, `usertype`) VALUES
(1, 'rrr', 'female', '0000-00-00', '9078438796', 'lopa@gmail.com', 'hghgh', 'ghghg', 'ghghg', 'ghgh', 'ghghg', 'ghghgh ', 'ghghgh', 'ghghg', 'ghghgh', 'ghghg', '', '', ''),
(2, 'Lopa', 'female', '2024-04-10', '9078438796', 'lopa@gmail.com', 'hghgh', 'MCA', 'OCA', 'Computer', 'SW', 'PHP ', 'PHP', 'ALL', 'No', 'YES', 'lopa', '1111', 'faculty');

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
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `projectdemo`
--

INSERT INTO `projectdemo` (`id`, `name`, `email`, `phone`, `usertype`) VALUES
(1, 'lipsa', 'lipsakhadanga17@gmai', 907843879, ''),
(2, 'lipsa', 'lipsakhadanga17@gmai', 907843879, ''),
(3, 'lipsa', 'lipsakhadanga17@gmai', 907843879, ''),
(4, 'lipsa', 'lipsakhadanga17@gmai', 907843879, ''),
(5, 'lipsa', 'lipsakhadanga17@gmai', 907843879, ''),
(6, 'dfdfd', 'lopa@gmail.com', 2147483647, 'faculty');

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
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

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
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `students`
--

INSERT INTO `students` (`id`, `student_id`, `first_name`, `last_name`, `date_of_birth`, `gender`, `email`, `contact_number`, `address`, `department`, `admission_year`, `course_name`, `date_of_admission`, `emergency_contact_person`, `emergency_contact_number`, `guardian_name`, `guardian_email`, `guardian_contact_number`, `student_photo`, `username`, `password`, `usertype`) VALUES
(2, '8', 'lop', 'lop', '2024-04-18', 'female', 'lopalopa2007@gmail.com', '07873399874', '22,Mohanidas Enclave,Kolathia,Khandagiri\r\n22,Mohanidas Enclave,Kolathia,Khandagiri', 'BCA', 2002, '1st', '2022-04-24', 'Rashmi Mishra', '07873399874', 'lopa', 'lopalopa2007@gmail.com', '07873399874', 'student_photos/Screenshot 2023-10-20 202044.png', 'lopa', '1111', 'student');

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
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `password`, `firstname`, `lastname`, `register_no`, `class_name`, `email`, `phoneno`, `usertype`) VALUES
(1, 'cmsa', '1111', 'ffff', 'fff333', '', '', 'lopa@gmail.com', '907843879', 'student'),
(2, 'lipsakhadanga', '1111', 'rrr', '11', 'REG20240422ZIR7', 'BCA', 'lopa@gmail.com', '907843879', 'student'),
(3, 'lipsakhadanga', '1111', 'rrr', '11', 'REG20240422ZIR7', 'BCA', 'lopa@gmail.com', '907843879', 'student'),
(4, 'lipsakhadanga', '1111', 'rrr', '11', 'REG20240422ZIR7', 'BCA', 'lopa@gmail.com', '907843879', 'student');

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
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `assignment`
--
ALTER TABLE `assignment`
  MODIFY `assignment_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

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
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `courses`
--
ALTER TABLE `courses`
  MODIFY `course_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `curriculum`
--
ALTER TABLE `curriculum`
  MODIFY `curriculum_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

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
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `faculty`
--
ALTER TABLE `faculty`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `newfaculty`
--
ALTER TABLE `newfaculty`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `newproject`
--
ALTER TABLE `newproject`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `new_faculty`
--
ALTER TABLE `new_faculty`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `projectdemo`
--
ALTER TABLE `projectdemo`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `sim`
--
ALTER TABLE `sim`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `students`
--
ALTER TABLE `students`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
