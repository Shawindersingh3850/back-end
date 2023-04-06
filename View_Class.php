<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>view class</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="style.css">
</head>

<body>
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
        <table id="tbl">
                    <tr>

                        <th width="200px">Class ID</br>
                            <hr>
                        </th>

                        <th width="200px">Class Name</br>
                            <hr>
                        </th>

                        <th width="200px">Room Number</br>
                            <hr>
                        </th>

                        <th width="200px">Class Capacity
                            </br>
                            <hr>
                        </th>

                        <th width="200px">Teacher ID</br>
                            <hr>
                        </th>

                    </tr>

                    <?php

                    $link = mysqli_connect("localhost", "root", "", "rishav");

                    $sql = mysqli_query($link, "SELECT Cid, Cname, Room_number, Ccapacity, Tid FROM class");
                    while ($row = $sql->fetch_assoc()) {
                        echo "
                <tr>
                <td>{$row['Cid']}</td>
                <td>{$row['Cname']}</td>
                <td>{$row['Room_number']}</td>
                <td>{$row['Ccapacity']}</td>
                <td>{$row['Tid']}</td>
                <tr>";
                    }
                    ?>
                </table>
        </div>
    </main>
    <footer>
        <div class="container">
            <p>&copy; 2023 Riston Academy. All rights reserved.</p>
        </div>
    </footer>
    <!-- Bootstrap JS -->