<?php
if(array_key_exists(@$_REQUEST['page'], $valid_pages)) {
	
	$title = $valid_pages[@$_REQUEST['page']];
	$page = @$_REQUEST['page'];
}
else {
	
	$title = $valid_pages['home'];
	$page = 'home';
}
?>
<!doctype html>
<html lang="en">
<head>

<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<META NAME="keywords" CONTENT="achinthagunasekara.com, Information Technology, Achintha, Gunasekara, Achintha Gunasekara, Technology, IT, ICT">
<META NAME="description" CONTENT="achinthagunasekara.com">

<title>Achintha Gunasekara | <?php echo $title ?></title>

<!-- My Stuff -->
<link rel="stylesheet" href="css/custom.css">
<script src="http://code.jquery.com/jquery-latest.min.js" type="text/javascript"></script>

<!-- http://purecss.io/ Stuff -->
<link rel="stylesheet" href="http://yui.yahooapis.com/pure/0.6.0/pure-min.css">

<!--[if lte IE 8]>
	<link rel="stylesheet" href="http://yui.yahooapis.com/pure/0.6.0/grids-responsive-old-ie-min.css">
<![endif]-->
<!--[if gt IE 8]><!-->
	<link rel="stylesheet" href="http://yui.yahooapis.com/pure/0.6.0/grids-responsive-min.css">
<!--<![endif]-->

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

<!--[if lte IE 8]>
	<link rel="stylesheet" href="css/main-old-ie.css">
<![endif]-->
<!--[if gt IE 8]><!-->
	<link rel="stylesheet" href="css/main.css">
<!--<![endif]-->

</head>
<body>

<div class="header">
	<div class="home-menu pure-menu pure-menu-horizontal pure-menu-fixed">
		<a class="pure-menu-heading" href=""><?php echo $title ?></a>
		<ul class="pure-menu-list">
			<li class="pure-menu-item"><a class="pure-menu-link" href="index.php?page=home">Home</a></li>
        		<li class="pure-menu-item"><a class="pure-menu-link" href="index.php?page=resume">Resume</a></li>
        		<li class="pure-menu-item"><a class="pure-menu-link" href="index.php?page=contact">Contact</a></li>
		</ul>
	</div>
</div>
