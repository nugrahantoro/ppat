<?php
header("Content-Type: application/vnd.ms-excel");
header("content-disposition: attachment;filename=laporan-penerbitan-akta.xls");
header("Cache-Control: max-age=0");
?>

<table width="100%">
  <tr>
    <th>Nama PPAT</th>
    <td>:</td>
    <td>
      <?php
        foreach ($download as $r) {}
        echo "<center>$r->nama_ppat</center>";
      ?>
    </td>
  </tr>
  <tr>
    <th>No SK PPATK</th>
    <td>:</td>
    <td>
      <?php
        foreach ($download as $r) {}
        echo "<center>$r->no_sk_ppat</center>";
      ?>
    </td>
  </tr>
  <tr>
    <th>Alamat PPAT</th>
    <td>:</td>
    <td>
      <?php
        foreach ($download as $r) {}
        echo "<center>$r->alamat_ppat</center>";
      ?>
    </td>
  </tr>
  <tr>
    <th>Bulan</th>
    <td>:</td>
    <td>
      <?php
        foreach ($download as $r) {}
        echo "<center>$r->periode_bulan</center>";
      ?>
    </td>
  </tr>
  <tr>
    <th>Tahun</th>
    <td>:</td>
    <td>
      <?php
        foreach ($download as $r) {}
        echo "<center>$r->periode_tahun</center>";
      ?>
    </td>
  </tr>
</table>
<br> <br>
<table border='1' width="100%">
  <tr>
    <th rowspan="2">No</th>
    <th colspan="2"><center>Akta</center></th>
    <th rowspan="2"><center>Bentuk Perbuatan Hukum</center></th>
    <th colspan="2"><center>Nama Alamat dan NPWP</center></th>
    <th rowspan="2"><center>Jenis dan Nomor Hak</center></th>
    <th colspan="2"><center>Luas</center></th>
    <th rowspan="2"><center>Harga Transaksi Perolehan/Pengalihan Hak</center></th>
    <th colspan="2"><center>SPPT PBB</center></th>
    <th colspan="2"><center>SSP</center></th>
    <th colspan="2"><center>SSPD BPHTB</center></th>
    <th rowspan="2">Keterangan</th>
  </tr>
  <tr>
    <th><center>Nomor</center></td>
    <th>Tanggal</td>
    <th><center>Pihak Yang Mengalihkan</center></td>
    <th><center>Pihak Yang Menerima</center></td>
    <th><center>Tanah</center></td>
    <th><center>Bangunan</center></td>
    <th><center>NOP Tahun</center></td>
    <th><center>NJOP</center></th>
    <th><center>Tanggal</center></th>
    <th><center>Rp</center></th>
    <th><center>Tanggal</center></th>
    <th><center>Rp</center></th>
  </tr>
  <tr>
    <?php
       $no=1;
       foreach ($download as $r) {
         echo "<tr>
               <td><center>$no</center></td>
               <td>$r->no_akta</td>
               <td><center>$r->tgl_akta</center></td>
               <td>$r->bentuk_perbuatan_hukum</td>
               <td>$r->p_mengalihkan_nama</td>
               <td>$r->p_menerima_nama</td>
               <td>$r->jenis_dan_nomor_hak</td>
               <td>$r->luas_tanah</td>
               <td>$r->luas_bangunan</td>
               <td><center>$r->harga_transaksi</center></td>
               <td><center>$r->sppt_pbb_nop_tahun</center></td>
               <td>$r->sppt_ppb_njop</td>
               <td><center>$r->ssp_tanggal</center></td>
               <td>$r->ssp_nominal</td>
               <td><center>$r->sspd_bphtb_tanggal</center></td>
               <td>$r->sspd_bphtb_nominal</td>
               <td>$r->keterangan</td>
         </tr>";
         $no++;
       }
    ?>
  </tr>
</table
