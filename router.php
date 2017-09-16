<?php

function rand_podstav_smv($text){
      $text = str_replace('х','x',$text);
    // $text = str_replace('а','a',$text);
    $text = str_replace('р','p',$text);
   //$text = str_replace('о','o',$text);
   $text = str_replace('е','e',$text);
    $text = str_replace('с','c',$text);
    return $text;
}


$REQUEST_URI = $_SERVER['REQUEST_URI'];

$REQUEST_URI = $main_name.$REQUEST_URI;

$REQUEST_URI = str_replace($main_name, $donor_name, $REQUEST_URI );

$REQUEST_URI = str_replace( '74/rosdiplom', '', $REQUEST_URI  );//new

$mainContent = file_get_contents($contentTitle);


$mainContent = str_replace('http://studotzyv.ru/wp-content/uploads/2010/05/www.rosdiplom.ru_-150x150.png', $main_name.'/fi/baza.png', $mainContent  );

//$mainContent = str_replace('url(/fi', 'url('.$donor_name.'/fi', $mainContent  );
//$mainContent = str_replace('src="http', 'gfhtyur', $mainContent  );
//$mainContent = str_replace('href="http', 'gftyur_2', $mainContent  );
//$mainContent = str_replace('mobile-title" href="http://studotzyv.ru/"', 'qoferiid', $mainContent  );
$mainContent = str_replace("src='http", 'sfdfhla', $mainContent  );
$mainContent = str_replace("href='http", 'miiahfd', $mainContent  );
$mainContent = str_replace($donor_name, $main_name, $mainContent  );
//$mainContent = str_replace('gfhtyur', 'src="http',  $mainContent  );
//$mainContent = str_replace('gftyur_2','href="http',  $mainContent  );
$mainContent = str_replace('sfdfhla',"src='http",  $mainContent  );
$mainContent = str_replace('miiahfd', "href='http", $mainContent  );
//$mainContent = str_replace('src="', 'src="'.$donor_name, $mainContent  );
//$mainContent = str_replace('href="/templates/', 'href="'.$donor_name.'/templates/', $mainContent  );
//$mainContent = str_replace('href="/3d-corner-ribbons.css"', 'href="'.$donor_name.'/3d-corner-ribbons.css"', $mainContent  );
//$mainContent = str_replace('href="/favicon.png"', 'href="'.$donor_name.'/favicon.png"', $mainContent  );
//$mainContent = str_replace('gfhtyur', 'src="http', $mainContent  );
//$mainContent = str_replace('http://xn--d1acynfdde.xn--p1ai/engine/modules/antibot/antibot.php', $main_name.'/fi/capcha.jpg', $mainContent  );
$mainContent = str_replace($donor_site_name, $site_name, $mainContent  );
$mainContent = str_replace($donor_site_name_2, $site_name, $mainContent  );
$mainContent = str_replace($donor_site_name_3, $site_name, $mainContent  );
$mainContent = str_replace($donor_site_name_4, $site_name_2, $mainContent  );

$mainContent = str_replace('Росдиплома', 'Базы знаний', $mainContent  );
$mainContent = str_replace('Росдиплому', 'Базе знаний', $mainContent  );
$mainContent = str_replace('Росдипломе', 'Базе знаний', $mainContent  );
$mainContent = str_replace('Росдипломом', 'Базой знаний', $mainContent  );
$mainContent = str_replace('Росдиплом', 'База знаний', $mainContent  );
$mainContent = str_replace('РОСДИПЛОМ', 'БАЗА ЗНАНИЙ', $mainContent  );
$mainContent = str_replace('Рос Диплому', 'Базе Знаний', $mainContent  );
$mainContent = str_replace('Рос Диплом', 'База знаний', $mainContent  );
$mainContent = str_replace('росдипломовцы', 'базазнановцы', $mainContent  );
$mainContent = str_replace('росдиплома', 'базы знаний', $mainContent  );
$mainContent = str_replace('росдиплому', 'базе знаний', $mainContent  );
$mainContent = str_replace('росдипломе', 'базе знаний', $mainContent  );
$mainContent = str_replace('росдипломом', 'базой знаний', $mainContent  );
$mainContent = str_replace('росдиплом', 'база знаний', $mainContent  );
$mainContent = str_replace('РосДиплома', 'Базы Знаний', $mainContent  );
$mainContent = str_replace('РосДиплому', 'Базе Знаний', $mainContent  );
$mainContent = str_replace('РосДипломе', 'Базе Знаний', $mainContent  );
$mainContent = str_replace('РосДипломом', 'Базой Знаний', $mainContent  );
$mainContent = str_replace('Роспдипломе', 'Базе Знаний', $mainContent  );
$mainContent = str_replace('РосДиплом', 'База Знаний', $mainContent  );
//$mainContent = str_replace('www.rosdiplom.ru', 'gsgdfdfd', $mainContent  );
$mainContent = str_replace('rosdiplom.ru', 'znaniumbaza.ru', $mainContent  );


