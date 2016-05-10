<?php
    defined('BASEPATH') OR exit('No direct script access allowed');
    include('simple_html_dom.php');
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <link href="<?php echo $this->config->base_url(); ?>css/bootstrap.css" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="<?php echo $this->config->base_url(); ?>css/style.css" />
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="<?php echo $this->config->base_url(); ?>js/bootstrap.min.js"></script>
    <link rel="shortcut icon" type="image/x-icon" href="<?php echo $this->config->base_url();?>images/S.png">
    <link rel="apple-touch-icon" href="<?php echo $this->config->base_url();?>images/S.png"/>
    <!--
		HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries
        WARNING: Respond.js doesn't work if you view the page via file:
        [if lt IE 9]
            <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
            <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
			<script src="http://css3-mediaqueries-js.googlecode.com/svn/trunk/css3-mediaqueries.js"></script>
        [endif]
	-->
    <script src="<?php echo $this->config->base_url(); ?>js/script.js"></script>
</head>
<body>
    <div class="header-wrapper">
        <div class="header-search">
            <div class = "form-container">
				<span class="header-text"><h1>Searcher</h1></span>
				<form method="post" action="<?php echo $this->config->base_url();?>index.php/welcome2/results">
					<div class="form-group-sub search">
						<div class = "search-text left">
							<input type="text" class="form-control input-lg" onfocus="this.placeholder = ''" type="text" id="q" name="search" class="input" value="<?php echo isset($_REQUEST['search']) ? $_REQUEST['search'] : '' ?>">
						</div>
						<div class="left">
							<input class="btn btn-default" type="submit" name="button" value="" class="button">
						</div>
						<div class="clear"></div>
					</div>
				</form>
				<div class="clear"></div>
			</div>
		</div>
	</div>
	<div class="results_section">
		<div>Showing results for <b><?php echo isset($_REQUEST['search']) ? $_REQUEST['search'] : '' ?></b></div>
		<div class="results">
			<?php
		/*		$html_torch_session = file_get_html('http://xmh57jrzrnw6insl.onion.to/');
				$torch_session_element = $html_torch_session->find('form');
				$torch_session = $torch_session_element[0]->action;
		*/		  
				$html_nevil_session = file_get_html('https://hss3uro2hsxfogfq.onion.to/');
				$nevil_session_element = $html_nevil_session->find('input[name=session]');
				$nevil_session = $nevil_session_element[0]->value;
				
				$search=$_REQUEST['search'];

				if(isset($_REQUEST['button']))
				{
				   // Retrieve the DOM from a given URL
		//		   $html_torch = file_get_html('http://xmh57jrzrnw6insl.onion.to'.$torch_session.'?q='.urlencode($search).'&cmd=Search%21');
				   $html_ahmia = file_get_html('https://ahmia.fi/search/?q='.urlencode($search));
				   $html_nevil = file_get_html('https://hss3uro2hsxfogfq.onion.to/index.php?q='.urlencode($search).'&session='.$nevil_session.'&numRows=100&hostLimit=100');

		//		   $ol_torch = $html_torch->find('dl');
				   $ol_nevil = $html_nevil->find('p');
				   $ol_ahmia = $html_ahmia->find('li');

				   if( /*empty($ol_torch) && */ empty($ol_nevil) && count($ol_ahmia) <= 6 )
				   {
			?>
		   <div style="margin-left: 9px;margin-top: 15px;">
				Sorry, couldn't find results for
				<span style="color:#000"><?php echo $search; ?></span>
				.Please try again with a different search.
		   </div>
			<?php
					}
					else
					{
			//		  $len_torch = count($ol_torch);
					  $len_nevil = count($ol_nevil);
					  $len_ahmia = count($ol_ahmia);
					  
			//		  $i_torch = 0;
					  $i_nevil = 1;
					  $i_ahmia = 6;
					  
					  while(TRUE)
					  {
						  if (/*$i_torch >= $len_torch && */$i_nevil >= $len_nevil && $i_ahmia >= $len_ahmia) break;
						  
			/*			  if ($i_torch < $len_torch)
						  {
							$dt = $ol_torch[$i_torch]->find('dt');
							$dd = $ol_torch[$i_torch]->find('dd');
							
							$i_torch++;

							$title = preg_replace(array('/<span[^>]*>/', '/<\/span>/'), array('', ''), substr($dt[0]->innertext, 5));

							if(preg_match('/<a[^>]*>(.*?)<\/a>/', $dd[0]->innertext, $match))
							{
								$cite = $match[1];
							}
							if(preg_match('/<small>(.*?)<\/small>/', $dd[0]->innertext, $match))
							{
								$body = strip_tags($match[1]);
							}
							
							echo '<div class="result">';
							echo	'<h4>' . $title . '</h4>';
							echo	'<div class="cite">' . $cite . '</div>';
							echo	'<span>' . $body . '</span>';
							echo '</div>';
						  }
				*/		  
						  if ($i_nevil < $len_nevil)
						  {
							  $html = $ol_nevil[$i_nevil++]->innertext;

							  if(preg_match('/<a(.*?)<\/a>/', $html, $match))
							  {
								  $title = $match[0];
							  }
							  if(preg_match('/<span style="color:black;">(.*?)<\/span>/', $html, $match))
							  {
								  $cite = $match[1];
							  }
							  if(preg_match('/<\/span><br \/>(.*)/', $html, $match))
							  {
								  $body = $match[1];
							  }

							  echo '<div class="result">';
							  echo		'<h4>' . $title . '</h4>';
							  echo		'<div class="cite">' . $cite . '</div>';
							  echo		'<span>' . $body . '</span>';
							  echo '</div>';
						  }					  
						  
						  if ($i_ahmia < $len_ahmia)
						  {
							  $html = $ol_ahmia[$i_ahmia++]->innertext;

							  if(preg_match('/<h4>(.*?)<\/h4>/', $html, $match))
							  {
								  $title = $match[1];
							  }
							  if(preg_match('/<cite>(.*)<\/cite>/', $html, $match))
							  {
								  $cite = $match[1];
							  }
							  if(preg_match('/<p>(.*?)<\/p>/', $html, $match))
							  {
								  $body = $match[1];
							  }

							  echo '<div class="result">';
							  echo		'<h4>' . $title . '</h4>';
							  echo		'<div class="cite">' . $cite . '</div>';
							  echo		'<span>' . $body . '</span>';
							  echo '</div>';
						  }
					  }
					}
				}
				else
				{
					$page_no=$_GET['page'];
					
			//		$html_torch2 = file_get_html('http://xmh57jrzrnw6insl.onion.to'.$torch_session.'?cmd=Search&np='.$page_no.'&q='.urlencode($search));
					$html_nevil2 = file_get_html('https://hss3uro2hsxfogfq.onion.to/index.php?q='.urlencode($search).'&session='.$nevil_session.'&start='.strval((int)$page_no*100).'&numRows=100&hostLimit=100');
					
					
			//		$ol_torch2 = $html_torch2->find('dl');
					$ol_nevil2 = $html_nevil2->find('p');
										
			//		$len_torch2 = count($ol_torch2);
					$len_nevil2 = count($ol_nevil2);
					
			//		$i_torch2 = 0;
					$i_nevil2 = 1;
										
					while(TRUE)
					{
						if (/*$i_torch2 >= $len_torch2 &&*/ $i_nevil2 >= $len_nevil2) break;
						
				/*		if ($i_torch2 < $len_torch2)
						{
						  $dt2 = $ol_torch2[$i_torch2]->find('dt');
						  $dd2 = $ol_torch2[$i_torch2]->find('dd');
						  
						  $i_torch2++;
						  
						  $title = preg_replace(array('/<span[^>]*>/', '/<\/span>/'), array('', ''), substr($dt2[0]->innertext, 5));

							if(preg_match('/<a[^>]*>(.*?)<\/a>/', $dd2[0]->innertext, $match))
							{
								$cite = $match[1];
							}
							if(preg_match('/<small>(.*?)<\/small>/', $dd2[0]->innertext, $match))
							{
								$body = strip_tags($match[1]);
							}
							
							echo '<div class="result">';
							echo	'<h4>' . $title . '</h4>';
							echo	'<div class="cite">' . $cite . '</div>';
							echo	'<span>' . $body . '</span>';
							echo '</div>';
						}
					*/	
						if ($i_nevil2 < $len_nevil2)
						{
							  $html = $ol_nevil2[$i_nevil2++]->innertext;

							  if(preg_match('/<a(.*?)<\/a>/', $html, $match))
							  {
								  $title = $match[0];
							  }
							  if(preg_match('/<span style="color:black;">(.*?)<\/span>/', $html, $match))
							  {
								  $cite = $match[1];
							  }
							  if(preg_match('/<\/span><br \/>(.*)/', $html, $match))
							  {
								  $body = $match[1];
							  }

							  echo '<div class="result">';
							  echo		'<h4>' . $title . '</h4>';
							  echo		'<div class="cite">' . $cite . '</div>';
							  echo		'<span>' . $body . '</span>';
							  echo '</div>';
						}			  
					}
				}
			?>
            <div class="page_go">
			<?php
				$first_page = $this->config->base_url() . 'index.php/welcome2/results?page=1&search=' . $search;

				$next_page_no = isset($_GET['page']) ? $_GET['page'] + 1 : 2;
				$next_page = $this->config->base_url() . 'index.php/welcome2/results?page=' . $next_page_no . '&search=' . $search;

				$prev_page_no = (isset($_GET['page']) && $_GET['page'] > 1) ? $_GET['page'] - 1 : 1;
				$prev_page = $this->config->base_url() . 'index.php/welcome2/results?page=' . $prev_page_no . '&search=' . $search;
			?>
				<a href="<?php echo $first_page;?>"><div class="first_i"></div></a>
				<a href="<?php echo $prev_page;?>"><div class="prev_i"></div></a>
				<a href="<?php echo $next_page;?>"><div class="next_i"></div></a>
            </div>                 
		</div>
	</div>
</body>
</html>
