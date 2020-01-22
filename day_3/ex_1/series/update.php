<?php
    require_once('../../../db.php');

    $seriesId = $_GET['id'];
    if(!$seriesId) {
        header('Location: ../index.php');
    }

    $seriesQuery = $db->prepare('SELECT * FROM series WHERE id = ?');
    $seriesQuery->execute([(integer) $seriesId]);

    if(! $seriesQuery->rowCount()) {
        header('Location: ../index.php');
    }

    $series = $seriesQuery->fetch();

    $title = $series['title'];
    $author = $series['author'];
    $note = $series['note'];

?>

<h3> <?= $series['title'] ?> </h3>

<form action="" method="POST">
    <input name="title" placeholder="Title" type="text" value="<?= $title ?>"><br />
    <input name="author" placeholder="Author" type="text" value="<?= $author ?>"><br />
    <input name="note" placeholder="Note" type="number" min="0" max="5" value="<?= $note ?>"><br />

    <br />
    <input type="submit" name="update-series" value="Send">
</form>

<?php
$hasPost = $_POST['update-series'] ?? null;
if($hasPost) {
    $postTitle = $_POST['title'];
    $postAuthor = $_POST['author'];
    $postNote = $_POST['note'];

    if($postTitle && $postAuthor && isset($postNote))
    {
        $postSeriesQuery = $db->prepare('UPDATE series SET title = ?, author = ?, note = ? WHERE id = ?');
        $postSeriesQuery->execute([$postTitle, $postAuthor, (integer) $postNote, (integer) $seriesId]);

        var_dump($postSeriesQuery->rowCount());

        if($postSeriesQuery->rowCount()) {
            header('Location: ../index.php');
        }
    }
}
?>
