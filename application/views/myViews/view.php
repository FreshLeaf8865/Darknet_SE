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
<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body>
<div class="panel panel-default" style="border-color:white;">
  <div class="panel-heading" style="border-color:white;">
	<ul class="header-menu" style="display:inline;">
		<li><a href="*">Download App</a></li>
		<li><a href="*">Advertise</a></li>
		<li><a href="*">Privacy</a></li>
	</ul>
  
  </div>
</div>
<!-- start   -->
<div class="container-fluid">
	<div class="container">	
		<div class="row voffset8">
			<div class="col-lg-6  col-md-8 col-lg-offset-3 col-md-offset-2 col-sm-offset-1 col-sm-10 word">
				<span><center><h1 style="color: #450F8B;">Searcher</h1><br><br></center></span>
				<form method="post" action="">
					<div class="form-group search">
						  <input type="text" class="form-control input-lg" onfocus="this.placeholder = ''" onblur="this.placeholder = 'What are you looking for?'" type="text" id="q" name="search" class="input" placeholder="What are you looking for?" value="<?php echo isset($_POST['search']) ? $_POST['search'] : '' ?>">
						<input class="btn btn-default" type="submit" name="button" value="Search" class="button">
					</div>
				</form>
				<span>
			</div>
		</div>
		<div class="row">
			<div class="col-lg-6  col-md-8 col-lg-offset-3 col-md-offset-2 col-sm-offset-1 col-sm-10">
				<center><h1 >Displays only deepnet results </h1><br></center>
				<center><p> Searcher protects your identity, navigate anyonymusly off the web</p><br></center><br><br><br><br><br></span>
				<div class="btn_click">
					<button type="button" class="btn btn-success"><img class="img-responsive" src="././images/down.png" alt="Chania "></button>
				</div>
			</div>
		</div>
	</div>
</div>
<div class="container-fluid collapse">
	<div class="row voffset9">
		<div class="col-lg-6  col-md-8 col-lg-offset-3 col-md-offset-2 col-sm-offset-1 col-sm-10">
			<img class="img-responsive" src="././images/1.png" alt="Chania ">
		</div>
	</div>
	<div class="row voffset9">
		<div class="col-lg-4 col-lg-offset-2 col-md-offset-1 col-md-5 col-sm-4 col-sm-offset-1 col-xs-offset-1 col-xs-5">
			<h1>Dedicated deepnet <br> search engine</h1>
			<p>Explore the deepnet without downloading a dedicate</p>
			<p>browser and explore websites hidden to normal search</p> 
			<p>engines</p> 
		</div>
		<div class="col-lg-4 col-lg-offset-2 col-md-offset-1 col-md-5 col-sm-4 col-sm-offset-2 col-xs-offset-1 col-xs-5">
			<img class="img-responsive" src="././images/2.png" alt="Chania ">
		</div>
	</div>
	<div class="row voffset9">
		<div class="col-lg-4 col-lg-offset-2 col-md-offset-1 col-md-5 col-sm-4 col-sm-offset-2 col-xs-offset-1 col-xs-5">
			<img class="img-responsive" src="././images/3.png" alt="Chania ">
		</div>	
		<div class="col-lg-4 col-lg-offset-2 col-md-offset-1 col-md-5 col-sm-4 col-sm-offset-1 col-xs-offset-1 col-xs-5">
			<h1>Encripted results</h1>
			<p>Enjoy the freedom to navigete the deepnet complelty</p>
			<p>anyonymusly</p> 
		</div>
		
	</div>
	<div class="row voffset9">
		<div class="col-lg-4 col-lg-offset-2 col-md-offset-1 col-md-5 col-sm-4 col-sm-offset-1 col-xs-offset-1 col-xs-5">
			<h1>Surf below the surface</h1>
			<p>Access a large number of sites which can not be</p>
			<p>accessible elsewhere</p>
		</div>
		<div class="col-lg-4 col-lg-offset-2 col-md-offset-1 col-md-5 col-sm-4 col-sm-offset-2 col-xs-offset-1 col-xs-5">
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





<div class="panel panel-default" style="border-color:white;">
  <div class="panel-heading" style="border-color:white;">
	<ul class="header-menu" style="display:inline;">
		<li><a href="*">Download App</a></li>
		<li><a href="*">Advertise</a></li>
		<li><a href="*">Privacy</a></li>
	</ul>
  
  </div>
</div>


<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
		<script>
		$(document).ready(function(){

	 $(".btn-success").click(function(){
        $(".collapse").collapse('show');
    });
    $(".search_text").click(function(){
         $(".search_button").css('opacity','1');
    });
});

$(document).ready(function(){
  if($(".results dl").length > 0){
    $(".search-content").css("padding",0);
    $(".result").css("float","left");
  }
                  });
	</script>
<script src="<?php echo $this->config->base_url(); ?>js/bootstrap.min.js"></script>
</body>
</html>

