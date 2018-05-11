
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
									 <a href='../contoh/aksi_terima/$r->id' class='btn btn-primary btn-sm' style='color: #fff;'>Terima</a>
									 <a href='#' class='btn btn-danger btn-sm' style='color: #fff;' data-toggle='modal' data-target='#tolak'>Tolak</a>
								 </td>
					 </tr>";
					 $no++;
				 }
				 ?>
			</tbody>
		</table>
	</div>

	<div class="modal" id="tolak" tabindex="-1" role="dialog">
		<div class="modal-dialog" role="document">
			<div class="modal-body">
				<form action="../contoh/aksi_tolak/<?php echo $b->id; ?>" method="post">
					<div class="form-group">
						<input type="text" name="keterangan" size="62" placeholder="masukkan alasan / pesan kenapa ditolak ditolak" required="">
					</div>
						<button type="submit" class="btn btn-success btn-sm">Tolak</button>
						<a href="../menu/verifikasi_laporan" class="btn btn-danger btn-sm">Batal</a>
				</form>
			</div>
		</div>
	</div>
</div>

<script type="text/javascript">
	$(document).ready(function() {
		$('#example').DataTable();
	} );
</script>
