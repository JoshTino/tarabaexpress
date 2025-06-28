<?php

function resultOf($function, $limit, $offset) {
	global $view, $result;
	$view = new View();
	$result = $view->con()->query($view->$function($limit, $offset));
	$view->con()->close();
}

function L($lim, $off) {
	global $limit, $offset;
	$limit = $lim;
	$offset = $off;
}

function sanNum($count) {
		$numLength = strlen($count);

 	switch($numLength) {
 		case 4:
  			$newCount = substr_replace($count, 'K', 1,6);
 		break;
		case 5:
 			$newCount = substr_replace($count, 'K', 2,6);
 		break;
		case 6:
        	$newCount = substr_replace($count, 'K', 3,6);
		break;
		case 7:
        	$newCount = substr_replace($count, 'M', 1,6);
 		break;
 		case 8:
    		$newCount = substr_replace($count, 'M', 2,6);
 		break;
 		case 9:
    		$newCount = substr_replace($count, 'M', 3,6);
 		break;
 		default:
 			$newCount = $count;
 		break;
		}
		return $newCount;
	}