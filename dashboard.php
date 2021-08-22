<?php
include("init.php");

$no_of_classes = mysqli_fetch_array(mysqli_query($conn, "SELECT COUNT(*) FROM `class`"));
$no_of_students = mysqli_fetch_array(mysqli_query($conn, "SELECT COUNT(*) FROM `students`"));
$no_of_result = mysqli_fetch_array(mysqli_query($conn, "SELECT COUNT(*) FROM `result`"));
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
    <link rel="stylesheet" href="./css/font-awesome-4.7.0/css/font-awesome.css">
    <title>SRM Dashboard</title>

</head>

<body>

    <?php include './includes/header.php';
    ?>

    <div class="main show">
        <?php
        echo '<p>Total Classes added:' . $no_of_classes[0] . '</p>';
        echo '<p>Total Students added:' . $no_of_students[0] . '</p>';
        echo '<p>Total Results added:' . $no_of_result[0] . '</p>';
        ?>
    </div>

</body>

</html>

<?php
include('session.php');
?>