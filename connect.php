<?php
$serrvername="localhost";
$username="root";
$password= "";
$database = "dry-cleaning system";

//database connection
$conn = new mysqli('localhost','root','','dry-cleaning system');
if($conn->connect_error) {
    die("Connection Failed  : " . $conn->connect_error);
}

function sanitize_input($input) {
    return htmlspecialchars(trim($input));
}
if($_SERVER["REQUEST_METHOD"] =="POST") {
    $mat = sanitize_input($_POST["mat"]);
    $pat = sanitize_input($_POST["pat"]);

    if($result->num_rows > 0) {
        echo"Login successfull";
    } else {
        echo "Invalid credentials";
    }

}
$conn->close();


?>
 


 

