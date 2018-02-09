<?php
require "../../inc/auth.php";
?>
<!DOCTYPE HTML>
<!--[if lt IE 7]> <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang="en"> <![endif]-->
<!--[if IE 7]>    <html class="no-js lt-ie9 lt-ie8" lang="en"> <![endif]-->
<!--[if IE 8]>    <html class="no-js lt-ie9" lang="en"> <![endif]-->
<!--[if gt IE 8]> <!--> <html class="no-js" lang="en"> <!--<![endif]-->
<html lang="en">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Lifestyle Assessment</title>

<!--lib css-->
<link href="../lib/slidescroller/v12/css/styles.css" rel="stylesheet" type="text/css">

<!--course/lesson css-->
<link href="css/course.css" rel="stylesheet" type="text/css">
<link href="css/instance.mh6.css" rel="stylesheet" type="text/css">

<!--eduQuery Example css-->
<link href="../../css/eduqueryexample.css" rel="stylesheet" type="text/css">

<!--lib javascript-->
<script src="../lib/jquery/jquery-1.7.min.js" type="text/javascript"></script>
<script src="../lib/slidescroller/v12/js/slidescroller.audio.min.js" type="text/javascript"></script>
<script src="../lib/slidescroller/v12/js/pss.js" type="text/javascript"></script>

<!--course/lesson javascript (slideshow slide js too)-->
<script src="js/mh6.pcs.js" type="text/javascript"></script>
<script>
	$(function(){
		if(PCS && typeof PCS.runScriptForSlide === 'function'){
			PCS.runScriptForSlide(45, $('#slideScroll'));
		}
		if ($('.description').height()) {
			//code	
			$('.written_example').css('height',$('.description').height());
		}
	});
</script>
</head>

<body id="MH6-45-NO5">
	<div class="description_container">
		<div class="description">
			<header><h1>Description</h1></header>
			<p>This use of the Slide Scroller provides a way for the learner to respond to a series of questions or statements. The information gathered from the responces is used to provide meaningful feedback. This information is not saved and the responces are reset upon returning to the first slide.</p>
			<header><h1>Insert directions in the text field:</h1></header>
			<p>Directions: Answer each of the questions below. Your answers will be used to provide meaningful feedback, but they will not be stored or seen by anyone but you. When you are ready to move to the next slide, click on the arrow.</p>
			<header><h1>Insert description copy in the UMN interaction field:</h1></header>
			<p>Interaction type: slidescroller - using learner input</p>
			<p>Description: The learner provides input on a series of questions, and then receives meaningful feedback on their answers.</p>
		</div>	
		<div class="written_example">
			<header><h1>Interaction Write-up of this example for the UMN interaction field</h1></header>
			
			<p>Slide #1: (informtion collection)<br/>
				<br/>
				Enter the initials of a client:<br/>
				<br/>
				Please answer each item with yes or no:<br/>
				<br/>
				This person is moderately active most days. He or she is up moving around for at least an hour a day gardeni<br/>ng, walking, cleaning, or doing some other physical activity.<br/>
				Yes<br/>
				No [if selected, responce: The benefits of staying active.]<br/>
				<br/>
				This person engages in rigorous exercise of some sort for 30 minutes at least 3 times a week. Examples include fast walking, running, fast biking, dancing, work out classes, or yoga.<br/>
				Yes<br/>
				No[if selected, responce: The benefits of regular rigorous exercise ]<br/>
				<br/>
				This person eats 3-6 fruits and vegetables each day.<br/>
				Yes<br/>
				No[if selected, responce: The benefits of eating fresh fruits and vegetables.]<br/>
				<br/>
				This person eats high sugar, high fat foods each day.<br/>
				Yes[if selected, responce: The risks of too much sugar, salt, or fat in a diet.]<br/>
				No<br/>
				<br/>
				This person has more than 5 alcoholic drinks per week or more than 3 in one day.<br/>
				Yes[if selected, responce: The risks of drinking too much.]<br/>
				No<br/>
				<br/>
				This person smokes cigarettes.<br/>
				Yes[if selected, responce: The risks of smoking.]<br/>
				No<br/>
				<br/>
				This person takes prescription medications.<br/>
				Yes[if selected, responce: Benefits of good medication management.]<br/>
				No<br/>
				<br/>
				This person takes anti-psychotic medications.<br/>
				Yes[if selected, responce: Risk of anti-psychotics and their management.]<br/>
				No<br/>
				<br/>
				This person uses illegal drugs.<br/>
				Yes[if selected, responce: Risks of illegal drug use.]<br/>
				No<br/>
				<br/>
				This person has unprotected sex or sex with multiple partners.<br/>
				Yes[if selected, responce: Risks of unprotected sex and benefits of good sexual health habits.]<br/>
				No<br/>
				<br/>
				This person has regular medical check ups and preventative care.<br/>
				Yes<br/>
				No[if selected, responce: Benefits of regular medical check ups and preventative care and support to obtain them.]<br/>
				<br/>
				This person has regular dental check ups and preventative care.<br/>
				Yes<br/>
				No[if selected, responce: Benefits of regular dental check ups and preventative care and support to obtain them.]<br/>
				<br/>
				This person spends time each week with others he/she enjoys.<br/>
				Yes<br/>
				No[if selected, responce: Stress management and support for developing and maintaining positive relationships and activities.]<br/>
				<br/>
				This person sleeps regular hours and at least 7-9 hours a day.<br/>
				Yes<br/>
				No[if selected, responce: The benefits of regular sleep to overall health.]<br/>
				<br/>
				Slide #2: (results)<br/>
				<br/>
				You completed a health risk assessment on: (initials)<br/>
				<br/>
				This person appears to be at (risk level) risk for health problems due to lifestyle or other issues.<br/>
				If less than 3 items trigger a responce: risk level = "low."<br/>
				If between 4 and 7 items trigger a responce: risk level = "moderate."<br/>
				If greater than 7 items trigger a responce: risk level = "significant."<br/>
				<br/>
				If "This person smokes cigarettes." triggers a responce, show this paragraph:<br/>
				Smoking is a serious health risk factor that is preventable. Quitting smoking always has immediate, long-term and significant improvement in a person&rsquo;s health. A consultation with a professional who prescribes medication should be completed for a person on psychotropic medications before the person attempts to quit. It may have an effect on the person&rsquo;s response to medications or behavior.<br/>
				<br/>
				If "This person takes anti-psychotic medications." triggers a responce, show this paragraph:<br/>
				Anti-psychotics may be a very important part to a person&rsquo;s recovery. But they may also have many strong effects on the body that make staying healthy even more challenging. Weight and blood sugar may be affected. Monitoring these regularly is important. People may crave certain food or drinks such as large quantities of soda. Positive support and encouragement for a healthy lifestyle are even more important.<br/>
				<br/>
				Continue to support (initials) in making healthy choices. Consider discussing any concerns you have with (initials) and making a plan to help support improved health outcomes. Areas of education and support to consider regarding those questions answered for this person include:<br/>
				(list triggered responces here)<br/>
			</p>
		</div>
		<div class="seClear"></div>
	</div>


