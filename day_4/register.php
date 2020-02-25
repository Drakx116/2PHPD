<?php
    session_start();
    require_once '../db.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title> Registration </title>
</head>

<body>
    <?php require_once './templates/navbar.php' ; ?>

    <h2> Registration </h2>

    <?php
        $errors = [];
        if(isset($_POST['form-register'])) {
            $pseudo = $_POST['pseudo'] ?? null;
            $plainPassword = $_POST['password'] ?? null;
            $confirmPassword = $_POST['confirm-password'] ?? null;

            if(!($pseudo && $plainPassword && $confirmPassword)) {
                $errors[] = 'Missing parameters';
            }

            if($plainPassword !== $confirmPassword) {
                $errors[] = "Passwords are different.";
            }

            if(!count($errors)) {
                $password = password_hash($plainPassword, PASSWORD_DEFAULT);

                $userData = [ $pseudo, $password ];

                $insertUserQuery = $db->prepare('INSERT INTO users(pseudo, password) VALUES(? , ?)');
                $insertUserQuery->execute( $userData );

                if($insertUserQuery->rowCount()) {
                    header('Location: login.php');
                }
            }
        }
    ?>

    <form action="" method="POST">
        <input type="text" name="pseudo" placeholder="Pseudo"><br>
        <input type="password" name="password" placeholder="Password"><br>
        <input type="password" name="confirm-password" placeholder="Repeat Password"><br>

        <input type="submit" name="form-register" value="Register">
    </form>
    <br>

    <div>
        <?php
            if($errors) {
                echo '<b> Errors : '  . count($errors) .' </b><br><br>';
                foreach ($errors as $error) {
                    echo $error . '<br>';
                }
            }
        ?>
    </div>
</body>
</html>