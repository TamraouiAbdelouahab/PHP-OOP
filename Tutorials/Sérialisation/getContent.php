<?php
$json = file_get_contents('ma_bibliotheque.json');
$livreLu = json_decode($json);
echo $livreLu[0];
?>