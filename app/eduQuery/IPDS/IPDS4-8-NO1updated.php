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
<meta http-equiv="Content-Language" content="en" />
<title>Fill in the blank Exercise</title>
<link href="../lib/util/iniframe.css" rel="stylesheet" type="text/css">
<link href="../lib/matching/v15/css/matching.min.css" rel="stylesheet" type="text/css" media="screen" />
<link href="../lib/matching/v15/css/matching-fitb.css" rel="stylesheet" type="text/css" media="screen" />
<!--eduQuery Example css-->
<link href="../../css/eduqueryexample.css" rel="stylesheet" type="text/css">	
<!--course/lesson css-->
<link href="css/course.css" rel="stylesheet" type="text/css">
<link href="css/instance.ipds4.css" rel="stylesheet" type="text/css">
	
<style type="text/css">
/*.matching_ui {min-height:550px;}*/
</style>
<script type="text/javascript" src="../lib/jquery/jquery-1.7.min.js"></script>
<script src="../lib/matching/v15/js/matching.min.js" type="text/javascript"></script>
<script type="text/javascript">
$(function(){
	var m1 = new Matching($('#matching1'), {'mode' : 'fill-in-the-blank'});

	m1.setMessage('win', 'Think about how easy or how difficult this activity was for you. If it was easy then congratulations! You’ve learned a lot about participant-directed resources. If it was difficult then you may want to go back and review this lesson before moving on.');
	
	if ($('.description').height()) {
			//code	
			$('.written_example').css('height',$('.description').height());
		}
});
</script>
</head>

<body>
<div class="description_container">
		<div class="description">
			<header><h1>Description</h1></header>
			<p>Matching exercise, demonstrating the use of the fill in the blank.</p>
			<header><h1>Insert directions in the text field:</h1></header>
			<p>Directions: Complete the sentences below by filling in the blank. Begin by clicking on the term, and then click on the corresponding sentence.</p>
			<header><h1>Insert description copy in the UMN interaction field:</h1></header>
			<p>Interaction type: matching - fill in the blank</p>
			<p>Description: The learner matches each term to the correct sentence.</p>
		</div>	
		<div class="written_example">
			<header><h1>Interaction Write-up of this example for the UMN interaction field</h1></header>
				<h2>Bolded Quotes may be customized to provide further explanation or context to the learner.</h2>
				
				<p>Gifts, talents, and life experiences are some of the things that make up your [personal assets].<br/>
				Item feedback - correct:<strong>&quot;Correct!&quot;</strong>, incorrect:<strong>&quot;Not a match! Give it another try.&quot;</strong><br/>
				<br/>
				Family, friends, and professionals can be informal or formal [support networks]. They can provide valuable knowledge and ideas for participant-direct services.<br/>
				Item feedback - correct:<strong>&quot;Correct!&quot;</strong>, incorrect:<strong>&quot;Not a match! Give it another try.&quot;</strong><br/>
				<br/>
				A [support broker] provides information about participant direction. He or she can provide help and training with participant-directed tasks.<br/>
				Item feedback - correct:<strong>&quot;Correct!&quot;</strong>, incorrect:<strong>&quot;Not a match! Give it another try.&quot;</strong><br/>
				<br/>
				Therapy, transportation, home modification, assistive technology, and financial management support are all examples of [services and supports]. These can be paid for through participant-directed services.<br/>
				Item feedback - correct:<strong>&quot;Correct!&quot;</strong>, incorrect:<strong>&quot;Not a match! Give it another try.&quot;</strong><br/>
				<br/>
				[Medicaid] is often considered the payer of last resort. It is important see if there are other resources that may pay for participant-directed supports before using this program.<br/>
				Item feedback - correct:<strong>&quot;Correct!&quot;</strong>, incorrect:<strong>&quot;Not a match! Give it another try.&quot;</strong><br/>
				<br/>
				Completed interaction feedback: <strong>&quot;Think about how easy or how difficult this activity was for you. If it was easy then congratulations! You&amp;rsquo;ve learned a lot about participant-directed resources. If it was difficult then you may want to go back and review this lesson before moving on.&quot;</strong><br/>
				</p>
		</div>
				<div class="seClear"></div>
			</div>
