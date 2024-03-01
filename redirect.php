<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve the selected role from the form data
    $role = $_POST['role'];

    // Perform redirection based on the selected role
    switch ($role) {
        case 'visitor':
            header("./visitor.html");
            break;
        case 'translator':
            header("./translatorfinal.html");
            break;
        default:
            // Handle other cases or errors
            header("./login.html");
            break;
            //hii
    }
}
?>
