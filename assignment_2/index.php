<?php
require "config.php";
block_if_not_authenticated();
?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <title>View Content</title>
    <meta name="author" content="Roselane Goncalves dos Santos" />
    <meta name="description" content="This is a database to add student grades">
    <link rel="stylesheet" href="css/styles.css" />
</head>
<?php
$sql = "SELECT id, student_name FROM student_grade";
$result = $mysqli->query($sql);

$student_data = [];
$student_id = '';
// If press Submit botton, will select the data from the student table
if (isset($_GET['student_id']) && $_GET['student_id'] != "") {
    $student_id = $_GET['student_id'];
    $sql = "SELECT * from student_grade where id=" . $student_id;
    $student_data = $mysqli->query($sql)->fetch_assoc();
}

function calc_grade($student_data, $course)
{
    if (
        isset($student_data[$course . "_grade_assignment_1"]) && isset($student_data[$course . "_grade_assignment_2"])
        && isset($student_data[$course . "_project"]) && isset($student_data[$course . "_grade_test"])
    ) {
        return $student_data[$course . "_grade_assignment_1"] + $student_data[$course . "_grade_assignment_2"] +
            $student_data[$course . "_project"] + $student_data[$course . "_grade_test"];
    }

    return "";
}

?>

<body>
    <?php
    require "header.php";
    ?>

    <main>

        <table class border="1">
            <tr>
                <td colspan="9">Grades 2023 - Computer programming - 2nd Term</td>
            </tr>
            <tr>
                <td colspan="6">
                    <form>
                        Student's name:
                        <select id="student_id" name="student_id" method="GET">
                            <option value=''></option>
                            <?php
                            while ($row = $result->fetch_assoc()) {
                                echo "<option value='" . $row["id"] . "' " . ($student_id == $row["id"] ? "selected" : "") . ">"
                                    . $row["id"] . "-" . $row["student_name"]
                                    . "</option>";
                            }
                            ?>
                        </select>

                        <button type="submit" name="btnSubmit" value="btnSubmit">Submit</button><br>
                    </form>

                </td>
                <td colspan="3">
                    Birthdate: <?= $student_data["birthdate"] ?? "" ?>
                </td>
            </tr>
            <tr>
                <td class="student-photo" colspan="9">
                    <? if ($student_data["photo"]) { ?>
                        <img src="<?=$student_data['photo']?>">
                    <? } else { ?>
                        <img src="img/avatar.png">
                    <? } ?>
                </td>
            </tr>
            <tr>
                <td colspan="9">&nbsp;</td>
            </tr>
            <tr>
                <td rowspan="2">Current courses</td>
                <td colspan="4">Module 1</td>
                <td colspan="2">Total </td>
                <td rowspan="2">Final grade</td>
                <td rowspan="2">Final attendance</td>
            </tr>

            <tr>
                <td>Assignment 1</td>
                <td>Assignment 2</td>
                <td>Project</td>
                <td>Test</td>
                <td>Grade</td>
                <td>Absence</td>
            </tr>

            <tr>
                <td>Document Automation Python</td>
                <td><?= $student_data["course1_grade_assignment_1"] ?? "" ?></td>
                <td><?= $student_data["course1_grade_assignment_2"] ?? "" ?></td>
                <td><?= $student_data["course1_project"] ?? "" ?></td>
                <td><?= $student_data["course1_grade_test"] ?? "" ?></td>
                <td><?= calc_grade($student_data, "course1") ?></td>
                <td><?= $student_data["course1_absences"] ?? "" ?></td>
                <td><?php if ($student_id) echo calc_grade($student_data, "course1") > 60 ? "Passed" : "Failed" ?></td>
                <td><?php if ($student_id) echo 100 - $student_data["course1_absences"] > 75 ? "Passed" : "Failed due to absence" ?></td>
            </tr>

            <tr>
                <td>Interface Design Using CSS</td>
                <td><?= $student_data["course2_grade_assignment_1"] ?? "" ?></td>
                <td><?= $student_data["course2_grade_assignment_2"] ?? "" ?></td>
                <td><?= $student_data["course2_project"] ?? "" ?></td>
                <td><?= $student_data["course2_grade_test"] ?? "" ?></td>
                <td><?= calc_grade($student_data, "course2") ?></td>
                <td><?= $student_data["course2_absences"] ?? "" ?></td>
                <td><?php if ($student_id) echo calc_grade($student_data, "course2") > 60 ? "Passed" : "Failed" ?></td>
                <td><?php if ($student_id) echo 100 - $student_data["course2_absences"] > 75 ? "Passed" : "Failed due to absence" ?></td>
            </tr>

            <tr>
                <td>Intro Obj Oriented Prog-Java</td>
                <td><?= $student_data["course3_grade_assignment_1"] ?? "" ?></td>
                <td><?= $student_data["course3_grade_assignment_2"] ?? "" ?></td>
                <td><?= $student_data["course3_project"] ?? "" ?></td>
                <td><?= $student_data["course3_grade_test"] ?? "" ?></td>
                <td><?= calc_grade($student_data, "course3") ?></td>
                <td><?= $student_data["course3_absences"] ?? "" ?></td>
                <td><?php if ($student_id) echo calc_grade($student_data, "course3") > 60 ? "Passed" : "Failed" ?></td>
                <td><?php if ($student_id) echo 100 - $student_data["course3_absences"] > 75 ? "Passed" : "Failed due to absence" ?></td>
            </tr>

            <tr>
                <td>Intro to Web Prog using PHP</td>
                <td><?= $student_data["course4_grade_assignment_1"] ?? "" ?></td>
                <td><?= $student_data["course4_grade_assignment_2"] ?? "" ?></td>
                <td><?= $student_data["course4_project"] ?? "" ?></td>
                <td><?= $student_data["course4_grade_test"] ?? "" ?></td>
                <td><?= calc_grade($student_data, "course4") ?></td>
                <td><?= $student_data["course4_absences"] ?? "" ?></td>
                <td><?php if ($student_id) echo calc_grade($student_data, "course4") > 60 ? "Passed" : "Failed" ?></td>
                <td><?php if ($student_id) echo 100 - $student_data["course4_absences"] > 75 ? "Passed" : "Failed due to absence" ?></td>
            </tr>

            <tr>
                <td>Relational Database</td>
                <td><?= $student_data["course5_grade_assignment_1"] ?? "" ?></td>
                <td><?= $student_data["course5_grade_assignment_2"] ?? "" ?></td>
                <td><?= $student_data["course5_project"] ?? "" ?></td>
                <td><?= $student_data["course5_grade_test"] ?? "" ?></td>
                <td><?= calc_grade($student_data, "course5") ?></td>
                <td><?= $student_data["course5_absences"] ?? "" ?></td>
                <td><?php if ($student_id) echo calc_grade($student_data, "course5") > 60 ? "Passed" : "Failed" ?></td>
                <td><?php if ($student_id) echo 100 - $student_data["course5_absences"] > 75 ? "Passed" : "Failed due to absence" ?></td>
            </tr>

            <tr>
                <td>Work Environment Comm</td>
                <td><?= $student_data["course6_grade_assignment_1"] ?? "" ?></td>
                <td><?= $student_data["course6_grade_assignment_2"] ?? "" ?></td>
                <td><?= $student_data["course6_project"] ?? "" ?></td>
                <td><?= $student_data["course6_grade_test"] ?? "" ?></td>
                <td><?= calc_grade($student_data, "course6") ?></td>
                <td><?= $student_data["course6_absences"] ?? "" ?></td>
                <td><?php if ($student_id) echo calc_grade($student_data, "course6") > 60 ? "Passed" : "Failed" ?></td>
                <td><?php if ($student_id) echo 100 - $student_data["course6_absences"] > 75 ? "Passed" : "Failed due to absence" ?></td>
            </tr>

            <tr>
                <td colspan="9">&nbsp;</td>
            </tr>
            <tr>
                <td colspan="3">Current status: finished<br>
                    Print date: 01/10/2023</td>
                <td colspan="6">Percentage of absences in relation to working hours (100 hours): maximum allowed: 25%</td>

            </tr>
        </table>

    </main>

    <?php
    require "footer.php"
    ?>
</body>

</html>