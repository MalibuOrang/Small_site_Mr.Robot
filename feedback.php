<!DOCTYPE html>
<html>
	<head>
	<meta charset="utf-8">
	<title>Обратная связь</title>
	<!-- Описание стиля подключение файла css -->
	<link rel="stylesheet" href="css/main.css" type="text/css" charset="utf-8">
	<link rel="stylesheet" href="css/footer.css" type="text/css" charset="utf-8">
		<link rel="stylesheet" href="css/header.css" type="text/css" charset="utf-8">
			<link rel="stylesheet" href="css/new_css.css" type="text/css" charset="utf-8">
		<link href="css/all.css" rel="stylesheet">
<!-- Описание метаданных для поисковика -->
<meta name="description" content="Интернет-магазин для продажи приставок и игр для приставок для всех пользователей интернета!">
<meta name="keywords" content="Купить приставку, игры для приставок, приставки">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link href="img/siteicon.ico" rel="shortcut icon" type="image/x-icon">

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script>
   $(document).ready (function () {
    $("#done").click (function () {
     $("#messageShow").hide ();
     var name = $("#name").val ();
     var email = $("#email").val ();
     var subject = $("#subject").val ();
     var message = $("#message").val ();
     var fail = "";
     if (name.length < 3) { 
     fail = "Имя не меньше 3 символов";
     } else if (email.split ('@').length - 1 == 0 || email.split ('.').length - 1 == 0) {
      fail = "Вы ввели неоректный E-mail";
      } else if (subject.length < 5) {
       fail = "Тема сообщения меньше 5 символов";
          } else if (message.length < 20) {
        fail = "Сообщение не менее 20 символов";
        }
     if (fail != "") {
      $('#messageShow').html (fail + "<div class='clear'><br></div>");
      $('#messageShow').show ();
      return false;
     }
	$.ajax ({
      url: 'ajax/feedback.php',
      type: 'POST',
      cache: false,
      data: {'name': name, 'email': email, 'subject': subject, 'message': message},
      dataType: 'html',
      success: function (data) {
       $('#messageShow').html (data + "<div class='clear'><br></div>");
       $('#messageShow').show ();
      }
     });
    });
   });
  </script>     
	</head>
	<style>
body{
 background: linear-gradient( rgba(245,245,245,0.8), rgba(245,245,245, 0.8) ), url('img/background.jpg');
 overflow-x: hidden !important;  
}
    #logo>a>img{
	width: 70px;
	height: 70px;
	float: left;
    margin-left: 2%;
}
#Mrobot{
	font-size: 1.8em;
	margin-left: 10px;
	font-family: 'Suez One', serif;
}
.info{
	
border: none;
	border-radius: 2px;
    margin-left: 30px; 
    margin-bottom: 15px;
}

</style>

<body oncontextmenu="return false">
       <style type="text/css">#hellopreloader>
   p{
       display:none;
       
   }
   #hellopreloader_preload
   {
       display: block;position: fixed;z-index: 99999;top: 0;left: 0;width: 100%;height: 100%;min-width: 1000px;background: #000000 url(http://hello-site.ru//main/images/preloads/oval.svg) 
   center center no-repeat;background-size:41px;
   }
     @media (max-width: 785px) { 
       #hellopreloader_preload
   {
     min-width: 400px;
   }
     #but{
           display:none;
       }
     
        #about{
           padding-top:10%;
           margin-left:20%;
       }

   }
   </style>
