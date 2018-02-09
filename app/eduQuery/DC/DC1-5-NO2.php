<?php
require "../../inc/auth.php";
?>
<!doctype html>
<!--[if lt IE 7]> <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang="en"> <![endif]-->
<!--[if IE 7]>    <html class="no-js lt-ie9 lt-ie8" lang="en"> <![endif]-->
<!--[if IE 8]>    <html class="no-js lt-ie9" lang="en"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang="en"> <!--<![endif]-->
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Pull Quote</title>

<!--lib css-->
<link href="../lib/util/iniframe.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" href="css/opensans/stylesheet.css" type="text/css" charset="utf-8">	
<!--course/lesson css-->
<link href="../lib/pullquote/v1/css/pullquote.min.css" rel="stylesheet" type="text/css">
<link href="../../css/eduqueryexample.css" rel="stylesheet" type="text/css">
<script src="../lib/jquery/jquery-1.7.min.js" type="text/javascript"></script>
<script>
	$(function(){
		if ($('.description').height()) {
			//code	
			$('.written_example').css('height',$('.description').height());
		}
	});
</script>
</head>

<body id="DC1-5-NO2">
<div class="description_container">
	<div class="description">
		<header><h1>Description</h1></header>
		<p>A single, small block of text is presented with an option for a photo.</p>
		<header><h1>Insert description copy in the UMN interaction field:</h1></header>
		<p>Interaction type: pullquote</p>
		<p>Description: This block of text will be presented in a pull quote for emphasis.</p>
	</div>	
	<div class="written_example">
		<header><h1>Interaction Write-up of this example for the UMN interaction field</h1></header>
		
		<p>Textblock:<br/>
            The brain has billions of nerve cells called neurons. The signals and messages passed through these neurons form a person&rsquo;s thoughts, memories and feelings. These neurons die in a person who has Alzheimer&rsquo;s disease.
		</p>
		<p>Photo Description (if needed):<br/>
            Use DC1-5-G1 for the photo. This photo is described in the Photos area of this screen
		</p>
	</div>
	<div class="seClear"></div>
</div>
<div id="pull-quote">
	<div class="page-curl shadow-bottom">
		<img src="images/DC1-5-G1.png"/>
		<!--<blockquote>-->
			<p><span class="firstcharacter">T</span>he brain has billions of nerve cells called neurons. The signals and messages passed through these neurons form a person&rsquo;s thoughts, memories and feelings. These neurons die in a person who has Alzheimer&rsquo;s disease.</p>
		<!--</blockquote>-->
		<div class="clear"/>
	</div>
	
</div>
</body>
</html>