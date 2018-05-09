	<div id="tabel_data_wrapper" class="dataTables_wrapper" role="grid">
		<table id="tabel_data" class="table table-striped table-bordered table-hover dataTable">
			<thead>
				<tr>
					<th width="60px">No</th>
					<th>Nama Tabel</th>
					<th width="100px"></th>
				</tr>
			</thead>

			<tbody>
			<?php 
			
			if(count($result) > 0){
				$no=1;
				for($i=0;$i<count($result);$i++){
			?>
					<tr>
						<td><?php echo $no?>.</td>
						<td><?php echo ucwords(str_replace('_',' ',str_replace('ref_','',$result[$i][0])))?></td>
						<td>
							<span class="btn btn-minier btn-success" data-rel="tooltip" title="" data-original-title="Lihat Data" onclick="Lihat_data('<?php echo $result[$i][0]?>');">
								<i class="fa fa-cogs"></i>
							</span>
							<span class="btn btn-minier btn-danger" data-rel="tooltip" title="" data-original-title="Hapus Tabel" onclick="Hapus('<?php echo $result[$i][0]?>');">
								<i class="fa fa-trash-o"></i>
							</span>
						</td>
					</tr>
			<?php 
				$no++;
				} 
			}else{?>
				<tr>
					<td colspan="3" class="center">
					- Data Empty -
					</td>
				</tr>
			<?php } ?>
			</tbody>
		</table>
	</div>
	
	
<script>
function Hapus(v)
{
   conf = confirm('Yakin akan menghapus data ini?');
	if(conf) {
		$("#loadings").css("display","block");
		$.getJSON('<?php echo site_url('referensi/delete_tabel')?>'+'/'+v,
			function(respon) {
				if(respon.status!='error'){
					var url = '<?php echo site_url('referensi/list_tabel')?>';
					$('#list-data').html('').load(url);
					$("#loadings").css("display","none");
					alert(respon.msg);
				}else{
					$("#loadings").css("display","none");
					alert(respon.msg)
				}
			}
		);
	}
}

function Lihat_data(v)
{
	$("#loadings").css("display","block");
	var url = '<?php echo site_url('referensi/add_tabel')?>'+'/'+v;
	$('#list-data').html('').load(url);
	$("#loadings").css("display","none");
}
</script>
