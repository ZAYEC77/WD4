<?php 
/**
 * 
 */
 class Tools 
 {
 	/**
 	 * 
 	 */
 	public static function link($link, $name)
 	{
 		$result = '<a href="';
 		$list = array();
 		foreach ($link as $key => $value) {
 			$list []=  $key . '=' . $value;
 		}

 		$params = "?" . implode('&', $list);
 		$result .=  $params . '">' . $name . '</a>';
 		return $result;
 	}
 } ?>