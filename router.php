<?php

function rand_podstav_smv($text){
      //$text = str_replace('х','x',$text);
     $text = str_replace('а','a',$text);
    $text = str_replace('р','p',$text);
   //$text = str_replace('о','o',$text);
   //$text = str_replace('е','e',$text);
    $text = str_replace('с','c',$text);
    return $text;
}


$REQUEST_URI = $_SERVER['REQUEST_URI'];



$REQUEST_URI = $main_name.$REQUEST_URI;

$REQUEST_URI = str_replace($main_name, $donor_name, $REQUEST_URI );

$REQUEST_URI = str_replace( '74/rosdiplom', '', $REQUEST_URI  );//new

$contentTitle = str_replace($raskrutka_site_2, 'rosdiplom', $REQUEST_URI );

$mainContent = file_get_contents($contentTitle);


$mainContent = str_replace('http://studotzyv.ru/wp-content/uploads/2010/05/www.rosdiplom.ru_-150x150.png', $main_name.'/fi/baza.png', $mainContent  );

$mainContent = str_replace("src='http", 'sfdfhla', $mainContent  );
$mainContent = str_replace("href='http", 'miiahfd', $mainContent  );
$mainContent = str_replace($donor_name, $main_name, $mainContent  );

$mainContent = str_replace('sfdfhla',"src='http",  $mainContent  );
$mainContent = str_replace('miiahfd', "href='http", $mainContent  );

$mainContent = str_replace($donor_site_name, $site_name, $mainContent  );
$mainContent = str_replace($donor_site_name_2, $site_name, $mainContent  );
$mainContent = str_replace($donor_site_name_3, $site_name, $mainContent  );
$mainContent = str_replace($donor_site_name_4, $site_name_2, $mainContent  );

$mainContent = str_replace('Росдиплома', $raskrutka_site_1, $mainContent  );
$mainContent = str_replace('Росдиплому', $raskrutka_site_2, $mainContent  );
$mainContent = str_replace('Росдипломе', $raskrutka_site_1, $mainContent  );
$mainContent = str_replace('Росдипломом', $raskrutka_site_2, $mainContent  );
$mainContent = str_replace('Росдиплом', $raskrutka_site_3, $mainContent  );
$mainContent = str_replace('РОСДИПЛОМ', $raskrutka_site_1, $mainContent  );
$mainContent = str_replace('Рос Диплому', $raskrutka_site_2, $mainContent  );
$mainContent = str_replace('Рос Диплом', $raskrutka_site_3, $mainContent  );
$mainContent = str_replace('росдипломовцы', 'команда '.$raskrutka_site_1, $mainContent  );
$mainContent = str_replace('росдиплома', $raskrutka_site_2, $mainContent  );
$mainContent = str_replace('росдиплому', $raskrutka_site_3, $mainContent  );
$mainContent = str_replace('росдипломе', $raskrutka_site_1, $mainContent  );
$mainContent = str_replace('росдипломом', $raskrutka_site_2, $mainContent  );
$mainContent = str_replace('росдиплом', $raskrutka_site_3, $mainContent  );
$mainContent = str_replace('РосДиплома', $raskrutka_site_1, $mainContent  );
$mainContent = str_replace('РосДиплому', $raskrutka_site_2, $mainContent  );
$mainContent = str_replace('РосДипломе', $raskrutka_site_3, $mainContent  );
$mainContent = str_replace('РосДипломом', $raskrutka_site_1, $mainContent  );
$mainContent = str_replace('Роспдипломе', $raskrutka_site_2, $mainContent  );
$mainContent = str_replace('РосДиплом', $raskrutka_site_3, $mainContent  );
$mainContent = str_replace('rosdiplom.ru', $raskrutka_site_1, $mainContent  );


$mainContent = str_replace('Rosdiplom.ru', $raskrutka_site_1, $mainContent  );
$mainContent = str_replace('ROSDIPLOM.RU', $raskrutka_site_3, $mainContent  );
$mainContent = str_replace('RosDiplom', $raskrutka_site_2, $mainContent  );
$mainContent = str_replace('ROSDIPLOM', $raskrutka_site_5, $mainContent  );


$mainContent = str_replace('Rosdiplom', $raskrutka_site_6, $mainContent  );
$mainContent = str_replace('rosdiplom', $raskrutka_site_2, $mainContent  );
$mainContent = str_replace("src='/wp-content/", "src='".$donor_name."/wp-content/", $mainContent  );
$mainContent = str_replace('Москва, ул.Сретенка, д.27/29, стр 1', $raskrutka_site_adress, $mainContent  );
$mainContent = str_replace('<span class="city">Москва:</span> +7495 9874136', 'Компания с 2013 года работает без телефонных менеджеров', $mainContent  );
$mainContent = str_replace('<span class="city">Санкт-Петербург:</span> +7812 4485335', 'Это существенно снижает стоимость работ', $mainContent  );
$mainContent = str_replace('<span class="city">Волгоград:</span> +78442 986161', 'Используйте форму заказа на сайте, пишите на почту', $mainContent  );
$mainContent = str_replace('http://studotzyv.ru/rel.php?id=aHR0cHM6Ly9yb3NkaXBsb20ucnUvcmVmZXJlci5hc3B4', 'http://'.$raskrutka_site_1.'/', $mainContent  );
$mainContent = str_replace('http://studotzyv.ru/rel.php?id=aHR0cDovL3Jvc2RpcGxvbS5ydS96YWthei9mYXN0Lz9yZWY9c3R1ZG90enl2', 'http://'.$raskrutka_site_1.'/order.php', $mainContent  );
$mainContent = str_replace('studotzyv.ru/rel.php?id=', '', $mainContent  );
$mainContent = str_replace('/referer.aspx', '', $mainContent  );
$mainContent = str_replace('https://'.$raskrutka_site_1, 'http://'.$raskrutka_site_1, $mainContent  );

//$mainContent = str_replace('znaniumbaza', 'rosdiplom', $mainContent  );
$mainContent = str_replace('Публикации</a>', '</a>', $mainContent  );
$mainContent = str_replace('это интересно</a>', '</a>', $mainContent  );

$mainContent = str_replace('</title>', '</title> '.$yandex_google, $mainContent  );

$mainContent = str_replace('src="/wp-content/','src="'.$donor_name.'/wp-content/', $mainContent  );
$mainContent = str_replace('Представительства и офисы компании','Представительства и офисы компании ', $mainContent  );
$mainContent = str_replace('Москва, ул.Сретенка, д.27/29, стр 1',$raskrutka_site_adress_2, $mainContent  );
$mainContent = str_replace('gglcptch_recaptcha','', $mainContent  );
$mainContent = str_replace('wp-comments-post.php','', $mainContent  );
$mainContent = str_replace('VK.Widgets.Group','', $mainContent  );
$mainContent = str_replace('please-add','', $mainContent  );
$mainContent = str_replace("href='http://studotzyv.ru/raiting","href='".$main_name."/raiting", $mainContent  );
$mainContent = str_replace("href='http://studotzyv.ru/otzyv","href='".$main_name."/otzyv", $mainContent  );
$mainContent = str_replace("55.753994, 37.622093", $raskrutka_site_coord, $mainContent  );
$mainContent = str_replace('icon-home">', 'icon-home">Главная', $mainContent  );
$mainContent = str_replace('карта-сайта', 'wlfjekgjt', $mainContent );





$mainContent = rand_podstav_smv($mainContent);

$mainContent = str_replace('wlfjekgjt', 'карта-сайта',  $mainContent );


echo $mainContent;
