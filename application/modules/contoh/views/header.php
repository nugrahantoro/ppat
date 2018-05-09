<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <title>Laporan Penerbitan Akta</title>

        <meta name="description" content="" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />


        <!-- basic styles -->

        <!-- bootstrap & fontawesome -->
		<link rel="stylesheet" href="http://localhost/ppat/themes/aceadmin/css/bootstrap.min.css" />
		<link rel="stylesheet" href="http://localhost/ppat/themes/aceadmin/css/font-awesome.min.css" />

		<!-- page specific plugin styles -->
		<link rel="stylesheet" href="http://localhost/ppat/themes/aceadmin/css/colorbox.css" />
		<link rel="stylesheet" href="http://localhost/ppat/themes/aceadmin/css/chosen.css" />
		<link rel="stylesheet" href="http://localhost/ppat/themes/aceadmin/css/datepicker.css" />
		<link rel="stylesheet" href="http://localhost/ppat/themes/aceadmin/css/bootstrap-timepicker.css" />
		<link rel="stylesheet" href="http://localhost/ppat/themes/aceadmin/css/daterangepicker.css" />
		<link rel="stylesheet" href="http://localhost/ppat/themes/aceadmin/css/bootstrap-datetimepicker.css" />
		<link rel="stylesheet" href="http://localhost/ppat/themes/aceadmin/css/colorpicker.css" />
		<link rel="stylesheet" href="http://localhost/ppat/themes/aceadmin/css/dropzone.css" />




		<!-- text fonts -->
		<link rel="stylesheet" href="http://localhost/ppat/themes/aceadmin/css/ace-fonts.css" />

		<!-- ace styles -->
		<link rel="stylesheet" href="http://localhost/ppat/themes/aceadmin/css/ace.min.css" />

		<!--[if lte IE 9]>
			<link rel="stylesheet" href="http://localhost/ppat/themes/aceadmin/css/ace-part2.min.css" />
		<![endif]-->
		<link rel="stylesheet" href="http://localhost/ppat/themes/aceadmin/css/ace-skins.min.css" />
		<link rel="stylesheet" href="http://localhost/ppat/themes/aceadmin/css/ace-rtl.min.css" />

		<!--[if lte IE 9]>
		  <link rel="stylesheet" href="http://localhost/ppat/themes/aceadmin/css/ace-ie.min.css" />
		<![endif]-->

		<!-- inline styles related to this page -->

		<!-- ace settings handler -->
		<script src="http://localhost/ppat/themes/aceadmin/js/ace-extra.min.js"></script>

		<!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->

		<!--[if lte IE 8]>
		<script src="http://localhost/ppat/themes/aceadmin/js/html5shiv.js"></script>
		<script src="http://localhost/ppat/themes/aceadmin/js/respond.min.js"></script>
		<![endif]-->

		<script>
		//$('.date-picker').datepicker().next().on(ace.click_event, function(){
			//		$(this).prev().focus();
				//});
		</script>

        <script src="http://localhost/ppat/libs/kslibs/js/kslibs.js"></script>

        <link rel="stylesheet" type="text/css" href="http://localhost/ppat/libs/bsmodal/css/bootstrap-modal-bs3patch.css">
        <link rel="stylesheet" type="text/css" href="http://localhost/ppat/libs/bsmodal/css/bootstrap-modal.css">

        <script>
            var OnReadyArray = [];
            var OnResizeArray = [];
            var DisplayMode = 'normal';
            var DefaultBaseSearch = '#page-content ';
            var BaseSearch = DefaultBaseSearch;
        </script>

                <style>
            .nav-list>li>a>.menu-icon {
                min-width: 24px;
                vertical-align: baseline;
                font-size: 16px;
            }

            .btn-minier {
                font-size: 14px;
            }
            .datepicker-dropdown { {
                z-index: 9999;
            }
            .icon-users:before{content:"\f0c0";}
            .navbar{
                background-color: #e2dee2!important;
            }
            .edit-group{
                margin-bottom: 10px;
            }
            .edit-control{
                width:100%;
                height:34px;
            }
            textarea.edit-control{
                height:103px;
            }
            span.input-group-addon{
                height:34px;
            }
            select.form-control{
                height:34px;
            }
            a.chosen-single{
                height:34px;
            }
            .radio{
                margin-top: -4px;
                margin-bottom: 8px;
            }
            .modal-header{
                padding-top: 5px;
                padding-bottom: 5px;
                xbackground-color: #ced7dc;
                background-color: #438eb9;
                color: white;
                border-top-left-radius: 6px;
                border-top-right-radius: 6px;
            }
            .modal-body{
                xbackground-color: #f8fafc;
                background-color: #fbfcfd;
            }
            .modal-footer{
                margin-top: 0px;
                xbackground-color: #a5c9dd;
                background-color: #eee;
            }
            .modal-backdrop, .modal-backdrop.fade.in{
                background-color: #333;
                opacity:0.7;
            }

        .testing1 {
            display: none;
        }
    @media only screen and (max-width:991px){
        .testing1 {
            display: block;
            height: 30px;
        }
    }

        </style>
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
                      <img src="<?php echo base_url().'assets/img/'.ICON; ?>" height="35px">
                      <?php echo NAMA_APLIKASI; ?>
                  </a><!-- /.brand -->
              </div><!-- /.navbar-header -->

              <div class="navbar-header pull-right" role="navigation">
                  <ul class="nav ace-nav">

                      <li class="green">
                          <a data-toggle="dropdown" href="#" class="dropdown-toggle">
                              <i class="fa fa-user" style="font-size: 30px; margin-top: 5px">&nbsp;</i>
                              <span class="user-info">
                                  <small>Selamat Datang,</small>
                                  <!-- <?php echo $displayname; ?> --> Petugas
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
