<?php
include "ArrayList.php";

$listInteger = new ArrayList();
$listInteger->add(1);
$listInteger->add(2);
$listInteger->add(3);

echo $listInteger->get(1).'<br>';
echo '<br>'.$listInteger->get(-1);
?>