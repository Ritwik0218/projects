<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];

    // Process the form submission here, e.g., send an email or store the data in a database

    // Redirect the user back to the contact page with a success message
    header("Location: contact.html?status=success");
    exit();
} else {
    // Redirect the user back to the contact page with an error message
    header("Location: contact.html?status=error");
    exit();
}
?>
