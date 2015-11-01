<!DOCTYPE html>
<html>
	<head>
		<title>FUEL | Student Ministries</title>
		<link type="text/css" rel="stylesheet" href="css/main.css" />
		<link type="text/css" rel="stylesheet" href="css/video.css" />
		<script type="text/javascript" rel="jquery" src="js/jquery.js"></script>
		<script type="text/javascript" rel="jquery" src="js/jquery.cycle2.js"></script>
		<!--<script src="path/to/your/copy/of/jquery.cycle2.carousel.js"></script>-->
		<script type="text/javascript" rel="javascript" src="js/functions.js"></script>
		<meta name="viewport" content="width=320, width=device-width, initial-scale=1, maximum-scale=1">
	</head>
	<body>
		<div id="master">
			<div id="container">
					<?php
						require('functions.php');
						
						if(isset($_GET['page']) && isValidPage($_GET['page']))
						{
							$loadHome = false;
						}
						else
						{
							$loadHome = true;
						}
						
						$nav1 = "";
						$nav2 = "";
						$nav3 = "";
						$nav4 = "";
						$nav5 = "";
						$nav6 = "";
						
						if($loadHome)						{$nav1="nav-sel";}
						elseif($_GET['page']=='home')		{$nav1="nav-sel";}
						elseif($_GET['page']=='events')		{$nav2="nav-sel";}
						elseif($_GET['page']=='ministries')	{$nav3="nav-sel";}
						elseif($_GET['page']=='cafe')		{$nav3="nav-sel";}
						elseif($_GET['page']=='drama')		{$nav3="nav-sel";}
						elseif($_GET['page']=='band')		{$nav3="nav-sel";}
						elseif($_GET['page']=='media')		{$nav3="nav-sel";}
						elseif($_GET['page']=='traffic')	{$nav3="nav-sel";}
						elseif($_GET['page']=='prayer')		{$nav3="nav-sel";}
						elseif($_GET['page']=='videos')		{$nav4="nav-sel";}
						elseif($_GET['page']=='podcasts')	{$nav4="nav-sel";}
						elseif($_GET['page']=='pictures')	{$nav4="nav-sel";}
						elseif($_GET['page']=='contact')	{$nav5="nav-sel";}
						elseif($_GET['page']=='about')		{$nav6="nav-sel";}
						elseif($_GET['page']=='church')		{$nav6="nav-sel";}
						elseif($_GET['page']=='pastors')	{$nav6="nav-sel";}
						
					?>
					
					<?php require('inc/header.inc.php'); ?>
					
					<?php
						if($loadHome)
						{
							$_GET['page'] = 'home';
						}
						include('inc/' . $_GET['page'] . '.inc.php');
					?>
					
			</div>
		</div>
		
		<?php require('inc/footer.inc.php') ?>
		
	</body>
</html>