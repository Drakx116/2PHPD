<a href="../index.php"> Return </a>
<h2> Display car registrations values </h2>

<?php

    $accounts = [
        'Blampain' => [
            'firstname' => 'Evan',
            'city' => 'La Sentinellle',
            'age' => 20
        ],
        'Gorez' => [
            'firstname' => 'Maxence',
            'city' => 'Wallers',
            'age' => 20
        ],
        'Lacoste' => [
            'firstname' => 'Antoine',
            'city' => 'Aulnoye les Valenciennes',
            'age' => 20
        ],
    ];

    $html = '';
    foreach ($accounts as $lastname => $account ) {
        $html .= '<div>';

        $html .=
            ucwords($lastname) . ' '
            . ucwords($account['firstname']) . ' - '
            . $account['age'] . ' Years Old - '
            . $account['city'];


        $html .= '</div>';
    }

    echo $html;