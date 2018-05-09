<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/* Manggu Framework
 * Simple PHP Application Development
 * Kusnassriyanto S. Bahri
 * kusnassriyanto@gmail.com
 * 
 */

class M_database extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
    }
    
	var $profiler = array();
    var $dbobj=array();
    var $defparams = array();
    var $multicommand = 0; // multi command single sql --> 0 = No; 1: Yes
    var $sqlparams;
    public function loadDb($dbname){
        $this->dbobj[$dbname] = $this->load->database($dbname, TRUE);
    }
    
    public function mergeDefParams($params){
        $this->defparams = array_merge($this->defparams, $params);
    }
    
    function querySQL($sql, $params, $resultType='matrix', $isPaging=false, $limit=0, $start=0){
        
    }
    
    public function trans_begin($dbname){
        if (!isset($this->dbobj[$dbname])){
            $this->dbobj[$dbname] = $this->load->database($dbname, TRUE);
        }
        $vdb = $this->dbobj[$dbname];
        $vdb->trans_begin();
    }
    
    public function trans_commit($dbname){
//        if (!isset($this->dbobj[$dbname])){
//            $this->dbobj[$dbname] = $this->load->database($dbname, TRUE);
//        }
        $vdb = $this->dbobj[$dbname];
        $vdb->trans_commit();
    }
    
    public function trans_rollback($dbname){
//        if (!isset($this->dbobj[$dbname])){
//            $this->dbobj[$dbname] = $this->load->database($dbname, TRUE);
//        }
        $vdb = $this->dbobj[$dbname];
        $vdb->trans_rollback();
    }
    
