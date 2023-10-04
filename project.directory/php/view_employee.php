<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>View Employee</title>
    <link rel="stylesheet" href="style.css"> <!-- Include your CSS file here -->
</head>
<body>
    <h1>View Employee</h1>

    <?php
    // Define your database connection details
    $servername = "localhost";
    $username = "username";
    $password = "password";
    $dbname = "employee_records";

    // Create a connection to the database
    $conn = new mysqli($servername, $username, $password, $dbname);

    // Check the database connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // SQL query to select employee data (adjust table name and columns)
    $sql = "SELECT * FROM employees"; // Replace with your actual table name
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        // Output table headers
        echo "<table>";
        echo "<tr><th>Name</th><th>Email</th><th>Hours Worked</th><th>Salary</th><th>Age</th></tr>";

        // Output data of each row
        while ($row = $result->fetch_assoc()) {
            echo "<tr>";
            echo "<td>" . $row["name"] . "</td>";
            echo "<td>" . $row["email"] . "</td>";
            echo "<td>" . $row["hours_worked"] . "</td>";
            echo "<td>" . $row["salary"] . "</td>";
            echo "<td>" . $row["age"] . "</td>";
            echo "</tr>";
        }

        echo "</table>";
    } else {
        echo "No employees found.";
    }

    // Close the database connection
    $conn->close();
    ?>

</body>
</html>
