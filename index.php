<!DOCTYPE html>
<html>
	<head>
	<meta charset="utf-8">
	<title>Главная</title>
	
	<!-- Описание стиля подключение файла css -->
	<link rel="stylesheet" href="css/main.css" type="text/css" charset="utf-8">
	<link rel="stylesheet" href="css/footer.css" type="text/css" charset="utf-8">
	<link rel="stylesheet" href="css/new_css.css" type="text/css" charset="utf-8">
	<link rel="stylesheet" href="css/header.css" type="text/css" charset="utf-8">
	<link href="css/all.css" rel="stylesheet">
    <!-- Описание метаданных для поисковика -->
    <meta name="description" content="Интернет-магазин для продажи приставок и игр для приставок для всех пользователей интернета!">
    <meta name="keywords" content="Купить приставку, игры для приставок, приставки">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	</head>
	<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.10.1/jquery.min.js"></script>  
     <script type="text/javascript">$(window).on('load', function () {
    var $preloader = $('#p_prldr'),
        $svg_anm   = $preloader.find('.svg_anm');
    $svg_anm.fadeOut();
    $preloader.delay(500).fadeOut('slow');
     });</script>
	<style>
body{
 background: linear-gradient( rgba(245,245,245,0.8), rgba(245,245,245, 0.8) ), url('img/background.jpg');
 overflow-x: hidden !important;  
}
   #footer_menu
   {
       margin-right:40%;
   }
   .Chatchestvo:hover{
  -webkit-transform: scale(0.7);
  -ms-transform: scale(0.7);
  transform: scale(0.7);
   }
   .Dostavka:hover{
       -webkit-transform: scale(0.7);
  -ms-transform: scale(0.7);
  transform: scale(0.7);
   }
   .Oplata:hover{
       -webkit-transform: scale(0.7);
  -ms-transform: scale(0.7);
  transform: scale(0.7);
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
iframe{
    width:50%;
    margin-left:25%;
}
 @media(max-width: 785px){
     iframe{
         width:100%;
         margin-left:-1%;
       }
        #but{
           display:none;
       }
 }
 @media (max-width: 785px) { 
       .Chatchestvo{
          width:60%;
          margin-left:15%;
       }
       .Dostavka{
          width:40%;
          margin-left:25%;
       }
       .Oplata{
           float:left;
           width:60%;
           margin-left:15%;
       }
       #about{
           padding-top:10%;
           margin-left:20%;
       }
      
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
   }
   </style>
<div id="hellopreloader"><div id="hellopreloader_preload"></div><p><a href="http://hello-site.ru">Hello-Site.ru. Бесплатный конструктор сайтов.</a></p></div>
<script type="text/javascript">var hellopreloader = document.getElementById("hellopreloader_preload");function fadeOutnojquery(el){el.style.opacity = 1;var interhellopreloader = setInterval(function(){el.style.opacity = el.style.opacity - 0.05;if (el.style.opacity <=0.05){ clearInterval(interhellopreloader);hellopreloader.style.display = "none";}},16);}window.onload = function(){setTimeout(function(){fadeOutnojquery(hellopreloader);},1000);};</script>
<div id="wrapper">
<div id="content">
		<header>
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
			<div id="reg_auth">
			<!-- Кнопка для перехода в магазин нужно будет добавить ссыоку на переход в магазин -->
			<a href="magazin.php" title="Зайти в магазин">  
			<div id="but">
			<i class="fas fa-store"> Магазин</i>
			</div>
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
		<h2>Магазин игровых приставок и игр</h2>
		
	<p class="info">
    Локации игровых Вселенных PS4, Xbox, Nintendo и их обитатели – это отдельный виток культуры современности. 
	Когда реальность подбрасывает проблемы и перегружает стрессом, запуск консоли с любимым диском станет прекрасной альтернативой психологам или употреблению разного рода успокоительных. 
	Доказано, что любители игр способны лучше и быстрее принимать решения, опираясь на опыт виртуальных прохождений, а также более слаженно работают в команде. 
	Их навыки тактического мышления и построения логических взаимосвязей значительно опережают ровесников, наделяя владельца преимуществами. 
	Так задания на поиск информации учат коммуникации, а миссии на скорость вынуждают просчитывать каждый шаг. 
	Если важной частью жизни является креатив и творчество, то посещение красочных локаций станет отличным источником вдохновения, оставляя после себя незабываемые эмоции. 
	Присоединяйся в ряды профессиональных геймеров, начиная путь с игромана-любителя уже сегодня. 
	Интернет магазин Mr.Robot-market предлагает Вам купить самые современные приставки, игры и аксессуары для PlayStation, Xbox и Nintendo. 
	Только у нас вы найдете последние игровые новинки по лучшим ценам. Нам доверяют тысячи клиентов, стань одним из них!</p>
    
  
	<ul>
	    
   <li class="Chatchestvo"><img src="img/garantia.png" width="100" height="70">
   <span class="span">Официальная гарантия и доставка</span></li>
    
	
   <li class="Dostavka"><img src="img/delivery.png" width="90" height="70" >
   <span class="span">Быстрая доставка по Украине</span></li>
	
	
	<li class="Oplata"><img src="img/oplata.png" width="80" height="5">
    <span class="span"><br>Удобна любая оплата</b></span></li>
	<br><br><br><br><br><br><br><br><br><br><br><br><br><br>
	</ul>
	
		<h3> Официальная доставка и гарантия </h3>
