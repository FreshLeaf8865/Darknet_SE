<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome2 extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
		$this->load->view('myViews/view');
		$this->load->helper('url');
if(isset($_POST['keyword']))
{
$value=$_POST['keyword'];
$html = file_get_html('https://ahmia.fi/search/?q='.$value.'');
foreach($html->find('ol li h4 a') as $e) {
	//echo $e;
	if(strip_tags($e) != "Proxy"){
?> <a href="http://192.168.1.10/sarupam/CodeIgniter/?q=<?php echo strip_tags($e); ?>"  ><?php echo strip_tags($e); ?></a><br><?php
}
}
 exit;
}



	}
	
	
	public function results()
	{
		$this->load->view('myViews/view2');
	}
	

}
