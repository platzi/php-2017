<?php
require_once 'config.php';
$result = false;

if (!empty($_POST)) {
    $name = $_POST['name'];
    $email = $_POST['email'];

    // Never use md5 to store passwords!!!
    $password = md5($_POST['password']);

    // Validate

    $sql = "INSERT INTO users(name, email, password) VALUES (:name, :email, :password)";
    $query = $pdo->prepare($sql);

    $result = $query->execute([
        'name' => $name,
        'email' => $email,
        'password' => $password
    ]);
}

?>

<html>
<head>
    <title>Databases with Platzi</title>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
</head>
<body>
<div class="container">
    <h1>Add User</h1>
    <a href="index.php">Home</a>
    <?php
        if ($result) {
            echo '<div class="alert alert-success">Success!!!</div>';
        }
    ?>
    <form action="add.php" method="post">
        <label for="name">Name</label>
        <input type="text" name="name" id="name">
        <br>
        <label for="email">Email</label>
        <input type="text" name="email" id="email">
        <br>
        <label for="password">Password</label>
        <input type="password" name="password" id="password">
        <br>
        <input type="submit" value="Save" >
    </form>
</div>
</body>
</html>