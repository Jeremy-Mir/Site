<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Главная страница</title>
    <link rel="stylesheet" type="text/css" media="screen" href="style.css">
</head>
<body style="background-color: rgb(231, 230, 230)">
    <div id="main" >
    <div class="news"    >
        <Label>Главная страница:</Label>
        <?php
        include ("connect.php");
        
        function printNameBySymbol($str)
                {$txt = '';
                    $i = 0;
                    while ($i < strlen($str) && $str[$i]!= ".") {
                       $txt = $txt.$str[$i];
                        $i = $i + 1;
                    }
                    return $txt;
                }
        $count= 3;
        foreach ($sql as $elm) {
            $count = $count - 1;
           
            
            
            echo '
            <div class = "news-block">
            <label for="">'.$elm[0].'</label>
            <hr class="style-one">
            <p>'.printNameBySymbol($elm[1]).'</p>
            <hr class="style-one">
            <p>'.dateFormat($elm[2]).'</p>
            </div>  
            ';
            if($count == 0){
                break;
            }
        }
        ?>
             <a href="http://localhost/Site/news.php">Все новости</a>  
             <a href="http://localhost/Site/forma.html">Обратная связь</a> 
            </div>  
    </div>
    
</body>
</html>