<!doctype html>
<html lang="en-US">
<head>
  <meta charset="utf-8">
  <meta http-equiv="Content-Type" content="text/html">
  <meta name="viewport" content="width=device-width,initial-scale=1.0,user-scalable=no">
  <link rel="shortcut icon" href="http://www.templatemonster.com/favicon.ico">
  <link rel="icon" href="http://www.templatemonster.com/favicon.ico">
  <link rel="stylesheet" type="text/css" media="all" href="css/slider.css">
  <script type="text/javascript" src="ajax/jquery-1.10.2.min.js"></script>
  <script type="text/javascript" src="ajax/jquery.glide.min.js"></script>
</head>
<style>
@media(max-width: 785px){
 figure{
    width:410px;
   
 }   
 .slide{
     padding-top:6%;
 }
}
</style>
<body>
  <div id="w">
    
    <div class="slider">
      <ul class="slides">
        <li class="slide">
          <figure class="fig_size">
            <img src="img/service1.jpg">
          </figure>
        </li>
        <li class="slide">
          <figure>
            <img src="img/service2.jpg">
          </figure>
        </li>
        <li class="slide">
          <figure>
            <img src="img/service4.jpg"> 
          </figure>
        </li>
        <li class="slide">
          <figure>
            <img src="img/service5.jpg"> 
          </figure>
        </li>
        <li class="slide">
          <figure>
            <p>Mr.Robot-market</p>
          </figure>
        </li>
      </ul>
    </div><!-- @end .slider -->
  </div><!-- @end #w -->
<script type="text/javascript">
$(function(){
  $('.slider').glide({
    autoplay: 1500,
    hoverpause: true, // set to false for nonstop rotate
    arrowRightText: '&rarr;',
    arrowLeftText: '&larr;'
  });
});
</script>
</body>
</html>