<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add class</title>
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
        $Cname = $_POST['Cname'];
        $Cnumber = $_POST['Cnumber'];
        $Ccapacity = $_POST['Ccapacity'];
        $teacher = $_POST['Teacher'];



        $sql = "INSERT INTO class (Cname, Room_number, Ccapacity, Tid)
         VALUES ('$Cname', '$Cnumber', '$Ccapacity', '$teacher')";

        if (mysqli_query($link, $sql)) {
            echo "<b>The class has been Enroled Successfully</b> ";
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
    </header>
    <main>
        <div class="container">
            <form action="add class.php" method="post">
                <div class="mb-3">
                    <label for="class-name" class="form-label">Class Name</label>
                    <input type="text" name="Cname" class="form-control" id="class-name">
                </div>
                <div class="mb-3">
                    <label for="class-number" class="form-label">Class Number</label>
                    <input type="number" name="Cnumber" class="form-control" id="class-number">
                </div>
                <div class="mb-3">
                    <label for="class-capacity" class="form-label">Class Capacity</label>
                    <input type="number" name="Ccapacity" class="form-control" id="class-capacity">
                </div>

                <p>Select Class Teacher</p>
                <select name="Teacher">

                    <?php

                    $sql = mysqli_query($link, "SELECT Tid, Tname FROM teacher");
                    while ($row = $sql->fetch_assoc()) {
                        echo "<option value='{$row['Tid']}'>{$row['Tid']} {$row['Tname']}</option>";
                    }

                    ?>
                </select></br></br>

                <button type="submit" name="submit" class="btn btn-primary">Submit</button>
            </form>


        </div>
    </main>
    <footer>
        <div class="container">
            <p>&copy; 2023 Riston Academy. All rights reserved.</p>
        </div>
    </footer>
    <!-- Bootstrap JS -->