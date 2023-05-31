<?php

    session_start();

    include('config.php');

    if (isset($_POST['register'])) {

        $username = $_POST['username'];

        $email = $_POST['email'];

        $password = $_POST['password'];

        $password_hash = password_hash($password, PASSWORD_BCRYPT);

        $query = $connection->prepare("SELECT * FROM login WHERE email=:email");

        $query->bindParam("email", $email, PDO::PARAM_STR);

        $query->execute();

        if ($query->rowCount() > 0) {

            echo '<p style="color:red">The email address is already registered!</p>';

        }

        if ($query->rowCount() == 0) {

            $query = $connection->prepare("INSERT INTO login(username,password,email) VALUES (:username,:password_hash,:email)");

            $query->bindParam("username", $username, PDO::PARAM_STR);

            $query->bindParam("password_hash", $password_hash, PDO::PARAM_STR);

            $query->bindParam("email", $email, PDO::PARAM_STR);

            $result = $query->execute();

            if ($result) {

                header('Location: blog_login.php');
            } else {

                echo '<p style="color:red">Something went wrong!</p>';

            }

        }

    }

?>
