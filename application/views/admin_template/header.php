<!doctype html>
<!-- paulirish.com/2008/conditional-stylesheets-vs-css-hacks-answer-neither/ -->
<!--[if lt IE 7]> <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang="en"> <![endif]-->
<!--[if IE 7]>    <html class="no-js lt-ie9 lt-ie8" lang="en"> <![endif]-->
<!--[if IE 8]>    <html class="no-js lt-ie9" lang="en"> <![endif]-->

<!-- Consider adding a manifest.appcache: h5bp.com/d/Offline -->
<!--[if gt IE 8]><!--> <html class="no-js" lang="en"> <!--<![endif]-->
<head>
	<meta charset="utf-8" />

	<link rel="dns-prefetch" href="http://fonts.googleapis.com" />
	<link rel="dns-prefetch" href="http://themes.googleusercontent.com" />
	
	<link rel="dns-prefetch" href="http://ajax.googleapis.com" />
	<link rel="dns-prefetch" href="http://cdnjs.cloudflare.com" />
	<link rel="dns-prefetch" href="http://agorbatchev.typepad.com" />
	
	<!-- Use the .htaccess and remove these lines to avoid edge case issues.
	   More info: h5bp.com/b/378 -->
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
	
	<title>Adminstration of Comapeche </title>
	<meta name="description" content="Mango is a slick and responsive Admin Template build with modern techniques like HTML5 and CSS3 to be used for backend solutions of any size." />
	<meta name="author" content="Simon Stamm & Markus Siemens" />

	<!-- Mobile viewport optimized: h5bp.com/viewport -->
	<meta name="viewport" content="width=device-width,initial-scale=1" />
	<!-- iPhone: Don't render numbers as call links -->
	<meta name="format-detection" content="telephone=no" />
	
	<link rel="shortcut icon" href="favicon.ico" />
	<!-- Place favicon.ico and apple-touch-icon.png in the root directory: mathiasbynens.be/notes/touch-icons -->
	<!-- More ideas for your <head> here: h5bp.com/d/head-Tips -->
	
	
	<!-- The Styles -->
	<!-- ---------- -->
	
	<!-- Layout Styles -->
	<link rel="stylesheet" href="<?php echo base_url(); ?>css_cpanel/style.css" />
	<link rel="stylesheet" href="<?php echo base_url(); ?>css_cpanel/grid.css" />
	<link rel="stylesheet" href="<?php echo base_url(); ?>css_cpanel/layout.css" />
	
	<!-- Icon Styles -->
	<link rel="stylesheet" href="<?php echo base_url(); ?>css_cpanel/icons.css" />
	<link rel="stylesheet" href="<?php echo base_url(); ?>css_cpanel/fonts/font-awesome.css" />
	<!--[if IE 8]><link rel="stylesheet" href="<?php echo base_url(); ?>css_cpanel/fonts/font-awesome-ie7.css"><![endif]-->
	
	<!-- External Styles -->
	<link rel="stylesheet" href="<?php echo base_url(); ?>css_cpanel/external/jquery-ui-1.8.21.custom.css" />
	<link rel="stylesheet" href="<?php echo base_url(); ?>css_cpanel/external/jquery.chosen.css" />
	<link rel="stylesheet" href="<?php echo base_url(); ?>css_cpanel/external/jquery.cleditor.css" />
	<link rel="stylesheet" href="<?php echo base_url(); ?>css_cpanel/external/jquery.colorpicker.css" />
	<link rel="stylesheet" href="<?php echo base_url(); ?>css_cpanel/external/jquery.elfinder.css" />
	<link rel="stylesheet" href="<?php echo base_url(); ?>css_cpanel/external/jquery.fancybox.css" />
	<link rel="stylesheet" href="<?php echo base_url(); ?>css_cpanel/external/jquery.jgrowl.css" />
	<link rel="stylesheet" href="<?php echo base_url(); ?>css_cpanel/external/jquery.plupload.queue.css" />
	<link rel="stylesheet" href="<?php echo base_url(); ?>css_cpanel/external/syntaxhighlighter/shCore.css" />
	<link rel="stylesheet" href="<?php echo base_url(); ?>css_cpanel/external/syntaxhighlighter/shThemeDefault.css" />
	
	<!-- Elements -->
	<link rel="stylesheet" href="<?php echo base_url(); ?>css_cpanel/elements.css" />
	<link rel="stylesheet" href="<?php echo base_url(); ?>css_cpanel/forms.css" />
	
	<!-- OPTIONAL: Print Stylesheet for Invoice -->
	<link rel="stylesheet" href="<?php echo base_url(); ?>css_cpanel/print-invoice.css" />
	
	<!-- Typographics -->
	<link rel="stylesheet" href="<?php echo base_url(); ?>css_cpanel/typographics.css" />
	
	<!-- Responsive Design -->
	<link rel="stylesheet" href="<?php echo base_url(); ?>css_cpanel/media-queries.css" />
	
	<!-- Bad IE Styles -->
	<link rel="stylesheet" href="<?php echo base_url(); ?>css_cpanel/ie-fixes.css" />
	
	
	
	
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
	<script src="<?php echo base_url(); ?>js_cpanel/mylibs/polyfills/modernizr-2.6.1.min.js"></script>
	<script src="<?php echo base_url(); ?>js_cpanel/mylibs/polyfills/respond.js"></script>
	<script src="<?php echo base_url(); ?>js_cpanel/mylibs/polyfills/matchmedia.js"></script>
	<!--[if lt IE 9]><script src="<?php echo base_url(); ?>js_cpanel/mylibs/polyfills/selectivizr-min.js"></script><![endif]-->
	<!--[if lt IE 10]><script src="<?php echo base_url(); ?>js_cpanel/mylibs/charts/excanvas.js"></script><![endif]-->
	<!--[if lt IE 10]><script src="<?php echo base_url(); ?>js_cpanel/mylibs/polyfills/classlist.js"></script><![endif]-->
	
	
	
	<!-- Grab frameworks from CDNs -->
		<!-- Grab Google CDN's jQuery, with a protocol relative URL; fall back to local if offline -->
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>
	<script>window.jQuery || document.write('<script src="<?php echo base_url(); ?>js_cpanel/libs/jquery-1.7.2.min.js"><\/script>')</script>
	
		<!-- Do the same with jQuery UI -->
	<script src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8.21/jquery-ui.min.js"></script>
	<script>window.jQuery.ui || document.write('<script src="<?php echo base_url(); ?>js_cpanel/libs/jquery-ui-1.8.21.min.js"><\/script>')</script>
	
		<!-- Do the same with Lo-Dash.js -->
	<script src="http://cdnjs.cloudflare.com/ajax/libs/lodash.js/0.4.2/lodash.min.js"></script>
	<script>window._ || document.write('<script src="<?php echo base_url(); ?>js_cpanel/libs/lodash.min.js"><\/script>')</script>
	
	
	
	<!-- scripts concatenated and minified via build script -->
	
	<!-- General Scripts -->
	<script src="<?php echo base_url(); ?>js_cpanel/mylibs/jquery.hashchange.js"></script>
	<script src="<?php echo base_url(); ?>js_cpanel/mylibs/jquery.plusplus.js"></script>
	<script src="<?php echo base_url(); ?>js_cpanel/mylibs/jquery.jgrowl.js"></script>
	<script src="<?php echo base_url(); ?>js_cpanel/mylibs/jquery.scrollTo.js"></script>
	<script src="<?php echo base_url(); ?>js_cpanel/mylibs/jquery.ui.touch-punch.js"></script>
	<script src="<?php echo base_url(); ?>js_cpanel/mylibs/jquery.ui.multiaccordion.js"></script>
	<script src="<?php echo base_url(); ?>js_cpanel/mylibs/number-functions.js"></script>
	
	<!-- Forms -->
	<script src="<?php echo base_url(); ?>js_cpanel/mylibs/forms/jquery.autosize.js"></script>
	<script src="<?php echo base_url(); ?>js_cpanel/mylibs/forms/jquery.checkbox.js"></script>
	<script src="<?php echo base_url(); ?>js_cpanel/mylibs/forms/jquery.chosen.js"></script>
	<script src="<?php echo base_url(); ?>js_cpanel/mylibs/forms/jquery.cleditor.js"></script>
	<script src="<?php echo base_url(); ?>js_cpanel/mylibs/forms/jquery.colorpicker.js"></script>
	<script src="<?php echo base_url(); ?>js_cpanel/mylibs/forms/jquery.ellipsis.js"></script>
	<script src="<?php echo base_url(); ?>js_cpanel/mylibs/forms/jquery.fileinput.js"></script>
	<script src="<?php echo base_url(); ?>js_cpanel/mylibs/forms/jquery.fullcalendar.js"></script>
	<script src="<?php echo base_url(); ?>js_cpanel/mylibs/forms/jquery.maskedinput.js"></script>
	<script src="<?php echo base_url(); ?>js_cpanel/mylibs/forms/jquery.mousewheel.js"></script>
	<script src="<?php echo base_url(); ?>js_cpanel/mylibs/forms/jquery.placeholder.js"></script>
	<script src="<?php echo base_url(); ?>js_cpanel/mylibs/forms/jquery.pwdmeter.js"></script>
	<script src="<?php echo base_url(); ?>js_cpanel/mylibs/forms/jquery.ui.datetimepicker.js"></script>
	<script src="<?php echo base_url(); ?>js_cpanel/mylibs/forms/jquery.ui.spinner.js"></script>
	<script src="<?php echo base_url(); ?>js_cpanel/mylibs/forms/jquery.validate.js"></script>
	<script src="<?php echo base_url(); ?>js_cpanel/mylibs/forms/uploader/plupload.js"></script>
	<script src="<?php echo base_url(); ?>js_cpanel/mylibs/forms/uploader/plupload.html5.js"></script>
	<script src="<?php echo base_url(); ?>js_cpanel/mylibs/forms/uploader/plupload.html4.js"></script>
	<script src="<?php echo base_url(); ?>js_cpanel/mylibs/forms/uploader/plupload.flash.js"></script>
	<script src="<?php echo base_url(); ?>js_cpanel/mylibs/forms/uploader/jquery.plupload.queue/jquery.plupload.queue.js"></script>
		
	<!-- Charts -->
	<script src="<?php echo base_url(); ?>js_cpanel/mylibs/charts/jquery.flot.js"></script>
	<script src="<?php echo base_url(); ?>js_cpanel/mylibs/charts/jquery.flot.orderBars.js"></script>
	<script src="<?php echo base_url(); ?>js_cpanel/mylibs/charts/jquery.flot.pie.js"></script>
	<script src="<?php echo base_url(); ?>js_cpanel/mylibs/charts/jquery.flot.resize.js"></script>
	
	<!-- Explorer -->
	<script src="<?php echo base_url(); ?>js_cpanel/mylibs/explorer/jquery.elfinder.js"></script>
	
	<!-- Fullstats -->
	<script src="<?php echo base_url(); ?>js_cpanel/mylibs/fullstats/jquery.css-transform.js"></script>
	<script src="<?php echo base_url(); ?>js_cpanel/mylibs/fullstats/jquery.animate-css-rotate-scale.js"></script>
	<script src="<?php echo base_url(); ?>js_cpanel/mylibs/fullstats/jquery.sparkline.js"></script>
	
	<!-- Syntax Highlighter -->
	<script src="<?php echo base_url(); ?>js_cpanel/mylibs/syntaxhighlighter/shCore.js"></script>
	<script src="<?php echo base_url(); ?>js_cpanel/mylibs/syntaxhighlighter/shAutoloader.js"></script>
	
	<!-- Dynamic Tables -->
	<script src="<?php echo base_url(); ?>js_cpanel/mylibs/dynamic-tables/jquery.dataTables.js"></script>
	
	<!-- Gallery -->
	<script src="<?php echo base_url(); ?>js_cpanel/mylibs/gallery/jquery.fancybox.js"></script>
	
	<!-- Tooltips -->
	<script src="<?php echo base_url(); ?>js_cpanel/mylibs/tooltips/jquery.tipsy.js"></script>
	
	<!-- Do not touch! -->
	<script src="<?php echo base_url(); ?>js_cpanel/mango.js"></script>
	<script src="<?php echo base_url(); ?>js_cpanel/plugins.js"></script>
	<script src="<?php echo base_url(); ?>js_cpanel/script.js"></script>
	
	<!-- Your custom JS goes here -->
	<script src="<?php echo base_url(); ?>js_cpanel/app.js"></script>
	
	<script type="text/javascript" src="<?php echo base_url(); ?>ckeditor/ckeditor.js"></script>
    
	<!-- end scripts -->
	
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" /></head>

