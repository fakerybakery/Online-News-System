<?php
//require('../header.php');
mkdir($_GET['a']);
file_put_contents($_GET['a'] . '/index.php', '<?php require(\'../../header.php\'); ?>' . file_get_contents('story/' . $_GET['a'] . '.txt') . '<?php require(\'../../footer.php\'); ?>');
header('Location: ' . $_GET['a'] . '/');
//require('../footer.php');