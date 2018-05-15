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
                  'status'     => $status);
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

    // function getMenuInfo($menuname){
  	// 	$result = array();
    //       $freemenu = "'home'";
    //       $sql = "select a.menuid, a.menuname, a.caption, a.description, a.command,
    //           a.context, a.iconname, a.menuoptions from sys_menu a
    //           join (select p.username, t.permissionname
    //               from sys_users p
    //               join sys_userroles q on p.userid = q.userid
    //               left join sys_roles r on q.roleid = r.roleid
    //               join sys_rolepermissions s on q.roleid = s.roleid
    //               left join sys_permissions t on s.permissionid = t.permissionid
    //               where p.username = :sys_username and t.category = 'menu'
    //               union
    //               select :sys_username, u.permissionname
    //               from sys_permissions u
    //               where u.permissionname in (".$freemenu.")
    //               union
    //               select :sys_username, menuname
    //               from sys_menu where visible = 1 and ismenu=0
    //           ) b on a.menuname = b.permissionname
    //           where a.menuname = :menuname and a.visible = 1
    //       ";
    //       $params = array('menuname'=>$menuname);
    //       $qresult = $this->mdb->QueryData('application', $sql, $params, 'record');
    //       if (count($qresult)>0){
    //           return $qresult[0];
    //       } else {
    //           return false;
    //       }
    // }

  }
?>
