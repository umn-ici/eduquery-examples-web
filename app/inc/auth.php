<?php

function authenticated($username, $password) {
	if (!isset($username) || !isset($password)) {
		return false;
	}
	if ($username == "eduQuery" && $password == "RTC.1337design!") {
		return true;
	}
	else {
		return false;
	}
}

$username = $_SERVER['PHP_AUTH_USER'];
$password = $_SERVER['PHP_AUTH_PW'];

if (!authenticated($username, $password)) {
	header('WWW-Authenticate: Basic realm="eduQuery"');
	header('HTTP/1.0 401 Unauthorized');
	echo 'Restricted area.';
	exit;
}
else {
	$fileList = get_included_files();
	$topMost = $fileList[0];
	if ($topMost != "/swadm/srv/rtc.umn.edu/html/eduQuery/index.php") {
		if (!isset($_GET['bool'])) {
			header("Location: http://rtc.umn.edu/eduQuery/index.php");
			exit;
		}
	}
}

?>