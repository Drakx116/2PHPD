<?php
    require_once('../../../db.php');

    $pseudo = null;
    $email = null;
    $address = null;
    $pc = null;
    $city = null;

    if(isset($_POST['submit-form'])) {
        $pseudo = $_POST['pseudo'] ?? null;
        $email = $_POST['email'] ?? null;
        $address = $_POST['address'] ?? null;
        $pc = $_POST['pc'] ?? null;
        $city = $_POST['city'] ?? null;

        // Reloads the current page
        if(!($pseudo && $email && $address && $pc && $city)) {
            header('Location: '.$_SERVER['REQUEST_URI']);
        }

        $data = [ $pseudo, $email, $address, $pc, $city ];

        $accountQuery = $db->prepare('INSERT INTO series (pseudo, email, address, pc, city) VALUES (?, ?, ?, ?, ?)');
        $result = $accountQuery->execute( array($pseudo, $email, $address, $pc, $city) );

        if($accountQuery->rowCount()) {
            header('Location: ../index.php' );
        }
    }
?>

<h2> Create a new series </h2>

<form action="" method="POST">
    <input name="pseudo" placeholder="Pseudo" type="text" value="<?= $pseudo ?>" ><br />
    <input name="email" placeholder="Email" type="text"><br />
    <input name="address" placeholder="Address" type="text"><br />
    <input name="pc" placeholder="Postal Code" type="text"><br />
    <input name="city" placeholder="City" type="text"><br />

    <br />
    <input type="submit" name="submit-form" value="Send">
</form>