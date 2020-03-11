<?php
    $id = $_GET['id'] ?? null;

    if(!$id) {
        echo json_encode([ 'error' => 'Oui' ]);
    }
    else {
        echo json_encode([ 'data' => 'Find stored data for User #' . $id ]);
    }