<!--SLIDESCROLLER STARTS HERE -->
<div id="scrollerContained" style="width:800px;height:1325px;margin:0 auto;border:1px solid #666;">

	<div id="navi">
      	<h1>Lifestyle Assessment</h1>
	</div>
  
  	<div id="slideScroll">
        
        <div id="p1" class="panel">
			<div class="OneColumn">
				<h2>Lifestyle Assessment</h2>
				<form >
				<fieldset>
					 <legend class="hidden">Client information</legend>
				<label for="ci">Enter the initials of a client:<input type="text" id="ci" name="ci" value="" maxlength="3"/><span class="labelhelper">3 Letters Maximum</span></label>
				</fieldset>
				<fieldset>
				<legend class="hidden">Lifestyle Assessment Information</legend>
				<p>Please answer each item with yes or no:</p>
					<ul>
						<li>
							<fieldset>
								<legend><span>This person is moderately active most days. He or she is up moving around for at least an hour a day gardening, walking, cleaning, or doing some other physical activity.</span></legend>
								<input type="radio" name="0" id="0_1" value="yes"><label for="0_1">Yes</label>
								<input type="radio" name="0" id="0_2" value="no"><label for="0_2">No</label>
							</fieldset>
						</li>
						<li>
							<fieldset>
								<legend><span>This person engages in rigorous exercise of some sort for 30 minutes at least 3 times a week. Examples include fast walking, running, fast biking, dancing, work out classes, or yoga.</span></legend>
								<input type="radio" name="1" id="0_3" value="yes"><label for="0_3">Yes</label>
								<input type="radio" name="1" id="0_4" value="no"><label for="0_4">No</label>
							</fieldset>
						</li>
						<li>
							<fieldset>
								<legend><span>This person eats 3-6 fruits and vegetables each day.</span></legend>
								<input type="radio" name="2" id="0_5" value="yes"><label for="0_5">Yes</label>
								<input type="radio" name="2" id="0_6" value="no"><label for="0_6">No</label>
							</fieldset>
						</li>
						<li>
							<fieldset>
								<legend><span>This person eats high sugar, high fat foods each day.</span></legend>
								<input type="radio" name="3" id="0_7" value="yes"><label for="0_7">Yes</label>
								<input type="radio" name="3" id="0_8" value="no"><label for="0_8">No</label>
							</fieldset>
						</li>
						<li>
							<fieldset>
								<legend><span>This person has more than 5 alcoholic drinks per week or more than 3 in one day.</span></legend>
								<input type="radio" name="4" id="0_9" value="yes"><label for="0_9">Yes</label>
								<input type="radio" name="4" id="0_10" value="no"><label for="0_10">No</label>
							</fieldset>
						</li>
						<li>
							<fieldset>
								<legend><span>This person smokes cigarettes.</span></legend>
								<input type="radio" name="5" id="0_11" value="yes"><label for="0_11">Yes</label>
								<input type="radio" name="5" id="0_12" value="no"><label for="0_12">No</label>
							</fieldset>
						</li>
						<li>
							<fieldset>
								<legend><span>This person takes prescription medications.</span></legend>
								<input type="radio" name="6" id="0_13" value="yes"><label for="0_13">Yes</label>
								<input type="radio" name="6" id="0_14" value="no"><label for="0_14">No</label>
							</fieldset>
						</li>
						<li>
							<fieldset>
								<legend><span>This person takes anti-psychotic medications.</span></legend>
								<input type="radio" name="7" id="0_15" value="yes"><label for="0_15">Yes</label>
								<input type="radio" name="7" id="0_16" value="no"><label for="0_16">No</label>
							</fieldset>
						</li>
						<li>
							<fieldset>
								<legend><span>This person uses illegal drugs.</span></legend>
								<input type="radio" name="8" id="0_17" value="yes"><label for="0_17">Yes</label>
								<input type="radio" name="8" id="0_18" value="no"><label for="0_18">No</label>
							</fieldset>
						</li>
						<li>
							<fieldset>
								<legend><span>This person has unprotected sex or sex with multiple partners.</span></legend>
								<input type="radio" name="9" id="0_19" value="yes"><label for="0_19">Yes</label>
								<input type="radio" name="9" id="0_20" value="no"><label for="0_20">No</label>
							</fieldset>
						</li>
						<li>
							<fieldset>
								<legend><span>This person has regular medical check ups and preventative care.</span></legend>
								<input type="radio" name="10" id="0_21" value="yes"><label for="0_21">Yes</label>
								<input type="radio" name="10" id="0_22" value="no"><label for="0_22">No</label>
							</fieldset>
						</li>
						<li>
							<fieldset>
								<legend><span>This person has regular dental check ups and preventative care.</span></legend>
								<input type="radio" name="11" id="0_23" value="yes"><label for="0_23">Yes</label>
								<input type="radio" name="11" id="0_24" value="no"><label for="0_24">No</label>
							</fieldset>
						</li>
						<li>
							<fieldset>
								<legend><span>This person spends time each week with others he/she enjoys.</span></legend>
								<input type="radio" name="12" id="0_25" value="yes"><label for="0_25">Yes</label>
								<input type="radio" name="12" id="0_26" value="no"><label for="0_26">No</label>
							</fieldset>
						</li>
						<li>
							<fieldset>
								<legend><span>This person sleeps regular hours and at least 7-9 hours a day.</span></legend>
								<input type="radio" name="13" id="0_27" value="yes"><label for="0_27">Yes</label>
								<input type="radio" name="13" id="0_28" value="no"><label for="0_28">No</label>
							</fieldset>
						</li>
					</ul>
				<p>Click the arrow on the right to continue.</p>
				</fieldset>
				</form>
			</div>
        	
            <div class="controls"></div>
        </div>
        
        <div id="p2" class="panel">
			<div class="OneColumn">
				<h2 class="feedback">Lifestyle Assessment Feedback</h2>
				<p>You completed a health risk assessment on: <span class="name"></span></p>
				<p>This person appears to be at <span class="ranking"></span> risk for health problems due to lifestyle or other issues.</p>
				<p id="smoking">Smoking is a serious health risk factor that is preventable. Quitting smoking always has immediate, long-term and significant improvement in a person&rsquo;s health. A consultation with a professional who prescribes medication should be completed for a person on psychotropic medications before the person attempts to quit. It may have an effect on the person&rsquo;s response to medications or behavior.</p>
				<p id="meds">Anti-psychotics may be a very important part to a person&rsquo;s recovery. But they may also have many strong effects on the body that make staying healthy even more challenging. Weight and blood sugar may be affected. Monitoring these regularly is important. People may crave certain food or drinks such as large quantities of soda. Positive support and encouragement for a healthy lifestyle are even more important.</p>
				<p>Continue to support <span class="name"></span> in making healthy choices. Consider discussing any concerns you have with <span class="name"></span> and making a plan to help support improved health outcomes. <span class="areas">Areas of education and support to consider regarding those questions answered for this person include:</span></p>
				<div id="results"></div>
			</div>
			
            <div class="controls"></div>
		</div>
	</div><!--END #slideScroll-->
	
</div>

</body>

</html>