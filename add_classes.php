<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="css/form.css">
    <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
    <link rel="stylesheet" href="./css/font-awesome-4.7.0/css/font-awesome.css">
    <title>Add Class</title>
</head>

<body>
    <?php include './includes/header.php';
    ?>

    <div class="main">
        <form action="" method="post">
            <fieldset>
                <legend>Add Class</legend>
                <input type="text" name="class_name" placeholder="Class Name">
                <input type="text" name="class_id" placeholder="Class ID">
                <input type="submit" value="Submit">
            </fieldset>
        </form>
    </div>

</body>

</html>

<?php
include('init.php');
include('session.php');

if (isset($_POST['class_name'], $_POST['class_id'])) {
    $name = $_POST["class_name"];
    $id = $_POST["class_id"];
    if (empty($name) or empty($id) or preg_match("/[a-z]/i", $id)) {
        if (empty($name))
            echo '<p class="error">Please enter class</p>';
        if (empty($id))
            echo '<p class="error">Please enter class id</p>';
        if (preg_match("/[a-z]/i", $id))
            echo '<p class="error">Please enter valid class id</p>';
        exit();
    }

    $sql = "INSERT INTO `class` (`name`, `id`) VALUES ('$name', '$id')";
    $result = mysqli_query($conn, $sql);

    if (!$result) {
        echo '<script language="javascript">';
        echo 'alert("Invalid class name or class id")';
        echo '</script>';
    } else {
        echo '<script language="javascript">';
        echo 'alert("Successful)';
        echo '</script>';
    }
}

?>