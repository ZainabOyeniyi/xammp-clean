<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $testInput = $_POST["testInput"];
    echo "Form submitted successfully! Test Input: $testInput";
} else {
    echo "Form not submitted.";
}
?>