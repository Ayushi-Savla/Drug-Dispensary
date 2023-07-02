<?php

require_once("database.php");

$database = new Database();

if (isset($_POST['login'])) {
    $SSN = $_POST['SSN'];
    $password = $_POST['password'];
    $entity = $_POST['entity'];

    if ($entity === 'patient') {
        if ($database->patientLogin($SSN, $password)) {
            // Redirect to patient page
            header('Location: ../Templates/patient.html');
            exit();
        } else {
            $error = "Invalid SSN or password.";
        }
    }

    if ($entity === 'doctor') {
        if ($database->doctorLogin($SSN, $password)) {
            // Redirect to doctor page
            header('Location: doctor.php');
            exit();
        } else {
            $error = "Invalid SSN or password.";
        }
    }
}

?>

<!DOCTYPE html>
<html>
<head>
    <title>Login</title>
</head>
<body>
    <h1>Login</h1>
    <?php if (isset($error)) : ?>
        <p><?php echo $error; ?></p>
    <?php endif; ?>
    <form method="POST" action="">
        <label>SSN:</label>
        <input type="text" name="SSN" required><br>
        <label>Password:</label>
        <input type="password" name="password" required><br>
        <label>Entity:</label>
        <select name="entity" required>
            <option value="patient">Patient</option>
            <option value="doctor">Doctor</option>
        </select><br>
        <input type="submit" name="login" value="Login">
    </form>
</body>
</html>
