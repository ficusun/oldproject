<?php
//main controller
$result['news'] = call("SELECT * FROM `news` WHERE lang='$setlang' ORDER BY `date` DESC LIMIT 0,12 ");
$result['adv'] = call("SELECT * FROM `adverts` WHERE lang='$setlang' ORDER BY `date` DESC");
$result['img'] = call("SELECT * FROM `main_page` WHERE lang='$setlang' AND pos='img'");
$result['intr'] = call("SELECT * FROM `main_page` WHERE lang='$setlang' AND pos='intr'");
$result['cont'] = call("SELECT * FROM `main_page` WHERE lang='$setlang' AND pos='cont'");
$result['bot'] = call("SELECT * FROM `main_page` WHERE lang='$setlang' AND pos='bot'");

if(!$result['news']) $result['news'] = call("SELECT * FROM `news` WHERE lang='ru' ORDER BY `date` DESC LIMIT 0,12 ");
if(!$result['adv']) $result['adv'] = call("SELECT * FROM `adverts` WHERE lang='ru' ORDER BY `date` DESC");
if(!$result['img'])  $result['img'] = call("SELECT * FROM `main_page` WHERE lang='ru' AND pos='img'");
if(!$result['intr']) $result['intr'] = call("SELECT * FROM `main_page` WHERE lang='ru' AND pos='intr'");
if(!$result['cont']) $result['cont'] = call("SELECT * FROM `main_page` WHERE lang='ru' AND pos='cont'");
if(!$result['bot']) $result['bot'] = call("SELECT * FROM `main_page` WHERE lang='ru' AND pos='bot'");

$title = $result['img'][0]['title'];
$content = getTpl('main',$result);