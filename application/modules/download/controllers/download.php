<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Download extends MY_Controller {

  public function __construct()
	{
			parent::__construct();
			$this->load->model('m_download');
	}

	function index() {
		try {
			$sessData = $this->checkSessionData();
			if ($sessData===false){
				echo Modules::run('login');
			} else {
        $data['record']= $this->m_download->data_laporan()->result();
				$this->load->view('v_download',$data);
			}
		} catch (Exception $e) {
			echo $e->getMessage() . "\r\n" . $e->getTraceAsString();
		}
  }

  function unduh($id) {
		try {
			$sessData = $this->checkSessionData();
			if ($sessData===false){
				echo Modules::run('login');
			} else {
        $data['download'] = $this->m_download->download($id)->result();
        $this->load->view('download',$data);
			}
		} catch (Exception $e) {
			echo $e->getMessage() . "\r\n" . $e->getTraceAsString();
		}
  }

}
