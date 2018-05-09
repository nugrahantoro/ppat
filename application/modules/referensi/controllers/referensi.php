<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Referensi extends MY_Controller {

    function __construct() {
        parent::__construct();
		$this->load->helper('tool');
		$this->load->library('mypagination' );
		$this->load->model('m_referensi', 'referensi');
    }

    public function index() {
		 echo Modules::run('login');
    }
	
	function tampil($category, $wfname){
		try {
            $sessData = $this->checkSessionData();
            if ($sessData===false){
                echo Modules::run('login');
            } else {
				$this->load->model('menu/m_menu', 'mmenu');
				$username = $sessData['username'];
                $this->updateSysParamsUserInfo($username);
				
				$data = $this->mmenu->getDefaultData();
		
				$ctmenu = $this->mmenu->getViewMainMenu();
				$query = $this->referensi->tabel_list(0,null,null,null,null);
				$data['result'] = $query;
				$data['mainmenu'] = $ctmenu['view'];
				$data['form'] = $this->uri->segment(3);
				$this->load->view('data/display', $data);
			}
        } catch (Exception $e) {
            echo $e->getMessage() . "\r\n" . $e->getTraceAsString();
        }
    }
	
	function form_tabel()
	{
		try {
            $sessData = $this->checkSessionData();
            if ($sessData===false){
                echo Modules::run('login');
            } else {
				$this->load->model('menu/m_menu', 'mmenu');
				$username = $sessData['username'];
                $this->updateSysParamsUserInfo($username);
				
				$data = $this->mmenu->getDefaultData();
		
				$ctmenu = $this->mmenu->getViewMainMenu();
	
				$data['mainmenu'] = $ctmenu['view'];
				$data['form'] = $this->uri->segment(3);
				$this->load->view('data/form', $data);
			}
        } catch (Exception $e) {
            echo $e->getMessage() . "\r\n" . $e->getTraceAsString();
        }
	}
	
	function simpan_tabel()
	{
		$tabel = 'ref_'.strtolower(str_replace(' ','_',trim($this->input->post('tabel'))));
		$sql = $this->db->query("show tables where binary(".DB_TABLE.") ='".$tabel."'");
		if($sql->num_rows() > 0){
			$data['status'] = 'error';
			$data['msg'] ='Nama Tabel sudah terpakai!';
		}else{
			$sql2 ="CREATE TABLE `".$tabel."` (
					  `id` bigint(20) NOT NULL AUTO_INCREMENT,
					  `nama` varchar(255) DEFAULT NULL,
					  PRIMARY KEY (`id`)
					)";
			$this->db->query($sql2);
			$data['status'] = 'sukses';
			$data['msg'] ='Tabel berhasil dibuat!';
		}
		
		echo json_encode($data);
	}
	
	function delete_tabel()
	{
		$tabel = $this->uri->segment(3);
		$sql2 ="DROP TABLE `".$tabel."`;";
		$this->db->query($sql2);
		$data['status'] = 'sukses';
		$data['msg'] ='Tabel berhasil dihapus!';
		
		echo json_encode($data);
	}
	
	function list_tabel()
	{
		try {
            $sessData = $this->checkSessionData();
            if ($sessData===false){
                echo Modules::run('login');
            } else {
				$this->load->model('menu/m_menu', 'mmenu');
				$username = $sessData['username'];
                $this->updateSysParamsUserInfo($username);
				$query = $this->referensi->tabel_list(0,null,null,null,null);
				$data['result'] = $query;
				$this->load->view('data/list', $data);
			}
        } catch (Exception $e) {
            echo $e->getMessage() . "\r\n" . $e->getTraceAsString();
        }
	}
	
	function add_tabel()
	{
		try {
            $sessData = $this->checkSessionData();
            if ($sessData===false){
                echo Modules::run('login');
            } else {
				$this->load->model('menu/m_menu', 'mmenu');
				$username = $sessData['username'];
                $this->updateSysParamsUserInfo($username);
				$tabel = $this->uri->segment(3);
				$uri_segment=4;
				$dis = $this->uri->segment(5);
				$cr = $this->uri->segment(6);
				$limited=((isset($dis) && ($dis!='' || $dis!=null))?$dis:10);
				$sgmnt = $this->uri->segment(4);
				$offset = ((isset($sgmnt) && ($sgmnt!='' || $sgmnt!=null))?$sgmnt:0);
				$sqlCari="";
				if($cr=='cr'){
					$data['cr']='';
				}else{
					$data['cr']= str_replace('%20',' ',$cr);
					$sqlCari .= " AND nama LIKE '%".str_replace('%20',' ',$cr)."%'";
				}
			
				$query = $this->referensi->data_list(1,$limited,$offset,null,$sqlCari,$tabel);
				$jum_data = $this->referensi->data_list(0,null,null,null,$sqlCari,$tabel);
				$this_url = '/referensi/add_tabel/'.$tabel.'/';
				$data2 = $this->mypagination->getPagination($jum_data->num_rows(),$limited,$this_url,$uri_segment);
				$data['paging'] = $data2['link'];
				$data['offset'] = $offset;
				$data['data_display'] = $limited;
				$data['jum_data'] = $jum_data->num_rows();
				$data['result'] = $query->result();
				$data['username'] = $sessData['username'];
				$data['tabel'] = $tabel;
				$data['judul'] = 'Daftar '.ucwords(str_replace('_',' ',str_replace('ref_','',$tabel)));
				$this->load->view('data/list_data',$data);
			}
        } catch (Exception $e) {
            echo $e->getMessage() . "\r\n" . $e->getTraceAsString();
        }
	}
	
	function add_form()
	{
		try {
            $sessData = $this->checkSessionData();
            if ($sessData===false){
                echo Modules::run('login');
            } else {
				$this->load->model('menu/m_menu', 'mmenu');
				$username = $sessData['username'];
                $this->updateSysParamsUserInfo($username);
				$tabel = $this->uri->segment(3);
				$id = $this->uri->segment(4);
				if($id!='' || $id!=null){
					$jum_data = $this->referensi->data_list(0,null,null,$id,null,$tabel);
					$data['field'] = $jum_data->row_array();
					//print_r($data)
				}
				$data['mainmenu'] = $ctmenu['view'];
				$data['form'] = $this->uri->segment(5);
				$data['tabel'] = $tabel;
				$data['judul'] = ucwords(str_replace('_',' ',str_replace('ref_','',$tabel)));
				$this->load->view('data/form_data', $data);
			}
        } catch (Exception $e) {
            echo $e->getMessage() . "\r\n" . $e->getTraceAsString();
        }
	}
	
	function simpan_data()
	{
		$tabel = $this->uri->segment(3);
		$id = $this->input->post('id');
		$nama = $this->input->post('nama');
		$nama2 = $this->input->post('nama2');
		if($id=='' || $id==null){
			$sql = $this->db->query("select nama from ".$tabel." where binary(nama)='".$nama."'");
			if($sql->num_rows() > 0){
				$data['status'] = 'error';
				$data['msg'] = 'Tidak boleh duplikat data!';
			}else{
				$dataIn=array(
							'nama' => trim($nama)
						);
				$this->db->insert($tabel,$dataIn);
				
				$data['status'] = 'sukses';
				$data['msg'] = 'Data berjasil disimpan!';
			}
		}else{
			if($nama==$nama2){
				$dataIn=array(
							'nama' => trim($nama)
						);
				$this->db->where('id',$id);
				$this->db->update($tabel,$dataIn);
				$data['status'] = 'sukses';
				$data['msg'] = 'Data berjasil diubah!';
			}else{
				$sql = $this->db->query("select nama from ".$tabel." where binary(nama)='".$nama."' and id <> '".$id."'");
				if($sql->num_rows() > 0){
					$data['status'] = 'error';
					$data['msg'] = 'Tidak boleh duplikat data!';
				}else{
					$dataIn=array(
								'nama' => trim($nama)
							);
					$this->db->where('id',$id);
					$this->db->update($tabel,$dataIn);
					$data['status'] = 'sukses';
					$data['msg'] = 'Data berjasil diubah!';
				}
			}
		}
		
		echo json_encode($data);
	}
	
	function delete_data()
	{
		$tabel = $this->uri->segment(3);
		$id = $this->uri->segment(4);
		$this->db->where('id',$id);
		$this->db->delete($tabel);
		$data['status'] = 'sukses';
		$data['msg'] ='Data berhasil dihapus!';

		echo json_encode($data);
	}
	
	function form_provinsi()
	{
		try {
            $sessData = $this->checkSessionData();
            if ($sessData===false){
                echo Modules::run('login');
            } else {
				$this->load->model('menu/m_menu', 'mmenu');
				$username = $sessData['username'];
                $this->updateSysParamsUserInfo($username);
				$id = $this->uri->segment(3);
				if($id!='' || $id!=null){
					$jum_data = $this->db->query("select * from ref_provinsi where id='".$id."'");
					$data['field'] = $jum_data->row_array();
				}
				$data['mainmenu'] = $ctmenu['view'];
				$data['form'] = $this->uri->segment(4);
				$this->load->view('provinsi/form', $data);
			}
        } catch (Exception $e) {
            echo $e->getMessage() . "\r\n" . $e->getTraceAsString();
        }
	}
	
	function simpan_provinsi()
	{
		$id = $this->input->post('id');
		$nama = $this->input->post('nama');
		$kode2 = $this->input->post('kode2');
		$kode = $this->input->post('kode');
		$singkatan = $this->input->post('singkatan');
		$delete = $this->input->post('delete');
		if($delete=='1'){
			$this->db->where('id',$id);
			$this->db->delete('ref_provinsi');
			$data['success']=1;
			$data['message']='Data berhasil dihapus.';
		}else{
			if($id == '' || $id == null){
				$query = $this->db->query("select * from ref_provinsi where kode='".$kode."'");
				if($query->num_rows() > 0){
					$data['success']=0;
					$data['message']='Duplikast kode, harap cek kembali.';
				}else{
					$dataIn = array (
								'kode' => $kode,
								'nama' => $nama,
								'singkatan' => $singkatan
							);
					$this->db->insert('ref_provinsi',$dataIn);
					$data['success']=1;
					$data['message']='Data berhasil disimpan.';
				}
			}else{
				if($kode==$kode2){
					$dataIn = array (
								'kode' => $kode,
								'nama' => $nama,
								'singkatan' => $singkatan
							);
					$this->db->where('id',$id);
					$this->db->update('ref_provinsi',$dataIn);
					$data['success']=1;
					$data['message']='Data berhasil diubah.';
				}else{
					$query = $this->db->query("select * from ref_provinsi where kode='".$kode."'");
					if($query->num_rows() > 0){
						$data['success']=0;
						$data['message']='Duplikast kode, harap cek kembali.';
					}else{
						$dataIn = array (
									'kode' => $kode,
									'nama' => $nama,
									'singkatan' => $singkatan
								);
						$this->db->where('id',$id);
						$this->db->update('ref_provinsi',$dataIn);
						$data['success']=1;
						$data['message']='Data berhasil diubah.';
					}
				}
			}
		}
		echo json_encode($data);
	}
	
	function delete_provinsi()
	{
		try {
            $sessData = $this->checkSessionData();
            if ($sessData===false){
                echo Modules::run('login');
            } else {
				$this->load->model('menu/m_menu', 'mmenu');
				$username = $sessData['username'];
                $this->updateSysParamsUserInfo($username);
				$id = $this->uri->segment(3);
				if($id!='' || $id!=null){
					$jum_data = $this->db->query("select * from ref_provinsi where id='".$id."'");
					$data['field'] = $jum_data->row_array();
				}
				$data['delete'] = 1;
				$data['mainmenu'] = $ctmenu['view'];
				$data['form'] = $this->uri->segment(4);
				$this->load->view('provinsi/form', $data);
			}
        } catch (Exception $e) {
            echo $e->getMessage() . "\r\n" . $e->getTraceAsString();
        }
	}
	
	function form_kabkot()
	{
		try {
            $sessData = $this->checkSessionData();
            if ($sessData===false){
                echo Modules::run('login');
            } else {
				$this->load->model('menu/m_menu', 'mmenu');
				$username = $sessData['username'];
                $this->updateSysParamsUserInfo($username);
				$id = $this->uri->segment(3);
				if($id!='' || $id!=null){
					$jum_data = $this->db->query("select * from ref_kabkot where id='".$id."'");
					$data['field'] = $jum_data->row_array();
				}
				$data['mainmenu'] = $ctmenu['view'];
				$data['form'] = $this->uri->segment(4);
				$this->load->view('kabkot/form', $data);
			}
        } catch (Exception $e) {
            echo $e->getMessage() . "\r\n" . $e->getTraceAsString();
        }
	}
	
	function simpan_kabkot()
	{
		$id = $this->input->post('id');
		$nama = $this->input->post('nama');
		$kode2 = $this->input->post('kode2');
		$kode = $this->input->post('kode');
		$kode_prov = $this->input->post('kode_prov');
		$delete = $this->input->post('delete');
		if($delete=='1'){
			$this->db->where('id',$id);
			$this->db->delete('ref_kabkot');
			$data['success']=1;
			$data['message']='Data berhasil dihapus.';
		}else{
			if($id == '' || $id == null){
				$query = $this->db->query("select * from ref_kabkot where kode='".$kode_prov.$kode."'");
				if($query->num_rows() > 0){
					$data['success']=0;
					$data['message']='Duplikast kode, harap cek kembali.';
				}else{
					$dataIn = array (
								'kode_prov' => $kode_prov,
								'kode' => $kode_prov.$kode,
								'nama' => $nama
							);
					$this->db->insert('ref_kabkot',$dataIn);
					$data['success']=1;
					$data['message']='Data berhasil disimpan.';
				}
			}else{
				if($kode_prov.$kode==$kode2){
					$dataIn = array (
								'kode_prov' => $kode_prov,
								'kode' => $kode_prov.$kode,
								'nama' => $nama
							);
					$this->db->where('id',$id);
					$this->db->update('ref_kabkot',$dataIn);
					$data['success']=1;
					$data['message']='Data berhasil diubah.';
				}else{
					$query = $this->db->query("select * from ref_kabkot where kode='".$kode_prov.$kode."'");
					if($query->num_rows() > 0){
						$data['success']=0;
						$data['message']='Duplikast kode, harap cek kembali.';
					}else{
						$dataIn = array (
									'kode_prov' => $kode_prov,
									'kode' => $kode_prov.$kode,
									'nama' => $nama
								);
						$this->db->where('id',$id);
						$this->db->update('ref_kabkot',$dataIn);
						$data['success']=1;
						$data['message']='Data berhasil diubah.';
					}
				}
			}
		}
		echo json_encode($data);
	}
	
	function delete_kabkot()
	{
		try {
            $sessData = $this->checkSessionData();
            if ($sessData===false){
                echo Modules::run('login');
            } else {
				$this->load->model('menu/m_menu', 'mmenu');
				$username = $sessData['username'];
                $this->updateSysParamsUserInfo($username);
				$id = $this->uri->segment(3);
				if($id!='' || $id!=null){
					$jum_data = $this->db->query("select * from ref_kabkot where id='".$id."'");
					$data['field'] = $jum_data->row_array();
				}
				$data['delete'] = 1;
				$data['mainmenu'] = $ctmenu['view'];
				$data['form'] = $this->uri->segment(4);
				$this->load->view('kabkot/form', $data);
			}
        } catch (Exception $e) {
            echo $e->getMessage() . "\r\n" . $e->getTraceAsString();
        }
	}
	
	function getProv()
	{
		$id=$this->uri->segment(3);
		$sql = $this->db->query("select * from ref_kabkot where kode_prov='".$id."' order by nama ASC");
		$out = "<option value=\"\">- Pilih -</option>";
		foreach($sql->result() as $row){
			$out .= "<option value=\"".substr($row->kode,-2)."\">".$row->nama."</option>";
		}
		echo json_encode($out);
	}
	
	function getKot()
	{
		$id=$this->uri->segment(3);
		$prov=$this->uri->segment(4);
		$sql = $this->db->query("select * from ref_kecamatan where kode_kabkot='".$prov.$id."' order by nama ASC");
		$out = "<option value=\"\">- Pilih -</option>";
		foreach($sql->result() as $row){
			$out .= "<option value=\"".substr($row->kode,-3)."\">".$row->nama."</option>";
		}
		echo json_encode($out);
	}
	
	function form_kecamatan()
	{
		try {
            $sessData = $this->checkSessionData();
            if ($sessData===false){
                echo Modules::run('login');
            } else {
				$this->load->model('menu/m_menu', 'mmenu');
				$username = $sessData['username'];
                $this->updateSysParamsUserInfo($username);
				$id = $this->uri->segment(3);
				if($id!='' || $id!=null){
					$jum_data = $this->db->query("select * from ref_kecamatan where id='".$id."'");
					$data['field'] = $jum_data->row_array();
				}
				$data['mainmenu'] = $ctmenu['view'];
				$data['form'] = $this->uri->segment(4);
				$this->load->view('kecamatan/form', $data);
			}
        } catch (Exception $e) {
            echo $e->getMessage() . "\r\n" . $e->getTraceAsString();
        }
	}
	
	function simpan_kecamatan()
	{
		$id = $this->input->post('id');
		$nama = $this->input->post('nama');
		$kode2 = $this->input->post('kode2');
		$kode = $this->input->post('kode');
		$kode_prov = $this->input->post('kode_prov');
		$kode_kabkot = $this->input->post('kode_kabkot');
		$delete = $this->input->post('delete');
		if($delete=='1'){
			$this->db->where('id',$id);
			$this->db->delete('ref_kecamatan');
			$data['success']=1;
			$data['message']='Data berhasil dihapus.';
		}else{
			if($id == '' || $id == null){
				$query = $this->db->query("select * from ref_kecamatan where kode='".$kode_prov.$kode_kabkot.$kode."'");
				if($query->num_rows() > 0){
					$data['success']=0;
					$data['message']='Duplikast kode, harap cek kembali.';
				}else{
					$dataIn = array (
								'kode_kabkot' => $kode_prov.$kode_kabkot,
								'kode' => $kode_prov.$kode_kabkot.$kode,
								'nama' => $nama
							);
					$this->db->insert('ref_kecamatan',$dataIn);
					$data['success']=1;
					$data['message']='Data berhasil disimpan.';
				}
			}else{
				if($kode_prov.$kode_kabkot.$kode==$kode2){
					$dataIn = array (
								'kode_kabkot' => $kode_prov.$kode_kabkot,
								'kode' => $kode_prov.$kode_kabkot.$kode,
								'nama' => $nama
							);
					$this->db->where('id',$id);
					$this->db->update('ref_kecamatan',$dataIn);
					$data['success']=1;
					$data['message']='Data berhasil diubah.';
				}else{
					$query = $this->db->query("select * from ref_kecamatan where kode='".$kode_prov.$kode_kabkot.$kode."'");
					if($query->num_rows() > 0){
						$data['success']=0;
						$data['message']='Duplikast kode, harap cek kembali.';
					}else{
						$dataIn = array (
									'kode_kabkot' => $kode_prov.$kode_kabkot,
									'kode' => $kode_prov.$kode_kabkot.$kode,
									'nama' => $nama
								);
						$this->db->where('id',$id);
						$this->db->update('ref_kecamatan',$dataIn);
						$data['success']=1;
						$data['message']='Data berhasil diubah.';
					}
				}
			}
		}
		echo json_encode($data);
	}
	
	function delete_kecamatan()
	{
		try {
            $sessData = $this->checkSessionData();
            if ($sessData===false){
                echo Modules::run('login');
            } else {
				$this->load->model('menu/m_menu', 'mmenu');
				$username = $sessData['username'];
                $this->updateSysParamsUserInfo($username);
				$id = $this->uri->segment(3);
				if($id!='' || $id!=null){
					$jum_data = $this->db->query("select * from ref_kecamatan where id='".$id."'");
					$data['field'] = $jum_data->row_array();
				}
				$data['delete'] = 1;
				$data['mainmenu'] = $ctmenu['view'];
				$data['form'] = $this->uri->segment(4);
				$this->load->view('kecamatan/form', $data);
			}
        } catch (Exception $e) {
            echo $e->getMessage() . "\r\n" . $e->getTraceAsString();
        }
	}
	
	function form_kelurahan()
	{
		try {
            $sessData = $this->checkSessionData();
            if ($sessData===false){
                echo Modules::run('login');
            } else {
				$this->load->model('menu/m_menu', 'mmenu');
				$username = $sessData['username'];
                $this->updateSysParamsUserInfo($username);
				$id = $this->uri->segment(3);
				if($id!='' || $id!=null){
					$jum_data = $this->db->query("select * from ref_desa where id='".$id."'");
					$data['field'] = $jum_data->row_array();
				}
				$data['mainmenu'] = $ctmenu['view'];
				$data['form'] = $this->uri->segment(4);
				$this->load->view('kelurahan/form', $data);
			}
        } catch (Exception $e) {
            echo $e->getMessage() . "\r\n" . $e->getTraceAsString();
        }
	}
	
	function simpan_kelurahan()
	{
		$id = $this->input->post('id');
		$nama = $this->input->post('nama');
		$kode2 = $this->input->post('kode2');
		$kode = $this->input->post('kode');
		$kode_prov = $this->input->post('kode_prov');
		$kode_kabkot = $this->input->post('kode_kabkot');
		$kode_kec = $this->input->post('kode_kec');
		$delete = $this->input->post('delete');
		if($delete=='1'){
			$this->db->where('id',$id);
			$this->db->delete('ref_desa');
			$data['success']=1;
			$data['message']='Data berhasil dihapus.';
		}else{
			if($id == '' || $id == null){
				$query = $this->db->query("select * from ref_desa where kode='".$kode_prov.$kode_kabkot.$kode_kec.$kode."'");
				if($query->num_rows() > 0){
					$data['success']=0;
					$data['message']='Duplikast kode, harap cek kembali.';
				}else{
					$dataIn = array (
								'kode_kec' => $kode_prov.$kode_kabkot.$kode_kec,
								'kode' => $kode_prov.$kode_kabkot.$kode_kec.$kode,
								'nama' => $nama
							);
					$this->db->insert('ref_desa',$dataIn);
					$data['success']=1;
					$data['message']='Data berhasil disimpan.';
				}
			}else{
				if($kode_prov.$kode_kabkot.$kode_kec.$kode==$kode2){
					$dataIn = array (
								'kode_kec' => $kode_prov.$kode_kabkot.$kode_kec,
								'kode' => $kode_prov.$kode_kabkot.$kode_kec.$kode,
								'nama' => $nama
							);
					$this->db->where('id',$id);
					$this->db->update('ref_desa',$dataIn);
					$data['success']=1;
					$data['message']='Data berhasil diubah.';
				}else{
					$query = $this->db->query("select * from ref_desa where kode='".$kode_prov.$kode_kabkot.$kode_kec.$kode."'");
					if($query->num_rows() > 0){
						$data['success']=0;
						$data['message']='Duplikast kode, harap cek kembali.';
					}else{
						$dataIn = array (
									'kode_kec' => $kode_prov.$kode_kabkot.$kode_kec,
									'kode' => $kode_prov.$kode_kabkot.$kode_kec.$kode,
									'nama' => $nama
								);
						$this->db->where('id',$id);
						$this->db->update('ref_desa',$dataIn);
						$data['success']=1;
						$data['message']='Data berhasil diubah.';
					}
				}
			}
		}
		echo json_encode($data);
	}
	
	function delete_kelurahan()
	{
		try {
            $sessData = $this->checkSessionData();
            if ($sessData===false){
                echo Modules::run('login');
            } else {
				$this->load->model('menu/m_menu', 'mmenu');
				$username = $sessData['username'];
                $this->updateSysParamsUserInfo($username);
				$id = $this->uri->segment(3);
				if($id!='' || $id!=null){
					$jum_data = $this->db->query("select * from ref_desa where id='".$id."'");
					$data['field'] = $jum_data->row_array();
				}
				$data['delete'] = 1;
				$data['mainmenu'] = $ctmenu['view'];
				$data['form'] = $this->uri->segment(4);
				$this->load->view('kelurahan/form', $data);
			}
        } catch (Exception $e) {
            echo $e->getMessage() . "\r\n" . $e->getTraceAsString();
        }
	}

	function form_suspend_persil(){
		try {
            $sessData = $this->checkSessionData();
            if ($sessData===false){
                echo Modules::run('login');
            } else {
				$this->load->model('menu/m_menu', 'mmenu');
				$username = $sessData['username'];
                $this->updateSysParamsUserInfo($username);
				$id = $this->uri->segment(3);
				if($id!='' || $id!=null){
					$jum_data = $this->db->query("select * from data_suspend_persil where id='".$id."'");
					$data['field'] = $jum_data->row_array();
				}
				$data['mainmenu'] = $ctmenu['view'];
				$data['form'] = $this->uri->segment(4);
				$this->load->view('suspend_persil/form', $data);
			}
        } catch (Exception $e) {
            echo $e->getMessage() . "\r\n" . $e->getTraceAsString();
        }
	}
	
	function getKel($id_kec){		
		$sql = $this->db->query("
					select 
						ref_desa.id, 
						ref_desa.nama
					from ref_desa
					JOIN ref_kecamatan ON ref_desa.kode_kec = ref_kecamatan.kode
					where ref_kecamatan.id ='".$id_kec."' 
					order by ref_desa.nama ASC");
		
		$out = "<option value=\"\">- Pilih -</option>";
		foreach($sql->result() as $row){
			$out .= "<option value=\"".$row->id."\">".$row->nama."</option>";
		}
		echo json_encode($out);
	}
	
	function simpan_suspend_persil(){
		$id = $this->input->post('id');
		$ref_kecamatan_id = $this->input->post('ref_kecamatan_id');
		$ref_desa_id = $this->input->post('ref_desa_id');
		$nomor = $this->input->post('nomor');
		$keterangan = $this->input->post('keterangan');

		$delete = $this->input->post('delete');
		if($delete=='1'){
			$this->db->where('id',$id);
			$this->db->delete('data_suspend_persil');
			$data['success']=1;
			$data['message']='Data berhasil dihapus.';
		}else{
			if($id == '' || $id == null){
				$dataIn = array (
							'ref_kecamatan_id' => $ref_kecamatan_id,
							'ref_desa_id' => $ref_desa_id,
							'nomor' => $nomor,
							'tanggal' => date('Y-m-d H:i:s'),
							'keterangan' => $keterangan,
						);
				$this->db->insert('data_suspend_persil',$dataIn);
				$data['success']=1;
				$data['message']='Data berhasil disimpan.';
			}else{
			
					$dataIn = array (
							'ref_kecamatan_id' => $ref_kecamatan_id,
							'ref_desa_id' => $ref_desa_id,
							'nomor' => $nomor,
							'keterangan' => $keterangan,
							);
					$this->db->where('id',$id);
					$this->db->update('data_suspend_persil',$dataIn);
					$data['success']=1;
					$data['message']='Data berhasil diubah.';
				
			}
		}
		echo json_encode($data);
	}
	
	function delete_suspend_persil(){
		try {
            $sessData = $this->checkSessionData();
            if ($sessData===false){
                echo Modules::run('login');
            } else {
				$this->load->model('menu/m_menu', 'mmenu');
				$username = $sessData['username'];
                $this->updateSysParamsUserInfo($username);
				$id = $this->uri->segment(3);
				if($id!='' || $id!=null){
					$jum_data = $this->db->query("select * from data_suspend_persil where id='".$id."'");
					$data['field'] = $jum_data->row_array();
				}
				$data['delete'] = 1;
				$data['mainmenu'] = $ctmenu['view'];
				$data['form'] = $this->uri->segment(4);
				$this->load->view('suspend_persil/form', $data);
			}
        } catch (Exception $e) {
            echo $e->getMessage() . "\r\n" . $e->getTraceAsString();
        }
	}


	
	}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */