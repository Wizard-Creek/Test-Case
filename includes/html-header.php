<?php
include 'admin/library/metadata-header.php';
metadataHeader('html',$programParm,$metadata);
include 'admin/includes/test-environment-set.php';
?>

<meta name="copyright"          content="Copyright © 2003-<?php echo date('Y'); ?>, Wizard Creek Consulting">
<meta name="rating"             content="General">

<meta http-equiv="Content-Type"     content="text/html; charset=iso-8859-1">
<meta http-equiv="Content-Language" content="en-us">
<meta http-equiv="imagetoolbar"     content="no">

<link rel="alternate" type="application/rss+xml" title="Admin Version Control" 
	href="http://feeds.feedburner.com/Admin-Version-Control">

<link rel="shortcut icon" href="../favicon.ico">
<link type="text/css" rel="stylesheet" media="screen" 
	href="http://www.admin-wizard.com/css/admin-system.css">

<?php
if ($_SESSION['testEnvironment'] == 'on') {
echo '<link type="text/css" rel="stylesheet" media="screen" 
	href="http://www.admin-wizard.com/test/admin-system.css">';
}
?>	
