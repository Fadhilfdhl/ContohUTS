<?php

$n = 6;
for ($i = 1; $i <= $n; $i++) {
    echo str_repeat("*", $i) . "<br>";
}
for ($i = $n - 1; $i > 0; $i--) {
    echo str_repeat("*", $i) . "<br>";
}
?>
