<header>
    <div class="logo">
        <img src="img/logo.png" alt="Car" style="width:45%">
    </div>
    <h1>Student records</h1>
    <?php
    if (check_is_authenticated()) {
    ?>
        <nav>
            <a href="add.php">
                <button>Add Student</button>
            </a>
            <?php if (check_is_admin()) { ?>
                <a href="update.php">
                    <button>Update Student</button>
                </a>
                <a href="delete.php">
                    <button>Delete Student</button>
                </a>
            <?php
            }
            ?>
            <a href="index.php">
                <button>View Student</button>
            </a>
            <a href="login.php">
                <button>Logout</button>
            </a>
        </nav>
    <?php
    }
    ?>
</header>