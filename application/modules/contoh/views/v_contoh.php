
<div class="col-xs-12">
	<div class="page-header">
		<h1>Daftar Laporan PPAT</h1>
	</div>
</div>

<div class="col-xs-12">
	<table id="example" class="table table-striped table-bordered" style="overflow-x:auto;">
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
								 <a href='../contoh/tampil_data/$r->id' class='btn btn-warning' style='color: #fff;'>Lihat</a>
								 <a href='../contoh/aksi_terima/$r->id' class='btn btn-primary' style='color: #fff;'>Terima</a>
								 <a href='../contoh/aksi_tolak/$r->id' class='btn btn-danger' style='color: #fff;'>Tolak</a>
							 </td>
				 </tr>";
				 $no++;
			 }
			 ?>
		</tbody>
	</table>
</div>

<script type="text/javascript">
	$(document).ready(function() {
		$('#example').DataTable();
	} );
</script>
