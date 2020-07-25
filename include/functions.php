<link rel="stylesheet" href="css/main.css" type="text/css" charset="utf-8">
	<link rel="stylesheet" href="css/footer.css" type="text/css" charset="utf-8">
<style>
    .one {
    border-color:DarkKhaki;
    background:WhiteSmoke;
     margin:60px;
     float:left; width:15%; text-align:center;
     
   }
     .two {
    border-color:DarkKhaki;
    background:WhiteSmoke;
     margin:60px;
     float:left; width:15%; text-align:center;
   }
   .three {
    border-color:DarkKhaki;
    background:WhiteSmoke;
     margin:60px;
     float:left; width:15%; text-align:center;
   }
   .one:hover {
  box-shadow: inset 0 0 0 2px #53ea93;
   -webkit-transform: scale(1.1);
  -ms-transform: scale(1.1);
  transform: scale(1.1);
}
 .two:hover {
  box-shadow: inset 0 0 0 2px #53ea93;
   -webkit-transform: scale(1.1);
  -ms-transform: scale(1.1);
  transform: scale(1.1);
}
 .three:hover {
  box-shadow: inset 0 0 0 2px #53ea93;
   -webkit-transform: scale(1.1);
  -ms-transform: scale(1.1);
  transform: scale(1.1);
}
#but_by>a:active>div {
	border-bottom: 0;
	margin-top: 9px;
}
#but_by>a>div {
	float: right;
	margin-right: -1%;
	margin-top: 12px;
	border-radius: 5px;
	padding: 6px 9px;
	font-size: 1.1em;
	font-family: 'Arial';
	background-color: rgba(119, 136, 153);
	border-bottom: 4px solid rgba(105, 105, 105);

}
	#but_by{
	    width:90%;
        margin-bottom: -7px;
	}
	#buy_style{
	 color:#E9967A;  
	 	height:20px;
	}
	#buy_style:hover{
	 color:#FFA07A;   
	}
		
	#zatemnenie {
        background: rgba(248, 248, 255, 0.9);
        width: 100%;
        height: 139%;
        position: absolute;
        top: 0;
        left: 0;
        display: none;
        z-index:9999;
      }
      #okno {
        width: 300px;
        height: 325px;
        text-align: center;
        padding: 15px;
        border: 3px solid black;
        border-radius: 10px;
        color: black;
        position: absolute;
        top: 0;
        right: 0;
        bottom: 0;
        left: 0;
        margin: auto;
        background:#FAFAD2;
      }
      #zatemnenie:target {
          display: block;
         
	}

      .cl{
          display: inline-block;
        border: 1px solid black;
        border-radius: 3px;
        color: white;
        padding: 0 5px;
        float:right;
        margin-top: -129%;
        margin-right: -19%;
        text-decoration: none;
        background: #CD5C5C;
        font-size: 14pt;
        cursor:pointer;
      }
     #by_this{
         float:left;
         color:white;
         font-size:14pt;
         margin-left:28%;
         margin-top:-3%;
          display: inline-block;
        border: 1px solid black;
          border-radius: 2px;
           background: #CD5C5C;
     }
     .input{
        margin-left:10%; 
        margin-top:-3%;
     }
     #messageShow
     {
      font-family: 'Comic Sans MS';
      color: #FFA07A;
      text-align:center;
      margin-top:-10%;
     }
    #yes{
          font-family: 'Comic Sans MS';
      color: red;
       float:left;
       margin-left:-20%;
     }
     @media(max-width: 785px){
      #but_by{
          font-size:10pt;
          margin-left:-2%;
      }
      .fas fa-shopping-cart{
          width:5px;
      }
      .one{
          width:50%;
          margin-left:25%;
      }
      .two{
          width:50%;
          margin-left:25%;
           
      }
      .three{
           width:50%;
          margin-left:25%;
      }
      #zatemnenie {
         position: fixed;
          top: 0;
          left: 0;
           width: 100%;
           height: 100%;
      }
      #yes{
         margin-left:25%;
      }
     }
</style>
<div id="zatemnenie">
      <div id="okno">
           <form method="POST" action="magazin.php" class="input">
           <p>Имя<i id="point">*</i><br>
         <input type="text" placeholder="Имя" id="name" required multiple name="name"><br>
        <p>E-mail<i id="point">*</i><br>
         <input type="text" placeholder="example@ex.ex" id="email" required multiple name="email"><br>
         <p>Моб. телефон<i id="point">*</i><br>
         <input type="text" placeholder="+38(0_)___" id="number" required multiple name="number"><br>
         <div id = "done">
        <p><input id="by_this" type="submit" name="sub" value="Купить"></p>
        </div>
        </form>
        <form method="POST" action="magazin.php">
         <p><button class="cl">X</button><br>
        <div id="messageShow"></div><br>
        </form>
      </div>
    </div>
