<?php
    session_start();
    require_once './templates/navbar.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title> Login </title>
</head>

<body>
    <h2> Login </h2>

    <?php
        $errors = [];
        if(isset($_POST['form-login'])) {
            $pseudo = $_POST['pseudo'] ?? null;
            $plainPassword = $_POST['password'] ?? null;

            if(!($pseudo && $plainPassword)) {
                $errors[] = 'Missing parameters';
            }

            // Valid form params
            if(!$errors) {
                $getUserQuery = $db->prepare('SELECT * FROM users WHERE pseudo = ?');
                $getUserQuery->execute([ $pseudo ]);

                if(!$getUserQuery->rowCount()) {
                    $errors[] = 'Cannot find any related user with this pseudo.';
                }

                // User found
                if(!$errors) {
                    $user = $getUserQuery->fetch(PDO::FETCH_ASSOC);

                    if(!password_verify($plainPassword, $user['password'])) {
                        $errors[] = 'Invalid credentials';
                    }

                    if(!$errors) {
                        $_SESSION['pseudo'] = $user['pseudo'];
                        header('Location: index.php');
                    }
                }
            }
        }
    ?>

    <form action="" method="POST">
        <input type="text" name="pseudo" placeholder="Pseudo"><br>
        <input type="password" name="password" placeholder="Password"><br>

        <input type="submit" name="form-login" value="Register">
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