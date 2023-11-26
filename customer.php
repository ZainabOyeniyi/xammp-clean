<?php
// Include the database connection file
include 'connect.php';

// Initialize variables to hold form data
$firstName = $lastName = $phone = $email = $servicesRequired = $address = "";

// Process form data when form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Collect and sanitize the input values
    $firstName = $conn->real_escape_string($_POST['firstName']);
    $lastName = $conn->real_escape_string($_POST['lastName']);
    $phone = $conn->real_escape_string($_POST['phone']);
    $email = $conn->real_escape_string($_POST['email']);
    $servicesRequired = $conn->real_escape_string($_POST['servicesRequired']);
    $address = $conn->real_escape_string($_POST['address']);

    // SQL query to insert the data into the database
    $sql = "INSERT INTO Customers (FirstName, LastName, Phone, Email, ServicesRequired, Address) VALUES (?, ?, ?, ?, ?, ?)";

    // Prepare a prepared statement
    if ($stmt = $conn->prepare($sql)) {
        // Bind variables to the prepared statement as parameters
        $stmt->bind_param("ssssss", $firstName, $lastName, $phone, $email, $servicesRequired, $address);

        // Attempt to execute the prepared statement
        if ($stmt->execute()) {
            echo "<p>New customer added successfully.</p>";
        } else {
            echo "<p>Error: " . $stmt->error . "</p>";
        }

        // Close statement
        $stmt->close();
    } else {
        echo "<p>Error: " . $conn->error . "</p>";
    }

    // Close the database connection
    $conn->close();
}
?>
