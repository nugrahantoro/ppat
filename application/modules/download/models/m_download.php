<?php
  /**
   *
   */
  class M_download extends ci_model
  {
    function data_laporan(){
      $sql = "select * from data_ppat join data_laporan on data_laporan.ppat_id=data_ppat.ppat_id
              where data_laporan.status='Diterima' order by data_laporan.tgl_laporan desc";
      return $this->db->query($sql);
    }

    function download($id){
      $sql = "select * from data_laporan_list
              join data_laporan on data_laporan.id=data_laporan_list.data_laporan_id
              join data_ppat on data_ppat.ppat_id=data_laporan.ppat_id
              where data_laporan_list.data_laporan_id='$id'";
      return $this->db->query($sql);
    }

  }
?>
