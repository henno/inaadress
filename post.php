<?php
$file = fopen("aadressid.txt", "a") or die("Unable to open file!");
fwrite($file, $_POST['aadress'] . "\n");
header('Location: index.html');
?>