<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');



class M_custom extends MY_Model
{
    public function __construct()
    {
        parent::__construct();
        
    }

    function setPassword($params){
        $this->load->model('login/m_login', 'mlogin');
        if (isset($params['username']) and isset($params['newpassword']) 
            and isset($params['confirmpassword'])){
            if ($params['newpassword'] !== $params['confirmpassword'] ) {
                throw new MgException('430', 'Password baru dan konfirmasi password tidak sama.');
            } else {
                // tipe enkripsi (sementara) adalah 1
                $newpassword = $params['newpassword'];
                $vcode = $this->mlogin->SysConfig['enccode'];
                $encpass = $this->mlogin->strToHex($this->mlogin->rc4($vcode, $newpassword));
                $vsql = "update sys_users set enctype = 1, password = :password where username = :username";
                $vparams = array('username'=>$params['username'], 'password'=>$encpass);
                $res = $this->mdb->ExecSQL('application', $vsql, $vparams, 'array');
                $result = array('success'=>1, 'message'=>'Password sudah diset.');
                return $result;
            }
        } else {
            throw new MgException('430', 'Parameter change password tidak lengkap.');
        }
        //print_r($params);
        //throw new Exception('Change Password!');
    }
	
	function simpan_user($params){
		if ($params['username']!='' && $params['fullname']!='' && $params['telepon']!='' && $params['userroles']!='') {
			$status=0;
			if($params['userid']=='' || $params['userid']==null){
				$sql = $this->db->query("select * from sys_users where username='".$params['username']."'");
				if($sql->num_rows() > 0){
					throw new MgException('430', 'Username tidak boleh sama/duplikat!.');
				}else{
					$status=1;
					$base="ABCDEFGHKLMNOPQRSTWXYZabcdefghjkmnpqrstwxyz0123456789";
					$max=strlen($base)-1;
					$acakpass="";
					mt_srand((double)microtime()*1000000);
					while (strlen($acakpass)<6)
					$acakpass .= $base{mt_rand(0,$max)};
					
					
					$vcode = $this->mlogin->SysConfig['enccode'];
					$encpass = $this->mlogin->strToHex($this->mlogin->rc4($vcode, $acakpass));
					$dataIn=array(
							'username' => trim($params['username']),
							'password' => $encpass,
							'fullname' => trim($params['fullname']),
							'telepon' => trim($params['telepon']),
							);
					$this->db->insert('sys_users',$dataIn);
					$id_user = $this->db->insert_id();
				
					$dataOn = array (
									'userid' => $id_user,
									'roleid' => $params['userroles']
								);
					$this->db->insert('sys_userroles',$dataOn);
				}
			}else{
				if($params['username']==$params['username2']){
					$status=1;
					$dataIn=array(
							'username' => trim($params['username']),
							'fullname' => trim($params['fullname']),
							'telepon' => trim($params['telepon'])
							);
					$this->db->where('userid',$params['userid']);
					$this->db->update('sys_users',$dataIn);
					
					$sss = $this->db->query("select * from sys_userroles where userid='".$params['userid']."'");
					$dataOn = array (
									'userid' => $params['userid'],
									'roleid' => $params['userroles']
								);
					if($sss->num_rows() > 0){
						$this->db->where('userid',$params['userid']);
						$this->db->update('sys_userroles',$dataOn);
					}else{
						$this->db->insert('sys_userroles',$dataOn);
					}
				}else{
					$sql = $this->db->query("select * from sys_users where username='".$params['username']."'");
					if($sql->num_rows() > 0){
						throw new MgException('430', 'Username tidak boleh sama/duplikat!.');
					}else{
						$status=1;
						$dataIn=array(
							'username' => trim($params['username']),
							'fullname' => trim($params['fullname']),
							'telepon' => trim($params['telepon'])
							);
						$this->db->where('userid',$params['userid']);
						$this->db->update('sys_users',$dataIn);
					
						$sss = $this->db->query("select * from sys_userroles where userid='".$params['userid']."'");
						$dataOn = array (
										'userid' => $params['userid'],
										'roleid' => $params['userroles']
									);
						if($sss->num_rows() > 0){
							$this->db->where('userid',$params['userid']);
							$this->db->update('sys_userroles',$dataOn);
						}else{
							$this->db->insert('sys_userroles',$dataOn);
						}
					}
				}
			}
			$result = array('success'=>1, 'message'=>'Data berhasil ditambahkan.');
			return $result;
		}else{
			throw new MgException('430', 'Field tidak boleh kosong!.');
		}
	}
	
