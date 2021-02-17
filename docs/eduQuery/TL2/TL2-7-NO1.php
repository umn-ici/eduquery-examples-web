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
<title>Tabbed information</title>

<!--lib css-->
<link href="../lib/util/iniframe.css" rel="stylesheet" type="text/css">
<link href="../lib/tabbedinfo/v1/css/tabbedinfo.css" rel="stylesheet" type="text/css">
	
<!--course/lesson css-->
<link href="css/instance.tl2.css" rel="stylesheet" type="text/css">
<!--eduQuery Example css-->
<link href="../../css/eduqueryexample.css" rel="stylesheet" type="text/css">
<!--lib javascript-->
<script src="../lib//jquery/jquery-1.7.min.js" type="text/javascript"></script>
<script src="../lib/tabbedinfo/v1/js/tabbedinfo.min.js" type="text/javascript"></script>

<!--course/lesson javascript-->
<script src="js/tl2.pcs.js" type="text/javascript"></script>
<script>
	$(function(){
		if(PCS && typeof PCS.runScriptForSlide === 'function'){
			PCS.runScriptForSlide(7, $('#tabbed-info'));
		}
		if ($('.description').height()) {
			//code	
			$('.written_example').css('height',$('.description').height());
		}
	});
</script>
</head>

<body id="TL2-7-NO1">
	<div class="description_container">
		<div class="description_container">
		<div class="description">
			<header><h1>Description</h1></header>
			<p>The Tabbed Info interaction is a way to convay information to the learner with groups of related topics. This case involves many topics in a sequence with a link to an outside resource in each topic.</p>
			<header><h1>Insert directions in the text field:</h1></header>
			<p>Directions: Click on each of the tabs below to learn more.</p>
			<header><h1>Insert description copy in the UMN interaction field:</h1></header>
			<p>Interaction type: tabbed info - with links</p>
			<p>Description: The learner clicks on tabs to learn more about each item. There are links to helpful resources and information.</p>
		</div>	
		<div class="written_example">
			<header><h1>Interaction Write-up of this example for the UMN interaction field</h1></header>
			
			<p>Medicare<br/>
				<br/>
				Medicare is a health insurance program for someone over age 65. It also covers some people under 65 who are disabled or someone with permanent kidney failure. Medicare pays for medical care and hospital services. It also covers some other medical needs. This might include things like prescriptions, home care, and skilled nursing home care.<br/>
				For more information go to the Web site at: http://www.cms.hhs.gov/<br/>
				<br/>
				Medicaid<br/>
				<br/>
				Medicaid can pay for health care if a person can&rsquo;t afford to pay for it. Medicaid pays the health care provider directly for services provided. To qualify people must meet certain guidelines such as low-income status. It pays for things like hospital stays, doctor visits, and emergency room visits. It covers prenatal care and prescription drugs. It may also cover other treatments. One of the most common is home and community based care. Medicaid is funded by both the federal government and individual states.<br/>
				For more information go to the Web site at: http://www.cms.hhs.gov/<br/>
				<br/>
				Patient Assistance Programs<br/>
				<br/>
				Patient assistance programs (PAPs) are programs offered by pharmaceutical companies. These offer free or reduced-cost medications to those that are low-income, underinsured, or uninsured.<br/>
				For more information go to the Web site at: http://www.patientassistance.com/<br/>
				<br/>
				Medication Management<br/>
				<br/>
				Medications only work right when they are taken correctly. Many things can affect how medicine works. This includes diet, lifestyle, and other medications a person takes. Having a system to manage medication can be important.<br/>
				For more information go to the Web site at: http://www.productiveandorganizedhome.com/2009/07/medication-management.html<br/>
				<br/>
				Emergency Health Care<br/>
				<br/>
				Someone you support may need emergency health services. In some cases, he or she may not be able to afford the cost. There are federally funded health centers available. These centers will provide care even if someone doesn&rsquo;t have health insurance. A person pays what he or she can afford based on income. These centers can provide checkups and treatment. They can give care for family planning and pregnancy. They provide checkups for kids and many other needed services.<br/>
				For more information go to the Web site at: http://findahealthcenter.hrsa.gov/<br/>
				<br/>
				Home Care<br/>
				<br/>
				Health care and treatments can be done in a person&rsquo;s home. It can be much less expensive than a hospital or nursing facility. It&rsquo;s also more convenient. A person you support may be able to use the Medicare home health benefit. He or she would need to be eligible for Medicare to do this.
				For more information go to the Web site at: http://www.medicare.gov/Publications/Pubs/pdf/10969.pdf<br/>
				<br/>
				Transitional Care Units<br/>
				<br/>
				Transitional care is about making sure a person has coordinated care. This happens when someone moves between doctors or care settings. It happens when someone&rsquo;s needs change during a chronic or acute illness. The care plan includes the patient&rsquo;s goals, preferences, and clinical status. Transitional care units can include many settings. It can include a skilled nursing facility, a rehabilitation facility, or a person&rsquo;s home.<br/>
				For more information go to the Web site at: http://en.wikipedia.org/wiki/Transitional_care<br/>
				<br/>
				Hospice Care<br/>
				<br/>
				Hospice care is provided to someone when he or she has a disease that cannot be cured. It is a special way of caring for a patient. It includes what is called non-curative and support services focused on comfort. Hospice care is a benefit under Medicare. It is part of the Hospital Insurance (Part A).<br/>
				For more information go to the Web site at: http://www.hospicenet.org/html/medicare.html<br/>
				<br/>
				Long Term Care<br/>
				<br/>
				Long-term care includes all the support a person might need that has a chronic illness or disability. This is for when the condition leaves the person unable to care for him or herself for a long period of time. Long-term care can be given in different places. It can be given in a nursing home, assisted living facility, or in a person&rsquo;s home. Services can include many things. It can include visiting nurses and home health aides. It can include friendly visitor programs, home-delivered meals, and chore services. It can also include adult daycare centers and respite services for caregivers who need a break from daily responsibilities. It can supplement care given by family members.<br/>
				For more information go to the Web site at: http://www.pueblo.gsa.gov/cic_text/health/ltc/guide.htm#whatis<br/>
				<br/>
				Home and Community-based Waivers<br/>
				<br/>
				These waivers were created in 1981. Until then, Medicaid had a bias to institutionalize individuals with disabilities to provide care. These help states to offer a broad range of services in people&rsquo;s homes and communities. To receive a waiver a person must be Medicaid eligible. A person with a disability or chronic illness that requires a certain level of care may qualify for the waiver program.<br/>
				For more information go to the Web site at: http://www.house.leg.state.mn.us/hrd/pubs/waiver.pdf<br/>
				<br/>
				Nutrition and Diet Management<br/>
				<br/>
				Being healthy and getting good nutrition is important for everyone. It can be even more important when a person has a disability. Different diets can have a good or bad impact on specific disabilities. Exercise can sometimes be difficult. Learning more about this and how to help someone you support will be important.<br/>
				For more information go to the Web site at: http://www.ncpad.org/nutrition/<br/>
				<br/>
				Patient Advocacy<br/>
				<br/>
				People with disabilities may need help in advocating for medical rights. The Patient Advocacy Foundation provides case managers to help with this. They can act as a liaison between a patient and the insurance company. They can work with employers on job retention and with creditors to resolve debt concerns. They work to make sure people have access to medical care, can maintain employment, and remain financially stable.<br/>
				For more information go to the Web site at: http://www.patientadvocate.org/index.php?p=489<br/>
				<br/>
				Emergency Health Care<br/>
				<br/>
				In 1978 Congress amended the Older Americans Act to include the Long-Term Care Ombudsman Program. This program provides services to residents in long-term care facilities. These services can be found in every state and territory in the United States. Ombudsmen are advocates. They help to work on quality of life issues. They identify, investigate, and work to resolve complaints by or on behalf of residents. They also work to protect health, safety, welfare, and rights.<br/>
				For more information go to the Web site at: http://www.ltcombudsman.org/<br/>
			</p>
		</div>
		<div class="seClear"></div>
	</div>
