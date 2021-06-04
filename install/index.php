<?php
$v = file_get_contents('../version.txt');
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Install ONS v<?=$v?></title>
    <style>
        input[type=text] {
            width: 75%;
        }
    </style>
</head>

<body>
    <form action="install.php" method="post">
        <h1>About ONS v<?=$v?></h1>
        <p>ONS (Online News System) is a simple PHP-powered news system. All you need to know is simple basic HTML. Create a link to your file in the homepage (index.php), in the "a" folder find the "story" folder, and create a text file with your file name! Then, in the link, link to "a?a=[file name WITHOUT .txt]".</p>
        <p>In future versions, ONS hopes to allow people who do not know the HTML language use ONS. Thank you.</p>
        <h1>Set variables</h1>
        <p>Please set your variables.</p>
        <p>Site name</p>
        <input type="text" placeholder="Online News System" name="brand" required>
        <p>Site shortened name (if you don't have one, just copy the site name here)</p>
        <input type="text" placeholder="ONS" name="shortbrand">
        <p>Site lengthened name (if you don't have one, just copy the site name here). <b>NOTE: Please do not add a period at the end of this form.</b></p>
        <input type="text" placeholder="Online News Systems LLC" name="longbrand" required>
        <p>You can always check the <a href="<?=file_get_contents('../website.txt')?>">ONS Website</a> for more instructions.</p>
        <h1>Set Policies</h1>
        <p>Privacy Policy (HTML allowed)</p>
        <textarea name="privacy" style="width:75%;resize:none;height:25vh;" placeholder="<h1>ONS is devoted to your privacy</h1><p>We protect your privacy and never sell your information.</p>" required></textarea>
        <p>About Page (HTML allowed)</p>
        <textarea name="about" style="width:75%;resize:none;height:25vh;" placeholder="<h1>About ONS</h1><p>ONS is the best thing ever!</p>" required></textarea>
        <h1>Confirm Install</h1>
        <input type="checkbox" required id="agree">
        <label for="agree">I agree to the terms and conditions stated </label>
        <br>
        <button type="submit">Install ONS</button>
    </form>
</body>

</html>
