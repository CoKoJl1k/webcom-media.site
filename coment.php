
<!DOCTYPE html>
<html lang="ru">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Bootstrap Template</title>
    <!-- Bootstrap -->
    <link href="css/bootstrap.css" rel="stylesheet">
    <link href="css/font-awesome.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
    <link href="css/bootstrap-theme.css" rel="stylesheet">
  </head>
  <body>
  <div class="navbar navbar-default navbar-fixed-top">
    <div class="container">
      <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#responsive-menu">
         <span class="sr-only">Открыть навигацию</span>
         <span class="icon-bar"></span>
         <span class="icon-bar"></span>
         <span class="icon-bar"></span>  
        </button>
        <a class="navbar-brand" href="index.html"><img src="images\5.png"></a> 
      </div>
      <div class="collapse navbar-collapse" id="responsive-menu">
        <ul class="nav navbar-nav">
          <li><a href="#">Портфолио </a></li>
          <li><a href="#">Преимущества</a></li>  
          <li><a href="#">Схема работы</a></li>
          <li><a href="#">Отзывы</a></li>
          <li><a href="#">Контакты</a></li>
          <li><a href="#"><p>+375 (25) 123-45-67</p><p>+375 (25) 123-45-67</p></a></li>
        </ul>
      </div>
    </div>
</div>

 <div class="container" style="margin-top:150px;">
<?php
	 require 'register.php';
	$sql = "SELECT * FROM userss";
	$result = mysqli_query($db, $sql);
	while ($row = mysqli_fetch_array($result)) {
		echo "<div id='img_div'> ";
			echo "<img id='norm' src='images/".$row['image']."' >";
			echo "<p>".$row['text']."</p>";
		echo "</div>";
	}
?>
</div>

 <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
  <script src="js/bootstrap.js"></script>

   </body>
</html>