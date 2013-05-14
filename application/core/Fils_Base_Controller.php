<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Fils_Base_Controller extends CI_Controller
{

    protected $load_session = true;
    protected $load_helper_url = true;
    public $load_helper_language = true;

    public $language;

	public function __construct()
	{
		parent::__construct();
		$this->_before();
	}

	/**
	 * @function:       _before()
	 * @type:            private
	 * @mapped url:
	 * @parameters:
	 * @return:
	 */
	private function _before()
	{
		$this->load->library('session');
		$this->load->helper('url');

        if($this->load_helper_language)
        {
            $this->_switchLanguage();   // set the language
            $this->config->set_item('language', $this->language);
            $this->load->helper('language');
            $this->lang->load('generic');
        }

	}

    private function _switchLanguage()
    {
        $session_language = $this->session->userdata('language');
        switch($session_language)
        {
            case 'english':
                $this->language = 'english';
                break;
            case 'french':
                $this->language = 'french';
                break;
            case 'deutsch':
                $this->language = 'deutsch';
                break;
            default:
                $this->language = 'romanian';
                $this->session->set_userdata('language','romanian');
        }
    }


}
/* End of file Fils_Base_Controller.php */
/* Location: ./application/controllers/Fils_Base_Controller.php */