$mainContent = str_replace('Rosdiplom.ru', 'Znaniumbaza.ru', $mainContent  );
$mainContent = str_replace('ROSDIPLOM.RU', 'ZNANIUMBAZA.RU', $mainContent  );
$mainContent = str_replace('RosDiplom', 'ZnaniumBaza', $mainContent  );
$mainContent = str_replace('ROSDIPLOM', 'ZNANIUMBAZA', $mainContent  );


$mainContent = str_replace('Rosdiplom', 'Znaniumbaza', $mainContent  );
$mainContent = str_replace('rosdiplom', 'znaniumbaza', $mainContent  );
$mainContent = str_replace("src='/wp-content/", "src='".$donor_name."/wp-content/", $mainContent  );
$mainContent = str_replace('Москва, ул.Сретенка, д.27/29, стр 1', 'г. Санкт-Петербург, ул. Лермонтова, дом № 8, oф. 184-185', $mainContent  );
$mainContent = str_replace('<span class="city">Москва:</span> +7495 9874136', 'Компания с 2013 года работает без телефонных менеджеров', $mainContent  );
$mainContent = str_replace('<span class="city">Санкт-Петербург:</span> +7812 4485335', 'Это существенно снижает стоимость работ', $mainContent  );
$mainContent = str_replace('<span class="city">Волгоград:</span> +78442 986161', 'Используйте форму заказа на сайте, пишите на почту', $mainContent  );
$mainContent = str_replace('http://studotzyv.ru/rel.php?id=aHR0cDovL3d3dy5yb3NkaXBsb20ucnU=', 'http://znaniumbaza.ru/', $mainContent  );
$mainContent = str_replace('http://studotzyv.ru/rel.php?id=aHR0cDovL3Jvc2RpcGxvbS5ydS96YWthei9mYXN0Lz9yZWY9c3R1ZG90enl2', 'http://znaniumbaza.ru/order.php', $mainContent  );

//$mainContent = str_replace('znaniumbaza', 'rosdiplom', $mainContent  );
$mainContent = str_replace('Публикации</a>', '</a>', $mainContent  );
$mainContent = str_replace('это интересно</a>', '</a>', $mainContent  );

$mainContent = str_replace('</title>', '</title> 
<meta name="yandex-verification" content="80a43da532801369" /> 
<meta name="google-site-verification" content="GcsRvOZwbGGTjMazazkuW89BRHJVLRegysoA5XjM_tw" />', $mainContent  );
//$mainContent = str_replace('gsgdfdfd', 'www.rosdiplom.ru',  $mainContent  );
//$mainContent = str_replace('qoferiid','mobile-title" href="http://studotzyv.ru/"', $mainContent  );
$mainContent = str_replace('src="/wp-content/','src="'.$donor_name.'/wp-content/', $mainContent  );
$mainContent = str_replace('Представительства и офисы компании','Представительства и офисы компании ', $mainContent  );
$mainContent = str_replace('Москва, ул.Сретенка, д.27/29, стр 1','Санкт-Петербург, ул.Лермонтова, д.8', $mainContent  );
$mainContent = str_replace('gglcptch_recaptcha','', $mainContent  );
$mainContent = str_replace('wp-comments-post.php','', $mainContent  );
$mainContent = str_replace('VK.Widgets.Group','', $mainContent  );
$mainContent = str_replace('please-add','', $mainContent  );
$mainContent = str_replace("href='http://studotzyv.ru/raiting","href='".$main_name."/raiting", $mainContent  );
$mainContent = str_replace("href='http://studotzyv.ru/otzyv","href='".$main_name."/otzyv", $mainContent  );
$mainContent = str_replace("55.753994, 37.622093", "59.76351, 30.35746", $mainContent  );
$mainContent = str_replace('icon-home">', 'icon-home">Главная', $mainContent  );
$mainContent = str_replace('карта-сайта', 'wlfjekgjt', $mainContent );





$mainContent = rand_podstav_smv($mainContent);

$mainContent = str_replace('wlfjekgjt', 'карта-сайта',  $mainContent );

echo $mainContent;
