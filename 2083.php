Category: PHP Basic.

Assuming UTF-8 encoding, what is the value of $count?

<?php
$data = '$1Ä2ç';

$count = strlen($data);
print $count;
?>

A: 0
B: 4
C: 5
D: 7
