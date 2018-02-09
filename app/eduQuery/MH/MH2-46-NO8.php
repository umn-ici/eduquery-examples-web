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
<title>Matching exercise</title>

<!--lib css-->
<link href="../lib/util/iniframe.css" rel="stylesheet" type="text/css">
<!--<link href="../lib/multimatch/v1/css/mulitmatch.css" rel="stylesheet" type="text/css">-->

<!--course/lesson css-->
<link href="css/course.css" rel="stylesheet" type="text/css">
<link href="../lib/multimatch/v11/css/multimatch.min.css" rel="stylesheet" type="text/css">

<!--lib javascript-->
<script src="../lib/jquery/jquery-1.7.min.js" type="text/javascript"></script>
<script src="../lib/multimatch/v11/js/multimatch.min.js" type="text/javascript"></script>

<!--eduQuery Example css-->
<link href="../../css/eduqueryexample.css" rel="stylesheet" type="text/css">

<!--course/lesson javascript-->
<script src="js/mh2.pcs.js" type="text/javascript"></script>

<script>
	$(function(){
		if(PCS && typeof PCS.runScriptForSlide === 'function'){
			PCS.runScriptForSlide(46, $('#multimatch'));
		}
		if ($('.description').height()) {
			//code	
			$('.written_example').css('height',$('.description').height());
		}
	});
</script>
</head>

<body id="MH2-46-NO8">

<div class="description_container">
				<div class="description">
					<header><h1>Description</h1></header>
					<p>Mulit-Match allows for more than one answer to be selected per question. Completed item feedback can be given, as well as  feedback for the completed interaction.</p>
					<header><h1>Insert directions in the text field:</h1></header>
					<p>Description: The learner matches statements to multiple correct terms.</p>
					<header><h1>Insert description copy in the UMN interaction field:</h1></header>
					<p>Interaction type: multi-match</p>
					<p>Description: The learner matches statements to multiple correct terms.</p>
				</div>	
				<div class="written_example">
					<header><h1>Interaction Write-up of this example for the UMN interaction field</h1></header>
					<h2>Bolded words may be customized to provide further explanation or context to the learner.</h2>
					
					<p>Symptom statements<br/>
						<br/>
						Hallucinations.<br/>
						&#8213;Depression [correct]<br/>
						&#8213;Schizophrenia [correct]<br/>
						&#8213;Anxiety Disorder<br/>
						&#8213;Bipolar Disorder [correct]<br/>
						&#8213;Borderline Personality Disorder<br/>
						Completed Item feedback: <strong>None</strong><br/>
						<br/>
						Unrealistic or unfounded fears or thoughts.<br/>
						&#8213;Depression [correct]<br/>
						&#8213;Schizophrenia [correct]<br/>
						&#8213;Anxiety Disorder [correct]<br/>
						&#8213;Bipolar Disorder [correct]<br/>
						&#8213;Borderline Personality Disorder [correct]<br/>
						Completed Item feedback: <strong>None</strong><br/>
						<br/>
						Disorganized thoughts and speech.<br/>
						&#8213;Depression<br/>
						&#8213;Schizophrenia<br/>
						&#8213;Anxiety Disorder [correct]<br/>
						&#8213;Bipolar Disorder<br/>
						&#8213;Borderline Personality Disorder<br/>
						Completed Item feedback: <strong>None</strong><br/>
						<br/>
						Frantic efforts to avoid abandonment.<br/>
						&#8213;Depression<br/>
						&#8213;Schizophrenia<br/>
						&#8213;Anxiety Disorder<br/>
						&#8213;Bipolar Disorder<br/>
						&#8213;Borderline Personality Disorder [correct]<br/>
						Completed Item feedback: <strong>None</strong><br/>
						<br/>
						Sleep disturbance.<br/>
						&#8213;Depression [correct]<br/>
						&#8213;Schizophrenia [correct]<br/>
						&#8213;Anxiety Disorder [correct]<br/>
						&#8213;Bipolar Disorder [correct]<br/>
						&#8213;Borderline Personality Disorder [correct]<br/>
						Completed Item feedback: <strong>None</strong><br/>
						<br/>
						Completed interaction feedback:<br/>
						<strong>&ldquo;Telling the difference between these illnesses can be hard. Consider the following issues. How might these issues affect diagnosis, support, and treatment?<br/>
						&#8213;Symptoms can overlap between illnesses.<br/>
						&#8213;Age of onset, severity, frequency, and expression of symptoms will vary from person to person.<br/>
						&#8213;A person can sometimes be reluctant to share symptoms with others. He or she may be unaware of ashamed of them.<br/>
						&#8213; Many people suffer from more than one illness at the same time.&rdquo;</strong><br/>
					</p>
				</div>
				<div class="seClear"></div>
			</div>
	
