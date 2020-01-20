<a href="../index.php"> Return </a>
<h2> Display all alphabet letters </h2>

<?php
    $letters = [];
    foreach(range('a','z') as $letter){
        echo $letter . '<br/>';
    }