<?php

require_once('./helpers/page_title.php');

for($i=0; $i < 30; $i++) {
	$data = file_get_contents('./data.txt');
	$line = page_title('http://'.$i . '.ru');
	$data = $data . '

'. $i . '.ru : '. $line;
	file_put_contents('./data.txt', $data);
}


