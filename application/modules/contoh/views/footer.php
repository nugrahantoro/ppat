  <script type="text/javascript">
      try{ace.settings.check('sidebar' , 'collapsed')}catch(e){}
  </script>
  </div>

  <!-- basic scripts -->

  <!--[if !IE]> -->
  <script type="text/javascript">
  window.jQuery || document.write("<script src='http://localhost/ppat/themes/aceadmin/js/jquery.min.js'>"+"<"+"/script>");
  </script>

  <!-- <![endif]-->

  <!--[if IE]>
  <script type="text/javascript">
  window.jQuery || document.write("<script src='http://localhost/ppat/themes/aceadmin/js/jquery1x.min.js'>"+"<"+"/script>");
  </script>
  <![endif]-->
  <script type="text/javascript">
  if('ontouchstart' in document.documentElement) document.write("<script src='http://localhost/ppat/themes/aceadmin/js/jquery.mobile.custom.min.js'>"+"<"+"/script>");
  </script>
  <script src="http://localhost/ppat/themes/aceadmin/js/bootstrap.min.js"></script>

  <!-- page specific plugin scripts -->
  <script src="http://localhost/ppat/themes/aceadmin/js/jquery.colorbox-min.js"></script>
  <!--[if lte IE 8]>
  <script src="http://localhost/ppat/themes/aceadmin/js/excanvas.min.js"></script>
  <![endif]-->
  <script src="http://localhost/ppat/themes/aceadmin/js/jquery-ui.custom.min.js"></script>
  <script src="http://localhost/ppat/themes/aceadmin/js/jquery.ui.touch-punch.min.js"></script>
  <script src="http://localhost/ppat/themes/aceadmin/js/jquery.easypiechart.min.js"></script>
  <script src="http://localhost/ppat/themes/aceadmin/js/jquery.sparkline.min.js"></script>

  <!-- ace scripts -->
  <script src="http://localhost/ppat/themes/aceadmin/js/ace-elements.min.js"></script>
  <script src="http://localhost/ppat/themes/aceadmin/js/ace.min.js"></script>
  <script src="http://localhost/ppat/themes/aceadmin/js/jquery.dataTables.min.js"></script>
  <script src="http://localhost/ppat/themes/aceadmin/js/jquery.dataTables.bootstrap.js"></script>

  <script src="http://localhost/ppat/themes/aceadmin/js/chosen.jquery.min.js"></script>
  <script src="http://localhost/ppat/themes/aceadmin/js/fuelux/fuelux.spinner.min.js"></script>
  <script src="http://localhost/ppat/themes/aceadmin/js/date-time/bootstrap-datepicker.min.js"></script>
  <script src="http://localhost/ppat/themes/aceadmin/js/date-time/bootstrap-timepicker.min.js"></script>
  <script src="http://localhost/ppat/themes/aceadmin/js/date-time/moment.min.js"></script>
  <script src="http://localhost/ppat/themes/aceadmin/js/date-time/daterangepicker.min.js"></script>
  <script src="http://localhost/ppat/themes/aceadmin/js/date-time/bootstrap-datetimepicker.min.js"></script>
  <script src="http://localhost/ppat/themes/aceadmin/js/bootstrap-colorpicker.min.js"></script>
  <script src="http://localhost/ppat/themes/aceadmin/js/jquery.knob.min.js"></script>
  <script src="http://localhost/ppat/themes/aceadmin/js/jquery.autosize.min.js"></script>
  <script src="http://localhost/ppat/themes/aceadmin/js/jquery.inputlimiter.1.3.1.min.js"></script>
  <script src="http://localhost/ppat/themes/aceadmin/js/jquery.maskedinput.min.js"></script>
  <script src="http://localhost/ppat/themes/aceadmin/js/bootstrap-tag.min.js"></script>
  <script src="http://localhost/ppat/themes/aceadmin/js/jquery.hotkeys.min.js"></script>
  <script src="http://localhost/ppat/themes/aceadmin/js/bootstrap-wysiwyg.min.js"></script>

  <script src="http://localhost/ppat/themes/aceadmin/js/dropzone.min.js"></script>

  <script type="text/javascript">
  $(document).ready(function(){
          /*------ Dropzone Init ------*/
          $(".dropzone").dropzone();
  $('.date-picker').datepicker().next().on(ace.click_event, function(){
  $(this).prev().focus()
  });
      $('[data-rel=tooltip]').tooltip();
  });

  </script>

  <script type="text/javascript" src="http://localhost/ppat/libs/bsmodal/js/bootstrap-modal.js"></script>
  <script type="text/javascript" src="http://localhost/ppat/libs/bsmodal/js/bootstrap-modalmanager.js"></script>

  <script src="http://localhost/ppat/libs/kslibs/js/mgcrud.js"></script>
  <script src="http://localhost/ppat/libs/jqvalidation/jquery.validate.js"></script>


  <div class="main-content">

  </div><!-- /.col -->

  <div id="modal_jabatan" class="modal" tabindex="-1" style="position:fixed;top:10%;margin-left:-500px;display:none;font-size:12px;width:1024px">

  </div><!--PAGE CONTENT ENDS-->
  <div id="lyar-mask" class="modal-backdrop" style="display:none;"></div>
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
      url: 'http://localhost/ppat/index.php/crud/command/users/changepassword',
      data: data,
      modalname: modalname
  });

  $('#'+modalname).on('hidden.bs.modal', function () {
      if ($('#'+modalname).attr('data-modalresult')==1){
          //alert('modal result 1')
  //                            Manggu.Crud.loadData({'paramclass': 'crud-param',
  //                                'url': ''
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
  '<button type="button" class="close" data-dismiss="modal" aria-hidden="true">�</button>',
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

  </body>
</html>
