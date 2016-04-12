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
<link href="<?php echo base_url(); ?>css/bootstrap.css" rel="stylesheet">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>css/style.css" />
<link href='//fonts.googleapis.com/css?family=Helvetica+Neue:light,bold' rel='stylesheet' type='text/css'>

<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script src="<?php echo base_url(); ?>js/bootstrap.min.js"></script>

<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
<script src="<?php echo base_url(); ?>js/script.js"></script>
</head>
<body>
<!--div class="panel panel-default" style="border-color:white;">
  <div class="panel-heading" style="border-color:white;"-->
  <div class="header-wrapper">
	  <div class="header-link link">
		<ul class="header-menu" style="display:inline;">
			<li><a href="<?php echo base_url();?>index.php/privacy">Privacy Policy</a></li>
			<li><a href="<?php echo base_url();?>index.php/terms">Terms & Conditions</a></li>
			<li><a href="*">Feedbacks</a></li>
			<li><a href="*">Donations</a></li>
		</ul>
	  </div>
	  <div class="header-search">
		<div class = "col-md-12 form-container">
			<div class="row">
				<div class="word">
					<span class="header-text"><h1>Mother</h1><br></span>
						<form method="post" action="">
							<div class="col-md-12">
								<div class="form-group-sub search">
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
	  </div>
  </div>
  <div class="content-wrapper">
	<div class="content-text">
	
	
		<h1>Terms & Conditions</h1>


<p>These Terms and Conditions (hereinafter, referred to as the “Terms”) for the website http://______ (hereinafter, referred  to  as the “Website”)  constitute  a  legal  agreement  between  the  user  (“you”, “your”, “user”)  of  the Website  and  __________  having  a  registered  address  at  _______________ (hereinafter, referred to as the “Company”). By using the  Website, you acknowledge that you have read the Terms and agree to be bound by them. If you do not agree to the Terms, please do not use the Website. The Company grants you the right touse the Website only in the case that you agree to the Terms.  1. Personal use of the Website 
1.1 The Website is created by the Company and licensed to you for personal use only and must not be used for commercial purposes whatsoever or for any illegal purpose. By using the Website, you must agree to abide by the applicable laws.<p> 



<h2>2. Company’s Content</h2>
 
<p>2.1  The Website contains intellectual property materials that are owned by the Company (hereinafter, referred  to as “Company’s Content”). Such materials include, but are not limited to, text, images, and source code.  Company’s Content is intellectual property of the Company. Company’s Content is protected by the  intellectual property law of the United States of America and the applicable international intellectual property laws.

2.2 Unless explicitly allowed in the Terms, you may not: (i)  copy Company’s  Content; (ii) distribute Company’s Content; (iii)  adapt, translate, reverse engineer, make alterations, decompile, disassemble  or  make  derivative  works  based  on  Company’s  Content;  (iv)  use, rent,  loan, sub-license, lease, distribute or attempt to grant other rights to Company’s Content to third parties. </p>



<h2>3. Sensible use of the Website</h2> 

<p>3.1  You'll not use the Website in an unauthorized manner or in a manner which encourages any kind of illegal activity. You agree not to use the Website to:<br>
	<ul class = "sensible">
		<li><p>Violate the applicable laws;</p><li>
		<li><p>Cause harm to any individual or business entity;</p><li>
		<li><p>Disturb the operations of the Company;</p><li>
		<li><p>Transmit or promote anything from the Company's behalf that is fraudulent, abusive, or contains 
    slanderous, 
    obscene or otherwise objectionable material;</p><li>
		<li><p>Spread  malware,  including, but not limited to, trojan horses, viruses, worms or other software that 
    can alter, interrupt, impede, limit or destroy the performance and/or functioning of any software,   
    hardware, or other equipment;</p><li>
		<li><p>Promote the use of alcohol and tobacco; and</p><li>
		<li><p>Promote the use of illegal drugs or any other illegal subst
    ances.</p><li>
	</ul>
 
<br> 




<h2>4. Third Party Materials</h2> 

<p>4.1 The search results generated by the Website refer to materials which are not owned, endorsed, or approved by the Company (hereinafter, referred to as the “Third Party Materials”). The Third Party Materials are owned by their respective authors. The Third Party Materials should not necessarily be relied upon. The authors of the Third Party Materials are solely responsible for the accuracy of the Third Party Materials. 

