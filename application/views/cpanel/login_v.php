<!doctype html>
<!-- paulirish.com/2008/conditional-stylesheets-vs-css-hacks-answer-neither/ -->
<!--[if lt IE 7]> <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang="en"> <![endif]-->
<!--[if IE 7]>    <html class="no-js lt-ie9 lt-ie8" lang="en"> <![endif]-->
<!--[if IE 8]>    <html class="no-js lt-ie9" lang="en"> <![endif]-->

<!-- Consider adding a manifest.appcache: h5bp.com/d/Offline -->
<!--[if gt IE 8]><!--> <html class="no-js" lang="en"> <!--<![endif]-->
<head>
	<meta charset="utf-8">

	<link rel="dns-prefetch" href="http://fonts.googleapis.com" />
	<link rel="dns-prefetch" href="http://themes.googleusercontent.com" />
	
	<link rel="dns-prefetch" href="http://ajax.googleapis.com" />
	<link rel="dns-prefetch" href="http://cdnjs.cloudflare.com" />
	<link rel="dns-prefetch" href="http://agorbatchev.typepad.com" />
	
	<!-- Use the .htaccess and remove these lines to avoid edge case issues.
	   More info: h5bp.com/b/378 -->
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	
	<title>Adminstration of Comapeche </title>
	<meta name="author" content="El Araby Web Solutions">

	<!-- Mobile viewport optimized: h5bp.com/viewport -->
	<meta name="viewport" content="width=device-width,initial-scale=1">
	<!-- iPhone: Don't render numbers as call links -->
	<meta name="format-detection" content="telephone=no">
	
	<link rel="shortcut icon" href="favicon.ico" />
	<!-- Place favicon.ico and apple-touch-icon.png in the root directory: mathiasbynens.be/notes/touch-icons -->
	<!-- More ideas for your <head> here: h5bp.com/d/head-Tips -->
	
	
	<!-- The Styles -->
	<!-- ---------- -->
	
	<!-- Layout Styles -->
	<link rel="stylesheet" href="<?php echo site_url(); ?>css_cpanel/style.css">
	<link rel="stylesheet" href="<?php echo site_url(); ?>css_cpanel/grid.css">
	<link rel="stylesheet" href="<?php echo site_url(); ?>css_cpanel/layout.css">
	
	<!-- Icon Styles -->
	<link rel="stylesheet" href="<?php echo site_url(); ?>css_cpanel/icons.css">
	<link rel="stylesheet" href="<?php echo site_url(); ?>css_cpanel/fonts/font-awesome.css">
	<!--[if IE 8]><link rel="stylesheet" href="<?php echo site_url(); ?>css_cpanel/fonts/font-awesome-ie7.css"><![endif]-->
	
	<!-- External Styles -->
	<link rel="stylesheet" href="<?php echo site_url(); ?>css_cpanel/external/jquery-ui-1.8.21.custom.css">
	<link rel="stylesheet" href="<?php echo site_url(); ?>css_cpanel/external/jquery.chosen.css">
	<link rel="stylesheet" href="<?php echo site_url(); ?>css_cpanel/external/jquery.cleditor.css">
	<link rel="stylesheet" href="<?php echo site_url(); ?>css_cpanel/external/jquery.colorpicker.css">
	<link rel="stylesheet" href="<?php echo site_url(); ?>css_cpanel/external/jquery.elfinder.css">
	<link rel="stylesheet" href="<?php echo site_url(); ?>css_cpanel/external/jquery.fancybox.css">
	<link rel="stylesheet" href="<?php echo site_url(); ?>css_cpanel/external/jquery.jgrowl.css">
	<link rel="stylesheet" href="<?php echo site_url(); ?>css_cpanel/external/jquery.plupload.queue.css">
	<link rel="stylesheet" href="<?php echo site_url(); ?>css_cpanel/external/syntaxhighlighter/shCore.css" />
	<link rel="stylesheet" href="<?php echo site_url(); ?>css_cpanel/external/syntaxhighlighter/shThemeDefault.css" />
	
	<!-- Elements -->
	<link rel="stylesheet" href="<?php echo site_url(); ?>css_cpanel/elements.css">
	<link rel="stylesheet" href="<?php echo site_url(); ?>css_cpanel/forms.css">
	
	<!-- OPTIONAL: Print Stylesheet for Invoice -->
	<link rel="stylesheet" href="<?php echo site_url(); ?>css_cpanel/print-invoice.css">
	
	<!-- Typographics -->
	<link rel="stylesheet" href="<?php echo site_url(); ?>css_cpanel/typographics.css">
	
	<!-- Responsive Design -->
	<link rel="stylesheet" href="<?php echo site_url(); ?>css_cpanel/media-queries.css">
	
	<!-- Bad IE Styles -->
	<link rel="stylesheet" href="<?php echo site_url(); ?>css_cpanel/ie-fixes.css">
	
	
	
	
	
	<!-- The Scripts -->
	<!-- ----------- -->
	
	
	<!-- JavaScript at the top (will be cached by browser) -->
	
	<!-- Load Webfont loader -->
	<script type="text/javascript">
		window.WebFontConfig = {
			google: { families: [ 'PT Sans:400,700' ] },
			active: function(){ $(window).trigger('fontsloaded') }
		};
	</script>
	<script defer async src="https://ajax.googleapis.com/ajax/libs/webfont/1.0.28/webfont.js"></script>
	
	<!-- Essential polyfills -->
	<script src="<?php echo site_url(); ?>js_cpanel/mylibs/polyfills/modernizr-2.6.1.min.js"></script>
	<script src="<?php echo site_url(); ?>js_cpanel/mylibs/polyfills/respond.js"></script>
	<script src="<?php echo site_url(); ?>js_cpanel/mylibs/polyfills/matchmedia.js"></script>
	<!--[if lt IE 9]><script src="<?php echo site_url(); ?>js_cpanel/mylibs/polyfills/selectivizr-min.js"></script><![endif]-->
	<!--[if lt IE 10]><script src="<?php echo site_url(); ?>js_cpanel/mylibs/charts/excanvas.js"></script><![endif]-->
	<!--[if lt IE 10]><script src="<?php echo site_url(); ?>js_cpanel/mylibs/polyfills/classlist.js"></script><![endif]-->
	
	<!-- Grab frameworks from CDNs -->
		<!-- Grab Google CDN's jQuery, with a protocol relative URL; fall back to local if offline -->
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>
	<script>window.jQuery || document.write('<script src="<?php echo site_url(); ?>js_cpanel/libs/jquery-1.7.2.min.js"><\/script>')</script>
	
		<!-- Do the same with jQuery UI -->
	<script src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8.21/jquery-ui.min.js"></script>
	<script>window.jQuery.ui || document.write('<script src="<?php echo site_url(); ?>js_cpanel/libs/jquery-ui-1.8.21.min.js"><\/script>')</script>
	
		<!-- Do the same with Lo-Dash.js -->
	<script src="http://cdnjs.cloudflare.com/ajax/libs/lodash.js/0.4.2/lodash.min.js"></script>
	<script>window._ || document.write('<script src="<?php echo site_url(); ?>js_cpanel/libs/lodash.min.js"><\/script>')</script>
	
	
	
	<!-- scripts concatenated and minified via build script -->
	
	<!-- General Scripts -->
	<script src="<?php echo site_url(); ?>js_cpanel/mylibs/jquery.hashchange.js"></script>
	<script src="<?php echo site_url(); ?>js_cpanel/mylibs/jquery.idle-timer.js"></script>
	<script src="<?php echo site_url(); ?>js_cpanel/mylibs/jquery.plusplus.js"></script>
	<script src="<?php echo site_url(); ?>js_cpanel/mylibs/jquery.jgrowl.js"></script>
	<script src="<?php echo site_url(); ?>js_cpanel/mylibs/jquery.scrollTo.js"></script>
	<script src="<?php echo site_url(); ?>js_cpanel/mylibs/jquery.ui.touch-punch.js"></script>
	<script src="<?php echo site_url(); ?>js_cpanel/mylibs/jquery.ui.multiaccordion.js"></script>
	<script src="<?php echo site_url(); ?>js_cpanel/mylibs/number-functions.js"></script>
	
	<!-- Forms -->
	<script src="<?php echo site_url(); ?>js_cpanel/mylibs/forms/jquery.autosize.js"></script>
	<script src="<?php echo site_url(); ?>js_cpanel/mylibs/forms/jquery.checkbox.js"></script>
	<script src="<?php echo site_url(); ?>js_cpanel/mylibs/forms/jquery.chosen.js"></script>
	<script src="<?php echo site_url(); ?>js_cpanel/mylibs/forms/jquery.cleditor.js"></script>
	<script src="<?php echo site_url(); ?>js_cpanel/mylibs/forms/jquery.colorpicker.js"></script>
	<script src="<?php echo site_url(); ?>js_cpanel/mylibs/forms/jquery.ellipsis.js"></script>
	<script src="<?php echo site_url(); ?>js_cpanel/mylibs/forms/jquery.fileinput.js"></script>
	<script src="<?php echo site_url(); ?>js_cpanel/mylibs/forms/jquery.fullcalendar.js"></script>
	<script src="<?php echo site_url(); ?>js_cpanel/mylibs/forms/jquery.maskedinput.js"></script>
	<script src="<?php echo site_url(); ?>js_cpanel/mylibs/forms/jquery.mousewheel.js"></script>
	<script src="<?php echo site_url(); ?>js_cpanel/mylibs/forms/jquery.placeholder.js"></script>
	<script src="<?php echo site_url(); ?>js_cpanel/mylibs/forms/jquery.pwdmeter.js"></script>
	<script src="<?php echo site_url(); ?>js_cpanel/mylibs/forms/jquery.ui.datetimepicker.js"></script>
	<script src="<?php echo site_url(); ?>js_cpanel/mylibs/forms/jquery.ui.spinner.js"></script>
	<script src="<?php echo site_url(); ?>js_cpanel/mylibs/forms/jquery.validate.js"></script>
	<script src="<?php echo site_url(); ?>js_cpanel/mylibs/forms/uploader/plupload.js"></script>
	<script src="<?php echo site_url(); ?>js_cpanel/mylibs/forms/uploader/plupload.html5.js"></script>
	<script src="<?php echo site_url(); ?>js_cpanel/mylibs/forms/uploader/plupload.html4.js"></script>
	<script src="<?php echo site_url(); ?>js_cpanel/mylibs/forms/uploader/plupload.flash.js"></script>
	<script src="<?php echo site_url(); ?>js_cpanel/mylibs/forms/uploader/jquery.plupload.queue/jquery.plupload.queue.js"></script>
		
	<!-- Charts -->
	<script src="<?php echo site_url(); ?>js_cpanel/mylibs/charts/jquery.flot.js"></script>
	<script src="<?php echo site_url(); ?>js_cpanel/mylibs/charts/jquery.flot.orderBars.js"></script>
	<script src="<?php echo site_url(); ?>js_cpanel/mylibs/charts/jquery.flot.pie.js"></script>
	<script src="<?php echo site_url(); ?>js_cpanel/mylibs/charts/jquery.flot.resize.js"></script>
	
	<!-- Explorer -->
	<script src="<?php echo site_url(); ?>js_cpanel/mylibs/explorer/jquery.elfinder.js"></script>
	
	<!-- Fullstats -->
	<script src="<?php echo site_url(); ?>js_cpanel/mylibs/fullstats/jquery.css-transform.js"></script>
	<script src="<?php echo site_url(); ?>js_cpanel/mylibs/fullstats/jquery.animate-css-rotate-scale.js"></script>
	<script src="<?php echo site_url(); ?>js_cpanel/mylibs/fullstats/jquery.sparkline.js"></script>
	
	<!-- Syntax Highlighter -->
	<script src="<?php echo site_url(); ?>js_cpanel/mylibs/syntaxhighlighter/shCore.js"></script>
	<script src="<?php echo site_url(); ?>js_cpanel/mylibs/syntaxhighlighter/shAutoloader.js"></script>
	
	<!-- Dynamic Tables -->
	<script src="<?php echo site_url(); ?>js_cpanel/mylibs/dynamic-tables/jquery.dataTables.js"></script>
	<script src="<?php echo site_url(); ?>js_cpanel/mylibs/dynamic-tables/jquery.dataTables.tableTools.zeroClipboard.js"></script>
	<script src="<?php echo site_url(); ?>js_cpanel/mylibs/dynamic-tables/jquery.dataTables.tableTools.js"></script>
	
	<!-- Gallery -->
	<script src="<?php echo site_url(); ?>js_cpanel/mylibs/gallery/jquery.fancybox.js"></script>
	
	<!-- Tooltips -->
	<script src="<?php echo site_url(); ?>js_cpanel/mylibs/tooltips/jquery.tipsy.js"></script>
	
	<!-- Do not touch! -->
	<script src="<?php echo site_url(); ?>js_cpanel/mango.js"></script>
	<script src="<?php echo site_url(); ?>js_cpanel/plugins.js"></script>
	<script src="<?php echo site_url(); ?>js_cpanel/script.js"></script>
	
	<!-- Your custom JS goes here -->
	<script src="<?php echo site_url(); ?>js_cpanel/app.js"></script>
	
	<!-- end scripts -->
	
