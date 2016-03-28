<?php
defined('BASEPATH') OR exit('No direct script access allowed');
include('simple_html_dom.php');
?>
<style>
.input {
    background: none repeat scroll 0 0 transparent;
    border: 0 none;
    font-size: 21px;
    height: 37px;
    margin-left: 10px;
    margin-top: 6px;
    width:90%;
outline: medium none !important;
}
.mid {
  background: none repeat scroll 0 0 #eeeeee;
    height: 60px;
    width: 100%;
float:left;
}
body *{font-family: 'Open Sans', sans-serif !important;}
body {
    float: left;
    margin: 0;
    width: 100%;
min-height:670px; 
background:#ffffff;
}
.button {
   background: none repeat scroll 0 0 transparent;
    border: 0 none;
    cursor: pointer;
    float: right;
    font-size: 21px;
    height: 45px;
    margin-top: 5px;
    width: 9%;
color:#0081F9;
}
form {
    width: 100%;
}




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
<div class="mid">
	<form method="post" action="">
			<input onfocus="this.placeholder = ''" onblur="this.placeholder = 'Type your Query here'" type="text" id="q" name="search" class="input" placeholder="Type your Query here" value="<?php echo isset($_POST['search']) ? $_POST['search'] : '' ?>">
			<input type="submit" name="button" value="Search" class="button">
	</form>
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
						
								<a href="http://clientdemoonline.com/deepweb/index.php/Welcome2/results?page=<?php echo $i ;?>&value=<?php echo $value ;?>">
							<?php echo $i;?></a>
						<?php
							}
					
	}
						?>
					</div>	
		</div>
</div>
