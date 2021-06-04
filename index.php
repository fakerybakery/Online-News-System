<?php
/*
Manage installation
*/
if (is_dir('install')) {
    header('Location: install');
}
/*
End manage installation
*/
$title = 'Home';
require('header.php');
?>
<h1>Online News Systems Homepage</h1>
<h2>EDITOR'S PICK STORY:</h2>
<a href="a?a=demo-page">DEMO PAGE</a>
<h2>TOP PERSON:</h2>
<a href="a?a=person-john-j-johnsonsonsonson">JOHN J JOHNSONSONSONSON</a>
<h2>TOP SENSATIONAL NEWS:</h2>
<a href="a?a=sensational-news-bad">SOMEONE SAYS THAT SENSATIONAL NEWS IS BAD!!!</a>
<?php
require('footer.php');
?>