<?php
$str = "According to a researcher (sic) at Cambridge University, it doesn't matter in what order the letters in a word are, the only important thing is that the first and last letter be at the right place. The rest can be a total mess and you can still read it without problem. This is because the human mind does not read every letter by itself but the word as a whole.";
$str = explode(" ", $str);
foreach ($str as $word) {
    echo str_shuffle($word) . " ";
}

?>