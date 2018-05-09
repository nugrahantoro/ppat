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



?>
