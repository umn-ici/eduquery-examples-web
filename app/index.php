<?php
require "inc/auth.php";
?>
<!doctype html>
<!--[if lt IE 7]> <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang="en"> <![endif]-->
<!--[if IE 7]>    <html class="no-js lt-ie9 lt-ie8" lang="en"> <![endif]-->
<!--[if IE 8]>    <html class="no-js lt-ie9" lang="en"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang="en"> <!--<![endif]-->
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>eduQuery Examples</title>
<link href="css/styles.css" rel="stylesheet" type="text/css">
</head>

<body>
	
	<h1>eduQuery examples</h1>
	
	<div class="mainmenu">
	
		<dl class="main">
			
			<dt><strong>Matching</strong></dt>
			<dd>
				<p>Match statements/words/etc with catagories/groups/sentence-blanks. Customizable feedback for correct and incorrect answers, and finishing the interaction.</p>
				<div class="controls">
					<ul>
						<li><a href="eduQuery/HLO/HLO1-10-NO1updated.php" data-height="900"><img src="images/matchingTypical.jpg"/>Typical use</a></li>
						<li><a href="eduQuery/IPDS/IPDS4-8-NO1updated.php" data-height="1025"><img src="images/matchingFITB.jpg"/>Fill in the blank</a></li>
						<!--<li><a href="matching_withascenario.htm"  rel="matching_withascenario.htm"><img src="images/matchingScenario.jpg"/>With a related scenario</a></li>-->
					</ul>
				</div>
			</dd>
			
			<dt><strong>Multiple-choice</strong></dt>
			<dd>
				<p>One answer per question. Customizable feedback for correct and incorrect answers, and finishing the interaction.</p>
				<div class="controls">
					<ul>
						<li><a href="eduQuery/RR/RR4-31-NO3.php" data-height="973"><img src="images/multiTypical.jpg"/>One question at a time</a></li>
						<li><a href="eduQuery/BPE/BPE1-22-NO2showAll.php" data-height="1225"><img src="images/multiShowAll.jpg"/>View all questions</a></li>
					</ul>
				</div>
			</dd>
			
			<dt><strong>Scenario</strong></dt>
			<dd>
				<p>Scenarios allow for a context, such a story or documentation example, to be provided. Other eduQuery interactions can added, like a Matching or Multiple Choice.</p>
				<div class="controls">
					<ul>
						<li><a href="eduQuery/SP/SP8-9-NO2.php" data-height="1100"><img src="images/matchingScenario.jpg"/>With Matching</a></li>
					</ul>
				</div>
			</dd>
			
			<!--<dt><strong>Multi-match</strong></dt>
			<dd>
				<p>Multiple choice with more than one answer per question. Customizable feedback for completed answers, and finishing the interaction.</p>
				<div class="controls">
					<ul>
						<li><a href="eduQuery/MH/MH2-46-NO8.php" data-height="1280"><img src="images/multimatch.jpg"/>Typical use</a></li>
					</ul>
				</div>
			</dd>-->
			
			<dt><strong>Slidescroller</strong></dt>
			<dd>
				<p>Navigate through multiple slides of content. Optionally slides can be narrated. Pretty much anything can be on a slide (other eduQuery interactions in particular).</p>
				<div class="controls">
					<ul>
						<li><a href="eduQuery/PEC/PEC2-28-NO5.php" data-height="1000"><img src="images/ssNar.jpg"/>Narrated slide show</a></li>
						<li><a href="eduQuery/RR/RR3-15-NO2.php" data-height="1100"><img src="images/sseduQuery.jpg"/>Using eduQuery interactions</a></li>
						<li><a href="eduQuery/MH/MH6-45-NO5.php" data-height="1750"><img src="images/ssForm.jpg"/>Using user input</a></li>
					</ul>
				</div>
			</dd>

			<dt><strong>Show More</strong></dt>
			<dd>
				<p>Simple text reveal.</p>
				<div class="controls">
					<ul>
						<li><a href="eduQuery/MHP/MHP1-1-NO1.html" data-height="1400"><img src="images/showmore.png"/>Typical use</a></li>
					</ul>
				</div>
			</dd>
			
			<dt><strong>Tabbed Info</strong></dt>
			<dd>
				<p>Simple layered content. Pictures and links to outside resources can be added.</p>
				<div class="controls">
					<ul>
						<li><a href="eduQuery/MH/MH1-23-NO5.php" data-height="750"><img src="images/tabbedContent.jpg"/>Typical use</a></li>
						<li><a href="eduQuery/TCC/TCC10-4-NO1.php" data-height="750"><img src="images/tabbedContentWithPics.jpg"/>With Pictures</a></li>
						<li><a href="eduQuery/TL2/TL2-7-NO1.php" data-height="1000"><img src="images/tabbedContentWithLinks.jpg"/>With Links</a></li>
					</ul>
				</div>
			</dd>
			
			<dt><strong>Captioned Voiceclips</strong></dt>
			<dd>
				<p>Voiceclips with the sort of timed captions you typically see with video.</p>
				<div class="controls">
					<ul>
						<li><a href="eduQuery/RRWv2/RRWv22-2-VC1.php" data-height="250"><img src="images/vc.jpg"/>Typical use</a></li>
					</ul>
				</div>
			</dd>
			
			<dt><strong>Captioned Video HTML5/Flash-backup</strong></dt>
			<dd>
				<p>This shows how we're presenting captioned video.</p>
				<div class="controls">
					<ul>
						<li><a href="eduQuery/MH/MH6-36-V1.php" data-height="650"><img src="images/movieposter.jpg"/>Typical use</a></li>
					</ul>
				</div>
			</dd>
			
			<dt><strong>Timeline</strong></dt>
			<dd>
				<p>Clickable dates/events along a timeline.</p>
				<div class="controls">
					<ul>
						<li><a href="eduQuery/ASD/ASD-13-NO6.php" data-height="700"><img src="images/timeline.png"/>Typical use</a></li>
					</ul>
				</div>
			</dd>
           
            <dt><strong>PullQuote</strong></dt>
			<dd>
				<p>The pullquote is used to off-set and seperate a simple textblock or a textblock with a photo.</p>
				<div class="controls">
					<ul>
						<li><a href="eduQuery/DC/DC1-5-NO2.php" data-height="627"><img src="images/pullquote.jpg"/>Typical use</a></li>
					</ul>
				</div>
			</dd>
			
		</dl>
	</div>

<script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
<script>window.jQuery || document.write('<script src="js/vendor/jquery-1.9.1.min.js"><\/script>')</script>
<script src="js/the_sampler_cometh.js"></script>

</body>
</html>
