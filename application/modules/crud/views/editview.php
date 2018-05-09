<?php
if (!defined('BASEPATH'))
    exit('No direct script access allowed');

/* Manggu Framework
 * Simple PHP Application Development
 * Kusnassriyanto S. Bahri
 * kusnassriyanto@gmail.com
 * 
 */
?>
<style>
    div#color_selector 
{
   z-index: 1120; 
}
.colorpicker {
    z-index: 1220; 
}
    .pagination {
        margin-top: 5px;
        margin-bottom: 10px;
    }
    .table{
        margin-bottom: 14px;
    }
    .table thead>tr>th, .table tbody>tr>th, .table tfoot>tr>th, .table thead>tr>td, .table tbody>tr>td, .table tfoot>tr>td{
        padding: 6px;
    }
    .page-header{
        margin-bottom: 8px;
        padding-bottom: 5px;
    }
    .command-container{
        margin-left: 8px;
        margin-top: 3px;
        margin-bottom: 10px;
    }
    .modal {
        padding-left: 30px;
        padding-right: 30px;
        padding-top: 10px;
        padding-bottom: 20px;
    }
    .error {
        color: red;
    }
</style>
<div class="page-header">
    <h1><?php echo $crudtitle; ?></h1>
</div>

<?php if ($crudmessage!=='') { ?>
<div>
    <h4><?php echo $crudmessage; ?></h4>
</div>
<?php } ?>
<form id="edit-form" name="edit_form">
<div class="row" style="background-color:rgb(239, 243, 248); padding-top: 8px; padding-left:5px; padding-right: 5px; padding-bottom: 10px">
    <div class="col-xs-12 col-sm-12">
        <?php echo $crudparams; ?>
    </div>                                                                    
</div>
<div class="row" style="">
    <div class="pull-left command-container" >
        <button data-dismiss="modal" id="canceledit" class="btn btn-default btn-sm" style="margin-top:20px;">Cancel</button>
        <button id="crudexecute" class="btn btn-info btn-sm crudexecute" style="margin-top:20px;">OK</button>
    </div>                                                                    
</div>
</form>

<div id="loadings" class="modal-backdrop" style="background-color:#fff;display:none;">
	<div style="padding-top:15%;"><center><img src="<?php echo base_url()?>assets/img/loading.gif" width="100px"></center></div>
</div>
<script>
    var validationRules = {};
    
    <?php if(isset($scriptdata)) {
        echo $scriptdata;
    }
?>
    // percobaan
</script>

<script>
    
    $.validator.setDefaults({
        submitHandler: function() {
			$('#loadings').css('display','block');
            Manggu.Crud.execData({'paramclass': 'crud-edit',
                groupClass: "crud-group",
                'url': '<?php echo $crudurl . 'svexecdata/' . $crudname . '/' . $actionname; ?>',
                onsuccess: function(data){
		
                    //alert('sukses');
                    $('#ajax-modalnormal').attr('data-modalresult', 1);
                    $('#ajax-modalnormal').modal('hide');
					$('#loadings').css('display','none');
                    if (typeof data['islink']!='undefined'){
                        if (data['islink']==1){
                            url = '<?php echo $mainurl; ?>'+data['link']+'?'+data['params'];
                            window.location.href = url;
                            //alert(url);
                            console.log(url);
                        }
                    }
                },
                onerror: function(message){
					$('#loadings').css('display','none');
                    alert(message);
                }
            });
            //alert("submitted!");
        }
    });
    
    validate_option = {
        rules: validationRules
    };
    //validate_option['rules'] = validationRules;
    $("#edit-form").validate(validate_option);    
    
    $('#testing').click(function(event){
        console.log("testing");
        //event.preventDefault();
        //$('#confirmpassword').setCustomValidity("Testing");
        //var validator = $( "#edit-form" ).validate();
        //validator.form();        
        
    });
    
        $('.date-picker').datepicker({autoclose:true}).next().on(ace.click_event, function(){
            $(this).prev().focus();
        });
        
        $('#cp1').colorpicker({
            format: 'hex'
        });
    
    
    
