<?php
require "../../inc/auth.php";
?>
<!DOCTYPE html>
<html>
<head>
<title>Video Player</title>

<!--lib css-->
<link href="../lib/util/iniframe.css" rel="stylesheet" type="text/css">
<!--eduQuery Example css-->
<link href="../../css/eduqueryexample.css" rel="stylesheet" type="text/css">
<!-- Change URLs to wherever Video.js files will be hosted -->
<link href="../lib/video-js/video-js.min.css" rel="stylesheet" type="text/css">
<!-- video.js must be in the <head> for older IEs to work. -->
<script src="../lib/jquery/jquery-1.7.min.js" type="text/javascript"></script>
<script src="../lib/video-js/video.min.js"></script>

<!-- Unless using the CDN hosted version, update the URL to the Flash SWF -->
<script>
  _V_.options.flash.swf = "../lib/video-js/video-js.swf";
  $(function(){
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
			<p>This shows how we&rsquo;re presenting captioned video. The scripting for this is placed in the &quot;Video&quot; field within the FMP file.</p>
			<header><h1>Insert directions in the text field:</h1></header>
			<p>Interaction type: captioned video - typical use</p>
			<p>Directions: Click on the &ldquo;Video Clip&rdquo; icon to watch [insert a short description of what they will see, for example: &#8230; a demonstration of a lifting and transferring techniques].</p>
		</div>	
		<div class="written_example">
			<header><h1>Interaction Write-up of this example for the &quot;Video&quot; field</h1></header>
			
			<p>Please note that these two actors will be in a series of videos on future pages.<br/>
                <br/>
                A woman waiting in a car looking at two men talking in front of an apartment building through the windshield. One man is holding papers and looking at them and asking the other questions. The other is answering and looking eager. The first one hands him the papers and shakes his head &ldquo;no&rdquo; and walks off. The remaining man, looks down trodden, heads toward in the car and gets in.<br/>
                <br/>
                Woman: How did it go Jim?<br/>
                <br/>
                Man (Jim): Not so good. <br/>
                <br/>
                Woman: Didn&rsquo;t they have any apartments open?<br/>
                <br/>
                Man: No, he said they did.<br/>
                <br/>
                Woman: So what&rsquo;s the problem? Why didn&rsquo;t you go in and look at them?<br/>
                <br/>
                Man: Forget about it.<br/>
                <br/>
                Woman (little bit frustrated and worried.): Jim, what&rsquo;s going on? What did he say?<br/>
                <br/>
                Jim (Pausing, embarrassed): Ok, he said he recognized me. He said he saw me sleeping at the park last year. I told him I was having trouble then, but I&rsquo;m okay now. But&#8230; he said he couldn&rsquo;t rent to someone like me. He said the other tenants might not like it. He didn&rsquo;t want to risk it.<br/>
                <br/>
                Woman: He can&rsquo;t do that! That&rsquo;s not legal. Let&rsquo;s go talk to him!<br/>
                <br/>
                Jim: No! Forget it. I just want to go back to my sister&rsquo;s house.<br/>
                <br/>
                Woman (Considers for a minute): Okay, let&rsquo;s go.<br/>
			</p>
		</div>
		<div class="seClear"></div>
	</div>
  <video id="example_video_1" class="video-js vjs-default-skin" controls preload="none" width="480" height="270"
      poster="MH6-36-V1-medium-poster.jpg"
      data-setup="{}">
    <source src="MH6_36_V1-medium.mp4" type='video/mp4'/>
    <track kind="captions" src="MH6-36-V1.srt" srclang="en" label="English" default/>
  </video>

</body>
</html>