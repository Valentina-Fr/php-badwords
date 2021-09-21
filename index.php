<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>php badwords</title>
</head>
<body>
    <?php 
        $paraghrap = 'Lorem ipsum dolor sit amet consectetur adipisicing elit. A quae aspernatur suscipit voluptates sit.';
        $censored_word = $_GET['badword'];
        echo $paraghrap . '</br>' . strlen($paraghrap) . '</br>';
        $censored_sentence = str_replace($censored_word, '***', $paraghrap);
        echo $censored_sentence . '</br>' . strlen($censored_sentence);
    ?>
</body>
</html>