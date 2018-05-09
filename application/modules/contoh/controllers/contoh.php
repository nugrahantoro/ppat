<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Contoh extends MY_Controller {

  public function __construct()
	{
			parent::__construct();
			$this->load->model('m_contoh');
	}

	function index() {
		try {
			$sessData = $this->checkSessionData();
			if ($sessData===false){
				echo Modules::run('login');
			} else {
        $data['record']= $this->m_contoh->data_laporan()->result();
				$this->load->view('v_contoh',$data);
			}
		} catch (Exception $e) {
			echo $e->getMessage() . "\r\n" . $e->getTraceAsString();
		}
  }

	function tampil_data($id){
    try {
			$sessData = $this->checkSessionData();
			if ($sessData===false){
				echo Modules::run('login');
			} else {
        $data['record']= $this->m_contoh->list_laporan($id)->result();
				$this->load->view('v_detail',$data);
			}
		} catch (Exception $e) {
			echo $e->getMessage() . "\r\n" . $e->getTraceAsString();
		}
	}

  function aksi_terima($id){
    try {
      $sessData = $this->checkSessionData();
      if ($sessData===false){
        echo Modules::run('login');
      } else {
        $this->m_contoh->terima($id);
        echo "<script>alert('Selesai!');history.go(-1);</script>";
      }
    } catch (Exception $e) {
      echo $e->getMessage() . "\r\n" . $e->getTraceAsString();
    }
  }

  function aksi_tolak($id){
    try {
      $sessData = $this->checkSessionData();
      if ($sessData===false){
        echo Modules::run('login');
      } else {
        $this->m_contoh->tolak($id);
        echo " <script>alert('Selesai!');history.go(-1);</script>";
      }
    } catch (Exception $e) {
      echo $e->getMessage() . "\r\n" . $e->getTraceAsString();
    }
  }

}
