<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');


/**
 * extract parent array returned by sql query
 * 
 */

if ( ! function_exists('test_method'))
{
    function extractParent($parents, $var) {
		$flag = false;
		$p = null;
		foreach($parents as $parent) {
			if( $parent['gender'] == $var ) {
				$p = array(
						'fullname' => $parent['fullname'],
						'residence' => $parent['residence'],
					);
				$flag = true;
			}	
		}
		if(!$flag) {
			$p = array(
						'fullname' => '',
						'residence' => '',
					);
		}	
		return $p;
	}
}

/**
 * extract godparent array returned by sql query
 * 
 */

if ( ! function_exists('test_method'))
{
    function extractGodparent($godparents, $n) {
		for( $i = 1; $i <= count($godparents); $i++ ) {
			if( $i === $n ) {
				return array(
							'fullname' => $godparents[$i-1]['fullname'],
							'residence' => $godparents[$i-1]['residence'],
							);
			}
		}
		return null;	
	}
}