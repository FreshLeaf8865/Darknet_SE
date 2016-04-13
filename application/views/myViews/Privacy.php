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
					<span class="header-text"><h1>Mother</h1></span>
						<form method="post" action="<?php echo $this->config->base_url();?>index.php/welcome2/results">
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
<div class = "col-md-10 container">
  <div class="content-wrapper">
	<div class="content-text">
	
	
		<h1>Privacy Policy</h1>


<p>Mother, a U.S. company, having a registered office at _____________ (hereinafter, referred to as the “Company”, “us”, “we”, “our”) collects from the individual user (hereinafter, referred to as “you” or “your”) certain personal  information through the website  http://____and the associated services  (hereinafter, referred to as the “Website”). This Privacy Policy explains Company’s procedures related to the collection and processing of personal information through the Website. 
<p> 



<h2>1. Personal information collected by us </h2>
 
<p>1.1  If you send us a support query to admin@_.com, the Company will collect the following personal information from you: (1) email address; (2) and other information you decide to provide us.</p>



<h2>2. The purpose of collection of personal information</h2> 

<p>2.1 The personal information collected through the Website is used only: to reply to your support queries; to comply with lawful governmental requests and/or lawful requests by the police investigating suspected illegal activities. 

2.2 We collect and process your personal information only for the achievement of one or more of the aforementioned purposes.
  
2.3 We do not create data profiles of users. We do not use your  personal  information  for 
marketing purposes. 
 
2.4 In case we are compelled by law, subpoena, or other legal process, whether in the United States, Canada, Australia or other jurisdictions, we will attempt to notify you about the legal demands for your personal information, unless prohibited by law, court, or a governmental institution. In case we believe that the requests are overbroad, lack proper authority, or vague, we may, at our sole discretion, dispute such legal demands.
Please be aware that we do not commit to challenge every legal demand.  
</p>
 
<br> 




<h2>3. Protection of personal information</h2> 

<p>3.1 We use information security tools (e.g., secured networks and encryption) in order to protect your personal information. 

3.2 We follow commercially reasonable management practices to help protect the security, integrity, and confidentiality of your personal information. Although no computer system is completely secure, we believe that
the measures implemented by us will reduce the likelihood of information security problems.  

3.3 Please remember that any information you transfer over the Internet may be intercepted by others and used in unscrupulous ways. We have absolutely no control over your Internet connection. 
 </p>



<h2>4. Accessing and correcting your personal information</h2>

<p>4.1 You have the right to access, delete, or modify your personal information collected by the Company. You    can do so by sending an email to the following email address admin@_.com. We will respond to your request within two weeks. 
</p>



<h2>5. Retention Period
</h2>

<p>5.1 We will keep your personal information for as long as it is necessary to respond to your support query. 

5.2 If your personal information is no longer necessary for responding to your support query, we will keep it for a maximum of one year in identifiable form.
</p>



<h2>6. Third parties</h2>
 
<p>6.1 Unless we are compelled by law to do so, we will not disclose your personal information to third parties. 

6.2 We will not rent or sell your personal information to third parties without your prior written consent.</p> 



<h2>7. Your consent</h2>
  
<p>7.1 By using the Website and the services provided through the Website, you hereby consent to our collection and processing of your personal information in accordance with this Privacy Policy. For the purposes of this Privacy Policy, the term “processing” refers to collection, storage, deletion, use, and disclosure of information.</p>



<h2>8. Links</h2> 

<p>8.1 Please note that the Website may contain links to third party websites. We hereby disclaim any liability in relation to the privacy practices of other websites. 
</p>



<h2>9. Cookies</h2>
  
<p>9.1 We do not use cookies.</p>



<h2>10. Accuracy</h2>  

<p>10.1 We do not assume responsibility for the accuracy of any personal information submitted to us.</p> 



<h2>11. Children</h2>

<p>11.1 We do not collect or process information from persons we actually know are under the age of 13 years.
 
11.2 No part of the Website is structured to attract anyone under the age of 13 years. 

11.3 Parents should be aware of the existence of parental control tools available on the Internet which  they  can  use to prevent their children from: (i) submitting information online without parental permission; and (ii)accessing material that is inappropriate for children.
 
11.4 If you believe that your child has provided us with personal information, please send us an email to admin@searcher.plus . 
</p>



<h2>12. Place of data processing</h2>

<p>12.1 If you are located in Australia, Canada, the European Union, or elsewhere outside of the United States, please be informed that the personal information collected by us will transferred to and processed in the United States. 
</p>



<h2>13. Acquisition or Merger </h2>

<p>13.1 In case we are involved in acquisition, merger, or sale of all or portion of our assets, we will post a notice on the Website indicating the change in ownership as well as any choices you may have regarding your personal information. 
</p>  



<h2>14. Jurisdiction </h2> 

<p>14.1 This Privacy Policy shall be construed in accordance with the laws of the State of California, the United States of America. </p> 



<h2>15. Contact details</h2>  

<p>15.1 If you would like to ask us any questions about this Privacy Policy, please send us an email to
admin@_.com. 
</p>
<h2>16. California User Consumer Rights
</h2>  

<p>16.1 Pursuant to California Civil Code Section 1789.3, users of the Website residing in California are entitled to know that they may file complaints and grievances with California Department of Consumer Affairs, 400 R Street, STE 1080, Sacramento, CA 95814; or by phone at 916-445-1254 or 800-952-5210; or by email to dca@dca.ca.gov. If you would like to know more about protecting your privacy, please visit http://www.ftc.gov . 

16.2 If you are a resident of California, California Civil Code Section 1798.83 allows you to request us information about the disclosure of your personal information to third parties for the third parties’ direct  marketing purposes. To make such a request, please send us an email to admin@searcher.plus.  

</p>
<h2>17. Amendments </h2>  

<p>17.1 We may update this Privacy Policy from time to time. In case we update this Privacy Policy, we will revise the date specified in Section 18 of this Privacy Policy. We encourage you to frequently check our Privacy Policy for any updates. You are solely responsible to periodically review this Privacy Policy.  
 
</p>
<h2>18. Last amendment </h2>  

<p>18.1 This Privacy Policy was amended for the last time on 20th of March 2016.
</p>
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
    </div>
</div>
    <div class="container">
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
             </div>
    </div>
</body>
</html>

