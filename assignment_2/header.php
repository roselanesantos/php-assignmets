<header>
    <div class="logo">
        <img src="img/logo.png" alt="Car">
    </div>
    <h1>Student records</h1>


    <nav>
        <div class="btn-group">
            <?
            if (check_is_authenticated()) {
            ?>
                <a class="btn btn-primary" href="add.php">
                    Add Student
                </a>
                <?php if (check_is_admin()) { ?>
                    <a class="btn btn-primary" href="update.php">
                        Update Student
                    </a>
                    <a class="btn btn-primary" href="delete.php">
                        Delete Student
                    </a>
                <?php
                }
                ?>
                <a class="btn btn-primary" href="index.php">
                    View Student
                </a>
                <a class="btn btn-primary" href="login.php">
                    Logout
                </a>
            <?
            } else {
            ?>

                <a class="btn btn-primary" href="create_user.php">Create User</a>
            <?
            }
            ?>
        </div>
    </nav>

</header>