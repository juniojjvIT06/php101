<?php
// Define variables and initialize with empty values
$username = $password = $confirm_password = "";
$password_err = "";
$confirm_password_err = "";

// Processing form data when form is submitted
if($_SERVER["REQUEST_METHOD"] == "POST"){

    // Validate password
    if(empty(trim($_POST["password"]))){
        $password_err = "Please enter a password.";     
    } elseif(strlen($_POST["password"]) > 6 && strlen($_POST["password"]) < 12){
        $password_err = "Password must be between 6 and 12 characters.";
    } elseif(!preg_match('/[A-Z]/', $_POST["password"])){
        $password_err = "Password must contain at least one capital letter.";
    } elseif(!preg_match('/[0-9]/', $_POST["password"])){
        $password_err = "Password must contain at least one number.";
    } elseif(!preg_match('/[\'^£$%&*()}{@#~?><>,|=_+¬-]/', $_POST["password"])){
        $password_err = "Password must contain at least one symbol.";
    } else{
        $password = trim($_POST["password"]);
    }
    
    // Validate confirm password
    if(empty(trim($_POST["confirm_password"]))){
        $confirm_password_err = "Please confirm password.";     
    } else{
        $confirm_password = trim($_POST["confirm_password"]);
        if(empty($password_err) && ($password != $confirm_password)){
            $confirm_password_err = "Password did not match.";
        }
    }
    
    // Check input errors before inserting in database
    if(empty($username_err) && empty($password_err) && empty($confirm_password_err)){
        
        // Password is valid, do something here such as saving to database
        // Replace this with actual database insertion code
        
        echo "Password is valid.";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Registration Form</title>
</head>
<body>
    <h2>Registration Form</h2>
    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
        <label>Username</label>
        <input type="text" name="username" value="<?php echo $username; ?>">
        <br><br>
        <label>Password</label>
        <input type="password" name="password" value="<?php echo $password; ?>">
        <span><?php echo $password_err; ?></span>
        <br><br>
        <label>Confirm Password</label>
        <input type="password" name="confirm_password" value="<?php echo $confirm_password; ?>">
        <span><?php echo $confirm_password_err; ?></span>
        <br><br>
        <input type="submit" value="Submit">
    </form>
</body>
</html>