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
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <title>Login Page - <?php echo NAMA_APLIKASI; ?></title>

        <meta name="description" content="User login page" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />

        <!-- basic styles -->

        <link href="<?php echo $assetdir; ?>css/bootstrap.min.css" rel="stylesheet" />
        <link rel="stylesheet" href="<?php echo $assetdir; ?>css/font-awesome.min.css" />

        <!--[if IE 7]>
          <link rel="stylesheet" href="<?php echo $assetdir; ?>css/font-awesome-ie7.min.css" />
        <![endif]-->

        <!-- page specific plugin styles -->

        <!-- fonts -->

        <link rel="stylesheet" href="<?php echo $assetdir; ?>css/ace-fonts.css" />

        <!-- ace styles -->

        <link rel="stylesheet" href="<?php echo $assetdir; ?>css/ace.min.css" />
        <link rel="stylesheet" href="<?php echo $assetdir; ?>css/ace-rtl.min.css" />

        <!--[if lte IE 8]>
          <link rel="stylesheet" href="<?php echo $assetdir; ?>css/ace-ie.min.css" />
        <![endif]-->

        <!-- inline styles related to this page -->

        <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->

        <!--[if lt IE 9]>
        <script src="<?php echo $assetdir; ?>js/html5shiv.js"></script>
        <script src="<?php echo $assetdir; ?>js/respond.min.js"></script>
        <![endif]-->
        
        <style>
            .login-layout {
                background-color: <?php echo $appconfig['login-background']; ?>;
            }
        </style>
    </head>

    <body class="login-layout">
        <div class="main-container">
            <div class="main-content">
                <div class="row">
                    <div class="col-sm-10 col-sm-offset-1">
                            <div class="center" style="margin-top:30px;">
				    <img src="<?php echo base_url().'assets/img/'.ICON; ?>" width="100px">
                              <h1>
                                    <span ><?php echo NAMA_APLIKASI; ?></span>
                                </h1>
                              
                            </div>
                        <div class="login-container">

                            <div class="space-6"></div>

                            <div class="position-relative">
                                <div id="login-box" class="login-box visible widget-box no-border">
                                    <div class="widget-body">
                                        <div class="widget-main">
                                            <h5 class="header blue lighter bigger">
                                                <i class="icon-lock green"></i>
                                                Masukkan Username dan Password
                                            </h5>

                                            <div class="space-6"></div>

                                            <fieldset>
                                                <label class="block clearfix">
                                                    <span class="block input-icon input-icon-right">
                                                        <input id="username" type="text" class="form-control" placeholder="Username" onkeypress="doKeyPress(event)" />
                                                        <i class="icon-user"></i>
                                                    </span>
                                                </label>
                                                        
                                                <label class="block clearfix">
                                                    <span class="block input-icon input-icon-right">
                                                        <input id="password" type="password" class="form-control" placeholder="Password" onkeypress="doKeyPress(event)" />
                                                        <i class="icon-unlock"></i>
                                                    </span>
                                                </label>
                                                        
                                                <div class="space"></div>
                                                        
                                                <div class="clearfix">
                                                    <button type="button" class="width-35 pull-right btn btn-sm btn-primary" 
                                                            onclick="doAjaxLogin()">
                                                        <i class="icon-key"></i>
                                                        Login
                                                    </button>
                                                </div>
                                                        
                                                <div class="space-4"></div>
                                            </fieldset>

                                        </div><!-- /widget-main -->
										<div class="toolbar clearfix">
												<div>
													<a href="#" onclick="show_box('forgot-box'); return false;" class="forgot-password-link">
														<i class="icon-arrow-left"></i>
														Lupa Password
													</a>
												</div>

												<div>
												&nbsp;
												<!--
													<a href="#" onclick="show_box('signup-box'); return false;" class="user-signup-link">
														I want to register
														<i class="icon-arrow-right"></i>
													</a>
												-->
												</div>
											</div>

                                    </div><!-- /widget-body -->
                                </div><!-- /login-box -->

                                <div id="forgot-box" class="forgot-box widget-box no-border">
                                    <div class="widget-body">
                                        <div class="widget-main">
                                            <h4 class="header red lighter bigger">
                                                <i class="icon-key"></i>
                                                Ambil Password
                                            </h4>

                                            <div class="space-6"></div>
											<div id="timer" style="font-weight:bold;font-size:10pt;color:red;display:none">
												Anda akan menerima Password lewat sms dan akan berakhir dalam waktu: &nbsp; &nbsp;
												<span id="js-hour"></span>
												<span id="js-minute"></span>
												<span id="js-second"></span>
											</div>
                                            <form name="ambilPass" id="ambilPassword" method="post">
                                                <fieldset id="field_pass">
													Username :
                                                    <label class="block clearfix">
                                                        <span class="block input-icon input-icon-right">
                                                            <input type="text" class="form-control" name="s_user" id="s_user" placeholder="Username" />
                                                            <i class="icon-envelope"></i>
                                                        </span>
                                                    </label>
													No. Telepon:
													 <label class="block clearfix">
                                                        <span class="block input-icon input-icon-right">
                                                            <input type="text" class="form-control" name="s_telp" id="s_telp" placeholder="No. Telepon" />
                                                            <i class="icon-envelope"></i>
                                                        </span>
                                                    </label>

                                                    <div class="clearfix">
                                                        <button onclick="lupaPassword();" type="button" class="width-35 pull-right btn btn-sm btn-danger">
                                                            <i class="icon-lightbulb"></i>
                                                            Send Me!
                                                        </button>
                                                    </div>
                                                </fieldset>
                                            </form>
                                        </div><!-- /widget-main -->

                                        <div class="toolbar center">
                                            <a href="#" onclick="show_box('login-box'); return false;" class="back-to-login-link">
                                                Back to login
                                                <i class="icon-arrow-right"></i>
                                            </a>
                                        </div>
                                    </div><!-- /widget-body -->
                                </div><!-- /forgot-box -->

                                <div id="signup-box" class="signup-box widget-box no-border">
                                    <div class="widget-body">
                                        <div class="widget-main">
                                            <h4 class="header green lighter bigger">
                                                <i class="icon-group blue"></i>
                                                New User Registration
                                            </h4>

                                            <div class="space-6"></div>
                                            <p> Enter your details to begin: </p>

                                            <form>
                                                <fieldset>
                                                    <label class="block clearfix">
                                                        <span class="block input-icon input-icon-right">
                                                            <input type="email" class="form-control" placeholder="Email" />
                                                            <i class="icon-envelope"></i>
                                                        </span>
                                                    </label>

                                                    <label class="block clearfix">
                                                        <span class="block input-icon input-icon-right">
                                                            <input type="text" class="form-control" placeholder="Username" />
                                                            <i class="icon-user"></i>
                                                        </span>
                                                    </label>

                                                    <label class="block clearfix">
                                                        <span class="block input-icon input-icon-right">
                                                            <input type="password" class="form-control" placeholder="Password" />
                                                            <i class="icon-lock"></i>
                                                        </span>
                                                    </label>

                                                    <label class="block clearfix">
                                                        <span class="block input-icon input-icon-right">
                                                            <input type="password" class="form-control" placeholder="Repeat password" />
                                                            <i class="icon-retweet"></i>
                                                        </span>
                                                    </label>

                                                    <label class="block">
                                                        <input type="checkbox" class="ace" />
                                                        <span class="lbl">
                                                            I accept the
                                                            <a href="#">User Agreement</a>
                                                        </span>
                                                    </label>

                                                    <div class="space-24"></div>

                                                    <div class="clearfix">
                                                        <button type="reset" class="width-30 pull-left btn btn-sm">
                                                            <i class="icon-refresh"></i>
                                                            Reset
                                                        </button>

                                                        <button type="button" class="width-65 pull-right btn btn-sm btn-success">
                                                            Register
                                                            <i class="icon-arrow-right icon-on-right"></i>
                                                        </button>
                                                    </div>
                                                </fieldset>
                                            </form>
                                        </div>

                                        <div class="toolbar center">
                                            <a href="#" onclick="show_box('login-box'); return false;" class="back-to-login-link">
                                                <i class="icon-arrow-left"></i>
                                                Back to login
                                            </a>
                                        </div>
                                    </div><!-- /widget-body -->
                                </div><!-- /signup-box -->
                            </div><!-- /position-relative -->
                        </div>
                    </div><!-- /.col -->
                </div><!-- /.row -->
            </div>
        </div><!-- /.main-container -->

        <!-- basic scripts -->

        <!--[if !IE]> -->

        <script type="text/javascript">
            window.jQuery || document.write("<script src='<?php echo $assetdir; ?>js/jquery-2.0.3.min.js'>"+"<"+"/script>");
        </script>
        

