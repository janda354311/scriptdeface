<!DOCTYPE html>

<html><head>
<style type='text/css'>
/* Efek Salju Berjatuhan */
.snowball{position:fixed;top:0;left:0;right:0;pointer-events:none;z-index:20}
.snowsand{height:100%;position:relative;overflow:hidden;z-index:1}
</style>
<center><title>Terheked :)</title><meta http-equiv="Content-Type" content="text/html; charset=utf-8"><meta property="og:title" content=""><meta property="og:description" content="DDOSCYBER"/><meta content="" name="Abstract"><meta name=""><meta charset="utf-8"><meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<script type="text/javascript" src="js/bootstrap.min.js"></script>
<script type="text/javascript" src="js/jquery.js"></script>
<script type="text/javascript" src="js/jquery-1.10.2.min.js.download"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<style type="text/css">/* latin */ @font-face { font-family: 'Iceberg'; font-style: normal; font-weight: 400; src: local('Iceberg'), local('Iceberg-Regular'), url(https://fonts.gstatic.com/s/iceberg/v7/8QIJdijAiM7o-qnZiI8EqprnEO0.woff2) format('woff2'); unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD; }</style>
<style type="text/css">/* latin */@font-face { font-family: 'Wallpoet'; font-style: normal; font-weight: 400; src: local('Wallpoet'), url(https://fonts.gstatic.com/s/wallpoet/v11/f0X10em2_8RnXVVdUObp58Tt868H.woff2) format('woff2'); unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;}</style>
<style type="text/css"> @import url('https://fonts.googleapis.com/css?family=Nunito');@import url('https://fonts.googleapis.com/css?family=Poiret+One');body, html {height: 100%;background-repeat: no-repeat; /*background-image: linear-gradient(rgb(12, 97, 33),rgb(104, 145, 162));*/background:black;position: relative;}#{ width: 100%; height: 100%; background-size: cover; background-position: 50% 50%; position: fixed; top: 0px; z-index:1;}h1{font:1.5em Cinzel,serif;font-weight:400;letter-spacing:.35em;text-shadow:0 0 25px rgba(254,254,255,.85);width:70%} } footer { margin: 20%; } #a { onmousedown:stop; animation-name: rotate ; animation-duration: 5s; animation-play-state: running; animation-timing-function: linear; animation-iteration-count: infinite; opacity: 1.0;filter: alpha(opacity=50);} img:hover {opacity: 1.0;filter: alpha(opacity=100);} @keyframes rotate{ 10% {transform:rotateY(36deg)} 20% {transform:rotateY(72deg)} 30% {transform:rotateY(108deg)} 40% {transform:rotateY(144deg)} 50% {transform:rotateY(180deg)} 60% {transform:rotateY(216deg)} 70% {transform:rotateY(252deg)} 80% {transform:rotateY(288deg)} 90% {transform:rotateY(324deg)} 100% {transform:rotateY(360deg)} }</style></head><body><frame width="0" height="0" scrolling="no" frameborder="no" allow="autoplay" src="https://api.soundcloud.com/tracks/621629952/stream?client_id=a3e059563d7fd3372b49b37f00a00bcf"></iframe><body background=" &#10;" title="UBED DILLAH OWNER" bgcolor="black"><iframe width="0" height="0" src="https://f.top4top.io/m_1822bvdel0.mp3" frameborder="0" ></iframe> 
<style type="text/css">.blink_me{font-size:40px;-webkit-animation-name:blinker;-webkit-animation-duration:2s;-webkit-animation-timing-function:linear;-webkit-animation-iteration-count:infinite;-moz-animation-name:blinker;-moz-animation-duration:2s;-moz-animation-timing-function:linear;-moz-animation-iteration-count:infinite;animation-name:blinker;animation-duration:1s;animation-timing-function:linear;animation-iteration-count:infinite;}@-moz-keyframes blinker{0% {opacity:1.0;}50% {opacity:0.0;}100% {opacity:1.0;}}@-webkit-keyframes blinker{ 0% {opacity:1.0;}50% {opacity:0.0;}100% {opacity:1.0;}}@keyframes blinker{0% {opacity:1.0;}50% {opacity:0.0;}100% {opacity:1.0;}}</style><blink>
<div class='snowsand'>
<canvas class='snowball' id='snowball'></canvas>
</div>
<script type='text/javascript'>
//<![CDATA[
!function(){function t(t){var n=t.getContext("2d"),e=0,i=0,o=[],d=function(){this.x=this.y=this.dx=this.dy=0,this.reset()};function a(){e=window.innerWidth,i=window.innerHeight,t.width=e,t.height=i,function(t){if(t!=o.length){o=[];for(var n=0;n<t;n++)o.push(new d)}}(e*i/1e4)}d.prototype.reset=function(){this.y=Math.random()*i,this.x=Math.random()*e,this.dx=1*Math.random()-.5,this.dy=.5*Math.random()+.5},a(),function t(){n.clearRect(0,0,e,i),n.fillStyle="rgba(255,255,255,.3)",o.forEach(function(t){t.y+=t.dy,t.x+=t.dx,t.y>i&&(t.y=0),t.x>e&&(t.reset(),t.y=0),n.beginPath(),n.arc(t.x,t.y,5,0,2*Math.PI,!1),n.fill()}),window.requestAnimationFrame(t)}(),window.addEventListener("resize",a)}var n;n=function(){t(document.getElementById("snowball"))},"loading"!=document.readyState?n():document.addEventListener("DOMContentLoaded",n)}();
//]]>
</script>

<img src="https://k.top4top.io/p_1798m2nn40.gif"  width="400"height="400"/>


<p><br><br><br><br><center></b><font size="3,5"<font color="white">HACKED BY <br><br><span class="blink_me"><font size="5 " color="Red" face="Wallpoet" style="text-shadow: 5px 0px 30px red;">DDOS CYBER TEAM </font></center></span><br><br><center><font size="1" color="grey" face="Iceberg"> </font><font size="3"<color="red" face="Iceberg">DDOS CYBER MENGUCAPKAN SELAMAT HARI NATAL MERRY CHRISTMAS🎅</span></font> <font size="1" color="grey" face="Iceberg"> <span style="color:white;" id="17"></span></font></center> 
<center><br/></center><marquee scrollamount="30" behavior="alternate" width="100%"><font size="3" <font color="red">______________________________________</font> </marquee></font> <center><font size="1" color="lightblue"><marquee width="100%"><b><u>
<br>
<font face="iceberg" size="2px" color="red">OFFICIAL DDOS CYBER TEAM
</b></u></marquee></center><marquee scrollamount="30" behavior="alternate" width="100%"><font size="3"><font color="red">_____________________________________________________</font></marquee></font></body></font>
 <body bgcolor=black><table width=100% height=100%><td align=center><span style='font: 60px fantasy;size:60px; color:#FFFAF0; text-shadow: 5px 5px 60px #87CEFA;'><img src='https://i.top4top.io/p_1821d6f3s0.gif'width="400"height="400"><br><marquee behavior="scroll" direction="left" scrollamount="90" scrolldelay="40" width="100%">
<font color="Blue">___________________________________________________________</font></marquee><br><font face="Londrina Sketch"><font size="15" 
color="red">DAN SELAMAT TAHUN BARU🥳</font></font></font></font></marquee></center><br><marquee behavior="scroll" direction="right" scrollamount="90" scrolldelay="40" width="100%">
	<font color="Blue">___________________________________________________________</font></marquee>
      <center>
      	
<img src="https://j.top4top.io/p_18216u0pd0.gif"  width="250"height="250"/>


</script>
<marquee direction="right" scrollamount="5"><a href="" imageanchor="1" style="margin-left: 1em; margin-right: 1em;"><img border="0" data-original-height="430" data-original-width="539" height="155" src="https://j.top4top.io/p_1798q9fbt0.jpg" width="220" /></a></marquee>
</script>
 <br><span class="blink_me"><font size="4" color="white" face="Wallpoet" style="text-shadow: 5px 0px 27px Blue;">Powered By DDOS CYBER TEAM <br><a href="https://f.top4top.io/m_1822bvdel0.mp3">COPYRIGHT© 2020<br></span></center>
</script></font>
	<div style="text-shadow: 0px 0px 10px green;"><span style="color: white;"><font face="Chewy" size="4"><b>Thanks To: <marquee scrollamount="5" direction="left" width="40%"><span style="color: red;"> <span style="color: red;">UBED DILLAH <span style="color: red;"></b></marquee></font></div><script type="text/rocketscript">/*<![CDATA[*/new TypingText(document.getElementById("message"), 90, function(i){ var ar= new Array("_", " ", "_", " "); return "" 

</script>
<video width="320" height="240" controls>
  <source src="https://h.top4top.io/m_1821qwxb10.mp4" type="video/mp4">
  <source src="https://h.top4top.io/m_1821qwxb10.mp4" type="video/ogg">
  
</video>

</html>

















