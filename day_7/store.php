<?php
    if(!isset($_POST)) {
        echo json_encode([ 'error' => 'Invalid page call.' ]); die;
    }

    $data = json_decode(file_get_contents('php://input'), true);

    $pseudo = $data['pseudo'] ?? null;
    $plainPassword = $data['plainPassword'] ?? null;

    if(!($pseudo && $plainPassword)) {
        echo json_encode([ 'error' => 'Missing parameters', 'pseudo' => $pseudo, 'password' => $plainPassword ]); die;
    }

    $password = password_hash($plainPassword, PASSWORD_DEFAULT);

    echo json_encode([
        'success' => 'TODO : Store new user',
        'user'=> [
            'pseudo' => $pseudo,
            'password' => $password
        ],
    ]);
