
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $first_name = $_POST["first_name"];
    $last_name = $_POST["last_name"];
    $email = $_POST["email"];
    $dept = $_POST["dept"];
    $address = $_POST["address"];
    $hall = $_POST["hall"];
    $roll = $_POST["roll"];
    $year = $_POST["year"];
    $sem = $_POST["sem"];
    echo "First Name: $first_name<br>";
    echo "Last Name: $last_name<br>";
    echo "Email: $email<br>";
    echo "Department: $dept<br>";
    echo "Address: $address<br>";
    echo "Hall: $hall<br>";
    echo "Roll Number: $roll<br>";
    echo "Year: $year<br>";
    echo "Semester: $sem<br>";
} else {
    header("Location: index.html");
    exit();
}
?>