//alert('xxxxx');
//$('.date-picker').each(function(){
//    console.log('pck-xxx');
//});
////alert('xxx');
//        $('.date-picker').datepicker({
//            //autoclose:false,
//            beforeShow: function() { 
//                alert("1234");
//                $('.datepicker').css("z-index", 1051); 
//            }
//        }).next().on(ace.click_event, function(){
//            //alert("xxxxx");
//            $(this).prev().focus();
//        });
    
    
    
    //OnReadyArray.push(function(){
//        console.log("edit-view");
//        $('.crudexecute').click(function(){
//            return;
//            //checkRequired = Manggu.Crud.checkRequired('edit-form');
//            if (checkRequired===True){
//                Manggu.Crud.execData({'paramclass': 'crud-edit',
//                    groupClass: "crud-group",
//                    'url': '<?php echo $crudurl.'svexecdata/'.$crudname.'/'.$actionname;?>',
//                    onsuccess: function(data){
//                        //alert('sukses');
//                        $('#ajax-modalnormal').attr('data-modalresult', 1);
//                        $('#ajax-modalnormal').modal('hide');
//                        if (typeof data['islink']!='undefined'){
//                            if (data['islink']==1){
//                                url = '<?php echo $mainurl; ?>'+data['link']+'?'+data['params'];
//                                window.location.href = url;
//                                //alert(url);
//                                console.log(url);
//                            }
//                        }
//    //                    Manggu.Crud.loadData({'paramclass': 'crud-param',
//    //                        'url': '<?php echo $crudurl.'svqueryview/'.$crudname.'/browse';?>'
//    //                    });
//                    },
//                    onerror: function(message){
//                        alert(message);
//                    }
//                });
//            } else {
//                alert(checkRequired);
//            }
//            //alert('test');
//            console.log(this);
//            //console.log($(this));
//            //alert(namespace('test'));
//            return false;
//        })
//    //});
//    
    
    //OnReadyArray.push(function(){
    console.log('testing');
    console.log($('.lookup-refresh').length);
        $('.lookup-refresh').change(function(){
        //alert('test');
            //console.log(this);
            //console.log($(this).attr('data-lookup-refresh'));
            basurl = '<?php echo $crudurl.'svlookup/'?>';
            cburl = '<?php echo $crudurl.'svcblookup/'?>';
            list = $(this).attr('data-lookup-refresh').split(',');
            console.log(list);
            for (var i=0; i<list.length; i++){
                //alert('test'+i);
                //console.log(list[idx]);
                //console.log('xxx');
                //console.log(list[i]);
                Manggu.Crud.updateLookup({
                    lookupName: list[i],
                    baseClass: "crud-edit",
                    baseurl: basurl
                });
                Manggu.Crud.updateLookup({
                    lookupName: list[i],
                    baseClass: "crud-group",
                    paramClass: "crud-edit",
                    baseurl: cburl
                });
                //x = 'test1, test2, test3';
                //console.log((x.split(', ')));
                
            }
        });
    //});
    
    $('.cbox_check_all').click(function(){
        console.log(this);
        inputid = $(this).attr('data-inputid');
        Manggu.Crud.checkBoxAll(inputid, 'all');
    });
    
    $('.cbox_check_none').click(function(){
        console.log(this);
        inputid = $(this).attr('data-inputid');
        Manggu.Crud.checkBoxAll(inputid, 'none');
    });
    
    $('.cbox_check_toggle').click(function(){
        console.log(this);
        inputid = $(this).attr('data-inputid');
        Manggu.Crud.checkBoxAll(inputid, 'toggle');
    });
    
    console.log("check-chosen");
    $('.chosen-select').each(function(){
        console.log("xxx--1");
    });
    console.log($('.chosen-select'));
    
    $('.chosen-select').chosen({allow_single_deselect:true});
    
    
</script>    