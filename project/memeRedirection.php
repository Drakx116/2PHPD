<?php
    if (isset($_POST['submit-meme'])) {
        $meme = $_POST['meme-select'] ?? null;

        if ($meme) {
            header('Location: ./meme.php?name=' . $meme);
            // Fix ./meme.php redirection issue
            die;
        }
    }

    header('Location: ./meme.php');
