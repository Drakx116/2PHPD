<?php
    require_once('../../../db.php');

    $seriesId = $_GET['id'];
    if(!$seriesId) {
        header('Location: ../index.php');
    }

    $seriesQuery = $db->prepare('DELETE FROM series WHERE id = ?');
    $seriesQuery->execute([(integer) $seriesId]);

    header('Location: ../index.php');