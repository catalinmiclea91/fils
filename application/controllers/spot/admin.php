<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/**
 * Created by JetBrains PhpStorm.
 * User: p.florian91
 * Date: 5/6/13
 * Time: 1:28 AM
 * To change this template use File | Settings | File Templates.
 */
class Admin extends Fils_Layout_Controller
{
    public function index()
    {
        $this->add_view('spot/home');

        $this->title = 'Admin fils';
        $this->meta_description = 'No index, No folow!';

        $this->admin_render();
    }
}
/* End of file admin.php */
/* Location: ./application/controllers/spot/admin.php */