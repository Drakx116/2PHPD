<a href="../index.php"> Return </a>
<h2> Age and gender conditional expression </h2>

<?php
    $age = 36;
    $gender = 'm';

    //////////////////////////
    echo '<b> If / Else </b>';
    echo '<br />';
    //////////////////////////

    // If / Else
    if($age >= 31 && $age <= 50 && $gender === 'm') {
        echo 'You\'re a man between 31 and 50 years old';
    }
    else {
        echo 'You\'re not a man between 31 and 50 years old';
    }

    //////////////////////////
    echo '<br />';
    echo '<br />';
    echo '<b> Ternary </b>';
    echo '<br />';
    //////////////////////////

    // Ternary
    echo ($age >= 31 && $age <= 50 && $gender === 'm')
        ? 'You\'re a man between 31 and 50 years old'
        : 'You\'re not a man between 31 and 50 years old';
