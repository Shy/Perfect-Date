<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Thedatenight extends CI_Controller {

  /**
   * Index Page for The Date Night main site.
   * For now this is just a page with options,
   * that will direct to a results page.
   */
  public function index() {

    $this->load->helper(array('form', 'url'));
    $this->load->library('form_validation');

    /* Load the option select view */
    $this->load->view('option_select_view');

  }

  /**
   * Results Page after options are selected.
   * This page will list the best date options, given the parameters.
   */
  public function results() {

    /* Load needed libraries */
    $this->load->helper(array('form', 'url'));
    $this->load->library('form_validation');

    /* Validate email */
    $this->form_validation->set_rules('email', 'Email', 'trim|required|valid_email');

    /* Check if the form is valid */
    if ($this->form_validation->run() == FALSE) {

      /* Form is invalid, return to the last page */
      $this->load->view('option_select_view');

    } else {

      //TODO: use the options from _POST to get the best results from the db
      $data['email'] = $_POST['email'];

      /* Load the view to display the best options */
      $this->load->view('results_view', $data);
    }
  }

}

/* End of file thedatenight.php */
/* Location ./application/controllers/thedatenight.php */