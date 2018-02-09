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
<title>Timeline exercise</title>

<!--lib css-->
<link href="../lib/util/iniframe.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" href="css/opensans/stylesheet.css" type="text/css" charset="utf-8">
<link href="../lib/timeline/v1/css/timeline.min.css" rel="stylesheet" type="text/css">

<!--course/lesson css-->
<link href="css/course.css" rel="stylesheet" type="text/css">
<link href="css/instance.asd.css" rel="stylesheet" type="text/css">

<!--eduQuery Example css-->
<link href="../../css/eduqueryexample.css" rel="stylesheet" type="text/css">

<!--lib javascript-->
<script src="../lib/jquery/jquery-1.9.1.min.js" type="text/javascript"></script>
<script src="../lib/timeline/v1/js/timeline.min.js" type="text/javascript"></script>

<!--course/lesson javascript-->
<script src="js/asd.pcs.js" type="text/javascript"></script>
<script>
	$(function(){
		if(PCS && typeof PCS.runScriptForSlide === 'function'){
			PCS.runScriptForSlide(1, null); //null here because we don't need to pass in a context (the id is specified in the Timeline instantiation)
		}
		if ($('.description').height()) {
			//code	
			$('.written_example').css('height',$('.description').height());
		}
	});
</script>
</head>

<body id="ASD-13-NO6">

<div class="description_container">
	<div class="description">
		<header><h1>Description</h1></header>
		<p>Clickable dates/events along a timeline. Text and images are typically used in the content for each date/event.</p>
		<header><h1>Insert directions in the text field:</h1></header>
		<p>Directions: Click on each of the [dates or events] below to learn more.</p>
		<header><h1>Insert description copy in the UMN interaction field:</h1></header>
		<p>Interaction type: timeline</p>
		<p>Description: The learner will click [dates or events] along the timeline to learn more about each milestone</p>
	</div>	
	<div class="written_example">
		<header><h1>Interaction Write-up of this example for the UMN interaction field</h1></header>
		<p>1908 - Eugen Bleuler first used the term &ldquo;autism&rdquo; for patients with schizophrenia who appeared to be self-absorbed and that isolated themselves from others. The term autism originates from the Greek word &ldquo;auto&rdquo; meaning self. However, it was later learned that autism and schizophrenia are two completely different disorders.[image: none]<br/>
		<br/>
		1943 - Leo Kanner, an American child psychiatrist, conducted research with a group of children. His work helped identify common features of autism. These included social problems, rigidity, strong memory skills, echolalia, sensory issues, and a lack of imaginative play. He also used the term &ldquo;autism&rdquo; to refer to the solitary, withdrawn behaviors of these children.[image: none]<br/>
		<br/>
		1944 - Hans Asperger, an Austrian pediatrician, published research about children with similar traits to Kanner. His work was destroyed in World War II. Years later, people rediscovered his research and Asperger&rsquo;s Syndrome became an identified disability.[image: none]<br/>
		<br/>
		1960s - Bruno Bettelheim, an Austrian psychologist, wrote a book on children with autism called &ldquo;The Empty Fortress.&rdquo; He claimed their disorder was due to the cold, unfeeling nature of their parents which popularized the term &ldquo;refrigerator mothers.&rdquo; At the time this theory was widely accepted and many children and families suffered because of it. We now know that poor parenting skills and lack of parental attachment are NOT the causes of autism.  Bettelheim&rsquo;s ideas of autism are no longer accepted.[image: none]<br/>
		<br/>
		1965 - Bernard Rimland, a psychologist and parent of a child with autism, first introduces the idea that autism is a neurological disorder.  At this point he is able to refute the idea that it is caused by bad parenting.[image: none]<br/>
		<br/>
		1970s - First special education classes for children with autism are taught.[image: none]<br/>
		<br/>
		1980 - American Psychiatric Association adds autism to the Diagnostic and Statistical Manual (DSM) of Mental Disorders.[image: none]<br/>
		<br/>
		1990s - Significant increase in autism diagnosis. Reasons offered for increase include better awareness of the symptoms and diagnosis. They also include more public awareness, regional variations in diagnostic criteria, and environmental influences.[image: none]<br/>
		<br/>
		2000 - Significant attention to autism.  This lead to an increase in autism organizations, more  public awareness, and increased research funding.[image: none]<br/>
		<br/>
		2006 - President George Bush signs the &ldquo;Combating Autism Act of 2006&rdquo; with a focus on scientific research on the causes of autism as well as effective treatments.[image: none]<br/>
		<br/>
		2011 - President Obama signed the Combating Autism Reauthorization Act of 2011.[image: none]
		</p>
	</div>
	<div class="seClear"></div>