<div id="multimatch">
    
    <div id="message" tabindex="0"><h1>Matching exercise - Select the various illnesses for each symtom statement - Select a symptom to start</h1></div>
	
    
        <h2>Symptom statements</h2>
        <dl>
            <dt>Hallucinations.</dt>
			<dd>
				<ul class="ansArea">
					<li class="ans cor">Depression<span class="correct_statement">[correct]</span></li>
					<li class="ans cor">Schizophrenia<span class="correct_statement">[correct]</span></li>
					<li class="ans">Anxiety Disorder</li>
					<li class="ans cor">Bipolar Disorder<span class="correct_statement">[correct]</span></li>
					<li class="ans">Borderline Personality Disorder</li>
				</ul>
				<ul class="feedback">
					<li><span class="itemfeedback"></span></li>
				</ul>
			</dd>
			
            <dt>Unrealistic or unfounded fears or thoughts.</dt>
			<dd><ul class="ansArea">
					<li class="ans cor">Depression<span class="correct_statement">[correct]</span></li>
					<li class="ans cor">Schizophrenia<span class="correct_statement">[correct]</span></li>
					<li class="ans cor">Anxiety Disorder<span class="correct_statement">[correct]</span></li>
					<li class="ans cor">Bipolar Disorder<span class="correct_statement">[correct]</span></li>
					<li class="ans cor">Borderline Personality Disorder<span class="correct_statement">[correct]</span></li>
				</ul>
				<ul class="feedback">
					<li><span class="itemfeedback"></span></li>
				</ul>
			</dd>
			
            <dt>Disorganized thoughts and speech.</dt>
			<dd><ul class="ansArea">
					<li class="ans">Depression</li>
					<li class="ans cor">Schizophrenia<span class="correct_statement">[correct]</span></li>
					<li class="ans">Anxiety Disorder</li>
					<li class="ans">Bipolar Disorder</li>
					<li class="ans">Borderline Personality Disorder</li>
				</ul>
				<ul class="feedback">
					<li><span class="itemfeedback"></span></li>
				</ul>
			</dd>
			
			<dt>Frantic efforts to avoid abandonment.</dt>
			<dd><ul class="ansArea">
					<li class="ans">Depression</li>
					<li class="ans">Schizophrenia</li>
					<li class="ans">Anxiety Disorder</li>
					<li class="ans">Bipolar Disorder</li>
					<li class="ans cor">Borderline Personality Disorder<span class="correct_statement">[correct]</span></li>
				</ul>
				<ul class="feedback">
					<li><span class="itemfeedback"></span></li>
				</ul>
			</dd>
			
			<dt>Sleep disturbance.</dt>
			<dd><ul class="ansArea">
					<li class="ans cor">Depression<span class="correct_statement">[correct]</span></li>
					<li class="ans cor">Schizophrenia<span class="correct_statement">[correct]</span></li>
					<li class="ans cor">Anxiety Disorder<span class="correct_statement">[correct]</span></li>
					<li class="ans cor">Bipolar Disorder<span class="correct_statement">[correct]</span></li>
					<li class="ans">Borderline Personality Disorder</li>
				</ul>
				<ul class="feedback">
					<li><span class="itemfeedback"></span></li>
				</ul>
			</dd>
        </dl>

</div>

</body>
</html>