
<div class="col-xs-12">
	<div class="page-header">
		<h1>Daftar Laporan PPAT</h1>
	</div>
</div>

<div class="col-xs-12">
	<div style="overflow-x:auto;">
		<table id="example" class="table table-striped table-bordered">
			<thead>
				<tr>
					<th scope="col">No</th>
					<th scope="col">No SK PPATK</th>
					<th scope="col">Nama PPATK</th>
					<th scope="col">Bulan</th>
					<th scope="col">Tahun</th>
					<th scope="col">Tanggal Laporan</th>
					<th scope="col">Status</th>
					<th scope="col">Aksi</th>
				</tr>
			</thead>
			<tbody>
				<?php
				 $no=1;
				 foreach ($record as $r) {
					 echo "<tr>
								 <td>$no</td>
								 <td>$r->no_sk_ppat</td>
								 <td>$r->nama_ppat</td>
								 <td>$r->periode_bulan</td>
								 <td>$r->periode_tahun</td>
								 <td>$r->tgl_laporan</td>
								 <td>$r->status</td>
								 <td>
									 <a href='../contoh/tampil_data/$r->id' class='btn btn-warning btn-sm' style='color: #fff;'>Lihat</a>
									 <a href='#' class='btn btn-primary btn-sm' style='color: #fff;' data-toggle='modal' data-target='#terima'>Terima</a>
									 <a href='#' class='btn btn-danger btn-sm' style='color: #fff;' data-toggle='modal' data-target='#tolak'>Tolak</a>
									 <a href='../contoh/tampil_modal/$r->id' class='btn btn-info btn-sm' style='color: #fff;' data-toggle='modal' data-target='#modal'>Modal</a>
								 </td>
					 </tr>";
					 $no++;
				 }
				 ?>
			</tbody>
		</table>
	</div>

	<div class="modal" id="terima" tabindex="-1" role="dialog">
		<div class="modal-dialog" role="document">
			<div class="modal-body">
				<form action="../contoh/aksi_terima/<?php echo $r->id; ?>" method="post">
					<p>Apakah yakin ingin menerima laporan?</p>
						<button type="submit" class="btn btn-success btn-sm">Ya</button>
						<button type="button" class="btn btn-danger btn-sm" data-dismiss="modal">Batal</button>
				</form>
			</div>
		</div>
	</div>
	<div id="tolak" class="modal container fade" tabindex="-1" style="display: none; " data-width="600">
		<div class="modal-dialog" role="document">
			<div class="modal-body">
				<form action="../contoh/aksi_tolak/<?php echo $r->id; ?>" method="post">
					<div class="form-group">
						<label>Keterangan ditolak :</label>
						<textarea class="form-control" name="keterangan" rows="3" cols="61" required=""></textarea>
					</div>
						<button type="submit" class="btn btn-success btn-sm">Tolak</button>
						<!-- <a href="../menu/verifikasi_laporan" class="btn btn-danger btn-sm">Batal</a> -->
						<button type="button" class="btn btn-danger btn-sm" data-dismiss="modal">Batal</button>
				</form>
			</div>
		</div>
	</div>
	<div id="modal" class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true" data-width="940">
		<div class="modal-dialog modal-lg">
			<div class="modal-body">
				<!-- <div class="list-group">
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
				<button type="button" class="btn btn-danger btn-sm" data-toggle="modal" data-target="#tolak">Tolak</button> -->
			</div>
		</div>
	</div>
</div>

<script type="text/javascript">
	$(document).ready(function() {
		$('#example').DataTable();
	} );
</script>