<div id="matching1" class="matching">
    
    <div class="instructions" tabindex="0"><h1>Matching exercise - select a statement to start</h1></div>
	
    <div class="statement_defs">
		
		<!--Fill in the blank-->
		<h2>Statements</h2>
		<dl>
			<dt data-feedback='{"correct":"Correct!", "incorrect":"Not a match! Give it another try."}'>
				personal assets
			</dt>
            <dd class="aa1">Gifts, talents, and life experiences are some of the things that make up your <span class="fitb-blank"></span>.</dd>
			
			<dt data-feedback='{"correct":"Correct!", "incorrect":"Not a match! Give it another try."}'>
				support networks
			</dt>
            <dd class="aa2">Family, friends, and professionals can be informal or formal <span class="fitb-blank"></span>. They can provide valuable knowledge and ideas for participant-direct services.</dd>
			
			<dt data-feedback='{"correct":"Correct!", "incorrect":"Not a match! Give it another try."}'>
				support broker
			</dt>
            <dd class="aa3">A <span class="fitb-blank"></span> provides information about participant direction. He or she can provide help and training with participant-directed tasks.</dd>
			
			<dt data-feedback='{"correct":"Correct!", "incorrect":"Not a match! Give it another try."}'>
				services and supports
			</dt>
            <dd class="aa4">Therapy, transportation, home modification, assistive technology, and financial management support are all examples of <span class="fitb-blank"></span>. These can be paid for through participant-directed services.</dd>
			
			<dt data-feedback='{"correct":"Correct!", "incorrect":"Not a match! Give it another try."}'>
				Medicaid
			</dt>
            <dd class="aa5"><span class="fitb-blank"></span> is often considered the payer of last resort. It is important see if there are other resources that may pay for participant-directed supports before using this program.</dd>
			
			
			
            <!--<dt data-feedback='{"correct":"That&apos;s right!", "incorrect":"WTF! Try again :("}'>distant</dt>
            <dd class="aa2">Come with me my friends, we'll travel to very <span class="fitb-blank"></span> lands.</dd>
			
            <dt>
				<span data-blanknum="blank-1" data-feedback='{"correct":"That&apos;s right!", "incorrect":"WTF! Try again :("}'>Jake</span>,
				<span data-blanknum="blank-2" data-feedback='{"correct":"That&apos;s right!", "incorrect":"WTF! Try again :("}'>dog</span>
			</dt>
            <dd class="aa3">With <span class="fitb-blank blank-1"></span> the <span class="fitb-blank blank-2"></span>,</dd>
			
            <dt data-feedback='{"correct":"That&apos;s right!", "incorrect":"WTF! Try again :("}'>hu-man</dt>
            <dd class="aa4">and Fin the <span class="fitb-blank"></span>.</dd>
			
			<dt>
				<span data-blanknum="blank-1" data-feedback='{"correct":"That&apos;s right!", "incorrect":"WTF! Try again :("}'>fun</span>,
				<span data-blanknum="blank-2" data-feedback='{"correct":"That&apos;s right!", "incorrect":"WTF! Try again :("}'>never</span>
			</dt>
            <dd class="aa5">We'll have <span class="fitb-blank blank-1"></span> that <span class="fitb-blank blank-2"></span> ends.</dd>
			
			<dt data-feedback='{"correct":"That&apos;s right!", "incorrect":"WTF! Try again :("}'>Adventure</dt>
            <dd class="aa6">it's <span class="fitb-blank"></span>-Time.</dd>-->
        </dl>
	</div>

	<div class="answer_areas">
		<h2>Answer Areas</h2>
	</div>

</div>

</body>
</html>