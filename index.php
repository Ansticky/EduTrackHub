<?php include('db.php'); ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Record Management</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <div class="container">
        <h2>Student Records</h2>
        <a href="add_student.php" class="btn">Add Student</a>
        <table>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Course</th>
                    <th>Phone</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $sql = "SELECT * FROM students";
                $result = $conn->query($sql);
                while ($row = $result->fetch_assoc()) {
                    echo "<tr>
                            <td>" . $row['id'] . "</td>
                            <td>" . $row['name'] . "</td>
                            <td>" . $row['email'] . "</td>
                            <td>" . $row['course'] . "</td>
                            <td>" . $row['phone'] . "</td>
                            <td><a href='edit_student.php?id=" . $row['id'] . "'>Edit</a> | 
                                <a href='delete_student.php?id=" . $row['id'] . "'>Delete</a></td>
                        </tr>";
                }
                ?>
            </tbody>
        </table>
    </div>
</body>
</html>
