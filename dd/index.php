<!DOCTYPE HTML>
<html>
<head>
    <meta сharset="utf-8">
    <title>Техническое задание</title>
</head>
<body><div>
<h1 align='center'>Техническое задание</h1>
<?php
    function convert($string)
    {
        $string = strrev(mb_convert_encoding($string, 'UTF-16BE', 'UTF-8'));
        return mb_convert_encoding($string, 'UTF-8', 'UTF-16LE');
    }
    function revertCharacters($str)
    {
        $array = explode(" ", $str);
        for ($i=0; $i<count($array); $i++)
        {
            $result = convert($array[$i]);
            echo $result;
            echo " ";
        }
    }
    $result = revertCharacters("Здравствуйте ! Мне очень понравилась Ваша вакансия .");
    echo $result;
?>
</div></body>
</html>