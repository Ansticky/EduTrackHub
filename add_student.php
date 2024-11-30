<?php
include('db.php');

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $course = $_POST['course'];
    $phone = $_POST['phone'];

    $sql = "INSERT INTO students (name, email, course, phone) VALUES ('$name', '$email', '$course', '$phone')";
    if ($conn->query($sql) === TRUE) {
        echo "New record created successfully";
        header("Location: index.php");
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Student</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <div class="container">
        <h2>Add New Student</h2>
        <form method="POST">
            <label>Name:</label>
            <input type="text" name="name" required><br><br>
            <label>Email:</label>
            <input type="email" name="email" required><br><br>
            <label>Course:</label>
            <input type="text" name="course" required><br><br>
            <label>Phone:</label>
            <input type="text" name="phone" required><br><br>
            <button type="submit">Submit</button>
        </form>
    </div>
</body>
</html>
