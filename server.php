<?php 
$text = $_GET["paragraph"];
$bad_word = $_GET["word"];
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<span> Il tuo paragrafo è il seguente: </span>
<?php 
echo "$text";
?>

<span> Il paragrafo è lungo: </span>
<?php 
echo strlen ($text);
?>

<span> Il paragrafo con la parola nascosta è il seguente: </span>
<?php 
$text = str_ireplace($bad_word, "***", $text);
echo "$text";
?>


    
</body>
</html>