<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "dry-cleaning system";
$conn = new mysqli($servername, $username, $password, $database);

if ($conn->connect_error) {
    die("" . $conn->connect_error);
} else {
    echo "Connected successfully";

    $firstname = $_POST["firstname"];
    $lastname = $_POST["lastname"];
    $email = $_POST["email"];
    $tel = $_POST["tel"];
    $service_type = $_POST["service_type"];
    $date = $_POST["date"];
    $hall = $_POST["hall"];
    $number = $_POST["number"];

    $sql = "INSERT INTO customers (customersFname, customersLname, customersemail, customersNo, service_type, pickup_date, customershall, customersroomNo )
       VALUES ('$firstname', '$lastname', '$email', '$tel', '$service_type', '$date', '$hall', '$number')";

    if ($conn->query($sql) === TRUE) {
        echo "Registration successful!<br>";
        echo "First Name: $firstname <br>";
        echo "Last Name: $lastname <br>";
        echo "E-mail: $email <br>";
        echo "Phone Number: $tel <br>";
        echo "Service Type: $service_type <br>";
        echo "Pick-up Date: $date <br>";
        echo "Hall: $hall <br>";
        echo "Room Number: $number <br>";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();
}


// if ($_SERVER["REQUEST_METHOD"] == "POST") {
//     $firstname = $_POST["firstname"];
//     $lastname = $_POST["lastname"];
//     $email = $_POST["email"];
//     $tel = $_POST["tel"];
//     $service_type = $_POST["service_type"];
//     $date = $_POST["date"];
//     $hall = $_POST["hall"];
//     $number = $_POST["number"];

//     $sql = "INSERT INTO customers (customersFname, customersLname, customersemail, customersNo, service_type, pickup_date, customershall, customersroomNo )
//        VALUES ('$firstname', '$lastname', '$email', '$tel', '$service_type', '$date', '$hall', '$number')";

//     if ($conn->query($sql) === TRUE) {
//         echo "Registration successful!<br>";
//         echo "First Name: $firstname <br>";
//         echo "Last Name: $lastname <br>";
//         echo "E-mail: $email <br>";
//         echo "Phone Number: $tel <br>";
//         echo "Service Type: $service_type <br>";
//         echo "Pick-up Date: $date <br>";
//         echo "Hall: $hall <br>";
//         echo "Room Number: $number <br>";
//     } else {
//         echo "Error: " . $sql . "<br>" . $conn->error;
//     }

//     $conn->close();
// } else {
//     echo "Form not submitted.";
// }
?>
