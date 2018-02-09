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
<title>Tabbed information</title>

<!--lib css-->
<link href="../lib/util/iniframe.css" rel="stylesheet" type="text/css">
<link href="../lib/tabbedinfo/v1/css/tabbedinfo.css" rel="stylesheet" type="text/css">
	
<!--course/lesson css-->
<link href="css/course.css" rel="stylesheet" type="text/css">
<link href="css/instance.mh1.css" rel="stylesheet" type="text/css">

<!--eduQuery Example css-->
<link href="../../css/eduqueryexample.css" rel="stylesheet" type="text/css">

<!--lib javascript-->
<script src="../lib/jquery/jquery-1.7.min.js" type="text/javascript"></script>
<script src="../lib/tabbedinfo/v1/js/tabbedinfo.min.js" type="text/javascript"></script>

<!--course/lesson javascript-->
<script src="js/mh1.pcs.js" type="text/javascript"></script>
<script>
	$(function(){
		if(PCS && typeof PCS.runScriptForSlide === 'function'){
			PCS.runScriptForSlide(23, $('#tabbed-info'));
		}
		if ($('.description').height()) {
			//code	
			$('.written_example').css('height',$('.description').height());
		}
	});
</script>
</head>

<body id="MH1-23-NO5">
	<div class="description_container">
		<div class="description">
			<header><h1>Description</h1></header>
			<p>The Tabbed Info interaction is a way to convay information to the learner with groups of related topics. This case involes three topics with a text presentation.</p><header><h1>Insert directions in the text field:</h1></header>
			<p>Directions: Click on each of the tabs below to learn more.</p>
			<header><h1>Insert description copy in the UMN interaction field:</h1></header>
			<p>Interaction type: tabbed info - typical use</p>
			<p>Description: The learner clicks on tabs to learn more about each item.</p>
		</div>	
		<div class="written_example">
			<header><h1>Interaction Write-up of this example for the UMN interaction field</h1></header>
			
			<p>Chemicals<br/>
				The cells in our brains communicate by sending messages to
				one another. They need the right chemicals to do this. These
				chemicals are called neurotransmitters. The brains of people
				living with mental illness often have too much or too little of
				these important chemicals. This can lead to changes in how the
				person feels. It can also disrupt the ability to think.
				Serotonin, norepinephrine, and dopamine are three important
				chemicals that affect how the brain functions.<br/>
				Brain Structures<br/>
				Different parts of our brains have different functions. Some
				parts of the brain might be an unusual size in a person living
				with mental illness. They might have more or less neurons or
				cells than other areas. In both depression and schizophrenia
				people generally have a smaller than usual hippocampus.
				Researchers have found that a person living with bipolar
				disorder has more cells that release dopamine, serotonin, and
				norepinephrine in the thalamus.<br/>
				Faulty Functioning<br/>
				Normal brain functions may have trouble switching on or off
				with certain mental illnesses. Some research indicates that the
				areas of the brain that alert us to problems seem to get stuck
				in the &ldquo;on&rdquo; position for a person living with
				Obsessive Compulsive Disorder. He or she receives signals from
				the brain that things are not right. This can happen even when
				the person has checked or rechecked the situation several
				times.<br/>
			</p>
		</div>
		<div class="seClear"></div>
	</div>

<div id="tabbed-info">
	<div id="wrap">
		
		<div id="intro-text">
			<h1>Click each tab and read the information.</h1>
		</div>
		
		<div class="content-group">
			<h2 class="title">Chemicals</h2>
			<div class="bod">
				<h3>Chemicals</h3>
				<p>The cells in our brains communicate by sending messages to
				one another. They need the right chemicals to do this. These
				chemicals are called neurotransmitters. The brains of people
				living with mental illness often have too much or too little of
				these important chemicals. This can lead to changes in how the
				person feels. It can also disrupt the ability to think.
				Serotonin, norepinephrine, and dopamine are three important
				chemicals that affect how the brain functions.</p>
			</div>
		</div>
		
		<div class="content-group">
			<h2 class="title">Brain Structures</h2>
			<div class="bod">
				<h3>Brain Structures</h3>
				<p>Different parts of our brains have different functions. Some
				parts of the brain might be an unusual size in a person living
				with mental illness. They might have more or less neurons or
				cells than other areas. In both depression and schizophrenia
				people generally have a smaller than usual hippocampus.
				Researchers have found that a person living with bipolar
				disorder has more cells that release dopamine, serotonin, and
				norepinephrine in the thalamus.</p>
			</div>
		</div>
		
		<div class="content-group">
			<h2 class="title">Faulty Functioning</h2>
			<div class="bod">
				<h3>Faulty Functioning</h3>
				<p>Normal brain functions may have trouble switching on or off
				with certain mental illnesses. Some research indicates that the
				areas of the brain that alert us to problems seem to get stuck
				in the &ldquo;on&rdquo; position for a person living with
				Obsessive Compulsive Disorder. He or she receives signals from
				the brain that things are not right. This can happen even when
				the person has checked or rechecked the situation several
				times.</p>
			</div>
		</div>
	
	</div>
	
</div>
</body>
</html>