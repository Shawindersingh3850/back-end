<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Student</title>
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
        $Sname = $_POST['Sname'];
        $Sblood = $_POST['Sblood-group'];
        $Sgender = $_POST['Sgender'];
        $Pid = $_POST['Parents'];
        $Cid = $_POST['Class'];

        if ($_POST['Sgender'] == 'male') {
            $Sgender = "male";
        } elseif ($_POST['Sgender'] == 'female') {
            $Sgender = "female";
        } elseif ($_POST['Sgender'] == 'not-specified') {
            $Sgender = "Prefer Not To Say";
        }

        $sql = "INSERT INTO students (Sname, Sbloodgroup, Sgender, Pid, Cid)
         VALUES ('$Sname', '$Sblood', '$Sgender', '$Pid', '$Cid')";

        if (mysqli_query($link, $sql)) {
            echo "<b>The Student has been Enroled Successfully</b> ";
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
            <form action="add student.php" method="post">

                <div class="mb-3">
                    <label for="name" class="form-label">Name</label>
                    <input type="text" name="Sname" class="form-control" id="name">
                </div>
                <div class="mb-3">
                    <label for="blood-group" class="form-label">Blood-Group</label>
                    <input type="text" class="form-control" name="Sblood-group" id="blood-group">
                </div>
                <div class="mb-3">
                    <label for="gender" class="form-label">Gender</label>
                    <select class="form-select" name="Sgender" id="gender">
                        <option selected>Select gender</option>
                        <option name="Sgender" value="male">Male</option>
                        <option name="Sgender" value="female">Female</option>
                        <option name="Sgender" value="not-specified">Prefer not to say</option>
                    </select></br></br>

                    <p>Select Parents</p>
                    <select name="Parents">

                        <?php

                        $sql = mysqli_query($link, "SELECT Pid, Pname FROM parents");
                        while ($row = $sql->fetch_assoc()) {
                            echo "<option value='{$row['Pid']}'>{$row['Pid']} {$row['Pname']}</option>";
                        }

                        ?>
                    </select></br></br>

                    <p>Select Class</p>
                    <select name="Class">

                        <?php

                        $sql = mysqli_query($link, "SELECT Cid, Cname FROM class");
                        while ($row = $sql->fetch_assoc()) {
                            echo "<option value='{$row['Cid']}'>{$row['Cid']} {$row['Cname']}</option>";
                        }

                        ?>
                    </select></br></br>

                </div>
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