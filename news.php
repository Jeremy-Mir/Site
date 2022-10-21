<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Все новости</title>
    <link rel="stylesheet" type="text/css" media="screen" href="style.css">
</head>
<body style="background-color: rgb(231, 230, 230)">
    <div id="news"    >
        
<?php
include ("connect.php");
foreach ($sql as $elm) {
        
    echo '
    <div class = "news-block">
    <label for="">'.$elm[0].'</label>
    <hr class="style-one">
    <p>'.$elm[1].'</p>
    <hr class="style-one">
    <p>'.dateFormat($elm[2]).'</p>
    </div>  
    ';
}
?>
       
    </div>
    
</body>
</html>