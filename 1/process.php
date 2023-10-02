<?php
// Establish database connection 
$mysqli = new mysqli("localhost", "root", "", "assignment_1");

// Check for connection errors
if ($mysqli->connect_error) {
    die("Connection failed: " . $mysqli->connect_error);
}

// Retrieve form data
$student_name = $_POST['student_name'];
$birthdate = $_POST['birthdate'];
$course1_grade_assignment_1 = $_POST['course1_grade_assignment_1'];
$course1_grade_assignment_2 = $_POST['course1_grade_assignment_2'];
$course1_project = $_POST['course1_project'];
$course1_grade_test = $_POST['course1_grade_test'];
$course1_absences = $_POST['course1_absences'];
$course2_grade_assignment_1 = $_POST['course2_grade_assignment_1'];
$course2_grade_assignment_2 = $_POST['course2_grade_assignment_2'];
$course2_project = $_POST['course2_project'];
$course2_grade_test = $_POST['course2_grade_test'];
$course2_absences = $_POST['course2_absences'];
$course3_grade_assignment_1 = $_POST['course3_grade_assignment_1'];
$course3_grade_assignment_2 = $_POST['course3_grade_assignment_2'];
$course3_project = $_POST['course3_project'];
$course3_grade_test = $_POST['course3_grade_test'];
$course3_absences = $_POST['course3_absences'];
$course4_grade_assignment_1 = $_POST['course4_grade_assignment_1'];
$course4_grade_assignment_2 = $_POST['course4_grade_assignment_2'];
$course4_project = $_POST['course4_project'];
$course4_grade_test = $_POST['course4_grade_test'];
$course4_absences = $_POST['course4_absences'];
$course5_grade_assignment_1 = $_POST['course5_grade_assignment_1'];
$course5_grade_assignment_2 = $_POST['course5_grade_assignment_2'];
$course5_project = $_POST['course5_project'];
$course5_grade_test = $_POST['course5_grade_test'];
$course5_absences = $_POST['course5_absences'];
$course6_grade_assignment_1 = $_POST['course6_grade_assignment_1'];
$course6_grade_assignment_2 = $_POST['course6_grade_assignment_2'];
$course6_project = $_POST['course6_project'];
$course6_grade_test = $_POST['course6_grade_test'];
$course6_absences = $_POST['course6_absences'];

$insertData= "INSERT INTO `student_grade`
(`student_name`,
`birthdate`,
`course1_grade_assignment_1`,
`course1_grade_assignment_2`,
`course1_project`,
`course1_grade_test`,
`course1_absences`,
`course2_grade_assignment_1`,
`course2_grade_assignment_2`,
`course2_project`,
`course2_grade_test`,
`course2_absences`,
`course3_grade_assignment_1`,
`course3_grade_assignment_2`,
`course3_project`,
`course3_grade_test`,
`course3_absences`,
`course4_grade_assignment_1`,
`course4_grade_assignment_2`,
`course4_project`,
`course4_grade_test`,
`course4_absences`,
`course5_grade_assignment_1`,
`course5_grade_assignment_2`,
`course5_project`,
`course5_grade_test`,
`course5_absences`,
`course6_grade_assignment_1`,
`course6_grade_assignment_2`,
`course6_project`,
`course6_grade_test`,
`course6_absences`)
VALUES
('$student_name',
'$birthdate',
'$course1_grade_assignment_1',
'$course1_grade_assignment_2',
'$course1_project',
'$course1_grade_test',
'$course1_absences',
'$course2_grade_assignment_1',
'$course2_grade_assignment_2',
'$course2_project',
'$course2_grade_test',
'$course2_absences',
'$course3_grade_assignment_1',
'$course3_grade_assignment_2',
'$course3_project',
'$course3_grade_test',
'$course3_absences',
'$course4_grade_assignment_1',
'$course4_grade_assignment_2',
'$course4_project',
'$course4_grade_test',
'$course4_absences',
'$course5_grade_assignment_1',
'$course5_grade_assignment_2',
'$course5_project',
'$course5_grade_test',
'$course5_absences',
'$course6_grade_assignment_1',
'$course6_grade_assignment_2',
'$course6_project',
'$course6_grade_test',
'$course6_absences')";



if ($mysqli->query($insertData) === TRUE) {
    header("Location: index.php?student_id=".$mysqli->insert_id);
} else {
    echo "Error: " . $sql . "<br>" . $mysqli->error;
}

$mysqli->close();
?>