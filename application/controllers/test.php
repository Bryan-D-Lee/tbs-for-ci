<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');


class Test extends CI_Controller 
{


	public function __construct()
	{
		
		$this->load->helper('url');
		
	} 
    
	
	public function index()
	{
	 
	 	$content[] = array(
                        'sayhello'=> 'hello from tbs template engine',
                        'title' => 'TBS Extension for CodeIgniter',
                        'author' => 'Veedeoo and Geegler',
						'testing'=> 'testing tbs class',
						$this->tbs->view($content,$this->config->item('theme_path_tbs').'test.tpl');
	}
	

}

/* End of file test.php */
/* Location: .application/controllers/test.php */
