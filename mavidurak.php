#!/usr/bin/php
<?php
$feed  = 'http://mavidurakio.wordpress.com/feed';
$data = simplexml_load_file($feed); 

foreach($data->channel->item as $item){
	echo "\n\xF0\x9F\x94\xB9  \033[0;37m{$item->title}\033[0m ";
	echo "\n\t{$item->link}";
}

echo "\n\n";
