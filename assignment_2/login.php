<?php
require "config.php";

$error_message = "";

if (isset($_POST["submit"])) {
    $username = $_POST["username"];
    $password = $_POST["password"];

    $sql = "SELECT id, level, name FROM users WHERE username='$username' AND password='$password'";
    $result = $mysqli->query($sql);

    $row = $result->fetch_assoc();
    if ($row) {
        $_SESSION['user_id'] = $row["id"];
        $_SESSION['user_level'] = $row["level"];
        $_SESSION['user_name'] = $row["name"];

        header("Location: /index.php");
        exit();
    } else {
        $error_message = "User not found!";
    }
} else {
    if (check_is_authenticated()) {
        session_destroy();
        header("Location: /login.php");
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
    <link rel="stylesheet" href="css/bootstrap.css" />
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

        <form class="login-form" method="POST">
            <label>Username: </label>
            <input required type="text" name="username" id="username">
            <label>Password: </label>
            <input required type="password" name="password" id="password">
            <input type="submit" name="submit" id="submit" value="Login">
        </form>        
    </main>

    <?php
    require "footer.php"
    ?>
</body>

</html>