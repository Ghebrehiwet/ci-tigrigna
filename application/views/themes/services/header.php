<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title><?=$this->config->item('title')?></title>
	
    <!-- Bootstrap core CSS -->
    <link href="<?=base_url()?>public/themes/services/css/bootstrap.css" rel="stylesheet">
 <!-- Fontawesome core CSS -->
    <link href="<?=base_url()?>public/themes/services/css/font-awesome.min.css" rel="stylesheet" />
     <!--GOOGLE FONT -->
    <!--<link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>-->
	<link href='http://fonts.googleapis.com/css?family=Merriweather' rel='stylesheet' type='text/css'>
     <!-- custom CSS here -->
    <link href="<?=base_url()?>public/themes/services/css/style.css" rel="stylesheet" />
	<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
	
	<link href="https://code.jquery.com/ui/1.9.2/themes/smoothness/jquery-ui.css" rel="stylesheet" type="text/css" />
<script src="https://code.jquery.com/jquery-1.8.3.min.js"></script>
<script src="https://code.jquery.com/ui/1.9.2/jquery-ui.js"></script>
		<script>
		  $(function() {
			$( "#tabs" ).tabs();
		  });
		 </script>
</head>
<body>
    <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <div class="container">
            <div class="navbar-header">
			<a href="<?=base_url()?>index.php"> <img style="float:left; width:100px;" alt="Logo" src="<?=base_url()?>public/images/logo.png">	</a>
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="<?=base_url()?>"><?=$this->config->item('banner')?></a>
            </div>
            <!-- Collect the nav links for toggling -->
            <div class="collapse navbar-collapse navbar-ex1-collapse">
                <ul class="nav navbar-nav">
				    <li><?=anchor('letter/add','ፊደል ወስኽ')?></li>
                    <li><?=anchor('letter/mylist','ዝርዝር ፊደል')?></li>
					
					
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>
       <div class="container" >
            <div >
    <?php
    echo bootswatchFeedback();
    ?>