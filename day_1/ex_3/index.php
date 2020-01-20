<h2> Display car registrations values </h2>

<a href="../index.php"> Return </a>
<br/>
<br/>

<?php

    foreach (range('A', 'Z') as $l1) {
        foreach (range('A', 'Z') as $l2) {
            foreach (range(0, 9) as $n1) {
                foreach (range(0, 9) as $n2) {
                    foreach (range(0, 9) as $n3) {
                        foreach (range('A', 'Z') as $l3) {
                            foreach (range('A', 'Z') as $l4) {
                                echo $l1 . $l2 . '-' . $n1 . $n2 . $n3 . '-' . $l3 . $l4 . '<br />';
                            }
                        }
                        die;
                    }
                }
            }
        }
    }