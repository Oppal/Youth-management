<!DOCTYPE HTML>
<html>
<head>
<title>home</title>
<link
rel="stylesheet"
type="text/css"
href="ycsms.css"/>
<div>
    <nav >
<a ><img class="img" src="contact.PNG" style="width:2%;height:2%;">07112228222</a>
<a style="float:right" href="www.facebook.com"><img class="img" src="facebook.ico" style="width:10%;height:10%;"></a>
<a style="float:right"href="www.twitter.com"><img src="twitter.PNG" style="width:10%;height:10%;"></a>
<a style="float:right"href="www.youtube.com" ><img src="youtube.JPG" style="width:10%;height:10%;"></a>
</nav>


<hr>
</div>
<div class="container-full joinbar">
<div class="main"style="background-color:white; font-size:20px"> 
	<header><nav><div class style="background-image:url(wbb.PNG); color:white"><img src="logo.png"style="width:100px; height:100px;"><a href="index.php"style="padding:50px;color:black;hover:red;text-decoration: none;">Home</a><a href="about.php"style="color:black; padding:50px;text-decoration: none;">About</a><a href="join.php"style="padding:25px; color:black;text-decoration: none;">How to Join</a><a href="contact.html"style="padding:25px;color:black;text-decoration: none;">Contact Us</a><a href="login.html"style="padding:25px;color:black;text-decoration: none;">Login</a></nav></header>


</div>
</div>
    </head>
    <body>
           </div><div class="slideshow-container">

<div class="mySlides fade">
  <div class="numbertext">1 / 7</div>
  <img src="Environment-69.jpg" style="height: 500px;width:100%">
  <div class="text">Caption one</div>
</div>

<div class="mySlides fade">
  <div class="numbertext">2 / 7</div>
  <img src="africa1.jpg" style="width:100%">
  <div class="text">Caption Two</div>
</div>

<div class="mySlides fade">
  <div class="numbertext">3 / 7</div>
  <img src="africa2.jpg" style="height:500px;width:100%">
  <div class="text">Caption Three</div>
</div>
<div class="mySlides fade">
  <div class="numbertext">4 / 7</div>
  <img src="child.jpg" style="height:500px;width:100%">
  <div class="text">Caption Four</div>
</div>
<div class="mySlides fade">
  <div class="numbertext">5 / 7</div>
  <img src="jimas.jpg" style="height:500px;width:100%">
  <div class="text">Caption Five</div>
</div>

<div class="mySlides fade">
  <div class="numbertext">6 / 7</div>
  <img src="volunteer.jpg" style="height:500px;width:100%">
  <div class="text">Caption Six</div>
</div>
<div class="mySlides fade">
  <div class="numbertext">7 / 7</div>
  <img src="yy.jpg" style="height:500px;width:100%">
  <div class="text">Caption Seven</div>
</div>
<br>

<div style="text-align:center">
  <span class="dot"></span> 
  <span class="dot"></span> 
  <span class="dot"></span>
  <span class="dot"></span>
  <span class="dot"></span>
  <span class="dot"></span> 
  <span class="dot"></span>
</div>
  <script>
var slideIndex = 0;
showSlides();

function showSlides() {
    var i;
    var slides = document.getElementsByClassName("mySlides");
    var dots = document.getElementsByClassName("dot");
    for (i = 0; i < slides.length; i++) {
       slides[i].style.display = "none";  
    }
    slideIndex++;
    if (slideIndex> slides.length) {slideIndex = 1}    
    for (i = 0; i < dots.length; i++) {
        dots[i].className = dots[i].className.replace(" active", "");
    }
    slides[slideIndex-1].style.display = "block";  
    dots[slideIndex-1].className += " active";
    setTimeout(showSlides, 2000); // Change image every 2 seconds
}
</script>
<hr style = "height: 30px; 
  border-style: solid; 
  border-color: red; 
  border-width: 1px 0 0 0; 
  border-radius: 20px;
   ">

        </body>






    </html>
