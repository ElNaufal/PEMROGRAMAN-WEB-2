<?php

function repeat($text, $num = 10)
{
    echo "<ol>";

    for ($i = 0; $i < $num; $i++)
    {
        echo "<li>$text</li>";
    }

    echo "</ol>";
}

// Memanggil repeat dengan 2 argument
repeat("I'm the best", 15);

// Memanggil repeat dengan 1 argument
repeat("You're the man");

?>