<!-- <![endif]-->

<!--[if IE]>
<script type="text/javascript">
window.jQuery || document.write("<script src='<?php echo $assetdir; ?>js/jquery-1.10.2.min.js'>"+"<"+"/script>");
</script>
<![endif]-->

        <script src="<?php echo $libsurl; ?>dplibs/js/dplibs.js"></script>

        <script type="text/javascript">
            if("ontouchend" in document) document.write("<script src='<?php echo $assetdir; ?>js/jquery.mobile.custom.min.js'>"+"<"+"/script>");
        </script>

        <!-- inline scripts related to this page -->

        
        
        
        <script type="text/javascript">
            
            function toHex(str) {
                    var hex = '';
                    for(var i=0;i<str.length;i++) {
                            hexchar = '00'+str.charCodeAt(i).toString(16);
                            hexchar = hexchar.substr(hexchar.length-2);
                            hex += hexchar;
                    }
                    return hex;
            }
            
            
            var xkey = '<?php echo $kode_data;?>';
            var rkey = '<?php echo $key_data;?>';
            function show_box(id) {
                jQuery('.widget-box.visible').removeClass('visible');
                jQuery('#'+id).addClass('visible');
            }
            
            function doAjaxLogin(){
                var vuser = $('#username').val();
                var vpass = $('#password').val();
                var vxpass = toHex(dataen(rkey, vpass));
                console.log(vuser);
                console.log(vpass);
                console.log(vxpass);
                var ajaxurl = '<?php echo $mainurl; ?>login/svlogin/'+vuser+'/'+vxpass+'/'+xkey;
                
                loadAjax({
                    type: 'GET',
                    url: ajaxurl,
                    onsuccess: function(data){
                        //alert('sukses');
                        location.reload();
                    },
                    onerror: function(message){
                        alert(message);
                    }
                });
                
            }
            
            function doKeyPress(e){
                if (e.keyCode == 13) {
                    doAjaxLogin();
                    //var tb = document.getElementById("scriptBox");
                    //eval(tb.value);
                    return false;
                }
                
            }
            
            
        </script>
    </body>
    
