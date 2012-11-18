<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Thedatenight extends CI_Controller {

  /**
   * Index Page for The Date Night main site.
   * For now this is just a page with options,
   * that will direct to a results page.
   */
  public function index() {

    /* Load needed libraries */
    $this->load->helper(array('form', 'url'));
    $this->load->library('form_validation');

    /* Load the option select view */
    $this->load->view('option_select_view');

  }

  public function so_option_select() {

    /* Load needed libraries */
    $this->load->helper(array('form', 'url'));
    $this->load->library('form_validation');

    /* Load the significant other select view */
    $this->load->view('so_option_select_view', $_POST);

  }

  /**
   * Results Page after options are selected.
   * This page will list the best date options, given the parameters.
   */
  public function results() {

    /* Load needed libraries */
    $this->load->helper(array('form', 'url'));
    $this->load->library('form_validation');

    /* Grab all entries for now */
    //$restaurant_query = $this->db->query('SELECT * FROM restaurant');
    //    $event_query = $this->db->query('SELECT * FROM event');

    //    foreach($restaurant_query->result() as $restaurant) {
    //      $restaurant;
    //    }

    /* Load the view to display the best options */
    $this->load->view('results_view', $_POST);
  }

}

/* End of file thedatenight.php */
/* Location ./application/controllers/thedatenight.php */