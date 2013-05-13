<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Fils_Layout_Controller extends Fils_Base_Controller
{
	private $data = array();
	private $views = array();
    protected $title;
    protected $meta_description;

    public $admin_is_logged;

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
		$this->data[ $viewname ][ key($data) ] = $data[ key($data) ];
	}

	public function render()
	{
        $head_data = array();
        $head_data['title'] = $this->title;
        $head_data['meta_description'] = $this->meta_description;

		$this->load->view('layout/head', $head_data);
		$this->load->view('layout/header');

		foreach($this->views as $key => $value)
		{
            if( !empty($this->data[$value]) && $this->data[$value] != null )
            {
                $data_value = $this->data[$value];
                $this->load->view($value, $this->data[$value]);
            }
			else
			{
				$this->load->view($value);
			}
		}

		$this->load->view('layout/footer');
	}

    public function admin_render()
    {
        $this->load->library('form_validation');

        $head_data = array();
        $head_data['title'] = $this->title;
        $head_data['meta_description'] = $this->meta_description;
        $head_data['admin_is_logged'] = $this->admin_is_logged;

        $this->load->view('spot/layout/header', $head_data);

        foreach($this->views as $key => $value)
        {
            if( !empty($this->data[$value]) && $this->data[$value] != null )
            {
                $data_value = $this->data[$value];
                $this->load->view($value, $this->data[$value]);
            }
            else
            {
                $this->load->view($value);
            }
        }

        $this->load->view('spot/layout/footer');
    }

}

/* End of file Fils_Layout_Controller.php */
/* Location: ./application/controllers/Fils_Layout_Controller.php */