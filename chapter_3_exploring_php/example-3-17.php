<?php
$name1 = "Bill";
$name2 = "BILL";
$result = strcasecmp($name1, $name2);
if (!$result) {
    echo "They match.";
}
?>

