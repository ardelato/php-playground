<!-- Since email has not been initialized at the start, PHP will display an undefined variable error until you submit something -->
<?php
// Predefined Global Variables in PHP Library
$_GET;
$_POST;
$_FILES;
$_SERVER;

// checks whether the variable (email) has been declared/ not null
if (isset($_POST['email'])) {
 echo $_POST["email"];
}

?>


<!DOCTYPE html>
<html>
<head>
    <title> PHP Global Variables</title>
</head>

<body>
<!-- form action attribute is used to tell the browser what page or script to use when submit is pressed -->

<!-- form method attribute is telling the browser how to send the form data to the page or script -->
    <form action="globalVariables.php" method="post">
        <input type="text" name="email" placeholder="email"/>
        <input type="submit" name="submit" value="Submit" />
    </form>
</body>
</html>