<div id="hellopreloader"><div id="hellopreloader_preload"></div><p><a href="http://hello-site.ru">Hello-Site.ru. Бесплатный конструктор сайтов.</a></p></div>
<script type="text/javascript">var hellopreloader = document.getElementById("hellopreloader_preload");function fadeOutnojquery(el){el.style.opacity = 1;var interhellopreloader = setInterval(function(){el.style.opacity = el.style.opacity - 0.05;if (el.style.opacity <=0.05){ clearInterval(interhellopreloader);hellopreloader.style.display = "none";}},16);}window.onload = function(){setTimeout(function(){fadeOutnojquery(hellopreloader);},1000);};</script>
<div id="wrapper">
<div id="content">
		<header id="header">
		  <div id="logo">
			<a href="index.php" title="На главную">
			<!-- Нужно добавить ссылку на сайт когда будет хостинг -->
			<img src="img/Mr-robot.jpg" title="Mr.Robot-market.com" alt="Mr.Robot-market.com">
			<span id="Mrobot">Mr.Robot-market</span>
			</a>
			</div>
			<div id="about">
			<!-- Основные ссылки навигации по сайту нужно будет добавить ссылки для переход в описаные ниже пункты -->
			<a href="index.php" title="Перейти на главную страницу"> Главная </a> 
			<a href="https://cp.beget.com/promo" title="Перейти на главную страницу"> Реклама </a> 
			</div>
			<!-- Кнопка Корзина нужно будет добавить ссылку для перехода в корзину -->
			<div id="reg_auth">
			<!-- Кнопка для перехода в магазин нужно будет добавить ссыоку на переход в магазин -->
			<a href="magazin.php" title="Зайти в магазин">  
			<div id="but">
			<i class="fas fa-store"> Магазин</i>
			</div>
			</a>
		</header>
		<nav>
		    <div id = "menuShow"><i class="fas fa-bars"></i></div>
		    <div id = "hideMenu">
		    <a href="index.php" title="Перейти на главную страницу">Главная</a>
		     <a href="O_nas.php" title="Узнать детальнее о нас">Про нас</a>
		      <a href="feedback.php" title="Написать нам на почту или позвонить">Обратная связь</a>
		        <a href="garantiya.php" title="Узнать детальней про гарантию">Гарантия</a>
		       <a href="arenda.php" title="Узнать детальней про прокат товара">Прокат</a>
		    </div>
		    <div id = "mobileMenu">
		<a href="index.php" title="Перейти на главную страницу">Главная</a><br>
		     <a href="O_nas.php" title="Узнать детальнее о нас">Про нас</a><br>
		      <a href="feedback.php" title="Написать нам на почту или позвонить">Обратная связь</a><br>
		        <a href="garantiya.php" title="Узнать детальней про гарантию">Гарантия</a><br>
		       <a href="arenda.php" title="Узнать детальней про прокат товара">Прокат</a><br>
		       <hr>
		       <a href="magazin.php" title="Войти в магазин">Магазин</a><br>
		 </div>
		</nav>
		 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script>
  $('#menuShow').click (function(){
      if($('#mobileMenu').is(':visible'))
      $('#mobileMenu').hide();
      else
      $('#mobileMenu').show();
  });
  $(document).scroll(function(){
      if($(document).width() > 785) {
          if($(document).scrollTop()> $('header').height () + 10)
          $('nav').addClass('fixed');  
          else
          $('nav').removeClass('fixed');  
      }
  });
      window.oneresize = function (event){
          $('#mobileMenu').hide();
      };

  </script>

			 &nbsp; &nbsp; &nbsp; &nbsp;
		
            <div id="obratni">
            <div id="leftCol">
    <input type="text" placeholder="Имя" id="name" name="name"><br>
    <input type="text" placeholder="@mail" id="email" name="email"><br>
    <input type="text" placeholder="Тема сообщения" id="subject" name="subject"><br>
    <textarea name="message" id="message" placeholder="Введите сюда ваше сообщение"></textarea><br>
    <div id="messageShow"></div>
    <input type="button" name="done" id="done" value="Отправить">
            </div>    
        </div>
		</div>
		<br><br>
<footer>
<div id="site_name">
<span>Mr.Robot-market</span> - только у нас, лучший товар по низким ценам!
</div>
<div id="clear"></div>
<div id="footer_menu">
 <a href="https://cp.beget.com/promo" title="Узнать детальней об рекламе">Реклама</a>
 <a href="https://money.yandex.ru/payments/internal/confirmation?orderId=255d06eb-000f-5000-9000-1b45417eacba" title="Поддержать проект оплатой хостинга">Поддержать проект</a>
  <a href="feedback.php" title="Узнать детальней об рекламе">Обратная связь</a>
 </div>
 <div id="rights">
  <a href="">Все права защищены &copy; <?=date ('Y')?></a>
 </div>
 <div id="social">
 <a href="https://www.instagram.com/orange_gang_21/?hl=ru" title="Инстаграм"><i class="fas fa-camera"></i></a>
<a href="https://vk.com/club160868636" title="Вконтакте"><i class="fab fa-vk"></i></a>
<a href="https://t.me/eror00" title="Телеграм"><i class="fab fa-telegram-plane"></i></a>
<a href="https://www.youtube.com/" title="Ютуб"><i class="fab fa-youtube"></i></a>
	</div>
</footer>
</div>
</body>
</html>