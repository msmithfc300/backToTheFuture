<?php

//$destinationTime = new DateTime;
//$presentTime= new DateTime;
$presentTime = 'Oct 21 2015 04 29';
$destinationTime = 'Oct 21 2015 04 06';
$date = DateTime::createFromFormat('M d o h i', $presentTime);
$date = DateTime::createFromFormat('M d o h i', $destinationTime);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<link rel="stylesheet" href="/style.css">
<body>
    <h2 class="present"><?php echo $presentTime ?></h2>
    <h2 class="destination"><?php echo $destinationTime ?></h2>
</body>
</html>

