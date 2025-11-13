<?php include_once("index.html"); ?>
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Handle form submissions and store data in a database or perform other actions
    $username = $_POST["username"];
    $address = $_POST["address"];
    $maritalStatus = $_POST["marital-status"];
    $gender = $_POST["gender"];

    // Perform database insertion or other actions as needed

    // Echo a success message
    echo "Form submitted successfully!";
} else {
    // Redirect to an error page or the registration page if accessed directly
    header("Location: login.html");
    exit();
}
?>