<body>

	<!----------------------->
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
		
			<!-- Right side -->
			<div class="right">
			    <ul class="breadcrumb">
				<li><a href="<?php echo site_url(); ?>" target="_blank">View Site</a></li>
			    </ul>
			</div>
			<!-- End of .right -->
			
			<!-- Left side -->
			<div class="left">
			    <ul>	
				<li><a href="<?php echo site_url('profile'); ?>"><span class="icon i14_user"></span><?php echo $this->session->userdata('adminname'); ?></a></li>
				<li class="red"><a href="<?php echo site_url('logout/out'); ?>">Log Out</a></li>	
			    </ul>
			</div><!-- End of .left -->
			
			<!-- Phone only items -->
			<div class="phone">
				
				<!-- User Link -->
				<li><a href="pages_profile.html"><span class="icon icon-user"></span></a></li>
				<!-- Navigation -->
				<li><a class="navigation" href="#"><span class="icon icon-list"></span></a></li>
			
			</div><!-- End of phone items -->
			
		</div><!-- End of .container_12 -->
	</section><!-- End of #toolbar -->
	
	<!-- The header containing the logo -->
	<header class="container_12">
		<p>&nbsp;</p>	
	</header><!-- End of header -->
	
	<!-- The container of the sidebar and content box -->
	<div role="main" id="main" class="container_12 clearfix">
	
		<!-- The blue toolbar stripe -->
		<section class="toolbar">
			<div class="user">
				<span><img src="<?php echo site_url(); ?>img/logo_menu.png" alt="Mango" width="145" /></span>
			</div>
			
		</section>
        <!-- End of .toolbar-->