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
<title>Matching Exercise</title>
<link href="../lib/util/iniframe.css" rel="stylesheet" type="text/css">
<link href="../lib/matching/v15/css/matching.min.css" rel="stylesheet" type="text/css" media="screen" />
<!--<link href="../lib/matching/v15/css/matching-fitb.css" rel="stylesheet" type="text/css" media="screen" />-->

<!--course/lesson css-->
<link href="css/course.css" rel="stylesheet" type="text/css">
<link href="css/instance.hlo1.css" rel="stylesheet" type="text/css">
<link href="../../css/eduqueryexample.css" rel="stylesheet" type="text/css">	
<style type="text/css">
/*.matching_ui {min-height:550px;}*/
</style>
<script type="text/javascript" src="../lib/jquery/jquery-1.7.min.js"></script>
<script src="../lib/matching/v15/js/matching.min.js" type="text/javascript"></script>
<script type="text/javascript">
$(function(){
	var m1 = new Matching($('#matching1'), null);
	//var m1 = new Matching($('#matching1'), {'shuffle_statements' : true});
	//var m1 = new Matching($('#matching1'), {'mode' : 'fill-in-the-blank', 'shuffle_statements' : true});

	m1.setMessage('win', 'Congratulations, you have completed the exercise!');
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
		<p>Matching exercise, demonstrating the Typical Use.  User selects a statement by clicking on an item from the statement column and then attempts a match by clicking on one of the answer areas.</p>
		<header><h1>Insert directions in the text field:</h1></header>
		<p>Directions: Match each [statement or term] below to the correct category. Begin by clicking on the [statement or term], and then click on the corresponding category.</p>
	</div>	
	<div class="written_example">
		<header><h1>Interaction Write-up of this example for the UMN interaction field</h1></header>
		
		<p>
			<p>Interaction type: eduQuery Matching - typical use</p>
			<p>Description: The learner matches each [statement or term] to the correct category.</p>

			The safety of a person&rsquo;s workplace. [Physical Environment]<br/>
			Item feedback - correct:<strong>&quot;Correct!&quot;</strong>, incorrect:<strong>&quot;Not a match! Give it another try.&quot;</strong><br/>
			<br/>
			Friends and family who provide support. [Social Environment]<br/>
			Item feedback - correct:<strong>&quot;Correct!&quot;</strong>, incorrect:<strong>&quot;Not a match! Give it another try.&quot;</strong><br/>
			<br/>
			The level of crime in a person&rsquo;s neighborhood. [Social Environment]<br/>
			Item feedback - correct:<strong>&quot;Correct!&quot;</strong>, incorrect:<strong>&quot;Not a match! Give it another try.&quot;</strong><br/>
			<br/>
			The amount of education a person receives. [Social Environment]<br/>
			Item feedback - correct:<strong>&quot;Correct!&quot;</strong>, incorrect:<strong>&quot;Not a match! Give it another try.&quot;</strong><br/>
			<br/>
			The safety and comfort of a person&rsquo;s home. [Physical Environment]<br/>
			Item feedback - correct:<strong>&quot;Correct!&quot;</strong>, incorrect:<strong>&quot;Not a match! Give it another try.&quot;</strong><br/>
			<br/>
			The income a person is able to earn. [Social Environment]<br/>
			Item feedback - correct:<strong>&quot;Correct!&quot;</strong>, incorrect:<strong>&quot;Not a match! Give it another try.&quot;</strong><br/>
			<br/>
			The quality of air and water in the area. [Physical Environment]<br/>
			Item feedback - correct:<strong>&quot;Correct!&quot;</strong>, incorrect:<strong>&quot;Not a match! Give it another try.&quot;</strong><br/>
			<br/>
			Completed interaction feedback: <strong>&quot;Congratulations, you have completed the exercise! If it was difficult then you may want to go back and review this lesson before moving on.&quot;</strong><br/>
		</p>
	</div>
	<div class="seClear"></div>
</div>
<div id="matching1" class="matching">
    
    <div class="instructions" tabindex="0"><h1>Matching exercise - select a statement to start</h1></div>
	
    <div class="statement_defs">
		<!--Default-->
		<h2>Statements</h2>
		<dl>
      <dt data-feedback='{"correct":"Correct!", "incorrect":"Not a match! Give it another try."}'>
				The safety of a person&rsquo;s workplace.
			</dt>
      <dd class="aa1">Physical Environment</dd>
			<dt data-feedback='{"correct":"Correct!", "incorrect":"Not a match! Give it another try."}'>
				Friends and family who provide support.
			</dt>
      <dd class="aa2">Social Environment</dd>
			<dt data-feedback='{"correct":"Correct!", "incorrect":"Not a match! Give it another try."}'>
				The level of crime in a person&rsquo;s neighborhood.
			</dt>
      <dd class="aa2">Social Environment</dd>
			<dt data-feedback='{"correct":"Correct!", "incorrect":"Not a match! Give it another try."}'>
				The amount of education a person receives.
			</dt>
      <dd class="aa2">Social Environment</dd>
			<dt data-feedback='{"correct":"Correct!", "incorrect":"Not a match! Give it another try."}'>
				The safety and comfort of a person&rsquo;s home.
			</dt>
      <dd class="aa1">Physical Environment</dd>
			<dt data-feedback='{"correct":"Correct!", "incorrect":"Not a match! Give it another try."}'>
				The income a person is able to earn.
			</dt>
      <dd class="aa2">Social Environment</dd>
			<dt data-feedback='{"correct":"Correct!", "incorrect":"Not a match! Give it another try."}'>
				The quality of air and water in the area.
			</dt>
      <dd class="aa1">Physical Environment</dd>
    </dl>
		
		<!--Fill in the blank-->
		<!--<h2>Statements</h2>
		<dl>
			<dt data-feedback='{"correct":"That&apos;s right!", "incorrect":"WTF! Try again :("}'>time</dt>
            <dd class="aa1">What <span class="fitb-blank"></span> is it?</dd>
			
            <dt data-feedback='{"correct":"That&apos;s right!", "incorrect":"WTF! Try again :("}'>distant</dt>
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
            <dd class="aa6">it's <span class="fitb-blank"></span>-Time.</dd>
        </dl>-->
	</div>

	<div class="answer_areas">
		<h2>Answer Areas</h2>
	</div>

</div>

</body>
</html>