<ul>
	<li> Уверенность в качестве предлагаемых товаров. </li>
</ul>
    <h3> Быстрая доставка. </h3>
<ul>
	<li> Доставка по Киеву(в течении дня).</li>
	<li> Украине (1-3 дня).</li>
</ul>
    <h3> Удобная оплата </h3>
<ul>
	<li> Принимаем оплату наличными или через карту.</li>
</ul>
	<br><br>
    <h2>Интернет магазин Mr.Robot-market</h2>
	<p class="info">Игровые миры – это отдельные истории со своим сюжетом, переживаниями и чередой насыщенных событий. Они позволяют перейти грань реальности и испытать невероятные эмоции от настоящих приключений. 
	В жизни игрок может быть ограничен обстоятельствами или правом выбора, но стоит только запустить консоль Playstation 4, Xbox One или Nintendo, как понятие «границы» просто перестанет существовать. 
	Отправляйся в путешествие к затерянным гробницам в бродилках жанра Advantour, исследуй параллельные Вселенные в фантастических шутерах, одним словом, пересекай пространство и время с геймпадом в руках, примеряя на себе очередную роль. 
	Прямо здесь и сейчас исход борьбы зависит только от лично принятых решений. Отбрось сомнения и раскрой в себе героя, которым был рожден!
    </p>
	<h2>Все товары для геймера, собранные в одном месте</h2>
	<p class="info">
	 Больше не придётся бесконечно долго бродить на просторах Интернета в поисках самых выгодных предложений на game-атрибуты, ведь теперь все новинки видеоигр, консолей последних моделей и аксессуаров собраны воедино в каталоге Интернет-магазина Gamepost. 
	 Хочешь купить приставку PS4 в Украине по выгодной цене? Заказать бандл с играми в комплекте? 
	 А может настало время пополнить ряды коллекции дисков или прикупить дополняющие гаджеты? 
	 Все это и даже больше доступно к приобретению одним кликом, независимо от места нахождения покупателя.
    </p>
	<h2>Особенности и преимущества:</h2>
	<p>
1. Доставка по Киеву и в любой город Украины: жители столицы получат желаемую покупку уже в течении дня самовывозом или курьером, а проживающие из других регионов (например, Харьков, Одесса, Николаев, Херсон, Днепр, Львов, Житомир, Ровное, Хмельницкий, Винница и другие) смогут забрать посылку Новой почтой не позднее 2-3 дней с момента отправки;

<br><br>2. Уникальные товары, которым нет аналогов: в разделе Гик культура подобраны крутые рюкзаки, необычные кошельки, брелочки, модные кепки и прочие сувениры на тематику Супергероев, персонажей Marvel, DC, Comics, а также кумиров из сериалов или популярных игр. Они станут прекрасным отличительным знаком любителя виртуальных миров как в личном применении, так и в качестве подарка друзьям;

<br><br>3. Официальная гарантия: вся продукция от Sony PlayStation, Xbox One, Nintendo Switch лицензирована гарантом качества;

<br><br>4. Акции и заманчивые предложения: в соответствующем разделе покупатель всегда найдет отдельные позиции предлагаемых новинок со скидкой до 30% от стоимости.

Присоединяйся к молодежному движению ценителей игровой культуры прямо сейчас! Узнавай сразу о выходе очередного продукта и будь в числе первых, кто опробует его возможности во всех тонкостях.  
    </p>
	<h2>Как купить игровую приставку PS4, Xbox, Nintendo в магазине Mr.Robot-market?</h2>
	<p class="info">
	 Пройтись на шопинг виртуально так же просто, как в обычном бутике. Если позиция пришлась по вкусу - просто положи ее в корзину без каких-либо обязательств. 
	 Готов заказать? Кликай на соответствующую кнопку в меню или жми "купить в один клик". По всем вопросам обращайся через удобный канал связи из раздела "Контакты". 
	</p>
	<p><iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d7123.590235576903!2d35.37316908691994!3d46.84900836468063!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x40c2ae1c42ef0119%3A0x317d5a5d3df9e89b!2z0KLQsNCy0YDQuNGH0LXRgdC60LjQuSDQk9C-0YHRg9C00LDRgNGB0YLQstC10L3QvdGL0Lkg0JDQs9GA0L7RgtC10YXQvdC-0LvQvtCz0LjRh9C10YHQutC40Lkg0KPQvdC40LLQtdGA0YHQuNGC0LXRgg!5e0!3m2!1sru!2sua!4v1573588371371!5m2!1sru!2sua" width="400" height="400" frameborder="0" style="border:0;" allowfullscreen="allowfullscreen">
	</p>
	</iframe>
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