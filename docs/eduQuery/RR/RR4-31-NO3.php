<?php
require "../../inc/auth.php";
?>
<!DOCTYPE HTML>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Multiple-choice exercise</title>

<!--lib css-->
<link href="../lib/util/iniframe.css" rel="stylesheet" type="text/css">
<link href="../lib/multiplechoice/v12/css/multiplechoice.min.css" rel="stylesheet" type="text/css" />

<!--course/lesson css-->
<link href="css/course.css" rel="stylesheet" type="text/css">
<link href="css/instance.rr4.css" rel="stylesheet" type="text/css">

<!--eduQuery Example css-->
<link href="../../css/eduqueryexample.css" rel="stylesheet" type="text/css">

<!--lib javascript-->
<script src="../lib/jquery/jquery-1.7.min.js" type="text/javascript"></script>
<script src="../lib/multiplechoice/v12/js/multiplechoice.min.js" type="text/javascript"></script>

<!--course/lesson javascript-->
<script src="js/rr4.pcs.js" type="text/javascript"></script>
<script>
	$(function(){
		if(PCS && typeof PCS.runScriptForSlide === 'function'){
			PCS.runScriptForSlide(31, $('#multiplechoice'));
		}
		if ($('.description').height()) {
			//code	
			$('.written_example').css('height',$('.description').height());
		}
	});
</script>
</head>

<body id="RR4-31-NO3">

<div class="description_container">
    <div class="description">
        <header><h1>Description</h1></header>
        <p>Mulitple Choice gives different options for the learner to choose between for the correct answer. With this Multiple Choice interaction, only one answer can be correct. There are options for item feedback for choices within each question, as well as for completion of the interaction.</p>
	<header><h1>Insert directions in the text field:</h1></header>
	<p>Directions: Read each of the statements below, and then click on the best answer.</p>
	<header><h1>Insert description copy in the UMN interaction field:</h1></header>
	<p>Interaction type: multiple choice - one question at a time</p>
	<p>Description: The learner answers multiple-choice questions, which are presented one at a time.</p>
    </div>	
    <div class="written_example">
        <header><h1>Interaction Write-up of this example for the UMN interaction field</h1></header>
	<h2>Bolded Quotes may be customized to provide further explanation or context to the learner.</h2>
        
        <p>
            In some places it&rsquo;s not OK for people to talk about their disability or health. This is an example of what kind of difference?<br/>
                Cultural[correct] feedback - <strong>&quot;Good job! That is correct.&quot;</strong><br/>
                Sexual feedback - <strong>&quot;Sorry, you&rsquo;ll have to try again!&quot;</strong><br/>
                Political feedback - <strong>&quot;Sorry, you&rsquo;ll have to try again!&quot;</strong><br/>
                Nutritional or Diet feedback - <strong>&quot;Sorry, you&rsquo;ll have to try again!&quot;</strong><br/>
            <br/>						
            The person you work for may be required to fast, or not eat, at certain times or on certain days. This is an example of what kind of difference?<br/>
                Political feedback - <strong>&quot;Sorry, you&rsquo;ll have to try again!&quot;</strong><br/>
                Sexual feedback - <strong>&quot;Sorry, you&rsquo;ll have to try again!&quot;</strong><br/>
                Religious[correct] feedback - <strong>&quot;Good job! That is correct.&quot;</strong><br/>
                Language feedback - <strong>&quot;Sorry, you&rsquo;ll have to try again!&quot;</strong><br/>
            <br/>
            The person you work for is an animal lover and doesn&rsquo;t eat any meat or dairy products. This is an example of what kind of difference?<br/>
                Religious feedback - <strong>&quot;Sorry, you&rsquo;ll have to try again!&quot;</strong><br/>
                Nutritional or Diet[correct] feedback - <strong>&quot;Good job! That is correct.&quot;</strong><br/>
                Sexual feedback - <strong>&quot;Sorry, you&rsquo;ll have to try again!&quot;</strong><br/>
                Cultural feedback - <strong>&quot;Sorry, you&rsquo;ll have to try again!&quot;</strong><br/>
            <br/>
            Completed interaction feedback: <strong>&quot;Congratulations, you have completed the exercise!&quot;</strong><br/>
        </p>
    </div>
    <div class="seClear"></div>
</div>

<div id="multiplechoice">
    
    <div class="message" tabindex="0"><h1>Multiple Choice - Read each statement carefully and then select your answer.</h1></div>
	
    <div class="mc_knowledgebank">
        <ul class="mc_kb_group_list">
			<li class="mc_kb_group">
				<h3 class="mc_question">In some places it&rsquo;s not OK for people to talk about their disability or health. This is an example of what kind of difference?</h3>
				<ul>
					<li class="mc_item_correct" data-feedback="Good job!"><span class="answer_type">[correct]</span>Cultural</li>
					<li data-feedback="Sorry, you’ll have to try again!"><span class="answer_type"></span>Sexual</li>
					<li data-feedback="Sorry, you’ll have to try again!"><span class="answer_type"></span>Political</li>
					<li data-feedback="Sorry, you’ll have to try again!"><span class="answer_type"></span>Nutritional or Diet</li>
				</ul>
			</li>
			<li class="mc_kb_group">
				<h3 class="mc_question">The person you work for may be required to fast, or not eat, at certain times or on certain days. This is an example of what kind of difference?</h3>
				<ul>
					<li data-feedback="Sorry, you’ll have to try again!"><span class="answer_type"></span>Political</li>
					<li data-feedback="Sorry, you’ll have to try again!"><span class="answer_type"></span>Sexual</li>
					<li class="mc_item_correct" data-feedback="Good job!"><span class="answer_type">[correct]</span>Religious</li>
					<li data-feedback="Sorry, you’ll have to try again!"><span class="answer_type"></span>Language</li>
				</ul>
			</li>
			<li class="mc_kb_group">
				<h3 class="mc_question">The person you work for is an animal lover and doesn&rsquo;t eat any meat or dairy products. This is an example of what kind of difference?</h3>
				<ul>
					<li data-feedback="Sorry, you’ll have to try again!"><span class="answer_type"></span>Religious</li>
					<li class="mc_item_correct" data-feedback="Good job!"><span class="answer_type">[correct]</span>Nutritional or Diet</li>
					<li data-feedback="Sorry, you’ll have to try again!"><span class="answer_type"></span>Sexual</li>
					<li data-feedback="Sorry, you’ll have to try again!"><span class="answer_type"></span>Cultural</li>
				</ul>
			</li>
        </ul>
	</div>

</div>

</body>
</html>