<!DOCTYPE html>
<html>

<head>
    <title> PHP Global Variables</title>
</head>

<body>
    <?php
    $name = "John Smith";
    // Essentially assigning a name variable to a returned array object where the content is created with the passing parameters
    $nameArray = array("John Smith", "Jane Doe", "Walter Greens", "Leon Abdul");

    // Will basically printout the entire array including index and value
    print_r($nameArray);

    // Arrays are indexable
    echo $nameArray[0];
    ?>
</body>

</html>