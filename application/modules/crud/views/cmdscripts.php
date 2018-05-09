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
<script>
    console.log("action-script!!");
    OnReadyArray.push(function(){
//        console.log("action-script!! - 1");
        $('.rowactionbutton').click(function(){
            //alert('test');
            console.log("action-script!! - 2");
//            console.log(this);
            actionName = $(this).attr('data-action');
            modalWidth = $(this).attr('data-modalwidth');
            modalname = 'ajax-modalnormal';
            console.log("actionName: "+actionName);
            data_idx = $(this).closest('tr').attr('data-index');
            data = gridData[data_idx];
            if (data==null){
                //data = {'test':'a'};
                paramclass='crud-param';
                data = Manggu.Crud.getParamData(paramclass);
                //data = $('#param-form').serializeArray();
                console.log("data");
                console.log(data);
            }
            Manggu.Crud.showModal({
                width: modalWidth,
                url: '<?php echo $crudurl.'command/'.$crudname;?>'+'/'+actionName,
                data: data,
                modalname: modalname
            });
               
           $('#'+modalname).on('hidden.bs.modal', function () {
               if ($('#'+modalname).attr('data-modalresult')==1){
                   //alert('modal result 1')
                    Manggu.Crud.loadData({'paramclass': 'crud-param',
                        'url': '<?php echo $crudurl.'svqueryview/'.$crudname.'/'.$actionname;?>'
                    });
               }
            });
            
            return false;
        })
    });

    OnReadyArray.push(function(){
        $('.rowactionlink').click(function(){
            //alert('test');
            console.log(this);
            baselink = '<?php echo $mainurl;?>';
            link = $(this).attr('data-target');
            //alert(link.indexOf('http:'));
            if (link.indexOf('http:')<0){
                //alert(url);
                if (link.indexOf('javascript')<0){
                    url = baselink+link;
                } else {
                    url = link;
                    //alert(url);
                }
            } else {
                url = link;
            }
            
            linkreplace = $(this).attr('data-link-replace');
            //alert(url);
            if(linkreplace==1){
                window.location.replace(url);
            } else {
                document.location.href = url;
            }
            return false;
        })
    });
	
	OnReadyArray.push(function(){
        $('.rowactionlink2').click(function(){
			data_idx = $(this).closest('tr').attr('data-index');
            data = gridData[data_idx];
            console.log(this);
            baselink = '<?php echo $mainurl;?>';
            link = $(this).attr('data-target');
            //alert(link.indexOf('http:'));
            if (link.indexOf('http:')<0){
                //alert(url);
                if (link.indexOf('javascript')<0){
                    url = baselink+link+data['jns_ijin'];
                } else {
                    url = link+data['jns_ijin'];
                    //alert(url);
                }
            } else {
                url = link+data['jns_ijin'];
            }
            
            linkreplace = $(this).attr('data-link-replace');
            //alert(url);
            if(linkreplace==1){
                window.location.replace(url);
            } else {
                document.location.href = url;
            }
            return false;
        })
    });

    OnReadyArray.push(function(){
        //console.log("action-script!! - xxx");
        //$('.rowactionbutton').html("Testing"+Math.random());
        //console.log($('#ajax-modalwider').find('.crudsearch'));
        //$('#crudsearch').html('XXX'+Math.random());
        //$('.testing123').html('XXX'+Math.random());

        $('.rowactioncrud').click(function(){
            data_idx = $(this).closest('tr').attr('data-index');
            data = gridData[data_idx];
            console.log("*params*");
            link = $(this).attr('data-target');
            sparamlist = $(this).attr('data-paramlist');
            paramlist = $.parseJSON(sparamlist);
            xparam = {};
            for (i=0; i<paramlist.length; i++){
                x = paramlist[i];
                xparam[x] = data[x];
            }
            strparam = $.param(xparam);
            console.log(xparam);
            console.log(strparam);
            console.log(paramlist);
            url = '<?php echo $mainurl; ?>menu/'+link+'?'+strparam;
            console.log(url);
            linkreplace = $(this).attr('data-link-replace');
            //alert(url);
            if(linkreplace==1){
                window.location.replace(url);
            } else {
                document.location.href = url;
            }
        });

        $(BaseSearch+'.rowactioncrudxx').click(function(){
            //alert('testx');
            DisplayMode = 'showmodal';
            console.log(this);
            actionName = $(this).attr('data-action');
            modalWidth = $(this).attr('data-modalwidth');
            link = $(this).attr('data-target');
            modalname = 'ajax-modalwider';
            BaseSearch = '#'+modalname+' ';
            console.log("actionName: "+actionName);
            data_idx = $(this).closest('tr').attr('data-index');
            data = gridData[data_idx];
            
            Manggu.Crud.showModal({
                width: modalWidth,
                url: '<?php echo $crudurl;?>index/'+link+'/',
                data: data,
                modalname: modalname
            });
               
           $('#'+modalname).on('hidden.bs.modal', function () {
               if ($('#'+modalname).attr('data-modalresult')==1){
                   //alert('modal result 1')
                    Manggu.Crud.loadData({'paramclass': 'crud-param',
                        'url': '<?php echo $crudurl.'svqueryview/'.$crudname.'/'.$actionname;?>'
                    });
               }
            });
            
            
            return false;
        })
        
    });
    //alert('test');
    if(DisplayMode=='showmodal') {
        for(idx in OnReadyArray){
            OnReadyArray[idx]();
        }
        OnReadyArray = [];
        DisplayMode = 'normal';
        BaseSearch = DefaultBaseSearch;
    }
    
	
	OnReadyArray.push(function(){
//        console.log("action-script!! - 1");
        $('.rowactionbuttonlink').click(function(){
            //alert('test');
            console.log("action-script!! - 2");
//            console.log(this);
            actionName = $(this).attr('data-action');
            modalWidth = $(this).attr('data-modalwidth');
            modalname = 'ajax-modalnormal';
            console.log("actionName: "+actionName);
            data_idx = $(this).closest('tr').attr('data-index');
            data = gridData[data_idx];
            if (data==null){
                //data = {'test':'a'};
                paramclass='crud-param';
                data = Manggu.Crud.getParamData(paramclass);
                //data = $('#param-form').serializeArray();
                console.log("data");
                console.log(data);
            }
            Manggu.Crud.showModal({
                width: modalWidth,
                url: '<?php echo site_url();?>'+'/'+actionName,
                data: data,
                modalname: modalname
            });
               
           $('#'+modalname).on('hidden.bs.modal', function () {
               if ($('#'+modalname).attr('data-modalresult')==1){
                   //alert('modal result 1')
                    Manggu.Crud.loadData({'paramclass': 'crud-param',
                        'url': '<?php echo $crudurl.'svqueryview/'.$crudname.'/'.$actionname;?>'
                    });
               }
            });
            
            return false;
        })
    });
</script>
