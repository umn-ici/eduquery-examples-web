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
<link href="css/instance.tcc10.css" rel="stylesheet" type="text/css">

<!--eduQuery Example css-->
<link href="../../css/eduqueryexample.css" rel="stylesheet" type="text/css">

<!--lib javascript-->
<script src="../lib//jquery/jquery-1.7.min.js" type="text/javascript"></script>
<script src="../lib/tabbedinfo/v1/js/tabbedinfo.min.js" type="text/javascript"></script>

<!--course/lesson javascript-->
<script src="js/tcc10.pcs.js" type="text/javascript"></script>
<script>
	$(function(){
		if(PCS && typeof PCS.runScriptForSlide === 'function'){
			PCS.runScriptForSlide(4, $('#tabbed-info'));
		}
		if ($('.description').height()) {
			//code	
			$('.written_example').css('height',$('.description').height());
		}
	});
</script>
</head>

<body id="TCC10-4-NO1">
	<div class="description_container">
		<div class="description">
			<header><h1>Description</h1></header>
			<p>The Tabbed Info interaction is a way to convay information to the learner with groups of related topics. This case involves five topics in a sequence with an added graphic.</p>
			<header><h1>Insert directions in the text field:</h1></header>
			<p>Directions: Click on each of the tabs below to learn more.</p>
			<header><h1>Insert description copy in the UMN interaction field:</h1></header>
			<p>Interaction type: tabbed info - with pictures</p>
			<p>Description: The learner clicks on tabs to learn more about each item. There are images or graphics to illustrate the topic.</p>
		</div>	
		<div class="written_example">
			<header><h1>Interaction Write-up of this example for the UMN interaction field</h1></header>
			
			<p>Listen<br/>
				Make sure you are listening to the people you serve, and particularly to how they see the world and what they want to make of their lives. When you think you understand what they are saying, repeat it to them. &ldquo;Let me see if I understand you correctly. You are saying you want . . .&rdquo; &ndash; and then see if they feel you do indeed understand them.<br/>
				Image Description: 1/5th of a pie chart is bolded. The other 4 pieces are faded.<br/>
				<br/>
				Ask Questions<br/>
				One of the most important aspects of your work as a community mental health practitioner is to ask the right questions in the right way so that the people you serve are encouraged to express themselves. Questions like, &ldquo; What is it about living on your own that you think you won&rsquo;t like,&rdquo; can help you better assess the individual&rsquo;s worldview and respond to it.<br/>
				Image Description: 1/5th of a pie chart is bolded. The other 4 pieces are faded.<br/>
				<br/>
				Be Honest<br/>
				Sometimes it will be important for you to clarify your own views, but making sure you don&rsquo;t impose those views on someone else as the &lsquo;right&rsquo; views for them to have. For example, &ldquo;I have to admit that I like working and being financially independent, but I understand that might not be everyone&rsquo;s idea of sutccess. How do you feel about work?&rdquo; Statements like this can help so that you can avoid imposing your values.<br/>
				Image Description: 1/5th of a pie chart is bolded. The other 4 pieces are faded.<br/>
				<br/>
				Get Some Help<br/>
				You may want some help in better understanding and atccepting some of the values of the people with whom you work. Contact family members for another perspective, talk with colleagues about other approaches, work with a group of service recipients who may share similar perspectives (there is strength in numbers), or find a &lsquo;cultural interpreter.&rsquo;<br/>
				Image Description: 1/5th of a pie chart is bolded. The other 4 pieces are faded.<br/>
				<br/>
				Don&rsquo;t Be Defensive<br/>
				Another important aspect of cultural competence is to avoid being defensive. When you are challenged on your own views, find the courage to evaluate the situation fairly, admit to your own bias, and ask for help in moving forward. You might reply, &ldquo;You know, I think I did misjudge you, that I wasn&rsquo;t listening closely enough to you. Call me on that the next time you think that&rsquo;s happening.&rdquo;<br/>
				Image Description: 1/5th of a pie chart is bolded. The other 4 pieces are faded.<br/>
			</p>
		</div>
		<div class="seClear"></div>
	</div>

<div id="tabbed-info">
	<div id="wrap">
		
		<div id="intro-text">
			<h1>Click each tab and read the information.</h1>
			<img src="images/pieChart6.gif"/>
		</div>
		
		<div class="content-group">
			<h2 class="title">Listen</h2>
			<div class="bod">
				<h3>Listen</h3>
				<img src="images/pieChart1.gif"/>
				<p>Make sure you are listening to the people you serve, and particularly to how they see the world and what they want to make of their lives. When you think you understand what they are saying, repeat it to them. &ldquo;Let me see if I understand you correctly. You are saying you want . . .&rdquo; &ndash; and then see if they feel you do indeed understand them.</p> 
			</div>
		</div>
		
		<div class="content-group">
			<h2 class="title">Ask Questions</h2>
			<div class="bod">
				<h3>Ask Questions</h3>
				<img src="images/pieChart2.gif"/>
				<p>One of the most important aspects of your work as a community mental health practitioner is to ask the right questions in the right way so that the people you serve are encouraged to express themselves. Questions like, &ldquo; What is it about living on your own that you think you won&rsquo;t like,&rdquo; can help you better assess the individual&rsquo;s worldview and respond to it.</p>
			</div>
		</div>
		
		<div class="content-group">
			<h2 class="title">Be Honest </h2>
			<div class="bod">
				<h3>Be Honest </h3>
				<img src="images/pieChart3.gif"/>
				<p>Sometimes it will be important for you to clarify your own views, but making sure you don&rsquo;t impose those views on someone else as the &lsquo;right&rsquo; views for them to have. For example, &ldquo;I have to admit that I like working and being financially independent, but I understand that might not be everyone&rsquo;s idea of sutccess. How do you feel about work?&rdquo; Statements like this can help so that you can avoid imposing your values.</p>
			</div>
		</div>
		<div class="content-group">
			<h2 class="title">Get Some Help</h2>
			<div class="bod">
				<h3>Get Some Help</h3>
				<img src="images/pieChart4.gif"/>
				<p>You may want some help in better understanding and atccepting some of the values of the people with whom you work. Contact family members for another perspective, talk with colleagues about other approaches, work with a group of service recipients who may share similar perspectives (there is strength in numbers), or find a &lsquo;cultural interpreter.&rsquo;</p>
			</div>
		</div>
		<div class="content-group">
			<h2 class="title">Don&rsquo;t Be Defensive</h2>
			<div class="bod">
				<h3>Don&rsquo;t Be Defensive</h3>
				<img src="images/pieChart5.gif"/>
				<p>Another important aspect of cultural competence is to avoid being defensive. When you are challenged on your own views, find the courage to evaluate the situation fairly, admit to your own bias, and ask for help in moving forward. You might reply, &ldquo;You know, I think I did misjudge you, that I wasn&rsquo;t listening closely enough to you. Call me on that the next time you think that&rsquo;s happening.&rdquo;</p>
			</div>
		</div>
	</div>
	
</div>
</body>
</html>