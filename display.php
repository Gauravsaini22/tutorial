<!DOCTYPE html>
<html>
<head>
    <title>User Input</title>
</head>
<body>

    <h2>User Information Form</h2>

    <!-- Form to take user input -->
    <form method="post">
        Name: <input type="text" name="name" required><br><br>
        Class: <input type="text" name="class" required><br><br>
        contact:<input type="text" name="contact" required><br><br>
        <input type="submit" value="Submit">
    </form>

    <?php
    // Check if form is submitted
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Collect user input from form
        $name = $_POST['name'];
        $class = $_POST['class'];
        $contact -$_POST['contact'];  
        // Display the user input
        echo "<h3>User Details:</h3>";
        echo "Name: " . htmlspecialchars($name) . "<br>";
        echo "Class: " . htmlspecialchars($class);
    }
    ?>

</body>
</html>
