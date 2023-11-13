<?php
// Establish database connection 
$mysqli = new mysqli("localhost", "root", "", "assignment_1");

// Check for connection errors
if ($mysqli->connect_error) {
    die("Connection failed: " . $mysqli->connect_error);
}

// Retrieve form data
$student_name = isset($_POST['student_name']) ? $_POST['student_name']: die("Student name invalid");
$birthdate = isset($_POST['birthdate']) ? $_POST['birthdate']: die("Date invalid");
$course1_grade_assignment_1 = isset($_POST['course1_grade_assignment_1'] ) ? $_POST['course1_grade_assignment_1']: die("Number invalid");
$course1_grade_assignment_2 = isset($_POST['course1_grade_assignment_2'] ) ? $_POST['course1_grade_assignment_2']: die("Number invalid");
$course1_project = isset($_POST['course1_project']) ? $_POST['course1_project']: die("Number invalid");
$course1_grade_test = isset($_POST['course1_grade_test']) ? $_POST['course1_grade_test']: die("Number invalid");
$course1_absences = isset($_POST['course1_absences']) ? $_POST['course1_absences']: die("Number invalid");
$course2_grade_assignment_1 = isset($_POST['course2_grade_assignment_1']) ? $_POST['course2_grade_assignment_1']: die("Number invalid");
$course2_grade_assignment_2 = isset($_POST['course2_grade_assignment_2']) ? $_POST['course2_grade_assignment_2']: die("SNumber invalid");
$course2_project = isset($_POST['course2_project']) ? $_POST['course2_project']: die("Number invalid");
$course2_grade_test = isset($_POST['course2_grade_test']) ? $_POST['course2_grade_test']: die("Number invalid");
$course2_absences = isset($_POST['course2_absences']) ? $_POST['course2_absences']: die("Number invalid");
$course3_grade_assignment_1 = isset($_POST['course3_grade_assignment_1']) ? $_POST['course3_grade_assignment_1']: die("Number invalid");
$course3_grade_assignment_2 = isset($_POST['course3_grade_assignment_2']) ? $_POST['course3_grade_assignment_2']: die("Number invalid");
$course3_project = isset($_POST['course3_project']) ? $_POST['course3_project']: die("Number invalid");
$course3_grade_test = isset($_POST['course3_grade_test']) ? $_POST['course3_grade_test']: die("Number invalid");
$course3_absences = isset($_POST['course3_absences']) ? $_POST['course3_absences']: die("Number invalid");
$course4_grade_assignment_1 = isset($_POST['course4_grade_assignment_1']) ? $_POST['course4_grade_assignment_1']: die("Number invalid");
$course4_grade_assignment_2 = isset($_POST['course4_grade_assignment_2']) ? $_POST['course4_grade_assignment_2']: die("Number invalid");
$course4_project = isset($_POST['course4_project']) ? $_POST['course4_project']: die("Number invalid");
$course4_grade_test = isset($_POST['course4_grade_test']) ? $_POST['course4_grade_test']: die("Number invalid");
$course4_absences = isset($_POST['course4_absences']) ? $_POST['course4_absences']: die("Number invalid");
$course5_grade_assignment_1 = isset($_POST['course5_grade_assignment_1']) ? $_POST['course5_grade_assignment_1']: die("Number invalid");
$course5_grade_assignment_2 = isset($_POST['course5_grade_assignment_2']) ? $_POST['course5_grade_assignment_2']: die("Number invalid");
$course5_project = isset($_POST['course5_project']) ? $_POST['course5_project']: die("Number invalid");
$course5_grade_test = isset($_POST['course5_grade_test']) ? $_POST['course5_grade_test']: die("Number invalid");
$course5_absences = isset($_POST['course5_absences']) ? $_POST['course5_absences']: die("Number invalid");
$course6_grade_assignment_1 = isset($_POST['course6_grade_assignment_1']) ? $_POST['course6_grade_assignment_1']: die("Number invalid");
$course6_grade_assignment_2 = isset($_POST['course6_grade_assignment_2']) ? $_POST['course6_grade_assignment_2']: die("Number invalid");
$course6_project = isset($_POST['course6_project']) ? $_POST['course6_project']: die("Number invalid");
$course6_grade_test = isset($_POST['course6_grade_test']) ? $_POST['course6_grade_test']: die("Number invalid");
$course6_absences = isset($_POST['course6_absences']) ? $_POST['course6_absences']: die("Number invalid");

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