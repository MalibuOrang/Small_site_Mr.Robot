<!DOCTYPE html>
<html>
    <head>
<title>Магазин</title>
	<meta charset="utf-8">
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
.conteiner{
 display: grid;  
    grid-gap: 5px;  
    grid-template-columns: repeat(auto-fit, minmax(100px, 1fr));
    grid-template-rows: repeat(2, 100px);  
}
.cont{
    grid-gap: 2px; 
     grid-template-columns: repeat(auto-fit, minmax(50px, 1fr));
     grid-template-rows: repeat(2, 50px);
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
<script type="text/javascript">var hellopreloader = document.getElementById("hellopreloader_preload");function fadeOutnojquery(el){el.style.opacity = 1;var interhellopreloader = setInterval(function(){el.style.opacity = el.style.opacity - 0.05;if (el.style.opacity <=0.05){ clearInterval(interhellopreloader);hellopreloader.style.display = "none";}},16);}window.onload = function(){setTimeout(function(){fadeOutnojquery(hellopreloader);},1500);};</script>
<div id="wrapper">
<div id="content">
		<header id="header">
		  <div id="logo">
			<a href="index.php" title="На главную">
			<!-- Нужно добавить ссылку на сайт когда будет хостинг -->
			<img src="img/Mr-robot.jpg" title="Mr.Robot-market.com" alt="Mr.Robot-market.com">
			<div class="cont"><span id="Mrobot">Mr.Robot-market</span></div>
			</a>
			</div>
			<div class="container">  
			<div id="about">
			<!-- Основные ссылки навигации по сайту нужно будет добавить ссылки для переход в описаные ниже пункты -->
			<a href="index.php" title="Перейти на главную страницу"> Главная </a> 
				<a href="https://cp.beget.com/promo" title="Перейти на главную страницу"> Реклама </a> 
			</div>
			</div>
            <div class="cont">
			<div id="reg_auth">
		
			<!-- Кнопка для перехода в магазин нужно будет добавить ссыоку на переход в магазин -->
			<a href="magazin.php" title="Зайти в магазин">  
			<div id="but">
			<i class="fas fa-store"> Магазин</i>
			</div>
			</a>
			</div>
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
		<?php
require_once 'include/database.php';
require_once 'include/functions.php';
?>
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
</div>
</html>
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