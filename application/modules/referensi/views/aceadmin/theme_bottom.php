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
        <!-- basic scripts -->

		<!--[if !IE]> -->
		<script type="text/javascript">
			window.jQuery || document.write("<script src='<?php echo $assetdir; ?>js/jquery.min.js'>"+"<"+"/script>");
		</script>

		<!-- <![endif]-->

		<!--[if IE]>
<script type="text/javascript">
 window.jQuery || document.write("<script src='<?php echo $assetdir; ?>js/jquery1x.min.js'>"+"<"+"/script>");
</script>
<![endif]-->
		<script type="text/javascript">
			if('ontouchstart' in document.documentElement) document.write("<script src='<?php echo $assetdir; ?>js/jquery.mobile.custom.min.js'>"+"<"+"/script>");
		</script>
		<script src="<?php echo $assetdir; ?>js/bootstrap.min.js"></script>

		<!-- page specific plugin scripts -->

		<!--[if lte IE 8]>
		  <script src="<?php echo $assetdir; ?>js/excanvas.min.js"></script>
		<![endif]-->
		<script src="<?php echo $assetdir; ?>js/jquery-ui.custom.min.js"></script>
		<script src="<?php echo $assetdir; ?>js/jquery.ui.touch-punch.min.js"></script>
		<script src="<?php echo $assetdir; ?>js/jquery.easypiechart.min.js"></script>
		<script src="<?php echo $assetdir; ?>js/jquery.sparkline.min.js"></script>

		<!-- ace scripts -->
		<script src="<?php echo $assetdir; ?>js/ace-elements.min.js"></script>
		<script src="<?php echo $assetdir; ?>js/ace.min.js"></script>
                <script src="<?php echo $assetdir; ?>js/jquery.dataTables.min.js"></script>
		<script src="<?php echo $assetdir; ?>js/jquery.dataTables.bootstrap.js"></script>

                <script src="<?php echo $assetdir; ?>js/chosen.jquery.min.js"></script>
		<script src="<?php echo $assetdir; ?>js/fuelux/fuelux.spinner.min.js"></script>
		<script src="<?php echo $assetdir; ?>js/date-time/bootstrap-datepicker.min.js"></script>
		<script src="<?php echo $assetdir; ?>js/date-time/bootstrap-timepicker.min.js"></script>
		<script src="<?php echo $assetdir; ?>js/date-time/moment.min.js"></script>
		<script src="<?php echo $assetdir; ?>js/date-time/daterangepicker.min.js"></script>
		<script src="<?php echo $assetdir; ?>js/date-time/bootstrap-datetimepicker.min.js"></script>
		<script src="<?php echo $assetdir; ?>js/bootstrap-colorpicker.min.js"></script>
		<script src="<?php echo $assetdir; ?>js/jquery.knob.min.js"></script>
		<script src="<?php echo $assetdir; ?>js/jquery.autosize.min.js"></script>
		<script src="<?php echo $assetdir; ?>js/jquery.inputlimiter.1.3.1.min.js"></script>
		<script src="<?php echo $assetdir; ?>js/jquery.maskedinput.min.js"></script>
		<script src="<?php echo $assetdir; ?>js/bootstrap-tag.min.js"></script>

                <script src="<?php echo $assetdir; ?>js/dropzone.min.js"></script>
                
		<script type="text/javascript">
                    $(document).ready(function(){
                            /*------ Dropzone Init ------*/
                            $(".dropzone").dropzone();
							$(".chzn-select").chosen(); 
                    });

		</script>
