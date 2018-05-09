<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

/* Manggu Framework
 * Simple PHP Application Development
 * Kusnassriyanto S. Bahri
 * kusnassriyanto@gmail.com
 * 
 */

function getArrayDef($array, $index, $default=null){
    if (isset($array[$index])){
        return $array[$index];
    } else {
        return $default;
    }
}

function recurse_copy($src,$dst) { 
    $dir = opendir($src); 
    @mkdir($dst); 
    while(false !== ( $file = readdir($dir)) ) { 
        if (( $file != '.' ) && ( $file != '..' )) { 
            if ( is_dir($src . '/' . $file) ) { 
                recurse_copy($src . '/' . $file,$dst . '/' . $file); 
            } 
            else { 
                copy($src . '/' . $file,$dst . '/' . $file); 
            } 
        } 
    } 
    closedir($dir); 
}

function del_file_on_dir($src) { 
    $dir = opendir($src); 
    while(false !== ( $file = readdir($dir)) ) { 
        if (( $file != '.' ) && ( $file != '..' )) { 
            if ( is_dir($src . '/' . $file) ) { 
                del_file_on_dir($src . '/' . $file); 
            } 
            else { 
                @unlink($src . '/' . $file); 
            } 
        } 
    } 
    closedir($dir); 
}


function getKode3($select,$from)
{
	$CI =& get_instance();
	$sql = "select ".$select." as kode from ".$from;
	$query = $CI->db->query($sql);
	if($query->num_rows() > 0){
		$field = $query->row();
		$inc = (int)substr($field->kode,-3,3);
		$inc = $inc + 1;
		$hasil = sprintf("%03s", $inc);
	}else{
		$hasil='001';
	}
	
	return $hasil;
}

function del_file_and_dir($src) { 
    $dir = opendir($src); 
    while(false !== ( $file = readdir($dir)) ) { 
        if (( $file != '.' ) && ( $file != '..' )) { 
            if ( is_dir($src . '/' . $file) ) { 
                del_file_and_dir($src . '/' . $file); 
            } 
            else { 
                @unlink($src . '/' . $file); 
            } 
        } 
    } 
    closedir($dir); 
	if (is_dir($src)) rmdir($src);
}



?>