4.2 The Company does not guarantee the accuracy, completeness, or usefulness of any Third Party Materials. The Company is not responsible for the accuracy or reliability of any opinion, advice or statement made in the Third Party Materials. Under no circumstances will the Company be responsible for any loss or damage resulting from anyone's reliance on the Third Party Materials. </p>



<h2>5. Support queries </h2>

<p>5.1 If you would like to send a support query to us, please send an email to admin@searcher.plus . </p>



<h2>6. Availability </h2>

<p>6.1 The Company will use reasonable efforts to make the Website available at all times. However, you acknowledge that the Website is provided over the Internet and so the quality and availability of the Website may be affected by factors outside our reasonable control. The Company does not accept any responsibility for unavailability of the Website due to bandwidth problems, equipment failure, or acts of God.  </p>



<h2>7. Your warranty to the Company</h2>
 
<p>7.1 You represent and warrant that: (i) you have the authority to bind yourself to these Terms; (ii) you will use the Website only for purposes that are permitted by these Terms; (iii)  your use of the Website will comply with all applicable laws; (iv) you are at least 13 years of age.</p> 



<h2>8. Release of Liability</h2>
  
<p>8.1 The Company is in no way responsible or liable for harms or illegal actions resulting in potential losses for third parties as a result of activities or connections made through the Website. 
By agreeing to these Terms, you agree not to hold the Company liable for any illicit actives orpotential harms resulting from activities facilitated through the use of the Website. </p>



<h2>9. Indemnity</h2> 

<p>9.1 You  will  indemnify,  defend,  and  hold  harmless  the  Company,  its  agents,  directors,  officers, employees, and third parties, for any costs, expenses, losses, and liabilities relating to or arising out of your use of the Third Party Materials.</p>



<h2>10. Changes</h2>
  
<p>10.1  We reserve all the rights to change or modify the Terms at our own discretion from time to time. In  case  of  any  material  revision  of  the  Terms, the Company will make efforts to notify its users prior to any new term coming to its effect. However, the Company will not be liable in case it fails to do so. It's up to Company's discretion to determine the changes it wants to implement.  </p>



<h2>11. Link to other websites</h2>  

<p>11.1  The search results generated by the Website may contain links to other websites. The Company takes no responsibility for the practices of these third-party websites. The Company does not endorse them and will not be liable for any damage or loss of any kind it causes to the visitor. </p> 



<h2>12. Termination </h2>

<p>12.1 The Company at its sole discretion can terminate or suspend the access of the Website giving prior notice to its users. Upon any termination, all the  rights and licenses issued to you will also terminate and you must cease all use of the Website. Also, any liability or obligation incurred shall survive till termination only.  </p>



<h2>13. Governing law </h2>

<p>13.1  The  Terms  shall  be  governed  by  the  laws  of  the  U.S.  state of  __________.  You irrevocably consent to the exclusive jurisdiction and venue of the courts in  the  U.S.  state  of  _______  for  all disputes arising out of or relating to these Terms. </p>



<h2>14. Disclaimer</h2>

<p>14.1 You agree to use the Website at your own risk. In no caseshall the Company's owner, director, officers, employees, suppliers, contractors, service providers or licensor be held responsible for any injury, loss, harm, direct,  indirect or consequential damages of any kind arising out of your use of the Website.</p>  



<h2>15. Contact us</h2> 

<p>15.1 If you would like to contact us for any reason (including complaints), please send an email to admin@searcher.plus.</p> 



<h2>16. Last amendment</h2>  

<p>16.1 These Terms have been last amended on 18th of March 2016.</p>
	</div>
  </div>
  
 
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
	<div class="bottom-blank"></div>
<!--<div class="panel panel-default" style="border-color:white;">
  <div class="panel-heading" style="border-color:white;">-->
  <div class="bottom-link">
	<ul class="header-menu bottom-menu" style="display:inline;">
		<li>Copyright 2016 Mother Inc. All rights reserved.</li>
		<li>Term and conditions-</li>
		<li><a href="*">Privacy Policy-</a></li>
		<li><a href="*">About-</a></li>
		<li><a href="*">Feedbacks-</a></li>
		<li><a href="*">Donations</a></li>
	</ul>
	<div class="footer-text">
		<h1>Mother</h1>
	</div>
  </div>
 </div>

</div>


</body>
</html>

