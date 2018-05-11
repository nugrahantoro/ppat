<?php
  /**
   *
   */
  class M_contoh extends ci_model
  {
    function data_laporan(){
      $sql = "select * from data_ppat join data_laporan on data_laporan.ppat_id=data_ppat.ppat_id
              where data_laporan.status='Terkirim' order by data_laporan.tgl_laporan asc";
      return $this->db->query($sql);
    }

    function list_laporan($id){
      $sql = "select * from data_laporan_list where data_laporan_id='$id'";
      return $this->db->query($sql);
    }

    function terima($id){
      $status = 'Diterima';
      $data=array(
                  'status' => $status);
      $this->db->where('id',$id);
      $this->db->update('data_laporan',$data);
    }

    function tolak($id){
      $status = 'Ditolak';
      $data=array(
                  'status'     => $status,
                  'keterangan' => $this->input->post('keterangan'));
      $this->db->where('id',$id);
      $this->db->update('data_laporan',$data);
    }

  }
?>
