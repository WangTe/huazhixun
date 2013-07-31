<?php
/**
 * 搜索URL的生成
 * 
 * @author 风格独特
 */

function highlight_keyword($keyword, $content) 
{
	if(is_array($keyword)) {
		$return = $content;
		foreach ($keyword as $k) {
			$k = trim($k);
			$return = str_replace($k, '<font color="red">' . $k . '</font>', $return);
		}
		return $return;
	} else {
		$keyword = trim($keyword);
		$k_array = explode(' ', $keyword);
		$k_array = array_diff($k_array, array(''));
		if(count($k_array) > 1) {
			$return = $content;
			foreach ($k_array as $k) {
				$k = trim($k);
				$return = str_replace($k, '<font color="red">' . $k . '</font>', $return);
			}
			return $return;
		} else {
			return str_replace($keyword, '<font color="red">' . $keyword . '</font>', $content);
		}
	}
}

function search_url($news, $original, $base_url = 'search/')
{
	// 生成新的查询数组
	foreach ($news as $k => $v) {
		$original[$k] = $v;
	}
	
	$query = http_build_query($original);// echo $query;exit;
	return base_url($base_url) . '?' . $query;
}
