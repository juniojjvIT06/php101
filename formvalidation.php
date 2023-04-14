<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form with Form Validation</title>
</head>
<body>

<!-- <?php

// $name ='';
// $email ='';
// $age = 0;
// $sex = '';

?> -->

<form action="formvalidation.php" method="POST">

        Name: <input type="text" name="name"  required> <br> <br>
        E-Mail: <input type="email" name="email"  required> <br> <br>
        Age: <input type="number" name="age"  required> <br> <br>
        Sex: <br> <br>
        <input type="radio" name="sex" value="Male" required>Male <br>
        <input type="radio" name="sex" value="Female" required>Female <br> <br>
        <input type="submit" name="clik">

</form>

<?php

if(isset($_POST['clik'])){

$name = test_input($_POST['name']);
$email =test_input($_POST['email']);
$age = test_input($_POST['age']);
$sex = test_input($_POST['sex']);

echo $name. "<br>";
echo $email. "<br>";
echo $age. "<br>";
echo $sex. "<br>";

}else{
    echo " No data entered.";
}



function test_input($data){

    $data = trim($data); // removes all tabs, spaces
    $data = stripslashes($data); // removes slashes (backslash)
    $data = htmlspecialchars($data); // removes all scripts

    return $data;
    
}

?>



    
</body>
</html>