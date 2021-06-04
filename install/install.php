<?php
/*
POST:
- brand
- shortbrand
- longbrand
- privacy
- about
*/
$year = date('Y', time());
//Manage variables in header.php
file_put_contents('../header.php', '<?php
$brand = \'' . $_POST['brand'] . '\';
$sbrand = \'' . $_POST['shortbrand'] . '\';
$lbrand = \'' . $_POST['longbrand'] . '\';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title><?=$title?> | <?=$brand?></title>
    <link rel="stylesheet" href="/main.css">
</head>
<body>
<div class="nav">
    <a href="/"><?=$sbrand?> Home</a>
    <a href="/privacy">Legal</a>
    <a href="/about">About <?=$sbrand?></a>
</div>');
//Manage copyright in main.css
file_put_contents('../main.css', 'html {
    overflow: hidden;
    height: 100%;
}

body {
    overflow: auto;
    height: 100%;
}

.nav {
    position: sticky;
    top: 0px;
    background-color: white;
    padding: 5vh;
    box-shadow: 0 0 5vh black;
}

body::after {
    content: \'©' . $year . '-Current. All rights reserved. Powered by ONS, Online News System.\';
    box-shadow: 0 0 100vh black;
    position: absolute;
    bottom: 0px;
    z-index: 100;
    background-color: transparent;
    width: 100%;
}');
//Manage privacy and about
file_put_contents('../privacy/privacy.txt', $_POST['privacy']);
file_put_contents('../about/about.txt', $_POST['about']);
//Delete install folder
$files = glob('*');
foreach($files as $file){
    if (is_file($file)) {
        unlink($file);
    }
}
header('Location: ../delete.php');