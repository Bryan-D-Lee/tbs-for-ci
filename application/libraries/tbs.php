<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');


require_once(APPPATH.'libraries/tbs/tbs_class.php');

class CI_Tbs extends clsTinyButStrong
{
	public function __construct()
	{
		parent::__construct();
		
		$CI = get_instance();
        $CI->load->config('tbs');
        
        $this->SetOption( array(
				'chr_open'=>config_item('left_delimiter'), 
				'chr_close'=>config_item('right_delimiter')
				) 
			);
						
         if ( method_exists( $this, 'assignByRef') )
        {
            $ci =& get_instance();
            $this->assignByRef("ci", $ci);
        }
	}
	
	public function view($data=array(),$template)
	{
		parent::LoadTemplate(config_item('theme_path_tbs') . $template);
		parent::MergeBlock('content',$data);
        parent::Show();
		return true;
       
	}
	
   
}

/* End of file tbs.php */
/* Location: ./application/libraries/tbs.php */
