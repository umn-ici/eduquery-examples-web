<?php
require "../../inc/auth.php";
?>
<!DOCTYPE HTML>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Lifting and Transferring</title>

<!--lib css-->
<link href="../lib/slidescroller/v12/css/styles.css" rel="stylesheet" type="text/css">
<link href="../lib/jPlayer/v20/skin/jplayer.blue.monday.css" rel="stylesheet" type="text/css">

<!--course/lesson css-->
<link href="css/course.css" rel="stylesheet" type="text/css">

<!--eduQuery Example css-->
<link href="../../css/eduqueryexample.css" rel="stylesheet" type="text/css">

<!--lib javascript-->
<script src="../lib/jquery/jquery-1.7.min.js" type="text/javascript"></script>
<script src="../lib/jPlayer/v20/jquery.jplayer.min.js" type="text/javascript"></script>
<script src="../lib/slidescroller/v12/js/slidescroller.audio.min.js" type="text/javascript"></script>
<script src="../lib/slidescroller/v12/js/pss.js" type="text/javascript"></script>

<!--course/lesson javascript (slideshow slide js too)-->
<script src="js/pec2.pcs.js" type="text/javascript"></script>
 
<script>
	$(function(){
		if(PCS && typeof PCS.runScriptForSlide === 'function'){
			PCS.runScriptForSlide(28, $('#slideScroll'));
		}
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
					<p>This use of the Slide Scroller provides information in a slide by slide progression. </p>
					<header><h1>Insert directions in the text field:</h1></header>
					<p>Directions: Read the information presented on each of the slides. When you are ready to go on to the next slide, click on the arrow.</p>
					<header><h1>Insert description copy in the UMN interaction field:</h1></header>
					<p>Interaction type: slidescroller - basic</p>
					<p>Description: The learner scrolls through a narrated slideshow.</p>
				</div>	
				<div class="written_example">
					<header><h1>Interaction Write-up of this example for the UMN interaction field</h1></header>
					
					<p>
						Slide #1: When you lift or transfer a person, make sure you can do it safely. Ask questions before you transfer someone for the first time.<br/>
						Image Description: A photo of a person in a wheelchair and a home care provider in a conversation.<br/> 
						<br/>
						Slide #2: Tell the person what you are going to do before you do it.<br/>
						Image Description: A photo of a person in a wheelchair and a home care provider with the provider about to transfer them.<br/>
						<br/>
						Slide #3: Count &ldquo;1-2-3&rdquo; before you move someone.<br/>
						Image Description: A photo of a person in a wheelchair and a home care provider with the provider holding the person under the armpits.<br/>
						<br/>
						Slide #4: Never hold a person&rsquo;s neck or joints when you lift or transfer him or her. For example, elbows, shoulders, or wrists.<br/>
						Image Description: A photo of a person in a wheelchair and a home care provider, the provider is about to transfer someone with a focus on their arms holding the person before transferring.<br/>
						<br/>
						Slide #5: Use your arms to support a person&rsquo;s body when lifting.<br/>
						Image Description: A photo of a person in a wheelchair and a home care provider with the provider about to transfer someone, holding the person and the provider looking next to the wheelchair, looking for anything on the floor.<br/>
						<br/>
						Slide #6: Before you lift or transfer look around to see if there&rsquo;s anything you might trip over. Remove it. An example is a rug.<br/>
						Image Description: A photo of a person in a wheelchair and a home care provider about to transfer someone, with a focus on the provider&rsquo;s feet and torso.<br/>
						<br/>
						Slide #7: Don&rsquo;t lift someone heavier than yourself unless you&rsquo;ve received training.<br/>
						Image Description: A photo of a person in a wheelchair and a home care provider about to transfer someone, with a side view of provider&rsquo;s knees and back.<br/>
						<br/>
						Slide #8: Spread your feet about shoulder-width apart with one foot slightly in front of the other. This will give you a good base of support.<br/>
						Image Description: A photo of a person in a wheelchair and a home care provider about to transfer someone, a profile view of the provider and person in a close position, about to be lifted.<br/>
						<br/>
						Slide #9: Bend at the knees instead of at the waist.<br/>
						Image Description: A photo of a person in a wheelchair and a home care provider in the middle of being lifted; halfway lifted up; a profile view of the provider and person with a focus on the legs in a bent position.<br/>
						<br/>
						Slide #10: Keep your back as straight as possible. Bring the person as close to you as you can. Lift with your legs muscles, not your back muscles. Keep your back, feet, and trunk all in the same direction. Do not twist your waist.<br/>
						Image Description: A photo of a person in a wheelchair and a home care provider standing up and almost done w/ the transfer. A profile view of the provider and person being transferred to the bed, with a view of the provider finished pivoting the person without their back twisting. The provider is about to sit the person on the edge of the bed.<br/>
					</p>
				</div>
				<div class="seClear"></div>
			</div>

<!--SLIDESCROLLER STARTS HERE -->
<div id="scrollerContained" style="width:780px;height:625px;margin:0 auto;border:1px solid #666;">

	<div id="navi">
      	<h1>Lifting and Transferring</h1>
	</div>
  
  	<div id="slideScroll">
      
        <div id="p1" class="panel">
        	<div class="OneColumn" style="width:266px;">
            	<h2><img src="images/PEC2-28-P6-S1.JPG" /></h2>
            	<p class="imgcaption">When you lift or transfer a person, make sure you can do it safely. Ask questions before you transfer someone for the first time.</p>
            </div>
            
            <div class="controls">
                
            </div>
        </div>
        
        <div id="p2" class="panel">
        	<div class="OneColumn" style="width:266px;">
            <h2><img src="images/PEC2-28-P6-S2.JPG" /></h2>
            <p class="imgcaption">Tell the person what you are going to do before you do it.</p>
            </div>
            <div class="controls">
                
            </div>
        </div>
        
        <div id="p3" class="panel">
        	<div class="OneColumn" style="width:266px;">
            <h2><img src="images/PEC2-28-P6-S3.JPG" /></h2>
            <p class="imgcaption">Count “1-2-3” before you move someone.</p>
            </div>
            
            <div class="controls">
             
            </div>
        </div>
        
        <div id="p4" class="panel">
        	<div class="OneColumn" style="width:266px;">
            <h2><img src="images/PEC2-28-P6-S4.JPG" /></h2>
            <p class="imgcaption">Never hold a person’s neck or joints when you lift or transfer him or her. For example, elbows, shoulders, or wrists.</p>
            </div>
            
            <div class="controls">
                
            </div>
        </div>
        
        <div id="p5" class="panel">
        	<div class="OneColumn" style="width:266px;">
            <h2><img src="images/PEC2-28-P6-S5.JPG" /></h2>
            <p class="imgcaption">Use your arms to support a person’s body when lifting.</p>
            </div>
            
            <div class="controls">
                
            </div>
        </div>
        
        <div id="p6" class="panel">
        	<div class="OneColumn" style="width:266px;">
            <h2><img src="images/PEC2-28-P6-S6.JPG" /></h2>
            <p class="imgcaption">Before you lift or transfer look around to see if there’s anything you might trip over. Remove it. An example is a rug.</p>
            </div>
            
            <div class="controls">
                
            </div>
        </div>
        
        <div id="p7" class="panel">
        	<div class="OneColumn" style="width:266px;">
            <h2><img src="images/PEC2-28-P6-S7.JPG" /></h2>
            <p class="imgcaption">Don’t lift someone heavier than yourself unless you’ve received training.</p>
            </div>
            
            <div class="controls">
                
            </div>
        </div>
        
        <div id="p8" class="panel">
        	<div class="OneColumn" style="width:266px;">
            <h2><img src="images/PEC2-28-P2-S8.JPG" /></h2>
            <p class="imgcaption">Spread your feet about shoulder-width apart with one foot slightly in front of the other. This will give you a good base of support.</p>
            </div>
            
            <div class="controls">
               
            </div>
        </div>
        
        <div id="p9" class="panel">
        	<div class="OneColumn" style="width:266px;">
            <h2><img src="images/PEC2-28-P6-S9.JPG" /></h2>
            <p class="imgcaption">Bend at the knees instead of at the waist.</p>
            </div>
            
            <div class="controls">
                
            </div>
        </div>
        <div id="p10" class="panel">
        	<div class="OneColumn" style="width:266px;">
            <h2><img src="images/PEC2-28-P6-S10.JPG" /></h2>
            <p class="imgcaption">Keep your back as straight as possible. Bring the person as close to you as you can. Lift with your legs muscles, not your back muscles. Keep your back, feet, and trunk all in the same direction. Do not twist your waist.</p>
            </div>
            
            <div class="controls">
                
            </div>
        </div>

	</div><!--END #slideScroll-->
	
</div>

</body>

</html>