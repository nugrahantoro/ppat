<div class="col-xs-12">
	<div class="page-header">
		<h1>Jenis Tabel Referensi</h1>
	</div>
	<div id="datana">
		<span class="btn btn-sm btn-success" onClick="Tambah();">Tambah Tabel</span>
	</div>
	<div id="view_form" class="page-body">
		
	</div>
	&nbsp;<br>
	<div id="list-data">
		<?php include "list.php"; ?>
	</div>
</div>
<div id="loadings" class="modal-backdrop" style="background-color:#fff;display:none;">
	<div style="padding-top:15%;"><center><img src="<?php echo base_url()?>assets/img/loading.gif" width="100px"></center></div>
</div>
<script>
function Tambah(){
	var url = '<?php echo site_url('referensi/form_tabel')?>';
	$('#view_form').html('').load(url);
}
</script>