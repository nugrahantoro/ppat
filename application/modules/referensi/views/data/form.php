	<div class="widget-box">
		<div class="widget-header widget-header-flat">
			<h4 class="smaller">Form Input</h4>
		</div>
		<div class="widget-body">
			<div class="widget-main">
				<div class="col-xs-3">
					<label>Nama Tabel</label>
				</div>
				<div class="col-xs-9">
					<input type="text" name="tabel" id="tabel" class="input-xxlarge">
				</div>
				&nbsp;<br>
				<div class="col-xs-3">
					
				</div>
				<div class="col-xs-9">
					<span class="btn btn-sm btn-info" onclick="Cancel();">Cancel</span>
					<span class="btn btn-sm btn-success" onclick="Simpan();">Simpan</span>
				</div>
				&nbsp;
			</div>
		</div>
	</div>
	
<script>
function Cancel()
{
	$('#view_form').html('');
}

function Simpan()
{
	if($('#tabel').val() != ''){
		$("#loadings").css("display","block");
		$.ajax({
			url     : '<?php echo site_url('referensi/simpan_tabel');?>',
			dataType: 'json',
			type    : 'POST',
			data    : { 'tabel' : $('#tabel').val() },
			success : function(data){
				if(data.status!="error"){
					$('#view_form').html('');
					var url = '<?php echo site_url('referensi/list_tabel')?>';
					$('#list-data').html('').load(url);
					$("#loadings").css("display","none");
					alert(data.msg);
				}else{
					$("#loadings").css("display","none");
					alert(data.msg);
				}
			}
		});
	}else{
		alert('Maaf, data tidak boleh kosong!');
	}
}
</script>