	function simpan_role($params){
		//var_dump($params);die;
		//print_r($params);die;
		if ($params['rolename']!='' && $params['description']!='') {
			$status=0;
			if($params['roleid']=='' || $params['roleid']==null){
				$sql = $this->db->query("select * from sys_roles where rolename='".$params['rolename']."'");
				if($sql->num_rows() > 0){
					throw new MgException('430', 'Rolename tidak boleh sama/duplikat!.');
				}else{
					$status=1;
					$dataIn=array(
						'rolename' => trim($params['rolename']),
						'description' => trim($params['description'])
					);
					$this->db->insert('sys_roles',$dataIn);
					$id_role = $this->db->insert_id();
					
					
					if($params['permissionsid']!='' && $params['permissionsid']!=null){
						$mrole = explode(",",$params['permissionsid']);
						$i=0;
						for($i=0;$i<count($mrole);$i++){
							$sqla = $this->db->query("select * from sys_rolepermissions where roleid='".$id_role."' and permissionid='".$mrole[$i]."'"); 
							if($sqla->num_rows() == 0){
								$dataOn = array (
												'roleid' => $id_role,
												'permissionid' => $mrole[$i]
											);
								$this->db->insert('sys_rolepermissions',$dataOn);
							}
						
							$sqlrole = $this->db->query("select a.*,b.parentid from sys_permissions a left join sys_menu b on (a.category='menu' and a.permissionname = b.menuname) where a.permissionid='".$mrole[$i]."' and b.parentid <> '0'");
							if($sqlrole->num_rows() > 0){
								$rwmenu = $sqlrole->row();
								$sqlper = $this->db->query("select a.* from sys_rolepermissions a left join sys_permissions b on (a.permissionid = b.permissionid) left join sys_menu c on (b.category='menu' and b.permissionname = c.menuname) where c.menuid='".$rwmenu->parentid."' and a.roleid='".$id_role."'");
								if($sqlper->num_rows() == 0){
									$sll = $this->db->query("select a.* from sys_permissions a left join sys_menu b on (a.category='menu' and a.permissionname=b.menuname) where b.menuid='".$rwmenu->parentid."'")->row();
									$dataIn2 = array(
													'roleid' => $id_role,
													'permissionid' => $sll->permissionid
												);
									$this->db->insert('sys_rolepermissions',$dataIn2);
								}
							}
						}
					}
				}
			}else{
				if($params['rolename']==$params['rolename2']){
					$status=1;
					$dataIn=array(
							'rolename' => trim($params['rolename']),
							'description' => trim($params['description']),
							);
					$this->db->where('roleid',$params['roleid']);
					$this->db->update('sys_roles',$dataIn);
					
					if($params['permissionsid']!='' && $params['permissionsid']!=null){
						$this->db->where('roleid',$params['roleid']);
						$this->db->delete('sys_rolepermissions');
						$mrole = explode(",",$params['permissionsid']);
						for($i=0;$i<count($mrole);$i++){
							$sqla = $this->db->query("select * from sys_rolepermissions where roleid='".$params['roleid']."' and permissionid='".$mrole[$i]."'"); 
							if($sqla->num_rows() == 0){
								$dataOn = array (
												'roleid' => $params['roleid'],
												'permissionid' => $mrole[$i]
											);
								$this->db->insert('sys_rolepermissions',$dataOn);
							}
						
							$sqlrole = $this->db->query("select a.*,b.parentid from sys_permissions a left join sys_menu b on (a.category='menu' and a.permissionname = b.menuname) where a.permissionid='".$mrole[$i]."' and b.parentid <> '0'");
							if($sqlrole->num_rows() > 0){
								//print_r('disini');die;
								$rwmenu = $sqlrole->row();
								$sqlper = $this->db->query("select a.* from sys_rolepermissions a left join sys_permissions b on (a.permissionid = b.permissionid) left join sys_menu c on (b.category='menu' and b.permissionname = c.menuname) where c.menuid='".$rwmenu->parentid."' and a.roleid='".$params['roleid']."'");
								if($sqlper->num_rows() == 0){
									$sll = $this->db->query("select a.* from sys_permissions a left join sys_menu b on (a.category='menu' and a.permissionname=b.menuname) where b.menuid='".$rwmenu->parentid."'")->row();
									$dataIn2 = array(
													'roleid' => $params['roleid'],
													'permissionid' => $sll->permissionid
												);
									$this->db->insert('sys_rolepermissions',$dataIn2);
								}
							}
						}
					}
				}else{
					$sql = $this->db->query("select * from sys_roles where rolename='".$params['rolename']."'");
					if($sql->num_rows() > 0){
						throw new MgException('430', 'Rolename tidak boleh sama/duplikat!.');
					}else{
						$status=1;
						$dataIn=array(
							'rolename' => trim($params['rolename']),
							'description' => trim($params['description'])
							);
						$this->db->where('roleid',$params['roleid']);
						$this->db->update('sys_roles',$dataIn);
						
					
						if($params['permissionsid']!='' && $params['permissionsid']!=null){
							$this->db->where('roleid',$params['roleid']);
							$this->db->delete('sys_rolepermissions');
							$mrole = explode(",",$params['permissionsid']);
							for($i=0;$i<count($mrole);$i++){
								$sqla = $this->db->query("select * from sys_rolepermissions where roleid='".$params['roleid']."' and permissionid='".$mrole[$i]."'"); 
								if($sqla->num_rows() == 0){
									$dataOn = array (
													'roleid' => $params['roleid'],
													'permissionid' => $mrole[$i]
												);
									$this->db->insert('sys_rolepermissions',$dataOn);
								}
							
								$sqlrole = $this->db->query("select a.*,b.parentid from sys_permissions a left join sys_menu b on (a.category='menu' and a.permissionname = b.menuname) where a.permissionid='".$mrole[$i]."' and b.parentid <> '0'");
								if($sqlrole->num_rows() > 0){
									$rwmenu = $sqlrole->row();
									$sqlper = $this->db->query("select a.* from sys_rolepermissions a left join sys_permissions b on (a.permissionid = b.permissionid) left join sys_menu c on (b.category='menu' and b.permissionname = c.menuname) where c.menuid='".$rwmenu->parentid."' and a.roleid='".$params['roleid']."'");
									if($sqlper->num_rows() == 0){
										$sll = $this->db->query("select a.* from sys_permissions a left join sys_menu b on (a.category='menu' and a.permissionname=b.menuname) where b.menuid='".$rwmenu->parentid."'")->row();
										$dataIn2 = array(
														'roleid' => $params['roleid'],
														'permissionid' => $sll->permissionid
													);
										$this->db->insert('sys_rolepermissions',$dataIn2);
									}
								}
							}
						}
					}
				}
			}
			$result = array('success'=>1, 'message'=>'Data berhasil ditambahkan.');
			return $result;
		}else{
			throw new MgException('430', 'Field tidak boleh kosong!.');
		}
	}
	
	function simpan_changePassword($params){
		$this->load->model('login/m_login', 'mlogin');
		if (isset($params['username']) and isset($params['currentpassword']) and isset($params['newpassword']) 
			and isset($params['confirmpassword'])){
			if($this->mlogin->checkPassword($params['username'],$params['currentpassword'])===false){
				 throw new MgException('430', 'Password lama salah.');
			}else if ($params['newpassword'] !== $params['confirmpassword'] ) {
				throw new MgException('430', 'Password baru dan konfirmasi password tidak sama.');
			} else {
				// tipe enkripsi (sementara) adalah 1
				$newpassword = $params['newpassword'];
				$vcode = $this->mlogin->SysConfig['enccode'];
				$encpass = $this->mlogin->strToHex($this->mlogin->rc4($vcode, $newpassword));
				$vsql = "update sys_users set enctype = 1, password = :password where username = :username";
				$vparams = array('username'=>$params['username'], 'password'=>$encpass);
				$res = $this->mdb->ExecSQL('application', $vsql, $vparams, 'array');
				$result = array('success'=>1, 'message'=>'Password sudah diset.');
				return $result;
			}
		} else {
			throw new MgException('430', 'Parameter change password tidak lengkap.');
		}
	}
 

}
?>
