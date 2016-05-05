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
<title>Searcher</title>
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
    <div class="link">
        <a href="#" class="close" id="info_bar">&times;</a>
        <div id="alert_content">
            <img src="<?php echo $this->config->base_url(); ?>images/information.png">
            <p>Mother protects your identity and make your search safe, allowing to navigate the darknet withouht worry about your privacy.<br>
                We delete all our users informations periodically and we do not keep anyone on records.</p>
        </div>
    </div>
    <div id = "search-form" class="search-form">
        <div class="form-wrapper">
            <div class="input-wrapper">
                <label class="input-label">Searcher</label>
                <form method="post" action="<?php echo $this->config->base_url();?>index.php/welcome2/results">
                    <input type="text" onfocus="this.placeholder = ''" id="q" name="search" class="input"  value="<?php echo isset($_POST['search']) ? $_POST['search'] : '' ?>">
                    <input type="submit" value="" class="custom-btn"/>
                </form>
            </div>
            <div class="desc">Explore the deepnet anonimusly.</div>
        </div>
    </div>
</body>
</html>