</div>
	
<div id="timeline1" class="timeline">
	<div class="timeline-controls"></div>
	<ul class="timeline-item-list">
		<li class="timeline-item">
			<h2 class="timeline-year">1908</h2>
			<div class="item-info">
				<p>Eugen Bleuler first used the term &ldquo;autism&rdquo; for patients with schizophrenia who appeared to be self-absorbed and that isolated themselves from others. The term autism originates from the Greek word &ldquo;auto&rdquo; meaning self. However, it was later learned that autism and schizophrenia are two completely different disorders.</p>
			</div>
		</li>
		<li class="timeline-item">
			<h2 class="timeline-year">1943</h2>
			<div class="item-info">
				<p>Leo Kanner, an American child psychiatrist, conducted research with a group of children. His work helped identify common features of autism. These included social problems, rigidity, strong memory skills, echolalia, sensory issues, and a lack of imaginative play. He also used the term &ldquo;autism&rdquo; to refer to the solitary, withdrawn behaviors of these children.</p>
			</div>
		</li>
		<li class="timeline-item">
			<h2 class="timeline-year">1944</h2>
			<div class="item-info">
				<p>Hans Asperger, an Austrian pediatrician, published research about children with similar traits to Kanner. His work was destroyed in World War II. Years later, people rediscovered his research and Asperger&rsquo;s Syndrome became an identified disability.</p>
			</div>
		</li>
		<li class="timeline-item">
			<h2 class="timeline-year">1960s</h2>
			<div class="item-info">
				<p>Bruno Bettelheim, an Austrian psychologist, wrote a book on children with autism called &ldquo;The Empty Fortress.&rdquo; He claimed their disorder was due to the cold, unfeeling nature of their parents which popularized the term &ldquo;refrigerator mothers.&rdquo; At the time this theory was widely accepted and many children and families suffered because of it. We now know that poor parenting skills and lack of parental attachment are NOT the causes of autism.  Bettelheim&rsquo;s ideas of autism are no longer accepted.</p>
			</div>
		</li>
		<li class="timeline-item">
			<h2 class="timeline-year">1960s</h2>
			<div class="item-info">
				<p>Bernard Rimland, a psychologist and parent of a child with autism, first introduces the idea that autism is a neurological disorder.  At this point he is able to refute the idea that it is caused by bad parenting. </p>
			</div>
		</li>
		<li class="timeline-item">
			<h2 class="timeline-year">1965</h2>
			<div class="item-info">
				<p>Autism Society of America (ASA) is founded by Rimland.  This begins the movement towards increased awareness.  It leads to improved diagnosis, and more effective treatment of persons with autism. </p>
			</div>
		</li>
		<li class="timeline-item">
			<h2 class="timeline-year">1970s</h2>
			<div class="item-info">
				<p>First special education classes for children with autism are taught.</p>
			</div>
		</li>
		<li class="timeline-item">
			<h2 class="timeline-year">1980</h2>
			<div class="item-info">
				<p>American Psychiatric Association adds autism to the Diagnostic and Statistical Manual (DSM) of Mental Disorders.</p>
			</div>
		</li>
		<li class="timeline-item">
			<h2 class="timeline-year">1990s</h2>
			<div class="item-info">
				<p>Significant increase in autism diagnosis. Reasons offered for increase include better awareness of the symptoms and diagnosis. They also include more public awareness, regional variations in diagnostic criteria, and environmental influences.</p>
			</div>
		</li>
		<li class="timeline-item">
			<h2 class="timeline-year">2000</h2>
			<div class="item-info">
				<p>Significant attention to autism.  This lead to an increase in autism organizations, more  public awareness, and increased research funding.</p>
			</div>
		</li>
		<li class="timeline-item">
			<h2 class="timeline-year">2006</h2>
			<div class="item-info">
				<p>President George Bush signs the &ldquo;Combating Autism Act of 2006&rdquo; with a focus on scientific research on the causes of autism as well as effective treatments.</p>
			</div>
		</li>
		<li class="timeline-item">
			<h2 class="timeline-year">2011</h2>
			<div class="item-info">
				<p>President Obama signed the Combating Autism Reauthorization Act of 2011.</p>
			</div>
		</li>
	</ul>
</div>

</body>
</html>