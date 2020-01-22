<?php
    require_once('../../../db.php');

    $title = null;
    $author = null;
    $note = null;

    if(isset($_POST['submit-form'])) {
        $title = $_POST['title'] ?? null;
        $author = $_POST['author'] ?? null;
        $note = $_POST['note'] ?? null;

        // Reloads the current page
        if(!($title && $author && $note)) {
            header('Location: '.$_SERVER['REQUEST_URI']);
        }

        $data = [ $title, $author, $note, DateTime::RFC850 ];

        $accountQuery = $db->prepare('INSERT INTO series (title, author, note, creation_date) VALUES ( ?, ?, ?, ? )');
        $result = $accountQuery->execute( $data );

        if($accountQuery->rowCount()) {
            header('Location: ../index.php' );
        }
    }
?>

<h2> Create a new series </h2>

<form action="" method="POST">
    <input name="title" placeholder="Title" type="text"><br />
    <input name="author" placeholder="Author" type="text"><br />
    <input name="note" placeholder="Note" type="number" min="0" max="5"><br />

    <br />
    <input type="submit" name="submit-form" value="Send">
</form>