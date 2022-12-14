<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kalilamodow's Github Profile</title>
</head>
<body>
    <div class="readme">
        <h1>Readme</h1>
        <hr>
        <?php
            $readmecontent = fopen('./readme.md', 'r');
            echo fread($readmecontent);
            fclose($readmecontent);
        ?>
    </div>
</body>
</html>