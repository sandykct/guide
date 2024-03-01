<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve the selected role from the form data
    $role = $_POST['role'];

    // Perform redirection based on the selected role
    switch ($role) {
        case 'visitor':
            header("Location: /visitor.html");
            exit();
        case 'translator':
            header("Location: /translatorfinal.html");
            exit();
        default:
            // Handle other cases or errors
            header("Location: /login.html");
            exit();
    }
}
?>
