<?php
require "config.php";

$error_message = "";

if (isset($_POST["submit"])) {
    $name = $_POST["name"];
    $username = $_POST["username"];
    $password = $_POST["password"];

    $sql = "INSERT INTO USERS(level, name, username, password) VALUES('user', '$name', '$username', '$password')";

    try {

        if ($mysqli->query($sql) === TRUE) {
            header("Location: login.php");
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
    <title>View Content</title>
    <meta name="author" content="Roselane Goncalves dos Santos" />
    <meta name="description" content="This is a database to add student grades">
    <link rel="stylesheet" href="css/styles.css" />
</head>

<body>
    <?php
    require "header.php";
    ?>

    <main>
        <span class="error-message">
            <?php echo $error_message ?>
        </span>

        <form class="create-user-form" method="POST">
            <label>Name: </label>
            <input required type="text" name="name" id="name">
            <label>Username: </label>
            <input required type="text" name="username" id="username">
            <label>password: </label>
            <input required type="password" name="password" id="password">
            <input type="submit" name="submit" id="submit" value="Login">
        </form>
    </main>

    <?php
    require "footer.php"
    ?>
</body>

</html>