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
		<li><a href="*">Privacy Policy</a></li>
		<li><a href="*">Term & Conditions</a></li>
		<li><a href="*">Feedbacks</a></li>
		<li><a href="*">Donations</a></li>
	</ul>
  </div>
  <!--/div>
</div-->
<!-- start   -->
<div id = "start-form" class="container">
	<div class = "col-md-12 form-container">
		<div class="row">
			<div class="word">
				<span><h1>Mother</h1><br></span>
				<form method="post" action="">
					<div class="col-md-12">
						<div class="form-group search">
						   <div class = "search-text">
								<input type="text" class="form-control input-lg" onfocus="this.placeholder = ''" onblur="this.placeholder = 'What are you looking for?'" type="text" id="q" name="search" class="input" placeholder="What are you looking for?" value="<?php echo isset($_POST['search']) ? $_POST['search'] : '' ?>">
						   </div>
						   <div>
						   		<input class="btn btn-default" type="submit" name="button" value="Search" class="button">
						   </div>									
						</div>
					</div>
				</form>
			</div>
		</div>
		<div class="row">
			<div class="col-md-12" id="">
			    <div class="center-text"><h1>Explore the deepnet anonimusly from the web 
													withouht dowloading a dedicated browser, and view 
													websites hidden to conventionals search engines.</h1>
				
				<div class="col-md-6"></div>
			</div>
		</div>
	</div>

	<!-- <div class="below-button">
		<button type="button" id = "goto-bellow" class="below"><img class="img-responsive" src="././images/down.png" alt="Chania "></button>
	</div> -->

</div>
	 <div class ="container">
		<div class = "col-md-12">	 
			<div class = "left-text col-md-3">
				<h1>Deep Net</h1>
					<p>Is the reamining of the web which is calculated to be 500X size of the surface web and can only be accessed with a dedicated browser</p>
		   </div>
		   <div class = "center-img col-md-6">
				<img src ="././images/deep.png"></img>
		   </div>
		   <div class = "right-text col-md-3">
				<h1>Surface Web</h1>
					<p>4% of all the entire web content is accessible with conventional search engines</p>
		   </div>
	    </div>
		<div class = "col-md-12">
			<div class="col-md-1"></div>
			<div class="blank col-md-10"></div>
			<div class="col-md-1"></div>
		</div>
		<div class = "bottom-text1 col-md-12">
			<div class = "col-md-1">
			</div>
			<div class = "bottom-text1-title col-md-10">
				<h1>Protect your identity</h1>
			</div>			
			<div class = "col-md-1">
			</div>
		</div>
		<div class = "bottom-text2 col-md-12">
			<div class = "col-md-1">
			</div>
			<div class = "col-md-10">
				<h1>The most important thin about navigate anonymously on the deepnet is for you to be secure with your data and your identity, access without jeperdizing those.</h1>
			</div>
			
			<div class = "col-md-1">
			</div>
		</div>
		<div class = "bottom-text3 col-md-12">
			<div class = "col-md-1">
			</div>
			<div class = "col-md-10">
				<h1>We will not sell or track your search result or collect any of your information.</h1>
			</div>			
			<div class = "col-md-1">
			</div>
		</div>
		</div>
	 </div>
	 <div class ="blank col-md-12"></div>
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

<!--<div class="panel panel-default" style="border-color:white;">
  <div class="panel-heading" style="border-color:white;">-->
  <div class="bottom-link">
	<ul class="header-menu" style="display:inline;">
		<li>Copyright 2016 Mother Inc. All rights reserved.</li>
		<li>Term and conditions-</li>
		<li><a href="*">Privacy Policy-</a></li>
		<li><a href="*">About-</a></li>
		<li><a href="*">Feedbacks-</a></li>
		<li><a href="*">Donations</a></li>
	</ul>
  </div>
 </div>
</div>


</body>
</html>

