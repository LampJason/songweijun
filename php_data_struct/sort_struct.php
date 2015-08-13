<?php
/**
 * 插入排序（数组排序）前提：适合元素个数较少的排序
 * 参数：sort_array（目标数组）
 */
	function insertion_sort($array){
		$len = count($array);
		if($len<=0){
			return false;
		}
		for($j=1;$j<$len;$j++){
			$key = $array[$j];
			$i = $j-1;
			while($i>=0 && $array[$i]>$key){
				$array[$j+1] = $array[$i];
				$i--;
			}
			$array[$i+1] = $key;
		}
		return $array;
	}
	
	

