<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

/* Manggu Framework
 * Simple PHP Application Development
 * Kusnassriyanto S. Bahri
 * kusnassriyanto@gmail.com
 * 
 */

$config['sysconfig']['enccode'] = 'MANGGU2014'; // jangan diganti, kecuali tahu
                                                // persis apa yang diinginkan!!
$config['sysconfig']['umursession'] = 60000; // umur session dalam detik 900 = 15 menit
$config['sysconfig']['namasession'] = 'manggu-mysql-workflow';

$config['basefolder']='data/';
//$config['basefolder']='/var/www/html/workflow/data'.'//';


//$config['brandname'] = 'Manggu';
//$config['brandicon'] = 'logo100';

$config['deploystate'] = 'debug'; // debug atau product

$config['appconfig']['assetdir'] = base_url().'themes/aceadmin/';
$config['appconfig']['login-background'] = '#e2dee2';
$config['appconfig']['main-barcolor'] = '#e2dee2';

$config['wf_oninsert']['object'] = 'workflow/m_custom'; 
$config['wf_oninsert']['method'] = 'WorkflowInsert'; 
$config['wf_onupdate']['object'] = 'workflow/m_custom'; 
$config['wf_onupdate']['method'] = 'WorkflowUpdate';


?>
