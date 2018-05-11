
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
									  <a href='../download/export/$r->id' class='btn btn-success btn-sm' style='color: #fff;'>Download</a>
								 </td>
					 </tr>";
					 $no++;
				 }
				 ?>
			</tbody>
		</table>
	</div>
</div>

<script type="text/javascript">
	$(document).ready(function() {
		$('#example').DataTable();
	} );
</script>
