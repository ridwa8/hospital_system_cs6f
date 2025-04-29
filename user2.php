<!-- Hafsa -->
<?php include "library/conn.php"; ?>
<!DOCTYPE html>
<html>
<head>
    <title>Document</title>
</head>
<body>
    <form action="" method="post">
        <label for="username">Username</label>
        <input type="text" name="username" placeholder="username" required>

        <label for="password">Password</label>
        <input type="password" name="password" placeholder="Password" required>

        <label for="date">Date</label>
        <input type="date" name="date" required>

        <button type="submit" name="btnregister">Register</button>
    </form>

    <?php
    if (isset($_POST['btnregister'])) {
        $username = $_POST['username'];
        $password = $_POST['password'];
        $date = $_POST['date'];

        $insert = mysqli_query($conn, "INSERT INTO users VALUES(null, '$username', '$password', '$date')");
        echo "Inserted success";
    }
    ?>
</body>
</html>
