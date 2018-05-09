<?php //var_dump($this->_ci_cached_vars);?>

<?php //include_once 'test.php';?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <title><?php echo $appconfig['app-title']; ?></title>

        <meta name="description" content="" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />

        <?php include_once 'aceadmin'.'/theme_top.php' ?>
        
        <script src="<?php echo $libsurl; ?>kslibs/js/kslibs.js"></script>
        
        <link rel="stylesheet" type="text/css" href="<?php echo $basedir; ?>libs/bsmodal/css/bootstrap-modal-bs3patch.css">
        <link rel="stylesheet" type="text/css" href="<?php echo $basedir; ?>libs/bsmodal/css/bootstrap-modal.css">

        <script>
            var OnReadyArray = [];
            var OnResizeArray = [];
            var DisplayMode = 'normal';
            var DefaultBaseSearch = '#page-content ';
            var BaseSearch = DefaultBaseSearch;
        </script>

        <?php include_once 'basev_style.php' ?>

    </head>

    <body class="no-skin">
        <div class="navbar navbar-default" id="navbar">
            <script type="text/javascript">
                try{ace.settings.check('navbar' , 'fixed')}catch(e){}
            </script>

            <div class="navbar-container" id="navbar-container">
                <button type="button" class="navbar-toggle menu-toggler pull-left" id="menu-toggler">
                    <span class="sr-only">Toggle sidebar</span>
                                            
                    <span class="icon-bar"></span>
                                            
                    <span class="icon-bar"></span>
                                            
                    <span class="icon-bar"></span>
                </button>
                
                <div class="navbar-header pull-left">
                    <a href="#" class="navbar-brand" style="font-size:24px; padding: 8px 2px 4px 2px">
                        <img src="<?php echo $appconfig['main-icon']; ?>" height="35px">
                        <?php echo $appconfig['main-title']; ?>
                    </a><!-- /.brand -->
                </div><!-- /.navbar-header -->

                <div class="navbar-header pull-right" role="navigation">
                    <ul class="nav ace-nav">

                        <li class="green">
                            <a data-toggle="dropdown" href="#" class="dropdown-toggle">
                                <i class="fa fa-user" style="font-size: 30px; margin-top: 5px">&nbsp;</i>
                                <span class="user-info">
                                    <small>Selamat Datang,</small>
                                    <?php echo $displayname; ?>
                                </span>
                                                                    
                                <i class="fa fa-caret-down" style="margin-top:0px"></i>
                            </a>
                                                            
                            <ul class="user-menu pull-right dropdown-menu dropdown-yellow dropdown-caret dropdown-close">
                                <li>
                                    <a href="#" class="baseactionbutton" data-params='{"username":"<?php echo $username?>"}'>
                                        <i class="fa fa-lock"></i>
                                        Change Password
                                    </a>
                                </li>
                                                                    
                                <li>
                                    <a href="<?php echo site_url('login/logout')?>">
                                        <i class="fa fa-power-off"></i>
                                        Logout
                                    </a>
                                </li>
                            </ul>
                        </li>                        
                                                    
                    </ul>
                    <?php echo $userinfo;?>
                </div><!-- /.navbar-header -->
            </div><!-- /.container -->
        </div>

        <div class="main-container" id="main-container">
            <script type="text/javascript">
                try{ace.settings.check('main-container' , 'fixed')}catch(e){}
            </script>

            <div class="main-container-inner">
                <div class="sidebar responsive" id="sidebar">
                    <script type="text/javascript">
                        try{ace.settings.check('sidebar' , 'fixed')}catch(e){}
                    </script>
                    <?php echo $shortcuts; ?>

                    <?php echo $mainmenu; ?>

                    <div class="sidebar-collapse" id="sidebar-collapse">
                        <i class="icon-double-angle-left" data-icon1="icon-double-angle-left" data-icon2="icon-double-angle-right"></i>
                    </div>

                    <script type="text/javascript">
                        try{ace.settings.check('sidebar' , 'collapsed')}catch(e){}
                    </script>
                </div>

                <div class="main-content">

                    <div class="page-content" id="page-content">
                        <div class="row">
                            <div class="col-xs-12">
                                <div class="testing1"></div>
                                <!-- PAGE CONTENT BEGINS -->
								<?php $this->load->view($pagecontent); //$pagecontent?>
                                <!-- PAGE CONTENT ENDS -->
                            </div><!-- /.col -->
                        </div><!-- /.row -->
                    </div><!-- /.page-content -->
                </div><!-- /.main-content -->


            </div><!-- /.main-container-inner -->

            <a href="#" id="btn-scroll-up" class="btn-scroll-up btn btn-sm btn-inverse">
                <i class="icon-double-angle-up icon-only bigger-110"></i>
            </a>
        </div><!-- /.main-container -->

        <div id="ajax-modalwide" class="modal container fade" tabindex="-1" style="display: none; width:80%" data-dataname="testing"></div>
        <div id="ajax-modalnormal" class="modal container fade" tabindex="-1" style="display: none; " data-width="700"></div>
        <div id="ajax-modalwider" class="modal container fade" tabindex="-1" style="display: none; padding-left: 20px; padding-right: 20px" data-width="700"></div>

        <?php include_once 'aceadmin'.'/theme_bottom.php' ?>

        <script type="text/javascript" src="<?php echo $basedir; ?>libs/bsmodal/js/bootstrap-modal.js"></script>
        <script type="text/javascript" src="<?php echo $basedir; ?>libs/bsmodal/js/bootstrap-modalmanager.js"></script>

        <script src="<?php echo $libsurl; ?>kslibs/js/mgcrud.js"></script>
        <script src="<?php echo $libsurl; ?>jqvalidation/jquery.validate.js"></script>


        <script>					
            OnReadyArray.push(function(){
                $('.baseactionbutton').click(function(){
                    //alert('test');
                    console.log(this);
                    actionName = $(this).attr('data-action');
                    modalWidth = $(this).attr('data-modalwidth');
                    //console.log("*data*");
                    //console.log($(this).data('params'));

                    modalname = 'ajax-modalnormal';
                    console.log("actionName: "+actionName);
                    //data_idx = $(this).closest('tr').attr('data-index');
                    data = $(this).data('params');
                    console.log("*data*");
                    console.log(data);
                    Manggu.Crud.showModal({
                        width: modalWidth,
                        type: 'POST',
                        url: '<?php echo site_url() . '/crud/command/users/changepassword' ?>',
                        data: data,
                        modalname: modalname
                    });
                    
                    $('#'+modalname).on('hidden.bs.modal', function () {
                        if ($('#'+modalname).attr('data-modalresult')==1){
                            //alert('modal result 1')
//                            Manggu.Crud.loadData({'paramclass': 'crud-param',
//                                'url': '<?php //echo $basedir . 'crud/svqueryview/' . $crudname . '/' . $actionname; ?>'
//                            });
                        }
                    });
                    
                    return false;
                })
                });
                
            
        </script>
        
        
        <!-- inline scripts related to this page -->
        <script>


            (function ($) {
            $.fn.serializeAllArray = function () {
                var obj = {};

                $('input',this).each(function () { 
                    obj[this.name] = $(this).val(); 
                });
                //return $.param(obj);
                return obj;
            }
            })(jQuery);

            jQuery(function($) {
                for(idx in OnReadyArray){
                    OnReadyArray[idx]();
                }
                OnReadyArray = [];
            });
            jQuery(window).resize(function() { /* What ever */ 
                for(idx in OnResizeArray){
                    OnResizeArray[idx]();
                }
            });
			
            function ShowModal(vurl, width, modalname){
                if (typeof width == "undefined"){
                    width = '700';
                }
                if (typeof modalname == "undefined"){
                    modalname="#ajax-modalnormal";
                }
                var modalobj = $(modalname);
                //console.log(modalobj);
                $(modalobj).attr('data-width', width);
                //console.log(modalobj);
                $('body').modalmanager('loading');
                modalobj.load(vurl, '', function(){
                    console.log($(modalobj).find(".modal-header").attr('data-width'));
                    //console.log($(modalobj).find(".modal-header"));
                    //console.log(modalobj);
                    modalobj.modal();
                });

            }

            function ShowConfirmationOkCancel(obj, vTitle, vMessage, callbackOk, callbackCancel){
                $('body').modalmanager('loading');
                var tmpl = [
                    // tabindex is required for focus
                    '<div id="modalwindow" class="modal fade" tabindex="-1">',
                    '<div class="modal-header">',
                    '<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>',
                    '<h2>'+vTitle+'</h2>',
                    '</div>',
                    '<div class="modal-body">',
                    '<p>'+vMessage+'</p>',
                    '</div>',
                    '<div class="modal-footer">',
                    '<a id="okButton" href="#" data-dismiss="modal" class="btn btn-primary">OK</a>',
                    '<a id="cancelButton" href="#" data-dismiss="modal" class="btn btn-default">Cancel</a>',
                    '</div>',
                    '</div>'
                ].join('');
  
                $(tmpl).modal("show");
                $('#okButton').click(function() {
                    callbackOk(obj);
                    //alert('ok');
                    //$('#modalwindow').modal('hide');
                });
                $('#cancelButton').click(function() {
                    callbackCancel(obj);
                    //alert('cancel');
                    //$('#modalwindow').modal('hide');
                });
                $("#modalwindow").on('hidden', function(obj) {
                    if (typeof obj=='undefined'){
          
                    }
                    //callback(); 
                });
  
            }            
    
                        
    OnReadyArray.push(function(){

        $('.btn_submit').click(function(event){
            target = event.target;
            console.log(target);
            console.log($(target).attr('id'));
            actval = $(target).attr('data-action');
            formname = $(target).attr('data-form');
            console.log($('#'+formname).find('#action'));
            if ($('#'+formname).find('#action').length==0){
                vinput = '<input type="hidden" id="action" name="action" value="'+actval+'" >';
                $('#'+formname).append(vinput);
            } else {
                $('#'+formname).find('#action').val(actval);
            }
            console.log('filter');
            
            $('#'+formname).submit();
        });
    });
    
                        
                        
                    
        </script>
		
		
		<div id="modal_jabatan" class="modal fade in" tabindex="-1" style="display:none;font-size:11px;">
			<div class="modal-header no-padding">
				<div class="table-header">
					<button type="button" class="close" data-dismiss="modal" onClick="modal_keluar();">&times;</button>
					Tabel
				</div>
			</div>

			<div class="modal-body no-padding">
				<div id="detail-table" class="row-fluid">
					
				</div>
			</div>
		</div><!--PAGE CONTENT ENDS-->
		<div id="lyar-mask" class="modal-backdrop" style="display:none;"></div>
		
		
    </body>
</html>
