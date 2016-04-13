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
<link rel="stylesheet" type="text/css" href="<?php echo $this->config->base_url();?>css/style.css" />

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

  <div class="header-link link">
	<ul class="header-menu" style="display:inline;">
		<li><a href="<?php echo $this->config->base_url();?>index.php/privacy">Privacy Policy</a></li>
        <li><a href="<?php echo $this->config->base_url();?>index.php/terms">Terms & Conditions</a></li>
		<li><a href="*">Feedbacks</a></li>
		<li><a href="*">Donations</a></li>
	</ul>
  </div>

<!-- start   -->
<div id = "start-form" class="container">
             
	<div class = "col-md-12 form-container">
        <div class="title col-md-2">
             <div class="col-md-12">
                 <h1>Mother</h1>
             </div>
        </div>
             
		<div class="col-md-10">
				<form method="post" action="<?php echo $this->config->base_url();?>index.php/welcome2/results">
					<div class="col-md-12">
						<div class="form-group search">
						   <div class = "search-text">
								<input type="text" class="form-control input-lg" onfocus="this.placeholder = ''"  type="text" id="q" name="search" class="input"  value="<?php echo isset($_POST['search']) ? $_POST['search'] : '' ?>">
						   </div>
						   <div>
						   		<input class="btn btn-default" type="submit" name="button" value="Search" class="button">
						   </div>									
						</div>
					</div>
                    <div class="col-md-12" id="">
                        <div class="center-text"><h1>Explore the deepnet anonimusly & view sites hidden to conventionals search engines.</h1>
                        </div>
                    </div>
                </form>
		</div>
	</div>

</div>

</body>
</html>