<script>
var startTime = new Date(),
    expiryTime = new Date(),
    hourElem = document.getElementById('js-hour'),
    minuteElem = document.getElementById('js-minute'),
    secondElem = document.getElementById('js-second');

expiryTime.setSeconds( expiryTime.getSeconds() + 300 );
	
var diffInMs = expiryTime - startTime,
    diffInSecs = Math.round( diffInMs / 1000 ),
    amountOfHours = Math.floor( diffInSecs / 3600 ),
    amountOfSeconds = diffInSecs - (amountOfHours * 3600),
    amountOfMinutes = Math.floor( amountOfSeconds / 60 ),
    amountOfSeconds = amountOfSeconds - ( amountOfMinutes * 60 );

if( amountOfHours > 0 ) {
  hourElem.innerHTML = (amountOfHours < 10)
  ? '0' + amountOfHours + ' : '
  : amountOfHours + ' : ';
} else {
  hourElem.innerHTML = '00 : ';
}

// Set up the minutes
if( amountOfMinutes > 0 ) {
  minuteElem.innerHTML = ( amountOfMinutes < 10 )
  ? '0' + amountOfMinutes + ' : '
  : amountOfMinutes + ' : ';
} else {
  minuteElem.innerHTML = '00 : ';
}

// // Set up the seconds
if( amountOfSeconds > 0 ) {
  secondElem.innerHTML = (amountOfSeconds < 10)
  ? '0' + amountOfSeconds
  : amountOfSeconds;
} else {
  secondElem.innerHTML = '00';
}