</head>

<body class=login>

	<!-- Some dialogs etc. -->

	<!-- The loading box -->
	<div id="loading-overlay"></div>
	<div id="loading">
		<span>Loading...</span>
	</div>
	<!-- End of loading box -->
	
	<!--------------------------------->
	<!-- Now, the page itself begins -->
	<!--------------------------------->
	
	<!-- The toolbar at the top -->
	<section id="toolbar">
		<div class="container_12">
			
			<!-- Phone only items -->
			<div class="phone">
				
				<!-- User Link -->
				<li><a href="<?php echo site_url(); ?>" target="_blank"><span class="icon icon-link"></span></a></li>
			
			</div><!-- End of .phone -->
			
		</div><!-- End of .container_12 -->
	</section><!-- End of #toolbar -->
	
	<!-- The header containing the logo -->
	<header class="container_12">
		
		<div class="container">
		
			<!-- Your logos -->
			<img src="<?php echo base_url();?>images/logo_menu.png" style="margin:15px 0;">
			<a class="phone-title" href="#"><img src="img/logo_menu.png" /></a>
			
			<!-- Right link -->
			<div class="right">
				<a href="<?php echo site_url(); ?>" target="_blank">Go to Your site </a>
			</div>
			
		</div><!-- End of .container -->
	
	</header><!-- End of header -->
	
	<!-- The container of the sidebar and content box -->
	<section id="login" class="container_12 clearfix">
	
		<form action="<?php echo site_url('login/cpanel_credentials'); ?>" method="post" class="box validate">
		
			<div class="header">
				<h2><span class="icon icon-lock"></span>&nbsp;</h2>
			</div>
			
			<div class="content">
				
				<!-- Login messages -->
				<div class="login-messages">
					<div class="message welcome">welcome to your site</div>
					<div class="message failure">Error on usaer name and password , please try again , and make sure you typed them well <br> if the problem still exists call your system administrator or call help@idev-inc.com</div>
				</div>
			
				<!-- The form -->
				<div class="form-box">
				
					<div class="row">
						<label for="login_name">
							<strong>user name</strong>
						</label>
						<div>
							<input tabindex=1 type="text" class="required noerror" name=login_name id=login_name placeholder="user name" />
						</div>
					</div>
					
					<div class="row">
						<label for="login_pw">
							<strong>PAssword</strong>
						</label>
						<div>
							<input tabindex=2 type="password" class="required noerror" name=login_pw id=login_pw placholder="password"/>
						</div>
					</div>
					
				</div><!-- End of .form-box -->
				
			</div><!-- End of .content -->
			
			<div class="actions">
				<div class="left">
					<div class="rememberme">
					</div>
				</div>
				<div class="right">
					<input tabindex=3 type="submit" value="log in" name="login_btn" />
				</div>
			</div><!-- End of .actions -->
			
		</form><!-- End of form -->

	</section>
	
	<!-- Spawn $$.loaded -->
	<script>
		$$.loaded();
	</script>
	
	<!-- Prompt IE 6 users to install Chrome Frame. Remove this if you want to support IE 6.
	   chromium.org/developers/how-tos/chrome-frame-getting-started -->
	<!--[if lt IE 7 ]>
	<script defer src="http://ajax.googleapis.com/ajax/libs/chrome-frame/1.0.3/CFInstall.min.js"></script>
	<script defer>window.attachEvent('onload',function(){CFInstall.check({mode:'overlay'})})</script>
	<![endif]-->

</body>
</html>