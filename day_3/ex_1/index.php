<?php
    require_once('../../db.php');

    $seriesQuery = $db->prepare('SELECT * FROM series');
    $seriesQuery->execute([]);
    $allSeries = $seriesQuery->fetchAll(PDO::FETCH_ASSOC);
?>

<h2> CRUD Series </h2>

<div>
    <a href="./series/create.php"> Add a new series </a>
    <br />
    <br />
</div>

<!-- Display all series -->

<?php
    foreach ($allSeries as $series) {
        echo '<b>' . $series['title'] . '</b> by <i>'
            . $series['author'] . '</i>, '
            . $series['mark']. '/5 '
            . '<a href="./series/update.php?id=' . $series['id'] . '"> Update </a>'
            . ' - '
            . '<a href="./series/delete.php?id=' . $series['id'] . '"> Delete </a>'
            . '<br />';
    }
?>

<br />
<a href="../index.php"> Return </a>