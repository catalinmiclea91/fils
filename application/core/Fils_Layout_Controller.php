<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Fils_Layout_Controller extends Fils_Base_Controller
{
	private $data = array();
	private $views = array();

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
	private function _before(){	}


	/**
	 * @function:       add_view($view)
	 * @access:         public
	 * @mapped url:     -
	 * @parameters:     $view, $data = null
	 * @return:         -
	 */
	public function add_view($view, $data = null)
	{
		if ( !is_null($view) )
		{
			if ( file_exists( APPPATH.'views/'.$view.'.php' ) )
			{
				if($data != null)
				{
					$this->setData($view, $data);
					$this->setView($view);
				}
				else
				{
					$this->setView($view);
				}
			}
			else
			{
				show_404('CM_Layout::add_view() - the view provided does not exist!', TRUE);
			}
		}
		else
		{
			show_404('CM_Layout::add_view() - null view provided!', TRUE);
		}
	}

	private function setView($view)
	{
		$this->views[ count($this->views) + 1 ] = $view;
	}

	private function setData($viewname, $data)
	{
		$this->data[ $viewname ] = $data;
	}


	public function render()
	{
		$this->load->view('layout/head');
		$this->load->view('layout/header');

		foreach($this->views as $key => $value)
		{
			if( !empty($this->data[$value]) && $this->data[$value] != null )
			{
				//var_dump($this->data[$value]);
				$this->load->view($value, $this->data[$value]);
			}
			else
			{
				$this->load->view($value);
			}
		}

		$this->load->view('layout/footer');
	}

}

/* End of file Fils_Layout_Controller.php */
/* Location: ./application/controllers/Fils_Layout_Controller.php */