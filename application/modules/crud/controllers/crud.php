<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

/* Manggu Framework
 * Simple PHP Application Development
 * Kusnassriyanto S. Bahri
 * kusnassriyanto@gmail.com
 *
 */

class Crud extends MY_Controller {

    function __construct() {
        parent::__construct();
    }
//    public function command(){
//        echo "testing";
//    }

    public function _xremap($methodname){
        $this->openCrud($methodname);
    }

    public function index($crudname, $actionname='browse'){
//        echo "*****";
//        echo $crudname;
//        die;
        $this->load->model('m_crud', 'mcrud');

        $sessData = $this->checkSessionData();
        if ($sessData===false){
            //echo "***";
            echo 'not login.';
            //$this->mlogin->openLoginScreen();
        } else {
            $basefolder = $this->ci->config->item('basefolder').'crud/';
            $filename = $basefolder.$crudname.'/'.$actionname.".query";
            //echo $filename;
            if (file_exists($filename)){
                $this->mcrud->sessionData = $sessData;
                $username = $sessData['username'];
                $this->updateSysParamsUserInfo($username);
                $this->mcrud->showCrud($crudname, $actionname);
            } else {
                show_404();
            }
        }
//        $ctparams = $this->mcrud->getViewDataParams($crudname);
//        //print_r($ctparams);
//        if (isset($ctparams['view'])) {
//            if (is_array($ctparams['view'])){
//                print_r($ctparams['view']);
//            } else {
//                echo $ctparams['view'];
//            }
//
//        } else {
//            print_r($ctparams);
//        }
    }

    public function command($crudname, $actionname){
        $this->load->model('m_crud', 'mcrud');
        $sessData = $this->checkSessionData();
        if ($sessData===false){
            //echo "***";
            echo 'not login.';
            //$this->mlogin->openLoginScreen();
        } else {
            $basefolder = $this->ci->config->item('basefolder').'crud/';
            $filename = $basefolder.$crudname.'/'.$actionname.".query";
            //echo $filename;
            $this->mcrud->sessionData = $sessData;
            $username = $sessData['username'];
            $this->updateSysParamsUserInfo($username);
            if (file_exists($filename)){
                $this->mcrud->showCommand($crudname, $actionname);
            } else {
                $this->mcrud->showCommand('base', 'construction');
            }
        }
    }

