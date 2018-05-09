	<div id="tabel_data_wrapper" class="dataTables_wrapper" role="grid">
		<div class="row">
			<div class="col-xs-6">
				<div id="tabel_data_length" class="dataTables_length">
					<label>
					Display
					<?php
						$list_display['10']='10';
						$list_display['25']='25';
						$list_display['50']='50';
						$list_display['100']='100';
						
						$url_pag = "'".site_url()."/referensi/add_tabel/".$tabel."/0'";
						$domId ="'#list-data'";
						$selected = '10';
						if(isset($data_display) && trim($data_display) != '')
						$selected = $data_display;
						$js = 'id="data_display" onChange="load_url('.$url_pag.','.$domId.');" name="tabel_data_length" size="1"';							
						echo form_dropdown('tabel_data_length',$list_display,$selected,$js);	
					?>
					records
					</label>
				</div>
			</div>
			<div class="col-xs-6">
				<div id="tabel_data_filter" class="dataTables_filter">
					<label>
					Search:
					<input type="text" id="cari_display" onBlur="load_url(<?php echo $url_pag?>,<?php echo $domId?>);" value="<?php echo isset($cr)?$cr:''?>">
					</label>
				</div>
			</div>
		</div>
		<div class="row" style="overflow:auto">
		<table id="tabel_data" class="table table-striped table-bordered table-hover dataTable">
			<thead>
				<tr>
					<th width="60px">No</th>
					<th>Nama <?php echo str_replace('Daftar ','',$judul)?></th>
					<th width="100px"></th>
				</tr>
			</thead>

			<tbody>
			<?php 
			$jm=0;
			if($jum_data > 0){
				$co=1;
				foreach($result as $row){
					$jm=$co;
			?>
					<tr>
						<td><?php echo $co?>.</td>
						<td><?php echo $row->nama?></td>
						<td>
							<span class="btn btn-minier btn-info" data-rel="tooltip" title="" data-original-title="Edit Data" onclick="Edit_data('<?php echo $row->id?>');">
								<i class="fa fa-pencil"></i>
							</span>
							<span class="btn btn-minier btn-danger" data-rel="tooltip" title="" data-original-title="Hapus Data" onclick="Hapus_data('<?php echo $row->id?>');">
								<i class="fa fa-trash-o"></i>
							</span>
						</td>
					</tr>
			<?php 
				$co++;
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
		<div class="row">
			<div class="col-xs-4">
				<div id="tabel_data_info" class="dataTables_info">Showing <?php echo ($offset+1)?> to <?php echo (($offset+$jm))?> of <?php echo $jum_data?> entries</div>
			</div>
			<div id="pag_suhe" class="col-xs-8" style="margin:0;">
				<div id="crudpages" class="pull-right" style="margin-right: 10px">
					<?php echo $paging;?>
				</div>
			</div>
		</div>
	</div>
	
	
<script>
$(function(){
	var hasil = '<?php echo $judul?>';
	$('.page-header').empty();
	$('.page-header').append('<h1>'+hasil+'</h1>');
	var htl = '<span class="btn btn-sm btn-success" onClick="Tambah_data();">Tambah Data</span> <span class="btn btn-sm btn-danger" onClick="Reset_data();">Kembali</span>';
	$('#datana').empty();
	$('#datana').append(htl);
	
   convert_paging("#list-data");
   
   $("#cari_display").keypress(function(e){
		var key = null;
        key = (e.keyCode ? e.keyCode : e.which);
		if(key==13){
			load_url('<?php echo site_url('referensi/add_tabel/'.$tabel)?>/0',"#list-data");
		}
	});
});

function convert_paging(domId)
{
   $("#pag_suhe").find("a").each(function(i){
      var thisHref = $(this).attr("href");
      $(this).prop('href','javascript:void(0)');
      $(this).prop('rel',thisHref);
      $(this).bind('click', function(){
         load_url(thisHref,domId);
         return false;
      });
   });
}
function load_url(theurl,div)
{
	var par4 = $('#data_display').val();
	
	if ($('#cari_display').val() != '') 
		par5 = $('#cari_display').val();
	else
		par5 = 'cr';
		
   $.ajax({
       url: theurl+'/'+par4+'/'+par5,
       success: function(response){
		$(div).html(response);
       },
   dataType:"html"
   });
   return false;
}


function Tambah_data(){
	var url = '<?php echo site_url('referensi/add_form/'.$tabel)?>';
	$('#view_form').html('').load(url);
}

function Reset_data(){
	window.location = '<?php echo site_url('menu/tabel_referensi')?>';
}

function Hapus_data(v)
{
   conf = confirm('Yakin akan menghapus data ini?');
	if(conf) {
		$("#loadings").css("display","block");
		$.getJSON('<?php echo site_url('referensi/delete_data/'.$tabel)?>'+'/'+v,
			function(respon) {
				if(respon.status!='error'){
					var url = '<?php echo site_url('referensi/add_tabel/'.$tabel)?>';
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

function Edit_data(v)
{
	$("#loadings").css("display","block");
	var url = '<?php echo site_url('referensi/add_form/'.$tabel)?>'+'/'+v;
	$('#view_form').html('').load(url);
	$("#loadings").css("display","none");
}

</script>
