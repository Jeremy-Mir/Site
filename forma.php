<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Обратная связь</title>
  <link rel="stylesheet" type="text/css" media="screen" href="style.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  <script src="scr.js"></script>
</head>

<body style="background-color: rgb(231, 230, 230)">
  <div id="form">
    <form id="form-fb" name="ourForm" class="obratnuj-zvonok" method="post" autocomplete="off">
      <div class="form-zvonok">
        <div>
          <label>Имя <span>*</span></label>
          <input type="text" name="username" required>
        </div>
        <div>
          <label>Номер телефона (в ормате 8хххххххххх) <span>*</span></label>
          <input type="tel" pattern="[0-9]{11}" name="usernumber" required>
        </div>
        <div>
          <label>Адрес </label>
          <input type="text" name="useraddress">
        </div>
        <div>
          <label>Адрес почты <span>*</span></label>
          <input type="email" name="usermail" required>
        </div>
        <div>
          <label>Сообщение</label>
          <textarea name="question" cols="30" rows="10"></textarea>
        </div>
        <input class="btn-send-mail" id="btn" type="submit" value="Отправить сообщение">
        
      </div>
      
    </form>
  </div>

  <div class="all" ><label >Все сообщения</label><hr class="style-one"></div>    

  <?php
  $connect = mysqli_connect('localhost','root','','news');
    if ($connect == false){
        print("Ошибка: Невозможно подключиться к MySQL " . mysqli_connect_error());
    }
    mysqli_query($connect,"SET NAMES 'utf8'");
    $sql = mysqli_query($connect, 'SELECT * FROM `mail`');
    $sql = mysqli_fetch_all($sql);
    foreach (array_reverse($sql) as $elm) {
      echo '
      <div id="form">
      <div class = "form-zvonok">
        <div><label for="">'.$elm[1].'</label><hr class="style-one"></div>
        <div><label for="">'.$elm[2].'</label><hr class="style-one"></div>
        <div><label for="">'.$elm[3].'</label><hr class="style-one"></div>
        <div><label for="">'.$elm[4].'</label><hr class="style-one"></div>
        <div><textarea for="" disabled="disabled">'.$elm[5].'</textarea></div>
      </div> 
      </div> 
      ';
  }
    ?>
    
</body>

</html>