    public function command2($crudname, $actionname){
        $this->load->model('m_crud', 'mcrud');
        $sessData = $this->checkSessionData();
	  //var_dump($_POST);die;
        if ($sessData===false){
            echo 'not login.';
        } else {
		if($actionname == 'reject'){
			if($_POST['next_taskname'] == 'validasi_bidang'){
				$rr = $this->db->query("SELECT * FROM tr_log_proses WHERE
											workflowid = '".$_POST['workflowid']."'
											AND next_taskname = 'validasi_bidang'
											ORDER BY date_proses DESC LIMIT 1 ")->row();
				$ct = $rr->catatan;
			}else if($_POST['next_taskname'] == 'persetujuan_bidang'){
				$dt = json_decode($_POST['workflowdata']);
				//var_dump($dt);die;
				$ct = '';
				if(isset($dt->catatan_rekomendasi)){
					$ct = $dt->catatan_rekomendasi;
				}elseif(isset($dt->kesimpulan_rekomendasi_teknis)){
					$ct = $dt->kesimpulan_rekomendasi_teknis;
				}elseif(isset($dt->catatan_rekomendasi_teknis)){
					$ct = $dt->catatan_rekomendasi_teknis;
				}elseif(isset($dt->rincian_kesimpulan_rekomendasi_teknis)){
					$ct = $dt->rincian_kesimpulan_rekomendasi_teknis;
				}elseif(isset($dt->rekomendasi_teknis_pematangan_kabid)){
					$ct = $dt->rekomendasi_teknis_pematangan_kabid;
				}elseif(isset($dt->kesimpulan_rekomendasi)){
					$ct = $dt->kesimpulan_rekomendasi;
				}
			}
			$data['crudtitle'] = 'Anda yakin menolak proses perizinan ini!!';
			$catatan = '<label>Alasan Penolakan Untuk Pemohon</label><br><textarea name="catatan_auto" class="form-control crud-edit">'.$ct.'</textarea>';
		}else if($actionname == 'next'){
			$data['crudtitle'] = 'Anda yakin melanjutkan proses perizinan ini!!';
			$catatan = '<label>Catattan Untuk Step Selanjutnya</label><br><textarea name="catatan_auto" class="form-control crud-edit"></textarea>';
		}else if($actionname == 'back'){
			$data['crudtitle'] = 'Anda yakin mengembalikan proses perizinan ini!!';
			$catatan = '<label>Catattan Untuk Step Sebelumnya</label><br><textarea name="catatan_auto" class="form-control crud-edit"></textarea>';
		}
		$data['crudmessage'] = '';
		$data['crudparams'] = '
			 <input class="form-control crud-edit" placeholder="" name="processcategory" id="processcategory" style="" value="'.$_POST['processcategory'].'" type="hidden">
			<input class="form-control crud-edit" placeholder="" name="processname" id="processname" style="" value="'.$_POST['processname'].'" type="hidden">
			<input class="form-control crud-edit" placeholder="" name="next_taskname" id="next_taskname" style="" value="'.$_POST['next_taskname'].'" type="hidden">
			<input class="form-control crud-edit" placeholder="" name="workflowid" id="workflowid" style="" value="'.$_POST['workflowid'].'" type="hidden">
			<input class="form-control crud-edit" placeholder="" name="steps_viewlist" id="steps_viewlist" style="" value="'.$_POST['steps_viewlist'].'" type="hidden">'.$catatan;
		$data['crudname'] = $crudname;
		$data['actionname'] = $actionname;
		$result = $this->load->view('crud/editview2', $data, true);
		echo $result;
        }
    }

    public function openCrud($crudname){
        $this->load->model('m_crud', 'mcrud');
        $ctparams = $this->mcrud->getViewDataParams($crudname);
        //print_r($ctparams);
    }

    public function recview($crudname, $actionname='recordview'){
        //echo "test";
        $this->load->model('m_crud', 'mcrud');
        $basefolder = $this->ci->config->item('basefolder').'crud/';
        $filename = $basefolder.$crudname.'/'.$actionname.".query";
        //echo $filename;
        if (file_exists($filename)){
            $this->mcrud->showRecord($crudname, $actionname);
        } else {
            $this->mcrud->showRecord('base', 'construction');
        }
    }

    public function svqueryview($crudname, $actionname){
        try {
            $this->load->model('login/m_login', 'mlogin');
            $sessData = $this->mlogin->getSessionData();
            if ($sessData===false){
                $result = array('success'=>0, 'error'=>1, 'errorname'=>'belum_login', 'message'=>'Belum login.');
            } else {
                $this->load->model('m_crud', 'mcrud');
                $username = $sessData['username'];
                //echo $username;
                $sysuserinfo = $this->getSysUserInfo($username);
                //$this->mcrud->mdb->mergeDefParams($sysuserinfo);
                //$this->mdb->mergeDefParams($sysuserinfo);
                $this->updateSysParamsUserInfo($username);
                $this->mcrud->loadCrudFile($crudname, $actionname);
                $yparams = $this->mcrud->getDefaultSQLParams();
                $xparams = $this->mcrud->getDefaultParams();
                $xparams = array_merge($yparams, $xparams);
                $params = array_merge($xparams, $_GET);
                $xresult = $this->mcrud->getViewDataGrid($params);
                //print_r($xresult);
                //die;
                $result = array();
                $result['crudgrid'] = $xresult['view'];
                $result['crudpages'] = $xresult['pagination'];
                //$result['crudcommands'] = $xresult['crudcommands'];
                $result['cmdscripts'] = $xresult['cmdscripts'];
                $result['crudgridinfo'] = $xresult['gridinfo'];
                $result['success'] = 1;
            }
        } catch (Exception $e) {
            $result = $this->exceptionAsJson($e);
        }
        echo json_encode($result);
    }

    public function svexecdata($crudname, $actionname, $command=''){
        try {
            $this->load->model('login/m_login', 'mlogin');
            $sessData = $this->mlogin->getSessionData();
            if ($sessData===false){
                $result = array('success'=>0, 'error'=>1, 'errorname'=>'belum_login', 'message'=>'Belum login.');
            } else {
                $this->load->model('m_crud', 'mcrud');
                $this->mcrud->loadCrudFile($crudname, $actionname);
                if (isset($this->mcrud->crudData['cmdtype'])){
                    $cmdtype = $this->mcrud->crudData['cmdtype'];
                } else {
                    $cmdtype = 'sql';
                }
                if ($cmdtype=='sql'){
                    if ($command===''){
                        $command = 'sqlexec';
                    }
                    $result = $this->mcrud->executeData($command, $_POST);
                } else if ($cmdtype=='method'){
                    if ($command===''){
                        $command = 'methodexec';
                    }
                    $result = $this->mcrud->executeMethod($command, $_POST);
                }
            }
        } catch (Exception $e) {
            $result = $this->exceptionAsJson($e);
        }
        echo json_encode($result);
    }

    public function svlookup($lookupname){
        try {
            $this->load->model('login/m_login', 'mlogin');
            $sessData = $this->mlogin->getSessionData();
            if ($sessData===false){
                $result = array('success'=>0, 'error'=>1, 'errorname'=>'belum_login', 'message'=>'Belum login.');
            } else {
                $this->load->model('m_crud', 'mcrud');
                $params = $_GET;
                $value = '';
                $username = $sessData['username'];
                $this->updateSysParamsUserInfo($username);
                $ludata = $this->mcrud->getViewLookup($lookupname, $params, $value);
                $ludata['lookupname'] = $lookupname;
                $ludata['success'] = 1;
                $result = $ludata;
                //$this->mcrud->loadCrudFile($crudname, $actionname);
                //$result = $this->mcrud->executeData($command, $_POST);
            }
        } catch (Exception $e) {
            $result = $this->exceptionAsJson($e);
        }
        echo json_encode($result);
    }

    public function svlookupdata($lookupname){
        try {
            $this->load->model('login/m_login', 'mlogin');
            $sessData = $this->mlogin->getSessionData();
            if ($sessData===false){
                $result = array('success'=>0, 'error'=>1, 'errorname'=>'belum_login', 'message'=>'Belum login.');
            } else {
                $this->load->model('m_crud', 'mcrud');
                $params = $_GET;
                $value = '';
                $username = $sessData['username'];
                $this->updateSysParamsUserInfo($username);
                //$ludata = $this->mcrud->getViewLookup($lookupname, $params, $value);
                $ludata=array();
                $ludata['data'] = $this->mcrud->getDataLookup($lookupname, $params);
                $ludata['lookupname'] = $lookupname;
                $ludata['success'] = 1;
                $result = $ludata;
                //$this->mcrud->loadCrudFile($crudname, $actionname);
                //$result = $this->mcrud->executeData($command, $_POST);
            }
        } catch (Exception $e) {
            $result = $this->exceptionAsJson($e);
        }
        echo json_encode($result);
    }

    public function lookup($lookupname, $params=array(), $value=''){
//        try {
            $this->load->model('login/m_login', 'mlogin');
            $sessData = $this->mlogin->getSessionData();
            if ($sessData===false){
                $result = array('success'=>0, 'error'=>1, 'errorname'=>'belum_login', 'message'=>'Belum login.');
            } else {
                $this->load->model('m_crud', 'mcrud');
                //$params = $_GET;
                //$value = '';
                $username = $sessData['username'];
                $this->updateSysParamsUserInfo($username);
                $ludata = $this->mcrud->getDataLookup($lookupname, $params);
                $result = $this->mcrud->formatViewLookup($ludata, $value);
                //print_r($ludata);

                //$ludata['lookupname'] = $lookupname;
                //$ludata['success'] = 1;
                //$result = $ludata;
                //$this->mcrud->loadCrudFile($crudname, $actionname);
                //$result = $this->mcrud->executeData($command, $_POST);
            }
//        } catch (Exception $e) {
//            $result = $this->exceptionAsJson($e);
//        }
        //echo json_encode($result);
        return $result;
    }

    public function svcblookup($lookupname){
        try {
            $this->load->model('login/m_login', 'mlogin');
            $sessData = $this->mlogin->getSessionData();
            if ($sessData===false){
                $result = array('success'=>0, 'error'=>1, 'errorname'=>'belum_login', 'message'=>'Belum login.');
            } else {
                $this->load->model('m_crud', 'mcrud');
                $params = $_GET;
                $value = '';
                $ludata = $this->mcrud->getViewCheckListBox($lookupname, $params, $value);
                $ludata['lookupname'] = $lookupname;
                $ludata['success'] = 1;
                $result = $ludata;
                //$this->mcrud->loadCrudFile($crudname, $actionname);
                //$result = $this->mcrud->executeData($command, $_POST);
            }
        } catch (Exception $e) {
            $result = $this->exceptionAsJson($e);
        }
        echo json_encode($result);
    }

}
?>
