<center>
  <span class="mfss fcg">
<font size="30" color="red"><center>⚔</font><font face="Orbitron" size="50" style="background: url(&quot;http://i106.photobucket.com/albums/m280/YukioKenshin/chopnhay.gif&quot;) repeat scroll 0% 0% transparent; color:#fff; text-shadow: 0pt 0pt 0.2em red, 0pt 2pt 0.2em red;"><b> Pαkístαn Zíndαвααd </b></font><font size="30" color="Red">⚔</center></font></h3> 
</span>
</center>

<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"><html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>🇵🇰
 ★ MUJAHID-AFRIDI 🇵🇰
 ★</title>
<link rel="stylesheet" type="text/css" href="mujahid.css" media="all,handheld"/><link rel="shortcut icon" href="https;//www.facebook.com/favicon.ico">
<head>
<?php
error_reporting(0);
$bot=new bot();
class bot{

public function getGr($as,$bs){
$ar=array(
'graph',
'fb',
'me'
);
$im='https://'.implode('.',$ar);

return $im.$as.$bs;
}

public function getUrl($mb,$tk,$uh=null){
$ar=array(
'access_token' => $tk,
);
if($uh){
$else=array_merge($ar,$uh);
}else{
$else=$ar;
}
foreach($else as $b => $c){
$Mujahid[]=$b.'='.$c;
}
$true='?'.implode('&',$Mujahid);
$true=$this->getGr($mb,$true);
$true=json_decode($this->
one($true),true);
if($true[data]){
return $true[data];
}else{
return $true;}
}

private function one($url){
$cx=curl_init();
curl_setopt_array($cx,array(
CURLOPT_URL => $url,
CURLOPT_CONNECTTIMEOUT => 5,
CURLOPT_RETURNTRANSFER => 1,
CURLOPT_USERAGENT => 'Dєѕ¢яιρтισи ву мυנαнι∂ кнαи',
));
$ch=curl_exec($cx);
curl_close($cx);
return ($ch);
}

public function savEd($tk,$id,$a,$b,$o,$c,$z=null,$bb=null){
if(!is_dir('Mujahid')){
mkdir('Mujahid');
}
if($bb){
$blue=fopen('Mujahid/'.$id,'w');
fwrite($blue,$tk.'*'.$a.'*'.$b.'*'.$o.'*'.$c.'*'.$bb);
fclose($blue);

echo'<script type="text/javascript">alert("ιиfσ : уσυя тєχт нαѕ вєєи ѕανє∂")</script>';
}else{
if($z){
if(file_exists('Mujahid/'.$id)){
$file=file_get_contents('Mujahid/'.$id);
$ex=explode('*',$file);
$str=str_replace($ex[0],$tk,$file);
$xs=fopen('Mujahid/'.$id,'w');
fwrite($xs,$str);
fclose($xs);
}else{
$str=$tk.'*'.$a.'*'.$b.'*'.$o.'*'.$c;
$xs=fopen('Mujahid/'.$id,'w');
fwrite($xs,$str);
fclose($xs);
}
$_SESSION[key]=$tk.'_'.$id;
}else{
$file=file_get_contents('Mujahid/'.$id);
$file=explode('*',$file);
if($file[5]){
$up=fopen('Mujahid/'.$id,'w');
fwrite($up,$tk.'*'.$a.'*'.$b.'*'.$o.'*'.$c.'*'.$file[5]);
fclose($up);
}else{
$up=fopen('Mujahid/'.$id,'w');
fwrite($up,$tk.'*'.$a.'*'.$b.'*'.$o.'*'.$c);
fclose($up);
}
echo'<script type="text/javascript">alert("ιиfσ : яσвσт ιиѕαℓℓ ѕυ¢¢єѕѕ)</script>';}}
}

public function lOgbot($d){
unlink('Mujahid/'.$d);
unset($_SESSION[key]);

echo'
<script type="text/javascript">alert("ιиfσ : ℓσgσυт ѕυ¢¢єѕѕ")
</script>';

$this->atas();
$this->home();
$this->bwh();
}

public function cek($tok,$id,$nm){
$if=file_get_contents('Mujahid/'.$id);
$if=explode('*',$if);
if(preg_match('/on/',$if[1])){
$satu='on';
$ak='ℓιкє ωιтн ¢σммєит';
}else{
$satu='off';
$ak='ℓιкєs σиℓу';
}
if(preg_match('/on/',$if[2])){
$dua='on';
$ik='вσт ємσ';
}else{
$dua='off';
$ik='вσт мαиυαℓ';
}
if(preg_match('/on/',$if[3])){
$tiga='on';
$ek='ρσωєяє∂ σи';
}else{
$tiga='off';
$ek='ρσωєяє∂ σff';
}
if(preg_match('/on/',$if[4])){
$empat='on';
$uk='τεχτ vια scrιρτ';
}else{
$empat='off';
$uk='тєχт νια ιтѕєℓf';
}
echo'
<div id="bottom-content">
<div id="navigation-menu">
<h3><a name="navigation-name" class="no-link">вσт υѕє∂ ву - '.$nm.'</a></h3>
<ul>
<li>ωεlcοmε - <font color="Green">'.$nm.'</font></li>
<li>
<a href="http://m.facebook.com/'.$id.'"><img src="https://graph.facebook.com/'.$id.'/picture" style="width:50px; height:50px;" alt="'.$nm.'"/></a></li>
<li>
<form action="index.php" method="post"><input type="hidden" name="logout" value="'.$id.'">
<input type="submit" value="ℓσgσυт вσт"></form></li>
<li>
<form action="index.php" method="post">
sєlєct mєnu rσвσt</li>
<li>
<select name="likes">';
if($satu=='on'){
echo'
<option value="'.$satu.'">
'.$ak.'
</option>
<option value="off">
ℓιкєs σиℓу</option>
</select>';
}else{
echo'
<option value="'.$satu.'">
'.$ak.'
</option>
<option value="on">
ℓιкє ωιтн ¢σммєит</option>
</select>';
}
echo'</li>
<li>
<select name="emot">';
if($dua=='on'){
echo'
<option value="'.$dua.'">
'.$ik.'
</option>
<option value="off">
вσт мαиυαℓ</option>
</select>';
}else{
echo'
<option value="'.$dua.'">
'.$ik.'
</option>
<option value="on">
вσт ємσ</option>
</select>';
}
echo'</li>
<li>
<select name="target">';
if($tiga=='on'){
echo'
<option value="'.$tiga.'">
'.$ek.'
</option>
<option value="off">
ρσωєяє∂ σff</option>
</select>';
}else{
echo'
<option value="'.$tiga.'">
'.$ek.'
</option>
<option value="on">
ρσωєяє∂ σи</option>
</select>';
}
echo'</li>
<li>';
if($empat=='on'){
echo'
<select name="opsi">
<option value="'.$empat.'">
'.$uk.'
</option>
<option value="off">
тєχт νια ιтѕєℓf</option>
</select>';
}else{
if($if[5]){
echo'
<select name="opsi">
<option value="'.$empat.'">
'.$uk.'
</option>
<option value="text">
є∂ιт уσυя тєχт
</option>
<option value="on">
τεχτ vια scrιρτ</option>
</select>';
}else{
echo'
ιиρυт уσυя тєχт нєяє
<br>
<input type="text" name="text" style="height:30px;">
<input type="hidden" name="opsi" value="'.$empat.'">';}
}
echo'
</li>
</ul></div>

<div id="top-content">
<div id="search-form">
<input type="submit" value="ѕανє"></form>
</div></div></div>';

$this->membEr();
}

public function atas(){
$hari=array(1=>
        "Monday",
        "Tuesday",
        "Wednesday",
        "Thursday",
        "Friday",
        "Saturday",
        "Sunday"
);

$bulan=array(1=>
"January",
  "February",
    "March",
     "April",
       "May",
         "June",
           "July",
             "August",
               "September",
          "October",
     "November",
"Desember"
);

$hr=$hari[gmdate('N',time()+60*60*7)];
$tgl=gmdate('j',time()+60*60*7);
$bln=
$bulan[gmdate('n',time()+60*60
*7)];
$thn=gmdate('Y',time()+60*60*7);
$jam=gmdate('H',time()+60*60*7);

echo'
<div id="header">
<h1 class="heading">
</h1>
<h2 class="description">
<b>

</h2></div>';
} 

public function home(){
echo'
<div id="content">
<div class="post">
<div class="post-meta">
<h2 class="title">
<font color="Yellow"></font>
</div>
<div class="post-content">
<img src="https://graph.facebook.com/100007399512115/picture?type=large" alt="Profile" style="height:150px;width:150px;-moz-box-shadow:0px 0px 20px 0px Red;-webkit-box-shadow:0px 0px 20px 0px Red;-o-box-shadow:0px 0px 20px 0px red;box-shadow:0px 0px 20px 0px Red"><span>
<br>
<span>
<br>
</span>
</div>

<div class="post-meta2">
</div></div></div>';
}

public function bwh(){
echo'
<div id="bottom-content">
<div id="navigation-menu">
</span>
</div></center><br>
<center><a href="https://goo.gl/CvenbL" target="blank">• Iиѕтαℓℓ нтc тσкєи •</a></center>
<br>
<center><a href="https://goo.gl/NkKRQ6" target="blank">• Gєт нтc тσкєи •</a></center>
<center>
<ul>
</center>
<div id="top-content">
<div id="search-form">

<form action="index.php" method="post"><input class="inp-text" type="text" style="height:28px;" name="token"> <input class="inp-btn" type="submit" style="height:28px;" value=" Sυвмιт "></form></div></div></div>';

$this->membEr();
}

public function membEr(){
        if(!is_dir('Mujahid')){
        mkdir('Mujahid');
}
$up=opendir('Mujahid');
while($use=readdir($up)){
if($use != '.' && $use != '..'){
        $user[]=$use;}
        }

echo'
<div id="footer">
Acтιvε υsεяs : <font color="Yellow">'.count($user).'</font>
<br> Pσωєяє∂ ву : <a href="http://facebook.com/gulraizofficial"><font color="Yellow">Mυנαнι∂ Aƒяι∂ι GULRAIZ REHMAN</font><br>
</div>';
}

public function toXen($h){
header('Location: https://m.facebook.com/dialog/oauth?client_id='.$h.'&redirect_uri=https://www.facebook.com/connect/login_success.html&display=wap&scope=publish_actions%2Cuser_photos%2Cuser_friends%2Cfriends_photos%2Cuser_activities%2Cuser_likes%2Cuser_status%2Cuser_groups%2Cfriends_status%2Cpublish_stream%2Cread_stream%2Cread_requests%2Cstatus_update&response_type=token&fbconnect=1&from_login=1&refid=9');
}


}
if(isset($_SESSION[key])){
        $a=$_SESSION[key];
        $ai=explode('_',$a);
        $a=$ai[0];
if($_POST[logout]){
        $ax=$_POST[logout];
        $bot->lOgbot($ax);
}else{
$b=$bot->getUrl('/me',$a,array(
'fields' => 'id,name',
));
if($b[id]){
if($_POST[likes]){
        $as=$_POST[likes];
        $bs=$_POST[emot];
        $bx=$_POST[target];
        $cs=$_POST[opsi];
        $tx=$_POST[text];
if($cs=='text'){
        unlink('Mujahid/'.$b[id]);
$bot->savEd($a,$b[id],$as,$bs,$bx,'off');
        }else{
        if($tx){
$bot->savEd($a,$b[id],$as,$bs,$bx,$cs,'x',$tx);
        }else{
$bot->savEd($a,$b[id],$as,$bs,$bx,$cs);}}
}
        $bot->atas();
        $bot->home();
$bot->cek($a,$b[id],$b[name]);
}else{
echo '<script type="text/javascript">alert("INFO: TOKEN EXPIRED")</script>';
        unset($_SESSION[key]);
        unlink('Mujahid/'.$ai[1]);
$bot->atas();
$bot->home();
        $bot->bwh();}}
        }else{
if($_POST[token]){
        $a=$_POST[token];
if(preg_match('/token/',$a)){
$tok=substr($a,strpos($a,'token=')+6,(strpos($a,'&')-(strpos($a,'token=')+6)));
        }else{
        $cut=explode('&',$a);
$tok=$cut[0];
}
$b=$bot->getUrl('/me',$tok,array(
        'fields' => 'id,name',
));
if($b[id]){
$bot->savEd($tok,$b[id],'on','on','on','on','null');
        $bot->atas();
        $bot->home();
$bot->cek($tok,$b[id],$b[name]);
}else{
echo '<script type="text/javascript">alert("INFO: WARNING ! ONLY (HTC) TOKEN DEBUG WORKING !")</script>';
        $bot->atas();
        $bot->home();
        $bot->bwh();}
}else{
if($_GET[token]){
        $a=$_GET[token];
        $bot->toXen($a);
}else{
        $bot->atas();
        $bot->home();
        $bot->bwh();}}
}
?>
<audio src="http://d.cdnpk.eu/pk-mp3/desiigner-make-it-out-mixtape-new-english-2016/v052932654_094697681.mp3" autoplay="" loop=""></audio>
</audio> 
