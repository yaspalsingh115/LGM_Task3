<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/main.css">
    <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
    <link rel="stylesheet" href="./css/font-awesome-4.7.0/css/font-awesome.css">
    <link rel="stylesheet" type='text/css' href="css/manage.css">
    <title>Dashboard</title>
</head>

<body>

    <?php include './includes/header.php';
    ?>

    <div class="main">
        <?php
        include('init.php');
        include('session.php');
        $db = mysqli_select_db($conn, 'srms');

        $sql = "SELECT `name`, `id` FROM `class`";
        $result = mysqli_query($conn, $sql);

        if (mysqli_num_rows($result) > 0) {
            echo '<table>
                <caption style="padding-bottom: 40px;">List of Classes:</caption>
                <tr>
                <th>ID</th>
                <th>NAME</th>
                </tr>';

            while ($row = mysqli_fetch_array($result)) {
                echo "<tr>";
                echo "<td>" . $row['id'] . "</td>";
                echo "<td>" . $row['name'] . "</td>";

                echo "</tr>";
            }

            echo "</table>";
        } else {
            echo "0 results";
        }
        ?>

    </div>

</body>

</html>