<table class="one">
<th>
    <?php
    if (isset($_GET['sub'])) print 'нажата'; 
   if (isset($_POST['name']) && isset($_POST['email']) && isset($_POST['number'])){
    
    // Переменные с формы
     $name = $_POST['name'];
     $email = $_POST['email'];
     $number = $_POST['number'];
      echo("$bank");
    // Параметры для подключения
    $db_host = "localhost"; 
    $db_user = "salapaka_hebni87"; // Логин БД
    $db_password = "earmagistor"; // Пароль БД
    $db_base = 'salapaka_hebni87'; // Имя БД
    $db_table = "zakaz"; // Имя Таблицы БД
    
    // Подключение к базе данных
    $mysqli = new mysqli($db_host,$db_user,$db_password,$db_base);

    // Если есть ошибка соединения, выводим её и убиваем подключение
	if ($mysqli->connect_error) {
	    die('Ошибка : ('. $mysqli->connect_errno .') '. $mysqli->connect_error);
	}
    
    $results = $mysqli->query("INSERT INTO zakaz (name,email,number) VALUES ('$name','$email','$number')");
}
    ?>
<?php
	$sql = mysqli_query($link, 'SELECT * FROM tovar WHERE key_tovar = 1');
 while ($result = mysqli_fetch_array($sql)) {
echo "{$result['image']} {$result['title']} {$result['intro_text']} {$result['full_text']}";
  }
?>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script>
   $(document).ready (function () {
    $("#done").click (function () {
     $("#messageShow").hide ();
     var name = $("#name").val ();
     var email = $("#email").val ();
     var number = $("#number").val ();
     var fail = "";
     if (name.length < 3) { 
     fail = "Имя не меньше 3 символов";
     } else if (email.split ('@').length - 1 == 0 || email.split ('.').length - 1 == 0) {
      fail = "Вы ввели неоректный E-mail";
      } else if (number.length < 12) {
       fail = "Некоректный номер, меньше 13 знаков";
          } else if (number.length > 13) {
        fail = "Некоректный номер, больше 13 знаков";
        }else if (number.split ('+').length - 1 == 0 ) {
        fail = "Некоректный номер, отсутсвует +";
        }
     if (fail != "") {
      $('#messageShow').html (fail + "<div class='clear'><br></div>");
      $('#messageShow').show ();
      return false;
     }
    });
   });
  </script> 
	<div id="but_by">
			<a href="#zatemnenie" title="Купить товар">  
			<div id="buy_style">
				<i class="fas fa-shopping-cart">Быстрый заказ</i>
			</div>
			</a>
             </th>
            </table>
            <div id="yes">
            <?php
            
            if ($results == 'true')
{
echo "Запись добавлена успешно!<br>";
}
?>
</div>
<table class="two">
<th>
<?php
	$sql = mysqli_query($link, 'SELECT * FROM tovar WHERE key_tovar = 2 ');
 while ($result = mysqli_fetch_array($sql)) {
echo "{$result['image']} {$result['title']} {$result['intro_text']}  {$result['full_text']}";
  }
?>
<div id="but_by">
			<a href="#zatemnenie" title="Купить товар">  
			<div id="buy_style">
				<i class="fas fa-shopping-cart">Быстрый заказ</i>
			</div>
			</a>
</th>
</table>
<table class="three">
<th>
<?php
	$sql = mysqli_query($link, 'SELECT * FROM tovar WHERE key_tovar = 3 ');
 while ($result = mysqli_fetch_array($sql)) {
echo "{$result['image']} {$result['title']} {$result['intro_text']}  {$result['full_text']}";
  }
?>
<div id="but_by">
			<a href="#zatemnenie" title="Купить товар">  
			<div id="buy_style">
				<i class="fas fa-shopping-cart">Быстрый заказ</i>
			</div>
			</a>
</th>
</table>
<table class="three">
<th>
<?php
	$sql = mysqli_query($link, 'SELECT * FROM tovar WHERE key_tovar = 4 ');
 while ($result = mysqli_fetch_array($sql)) {
echo "{$result['image']} {$result['title']} {$result['intro_text']}  {$result['full_text']}";
  }
?>
<div id="but_by">
			<a href="#zatemnenie" title="Купить товар">  
			<div id="buy_style">
				<i class="fas fa-shopping-cart">Быстрый заказ</i>
			</div>
			</a>
</th>
</table>