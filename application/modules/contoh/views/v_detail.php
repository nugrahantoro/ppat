<?php include_once 'header.php';?>
<?php include_once 'sidebar.php';?>

<div class="main-content">
	<div class="page-content" id="page-content">
		<div class="row">
			<div class="col-xs-12">
				<div class="page-header">
					<h1>Detail Laporan PPAT</h1>
				</div>
				<div class="col-xs-12">
					<div style="overflow-x:auto;">
						<table id="example" class="table table-bordered" style="width:auto">
							<thead>
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
					<a href="../../menu/lihat_laporan" class="btn btn-success">Kembali</a>
					<!-- <div class="col-xs-3">
						<ul class="list-group">
						  <li class="list-group-item">No Akta</li>
						  <li class="list-group-item">Tanggal Akta</li>
						  <li class="list-group-item">Bentuk Perbuatan Hukum</li>
							<hr>
						  <li class="list-group-item" style="background: #438eb9; color: #fff;">Pihak Yang Mengalihkan</li>
						  <li class="list-group-item">Nama</li>
						  <li class="list-group-item">Alamat</li>
						  <li class="list-group-item">NPWP</li>
							<hr>
						  <li class="list-group-item" style="background: #438eb9; color: #fff;">Pihak Yang Menerima</li>
						  <li class="list-group-item">Nama</li>
						  <li class="list-group-item">Alamat</li>
						  <li class="list-group-item">NPWP</li>
							<hr>
							<li class="list-group-item">Jenis dan Nomor Hak</li>
							<li class="list-group-item">Letak Tanah dan Bangunan</li>
						  <li class="list-group-item">Luas Tanah</li>
						  <li class="list-group-item">Luas Bangunan</li>
						  <li class="list-group-item">Harga Transaksi</li>
						  <li class="list-group-item">NOP SPPT PBB</li>
						  <li class="list-group-item">NJOP SPPT PBB</li>
						  <li class="list-group-item">Tanggal</li>
						  <li class="list-group-item">Nominal SSP</li>
						  <li class="list-group-item">Tanggal SSPD BPHTB</li>
						  <li class="list-group-item">Keterangan</li>
							<hr>
							<a href="../../menu/lihat_laporan" class="btn btn-success">Kembali</a>
						</ul>
					</div>
					<div class="col-xs-9">
						<?php foreach ($record as $r) {} ?>
						<ul class="list-group">
						  <li class="list-group-item"><?php echo $r->no_akta; ?></li>
						  <li class="list-group-item"><?php echo $r->tgl_akta; ?></li>
						  <li class="list-group-item"><?php echo $r->bentuk_perbuatan_hukum; ?></li>
							<hr>
							<li class="list-group-item" style="background: #438eb9; color: #fff;">Pihak Yang Mengalihkan</li>
						 <li class="list-group-item"><?php echo $r->p_mengalihkan_nama; ?></li>
						 <li class="list-group-item"><?php echo $r->p_mengalihkan_alamat; ?></li>
						 <li class="list-group-item"><?php echo $r->p_mengalihkan_npwp; ?></li>
						 <hr>
						 <li class="list-group-item" style="background: #438eb9; color: #fff;">Pihak Yang Menerima</li>
						 <li class="list-group-item"><?php echo $r->p_menerima_nama; ?></li>
						 <li class="list-group-item"><?php echo $r->p_menerima_alamat; ?></li>
						 <li class="list-group-item"><?php echo $r->p_menerima_npwp; ?></li>
						 <hr>
						 <li class="list-group-item"><?php echo $r->jenis_dan_nomor_hak; ?></li>
						 <li class="list-group-item"><?php echo $r->letak_tanah_dan_bangunan; ?></li>
						 <li class="list-group-item"><?php echo $r->luas_tanah; ?></li>
						 <li class="list-group-item"><?php echo $r->luas_bangunan; ?></li>
						 <li class="list-group-item"><?php echo $r->harga_transaksi; ?></li>
						 <li class="list-group-item"><?php echo $r->sppt_pbb_nop_tahun; ?></li>
						 <li class="list-group-item"><?php echo $r->sppt_ppb_njop; ?></li>
						 <li class="list-group-item"><?php echo $r->ssp_tanggal; ?></li>
						 <li class="list-group-item"><?php echo $r->ssp_nominal; ?></li>
						 <li class="list-group-item"><?php echo $r->sspd_bphtb_tanggal; ?></li>
						 <li class="list-group-item"><?php echo $r->keterangan; ?></li>
						</ul>
					</div> -->
				</div>
			</div>
		</div>
	</div>
</div>

<script type="text/javascript">
	$(document).ready(function() {
		$('#example').DataTable();
	} );
</script>

<?php include_once 'footer.php';?>