<div id="tabbed-info">
	<div id="wrap">
		
		<div id="intro-text">
			<h1>Click each tab and read the information.</h1>
		</div>
		
		<div class="content-group">
			<h2 class="title">Medicare</h2>
			<div class="bod">
				<h3>Medicare</h3>
				<p>Medicare is a health insurance program for someone over age 65. It also covers some people under 65 who are disabled or someone with permanent kidney failure. Medicare pays for medical care and hospital services. It also covers some other medical needs. This might include things like prescriptions, home care, and skilled nursing home care. For more information go to the Web site at: <a target="_blank"  href="http://www.cms.hhs.gov/">http://www.cms.hhs.gov/</a></p>
			</div>
		</div>
		
		<div class="content-group">
			<h2 class="title">Medicaid</h2>
			<div class="bod">
				<h3>Medicaid</h3>
				<p>Medicaid can pay for health care if a person can&rsquo;t afford to pay for it. Medicaid pays the health care provider directly for services provided. To qualify people must meet certain guidelines such as low-income status. It pays for things like hospital stays, doctor visits, and emergency room visits. It covers prenatal care and prescription drugs. It may also cover other treatments. One of the most common is home and community based care. Medicaid is funded by both the federal government and individual states. For more information go to the Web site at: <a target="_blank"  href="http://www.cms.hhs.gov/">http://www.cms.hhs.gov/</a></p>
			</div>
		</div>
		
		<div class="content-group">
			<h2 class="title">Patient Assistance Programs</h2>
			<div class="bod">
				<h3>Patient Assistance Programs</h3>
				<p>Patient assistance programs (PAPs) are programs offered by pharmaceutical companies. These offer free or reduced-cost medications to those that are low-income, underinsured, or uninsured. For more information go to the Web site at: <a target="_blank"  href="http://www.patientassistance.com/">http://www.patientassistance.com/</a></p>
			</div>
		</div>
		
		<div class="content-group">
			<h2 class="title">Medication Management</h2>
			<div class="bod">
				<h3>Medication Management</h3>
				<p>Medications only work right when they are taken correctly. Many things can affect how medicine works. This includes diet, lifestyle, and other medications a person takes. Having a system to manage medication can be important. For more information go to the Web site at: <a target="_blank"  href="http://www.productiveandorganizedhome.com/2009/07/medication-management.html">http://www.productiveandorganizedhome.com/2009/07/medication-management.html</a></p>
			</div>
		</div>
		
		<div class="content-group">
			<h2 class="title">Emergency Health Care</h2>
			<div class="bod">
				<h3>Emergency Health Care</h3>
				<p>Someone you support may need emergency health services. In some cases, he or she may not be able to afford the cost. There are federally funded health centers available. These centers will provide care even if someone doesn&rsquo;t have health insurance. A person pays what he or she can afford based on income. These centers can provide checkups and treatment. They can give care for family planning and pregnancy. They provide checkups for kids and many other needed services. For more information go to the Web site at: <a target="_blank"  href="http://findahealthcenter.hrsa.gov/">http://findahealthcenter.hrsa.gov/</a></p>
			</div>
		</div>
		<div class="content-group">
			<h2 class="title">Home Care</h2>
			<div class="bod">
				<h3>Home Care</h3>
				<p>Health care and treatments can be done in a person&rsquo;s home. It can be much less expensive than a hospital or nursing facility. It&rsquo;s also more convenient. A person you support may be able to use the Medicare home health benefit. He or she would need to be eligible for Medicare to do this. For more information go to the Web site at: <a target="_blank"  href="http://www.medicare.gov/Publications/Pubs/pdf/10969.pdf">http://www.medicare.gov/Publications/Pubs/pdf/10969.pdf</a></p>
			</div>
		</div>
		<div class="content-group">
			<h2 class="title">Transitional Care Units</h2>
			<div class="bod">
				<h3>Transitional Care Units</h3>
				<p>Transitional care is about making sure a person has coordinated care. This happens when someone moves between doctors or care settings. It happens when someone&rsquo;s needs change during a chronic or acute illness. The care plan includes the patient&rsquo;s goals, preferences, and clinical status. Transitional care units can include many settings. It can include a skilled nursing facility, a rehabilitation facility, or a person&rsquo;s home. For more information go to the Web site at: <a target="_blank"  href="http://en.wikipedia.org/wiki/Transitional_care">http://en.wikipedia.org/wiki/Transitional_care</a></p>
			</div>
		</div>
		<div class="content-group">
			<h2 class="title">Hospice Care</h2>
			<div class="bod">
				<h3>Hospice Care</h3>
				<p>Hospice care is provided to someone when he or she has a disease that cannot be cured. It is a special way of caring for a patient. It includes what is called non-curative and support services focused on comfort. Hospice care is a benefit under Medicare. It is part of the Hospital Insurance (Part A). For more information go to the Web site at: <a target="_blank"  href="http://www.hospicenet.org/html/medicare.html">http://www.hospicenet.org/html/medicare.html</a></p>
			</div>
		</div>
		<div class="content-group">
			<h2 class="title">Long Term Care</h2>
			<div class="bod">
				<h3>Long Term Care</h3>
				<p>Long-term care includes all the support a person might need that has a chronic illness or disability. This is for when the condition leaves the person unable to care for him or herself for a long period of time. Long-term care can be given in different places. It can be given in a nursing home, assisted living facility, or in a person&rsquo;s home. Services can include many things. It can include visiting nurses and home health aides. It can include friendly visitor programs, home-delivered meals, and chore services. It can also include adult daycare centers and respite services for caregivers who need a break from daily responsibilities. It can supplement care given by family members. For more information go to the Web site at: <a target="_blank"  href="http://www.pueblo.gsa.gov/cic_text/health/ltc/guide.htm#whatis">http://www.pueblo.gsa.gov/cic_text/health/ltc/guide.htm#whatis</a></p>
			</div>
		</div>
		<div class="content-group">
			<h2 class="title">Home and Community-based Waivers</h2>
			<div class="bod">
				<h3>Home and Community-based Waivers</h3>
				<p>These waivers were created in 1981. Until then, Medicaid had a bias to institutionalize individuals with disabilities to provide care. These help states to offer a broad range of services in people&rsquo;s homes and communities. To receive a waiver a person must be Medicaid eligible. A person with a disability or chronic illness that requires a certain level of care may qualify for the waiver program. For more information go to the Web site at: <a target="_blank"  href="http://www.house.leg.state.mn.us/hrd/pubs/waiver.pdf">http://www.house.leg.state.mn.us/hrd/pubs/waiver.pdf</a></p>
			</div>
		</div>
		<div class="content-group">
			<h2 class="title">Nutrition and Diet Management</h2>
			<div class="bod">
				<h3>Nutrition and Diet Management</h3>
				<p>Being healthy and getting good nutrition is important for everyone. It can be even more important when a person has a disability. Different diets can have a good or bad impact on specific disabilities. Exercise can sometimes be difficult. Learning more about this and how to help someone you support will be important. For more information go to the Web site at: <a target="_blank"  href="http://www.ncpad.org/nutrition/">http://www.ncpad.org/nutrition/</a></p>
			</div>
		</div>
		<div class="content-group">
			<h2 class="title">Patient Advocacy</h2>
			<div class="bod">
				<h3>Patient Advocacy</h3>
				<p>People with disabilities may need help in advocating for medical rights. The Patient Advocacy Foundation provides case managers to help with this. They can act as a liaison between a patient and the insurance company. They can work with employers on job retention and with creditors to resolve debt concerns. They work to make sure people have access to medical care, can maintain employment, and remain financially stable. For more information go to the Web site at: <a target="_blank"  href="http://www.patientadvocate.org/index.php?p=489">http://www.patientadvocate.org/index.php?p=489</a></p>
			</div>
		</div>
		<div class="content-group">
			<h2 class="title">State Ombudsman</h2>
			<div class="bod">
				<h3>Emergency Health Care</h3>
				<p>In 1978 Congress amended the Older Americans Act to include the Long-Term Care Ombudsman Program. This program provides services to residents in long-term care facilities. These services can be found in every state and territory in the United States. Ombudsmen are advocates. They help to work on quality of life issues. They identify, investigate, and work to resolve complaints by or on behalf of residents. They also work to protect health, safety, welfare, and rights. For more information go to the Web site at: <a target="_blank"  href="http://www.ltcombudsman.org/">http://www.ltcombudsman.org/</a></p>
			</div>
		</div>

	
	</div>
	
</div>
</body>
</html>