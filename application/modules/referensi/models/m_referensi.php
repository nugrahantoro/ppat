<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/* Manggu Framework
 * Simple PHP Application Development
 * Kusnassriyanto S. Bahri
 * kusnassriyanto@gmail.com
 * 
 */

class M_referensi extends MY_Model
{
    public function __construct()
    {
        parent::__construct();
    }
	
	function tabel_list($dipaging=0,$limit=10,$offset=1,$id=null,$cari=null)
	{
		$sql =  "show tables where left(".DB_TABLE.",4)='ref_' or ".DB_TABLE."='category_proses'";
		$query = $this->db->query($sql);
		$tbl = DB_TABLE;
		if($query->num_rows() > 0){
			foreach($query->result() as $row){
				$sql2 = "desc ".$row->$tbl;
				$query2 = $this->db->query($sql2);
				if($query2->num_rows()==2){
					$arr[] = array($row->$tbl);
				}
			}
		}else{
			$arr='';
		}
		return $arr;
	}
	
	function data_list($dipaging=0,$limit=10,$offset=1,$id=null,$cari=null,$tabel=null)
	{
		$sql =  "select * from ".$tabel." where (1=1) ";
		if($id!='' || $id !=null) $sql .= " AND id='$id' ";
		if($cari!='' || $cari !=null) $sql .= " $cari ";
		
		if (isset($dipaging) && $dipaging ==1) $sql .= " limit $offset, $limit ";
		
		$query = $this->db->query($sql);
		return $query;
	}
	
}
?>
