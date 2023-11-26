<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="Register.css"/>
</head>
<body>
    <div class="register">
        <div class="box2">
            <div class="txt">
                <h1>USER REGISTRATION</h1>
            </div>
            <div class="all">
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
                }

                if ($_SERVER["REQUEST_METHOD"] == "POST") {
                    $firstname = $_POST["firstname"];
                    $lastname = $_POST["lastname"];
                    $email = $_POST["email"];
                    $tel = $_POST["tel"];
                    $hall = $_POST["hall"];
                    $number = $_POST["number"];

                    $sql = "INSERT INTO customers (customersFname, customersLname, customersemail, customersNo, customershall, customersroomNo )
                       VALUES ('$firstname', '$lastname', '$email', '$tel', '$hall', '$number')";

                    if ($conn->query($sql) === TRUE) {
                        echo "Registration successful!<br>";
                        echo "First Name: $firstname <br>";
                        echo "Last Name: $lastname <br>";
                        echo "E-mail: $email <br>";
                        echo "Phone Number: $tel <br>";
                        echo "Hall: $hall <br>";
                        echo "Room Number: $number <br>";
                    } else {
                        echo "Error: " . $sql . "<br>" . $conn->error;
                    }

                    $conn->close();
                } else {
                    echo "Form not submitted.";
                }
                ?>
                
                <form action="index.php" method="post">
                    <div class="first">
                        <input type="text" class="firstname" placeholder=" First Name" required id="firstname" name="firstname" class="firstname"/>
                        <input type="text" class="lastname" placeholder="Last Name" required id="lastname" name="lastname" class="lastname"/>
                    </div>
                    <div class="second">
                        <input type="email" class="email" placeholder="E-mail" required id="email" name="email"/>
                        <input type="tel" class="tel" placeholder="Phone Number" required id="tel" name="tel"/>
                    </div>
                    <div class="third">
                        <select class="typ">
                            <option><h3>Select service type</h3></option>
                            <option>Washing</option>
                            <option>Ironing</option>
                            <option>Full Package</option>
                        </select>
                    </div>
                    <div class="pick">
                        <input type="date" class="date" placeholder="Pick-up Date" required id="date" name="date"/>
                        <input type="text" class="hall" placeholder="Hall" required id="hall" name="hall"/>
                        <input type="number" class="number" placeholder="Room Number" required id="number" name="number"/>
                    </div>
                    <div class="enter">
                        <button type="submit">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>
</html>