////////
    function get_string_between($string, $start, $end){
	$string = " ".$string;
	$ini = strpos($string,$start);
	if ($ini == 0) return "";
	$ini += strlen($start);   
	$len = strpos($string,$end,$ini) - $ini;
	return substr($string,$ini,$len);
    }
    
    function mg_repeat($xparam, $template, $spsrc=',', $sptarget=','){
        $sqlparams = $this->sqlparams;
        //$xparam = $sqlparams[$paramname];
        $paramlist = explode($spsrc, $xparam);
        //print_r($paramlist);
        $result = '';
        foreach($paramlist as $item){
            $resitem = str_replace('##', $item, $template);
            if ($result!==''){
                $result = $result.$sptarget;
            }
            $result = $result.$resitem;
        }
        return $result;
    }
    
    protected function processCommand($string, $params){
        $dataxx='';
        $xstring = $string;
        foreach ($params as $key => $value){
            $xstring = str_replace('@:'.$key, "'".$value."'", $xstring);
        }
        $xstring = str_replace('@mg_', '$this->mg_', $xstring);
        //print_r($xstring);
        eval('$dataxx = '.$xstring.';');
        return $dataxx;
    }
    
    protected function preprocSQL($SQL, $paramList){
        //return;
        //{REPEAT|userroles|(@var1,##)}
        $this->sqlparams = $paramList;
        $vsql = $SQL;
        $vch1 = '<<?';
        $vch2 = '?>>';
        $count = 0;
        $arr1 = array();
        $count = 1;
        
        if ((strpos($vsql, $vch1)!==false) and (strpos($vsql, $vch2)!==false)){
            //print_r($vsql);
            while ((strpos($vsql, $vch1)!==false) and (strpos($vsql, $vch2)!==false)){
                //print_r($vsql); die;
                $xstr = $this->get_string_between($vsql, $vch1, $vch2);
                $xresult = $this->processCommand($xstr, $paramList);
                $vsql = str_replace($vch1.$xstr.$vch2, $xresult, $vsql, $count);
                array_push($arr1, $xstr);
                //array_post()


                $count++;
                if($count>10000){
                    return;
                }
            }
            //print_r($arr1);
            $result = $vsql;
            //print_r($result); die;
        }
        return $vsql;
    }
    
    
    protected function convertSQL($SQL, $paramList, $isPaging = false, $limit=0, $start=0){
        /*
         * function ini digunakan untuk mengubah parameter dalam SQL
         * dari :<name> menjadi ? dan menyesuaikan urutan parameter, serta
         * menambahi kata kunci limit dan start bila ada paging.
         * Hasil function ini adalah
         *   SQL : adalah SQL yang sudah diubah parameter-nya
         *   countSQL : SQL untuk Count bila $isPaging true
         *   params : array of value yang urutannya sudah disesuaikan dengan
         *     kemunculan :<nama>
         *
         */

//        $temporarySQL = $SQL;
        $SQL = $this->preprocSQL($SQL, $paramList);
        $tokens = preg_split('/[^a-zA-Z0-9\':_"]+/', $SQL);
        $temporaryArray = array();
        $trPair = array();
        foreach($tokens as $token){
            if (substr($token, 0, 1)==':'){
                array_push($temporaryArray, strtolower(substr($token, 1)));
                $trPair[$token]="?";
                //$temporarySQL = str_replace($token, "?", $temporarySQL);
            }
        }
        $temporarySQL = strtr ($SQL, $trPair );
	 // var_dump($temporarySQL);die;
        $params = array();
        foreach($temporaryArray as $item){
            if ($paramList[$item]===''){
                array_push($params, null);
            } else {
                array_push($params, $paramList[$item]);
            }
            
        }
        $result = array('params'=>$params);
        if ($isPaging){
            $result['countSQL'] = 'select count(*) from ('.$temporarySQL.') a ';
            // postgresql style
            // $result['SQL'] = $temporarySQL.' limit '.$limit.' offset '.$start;

            // mysql style
            $result['SQL'] = $temporarySQL.' limit '.$start.', '.$limit;


        } else {
            $result['SQL'] = $temporarySQL;
        }
        //print_r($result);
        return $result;
    }
    
    protected function doQuery($dbname, $SQL, $params, $resulttype='matrix', $countSQL=''){
        /*
         * function ini digunakan untuk menjalankan Query. Selain itu ada dua
         * parameter tambahan yaitu limit dan start untuk keperluan paging.
         * SQL adalah select SQL.
         * countSQL (optional) adalah sql untuk menghitung
         * banyaknya record total. Bila tidak kosng dianggap ada paging.
         * informasi limit dan offset menggunakan limit dan start.
         * Hasil query diformat dalam bentuk matrix 2 dimensi
         * hanya datanya saja, tanpa nama field.
         * 
         */
		$this->profiler = array();
		$start = microtime();
		//usleep(100);
        $this->profiler['100 ms'] = microtime()-$start;
		
		$start = microtime();
        $sqlInfo = $this->convertSQL($SQL, $params);
		//print_r($sqlInfo);die;
        $countsqlInfo = $this->convertSQL($countSQL, $params);
        $matrix= array();
        $count=0;
		$this->profiler['convert'] = microtime()-$start;
		$start = microtime();
        if (!isset($this->dbobj[$dbname])){
                $this->dbobj[$dbname] = $this->load->database($dbname, TRUE);
            }
        $vdb = $this->dbobj[$dbname];
        //$rs = $vdb->query($SQL, $params);
        $rs = $vdb->query($sqlInfo['SQL'], $sqlInfo['params']);
        /*if ($rs){
            return $rs->result_array();
        } else {
            return $vdb->_error_message();
        }
         * 
         */
        $this->profiler['sql query'] = microtime()-$start;
		$start = microtime();
        
        if (!$rs){
            return $vdb->_error_message();
        } else {
            //echo $resulttype;
            if ($resulttype=='matrix'){
                $fieldlist = array();
                foreach ($rs->result() as $record){
                    $rowResult = array();
                    foreach ($record as $fieldname => $value){
                        array_push($fieldlist, $fieldname);
                    }
                    //array_push($matrix, $rowResult);
                    break;
                }

                foreach ($rs->result() as $record){
                    $rowResult = array();
                    foreach ($record as $fieldName => $value){
                        array_push($rowResult, $value);
                    }
                    array_push($matrix, $rowResult);
                    $count=$count+1;
                }
                if ($countSQL!=''){
                    $countrs = $vdb->query($countsqlInfo['SQL'], $countsqlInfo['params']);
                    if ($countrs){
                        foreach ($countrs->result() as $record){
                            foreach ($record as $fieldName => $value){
                                $count = $value;
                            }
                        }
                    }
                }
                $result = array('fieldlist'=>$fieldlist, 'matrixdata'=>$matrix, 'count'=>$count);
            } else {
                $result = $rs->result_array();
            }
			$this->profiler['result'] = microtime()-$start;
			$start = microtime();
			return $result;
        }
		
    }
    
    function doQueryData($dbname, $vsql, $vparams, $resulttype='matrix', $countsql=''){
        
        $vparams = array_merge($this->defparams, $vparams);
        $result = $this->doQuery($dbname, $vsql, $vparams, $resulttype, $countsql);
        if (is_array($result)){
            return $result;
        } else {
            throw new Exception('Query Error: '.$result.' SQL: '.$vsql);
        }
    }
    
    function doExecSQL($dbname, $vsql, $vparams){
        $vparams = array_merge($this->defparams, $vparams);
        $sqlInfo = $this->convertSQL($vsql, $vparams, false, 0, 0);
	//  var_dump($sqlInfo);die;
        if (!isset($this->dbobj[$dbname])){
            $this->dbobj[$dbname] = $this->load->database($dbname, TRUE);
        }
        $vdb = $this->dbobj[$dbname];
        //$vdb = $this->load->database($dbname, TRUE);
        $result = $vdb->query($sqlInfo['SQL'], $sqlInfo['params']);
        if (!$result){
            throw new Exception($vdb->_error_message());
        }
        return $result;
        
    }

    function isSelectCommand($str){
        $xcmd = explode(' ', trim($str));
        $result = 0;
        if (isset($xcmd[0])){
            if (strtolower($xcmd[0])=='select'){
                $result = 1;
            }
        }
        return $result;
    }
    
    function transactionStart($dbname){
        if (!isset($this->dbobj[$dbname])){
            $this->dbobj[$dbname] = $this->load->database($dbname, TRUE);
        }
        $vdb = $this->dbobj[$dbname];
        $vdb->trans_begin();
    }
    
    function transactionCommit($dbname){
        if (!isset($this->dbobj[$dbname])){
            $this->dbobj[$dbname] = $this->load->database($dbname, TRUE);
        }
        $vdb = $this->dbobj[$dbname];
        $vdb->trans_commit();
    }
    
    function transactionRollback($dbname){
        if (!isset($this->dbobj[$dbname])){
            $this->dbobj[$dbname] = $this->load->database($dbname, TRUE);
        }
        $vdb = $this->dbobj[$dbname];
        $vdb->trans_rollback();
    }
    
    function QueryData($dbname, $vsql, $vparams, $resulttype='matrix', $countsql=''){
        $this->transactionStart($dbname);
        try {
            //print_r($this->multicommand);
            if ($this->multicommand == 1){
                //echo "multi";
                $result = $this->doQueryData($dbname, $vsql, $vparams, $resulttype, $countsql);
            } else {
                //echo "non-multi";
                $list = explode(';', $vsql);
                foreach($list as $str){
                    //echo $str;
                    if (trim($str)!==''){
                        if ($this->isSelectCommand($str)){
                            $result = $this->doQueryData($dbname, $str, $vparams, $resulttype, $countsql);
                        } else {
                            $result = $this->doExecSQL($dbname, $str, $vparams);
                        }
                    }
                }
            }
            $this->transactionCommit($dbname);
        } catch(Exception $excp){
            $this->transactionRollback($dbname);
            throw $excp;
        }
        return $result;
    }
    
    function ExecSQL($dbname, $vsql, $vparams){
        $this->transactionStart($dbname);
        try {
            //print_r($this->multicommand);
            if ($this->multicommand == 1){
                //echo "multi";
                $result = $this->doExecSQL($dbname, $str, $vparams);
            } else {
                //echo "non-multi";
                $list = explode(';', $vsql);
                foreach($list as $str){
                    if (trim($str)!==''){
                        $result = $this->doExecSQL($dbname, $str, $vparams);
                    }
                }
            }
            $this->transactionCommit($dbname);
        } catch(Exception $excp){
            $this->transactionRollback($dbname);
            throw $excp;
        }
        return $result;
    }    
}



?>
