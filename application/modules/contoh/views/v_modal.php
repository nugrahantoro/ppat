<h3>Detail Laporan</h3> <hr>
<div class="list-group">
  <?php foreach ($laporan as $b) {} ?>
  <table>
    <tr>
      <td class="alert alert-info">No SK PPATK</td>
      <td class="alert alert-info">:</td>
      <td class="alert alert-info"><?php echo $b->no_sk_ppat; ?></td>
    </tr>
    <tr>
      <td class="alert alert-info">Nama PPATK</td>
      <td class="alert alert-info">:</td>
      <td class="alert alert-info"><?php echo $b->nama_ppat; ?></td>
    </tr>
    <tr>
      <td class="alert alert-info">Bulan</td>
      <td class="alert alert-info">:</td>
      <td class="alert alert-info"><?php echo $b->periode_bulan; ?></td>
    </tr>
    <tr>
      <td class="alert alert-info">Tahun</td>
      <td class="alert alert-info">:</td>
      <td class="alert alert-info"><?php echo $b->periode_tahun; ?></td>
    </tr>
  </table>
</div>
<div style="overflow-x:auto;">
  <table id="example" class="table table-bordered" style="width:auto">
    <thead>
      <tr>
        <th rowspan="2">No</th>
        <th colspan="2"><center>Akta</center></th>
        <th rowspan="2"><center>Bentuk Perbuatan Hukum</center></th>
        <th colspan="2"><center>Nama Alamat dan NPWP</center></th>
        <th rowspan="2"><center>Jenis dan Nomor Hak</center></th>
        <th rowspan="2"><center>Letak Tanah dan Bangunan</center></th>
        <th colspan="2"><center>Luas (m2)</center></th>
        <th rowspan="2"><center>Harga Transaksi Perolehan/Pengalihan Hak</center></th>
        <th colspan="2"><center>SPPT PBB</center></th>
        <th colspan="2"><center>SSP</center></th>
        <th colspan="2"><center>SSPD BPHTB</center></th>
        <th rowspan="2">Keterangan</th>
      </tr>
      <tr>
        <th><center>Nomor</center></td>
        <th>Tanggal</td>
        <th><center>Pihak yg mengalihkan</center></td>
        <th><center>Pihak yg menerima</center></td>
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
         foreach ($record as $r) {
           echo "<tr>
                 <td>$no</td>
                 <td>$r->no_akta</td>
                 <td><center>$r->tgl_akta</center></td>
                 <td>$r->bentuk_perbuatan_hukum</td>
                 <td>$r->p_mengalihkan_nama</td>
                 <td>$r->p_menerima_nama</td>
                 <td>$r->jenis_dan_nomor_hak</td>
                 <td>$r->letak_tanah_dan_bangunan</td>
                 <td>$r->luas_tanah</td>
                 <td>$r->luas_bangunan</td>
                 <td>$r->harga_transaksi</td>
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
    </thead>
  </table>
</div>
<hr>
<button type="button" class="btn btn-success btn-sm" data-dismiss="modal">Kembali</button>
<button type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#terima">Terima</button>
<button type="button" class="btn btn-danger btn-sm" data-toggle="modal" data-target="#tolak">Tolak</button>
