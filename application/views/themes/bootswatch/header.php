<!DOCTYPE html>
<html lang="en">
  <head>
	<title><?=$this->config->item('title')?></title>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<!--Bootstrap themes use style settings to change look and feel 
    <link rel="stylesheet" href="<?=base_url()?>public/themes/bootswatch/css/<?=$this->config->item('style')?>" media="screen">	
    <link rel="stylesheet" href="<?=base_url()?>public/themes/bootswatch/css/bootswatch.min.css">-->
	
	
	
	 <!-- Bootstrap core CSS -->
    <link href="<?=base_url()?>public/themes/bootswatch/css/bootstrap.css" rel="stylesheet">
 <!-- Fontawesome core CSS -->
    <link href="<?=base_url()?>public/themes/bootswatch/css/font-awesome.min.css" rel="stylesheet" />
     <!--GOOGLE FONT -->
    <!--<link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>-->
	<link href='http://fonts.googleapis.com/css?family=Merriweather' rel='stylesheet' type='text/css'>
     <!-- custom CSS here -->
    <link href="<?=base_url()?>public/themes/bootswatch/css/style.css" rel="stylesheet" />
	
	
	 
    <!--[if lt IE 9]>
		<script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->
  </head>
  <body>
     <div class="navbar navbar-default navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
          <a href="<?=base_url()?>" class="navbar-brand"><?=$this->config->item('banner')?></a>
		    <button class="navbar-toggle" type="button" data-toggle="collapse" data-target="#navbar-main">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
        </div>
        <div class="navbar-collapse collapse" id="navbar-main">
          <ul class="nav navbar-nav">
			<li class="active"><a href="#" title="">Active Link</a></li>
			
			<li><?=anchor('letter/add','ፊደል ወስኽ')?></li>
            <li><?=anchor('letter/mylist','ዝርዝር ፊደል')?></li>
			
			
			<!--<li><?=anchor('gig/giglist', 'Gigs')?></li>
			<li><?=anchor('customer/add', 'Add Customer')?></li>
			<li><?=anchor('news/default', 'RSS')?></li>-->
          </ul>
        </div>
      </div>
    </div>
    <div class="container">
	<?php
		echo bootswatchFeedback();
	?>

