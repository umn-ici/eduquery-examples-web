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
<link href="css/instance.bpe1.css" rel="stylesheet" type="text/css">

<!--eduQuery Example css-->
<link href="../../css/eduqueryexample.css" rel="stylesheet" type="text/css">

<!--lib javascript-->
<script src="../lib/jquery/jquery-1.7.min.js" type="text/javascript"></script>
<script src="../lib/multiplechoice/v12/js/multiplechoice.min.js" type="text/javascript"></script>

<!--course/lesson javascript-->
<script src="js/bpe1.pcs.js" type="text/javascript"></script>
<script>
	$(function(){
		if(PCS && typeof PCS.runScriptForSlide === 'function'){
			PCS.runScriptForSlide(22, $('#multiplechoice'));
		}
		if ($('.description').height()) {
			//code	
			$('.written_example').css('height',$('.description').height());
		}
	});
</script>
</head>

<body id="BPE1-22-NO2">
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
					<h2>Bolded quotes may be customized to provide further explanation  or context to the learner.</h2>
					<p>
						To help in an emergency, you might need to do some preparation beforehand, such as knowing how to view captioning on a person&rsquo;s television.<br/>
							True[correct] feedback - <strong>&quot;Good job! That is correct.&quot</strong><br/>
							False feedback - <strong>&quot;Sorry, you&rsquo;ll have to try again!&quot;</strong><br/>
						<br/>						
						It&rsquo;s not necessary to practice evacuation routes because emergency personnel will come to get you and the person you work for.<br/>
							True feedback - <strong>&quot;Sorry, you&rsquo;ll have to try again!&quot;</strong><br/>
							False[correct] feedback - <strong>&quot;Good job! That is correct.&quot</strong><br/>
						<br/>
						There is no need to have extra batteries during an emergency.<br/>
							True feedback - <strong>&quot;Sorry, you&rsquo;ll have to try again!&quot;</strong><br/>
							False[correct] feedback - <strong>&quot;Good job! That is correct.&quot</strong><br/>
						<br/>
						In an emergency, the Humane Society will take care of any services animals or pets.<br/>
							True feedback - <strong>&quot;Sorry, you&rsquo;ll have to try again!&quot;</strong><br/>
							False[correct] feedback - <strong>&quot;Good job! That is correct.&quot</strong><br/>
						<br/>
						A back-up list of home care providers and caregivers can help during an emergency.<br/>
							True[correct] feedback - <strong>&quot;Good job! That is correct.&quot</strong><br/>
							False feedback - <strong>&quot;Sorry, you&rsquo;ll have to try again!&quot;</strong><br/>
						<br/>
						Completed interaction feedback: <strong>&quot;Congratulations, you have completed the exercise!&quot;</strong><br/>
					</p>
				</div>
				<div class="seClear"></div>
			</div>
<div id="multiplechoice">
    
    <div class="message" tabindex="0"><h1>Multiple Choice - Read each statement carefully and then select your answer</h1></div>
	
    <div class="mc_knowledgebank">
        <!--<h2>Knowledge Review</h2>-->
        <ul class="mc_kb_group_list">
			<li class="mc_kb_group">
				<h3 class="mc_question">To help in an emergency, you might need to do some preparation beforehand, such as knowing how to view captioning on a person’s television.</h3>
				<ul>
					<li class="mc_item_correct" data-feedback="Good job! That is correct."><span class="answer_type">[correct]</span>True</li>
					<li data-feedback="Sorry, you’ll have to try again!"><span class="answer_type"></span>False</li>
				</ul>
			</li>
			<li class="mc_kb_group">
				<h3 class="mc_question">It&rsquo;s not necessary to practice evacuation routes because emergency personnel will come to get you and the person you work for.</h3>
				<ul>
					
					<li data-feedback="Sorry, you’ll have to try again!"><span class="answer_type"></span>True</li>
					<li class="mc_item_correct" data-feedback="Good job! That is correct."><span class="answer_type">[correct]</span>False</li>
				</ul>
			</li>
			<li class="mc_kb_group">
				<h3 class="mc_question">There is no need to have extra batteries during an emergency.</h3>
				<ul>
					
					<li data-feedback="Sorry, you’ll have to try again!"><span class="answer_type"></span>True</li>
					<li class="mc_item_correct" data-feedback="Good job! That is correct."><span class="answer_type">[correct]</span>False</li>
				</ul>
			</li>
			<li class="mc_kb_group">
				<h3 class="mc_question">In an emergency, the Humane Society will take care of any services animals or pets.</h3>
				<ul>
					<li data-feedback="Sorry, you’ll have to try again!"><span class="answer_type"></span>True</li>
					<li class="mc_item_correct" data-feedback="Good job! That is correct."><span class="answer_type">[correct]</span>False</li>
				</ul>
			</li>
			<li class="mc_kb_group">
				<h3 class="mc_question">A back-up list of home care providers and caregivers can help during an emergency.</h3>
				<ul>
					<li class="mc_item_correct" data-feedback="Good job! That is correct."><span class="answer_type">[correct]</span>True</li>
					<li data-feedback="Sorry, you’ll have to try again!"><span class="answer_type"></span>False</li>
				</ul>
			</li>
        </ul>
	</div>

</div>

</body>
</html>