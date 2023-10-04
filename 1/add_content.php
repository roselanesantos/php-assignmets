<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <title>Add Content</title>
    <meta name="author" content="Roselane Goncalves dos Santos" />
    <meta name="description" content="This HTML is a table for ...">
    <link rel="stylesheet" href="css/styles.css" />
</head>
<body>
    <header>
        <div class="logo">
            <img src="img/logo.png" alt="Car" style="width:45%">    
        </div>  
        <h1>Add student data and grades</h1>
    </header>

    <nav>
        <a href="index.php">View Content</a> 
    </nav>
    
    <main>
        
        <form action="process.php" method="POST">
            <label for="student_name">Student name:</label><br>
            <input type="text" id="student_name" name="student_name" required><br>
            <label for="birthdate">Birthdate</label><br>
            <input type="date" id="birthdate" name="birthdate" required><br>
            <fieldset>
                <legend>Document Automation Python:</legend>
                <label for="course1_grade_assignment_1">Grade assignment 1</label><br>
                <input type="number" id="course1_grade_assignment_1" name="course1_grade_assignment_1" required min= "0" max="25"><br>
                <label for="course1_grade_assignment_2">Grade assignment 2</label><br>
                <input type="number" id="course1_grade_assignment_2" name="course1_grade_assignment_2" required min= "0" max="25"><br>
                <label for="course1_project">Grade project</label><br>
                <input type="number" id="course1_project" name="course1_project" required min= "0" max="25"><br>
                <label for="course1_grade_test">Grade test</label><br>
                <input type="number" id="course1_grade_test" name="course1_grade_test" required min= "0" max="25"><br>
                <label for="course1_absences">Absences</label><br>
                <input type="number" id="course1_absences" name="course1_absences" required min= "0" max="100"><br> 
            </fieldset>

            <fieldset>
                <legend>Interface Design Using CSS:</legend>
                <label for="course2_grade_assignment_1">Grade assignment 1</label><br>
                <input type="number" id="course2_grade_assignment_1" name="course2_grade_assignment_1" required min= "0" max="25"><br>
                <label for="course2_grade_assignment_2">Grade assignment 2</label><br>
                <input type="number" id="course2_grade_assignment_2" name="course2_grade_assignment_2" required min= "0" max="25"><br>
                <label for="course2_project">Grade project</label><br>
                <input type="number" id="course2_project" name="course2_project" required min= "0" max="25"><br>
                <label for="course2_grade_test">Grade test</label><br>
                <input type="number" id="course2_grade_test" name="course2_grade_test" required min= "0" max="25"><br>
                <label for="course2_absences">Absences</label><br>
                <input type="number" id="course2_absences" name="course2_absences" required min= "0" max="100"><br>
            </fieldset>

            <fieldset>
                <legend>Intro Obj Oriented Prog-Java:</legend>
                <label for="course3_grade_assignment_1">Grade assignment 1</label><br>
                <input type="number" id="course3_grade_assignment_1" name="course3_grade_assignment_1" required min= "0" max="25"><br>
                <label for="course3_grade_assignment_2">Grade assignment 2</label><br>
                <input type="number" id="course3_grade_assignment_2" name="course3_grade_assignment_2" required min= "0" max="25"><br>
                <label for="course3_project">Grade project</label><br>
                <input type="number" id="course3_project" name="course3_project" required min= "0" max="25"><br>
                <label for="course3_grade_test">Grade test</label><br>
                <input type="number" id="course3_grade_test" name="course3_grade_test" required min= "0" max="25"><br>
                <label for="course3_absences">Absences</label><br>
                <input type="number" id="course3_absences" name="course3_absences" required min= "0" max="100"><br>
            </fieldset>

            <fieldset>
                <legend>Intro to Web Prog using PHP:</legend>
                <label for="course4_grade_assignment_1">Grade assignment 1</label><br>
                <input type="number" id="course4_grade_assignment_1" name="course4_grade_assignment_1" required min= "0" max="25"><br>
                <label for="course4_grade_assignment_2">Grade assignment 2</label><br>
                <input type="number" id="course4_grade_assignment_2" name="course4_grade_assignment_2" required min= "0" max="25"><br>
                <label for="course4_project">Grade project</label><br>
                <input type="number" id="course4_project" name="course4_project" required min= "0" max="25"><br>
                <label for="course4_grade_test">Grade test</label><br>
                <input type="number" id="course4_grade_test" name="course4_grade_test" required min= "0" max="25"><br>
                <label for="course4_absences">Absences</label><br>
                <input type="number" id="course4_absences" name="course4_absences" required min= "0" max="100"><br>
            </fieldset>

            <fieldset>
                <legend>Relational Database:</legend>
                <label for="course5_grade_assignment_1">Grade assignment 1</label><br>
                <input type="number" id="course5_grade_assignment_1" name="course5_grade_assignment_1" required min= "0" max="25"><br>
                <label for="course5_grade_assignment_2">Grade assignment 2</label><br>
                <input type="number" id="course5_grade_assignment_2" name="course5_grade_assignment_2" required min= "0" max="25"><br>
                <label for="course5_project">Grade project</label><br>
                <input type="number" id="course5_project" name="course5_project" required min= "0" max="25"><br>
                <label for="course5_grade_test">Grade test</label><br>
                <input type="number" id="course5_grade_test" name="course5_grade_test" required min= "0" max="25"><br>
                <label for="course5_absences">Absences</label><br>
                <input type="number" id="course5_absences" name="course5_absences" required min= "0" max="100"><br>
            </fieldset>

            <fieldset>
                <legend>Work Environment Comm:</legend>
                <label for="course6_grade_assignment_1">Grade assignment 1</label><br>
                <input type="number" id="course6_grade_assignment_1" name="course6_grade_assignment_1" required min= "0" max="25"><br>
                <label for="course6_grade_assignment_2">Grade assignment 2</label><br>
                <input type="number" id="course6_grade_assignment_2" name="course6_grade_assignment_2" required min= "0" max="25"><br>
                <label for="course6_project">Grade project</label><br>
                <input type="number" id="course6_project" name="course6_project" required required min= "0" max="25"><br>
                <label for="course6_grade_test">Grade test</label><br>
                <input type="number" id="course6_grade_test" name="course6_grade_test" required required min= "0" max="25"><br>
                <label for="course6_absences">Absences</label><br>
                <input type="number" id="course6_absences" name="course6_absences" required required min= "0" max="100"><br>
            </fieldset><br>              
            <button type="submit">Submit</button><br>
        </form>

       


    </main>
    <footer>
        <small>© 2023 by Roselane Santos | All rights reserved.</small>
    </footer>
</body>
</html>