function countDown() {
  var dateNow = new Date();

  // If we're not at the end of the timer, continue the countdown
  if( expiryTime > dateNow ) {
 
  // References to current countdown values
  var hours = parseInt(hourElem.innerHTML);
      minutes = parseInt(minuteElem.innerHTML),
      seconds = parseInt(secondElem.innerHTML);
 
  // Update the hour if necessary
  if( minutes == 0 && seconds == 0) {
    --hours;
 
    hourElem.innerHTML = ( hours < 10 ) ? '0' + (hours) + ' : ' : (hours) + ' : ';
    minuteElem.innerHTML = '59 : ';
    secondElem.innerHTML = '59';
    return;
  }
 
  // Update the minute if necessary
  if( seconds == 0 ) {
 
    if( minutes > 0 ) {
      --minutes;
      minuteElem.innerHTML = ( minutes > 10 ) ? minutes + ' : ' : '0' + minutes + ' : ';
 
      } else {
        minuteElem.innerHTML = '59' + ' : ';
      }
 
      return secondElem.innerHTML = '59';
 
    } else {
      --seconds;
      secondElem.innerHTML = ( seconds < 10 ) ? '0' + seconds : seconds;
    }
  } else {
    // Reset the seconds
    secondElem.innerHTML = '00';
    clearInterval(countDownInterval);
	alert("Waktu Anda Habis!!");
	window.location="<?php echo site_url('menu/home');?>";
  }
}

function lupaPassword()
{
	var user = $('#s_user').val();
	if($('#s_user').val()!='' && $('#s_telp').val()!=''){
		$.ajax({
			url     : '<?php echo site_url('login/ambil_password');?>',
			dataType: 'json',
			type    : 'POST',
			data    : $('#ambilPassword').serialize(),
			success : function(data){
				if(data.status!="error"){
					$('#field_pass').empty();
					$('#field_pass').append('<br>Masukan Password:<label class="block clearfix"><span class="block input-icon input-icon-right"><input type="text" class="form-control" name="s_pass" id="s_pass" placeholder="Masukan Password" /><input type="hidden" class="form-control" name="s_user" id="s_user" value="'+user+'"/><input type="hidden" class="form-control" name="s_pass2" id="s_pass2" value="'+data.acak+'"/><i class="icon-envelope"></i></span></label> <div class="clearfix"><button onclick="prosesPassword();" type="button" class="width-35 pull-right btn btn-sm btn-danger"><i class="icon-lightbulb"></i> Send Me!</button></div>');
					$('#timer').css('display','block');
					countDownInterval = setInterval( countDown, 1000 );
				}else{
					alert(data.msg);
				}
			}
		});
	}else{
		alert('Harap isi terlebih dahulu!');
	}
}

var xkey = '<?php echo $kode_data;?>';
var rkey = '<?php echo $key_data;?>';
function prosesPassword()
{
	var vuser = $('#s_user').val();
	var vpass = $('#s_pass').val();
	var vpass2 = $('#s_pass2').val();
	if(vpass!=''){
		$.ajax({
			url     : '<?php echo site_url('login/cek_password');?>',
			dataType: 'json',
			type    : 'POST',
			data    : $('#ambilPassword').serialize(),
			success : function(data){
				if(data.status!="error"){
					clearInterval(countDownInterval);
					var vxpass = toHex(dataen(rkey, vpass));
					var ajaxurl = '<?php echo $mainurl; ?>login/svlogin/'+vuser+'/'+vxpass+'/'+xkey;
					loadAjax({
						type: 'GET',
						url: ajaxurl,
						onsuccess: function(data){
							location.reload();
						},
						onerror: function(message){
							alert(message);
						}
					});
				}else{
					alert(data.msg);
				}
			}
		});
	}else{
		alert('Harap isi terlebih dahulu!');
	}
}



function dataen(key, str) {
  var s = [],
      j = 0,
      x, res = '';
  for (var i = 0; i < 256; i++) {
    s[i] = i;
  }
  for (i = 0; i < 256; i++) {
    j = (j + s[i] + key.charCodeAt(i % key.length)) % 256;
    x = s[i];
    s[i] = s[j];
    s[j] = x;
  }
  i = 0;
  j = 0;
  for (var y = 0; y < str.length; y++) {
    i = (i + 1) % 256;
    j = (j + s[i]) % 256;
    x = s[i];
    s[i] = s[j];
    s[j] = x;
    res += String.fromCharCode(str.charCodeAt(y) ^ s[(s[i] + s[j]) % 256]);
  }
  return res;
}
</script>
</html>