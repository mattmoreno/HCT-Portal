<?php define ('CURRENT_PATH', 'http://whoismattmoreno.com/HCT/', true); ?>
<?php
/*THESE ARE THE DEFAULT CONTENTS*/
$default_title = '';
$default_keyword = '';
$default_desc = '';
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	
	<?php if ( $title_block == '')  {
        echo '<title>' . $default_title . '</title>';
    } else {
        echo '<title>' . $title_block . '</title>';
    } 
	?>
        
    <?php if ( $desc_block == '')  {
        echo '<meta name="description" content="' . $default_desc . '" />';
    } else {
        echo '<meta name="description" content="' . $desc_block . '" />';
    } 						
    ?>
        
    <?php if ( $keyword_block == '')  {
        echo '<meta name="keywords" content="' . $default_keyword . '" />';
    } else {
        echo '<meta name="keywords" content="' . $keyword_block . '" />';
    } 						
    ?>
    
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta content="IE=edge,chrome=1" http-equiv="X-UA-Compatible" />
	<meta content="width=device-width,initial-scale=1" name="viewport" />
	<link rel="shortcut icon" href="favicon.ico" />
    <!-- Framework CSS -->
    <link rel="stylesheet" href="<?php echo (CURRENT_PATH) ?>css/screen.css" type="text/css" media="screen, projection" />
    <link rel="stylesheet" href="<?php echo (CURRENT_PATH) ?>css/print.css" type="text/css" media="print" />
    <link href='http://fonts.googleapis.com/css?family=Oxygen:400,700,300' rel='stylesheet' type='text/css'>
  	<!--[if lt IE 7]>
    <link rel="stylesheet" href="<?php echo (CURRENT_PATH) ?>css/ie.css" type="text/css" media="screen, projection" />
    
    <script type="text/javascript"> 
			/*Load jQuery if not already loaded*/ if(typeof jQuery == 'undefined'){ document.write("<script type=\"text/javascript\"   src=\"<?php echo (CURRENT_PATH) ?>js/jquery.min.js\"></"+"script>"); var __noconflict = true; } 
			var IE6UPDATE_OPTIONS = {
				icons_path: "images/ie6update/"
			}
	</script>
	<script type="text/javascript" src="<?php echo (CURRENT_PATH) ?>js/ie6update.js"></script>
    
    <script type="text/javascript" src="<?php echo (CURRENT_PATH) ?>js/DD_belatedPNG_min.js"></script>
        <script>
          /* EXAMPLE */
          DD_belatedPNG.fix('img');
          
          /* string argument can be any CSS selector */
          /* .png_bg example is unnecessary */
          /* change it to what suits you! */
        </script>
	<![endif]-->    
    <script type="text/javascript" src="<?php echo (CURRENT_PATH) ?>js/global.js"></script>
    <script type="text/javascript" src="//ajax.googleapis.com/ajax/libs/jquery/2.0.0/jquery.min.js"></script>
    <script type="text/javascript" src="http://cdn.jquerytools.org/1.2.7/full/jquery.tools.min.js"></script>
    <!--don't forget to add this to inputs with starting values-->
    <!--onfocus="javascript:ClearField(this,'Enter your ZIP code');"
		onblur="javascript:ReplaceField(this,'Enter your ZIP code');"
		value="Enter your ZIP code"
     -->
     
<script language="javascript">
jQuery(document).ready(function($) {
	//ENTER SCRIPTS HERE
	$("#planHelp a").toggle(
	  function () {
	    $("#helpOverlay").css("display", "block");
	    $("#planHelp").addClass("on");
	  },
	  function () {
	    $("#helpOverlay").css("display", "none");
	    $("#planHelp").removeClass("on");
	  }
	);	
	$("#accordion").tabs(
	    "#accordion div.pane",
	    {tabs: 'h2', effect: 'slide', initialIndex:0 }
    );
});
</script> 