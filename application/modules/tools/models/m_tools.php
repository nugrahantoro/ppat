<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');


class M_tools extends MY_Model
{
    public function __construct()
    {
        parent::__construct();
    }
	
	
	function simpan_menu($params){
		if($params['menuid']=='' || $params['menuid']==null){
			$sql = $this->db->query("select menuname from sys_menu where menuname='".strtolower(str_replace(' ','_',trim($params['caption'])))."'");
			if($sql->num_rows() > 0){
				throw new MgException('430', 'Nama tidak boleh sama/duplikat!.');
			}else{
				$dataIn=array(
						'menuname' => strtolower(str_replace(' ','_',trim($params['caption']))),
						'caption' => trim($params['caption']),
						'description' => trim($params['description']),
						'menulevel' => trim($params['menulevel']),
						'command' => trim($params['command']),
						'context' => trim($params['context']),
						'parentid' => trim($params['parentid']),
						'viewindex' => trim($params['viewindex']),
						'iconname' => trim($params['iconname']),
						'visible' => 1,
						'ismenu' => 1
						);
				$this->db->insert('sys_menu',$dataIn);
				$menuid = $this->db->insert_id();
				
				$dataIn2 = array(
								'category' => 'menu',
								'permissionname' => strtolower(str_replace(' ','_',trim($params['caption']))),
								'active' => 1
							);
				$this->db->insert('sys_permissions',$dataIn2);
				$permissionid = $this->db->insert_id();
			}
		}else{
			if(strtolower(str_replace(' ','_',trim($params['caption'])))==$params['nama2']){
				$dataIn=array(
						'menuname' => strtolower(str_replace(' ','_',trim($params['caption']))),
						'caption' => trim($params['caption']),
						'description' => trim($params['description']),
						'menulevel' => trim($params['menulevel']),
						'command' => trim($params['command']),
						'context' => trim($params['context']),
						'parentid' => trim($params['parentid']),
						'viewindex' => trim($params['viewindex']),
						'iconname' => trim($params['iconname']),
						'visible' => 1,
						'ismenu' => 1
						);
				$this->db->where('menuid',$params['menuid']);
				$this->db->update('sys_menu',$dataIn);
			}else{
				$sql = $this->db->query("select menuname from sys_menu where menuname='".strtolower(str_replace(' ','_',trim($params['caption'])))."' and menuid <> '".$params['menuid']."'");
				if($sql->num_rows() > 0){
					throw new MgException('430', 'Nama Menu tidak boleh sama/duplikat!.');
				}else{
					$dataIn=array(
						'menuname' => strtolower(str_replace(' ','_',trim($params['caption']))),
						'caption' => trim($params['caption']),
						'description' => trim($params['description']),
						'menulevel' => trim($params['menulevel']),
						'command' => trim($params['command']),
						'context' => trim($params['context']),
						'parentid' => trim($params['parentid']),
						'viewindex' => trim($params['viewindex']),
						'iconname' => trim($params['iconname']),
						'visible' => 1,
						'ismenu' => 1
						);
					$this->db->where('menuid',$params['menuid']);
					$this->db->update('sys_menu',$dataIn);
					
					$dataIn2 = array(
									'category' => 'menu',
									'permissionname' => strtolower(str_replace(' ','_',trim($params['caption']))),
									'active' => 1
								);
					$this->db->where('category','menu');
					$this->db->where('permissionname',$params['nama2']);
					$this->db->update('sys_permissions',$dataIn2);
				}
			}
		}
		
		$result = array('success'=>1, 'message'=>'Data berhasil ditambahkan.');
		return $result;
	}

	
	
	}
?>