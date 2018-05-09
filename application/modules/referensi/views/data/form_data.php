	<div class="widget-box">
		<div class="widget-header widget-header-flat">
			<h4 class="smaller">Form Input Data</h4>
		</div>
		<div class="widget-body">
			<div class="widget-main">
				<div class="col-xs-3">
					<label>Nama <?php echo $judul?></label>
				</div>
				<div class="col-xs-9">
					<input type="text" name="nama" id="nama" class="input-xxlarge" value="<?php echo isset($field['nama'])?$field['nama']:''?>">
					<input type="hidden" name="id" id="id" class="input-xxlarge" value="<?php echo isset($field['id'])?$field['id']:''?>">
					<input type="hidden" name="nama2" id="nama2" class="input-xxlarge" value="<?php echo isset($field['nama'])?$field['nama']:''?>">
				</div>
				
				&nbsp;<br>
				<div class="col-xs-3">
					
				</div>
				<div class="col-xs-9">
					<span class="btn btn-sm btn-info" onclick="Cancel();">Cancel</span>
					<span class="btn btn-sm btn-success" onclick="Simpan_data();">Simpan</span>
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

function Simpan_data()
{
	if($('#nama').val() != ''){
		$("#loadings").css("display","block");
		$.ajax({
			url     : '<?php echo site_url('referensi/simpan_data/'.$tabel);?>',
			dataType: 'json',
			type    : 'POST',
			data    : { 
						'id' : $('#id').val(),
						'nama' : $('#nama').val(), 
						'nama2' : $('#nama2').val() 
					  },
			success : function(data){
				if(data.status!="error"){
					$('#view_form').html('');
					var url = '<?php echo site_url('referensi/add_tabel/'.$tabel)?>';
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