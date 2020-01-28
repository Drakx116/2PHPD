<?php
    $memes = [
        'plague' => 'On va tous crever mdr',
        'issou' => 'ISSOU',
        'chance' => 'Quelle chance',
        'heeheee' => 'Hee-Heetler',
    ]
?>

<form action="./memeRedirection.php" method="post">
    <label> Select a new meme :
        <select name="meme-select">
            <?php
                foreach ($memes as $name => $description) { ?>
                    <option value="<?php echo $name ?>"> <?php echo $name ?> </option>
                <?php }
            ?>
        </select>

        <input type="submit" name="submit-meme">
    </label>
</form>

<?php
    $memeName = $_GET['name'] ?? null;

    if($memeName && $memes[$memeName]) {
        ?>
            <h1> <?php echo ucwords($memeName) ?> </h1><br />
            <h2> <?php echo  $memes[$memeName] ?></h2>
            <img src="./public/images/<?php echo $memeName ?>.jpg" alt="<?php echo $memeName ?>">
        <?php
    }