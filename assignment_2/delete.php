<?php
require "config.php";
block_if_not_authenticated();
block_if_not_admin();


$error_message = "";

if (isset($_GET["student_id"])) {
    $student_id = $_GET["student_id"];

    $sql = "DELETE FROM student_grade WHERE id=$student_id";
    $result = $mysqli->query($sql);

    try {

        if ($mysqli->query($sql) === TRUE) {
            header("Location: index.php");
            exit();
        } else {
            $error_message = "Error: " . $mysqli->error;
        }
    } catch (mysqli_sql_exception $e) {
        $error_message = "Error: " . $e->getMessage();
    }
}
?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <title>Delete Content</title>
    <meta name="author" content="Roselane Goncalves dos Santos" />
    <meta name="description" content="This is a database to delete student grades">
    <link rel="stylesheet" href="css/bootstrap.css" />
    <link rel="stylesheet" href="css/styles.css" />
</head>

<body>
    <?php
    require "header.php";

    $sql = "SELECT id, student_name FROM student_grade";
    $result = $mysqli->query($sql);
    ?>

    <main>
        <span class="error-message">
            <?php echo $error_message ?>
        </span>

        <form>
            Student's name:
            <select class="form-control w-30 d-inline-block" id="student_id" name="student_id" method="GET">
                <option value=''></option>
                <?php
                while ($row = $result->fetch_assoc()) {
                    echo "<option value='" . $row["id"] . "' " . ($student_id == $row["id"] ? "selected" : "") . ">"
                        . $row["id"] . "-" . $row["student_name"]
                        . "</option>";
                }
                ?>
            </select>

            <button type="submit" name="btnSubmit" class="btn btn-primary" value="btnSubmit">Submit</button><br>
        </form>
    </main>
    <?php
    require "footer.php"
    ?>
</body>

</html>