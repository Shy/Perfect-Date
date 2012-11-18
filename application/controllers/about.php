<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class About extends CI_Controller {

  /**
   * About Page for The Date Night main site.
   */
  public function index() {
    $this->load->healper(array('url'));
    $this->load->view('header_view');
    $this->load->view('about_view');
    $this->load->view('footer_view');
  }
}

/* End of file about.php */
/* Location ./application/controllers/about.php */