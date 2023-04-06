<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add teacher</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="style.css">
</head>

<body>
<?php 


$link = mysqli_connect("localhost", "root", "", "rishav");

if ($link == false) {
    die("Connection Failed: ");
}


if (isset($_POST['submit'])) {
    $Tname = $_POST['Tname'];
    $Tnumber = $_POST['Tnumber'];
    $Temail = $_POST['Temail'];
    $Tsalary = $_POST['Tsalary'];



    $sql = "INSERT INTO teacher (Tname, Tnumber, Temail, Tsalary)
         VALUES ('$Tname', '$Tnumber', '$Temail', '$Tsalary')";

    if (mysqli_query($link, $sql)) {
        echo "<b>The Class has been added Successfully</b> ";
    } else {
        echo "<b>Error Adding New Record.</b>";
    }
}

?>
    <header>
        <nav class="navbar navbar-expand-md navbar-light bg-light">
            <div class="container">
                <a class="navbar-brand" href="#">Riston Academy</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item">
                            <a class="nav-link" href="Add_Student.php">Add Student</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="View_Student.php">View Student</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="Add_Parents.php">Add Parent</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="View_Parents.php">View Parent</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="Add_Class.php">Add Class</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="View_Class.php">View Class</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="Add_Teacher.php">Add Teacher</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="View_Teacher.php">View Teacher</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
        <div class="jumbotron">
            <div class="container">
                <h1>Welcome to Riston Academy</h1>
                <p>Where learning is fun and exciting!</p>
            </div>
        </div>
    </header><main>

        <div class="container">
        <form action="add teacher.php" method="post">

                <div class="mb-3">
                    <label for="teacher-name" class="form-label">Name</label>
                    <input type="text" name="Tname" class="form-control" id="teacher-name">
                </div>
                <div class="mb-3">
                    <label for="teacher-contact" class="form-label">Contact Number</label>
                    <input type="tel" name="Tnumber" class="form-control" id="teacher-contact">
                </div>
                <div class="mb-3">
                    <label for="teacher-email" class="form-label">Email</label>
                    <input type="email" name="Temail" class="form-control" id="teacher-email">
                </div>
                <div class="mb-3">
                    <label for="teacher-salary" class="form-label">Annual Salary</label>
                    <input type="number" name="Tsalary" class="form-control" id="teacher-salary">
                </div>
                <button type="submit" name="submit" class="btn btn-primary">Submit</button>
            </form>

            <div>

    </main>
    <footer>
        <div class="container">
            <p>&copy; 2023 Riston Academy. All rights reserved.</p>
        </div>
    </footer>