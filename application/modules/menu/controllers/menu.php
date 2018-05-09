<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Menu extends MY_Controller {

    function __construct() {
        parent::__construct();
    }

    public function index() {
        //$this->load->view('welcome_message');
            echo modules::run('login', '');
        //echo "testing";
    }

    public function _remap($methodname, $params=array()){
        $this->openMenu($methodname, $params);
    }
    
    function openMenu($menuname, $params=array()) {
		
        try {
//            $this->load->model('login/m_login', 'mlogin');
//            $sessData = $this->mlogin->getSessionData();
            $sessData = $this->checkSessionData();
            //$this->sessiondata = $sessData;
			//print_r($sessData);
			//die;
            if ($sessData===false){
                //echo "***";
                echo Modules::run('login');
                //$this->mlogin->openLoginScreen();
            } else {
                $this->load->model('m_menu', 'mmenu');
				$username = $sessData['username'];
				$this->updateSysParamsUserInfo($username);
                $menuinfo = $this->mmenu->getMenuInfo($menuname);
               
                if ($menuinfo === false) {
                    show_404();
                } else {
                    $data = $this->mmenu->getDefaultData();
					$cskk = $this->db->query("select * from sys_menu where menuname='".$menuname."' and ismenu=1 and visible=1");
					if($cskk->num_rows() > 0){
						$fskk = $cskk->row();
						$menuid = $fskk->menuid;
						$rec_menu = RecursiveMenu($menuid);
						$this->session->set_userdata('ses_menu',$rec_menu);
						$data['s_menu'] = $rec_menu;
					}
                    $ctmenu = $this->mmenu->getViewMainMenu();
                    $data['mainmenu'] = $ctmenu['view'];
					$data['make_menu'] = make_menu();
					
                    $cmd = $menuinfo['command'];
                    if (trim($menuinfo['context'])===''){
                        $ctx = array();
                    } else {
                        $ctx = explode("/", $menuinfo['context']);
                    }
                    $xcmd = array_merge(array($cmd), $ctx);
                    if(count($params)>0){
                        $xcmd = array_merge($xcmd, $params);
                    }
		
                    $data['pagecontent'] = call_user_func_array('Modules::run', $xcmd);
			//var_dump($xcmd);die;
			//var_dump($data['pagecontent']);die;	
                    //print_r($data);
                    $user_dispname = $sessData['username'];
                    if(isset($sessData['fullname'])){
                        if($sessData['fullname']!==''){
                            $user_dispname = $sessData['fullname'];
                        }
                    }
                    $data['displayname'] = $user_dispname;
                    $data['username'] = $sessData['username'];
                    $this->load->view('menu/baseview', $data);
                }
            }
        } catch (Exception $e) {
            echo $e->getMessage() . "\r\n" . $e->getTraceAsString();
//                $this->showError($e);
        }
    }

    public function testing() {
        try {
            $this->load->model('m_menu', 'menu');
            $data = $this->mmenu->getDefaultData();

            $ctmenu = $this->mmenu->getViewMainMenu();
            $data['mainmenu'] = $ctmenu['view'];
            //print_r($ctmenu);
            $this->load->view('baseview', $data);

            //print_r($data);
        } catch (Exception $e) {
            echo $e->getMessage() . "\r\n" . $e->getTraceAsString();
//                $this->showError($e);
        }
    }

    function getProv()
	{
		$id=$this->uri->segment(3);
		$query = $this->db->query("select * from ref_provinsi where id='".$id."'")->row();
		$sql = $this->db->query("select * from ref_kabkot where kode_prov='".$query->kode."'");
		$out = '<option value="">- Pilih -</option>';
		foreach($sql->result() as $row){
			$out .='<option value="'.$row->id.'">'.$row->nama.'</option>';
		}
		echo json_encode($out);
	}
	
	function getKot()
	{
		$id=$this->uri->segment(3);
		$sql = $this->db->query("select * from ref_kecamatan where id_kabkot='".$id."'");
		$out = '<option value="">- Pilih -</option>';
		foreach($sql->result() as $row){
			$out .='<option value="'.$row->id.'">'.$row->nama.'</option>';
		}
		echo json_encode($out);
	}
	
	function getKec()
	{
		$id=$this->uri->segment(3);
		$sql = $this->db->query("select * from ref_desa where id_kecamatan='".$id."'");
		$out = '<option value="">- Pilih -</option>';
		foreach($sql->result() as $row){
 			$out .='<option value="'.$row->id.'">'.$row->nama.'</option>';
		}
		echo json_encode($out);
	}

}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */