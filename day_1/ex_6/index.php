<a href="../index.php"> Return </a>
<h2> Reworked ucwords() </h2>

<?php

/**
 * @param string $message
 *
 * @return string
 */
    function uppercaseFirstLetters(string $message)
    {
        $uppercaseMessage = '';

        $parts = explode(' ', $message);
        foreach ($parts as $part) {
            $uppercaseMessage .= uppercaseWord($part) . ' ';
        }

        return $uppercaseMessage;
    }

    /**
     * @param string $word
     *
     * @return string
     */
    function uppercaseWord(string $word)
    {
        $uppercaseWord = '';
        foreach (str_split($word) as $key => $letter) {
            if($key === 0) {
                $uppercaseWord .= strtoupper($letter);
            }
            else {
                $uppercaseWord .= $letter;
            }
        }

        return $uppercaseWord;
    }

    $message = 'lorem ipsum dolor sit amet.';

    echo uppercaseFirstLetters($message);