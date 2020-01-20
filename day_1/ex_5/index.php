<a href="../index.php"> Return </a>
<h2> Javascript alert box with PHP </h2>

<button onclick="window.location.reload()"> Reload </button>

<?php

    /**
     * @param $message
     */
    function displayMessage($message)
    {
        echo '<script type="text/javascript"> alert("' . $message . '") </script>';
    }

    displayMessage('Oui');


