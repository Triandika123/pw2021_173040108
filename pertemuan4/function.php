<?php
function salam($waktu, $nama)
{
    return "Selamat Datang, $waktu, $nama!";
}


?>
<!DOCTYPE html>
<html>

<head>
    <title>Latihan Function</title>
</head>

<body>
    <h1><?= salam("pagi", "Triandika"); ?></h1>
</body>


</html>