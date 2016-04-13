<?php
    defined('BASEPATH') OR exit('No direct script access allowed');
    include('simple_html_dom.php');
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <link href="<?php echo $this->config->base_url(); ?>css/bootstrap.css" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="<?php echo $this->config->base_url(); ?>css/style.css" />
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
    <style>

        tr td ul li small font{display :none;}
        dt small{display:none;}
        dl dt a {
             color: #2d95f4;
             font-size: 17px;
             text-decoration: none;
        }
        dl dt a span {
             color: #2d95f4 !important;
             font-size: 17px !important;
             text-decoration: none !important;
             background:transparent !important;
             font-weight: lighter !important;
        }
        dl dd span {
             color: #000000 !important;
             text-decoration: none !important;
             background:transparent !important;
             font-weight: lighter !important;
        }
        dd {
             float: left;
             margin: 0;
             width: 100%;
        }
        dd ul {padding:0px;}
             
        dt {
             color: #fff;
        }
        dl {
             float: left;
             margin: 18px 0 0 !important;
             width: 60%;
        }
        dd table {
             width: 100% !important;
        }
        dd * {
             font-size: 14px !important;
             margin-left: 12px;
             margin-top: 5px !important;
        }
        dd tbody tr:last-child{display:none;}
        .pagination{width:100%;float:left;text-align:center; margin: 30px 0;}
        .pagination a{color:black !important;font-weight:bold;text-decoration:none;}
    </style>
</head>
<body>
    <div class="header-wrapper">
        <div class="header-link link">
             <ul class="header-menu" style="display:inline;">
                <li><a href="<?php echo $this->config->base_url();?>index.php/privacy">Privacy Policy</a></li>
                <li><a href="<?php echo $this->config->base_url();?>index.php/terms">Terms & Conditions</a></li>
                <li><a href="*">Feedbacks</a></li>
                <li><a href="*">Donations</a></li>
             </ul>
        </div>
        <div class="header-search">
            <div class = "col-md-12 form-container">
                <div class="row">
                    <div class="word">
                        <span class="header-text"><h1>Mother</h1></span>
                        <form method="post" action="">
                            <div class="col-md-12">
                                <div class="form-group-sub search">
                                    <div class = "search-text">
                                        <input type="text" class="form-control input-lg" onfocus="this.placeholder = ''" type="text" id="q" name="search" class="input" value="<?php echo isset($_POST['search']) ? $_POST['search'] : '' ?>">
                                    </div>
                                <div>
                                <input class="btn btn-default" type="submit" name="button" value="Search" class="button">
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
             </div>
        </div>
    </div>
    <div id="showresults"></div>
		<div class="results">
			<?php
				if(isset($_REQUEST['button']))
				{
					$value=$_REQUEST['search'];
					//echo $data = file_get_contents('https://ahmia.fi/search/?q='.$value.'');

					// Retrieve the DOM from a given URL
					$html = file_get_html('http://xmh57jrzrnw6insl.onion.link/5dc02cc7lc/search.cgi?q='.$value.'&cmd=Search!');
					 //$ol=$html->find('gsc-webResult'); 
					 $ol=$html->find('dl'); 
					if(empty($ol))
					{
			?>
				<div style="color:#0081f9;font-size: 17px;margin-left: 9px;margin-top: 15px;">
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
				?> 
				    <div class="pagination">
				   <?php
						//pagination coding
						$i=1;
						for($i=1;$i<=10;$i++)
						{
					?>
						<a href="<?php echo $this->config->base_url();?>index.php/Welcome2/results?page=<?php echo $i ;?>&value=<?php echo $value ;?>"><?php echo $i;?></a>
					<?php
						}
					?>
					 </div>
					<?php
					}

                 }
                 else
                 {
						$page_no=$_GET['page'];
						$value=$_GET['value'];

						$html = file_get_html('http://xmh57jrzrnw6insl.onion.link/5dc02cc7lc/search.cgi?cmd=Search!&np='.$page_no.'&q='.$value.'');
							 //$ol=$html->find('gsc-webResult'); 
							 $ol=$html->find('dl'); 

								foreach($ol as $e)
								echo $e;
								
								?><div class="pagination"><?php
								$i=1;
						for($i=1;$i<=10;$i++)
							{
						?>
						
								<a href="<?php echo $this->config->base_url();?>index.php/Welcome2/results?page=<?php echo $i ;?>&value=<?php echo $value ;?>">
							<?php echo $i;?></a>
						<?php
							}
					
	}
						?>
					</div>
		</div>
                 <div class="bottom-blank"></div>
</div>
                 
                 
                 <div class="bottom-link">
                 <ul>
                 <li>Copyright 2016 Mother Inc. All rights reserved.</li>
                 <li><a href="<?php echo base_url();?>index.php/terms">Term and conditions -</a></li>
                 <li><a href="<?php echo base_url();?>index.php/privacy">Privacy Policy - </a></li>
                 <li><a href="*">Feedbacks - </a></li>
                 <li><a href="*">Donations</a></li>
                 </ul>
                 <div class="footer-mother">Mother</div>
                 </div>
                 </body>
                 </html>
