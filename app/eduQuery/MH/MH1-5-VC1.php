<?php
require "../../inc/auth.php";
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>Flash Captioned Voiceclip</title>
<link href="../lib/util/iniframe.css" rel="stylesheet" type="text/css">
<!--eduQuery Example css-->
<link href="../../css/eduqueryexample.css" rel="stylesheet" type="text/css">
<script src="../lib/jquery/jquery-1.7.min.js" type="text/javascript"></script>
<script src="../lib/swfobject/v22/swfobject.js" type="text/javascript"></script>
<script type="text/javascript">
var flashvars = {
	mp3filepath: 'MH1-5-VC1.mp3',
	captionsfilepath: 'MH1-5-VC1.srt'};
var params = {
	wmode: 'transparent'};
swfobject.embedSWF("../lib/vccaptioned/v10/playVoiceClipCaptioned.swf", "myContent", "400", "60", "10.0.0", false, flashvars, params, null);
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
			<p>Voiceclips with the sort of timed captions you typically see with video. The scripting for this is placed in the &quot;Voice clip&quot; field within the FMP file.</p>
			<header><h1>Insert directions in the text field:</h1></header>
			<p>Interaction type: captioned voiceclips - typical use</p>
			<p>Directions: Click on the &ldquo;Voice Clip&rdquo; icon to hear [insert a short description of what they will hear, for example: &#8230; to hear a DSP talk about how to recognize a manic phase].</p>
		</div>	
		<div class="written_example">
			<header><h1>Interaction Write-up of this example for the &quot;Voice clip&quot; field</h1></header>
			
			<p>Script (character description, if needed): How do we know Jerry&rsquo;s cycling into a manic phase? He won&rsquo;t sleep or sit still. And this will happen for several days in a row. He paces or roams from room to room all day and night. This continues until we get his medications back in order. <br/>
			</p>
		</div>
		<div class="seClear"></div>
	</div>
<div id="myContent">
  <p>In order to hear this voiceclip you'll need the <a href="http://get.adobe.com/flashplayer/">latest version of the Adobe Flash Player</a> installed, and javascript enabled in your browser.</p>
</div>

</body>
</html>