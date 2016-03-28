<?php
defined('BASEPATH') OR exit('No direct script access allowed');
include('simple_html_dom.php');
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>search</title>
<link href="<?php echo $this->config->base_url(); ?>css/bootstrap.css" rel="stylesheet">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
<link rel="stylesheet" type="text/css" href="././css/style.css" />

<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script src="<?php echo $this->config->base_url(); ?>js/bootstrap.min.js"></script>

<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
<script src="<?php echo $this->config->base_url(); ?>js/script.js"></script>
</head>
<body>
<!--div class="panel panel-default" style="border-color:white;">
  <div class="panel-heading" style="border-color:white;"-->
  <div class="header-link link">
	<ul class="header-menu" style="display:inline;">
		<li><a href="*">Download App</a></li>
		<li><a href="*">Advertise</a></li>
		<li><a href="privacy.php">Privacy</a></li>
	</ul>
  </div>
  <!--/div>
</div-->
<!-- start   -->
<div id = "start-form" class="container">
	<div class = "col-md-12 form-container">
		<div class="row">
			<div class="word">
				<span><center><h1>mother</h1><br></center></span>
				<form method="post" action="">
					<div class="col-md-2"></div>
					<div class="col-md-8">
						<div class="form-group search">
							 <input type="text" class="form-control input-lg" onfocus="this.placeholder = ''" onblur="this.placeholder = 'What are you looking for?'" type="text" id="q" name="search" class="input" placeholder="What are you looking for?" value="<?php echo isset($_POST['search']) ? $_POST['search'] : '' ?>">
							<input class="btn btn-default" type="submit" name="button" value="Search" class="button">
						</div>
					</div>
				</form>
			</div>
		</div>
		<div class="row">
			<div class="col-md-12" id="">
				<center><h1>Displays only deepnet results </h1></center>
				<center><h3>mother protects your identity, navigate anonymously off the web</h3></center>
			</div>
		</div>
	</div>

	<div class="below-button">
		<button type="button" id = "goto-bellow" class="below"><img class="img-responsive" src="././images/down.png" alt="Chania "></button>
	</div>

</div>

<div class = "container">
	<div class="container-fluid collapse">
		<div class="row voffset9">
			<div class="col-md-12 text-center">
				<img src="././images/1.png" alt="Chania "></img>
			</div>
		</div>
		<div class="row voffset9">
			<div class="col-lg-4 col-lg-offset-2 col-md-offset-1 col-md-5 col-sm-4 col-sm-offset-1 col-xs-7">
				<h2>Dedicated deepnet search engine</h2>
				<p>Explore the deepnet without downloading a dedicate browser and explore websites hidden to normal search engines</p> 
			</div>
			<div class="col-lg-4 col-lg-offset-2 col-md-offset-1 col-md-5 col-sm-4 col-sm-offset-2 col-xs-5">
				<img class="img-responsive" src="././images/2.png" alt="Chania ">
			</div>
		</div>
		<div class="row voffset9">
			<div class="col-lg-3 col-lg-offset-2 col-md-offset-1 col-md-5 col-sm-4 col-sm-offset-2 col-xs-5">
				<img class="img-responsive" src="././images/3.png" alt="Chania ">
			</div>	
			<div class="col-lg-4 col-lg-offset-2 col-md-offset-1 col-md-5 col-sm-4 col-sm-offset-1 col-xs-7">
				<h2>Encripted results</h2>
				<p>Enjoy the freedom to navigate the deepnet completely anonymously</p> 
			</div>
			
		</div>
		<div class="row voffset9">
			<div class="col-lg-4 col-lg-offset-2 col-md-offset-1 col-md-5 col-sm-4 col-sm-offset-1 col-xs-7">
				<h2>Surf below the surface</h2>
				<p>Access a large number of sites which can not be accessible elsewhere</p>
			</div>
			<div class="col-lg-4 col-lg-offset-2 col-md-offset-1 col-md-5 col-sm-4 col-sm-offset-2 col-xs-5">
				<img class="img-responsive" src="././images/4.png" alt="Chania ">
			</div>
		</div>
	</div>
	<!-- end   -->
	<div id="showresults"></div>

			<div class="results">
	<?php
		if(isset($_REQUEST['button']))
		{
		$value=$_REQUEST['search'];
		// Retrieve the DOM from a given URL
		$html = file_get_html('http://xmh57jrzrnw6insl.onion.link/5dc02cc7lc/search.cgi?q='.$value.'&cmd=Search!');
		 $ol=$html->find('dl'); 
		if(empty($ol))
		{
	?>
		<div style="color:#0081f9;font-size: 17px;margin-left: 9px;margin-top: 15px; display:none;">
			Sorry, couldn't find results for
			<span style="color:#000"><?php echo $value ?> </span> 
			.Please try again with a different search.
		</div>
	<?php 
		}
		else
		{
			foreach($ol as $e)
			echo $e;
		}
				if(!empty($ol))
			{
					?><div class="pagination"><?php
					//pagination coding
					$i=1;
					for($i=1;$i<=10;$i++)
					{
				?>
				<a href="http://clientdemoonline.com/deepweb/index.php/Welcome2/results?page=<?php echo $i ;?>&value=<?php echo $value ;?>"><?php echo $i;?></a>
				<?php
					}
				  ?></div><?php
			}

		}
	?>

		</div>
	</div>
</div>


<!--<div class="panel panel-default" style="border-color:white;">
  <div class="panel-heading" style="border-color:white;">-->
  <div class="bottom-link link collapse">
	<ul class="header-menu" style="display:inline;">
		<li><a href="*">Download App</a></li>
		<li><a href="*">Advertise</a></li>
		<li><a href="*">Privacy</a></li>
	</ul>
  </div>
<!--  </div>
</div>-->


</body>
</html>

