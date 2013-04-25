<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Functions extends Fils_Base_Controller
{

	public function __construct()
	{
		parent::__construct();
	}

	public function setLanguage($language, $segment1, $segment2 = '', $segment3 = '')
	{
		$newdata = array(
			'language'  => $language
		);
		$this->session->set_userdata($newdata);

        $url = $segment1;
        if($segment2 != '')
        {
            $url .= '/'.$segment2;
        }
        if($segment3 != '')
        {
            $url .= '/'.$segment3;
        }

        redirect($url, 'refresh');
	}

}

/* End of file home.php */
/* Location: ./application/controllers/home.php */