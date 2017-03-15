<?php

require_once 'config.php';

$queryResult = $pdo->query("SELECT * FROM users");
?>
<html>
<head>
    <title>Databases with Platzi</title>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
</head>
<body>
<div class="container">
    <h1>List Users</h1>
    <a href="index.php">Home</a>
    <table class="table">
        <tr>
            <th>Name</th>
            <th>Email</th>
            <th>Edit</th>
            <th>Delete</th>
        </tr>
        <?php
        while($row = $queryResult->fetch(PDO::FETCH_ASSOC)) {
            echo '<tr>';
            echo '<td>' . $row['name'] . '</td>';
            echo '<td>' . $row['email'] . '</td>';
            echo '<td><a href="update.php?id=' . $row['id'] . '">Edit</a></td>';
            echo '<td><a href="delete.php?id=' . $row['id'] . '">Delete</a></td>';
            echo '</tr>';
        }
        ?>
    </table>
</div>
</body>
</html>