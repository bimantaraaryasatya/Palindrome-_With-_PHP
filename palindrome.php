<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Palindrome</title>
</head>
<body>
    <div class="palindrome-page">
        <div class="title">
            <h1>Palindrome</h1>
        </div>
        <div class="input-word">
            <form method="POST">
                <input type="text" name="word" id="word">
                <button type="submit">Submit</button>
            </form>
        </div>

        <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['word'])) {
            // First Method
            $word = $_POST['word'];
            $reversed_word = strrev($word);

            if ($word == $reversed_word) {
                echo "Palindrome Word (1)";
            } else {
                echo "Not Palindrome Word (1)";
            }
            echo "\n";

            // Second Method
            function reversed_string($word)
            {
                return strrev($word);
            }

            $word = $_POST['word'];
            if ($word == reversed_string($_POST['word'])) {
                echo "Palindrome Word (2)";
            } else {
                echo "Not Palindrome Word (2)";
            }

            echo "\n";

            // Third Method
            $input_word = $_POST['word'];
            if (palindrome($input_word) == true) {
                echo "Palindrome Word (3)";
            } else {
                echo "Not Palindrome Word (3)";
            }
        } elseif ($_SERVER["REQUEST_METHOD"] == "POST" && !isset($_POST['word'])) {
            echo "No word submitted.";
        } else {
            echo "Gagal Post";
        }

        function palindrome($word)
        {
            $clean_word = strtolower($word);
            $reversed_word = strrev($clean_word);

            if ($clean_word == $reversed_word) {
                return true;
            } else {
                return false;
            }
        }
        ?>
    </div>

    <div class="star-page">
        <div class="title">
            <h1>Star</h1>
        </div>
        <div class="input-height">
            <form method="post">
                <input type="number" name="height" id="height">
                <button type="submit">Submit</button>
            </form>
        </div>

        <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['height'])) {
            $height = $_POST['height'];
            for ($i=0; $i < $height; $i++) { 
                for ($j=0; $j <= $i; $j++) { 
                    echo "*";
                }
                echo "<br>";
            }
        } elseif ($_SERVER["REQUEST_METHOD"] == "POST" && !isset($_POST['height'])) {
            echo "No height submitted.";
        }
        ?>
    </div>
</body>
</html>
